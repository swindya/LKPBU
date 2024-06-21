<?php

include "koneksi.php";

//----------------------------------------------------------------------------
if (!isset($_GET["tahun"])) {
	if (!isset($_POST["tahun"])) 
		$tahun = "0";
	else
		$tahun=$_POST["tahun"];
}
else
	$tahun=$_GET["tahun"];
//----------------------------------------------------------------------------
if (!isset($_GET["batch"])) {
	if (!isset($_POST["batch"])) 
		$batch = "0";
	else
		$batch=$_POST["batch"];
}
else
	$batch=$_GET["batch"];
//----------------------------------------------------------------------------
if (!isset($_GET["sppd"])) {
	if (!isset($_POST["sppd"])) 
		$sppd = "0";
	else
		$sppd=$_POST["sppd"];
}
else
	$sppd=$_GET["sppd"];
//----------------------------------------------------------------------------
if (!isset($_GET["noretur"])) {
	if (!isset($_POST["noretur"])) 
		$noretur = "0";
	else
		$noretur=$_POST["noretur"];
}
else
	$noretur=$_GET["noretur"];
//----------------------------------------------------------------------------

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
//print '<br><br><input name="Button" type="Button" onClick="javascript:history.back();return false" value="KEMBALI">&nbsp;&nbsp;&nbsp;' . "\n";

die();
	
}

$query = "SELECT * FROM telkomdatindo WHERE tahun=" . $tahun . " AND batchtahun=" . $batch . " AND sppd='" . $sppd . 
		"' AND jenisbayar='TRF';";

$row_cnt = 0;
$aa = "";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt==0) {

	echo "Data Pembayaran Awal dari SPPD bersangkutan tidak ada. Harap periksa data anda !";
	
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$telkomidku = $row['ID'];
		$namaku = $row['nama1'];
		$bayarku = $row['bayar'];
		$jenisbankku = $row['jenisbank'];
		$jenisesopku = $row['jenisesop'];
		$namabankku = $row['namabank'];
		$norekdbku = $row['norekdb'];
		$norekkdku = $row['norekkd'];
		$noaccku = $row['noacc1'];		
	}
	echo "$aa|$namaku|$bayarku|$jenisbankku|$jenisesopku|$namabankku|$norekdbku|$norekkdku|$noaccku|$telkomidku";
}

?>