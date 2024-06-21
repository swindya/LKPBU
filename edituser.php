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
	$userid=$_SESSION["userid"];
}
else
	$userid=$_POST["userid"];
//-------------------------------------------------
if (!isset($_POST["namaedit"])) {
	$nama=$_SESSION["namaedit"];
}
else
	$nama=$_POST["namaedit"];
//-------------------------------------------------
if (!isset($_POST["usernameedit"])) {
	$username=$_SESSION["usernameedit"];
}
else
	$username=$_POST["usernameedit"];
//-------------------------------------------------
if (!isset($_POST["passwdedit"])) {
	$passwd=$_SESSION["passwdedit"];
}
else
	$passwd=$_POST["passwdedit"];
//-------------------------------------------------
if (!isset($_POST["passwd1edit"])) {
	$passwd1=$_GET["passwd1edit"];
}
else
	$passwd1=$_POST["passwd1edit"];
//-------------------------------------------------
if (!isset($_POST["levelidedit"])) {
	$levelid=$_GET["levelidedit"];
}
else
	$levelid=$_POST["levelidedit"];
//-------------------------------------------------
if (!isset($_POST["useridedit"])) {
	$usid=$_GET["useridedit"];
}
else
	$usid=$_POST["useridedit"];
//-------------------------------------------------


//Сheck that we have a file
$valstr = "";
$jmlfile = 0;
$jj=0;
$mm=0;
$statusku = 0;

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
		$unameku = $row['username'];
	}
}
//---------------------------------------------------------------------------------------------------

//Query dulu...apakah data sudah ada di database
$sql0 = "SELECT * FROM user WHERE ID=" . $usid . ";";

$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
		$unameku = $row['username'];
	}
}



$sql = "UPDATE user SET nama='" . $nama . "', username='" . $username . "', pwd=PASSWORD('" . $passwd . "'), levelid=" . $levelid .
		" WHERE ID=" . $usid . ";";
//echo $sql . "<br>";
$result = mysqli_query($link,$sql);

// Log trail -------------------------------
$dataku = "user|" . $nama . "|" . $username . "|" . "*****" . "|" . $levelid;
	$sql1 = "INSERT INTO mylog (userid, username, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . ",'" . $uname .
			"',now(),'add', '" . $dataku . "');";
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

<meta http-equiv="refresh" content="0; url=mainuser.php?userid=<?php echo $userid?>'" />
