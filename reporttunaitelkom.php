<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php

?>

<link rel="stylesheet" href="checkbox2style.css"/>
<style type="text/css">
	label {margin-right:20px;}
	.cb-styles table{float:left; width:200px; padding-left:25px; font-family:sans-serif;}
	table td, table th{padding:0px 10px 5px 0px; text-align:left;}
</style>
<style type="text/css">
	/*this is just to organize the demo checkboxes*/
	label {margin-right:20px;}
</style>
<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
</style>
<style>
.button, .button:visited {
background-color: #222;
display: inline-block;
padding: 5px 10px 6px;
color: #fff;
text-decoration: none;
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
border-bottom: 1px solid rgba(0,0,0,0.25);
position: relative;
cursor: pointer;
font-family: calibri;
}
.button:hover {
background-color: #111;
color: #fff;
} .button:active {
top: 1px;
} 
.small.button, .small.button:visited {
font-size: 11px
} 
.button, .button:visited,
.medium.button, .medium.button:visited {
font-size: 13px;
font-weight: bold;
line-height: 1;
text-shadow: 0 -1px 1px rgba(0,0,0,0.25); 
} 
.medium.button, .medium.button:visited {
font-size: 14px;
padding: 8px 14px 9px;
} 
.large.button, .large.button:visited {
font-size: 34px;
padding: 8px 14px 9px;
} 
.pink.button, .magenta.button:visited {
background-color: #e22092;
} 
.pink.button:hover {
background-color: #c81e82;
} 
.green.button, .green.button:visited {
background-color: #91bd09;
} 
.green.button:hover {
background-color: #749a02;
} 
.red.button, .red.button:visited {
background-color: #e62727;
}
.red.button:hover {
background-color: #cf2525;
}
.orange.button, .orange.button:visited {
background-color: #ff5c00;
} 
.orange.button:hover {
background-color: #d45500;
}
.blue.button, .blue.button:visited {
background-color: #2981e4;
}
.blue.button:hover {
background-color: #2575cf;
}
.yellow.button, .yellow.button:visited {
background-color: #ffb515;
}
.yellow.button:hover {
background-color: #fc9200;
} 
</style>
<script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_polaris',
    radioClass: 'iradio_polaris',
    increaseArea: '-10%' // optional
  });
});
</script>
<style> 
  .textbox { 
    border: 1px solid #c4c4c4; 
    height: 16px; 
    width: 220px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 4px; 
    box-shadow: 0px 0px 4px #d9d9d9; 
    -moz-box-shadow: 0px 0px 4px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 4px #d9d9d9; 
} 
 
.textbox:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
} 
 </style> 
 <style> 
  .textboxtgl { 
    border: 1px solid #c4c4c4; 
    height: 16px; 
    width: 100px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 4px; 
    box-shadow: 0px 0px 4px #d9d9d9; 
    -moz-box-shadow: 0px 0px 4px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 4px #d9d9d9; 
} 
 
.textboxtgl:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
} 
 </style> 
<style>
.menu1,
.menu1 ul,
.menu1 li,
.menu1 a {
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
}
 
.menu1 { /*Find this class in the css file*/

height: 40px;
width: 100%; /*I changed this to a percentage of the page,*/
margin-left:auto; /*Then added these two margin styles.*/
margin-right:auto;

background: #4c4e5a;
background: -webkit-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
background: -moz-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
background: -o-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
background: -ms-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
background: linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);

-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}
 
.menu1 li {
    position: relative;
    list-style: none;
    float: left;
    display: block;
    height: 40px;
}
.menu1 li a {
    display: block;
    padding: 0 14px;
    margin: 6px 0;
    line-height: 28px;
    text-decoration: none;
 
    border-left: 1px solid #393942;
    border-right: 1px solid #4f5058;
 
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold;
    font-size: 13px;
 
    color: #f3f3f3;
    text-shadow: 1px 1px 1px rgba(0,0,0,.6);
 
    -webkit-transition: color .2s ease-in-out;
    -moz-transition: color .2s ease-in-out;
    -o-transition: color .2s ease-in-out;
    -ms-transition: color .2s ease-in-out;
    transition: color .2s ease-in-out;
}
 
