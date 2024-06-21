<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php

?>
<script src="jquery-1.11.2.min.js"></script>
<link href="stylemenuhoriz.css" rel="stylesheet" />
<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
<script src="jquery.min.js" type="text/javascript"></script>
<script src="script.js"></script>
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

<br>

<?php
//---------------------------------------------
if (!isset($_GET["id"])) {
	$perushid=$_POST["id"];
}
else
	$perushid=$_GET["id"];
//---------------------------------------------
$tahun = 0;
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
if (!isset($_POST["tunai"])) 
	$tunai=false;
else
	$tunai=$_POST["tunai"];
//---------------------------------------------
if (!isset($_POST["transfer"])) 
	$transfer=false;
else
	$transfer=$_POST["transfer"];
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
$jenisbayarstr = "";
//--------------------------------------------------------------------------------
$filename = "";
if ($tunai || $transfer)
	$bayarstr = " AND (";
if ($tunai) {
	$bayarstr = $bayarstr . " jenisbayar='CEK' ||";
	$filename = './REPORT/REPORT_GGRM_CEK_' . $tahun . "_" . $batch . '.xls';
}
if ($transfer) {
	$bayarstr = $bayarstr . " jenisbayar='TRF' ||";
	$filename = './REPORT/REPORT_GGRM_TRF' . $tahun . "_" . $batch . '.xls';
}
if ($tunai || $transfer)
	$bayarstr = $bayarstr . " jenisbayar='TRR' ";
if ($tunai || $transfer)
	$bayarstr = $bayarstr . ")";
if ($tunai && $transfer)
	$filename = './REPORT/REPORT_GGRM_CEKTRF_' . $tahun . "_" . $batch . '.xls';
//--------------------------------------------------------------------------------

if ($tahunbuku==0)
	$tahunbukustr = " AND tahun<2006 ";
else
	$tahunbukustr = " AND tahun=" . $tahunbuku . " ";

if ($batch==0)
	$batchstr = "";
else
	$batchstr = " AND batchtahun=" . $batch . " ";

if ($cari=="none" || strlen($cari)<2)
	$caristr = "";
else {
	$caristr = " AND (sppd LIKE '%" . strtoupper($cari) . "%' OR nama1 LIKE '%" . strtoupper($cari) . 
			"%' OR nik LIKE '%" . strtoupper($cari) . "%' OR namabank LIKE '%" . strtoupper($cari) . "%' OR noacc1 LIKE '%" . strtoupper($cari) . "%')";
}

$sql0 = "SELECT * FROM gudanggaram WHERE (perusahaanID=" . $perushid . $tahunbukustr . $batchstr . $caristr . $bayarstr . ");";

