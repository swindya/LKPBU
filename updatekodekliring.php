<?php
session_start();
include "koneksi.php";

$id = $_GET['id'];
$kode = $_GET['kode'];
$namabank = $_GET['namabank'];
$jenisusaha = $_GET['jenisusaha'];

if (!isset($_GET["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_GET["username"];
if (!isset($_GET["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];

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

$sql = "UPDATE kodekliring SET kode='" . $kode . "', namabank='" . $namabank . "', jenisusaha=" . $jenisusaha . " WHERE ID=" . $id . ";";
$result = mysqli_query($link,$sql);
// Log trail -------------------------------
	$sql1 = "INSERT INTO mylog (userid, perusahaanID, username, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . "," . 
			$perusid . ",'" . $uname . "','" . date('Y-m-d H:i:s') . "','update', 'kodekliring|" . $namaold . "|" . $jenisold . "|" . $nama . "|" . $jenis . "');";
	$res = mysqli_query($link,$sql1);
//------------------------------------------

if ($result) {
?>
	Data fakturid: &nbsp;<?php print $fakturidmu;?> sudah di-update
<?php
}

mysqli_close($link);

?>

<meta http-equiv="refresh" content="1; url=settingbank.php" />