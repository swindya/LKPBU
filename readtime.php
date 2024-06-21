<?php
include "koneksi.php";

ini_set('max_execution_time', 5000); //300 seconds = 5 minutes

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

$link = mysqli_connect($db_hostname, $db_username, $db_password);
	$tahun = 2013;
	$batch = 1;
	$jesop = "ESA1";
	$sql = "SELECT * FROM telkomdatindo WHERE tahun=" . $tahun . 
			" AND batchtahun=" . $batch . " AND jenisbayar='TRF' AND jenisbank='LAIN' AND jenisesop='" . $jesop . "' ORDER BY namabank ASC;";
	$rs = mysqli_query($link, $sql);
	$jmlr = 0;
	$i = 0;
	$statushapus = 0;
	if ($rs) {
		$jmlr = $rs->num_rows;
	}
	if ($jmlr > 0) {
		while ($row = mysqli_fetch_array ($rs, MYSQLI_ASSOC)) {
			$i++;
			$sppdku[$i] = $row['sppd'];
			$norekdbku = $row[$norekdb];
			$namaku[$i] = $row['namaacc1'];
				$namaku[$i] = str_replace("\\","", $namaku[$i]);
				$namaku[$i] = str_replace("'","\'", $namaku[$i]);	
			$noaccku[$i] = $row['noacc1'];
			$alamat1ku[$i] = $row['alamat1'];
				$alamat1ku[$i] = str_replace("\\","", $alamat1ku[$i]);
				$alamat1ku[$i] = str_replace("'","\'", $alamat1ku[$i]);
			$namabankku[$i] = strtoupper($row['namabank']);
			$nominalku[$i] = $row['bayar'];
			$tstamp = $row['timestamp'];
			$filearr = explode(" ", $tstamp);
			$tglstr = $filearr[0];
			$tglarr = explode("-", $tglstr);
			$waktustr = $filearr[1];
			$waktuarr = explode(":", $waktustr);
			$tstamp = $tglarr[0] . $tglarr[1] . $tglarr[2] . $waktuarr[0] . $waktuarr[1];
			if ($filestamp !== $tstamp && $statusfile==1) {
				$statushapus = 1;
			}
		}
	}
	$jmldata = $i;
?>