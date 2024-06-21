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
//---------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//---------------------------------------------------
if (!isset($_POST["userid"])) {
	$userid=$_GET["userid"];
}
else
	$userid=$_POST["userid"];
//---------------------------------------------------

//---------------------------------------------------
if (!isset($_POST["statusupload"])) {
	$statusupload=1;
}
else
	$statusupload=$_POST["statusupload"];
//---------------------------------------------------


//echo $statusupload;
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
//Get userID
if ($userid==null || $userid==0)
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
		$userid = $row['ID'];
		$levelidku = $row['levelid'];
		$usernameku = $row['username'];
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
//window.top.location.href = "index.php"; 
</script>
<?php
//die;
	}
}
?>
</head>
<body>

<?php


ini_set('max_execution_time', 5000); //300 seconds = 5 minutes
ini_set("memory_limit","1512M");

//Сheck that we have a file

$jmlfile = 0;
$jj=0;
$mm=0;
$statusmatch = 0;

//Truncate table

$jmlclient = "-";
$jmlobligasi = "-";
$jmlsaham = "-";
$jmlmaindata = "-";
$outputstr = "";

if ($statusupload==1) {
	if(isset($_FILES['uploadfiles'])){
		foreach($_FILES['uploadfiles']['tmp_name'] as $key => $tmp_name)
		{
			$file_name = $_FILES['uploadfiles']['name'][$key];
		//$file_name = substr($file_name,1);
			$file_size =$_FILES['uploadfiles']['size'][$key];
			if ($file_size == null || $file_size==0) {
				continue;
			}
//echo $userid . "<br>";
			$file_tmp =$_FILES['uploadfiles']['tmp_name'][$key];
			$file_type=$_FILES['uploadfiles']['type'][$key]; 
			$tipefile = pathinfo($file_name, PATHINFO_EXTENSION);
			$abc = explode(".", $file_name);
			$countarr = count($abc);
			$file_extension = $abc[$countarr-1];
//Determine the path to which we want to save this file
			$newname = './savefile/' . $file_name;
			$newnameku = dirname(__FILE__) . '\savefile' . '\\' . $file_name;
			if (file_exists($newname))
				unlink($newname);
// Check if the file with the same name is already exists on the server
			if (!file_exists($newname)) {
//Attempt to move the uploaded file to its new place
				if ((move_uploaded_file($_FILES['uploadfiles']['tmp_name'][$key],$newname))) { 
					$filename = strtoupper($file_name);
					$filename1 = $filename;
					$Time = microtime(true);
					if ((strpos(strtoupper($filename),'CLIENT') !== false) || (strpos(strtoupper($filename),'CUSTOMER') !== false))
					{
						$jmlclient = readfilexlclient($link, $filename, $userid, $file_extension);
						if ($outputstr==="")
							$outputstr = $jmlclient;
						else
							$outputstr = $jmlclient . "@" . $outputstr;
					}
					if ((strpos($filename,'MAIN') !== false))
					{
						$jmlmaindata = readfilexlmain($link, $filename, $userid, $file_extension);
						if ($outputstr==="")
							$outputstr = $jmlmaindata;
						else
							$outputstr = $jmlmaindata . "@" . $outputstr;
					}
					if (strpos(strtoupper($filename),'SEC') !== false)
					{
						$jmlsec = readfilexlsec($link, $filename, $userid, $file_extension);
						if ($outputstr==="")
							$outputstr = $jmlsec;
						else
							$outputstr = $jmlsec . "@" . $outputstr;
					}
					if ((strpos(strtoupper($filename),'ISSUER') !== false) || (strpos(strtoupper($filename),'GOL') !== false))
					{
						$jmlclient = readfilexlrefgol($link, $filename, $userid, $file_extension);
						if ($outputstr==="")
							$outputstr = $jmlclient;
						else
							$outputstr = $jmlclient . "@" . $outputstr;
					}
					if ((strpos(strtoupper($filename),'REF') !== false))
					{
						$jmlclient = readfilexlrefall($link, $filename, $userid, $file_extension);
						if ($outputstr==="")
							$outputstr = $jmlclient;
						else
							$outputstr = $jmlclient . "@" . $outputstr;
					}
				}
			} 
		}
	}
	else
	{
		echo "Error3";
	}
}
else if ($statusupload==2) {
	$statusdataada = 0;
}
else if ($statusupload==3) {
	/////$varstr = readfileextract($link, $file_name, $userid, $norekkd);
	/////$jmlmatch = prosesrekon($link);
	$jmlstr = createfileoutput($link);
	$vstr="";
	$dataku = "equity";
	$sql1 = "INSERT INTO mylog (userid, username, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . 
				",'" . $usernameku . "',now(),'UPLOAD', '" . $dataku . "');";
//echo $sql1 . "<br>";
	$res = mysqli_query($link,$sql1);
}

