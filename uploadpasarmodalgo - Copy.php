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


//echo $query . "<br>";
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
//ini_set("memory_limit","512M");

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
$statusupload=1;

echo "AAAA" . "<br>";
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
					if ((strpos(strtoupper($filename),'RDO') !== false))
					{
						$jmlmaindata = readfilexlmain($link, $filename, $userid, $file_extension);
						if ($outputstr==="")
							$outputstr = $jmlmaindata;
						else
							$outputstr = $jmlmaindata . "@" . $outputstr;
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

<meta http-equiv="refresh" content="10; url=uploadpasarmodal.php?userid=<?php echo $userid;?>&statusoutput=1&outputinfo=<?php echo $outputstr;?>" />

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
//echo $highestRow . "<br>";
	$rowku = 0;
	for($myrow=1; $myrow <= 2; $myrow++) {
		for ($mycol = 0; $mycol <= $highestCol; $mycol++) {
			$headercol = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mycol, $myrow)->getValue();
			if (strpos(strtoupper($headercol),'TRANSACTION DATE') !== false)
			{
				$fullnamecol = $mycol;
				$rowku = $myrow;
			}
		}
		if ($rowku > 0)
			break;
	}
	$ourrow = $rowku + 1;
//echo $ourrow . "<br>";
//=============================================================================================================
// HAPUS DATA
//=============================================================================================================
	$sqlt = "TRUNCATE apollow;";
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
		//$bpid = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue();
		$ordertype = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $row)->getValue();
		$seccode = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(10, $row)->getValue();
		$qty = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(11, $row)->getValue();
		$curr = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(13, $row)->getValue();
		$netsetamt = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(14, $row)->getValue();
		//$totqtybc = str_replace("'","",$totqtybc);
		//$totval = str_replace("'","",$totval);
		//$csx = str_replace(" ","",trim($cs));
//echo $cs . "<br>";

		$sql01 = "INSERT INTO apollow VALUES(" . $k . ",'" . $ordertype . "','" . $asofdate . "','" . $seccode . "'," . $qty . ",'" . $curr . "'," . 
					floor($netsetamt) . ", now());";


		$result01 = mysqli_query($link, $sql01);
		if($result01)
		{
			$kk++;
		}
		else
		{
//echo $sql01 . "<br>";		
		}
	}
	$countk = $k;	
	
	$statusinsert = 0;
	$jmldata = $k;

	
	$jmlk = $kk;

	unlink($filen);
	
	return "Data:" . $jmlk . "/" . $jmldata;

}

//=============================================================================================================
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