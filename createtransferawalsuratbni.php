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
if (!isset($_POST["perusahaanid"])) {
	$perushid=0;
}
else
	$perushid=$_POST["perusahaanid"];
//--------------------------------------------------------------------
if (!isset($_POST["tahuna"])) {
	$tahun=0;
}
else
	$tahun=$_POST["tahuna"];
//----------------------------------------------------------------------
if (!isset($_POST["batcha"])) {
	$batch=0;
}
else
	$batch=$_POST["batcha"];
//----------------------------------------------------------------------
if (!isset($_POST["perusid"])) {
	$perusid=$_GET["perusid"];
}
else
	$perusid=$_POST["perusid"];
//-------------------------------------------------------------
if (!isset($_GET["userid"])) {
	$userid=$_POST["userid"];
}
else
	$userid=$_GET["userid"];
//-------------------------------------------------------------

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
	createta($userid, $link, $perusid, $tahun);
	echo 'Time: '.(microtime(true) - $Time);
		
//error_reporting(E_ALL);
set_time_limit(0);			



mysqli_close($link);
$_SESSION['start'] = time(); // Taking now logged in time.

?>
<meta http-equiv="refresh" content="0; url=bayarawal.php?id=<?php echo $perusid;?>&userid=<?php echo $userid;?>&tahun=<?php echo $tahun;?>&batch=<?php echo $batch;?>" />
<?php

//*****************************************************************************************
//********************************** F U N C T I O N S  ***********************************
//*****************************************************************************************
//
//-----------------------------------------------------------------------------------------
function createta($userid, $link, $perushid, $tahunku)
{
/*
 * PHP Excel - Read a simple 2007 XLSX Excel file
 */

/** Set default timezone (will throw a notice otherwise) */
date_default_timezone_set('America/Los_Angeles');

	$tgl = date('Y-m-d');

	error_reporting(E_ALL ^ E_NOTICE);
	
	require_once './PHPWord/PHPWord.php';

//Query data LLG BNI
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM bni WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND (jenisbank='none' OR jenisbank LIKE '%BNI%')" . ");";
//echo $sql . "<br>";
	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$countbni = $row['jmlcount'];
			$nominalbni = $row['nominal'];
		}
	}	
//Query data TRF, ESA1, BNI2
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM bni WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND (jenisbank<>'BNI' AND jenisbank<>'none')" . ");";
	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$countlain = $row['jmlcount'];
			$nominallain = $row['nominal'];
		}
	}	
//Query data TRF, ESA1, LAIN
	$sql = "SELECT count(ID) AS jmlcount, sum(bayar) AS nominal FROM bni WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahunku . 
			" AND jenisbayar='TRF' AND jenisbank='SCB'" . ");";

	$res = mysqli_query($link, $sql);
	$jmlrowa = 0;
	$statusdata = 0;
	if ($res) {
		$jmlrow = $res->num_rows;
	}
	if ($jmlrow > 0) {
		while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
			$countscb = $row['jmlcount'];
			$nominalscb = $row['nominal'];
		}
	}

	$jmldatatotal = $countbni + $countlain + $countscb;
	$jmlnominaltotal = $nominalbni + $nominallain + $nominalscb;
	
//echo $count33 . "-" . $nominal33;
	$count11 = formatnumber($count11);
	$nominal11 = formatnumber(round($nominal11));
	$count12 = formatnumber($count12);
	$nominal12 = formatnumber(round($nominal12));
	$count13 = formatnumber($count13);
	$nominal13 = formatnumber(round($nominal13));

	$PHPWord = new PHPWord();

	$namafilet = "./TEMPLATE/Template_Surat_Pengantar_Dividen_ke_WEN.docx";
	$document = $PHPWord->loadTemplate($namafilet);

	//$document = new TemplateProcessor('./TEMPLATE/' . $namafilet . '.docx');
	$namafileout = "./OUTPUT/AWAL/Surat_Pengantar_Dividen_ke_WEN_BNI_" . $tahunku . ".docx";

	$tglday = date('d');
	$tglday = $tglday * 1;
	$tglbulan = date('m');
	$tgltahun = date('Y');
	$bulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
	$tglbulanstr = $bulan[$tglbulan-1];
	$tglku = $tglday . " " . $tglbulanstr . " " . $tgltahun;

	$document->setValue('jmldatabni', $countbni);
	$document->setValue('jmlnominalbni', number_format($nominalbni,0));
	$document->setValue('jmldatalain', $countlain);
	$document->setValue('jmlnominallain', $nominallain);
	$document->setValue('jmldatascb', $countscb);
	$document->setValue('jmlnominalscb', $nominalscb);
	
	$jmlnomtotal = $nominalbni + $nominallain + $nominalscb;
	$jmldatatotal = $countbni + $countlain + $countscb;
	
	$document->setValue('tgkp', $tglku);
	$document->setValue('tahun', $tahunku);
	$document->setValue('tglmulai', $tglku);
	
	$document->setValue('jmlnominal', $jmlnomtotal);
	$document->setValue('jmldata', $jmldatatotal);
	$document->setValue('jmlntotal', $jmlnomtotal);
	$document->setValue('jmldatatotal', $jmldatatotal);
	
	$totalterbilang = terbilang($jmlnomtotal);
	$document->setValue('terbilang', $totalterbilang);

	
	//$document = $PHPWord->loadTemplate($namafileout);
	//$namafileout = "./OUTPUT/SuratkeJPU_Kirim_perintah_awal_transfer_" . $tahunku . ".docx";

	$document->save($namafileout);

//unlink($newnameku);
}

//--------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------
function terbilang($x)
{
  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  if ($x < 12)
    return " " . $abil[$x];
  elseif ($x < 20)
    return Terbilang($x - 10) . "belas";
  elseif ($x < 100)
    return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
  elseif ($x < 200)
    return " seratus" . Terbilang($x - 100);
  elseif ($x < 1000)
    return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
  elseif ($x < 2000)
    return " seribu" . Terbilang($x - 1000);
  elseif ($x < 1000000)
    return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000);
  elseif ($x < 1000000000)
    return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000);
}
//----------------------------------------------------------------------------------------------
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