mysqli_close($link);
$_SESSION['start'] = time(); // Taking now logged in time.

?>

<meta http-equiv="refresh" content="0; url=uploadallfiles.php?userid=<?php echo $userid;?>&statusoutput=1&outputinfo=<?php echo $outputstr;?>" />

<?php

//*****************************************************************************************
//********************************** F U N C T I O N S  ***********************************
//*****************************************************************************************
//
//-----------------------------------------------------------------------------------------

//=========================================================================================
function readfilexlmain($link, $filename, $userid, $tipefile)
//=========================================================================================
{
	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;
	$filen = './savefile/' . $filename;
	//$sql00 = "TRUNCATE client;";
	//$result00 = mysqli_query($link, $sql00);
	
	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;

	if ($tipefile == 'xls') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel5.php';
		$jenisxl = 'Excel5';
	}
	else if ($tipefile == 'xlsx') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';
		$jenisxl = 'Excel2007';
	}
	error_reporting(E_ALL ^ E_NOTICE);
	
	$bulan = array("", "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
	
	$objReader = PHPExcel_IOFactory::createReader($jenisxl);
	$objReader->setReadDataOnly(true);
	$objPHPExcel = $objReader->load($filen);
	$objWorksheet = $objPHPExcel->getActiveSheet();
	$highestRow = $objWorksheet->getHighestRow();
	$highestColA = $objWorksheet->getHighestDataColumn();
	$highestCol = PHPExcel_Cell::columnIndexFromString($highestColA);
	$rowku = 0;
	for($myrow=1; $myrow <= 2; $myrow++) {
		for ($mycol = 0; $mycol <= $highestCol; $mycol++) {
			$headercol = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mycol, $myrow)->getValue();
			if (strpos(strtoupper($headercol),'CLIENT NAME') !== false)
			{
				$fullnamecol = $mycol;
				$rowku = $myrow;
			}
		}
		if ($rowku > 0)
			break;
	}
	$ourrow = $rowku + 1;
//echo $ourrow . "===" . $highestRow . "<br>";
//=============================================================================================================
// HAPUS DATA
//=============================================================================================================
	$sqlt = "TRUNCATE maindata;";
	$resultt = mysqli_query($link, $sqlt);
//=============================================================================================================
	//$highestRow = 100;
	$k = 0;
	$kk = 0;
	for ($row = $ourrow; $row <= $highestRow; $row++) {
		$k++;
		//$asof = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
		//$asofarr = explode("-", $asof);
		//$asth = 2000 + ($asofarr[2] * 1);
		//$asof = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue(); 
		//$asofdate = PHPExcel_Style_NumberFormat::toFormattedString($asof, "yyyy-mm-dd");
		$bpid = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue();
		$clientcode = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $row)->getValue();
		$clientname = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, $row)->getValue();
		$instype = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, $row)->getValue();
		$holding = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(12, $row)->getValue();
		$latestprice = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(13, $row)->getValue();
		$inscode = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(8, $row)->getValue();
		$marketvalue = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(14, $row)->getValue();
		$depo = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(16, $row)->getValue();
		$cashproceed = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(15, $row)->getValue();
//echo $latestprice . "<br>";
		$sql01 = "INSERT INTO maindata(bpid, clientcode, clientname, instrumenttype, holding, latestprice, instrumentcode, marketvalue, 
					depository, cashproceed, createduser, createddate) VALUES('" . $bpid . "','" . strtoupper($clientcode) . "','" .
					strtoupper($clientname) . "','" . $instype . "'," . $holding . ",'" . $latestprice . "','" .	$inscode . "'," . $marketvalue . ",'" .
					$depo . "'," . $cashproceed . "," . $userid . ", now());";
//echo $sql01 . "<br>";
		$result01 = mysqli_query($link, $sql01);
		if($result01)
		{
			$kk++;
		}
	}
	$countk = $k;	
	
	$statusinsert = 0;
	$jmldata = $k;

	
	$jmlk = $kk;

	unlink($filen);
	
	return "Data:" . $jmldata . "/" . $jmlk;

}