.menu1 li:first-child a { border-left: none; }
.menu1 li:last-child a{ border-right: none; }
 
.menu1 li:hover > a { color: #ffffff; 
  background: #ff9122;
  background: -moz-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffba5b), color-stop(100%, #fd6522));
  background: -webkit-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -o-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -ms-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: linear-gradient(to bottom, #ffba5b 0%, #fd6522 100%);
}
.menu1 li.active > a{
  background: #ff9122;
  background: -moz-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffba5b), color-stop(100%, #fd6522));
  background: -webkit-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -o-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -ms-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: linear-gradient(to bottom, #ffba5b 0%, #fd6522 100%);
}
.menu1 ul {
    
    position: absolute;
    top: 40px;
    left: 0;
 
    opacity: 50;
    background: #1f2024;
 
    -webkit-border-radius: 0 0 5px 5px;
    -moz-border-radius: 0 0 5px 5px;
    border-radius: 0 0 5px 5px;
 
    -webkit-transition: opacity .25s ease .1s;
    -moz-transition: opacity .25s ease .1s;
    -o-transition: opacity .25s ease .1s;
    -ms-transition: opacity .25s ease .1s;
    transition: opacity .25s ease .1s;

}
 
.menu1 li:hover > ul { opacity: 50; }
 
.menu1 ul li {
    height: 0;
    overflow: hidden;
    padding: 0;
 
    -webkit-transition: height .25s ease .1s;
    -moz-transition: height .25s ease .1s;
    -o-transition: height .25s ease .1s;
    -ms-transition: height .25s ease .1s;
    transition: height .25s ease .1s;
}
 
.menu1 li:hover > ul li {
    height: 36px;
    overflow: visible;
    padding: 0;
}
.menu1 ul li a {
    width: 200px;
    padding: 4px 0 4px 16px;
    margin: 0;
 
    border: none;
    border-bottom: 1px solid #353539;
}
 
.menu1 ul li:last-child a { border: none; 
}
.menu1 a.documents { background: url(../img/docs.png) no-repeat 6px center; }
.menu1 a.messages { background: url(../img/bubble.png) no-repeat 6px center; }
.menu1 a.signout { background: url(../img/arrow.png) no-repeat 6px center;
}
</style>
</head>
<body>
<?php
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
//----------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//----------------------------------------------------
if (!isset($_GET["userid"])) {
	$userid=$_POST["userid"];
}
else
	$userid=$_GET["userid"];
//----------------------------------------------------


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
if ($userid==0 || $userid==null)
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
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
		$i++;
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
	}
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
<script>
//window.top.location.href = "index.php"; 
</script>
<?php
}
?>

<?php
//---------------------------------------------
if (!isset($_GET["id"])) {
	$perushid=$_POST["id"];
}
else
	$perushid=$_GET["id"];
//---------------------------------------------
if (!isset($_POST["tahun"])) {
	$tahun=$_SESSION["tahun"];
}
else
	$tahun=$_POST["tahun"];
//---------------------------------------------
if (!isset($_POST["batch"])) {
	$batch=0;
}
else
	$batch=$_POST["batch"];
//---------------------------------------------
if (!isset($_POST["tahunbuku"])) 
	$tahunbuku=0;
else
	$tahunbuku=$_POST["tahunbuku"];
//---------------------------------------------
if (!isset($_POST["cari"])) 
	$cari="none";
else
	$cari=$_POST["cari"];
//---------------------------------------------
if (!isset($_POST["cbpub"])) 
	$cbpub=false;
else
	$cbpub=$_POST["cbpub"];
//---------------------------------------------
if (!isset($_POST["cbtunai"])) 
	$cbtunai=false;
else
	$cbtunai=$_POST["cbtunai"];
//---------------------------------------------
if (!isset($_POST["cbtransfer"])) 
	$cbtransfer=false;
else
	$cbtransfer=$_POST["cbtransfer"];
//---------------------------------------------
if (!isset($_POST["cbesa1"])) 
	$cbesa1=false;
else
	$cbesa1=$_POST["cbesa1"];
//---------------------------------------------
if (!isset($_POST["cbesa2"])) 
	$cbesa2=false;
else
	$cbesa2=$_POST["cbesa2"];
