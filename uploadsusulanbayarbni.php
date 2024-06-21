<?php
session_start();


include "koneksi.php";

if (!isset($_GET["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_GET["username"];
//-------------------------------------------------
if (!isset($_GET["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//-------------------------------------------------
if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];
//-------------------------------------------------
if (!isset($_POST["id"])) {
	$perusid=0;
}
else
	$perusid=$_POST["id"];
//-------------------------------------------------
//-------------------------------------------------

if (!isset($_POST["datepicker-example1a"])) {
	$tgl="";
}
else
	$tgl=$_POST["datepicker-example1a"];
//-------------------------------------------------
if (!isset($_POST["bniid"])) {
	$bniid=$_GET["bniid"];
}
else
	$bniid=$_POST["bniid"];
//-------------------------------------------------
if (!isset($_POST["susulid"])) {
	$susulid=$_GET["susulid"];
}
else
	$susulid=$_POST["susulid"];
//-------------------------------------------------

//Сheck that we have a file
$valstr = "";
$jmlfile = 0;
$jj=0;
$mm=0;
$statusku = 0;

if ($uname=0 || $pwd=0)
{
?>
<script>
//window.top.location.href = "index.php"; 
</script>
<?php
}
//-------------------------------------------------

$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}
// Select the database.
$db_selected = mysqli_select_db($link, $db_database);
if (!$db_selected) {
    //die ('Can't use database : ' . mysqli_error());
?>
<script>
window.top.location.href = "index.php"; 
</script>
<?php
die();	
}
//---------------------------------------------------------------------------------------------------
// Get user
# query the users table for name and surname 
if ($userid==0 || $userid==null)
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
else 
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
	}
}
//---------------------------------------------------------------------------------------------------
	
	$sql1 = "UPDATE bnisusulan SET tglbayar='" . $tgl . "', statustransfer=1 WHERE ID=" . $susulid . ";";
echo $sql1 . "<br>";
	$result = mysqli_query($link,$sql1);
	
	$sql1 = "UPDATE bni SET statusbayar=1 WHERE ID=" . $susulid . ";";
	$result = mysqli_query($link,$sql1);
	
// Log trail -------------------------------
	$dataku = "BNISUSULANBAYAR|tgltrf:" . $tgl . "|susulanid:" . $susulid;
	$sql1 = "INSERT INTO mylog (userid, username, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . ",'" . $uname .
			"',now(),'ADD', '" . $dataku . "');";
//echo $sql1 . "<br>";
	$res = mysqli_query($link,$sql1);
//------------------------------------------
	if ($result) {
		echo "Data sudah ditambahkan";
	}
	else
		echo "Data tidak bisa ditambahkan. Mungkin data udah ada. Cek kembali data !";


mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['username'] = $uname;
$_SESSION['passwd'] = $pwd;
$_SESSION['start'] = time(); // Taking now logged in time.

?>

<meta http-equiv="refresh" content="0; url=susulan.php?id=<?php echo $perusid?>&userid=<?php echo $userid?>" />
