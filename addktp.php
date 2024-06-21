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
if (!isset($_GET["nama"])) {
	$nama="";
}
else
	$nama=$_GET["nama"];
//-------------------------------------------------
if (!isset($_GET["nomorktp"])) {
	$nomorktp="";
}
else
	$nomorktp=$_GET["nomorktp"];
//-------------------------------------------------
if (!isset($_GET["alamat"])) {
	$alamat="";
}
else
	$alamat=$_GET["alamat"];
//-------------------------------------------------
if (!isset($_GET["jabatan"])) {
	$jabatan="";
}
else
	$jabatan=$_GET["jabatan"];
//-------------------------------------------------
if (!isset($_GET["tgllahir"])) {
	$tgllahir="";
}
else
	$tgllahir=$_GET["tgllahir"];
//-------------------------------------------------
if (!isset($_GET["tglexpire"])) {
	$tglexpire="";
}
else
	$tglexpire=$_GET["tglexpire"];
//-------------------------------------------------

if ($uname=0 || $pwd=0)
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
<meta http-equiv="refresh" content="0; url=login.php" />
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
		$userid = $row['ID'];
	}
}
//---------------------------------------------------------------------------------------------------

//Query dulu...apakah data sudah ada di database
$sql0 = "SELECT * FROM perusahaanktp WHERE (nama='" . $nama . "' AND nomorktp='" . $nomorktp . "');";

$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}


if ($row_cnt == 0) {
	$sql = "INSERT INTO perusahaanktp (nama, alamat, nomorktp, jabatan, tgllahir, tglexpire, createduser, createddate) VALUES('" . 
			$nama . "','" . $alamat . "','" . $nomorktp . "','" . $jabatan . "','" . $tgllahir . "','" . $tglexpire . "'," . 
			$userid . ",'" . date('Y-m-d H:i:s') . "');";
//echo $sql;
	$result = mysqli_query($link,$sql);
// Log trail -------------------------------
	$dataku = $nama . "|" . $alamat . "|" . $nomorktp . "|" . $jabatan . "|" . $tgllahir . "|" . $tglexpire;
	$sql1 = "INSERT INTO mylog (userid, username, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . ",'" . $uname .
			"','" . date('Y-m-d H:i:s') . "','add', '" . $dataku . "');";
	$res = mysqli_query($link,$sql1);
//------------------------------------------
	if ($result) {
		echo "Data sudah ditambahkan";
	}
	else
		echo "Data tidak bisa ditambahkan. Mungkin data udah ada. Cek kembali data !";
}
else
	echo "Data tidak bisa ditambahkan. Cek/periksa kembali data !";

mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['username'] = $uname;
$_SESSION['passwd'] = $pwd;
$_SESSION['start'] = time(); // Taking now logged in time.

?>

<meta http-equiv="refresh" content="0; url=perusahaanktp.php" />