//=============================================================================================================
//=============================================================================================================
function readfilexlsec($link, $filename, $userid, $tipefile)
//=============================================================================================================
{
	$filen = './savefile/' . $filename;
	//$sql00 = "TRUNCATE client;";
	//$result00 = mysqli_query($link, $sql00);
	
	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;

	if ($tipefile == 'xls') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel5.php';
		$jenisxl = 'Excel5';
	}
	else if ($tipefile == 'xlsx') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';
		$jenisxl = 'Excel2007';
	}
	error_reporting(E_ALL ^ E_NOTICE);
	
	$bulan = array("", "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
	
	$objReader = PHPExcel_IOFactory::createReader($jenisxl);
	$objReader->setReadDataOnly(true);
	$objPHPExcel = $objReader->load($filen);
	$objWorksheet = $objPHPExcel->getActiveSheet();
	$highestRow = $objWorksheet->getHighestRow();
	$highestColA = $objWorksheet->getHighestDataColumn();
	$highestCol = PHPExcel_Cell::columnIndexFromString($highestColA);
	$rowku = 0;
	for($myrow=1; $myrow <= 2; $myrow++) {
		for ($mycol = 0; $mycol <= $highestCol; $mycol++) {
			$headercol = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mycol, $myrow)->getValue();
			if (strpos(strtoupper($headercol),'FULL') !== false && strpos(strtoupper($headercol),'NAME') !== false)
			{
				$fullnamecol = $mycol;
				$rowku = $myrow;
			}
		}
		if ($rowku > 0)
			break;
	}
	$ourrow = $rowku + 1;

//=============================================================================================================
// HAPUS DATA
//=============================================================================================================
	$sqlt = "TRUNCATE sandisecurity;";
	$resultt = mysqli_query($link, $sqlt);
//=============================================================================================================

	$k = 0;
	$kk = 0;
	for ($row = $ourrow; $row <= $highestRow; $row++) {
		$k++;
		//$shortname = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($shortnamecol, $row)->getValue();
			//$tglval = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, $row)->getValue();
		//$dateObj = PHPExcel_Shared_Date::ExcelToPHPObject($invoicedat);
		//$asofdate[$k] = $dateObj->format('Y-m-d');
		//$invoicearr = explode("-", $invoicedat);
		//$tgltgl = $invoicearr[0];
		//$tglbul = $invoicearr[1];
		//$tgltahun = $invoicearr[2] + 2000;
		//for($a=1; $a<=12; $a++) {
		//	if ($tglbul==$bulan[$a])
		//		$tglbul = $a;
		//}
		//$asofdate[$k] = $tgltahun . "-" . $tglbul . "-" . $tgltgl;

		$shortname = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue();
		$shortnameclean = str_replace("-", "", $shortname);
		$shortnameclean = str_replace(" ", "", $shortnameclean);
		$fullname = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $row)->getValue();
		$issuername = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, $row)->getValue();
		$jenisvaluta = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, $row)->getValue();
		$tglterbit = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, $row)->getValue();
		$tglterbit = str_replace("'", "", $tglterbit);
		$tgljatuhtempo = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, $row)->getValue();
		$tgljatuhtempo = str_replace("'", "", $tgljatuhtempo);
		//$setcriteria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(11, $row)->getValue();
		$typeinvestor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(11, $row)->getValue();
		$subtipe = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(12, $row)->getOldCalculatedValue();
		//$sandigol = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(13, $row)->getValue();
		$sjsb = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(13, $row)->getValue();
		$negaraasal = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(14, $row)->getValue();
		$isin = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(15, $row)->getCalculatedValue();
		$inrate = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(17, $row)->getCalculatedValue();
		$golemit = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(18, $row)->getCalculatedValue();
		$golemitarr =  explode(" ", $golemit);
		$golemitten = $golemitarr[0];
		
		if ($shortname==null || $shortname=="")
		{
			break;
		}
		
		$sql01 = "INSERT INTO sandisecurity(fullname, shortname, shortnameclean, issuername, jenisvaluta, tglterbit, tgljatuhtempo, seccriteria, 
					type, subtype, sandipenerbit, sjsb, negaraasal, isin, inrate, golemiten) VALUES('" . $fullname . "','" . $shortname . "','" . $shortnameclean . 
					"','" . $issuername . "','" . $jenisvaluta . "','" .	$tglterbit . "','" . $tgljatuhtempo . "','" . $setcriteria . "','" . 
					$typeinvestor . "','" . $subtipe . "','" . $sandigol . "','" . $sjsb . "','" . $negaraasal . "','" . $isin . "','" . $inrate . "','" .
					$golemitten . "');";
//echo $sql01 . "<br>";
		$result01 = mysqli_query($link, $sql01);
		if ($result01)
		{
			$kk++;
		}
	}
	$countk = $k;	
	
	$statusinsert = 0;
	$jmldata = $kk;