//---------------------------------------------
if (!isset($_POST["cbbni"])) 
	$cbbni=false;
else
	$cbbni=$_POST["cbbni"];
//---------------------------------------------
if (!isset($_POST["cblain"])) 
	$cblain=false;
else
	$cblain=$_POST["cblain"];
//---------------------------------------------
if (!isset($_POST["cbscb"])) 
	$cbscb=false;
else
	$cbscb=$_POST["cbscb"];
//---------------------------------------------
if (!isset($_POST["cbselesai"])) 
	$cbselesai=0;
else
	$cbselesai=$_POST["cbselesai"];
//---------------------------------------------
if (!isset($_POST["cbretur"])) 
	$cbretur=0;
else
	$cbretur=$_POST["cbretur"];
//---------------------------------------------
if (!isset($_POST["tahunbuku1"])) 
	$tahunbuku1=0;
else
	$tahunbuku1=$_POST["tahunbuku1"];
//---------------------------------------------
if (!isset($_POST["tahunbuku2"])) 
	$tahunbuku2=0;
else
	$tahunbuku2=$_POST["tahunbuku2"];
//---------------------------------------------
if (!isset($_POST["batch1"])) 
	$batch1=0;
else
	$batch1=$_POST["batch1"];
//---------------------------------------------
if (!isset($_POST["batch2"])) 
	$batch2=0;
else
	$batch2=$_POST["batch2"];
//---------------------------------------------

# query the users table for name and surname 
$query = "SELECT * FROM perusahaan WHERE ID=" . $perushid . ";";
$row_cnt = 0;
$namaperus = "none";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$namaperus = $row['nama'];
	}
}
$counti = $i;

$bayarstr = "";
$bankstr = "";
$esopstr = "";
//--------------------------------------------------------------------------------
if ($cbpub || $cbesa1 || $cbesa2)
	$esopstr = " AND (";
else
	$esopstr = "";

if ($cbpub)
	$esopstr = $esopstr . " jenisesop='PUB' ||";

if ($cbesa1)
	$esopstr = $esopstr . " jenisesop='ESA1' ||";

if ($cbesa2)
	$esopstr = $esopstr . " jenisesop='ESA2' ||";

if ($cbpub || $cbesa1 || $cbesa2)
	$esopstr = $esopstr . " jenisesop='ESU')";
else
	$esopstr = " AND jenisesop='PBUP'";
//--------------------------------------------------------------------------------
if ($cbtunai || $cbtransfer)
	$bayarstr = " AND (";
if ($cbtunai)
	$bayarstr = $bayarstr . "jenisbayar='TUN' ||";
if ($cbtransfer)
	$bayarstr = $bayarstr . " jenisbayar='TRF' ||";
if ($cbtunai || $cbtransfer)
	$bayarstr = $bayarstr . " jenisbayar='AAA')";
else
	$bayarstr = " AND jenisbayar='PIYE'";

//--------------------------------------------------------------------------------
if ($cbbni || $cblain || $cbscb)
	$bankstr = " AND (";

if ($cbbni)
	$bankstr = $bankstr . " jenisbank LIKE '%BNI%' ||";

if ($cblain)
	$bankstr = $bankstr . " jenisbank='LAIN' ||";

if ($cbscb)
	$bankstr = $bankstr . " jenisbank='SCB' ||";

if ($cbbni || $cblain || $cbscb)
	$bankstr = $bankstr . " jenisbank='AAA')";
else
	if ($cbtunai)
		$bankstr = "";
	else
		$bankstr = " AND jenisbank='MBUH'";
//--------------------------------------------------------------------------------
if ($cbselesai || $cbretur)
	$statusbayarstr = " AND (";
if ($cbselesai)
	$statusbayarstr = $statusbayarstr . " statusbayar=1 ||";
if ($cbretur)
	$statusbayarstr = $statusbayarstr . " statusbayar=2 ||";
if ($cbselesai || $cbselesai)
	$statusbayarstr = $bayarstr . " statusbayar=10)";
else
	$statusbayarstr = " AND statusbayar >= 0";

