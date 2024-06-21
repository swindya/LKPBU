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
if (!isset($_GET["nocek"])) {
	if (!isset($_POST["nocek"])) 
		$nocek = "0";
	else
		$nocek=$_POST["nocek"];
}
else
	$nocek=$_GET["nocek"];
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

$query = "SELECT * FROM gudanggaram WHERE tahun=" . $tahun . " AND batchtahun=" . $batch . " AND nomorcek='" . $nocek . 
		"' AND jenisbayar='CEK';";
//echo $query;
$row_cnt = 0;
$aa = "";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt==0) {

	//echo "Data Pembayaran Awal dari SPPD bersangkutan tidak ada. Harap periksa data anda !";
	//echo "";
	
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$namaku = $row['nama'];
		$atasnamaku = $row['atasnama'];
		$nominalku = $row['netto'];
		$jenisbankku = $row['jenisbank'];
		$jenisesopku = $row['jenisesop'];
		$nomorcekku = $row['nomorcek'];
	}
	echo "$aa|$namaku|$atasnamaku|$nominalku|$nomorcekku";
}

?>