unlink($filen);
return "Sandi Security : " . $jmldata . "/" . $countk;
	
}

//=============================================================================================================
function readfilexlclient($link, $filename, $userid, $tipefile)
//=============================================================================================================
{
	$filen = './savefile/' . $filename;
	$sql00 = "TRUNCATE client;";
	$result00 = mysqli_query($link, $sql00);

	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;

//echo $filename . "<br>";	
	
	if ($tipefile == 'xls') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel5.php';
		$jenisxl = 'Excel5';
	}
	else if ($tipefile == 'xlsx') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';
		$jenisxl = 'Excel2007';
	}
	error_reporting(E_ALL ^ E_NOTICE);
	
	$bulan = array("", "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
	
	$objReader = PHPExcel_IOFactory::createReader($jenisxl);
	$objReader->setReadDataOnly(true);
	$objPHPExcel = $objReader->load($filen);
	$objWorksheet = $objPHPExcel->getActiveSheet();
	$highestRow = $objWorksheet->getHighestRow();
	$highestColA = $objWorksheet->getHighestDataColumn();
	$highestCol = PHPExcel_Cell::columnIndexFromString($highestColA);
	$rowku = 0;
	for($myrow=1; $myrow <= 2; $myrow++) {
		for ($mycol = 0; $mycol <= $highestCol; $mycol++) {
			$headercol = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mycol, $myrow)->getValue();
			if (strpos(strtoupper($headercol),'FULL') !== false && strpos(strtoupper($headercol),'NAME') !== false) 
				$shortnamecol = $mycol;
				$rowku = $myrow;
		}
		if ($rowku > 0)
			break;
	}
	$ourrow = $rowku + 1;
	
//=============================================================================================================
// HAPUS DATA
//=============================================================================================================
	$sqlt = "TRUNCATE client;";
	$resultt = mysqli_query($link, $sqlt);
//=============================================================================================================

	$k = 0;
	$kk = 0;
	for ($row = $ourrow; $row <= $highestRow; $row++) {
		$k++;
		$fullnameku = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue();
		$shortnameku = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $row)->getValue();
		$typeinvestorku = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, $row)->getValue(); 
		$sandigolku = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, $row)->getOldCalculatedValue();
		$sandigol2ku = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, $row)->getValue();
		$sandiasuku = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, $row)->getValue();
		$sandidapenku = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, $row)->getValue();
		
		$sql01 = "INSERT INTO client (shortname, fullname, tipeinvestor, sandigolongan, sandipemilik, sandiasuransi, sandidapen) VALUES('" . 
				$shortnameku . "','" . $fullnameku . "','" . $typeinvestorku . "','" . $sandigolku . "','" . $sandigol2ku . "','" . $sandiasuku . 
				"','" . $sandidapenku . "');";
//echo $sql01 . "<br>";
		$result01 = mysqli_query($link, $sql01);
		if ($result01)
		{
			$kk++;
		}
	}
	$countk = $k;	
	
	$statusinsert = 0;
	$jmldata = 0;
	$jmlkk = $kk;
	for ($i=1; $i <= $countk; $i++) {

		if ($result01)
		{
			$jmldata++;
		}
//echo $i . "--" . $result01 . "--" . $sql01 . "<br><br>";
	}


	unlink($filen);
	return "Client : " . $jmlkk . "/" . $countk;	
	
}

