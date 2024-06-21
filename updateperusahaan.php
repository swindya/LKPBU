<?php
session_start();

include "koneksi.php";

if (!isset($_SESSION["username"])) {
	$uname=0;
}
else
	$uname=$_SESSION["username"];
//--------------------------------------------
if (!isset($_SESSION["passwd"])) {
	$pwd=0;
}
else
	$pwd=$_SESSION["passwd"];
//--------------------------------------------
if (!isset($_GET["userid"])) {
	$userid=$_SESSION["userid"];
}
else
	$userid=$_GET["userid"];
//--------------------------------------------
if (!isset($_GET["id"])) {
	$id=$_SESSION["id"];
}
else
	$id=$_GET["id"];
//--------------------------------------------
if (!isset($_GET["nama"])) {
	$nama=$_SESSION["nama"];
}
else
	$nama=$_GET["nama"];
//--------------------------------------------
if (!isset($_GET["jenis"])) {
	$jenis=$_SESSION["jenis"];
}
else
	$jenis=$_GET["jenis"];
//--------------------------------------------

if ($uname=0 || $pwd=0)
{
?>
<script>
window.top.location.href = "index.php"; 
</script>
<?php
}

$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}
// Select the datbase.
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
if ($userid==0)
	$query = "SELECT * FROM user WHERE username='" . $uname . "';";
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
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
		$userid = $row['ID'];
	}
}
//---------------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------------
// Get nama perusahaan
# query the users table for name and surname 
$query = "SELECT * FROM perusahaan WHERE id=" . $id . ";";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$namaold = $row['nama'];
		$jenisold = $row['jenisusaha'];
	}
}
//---------------------------------------------------------------------------------------------------
if ($row_cnt>0) {
	$sql = "UPDATE perusahaan SET nama='" . $nama . "', jenisusaha='" . $jenis . "' WHERE ID=" . $id . ";";
	$result = mysqli_query($link,$sql);
// Log trail -------------------------------
	$sql1 = "INSERT INTO mylog (userid, perusahaanID, username, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . "," . 
			$perusid . ",'" . $uname . "','" . date('Y-m-d H:i:s') . "','update', 'perusahaan|" . $namaold . "|" . $jenisold . "|" . $nama . "|" . $jenis . "');";
	$res = mysqli_query($link,$sql1);
//------------------------------------------
	if ($result) {
		echo "Data sudah di-upate";
	}
	else
		echo "Data tidak bisa di-update. Cek/periksa kembali data !";
}
else
	echo "Data tidak ada. Cek/periksa kembali data !";

mysqli_close($link);

?>