//--------------------------------------------------------------------------------
$batchstr="";
if ($tahunbuku1==0 && $tahunbuku2==0) {
	$tahunbukustr = " AND (tahun >= 2006) ";
	$batchstr = " AND (batchtahun > 0) ";
}
if ($tahunbuku1==$tahunbuku2 && $tahunbuku1>0) {
	$tahunbukustr = " AND tahun=" . $tahunbuku1;
	if ($batch1 <> $batch2)
		$batchstr = " AND batchtahun BETWEEN " . $batch1 . " AND " . $batch2 . " ";
}
if ($tahunbuku1 > 0 && $tahunbuku2==0) {
	$tahunbukustr = " AND tahun=" . $tahunbuku1 . " ";
	$batchstr = " AND batchtahun = " . $batch1 . " ";
}
if ($tahunbuku2 > 0 && $tahunbuku1==0) {
	$tahunbukustr = " AND tahun=" . $tahunbuku2 . " ";
	$batchstr = " AND batchtahun = " . $batch2 . " ";
}	
if ($tahunbuku1 > 0 && $tahunbuku2 > 0)
	$tahunbukustr = " AND (tahun BETWEEN " . $tahunbuku1 . " AND " . $tahunbuku2 . ")";

if ($batch1==0 && $batch2==0)
	$batchstr = " AND batchtahun >= 0 ";

if ($cari=="none" || strlen($cari)<2)
	$caristr = "";
else {
	if ($cbbni || $cblain || $cbscb)
		$bankstr = $bankstr;
	else
		$bankstr = "";
	if ($cbesa1 || $cbesa2 || $cbpub)
		$esopstr = $esopstr;
	else
		$esopstr = "";
	if ($cbtunai || $cbtransfer)
		$bayarstr = $bayarstr;
	else
		$bayarstr = "";
	
	$caristr = " AND (sppd LIKE '%" . strtoupper($cari) . "%' OR nama1 LIKE '%" . strtoupper($cari) . 
			"%' OR nik LIKE '%" . strtoupper($cari) . "%' OR namabank LIKE '%" . strtoupper($cari) . "%' OR noacc1 LIKE '%" . strtoupper($cari) . "%')";
}

//echo $tahunbuku1 . "-" . $tahunbuku2 . "<br>";
$sql0 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . $tahunbukustr . $batchstr . $caristr . $esopstr . $bayarstr . 
		$bankstr . $statusbayarstr . ") ORDER BY tahun DESC;";
//echo $sql0;
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow==0) {
	$i=0;
}
else if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$namai[$i] = $row['nama1'];
		$sppdi[$i] = $row['sppd'];
		$nikku[$i] = $row['nik'];
		$alamat1ku[$i] = $row['alamat1'];
		$alamat2ku[$i] = $row['alamat2'];
		$jmlsahamku[$i] = $row['jmlsaham'];
		$bayarku[$i] = $row['bayar'];
		$bankku[$i] = $row['namabank'];
		if ($cbbni)
			$bankku[$i] = "BNI";
		$cabangbankku[$i] = $row['cabang'];
		$norekku[$i] = $row['noacc1'];
		$namaacc1ku[$i] = $row['namaacc1'];
		$jenisbayarku[$i] = $row['jenisbayar'];
		$jenisesopku[$i] = $row['jenisesop'];
		$jenisbankku[$i] = $row['jenisbank'];
		$statusreturku[$i] = $row['statusretur'];
		$norekesa1ku[$i] = $row['norekesa1'];
		$norekesa2ku[$i] = $row['norekesa2'];
		$norekpubku[$i] = $row['norekpub'];
		$noreklainku[$i] = $row['noreklain'];
	}
}
$jmli = $i;