//=============================================================================================================
function readfilexlsandisec($link, $filename, $userid, $tipefile)
//=============================================================================================================
{
	$filen = './savefile/' . $filename;
	//$sql00 = "TRUNCATE sandisecurity;";
	//$result00 = mysqli_query($link, $sql00);
	
	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;

	if ($tipefile == 'xls') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel5.php';
		$jenisxl = 'Excel5';
	}
	else if ($tipefile == 'xlsx') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';
		$jenisxl = 'Excel2007';
	}
	error_reporting(E_ALL ^ E_NOTICE);
	
	$bulan = array("", "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
	
	$objReader = PHPExcel_IOFactory::createReader($jenisxl);
	$objReader->setReadDataOnly(true);
	$objPHPExcel = $objReader->load($filen);
	$objWorksheet = $objPHPExcel->getActiveSheet();
	$highestRow = $objWorksheet->getHighestRow();
	$highestColA = $objWorksheet->getHighestDataColumn();
	$highestCol = PHPExcel_Cell::columnIndexFromString($highestColA);
	$rowku = 0;
	for($myrow=1; $myrow <= 2; $myrow++) {
		for ($mycol = 0; $mycol <= $highestCol; $mycol++) {
			$headercol = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mycol, $myrow)->getValue();
			if (strpos(strtoupper($headercol),'SHORT') !== false && strpos(strtoupper($headercol),'NAME') !== false)
			{
				$shortnamecol = $mycol;
				$rowku = $myrow;
			}
			if (strpos(strtoupper($headercol),'FULL') !== false && strpos(strtoupper($headercol),'NAME') !== false) 
				$fullnamecol = $mycol;
			if (strpos(strtoupper($headercol),'ISSUER') !== false && strpos(strtoupper($headercol),'NAME') !== false) 
				$issuernamecol = $mycol;
			if (strpos(strtoupper($headercol),'JENIS') !== false && strpos(strtoupper($headercol),'VALUTA') !== false) 
				$jenisvalutacol = $mycol;
			if (strpos(strtoupper($headercol),'SEC') !== false && strpos(strtoupper($headercol),'CRITERIA') !== false) 
				$seccriteriacol = $mycol;
			if (strpos(strtoupper($headercol),'TANGGAL') !== false && strpos(strtoupper($headercol),'TERBIT') !== false && strpos(strtoupper($headercol),'TEXT') !== false) 
				$tglterbitcol = $mycol;
			if (strpos(strtoupper($headercol),'TANGGAL') !== false && strpos(strtoupper($headercol),'TEMPO') !== false && strpos(strtoupper($headercol),'TEXT') !== false) 
				$tgljatuhtempocol = $mycol;
			if (strtoupper($headercol) === 'TYPE')
				$typecol = $mycol;
			if (strpos(strtoupper($headercol),'SUB') !== false && strpos(strtoupper($headercol),'TYPE') !== false) 
				$subtypecol = $mycol;
			if (strpos(strtoupper($headercol),'SANDI') !== false && strpos(strtoupper($headercol),'PENERBIT') !== false) 
				$sandipenerbitcol = $mycol;
			if (strpos(strtoupper($headercol),'SANDI') !== false && strpos(strtoupper($headercol),'JENIS') !== false) 
				$sandijeniscol = $mycol;
			if (strpos(strtoupper($headercol),'NEGARA') !== false && strpos(strtoupper($headercol),'ASAL') !== false) 
				$negaraasalcol = $mycol;
		}
		if ($rowku > 0)
			break;
	}
	$ourrow = $rowku + 1;
