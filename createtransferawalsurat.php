<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Data Invoice</title>
<?php

session_start();

include "koneksi.php";

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
if (!isset($_POST["passwd"])) {
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
//print '<br><br><input name="Button" type="Button" onClick="javascript:history.back();return false" value="KEMBALI">&nbsp;&nbsp;&nbsp;' . "\n";

die();
	
}

#mysql_connect("localhost",$uname,$pwd);
# query the users table for name and surname 
$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
 
$now = time(); // Checking the time now when home page starts.
$_SESSION['expire'] = $_SESSION['start'] + ($menit * 60);
if (isset($_SESSION['expire'])) {
	if ($now > $_SESSION['expire']) {
		unset($_SESSION['username']); 
		unset($_SESSION['passwd']); 
		unset($_SESSION['perusahaanid']); 
		unset($_SESSION['tahun']); 
		$_SESSION['statuslogin'] = 7;//session expired
?>
<script>
window.top.location.href = "index.php"; 
</script>
<?php
die;
	}
}

if ($row_cnt > 0) {
	$_SESSION['statuslogin'] = 0;
?>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<?php
}
else  {
	$_SESSION['statuslogin'] = 8; //user not found in database or unauthorized
?>

<?php
}
?>
</head>
<body>
<?php

//Get perusahaan info and tahun buku
//----------------------------------------------------------------
if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];
//----------------------------------------------------------------
if (!isset($_POST["perusid"])) {
	$perushid=0;
}
else
	$perushid=$_POST["perusid"];
//----------------------------------------------------------------
if (!isset($_POST["tahuna"])) {
	$tahun=0;
}
else
	$tahun=$_POST["tahuna"];
//----------------------------------------------------------------
if (!isset($_POST["batcha"])) {
	$batch=0;
}
else
	$batch=$_POST["batcha"];
//----------------------------------------------------------------

//

//Get userID
	$sqla = "SELECT * FROM user WHERE username='" . $uname . "';";
	$resa = mysqli_query($link, $sqla);
	$jmlrowa = 0;
	if ($resa) {
		$jmlrowa = $resa->num_rows;
	}
	if ($jmlrowa > 0) {
		while ($rowa = mysqli_fetch_array ($resa, MYSQLI_ASSOC)) {
			$userid = $rowa['ID'];
		}
	}

	$Time = microtime(true);
// RETUR
	createta($userid, $link, $perushid, $tahun, $batch);
	echo 'Time: '.(microtime(true) - $Time);
		
//error_reporting(E_ALL);
set_time_limit(0);			



mysqli_close($link);
$_SESSION['start'] = time(); // Taking now logged in time.

?>
<meta http-equiv="refresh" content="0; url=bayarawal.php?id=<?php echo $perushid;?>&userid=<?php echo $userid;?>&tahun=<?php echo $tahun;?>&batch=<?php echo $batch;?>" />
<?php

//*****************************************************************************************
//********************************** F U N C T I O N S  ***********************************
//*****************************************************************************************
//
//-----------------------------------------------------------------------------------------
function createta($userid, $link, $perushid, $tahunku, $batch)
{
/*
 * PHP Excel - Read a simple 2007 XLSX Excel file
 */

/** Set default timezone (will throw a notice otherwise) */
date_default_timezone_set('America/Los_Angeles');

	$tgl = date('Y-m-d');

	error_reporting(E_ALL ^ E_NOTICE);
	
	require_once './PHPWord/PHPWord.php';

//Query data TRF, ESA1, BNI1
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND jenisesop='ESA1' AND jenisbank='BNI1'" . ");";
echo $sql . "<br>";
	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$count11 = $row['jmlcount'];
			$nominal11 = $row['nominal'];
		}
	}	
//Query data TRF, ESA1, BNI2
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND jenisesop='ESA1' AND jenisbank='BNI2'" . ");";
	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$count12 = $row['jmlcount'];
			$nominal12 = $row['nominal'];
		}
	}	
//Query data TRF, ESA1, LAIN
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND jenisesop='ESA1' AND jenisbank='LAIN'" . ");";
	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$count13 = $row['jmlcount'];
			$nominal13 = $row['nominal'];
		}
	}
//Query data TRF, ESA2, BNI1
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND jenisesop='ESA2' AND jenisbank='BNI1'" . ");";
	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$count21 = $row['jmlcount'];
			$nominal21 = $row['nominal'];
		}
	}
//Query data TRF, ESA2, BNI2
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND jenisesop='ESA2' AND jenisbank='BNI2'" . ");";
	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$count22 = $row['jmlcount'];
			$nominal22 = $row['nominal'];
		}
	}
//Query data TRF, ESA2, LAIN
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND jenisesop='ESA2' AND jenisbank='LAIN'" . ");";
	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$count23 = $row['jmlcount'];
			$nominal23 = $row['nominal'];
		}
	}
//Query data TRF, PUB, BNI1
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND jenisesop='PUB' AND jenisbank='BNI1'" . ");";
	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$count31 = $row['jmlcount'];
			$nominal31 = $row['nominal'];
		}
	}