//echo $sql0;

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
		$namai[$i] = $row['nama'];
		$noceki[$i] = $row['nomorcek'];
		$tglcatati[$i] = $row['tglcatat'];
		$tglbayari[$i] = $row['tglbayar'];
		$alamat1i[$i] = $row['alamat1'];
		$alamat2i[$i] = $row['alamat2'];
		$jmlsahami[$i] = $row['jmlsaham'];
		$nettoi[$i] = $row['netto'];
		$atasnamai[$i] = $row['atasnama'];
		$namabanki[$i] = $row['namabank'];
		$cabangi[$i] = $row['cabang'];
		$noacci[$i] = $row['noacc'];
		$jenisbayari[$i] = $row['jenisbayar'];
		$statusbayari[$i] = $row['statusbayar'];
		$statusreturi[$i] = $row['statusretur'];
	}
}
$jmli = $i;

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
		$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NOMOR CEK');
		$objPHPExcel->getActiveSheet()->setCellValue('C1', 'TGL CATAT');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', 'TGL BAYAR');
		$objPHPExcel->getActiveSheet()->setCellValue('E1', 'ALAMAT1');
		$objPHPExcel->getActiveSheet()->setCellValue('F1', 'ALAMAT2');
		$objPHPExcel->getActiveSheet()->setCellValue('G1', 'JML SAHAM');
		$objPHPExcel->getActiveSheet()->setCellValue('H1', 'NETTO');
		$objPHPExcel->getActiveSheet()->setCellValue('I1', 'NAMA BANK');
		$objPHPExcel->getActiveSheet()->setCellValue('J1', 'CABANG BANK');
		$objPHPExcel->getActiveSheet()->setCellValue('K1', 'NOMOR REK');
		$objPHPExcel->getActiveSheet()->setCellValue('L1', 'JENIS PEMBAYARAN');
		$objPHPExcel->getActiveSheet()->setCellValue('M1', 'ATASNAMA');
		$objPHPExcel->getActiveSheet()->setCellValue('N1', 'STATUS BAYAR');
		$objPHPExcel->getActiveSheet()->setCellValue('O1', 'STATUS RETUR');

		for ($j=1; $j<=$jmli;$j++) {
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, $j+1, $namai[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(1, $j+1, $noceki[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(2, $j+1, $tglcatati[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(3, $j+1, $tglbayari[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, $j+1, $alamat1i[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(5, $j+1, $alamat2i[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(6, $j+1, $jmlsahami[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(7, $j+1, $nettoi[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(8, $j+1, $namabanki[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(8, $j+1, $cabangi[$j]);
			$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(9, $j+1, $noacci[$j], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(10, $j+1, $jenisbayari[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(11, $j+1, $atasnamai[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(12, $j+1, $statusbayari[$j]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(13, $j+1, $statusreturi[$j]);
		}

// Write the file
		//$writer = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$writer->save($filename);
	}



?>

	<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="100%" border="0" cellpadding="2" cellspacing="0">
          <tr height="30px"> 
            <td style="padding-left: 30px; text-align: left; font-size: 12; height: 30px">
				<h1>
<?php 
	if ($namaperus == "none") {
		print "Not Selected";
	}
	else
		print $namaperus;
?>
				</h1>
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
<form action="viewdata.php" method="post" name="viewdata" id="viewdata">
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="880px" border="0" cellpadding="0" cellspacing="0">
		<tr height="60px">
			<td colspan="7" style="padding-left: 10px; padding-top: 0px;text-align: left; font-size: 12; height: 60px;">
				<h2><font face="arial" color="black">View Data:</font></h2>
			</td>
		</tr>
	</table>
	<table align="left" style="text-align: left; margin-left: 30px; margin-right: auto; margin-top: 0px;" width="880px" border="0" cellpadding="0" cellspacing="0">
        <tr height="30px"> 
            <td width="100px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Tahun Buku</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="240px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<select id="tahunbuku" name="tahunbuku" data-placeholder="Tahun Buku" style="width:120px;" class="chosen-select-deselect">
<?php
						for ($i=2007;$i<=date('Y');$i++) {
?>
						<option value="<?php print $i;?>" <?php if ($i == $tahunbuku) echo "selected";?>>
						<?php print $i;?>
						</option>
<?php
						}
?>
					</select> 
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="240px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				</div>
			</td>
		</tr>
        <tr height="30px"> 
            <td width="100px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Batch</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
							<font face="arial" color="black">
							<select id="batch" name="batch" data-placeholder="Batch" class="chosen-select-no-single" >
								<option value="1">1 &nbsp;&nbsp;</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select> 
							</font>		
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				</div>
			</td>
		</tr>
        <tr height="30px"> 
            <td width="100px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Cari (Search)</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
						<input id="cari" name="cari" class="textbox" type="text" data-placeholder="Nama/SPPD" value="<?php echo $cari;?>">  
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
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
            <td colspan="5" width="130px" style="padding-left: 0px; text-align: left;">
			</td>
		</tr?
	</table>
	<br>
	<table align="left" style="text-align: left; margin-left: 30px; margin-right: auto; margin-top: auto;" width="500px" border="0" cellpadding="0" cellspacing="0">	
		<tr height="10px">
            <td colspan="3" style="padding-left: auto; text-align: left; font-size: 12; width: 100px">
				<hr noshade size=1>
			</td>
        </tr>
		<tr height="25px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 100px">
				<input type="checkbox" name="tunai" id="tunai" class="css-checkbox" <?php if ($tunai) echo "checked"?> />
				<label for="tunai" class="css-label lite-blue-check"><font face="arial" size="2" color="black">CEK</font></label>
			</td>
			<td colspan="2" style="padding-left: auto; text-align: left; font-size: 12; width: 100px">
				<input type="checkbox" name="transfer" id="transfer" class="css-checkbox" <?php if ($transfer) echo "checked"?>/>
				<label for="transfer" class="css-label lite-blue-check"><font face="arial" size="2" color="black">Transfer</font></label>
			</td>
        </tr>
		<tr height="10px">
            <td colspan="3" style="padding-left: auto; text-align: left; font-size: 12; width: 100px">
				<hr noshade size=1>
			</td>
        </tr>
		<tr height="20px">
            <td colspan="3" style="padding-left: auto; text-align: left; font-size: 12; width: 100px">
			</td>
        </tr>
        <tr height="40px"> 
            <td style="padding-left: auto; padding-top: auto; text-align: left; font-size: 12; width: 150px">
				<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
				<input type="hidden" id="id" name="id" value="<?php echo $perushid;?>">
				<a href="" class="medium button orange" onclick="document.viewdata.submit(); return false;">View</a> 
			</td>
            <td style="padding-left: auto; padding-top: auto; text-align: left; width: 150px">
				<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
				<input type="hidden" id="id" name="id" value="<?php echo $perushid;?>">
				<a href="<?php echo $filename;?>" class="medium button blue">Download Data</a> 
			</td>
            <td style="padding-left: 50px; padding-top: auto; text-align: left; width: 200px">
<?php
	if ($levelidku==1) {
?>
				<a href="" class="medium button red" onclick="hapusku(); return false;">Delete Data</a>
<?php
	}
?>
			</td>
        </tr>
        <tr height="20px"> 
            <td colspan="2" style="padding-left: auto; padding-top: 30px; text-align: left; font-size: 12; height: 20px">
			</td>
        </tr>
    </table>
</form>
</DIV>

<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1450px" border="0" cellpadding="0" cellspacing="0">
		<tr height="40px"> 
            <td style="padding-left: auto; text-align: center; font-size: 12;  width: 30px;">
				<b><i><font face="arial" size="2" color="black">NO</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 200px">
				<b><i><font face="arial" size="2" color="black">NAMA</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 250px">
				<b><i><font face="arial" size="2" color="black">ALAMAT1</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">ALAMAT2</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 70px">
				<b><i><font face="arial" size="2" color="black">JENIS BAYAR</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">NO CEK</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 250px">
				<b><i><font face="arial" size="2" color="black">BANK</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">ATASNAMA</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">JML SAHAM</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">GROSS</font></i></b>
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
				<font face="arial" size="2" color="black"><?php print $i;?></font>
			</td>
            <td style="padding-left: 10px; text-align: left; font-size: 12;">
				<input type="hidden" id="returid" name="returid" value="<?php print $i;?>">
				<font face="arial" size="2" color="black"><?php print $namai[$i];?></font>
			</td>
            <td style="padding-right: 10px; text-align: left; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print $alamat1i[$i];?></font>
			</td>
            <td style="padding-right: 10px; text-align: left; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print $alamat2i[$i];?></font>
			</td>
            <td style="padding-right: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print $jenisbayari[$i];?></font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="black">
				<?php 
					if ($jenisbayari[$i]=='CEK')
						print $noceki[$i];
					else if ($jenisbayari[$i]=='TRF')
						print $noacci[$i];
				?>
				</font>
			</td>
            <td style="padding-right: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print $namabanki[$i];?></font>
			</td>
            <td style="padding-right: 10px; text-align: left; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print $atasnamai[$i];?></font>
			</td>
            <td style="padding-right: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print $jmlsahami[$i];?></font>
			</td>
            <td style="padding-right: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print 'Rp. ' . number_format($nettoi[$i],0);?></font>
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