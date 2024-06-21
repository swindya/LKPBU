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
if (!isset($_GET["userid"])) {
	$userid=$_SESSION["userid"];
}
else
	$userid=$_GET["userid"];
//-------------------------------------------------
if (!isset($_GET["picid"])) {
	$picid=0;
}
else
	$picid=$_GET["picid"];
//-------------------------------------------------

if ($uname==0 && $userid==0)
{
?>
<script>
window.top.location.href = "index.php"; 
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
if ($userid == 0)
	$query = "SELECT * FROM user WHERE username=" . $uname . ";";
else
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
//echo $query . "<br>";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
		$uname = $row['username'];
		$userid = $row['ID'];
	}
}
//---------------------------------------------------------------------------------------------------

//Query dulu...apakah data sudah ada di database
$sql0 = "SELECT * FROM perusahaanlainlainpic WHERE ID=" . $picid . ";";
$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
		$perushid = $row['perusahaanID'];
		$namafile = $row['namafile'];
		$filepath = $row['filepath'];
	}
}

if ($row_cnt > 0) {
	$sql = "DELETE FROM perusahaanlainlainpic WHERE ID=" . $picid . ";";
	$result = mysqli_query($link,$sql);
//----------------------------------------------------
	$myfile = "./DOC/LAINLAIN/" . $namafile;
	unlink($myfile);
// Log trail -------------------------------
	$dataku = $perushid . "|" . $namafile . "|" . "/DOC/LAINLAIN/";
	$sql1 = "INSERT INTO mylog (userid, username, perusahaanID, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . ",'" . $uname .
			"'," . $perushid . ",now(),'del', '" . $dataku . "');";

	$res = mysqli_query($link,$sql1);
	
	$namaf = "./DOC/LAINLAIN/" . $namafile;

	unlink($namaf);
//------------------------------------------
	if ($result) {
		echo "Data sudah dihapus";
	}
	else
		echo "Data tidak bisa dihapus. Mungkin data sudah tidak ada. Cek kembali data !";
}
else
	echo "Data tidak bisa ditambahkan. Cek/periksa kembali data !";

mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['username'] = $uname;
$_SESSION['passwd'] = $pwd;
$_SESSION['start'] = time(); // Taking now logged in time.

?>