$filename = './REPORT/REPORT_TELKOM_' . $tahun . "_" . $batch . '.xls';

	if ($jmli > 0)
	{
		set_include_path(get_include_path() . PATH_SEPARATOR . './PHPExcel/Classes/');

/** Error reporting */
		error_reporting(E_ALL);

/** Include path **/
//ini_set('include_path', ini_get('include_path').';../Classes/');

		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel5.php';

		$fileType = 'Excel5';
		
		$folder = './REPORT';

		if(FALSE !== ($path = folder_exist($folder)))
		{
			//die('Folder ' . $path . ' already exist');
		}
		else {
			mkdir($folder);
		}

// Read the file
	//$objReader = PHPExcel_IOFactory::createReader($fileType);
	//$objPHPExcel = $objReader->load($fileName);
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
		//$worksheet = $spreadsheet->getActiveSheet();
// Change the file
		//$worksheet->setActiveSheetIndex(0)
		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'NAMA');
		$objPHPExcel->getActiveSheet()->setCellValue('B1', 'SPPD');
		$objPHPExcel->getActiveSheet()->setCellValue('C1', 'NIK');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', 'ALAMAT1');
		$objPHPExcel->getActiveSheet()->setCellValue('E1', 'ALAMAT2');
		$objPHPExcel->getActiveSheet()->setCellValue('F1', 'JML SAHAM');
		$objPHPExcel->getActiveSheet()->setCellValue('G1', 'NETTO');
		$objPHPExcel->getActiveSheet()->setCellValue('H1', 'NAMA BANK');
		$objPHPExcel->getActiveSheet()->setCellValue('I1', 'CABANG BANK');
		$objPHPExcel->getActiveSheet()->setCellValue('J1', 'NOMOR REK');
		$objPHPExcel->getActiveSheet()->setCellValue('K1', 'JENIS PEMBAYARAN');
		$objPHPExcel->getActiveSheet()->setCellValue('L1', 'JENIS ESOP');
		$objPHPExcel->getActiveSheet()->setCellValue('M1', 'NAMA AKUN');
		$objPHPExcel->getActiveSheet()->setCellValue('N1', 'STATUS RETUR');
		$objPHPExcel->getActiveSheet()->setCellValue('O1', 'NO.REK ESA1');
		$objPHPExcel->getActiveSheet()->setCellValue('P1', 'NO.REK ESA2 RETUR');
		$objPHPExcel->getActiveSheet()->setCellValue('Q1', 'NO.REK PUB');
		$objPHPExcel->getActiveSheet()->setCellValue('R1', 'NO.REK LAIN');

		for ($j=1; $j<=$jmli;$j++) {
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, $j+1, $namai[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(1, $j+1, $sppdi[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(2, $j+1, $nikku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(3, $j+1, $alamat1ku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, $j+1, $alamat2ku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(5, $j+1, $jmlsahamku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(6, $j+1, $bayarku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(7, $j+1, $bankku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(8, $j+1, $cabangbankku[$j]);
			$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(9, $j+1, $norekku[$j], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(10, $j+1, $jenisbayarku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(11, $j+1, $jenisesopku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(12, $j+1, $namaacc1ku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(13, $j+1, $statusreturku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(14, $j+1, $norekesa1ku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(15, $j+1, $norekesa2ku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(16, $j+1, $norekpubku[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(17, $j+1, $noreklainku[$j]);

		}

// Write the file
		//$writer = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$writer->save($filename);
	}

?>

	<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="100%" border="0" cellpadding="2" cellspacing="0">
          <tr height="30px"> 
            <td style="padding-left: 30px; text-align: left; height: 30px">
				<font face="arial" size="5" color="black"><b>
<?php 
	if ($namaperus == "none") {
		print "Not Selected";
	}
	else
		print $namaperus;
?>
				</b></font>
			</td>
          </tr>
          <tr height="10px"> 
            <td style="padding-left: 30px; text-align: left; font-size: 12;">
				<h2>
<?php 
	if ($tahun == 0) {
		//print "Not Selected";
	}
	else
		//print $tahun;
?>
				</h2>
			</td>
          </tr>
    </table>

<DIV align="left">
	<br>
<form action="reportawal.php" method="post" name="viewdata" id="viewdata">
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="500px" border="1" cellpadding="0" cellspacing="0">
		<tr height="60px">
			<td colspan="5" style="padding-left: 10px; padding-top: 0px;text-align: left; font-size: 12; height: 60px;">
				<font face="arial" size="4" color="black"><b>View Data TUNAI:</b></font>
			</td>
		</tr>
	</table>
	<table align="left" style="text-align: center; margin-left: 30px; margin-right: auto; margin-top: 0px;" width="550px" border="1" cellpadding="0" cellspacing="0">
        <tr height="35px"> 
            <td width="140px" style="padding-left: auto; text-align: left;">
				<font face="arial" size="2" color="black">Tahun Buku & Batch</font>
			</td>
			<td width="10px" style="padding-left: auto; text-align: center; font-size: 12;">:</td>
            <td width="70px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<!--select id="tahunbuku1" name="tahunbuku1" data-placeholder="Tahun Buku" style="width:70px;" class="chosen-select-deselect"-->
					<select id="tahunbuku1" name="tahunbuku1">
						<option value="0">(All)</option>
					<?php
						for ($i=2007;$i<=date('Y');$i++) {
?>
						<option value="<?php print $i;?>" <?php if ($i == $tahunbuku1) echo "selected";?>>
						<?php print $i;?>
						</option>
<?php
						}
?>
					</select> 
				</div>
			</td>
            <td width="70px" style="padding-left: 0px; text-align: left;">
					<font size="2" face="arial" color="black">
					<!--select id="batch1" name="batch1" data-placeholder="Batch" class="chosen-select-deselect" style="width:60px;" -->
					<select id="batch1" name="batch1" >
						<option value="0" <?php if ($batch1==0) echo "selected";?>>(All)</option>
						<option value="1" <?php if ($batch1==1) echo "selected";?>>1</option>
						<option value="2" <?php if ($batch1==2) echo "selected";?>>2</option>
						<option value="3" <?php if ($batch1==3) echo "selected";?>>3</option>
						<option value="4" <?php if ($batch1==4) echo "selected";?>>4</option>
					</select> 
					</font>		

			</td>
			<td width="30px" style="padding-left: auto; text-align: center; font-size: 12;"></td>
            <td width="70px" style="padding-left: 0px; text-align: left;">
			</td>
            <td width="35px" style="padding-left: 0px; text-align: left;">
			</td>
		</tr>
        <tr height="10px"> 
            <td colspan="7" width="130px" style="padding-left: 0px; text-align: left;">
			</td>
		</tr>
        <tr height="30px"> 
            <td style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Cari (Search)</font>
			</td>
			<td style="padding-left: auto; text-align: center; font-size: 12;">:</td>
            <td colspan="5" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<font face="arial" size="2" color="black">
					<input id="cari" name="cari" class="textbox" type="text" data-placeholder="Nama/SPPD" value="<?php echo $cari;?>">  
					</font>
				</div>
			</td>
		</tr>
        <tr height="20px"> 
            <td style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td style="padding-left: auto; text-align: center; font-size: 12;"></td>
            <td colspan="5" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<font face="arial" size="1" color="black">
					(Nama / SPPD / NIK / Nomor Rekening / Nama Bank)
					</font>
				</div>
			</td>
		</tr>
        <tr height="10px"> 
            <td colspan="7" width="130px" style="padding-left: 0px; text-align: left;">
			</td>
		</tr>
	</table>
	<br>
	<table align="left" style="text-align: left; margin-left: 30px; margin-right: auto; margin-top: auto;" width="550px" border="0" cellpadding="0" cellspacing="0">	
		<tr>
            <td colspan="4" style="padding-left: auto; text-align: left; font-size: 12; width: 550px">
				<hr noshade size=1>
			</td>
        </tr>
		<tr height="30px">
			<td style="padding-left: 0px; text-align: left; font-size: 12" width="165px">
			Diambil
			</td>
			<td style="padding-left: 0px; text-align: left; font-size: 12" width="10px">:
			</td>
			<td style="padding-left: 0px; text-align: left; font-size: 12" width="330px">
					<div>
						<input id="datepicker-example1a" class="textboxtgl" type="text" name="datepicker-example1a">
						&nbsp; s/d &nbsp;
						<input id="datepicker-example1b" class="textboxtgl" type="text" name="datepicker-example1b">
					</div>
			</td>
			<td style="padding-left: 0px; text-align: left; font-size: 12" width="20px">
			</td>
		</tr>
		<tr height="10px">
            <td colspan="4" style="padding-left: auto; text-align: left; font-size: 12;">
				<hr noshade size=1>
			</td>
        </tr>
        <tr height="30px"> 
            <td colspan="4" style="padding-right: 10px; text-align: left; font-size: 12;">
			</td>
        </tr>
        <tr height="30px"> 
            <td colspan="4" style="padding-left: auto; padding-top: auto; text-align: left;">
				<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
				<input type="hidden" id="id" name="id" value="<?php echo $perushid;?>">
				<a href="" class="medium button orange" onclick="document.viewdata.submit(); return false;">View</a> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
				<input type="hidden" id="id" name="id" value="<?php echo $perushid;?>">
				<a href="<?php echo $filename;?>" class="medium button blue">Download Data</a> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
	if ($levelidku==1) {
?>
				<a href="" class="medium button red" onclick="hapusku(); return false;">Delete Data</a>
<?php
	}
?>
			</td>
        </tr>
        <tr height="30px"> 
            <td colspan="4" style="padding-right: 10px; text-align: left; font-size: 12">
			</td>
        </tr>
    </table>
</form>
</DIV>

<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1570px" border="0" cellpadding="0" cellspacing="0">
		<tr height="27px"> 
            <td style="padding-left: auto; text-align: center; font-size: 12;  width: 30px;">
				<b><i><font face="arial narrow" size="2" color="black">NO</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 230px">
				<b><i><font face="arial narrow" size="2" color="black">NAMA</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial narrow" size="2" color="black">SPPD</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 70px">
				<b><i><font face="arial narrow" size="2" color="black">NIK</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 250px">
				<b><i><font face="arial narrow" size="2" color="black">ALAMAT</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial narrow" size="2" color="black">BANK</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial narrow" size="2" color="black">NO REK</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial narrow" size="2" color="black">JML SAHAM</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 140px">
				<b><i><font face="arial narrow" size="2" color="black">NOMINAL</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">JENIS BAYAR</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">JENIS KEPEMILIKAN</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">JENIS BANK</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">REK ESA1</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">REK ESA2</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">REK PUB</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">REK LAIN</font></i></b>
			</td>
          </tr>
<?php

$bulan = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Des');

if($jmli>0)
{
for ($i=1; $i <= $jmli; $i++)
{
?>
        <tr height="30"> 
            <td style="padding-right: 10px; text-align: right; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $i;?></font>
			</td>
            <td style="padding-left: 10px; text-align: left; font-size: 12;">
				<input type="hidden" id="returid" name="returid" value="<?php print $i;?>">
				<font face="arial narrow" size="2" color="black"><?php print $namai[$i];?></font>
			</td>
            <td style="padding-right: 10px; text-align: center; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $sppdi[$i];?></font>
			</td>
            <td style="padding-right: 10px; text-align: center; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $nikku[$i];?></font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $alamat1ku[$i];?></font>
			</td>
            <td style="padding-right: 10px; text-align: center; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $bankku[$i];?></font>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $norekku[$i];?></font>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $jmlsahamku[$i];?></font>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print 'Rp. ' . number_format($bayarku[$i],0);?></font>
			</td>
            <td style="padding-right: 0px; text-align: center; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $jenisbayarku[$i];?></font>
			</td>
            <td style="padding-right: 0px; text-align: center; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $jenisesopku[$i];?></font>
			</td>
            <td style="padding-right: 0px; text-align: center; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $jenisbankku[$i];?></font>
			</td>
            <td style="padding-right: 0px; text-align: center; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $norekesa1ku[$i];?></font>
			</td>
            <td style="padding-right: 0px; text-align: center; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $norekesa2ku[$i];?></font>
			</td>
            <td style="padding-right: 0px; text-align: center; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $norekpubku[$i];?></font>
			</td>
            <td style="padding-right: 0px; text-align: center; font-size: 12;">
				<font face="arial narrow" size="2" color="black"><?php print $noreklainku[$i];?></font>
			</td>
         </tr>
<?php
}
}
?>
    </table>
</DIV>


<script src="jquery.min.js" type="text/javascript"></script>
<script src="chosen.jquery.js" type="text/javascript"></script>
<script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" src="./datepicker/examples/public/javascript/jquery-1.11.1.js"></script>
<script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="./datepicker/examples/public/javascript/core.js"></script>

  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>


</body>
<?php

//========================================================================================================
function folder_exist($folder)
{
    // Get canonicalized absolute pathname
    $path = realpath($folder);

    // If it exist, check if it's a directory
    return ($path !== false AND is_dir($path)) ? $path : false;
}
//=========================================================================================================

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