//Query data TRF, PUB, BNI2
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND jenisesop='PUB' AND jenisbank='BNI2'" . ");";
	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$count32 = $row['jmlcount'];
			$nominal32 = $row['nominal'];
		}
	}	
//Query data TRF, PUB, LAIN
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND jenisesop='PUB' AND jenisbank='LAIN'" . ");";
	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$count33 = $row['jmlcount'];
			$nominal33 = $row['nominal'];
		}
	}
//Query data TRF, PUB, SCB
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND jenisesop='PUB' AND jenisbank='SCB'" . ");";
	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$count34 = $row['jmlcount'];
			$nominal34 = $row['nominal'];
		}
	}
echo $count33 . "-" . $nominal33;
	$count11 = formatnumber($count11);
	$nominal11 = formatnumber(round($nominal11));
	$count12 = formatnumber($count12);
	$nominal12 = formatnumber(round($nominal12));
	$count13 = formatnumber($count13);
	$nominal13 = formatnumber(round($nominal13));
	$count21 = formatnumber($count21);
	$nominal21 = formatnumber(round($nominal21));
	$count22 = formatnumber($count22);
	$nominal22 = formatnumber(round($nominal22));
	$count23 = formatnumber($count23);
	$nominal23 = formatnumber(round($nominal23));
	$count31 = formatnumber($count31);
	$nominal31 = formatnumber(round($nominal31));
	$count32 = formatnumber($count32);
	$nominal32 = formatnumber(round($nominal32));
	$count33 = formatnumber($count33);
	$nominal33 = formatnumber(round($nominal33));
	$count34 = formatnumber($count34);
	$nominal34 = formatnumber(round($nominal34));
	
	$PHPWord = new PHPWord();
	$namafilet = "./TEMPLATE/Template_SuratkeJPU_Kirim_perintah_awal_transfer.docx";
	$document = $PHPWord->loadTemplate($namafilet);
	//$document = new TemplateProcessor('./TEMPLATE/' . $namafilet . '.docx');
	$namafileout = "./OUTPUT/SuratkeJPU_Kirim_perintah_awal_transfer_" . $tahunku . "_" . $batch . ".docx";
	$tglday = date('d');
	$tglday = $tglday * 1;
	$tglbulan = date('m');
	$tgltahun = date('Y');
	$bulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
	$tglbulanstr = $bulan[$tglbulan-1];
	$tglku = $tglday . " " . $tglbulanstr . " " . $tgltahun;

	$document->setValue('jmldevesa1bni1', $count11);
	$document->setValue('nominaldevesa1bni1', $nominal11);
	$document->setValue('jmldevesa1bni2', $count12);
	$document->setValue('nominaldevesa1bni2', $nominal12);
	$document->setValue('jmldevesa1lain', $count13);
	$document->setValue('nominaldevesa1lain', $nominal13);
	$document->setValue('jmldevesa2bni1', $count21);
	$document->setValue('nominaldevesa2bni1', $nominal21);
	$document->setValue('jmldevesa2bni2', $count22);
	$document->setValue('nominaldevesa2bni2', $nominal22);
	$document->setValue('jmldevesa2lain', $count23);
	$document->setValue('nominaldevesa2lain', $nominal23);
	$document->setValue('jmldevpubbni1', $count31);
	$document->setValue('nominaldevpubbni1', $nominal31);
	$document->setValue('jmldevpubbni2', $count32);
	$document->setValue('nominaldevpubbni2', $nominal32);
	$document->setValue('tgkp', $tglku);
	$document->setValue('tahun', $tahunku);
	$document->setValue('tglmulai', $tglku);
	//$document = $PHPWord->loadTemplate($namafileout);
	//$namafileout = "./OUTPUT/SuratkeJPU_Kirim_perintah_awal_transfer_" . $tahunku . ".docx";

	$document->setValue('jmlpln', $count33);
	$document->setValue('nomplain', $nominal33);
	$document->setValue('jmlpscb', $count34);
	$document->setValue('nompscb', $nominal34);

	$document->save($namafileout);

//unlink($newnameku);
}

//--------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------

function formatnumber($number)
{
	$numberku = $number * 1;
	$lenno = strlen($numberku);
	$mynum = "";
	$i = $lenno;
	$j = 0;
	while ($i > 2) 
	{
		$j++;
		$i = $i - 3;
		$ratusan = substr($numberku,$i,3);
		if ($j == 1)
			$mynum = $ratusan;
		else
			$mynum = $ratusan . "." . $mynum;
	}
	if (($i <= 2) && ($i > 0))
		$mynum = substr($numberku,0,$i) . "." . $mynum;

	return $mynum;
}
//---------------------------------------------------------------------------------------------

?>
</body> 

<?php

//*******************************************************************************************************

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['perusahaanid'] = $perushid;
	$_SESSION['namaperusahaan'] = $namaperus;
	$_SESSION['tahun'] = $tahun;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;



//*******************************************************************************************************

?>
</html>