//echo $ourrow;
	$k = 0;
	for ($row = $ourrow; $row <= $highestRow; $row++) {
		$k++;
		//$shortname = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($shortnamecol, $row)->getValue();
			//$tglval = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, $row)->getValue();
		//$dateObj = PHPExcel_Shared_Date::ExcelToPHPObject($invoicedat);
		//$asofdate[$k] = $dateObj->format('Y-m-d');
		//$invoicearr = explode("-", $invoicedat);
		//$tgltgl = $invoicearr[0];
		//$tglbul = $invoicearr[1];
		//$tgltahun = $invoicearr[2] + 2000;
		//for($a=1; $a<=12; $a++) {
		//	if ($tglbul==$bulan[$a])
		//		$tglbul = $a;
		//}
		//$asofdate[$k] = $tgltahun . "-" . $tglbul . "-" . $tgltgl;
//echo $asofdate[$k] . "<br>";
		$shortname[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($shortnamecol, $row)->getValue();
		$shortnameclean[$k] = str_replace("-","",$shortname[$k]);
		$shortnameclean[$k] = str_replace(" ","",$shortnameclean[$k]);
		$fullname[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fullnamecol, $row)->getValue();
		if (strlen($fullname[$k]) < 1 || $fullname[$k]===null)
		{
			$fullname[$k] = " ";
		}
		$jenisvaluta[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($jenisvalutacol, $row)->getValue();
		$issuername[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($issuernamecol, $row)->getValue(); 
		$seccriteria[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($seccriteriacol, $row)->getValue();
		$tglterbi = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($tglterbitcol, $row)->getFormattedValue();
		if (strlen($tglterbi)<5)
		{
			$tglterbi = "01011970";
		}
		if (strpos(strtoupper($tglterbi),'/') !== false)
		{
			$tglterbirr = explode("/", $tglterbi);
			$tglterbit[$k] = $tglterbirr[2] . "-" . $tglterbirr[1] . $tglterbirr[0];
		}
		else
		{
		//$dateObj = PHPExcel_Shared_Date::ExcelToPHPObject($tglterbi);
		//$tglterbit[$k] = $dateObj->format('Y-m-d');
			$tglterbit[$k] = substr($tglterbi,4,4) . "-" . substr($tglterbi,2,2) . "-" . substr($tglterbi,0,2);
		}
		$tgljatuhtem = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($tgljatuhtempocol, $row)->getFormattedValue();
		if (strlen($tgljatuhtem)<5)
		{
			$tgljatuhtem = "01011970";
		}
		if (strpos(strtoupper($tgljatuhtem),'/') !== false)
		{
			$tgljatuhtemrr = explode("/", $tgljatuhtem);
			$tgljatuhtempo[$k] = $tgljatuhtemrr[2] . "-" . $tgljatuhtemrr[1] . $tgljatuhtemrr[0];
		}
		else
		{
		//$dateObj = PHPExcel_Shared_Date::ExcelToPHPObject($tgljatuhtem);
		//$tgljatuhtempo[$k] = $dateObj->format('Y-m-d');
			$tgljatuhtempo[$k] = substr($tgljatuhtem,4,4) . "-" . substr($tgljatuhtem,2,2) . "-" . substr($tgljatuhtem,0,2);
		}
//echo $tglterbit[$k] . "<br>";
		$type[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($typecol, $row)->getValue();
		$subtype[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($subtypecol, $row)->getValue();
		//$equities[$k] = str_replace("'","",$equities[$k]);
		$sandipenerbit[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($sandipenerbitcol, $row)->getValue();
		if ($sandipenerbit[$k]=="" || $sandipenerbit[$k]==" " || $sandipenerbit[$k]==null)
		{
			$sandipenerbit[$k] = 0;
		}
		//$bondgovt[$k] = str_replace("'","",$bondgovt[$k]);
		$sandijenis[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($sandijeniscol, $row)->getValue();
		if ($sandijenis[$k]=="" || $sandijenis[$k]==" " || $sandijenis[$k]==null)
		{
			$sandijenis[$k] = 0;
		}
		//$bondcorp[$k] = str_replace("'","",$bondcorp[$k]);
		$negaraasal[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($negaraasalcol, $row)->getValue();
		//$security[$k] = str_replace("'","",$security[$k]);
		

	}
	$countk = $k;

	$statusinsert = 0;
	
	$jmldata = 0;
	for ($i=1; $i <= $countk; $i++) {
		$sql00 = "SELECT * FROM sandisecurity WHERE shortname='" . $shortname[$i] . "';";
		$res00 = mysqli_query($link, $sql00);
		$jmlrowa = 0;
		if ($res00) {
			$jmlrowa = $res00->num_rows;
		}
		if ($jmlrowa == 0) {
		
			$sql01 = "INSERT INTO sandisecurity (shortname, shortnameclean, fullname, issuername, jenisvaluta, seccriteria, tglterbit, tgljatuhtempo, type, subtype, 
					sandipenerbit, jenissuratberharga, negaraasal, createduser, createddate) VALUES('" . 
					$shortname[$i] . "','" . $shortnameclean[$i] . "','" . $fullname[$i] . "','" . $issuername[$i] . "','" . $jenisvaluta[$i] . "','" . $seccriteria[$i] . 
					"','" . $tglterbit[$i] . "','" . $tgljatuhtempo[$i] . "','" . $type[$i] . "','" . $subtype[$i] . "'," . $sandipenerbit[$i] . "," . 
					$sandijenis[$i] . ",'" . $negaraasal[$i] . "'," . $userid . ",now());";
//echo $i . "++" . $sql01 . "<br>";
			$result01 = mysqli_query($link, $sql01);
			if ($result01)
			{
				$jmldata++;
			}
			else
			{
//echo $sql01 . "<br>";
			}
		}
		else if ($jmlrowa>0) {
			while ($rowa = mysqli_fetch_array ($res00, MYSQLI_ASSOC)) {
				$idku = $rowa['ID'];
			}
			$sql01 = "UPDATE sandisecurity SET shortname='" . $shortname[$i] . "', shortnameclean='" . $shortnameclean[$i] . "', fullname='" . $fullname[$i] . "', issuername='" . $issuername[$i] .
					"', jenisvaluta='" . $jenisvaluta[$i] . "', seccriteria='" . $seccriteria[$i] . "', tglterbit='" . $tglterbit[$i] . "', tgljatuhtempo='" .
					$tgljatuhtempo[$i] . "', type='" . $type[$i] . "', subtype='" . $subtype[$i] . "', sandipenerbit='" . 
					$sandipenerbit[$i] . "', jenissuratberharga='" . $sandijenis[$i] . "', negaraasal='" . $negaraasal[$i] . 
					"' WHERE ID=" . $idku . ";";
			$result01 = mysqli_query($link, $sql01);
			if ($result01)
			{
				//$jmldata++;
			}
			else
			{
//echo $sql01 . "<br>";
			}
		}


//		else
//		{
//echo $sql01 . "<br>";
//		}
	}
	
//echo $jmldata . "/" . $countk . "<br>";

unlink($filen);
return "Securities:" . $jmldata . "/" . $countk;	
	
}

//=========================================================================================
function readfilexlrefgol($link, $filename, $userid, $tipefile)
//=========================================================================================
{
	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;
	$filen = './savefile/' . $filename;
	//$sql00 = "TRUNCATE client;";
	//$result00 = mysqli_query($link, $sql00);
	
	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;

	if ($tipefile == 'xls') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel5.php';
		$jenisxl = 'Excel5';
	}
	else if ($tipefile == 'xlsx') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';
		$jenisxl = 'Excel2007';
	}
	error_reporting(E_ALL ^ E_NOTICE);
	
	$bulan = array("", "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
	
	$objReader = PHPExcel_IOFactory::createReader($jenisxl);
	$objReader->setReadDataOnly(true);
	$objPHPExcel = $objReader->load($filen);
	$objWorksheet = $objPHPExcel->getActiveSheet();
	$highestRow = $objWorksheet->getHighestRow();
	$highestColA = $objWorksheet->getHighestDataColumn();
	$highestCol = PHPExcel_Cell::columnIndexFromString($highestColA);
	$rowku = 0;
	$refgolcol = $mycol;
	for($myrow=1; $myrow <= 2; $myrow++) {
		for ($mycol = 0; $mycol <= $highestCol; $mycol++) {
			$headercol = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mycol, $myrow)->getValue();
			if (strpos(strtoupper($headercol),'ISSUER') !== false)
			{
				$refgolcol = $mycol;
				$rowku = $myrow;
			}
		}
		if ($rowku > 0)
			break;
	}
	$ourrow = $rowku + 1;

//=============================================================================================================
// BACA DATA EXCEL -> CARI FULLNAME/ISSUERNAME yg mengandung kata pada kolom A. Jika ada/ketemu, isis kolom
// refgolstr dan refgolcode pada tabel sandisecurity
//=============================================================================================================

//=============================================================================================================
	//$highestRow = 100;
	$k = 0;
	$kk = 0;
	for ($row = $ourrow; $row <= $highestRow; $row++) {
		$k++;
		//$asof = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
		//$asofarr = explode("-", $asof);
		//$asth = 2000 + ($asofarr[2] * 1);
		//$asof = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue(); 
		//$asofdate = PHPExcel_Style_NumberFormat::toFormattedString($asof, "yyyy-mm-dd");
		$issuerrow = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
		$golrow = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue();
		$clix = str_replace(')','',$golrow);
		$clix = trim($clix);
		$golarr = explode("(", $clix);
		$golcodex = trim($golarr[0]);
		$golstrx = trim($golarr[1]);
		$issuerrowarr = explode(",", $issuerrow);
		$jmlarr = count($issuerrowarr);
		if ($jmlarr > 0)
		{
			for ($b=0; $b<$jmlarr; $b++)
			{
				$sql01 = "UPDATE sandisecurity SET golcode='" . $golcodex . "', golstr='" . $golstrx . "' WHERE (fullname LIKE '%" . strtoupper(trim($issuerrowarr[$b])) . 
							"%' OR issuername LIKE '%" . strtoupper(trim($issuerrowarr[$b])) . "%');";
//echo $sql01 . "<br>";
				$result01 = mysqli_query($link, $sql01);
				if($result01)
				{
					$kk++;
				}
			}
		}
	}
	$countk = $k;	
	
	$statusinsert = 0;
	$jmldata = $k;

	
	$jmlk = $kk;

	unlink($filen);
	
	return "Data:" . $jmldata . " baris & " . $jmlk . " data";

}

//=========================================================================================
function readfilexlrefall($link, $filename, $userid, $tipefile)
//=========================================================================================
{
	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;
	$filen = './savefile/' . $filename;
	//$sql00 = "TRUNCATE client;";
	//$result00 = mysqli_query($link, $sql00);
	
	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;

	if ($tipefile == 'xls') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel5.php';
		$jenisxl = 'Excel5';
	}
	else if ($tipefile == 'xlsx') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';
		$jenisxl = 'Excel2007';
	}
	error_reporting(E_ALL ^ E_NOTICE);
	
	$bulan = array("", "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
	
	$objReader = PHPExcel_IOFactory::createReader($jenisxl);
	$objReader->setReadDataOnly(true);
	$objPHPExcel = $objReader->load($filen);
	$objWorksheet = $objPHPExcel->getActiveSheet();
	$highestRow = $objWorksheet->getHighestRow();
	$highestColA = $objWorksheet->getHighestDataColumn();
	$highestCol = PHPExcel_Cell::columnIndexFromString($highestColA);
	$rowku = 0;
	for($myrow=1; $myrow <= 2; $myrow++) {
		for ($mycol = 0; $mycol <= $highestCol; $mycol++) {
			$headercol = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mycol, $myrow)->getValue();
			if (strpos(strtoupper($headercol),'CLIENT NAME') !== false)
			{
				$fullnamecol = $mycol;
				$rowku = $myrow;
			}
		}
		if ($rowku > 0)
			break;
	}
	$ourrow = $rowku + 1;

//=============================================================================================================
// HAPUS DATA
//=============================================================================================================
	$sqlt = "TRUNCATE maindata;";
	$resultt = mysqli_query($link, $sqlt);
//=============================================================================================================
	//$highestRow = 100;
	$k = 0;
	$kk = 0;
	for ($row = $ourrow; $row <= $highestRow; $row++) {
		$k++;
		//$asof = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
		//$asofarr = explode("-", $asof);
		//$asth = 2000 + ($asofarr[2] * 1);
		$asof = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue(); 
		$asofdate = PHPExcel_Style_NumberFormat::toFormattedString($asof, "yyyy-mm-dd");
		$bpid = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue();
		$clientcode = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $row)->getValue();
		$clientname = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, $row)->getValue();
		$instype = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, $row)->getValue();
		$holding = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, $row)->getValue();
		$latestprice = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, $row)->getValue();
		$inscode = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(8, $row)->getValue();
		$marketvalue = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(9, $row)->getValue();
		$depo = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(10, $row)->getValue();
		$cashproceed = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(13, $row)->getValue();
		$sql01 = "INSERT INTO maindata(tgl, bpid, clientcode, clientname, instrumenttype, holding, latestprice, instrumentcode, marketvalue, 
					depository, cashproceed, createduser, createddate) VALUES('" . $asofdate . "','" . $bpid . "','" . strtoupper($clientcode) . "','" .
					strtoupper($clientname) . "','" . $instype . "'," . $holding . ",'" . $latestprice . "','" .	$inscode . "'," . $marketvalue . ",'" .
					$depo . "'," . $cashproceed . "," . $userid . ", now());";
//echo $sql01 . "<br>";
		$result01 = mysqli_query($link, $sql01);
		if($result01)
		{
			$kk++;
		}
	}
	$countk = $k;	
	
	$statusinsert = 0;
	$jmldata = $k;

	
	$jmlk = $kk;

	unlink($filen);
	
	return "Data:" . $jmldata . "/" . $jmlk;

}


//=============================================================================================================
function cekascii($mystring)
//=============================================================================================================
{
	$mylen = strlen($mystring);
	$i=0;
	$finalstr = "";
	$noteme = "";
	while ($i < $mylen)
	{
		if ((ord($mystring{$i})>57) || (ord($mystring{$i})<48)) {
			$noteme = "LETTER";
		}
		else {
			$finalstr = $finalstr . $mystring{$i};
		}
		$i++;
	}
	$myout = $finalstr;
	return $myout;
}

//---------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------

?>
</body> 

<?php

//*******************************************************************************************************
	$_SESSION['userid'] = $userid;
	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;

//*******************************************************************************************************

?>
</html>