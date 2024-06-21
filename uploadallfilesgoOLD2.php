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
window.top.location.href = "index.php"; 
</script>
<?php
die;
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
					if ((strpos($filename,'MAIN') !== false)) 
						readfiletxtmain($link, $filename, $userid);
					if ((strpos($filename,'BOND') !== false)) 
						readfiletxtequitybond($link, $filename, $userid);
					if ((strpos($filename,'EQUIT') !== false)) 
						readfiletxtequitybond($link, $filename, $userid);
					if ((strpos(strtoupper($filename),'SANDI') !== false) && (strpos(strtoupper($filename),'CLIENT') !== false)) 
						readfilexlsandiclient($link, $filename, $userid, $file_extension);
					if ((strpos(strtoupper($filename),'SANDI') !== false) && (strpos(strtoupper($filename),'SEC') !== false)) 
						readfilexlsandisec($link, $filename, $userid, $file_extension);
				}
			} 
		}
	}
	else {
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

<meta http-equiv="refresh" content="0; url=uploadallfiles.php?userid=<?php echo $userid;?>&statusfile=1" />

<?php

//*****************************************************************************************
//********************************** F U N C T I O N S  ***********************************
//*****************************************************************************************
//
//-----------------------------------------------------------------------------------------
//=========================================================================================
function readfiletxtequitybond($link, $filename, $userid)
//=========================================================================================
{
	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;
	$filen = './savefile/' . $filename;
	$file = fopen($filen, "r");
	$k = 0;
	$nopegindex = 0;
	$namapegindex = 0;
	$norekdbindex = 0;
	$jmlgajiindex = 0;
//Cari tgl
	while(!feof($file)){
		$k++;
		$barisdata = fgets($file);
		$line[$k] = $barisdata;
		if ($k == 3)							// Cari tgl create saja
		{
			$linearr = explode('|', $line[$k]);
			$shortname = trim($linearr[0]);
			$description = trim($linearr[1]);
			$tglraw = $linearr[2];
			$tglarr = explode('-',$tglraw);
			$tgltgl = $tglarr[0];
			$tglbul = $tglarr[1];
			$tgltahun = $tglarr[2] + 2000;
			$tglbulan=0;
			for($m=0; $m<12; $m++)
			{
				if (strtoupper($tglbul)==strtoupper($bulan[$m]))
				{
					$tglbulan = $m+1;
					break;
				}
			}
			$tglku = $tgltahun . "-" . $tglbulan . "-" . $tgltgl;
		}
	}
	fclose($file);
//Cek apakah data dgn tgl x sudah ada di database

	$sql = "SELECT * FROM equitybond WHERE (tglcreate='" . $tglku . "');";
	$row_cnt = 0;
	$jmldata = 0;
	$result = mysqli_query($link, $sql);
	if ($result) {
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt > 0) {
		$sqldel = "DELETE FROM equitybond WHERE (tglcreate='" . $tglku . "');";
		$result = mysqli_query($link, $sqldel);
	}

// Baca semua data dan masukkan ke DB
//==================================================================================================================
	$k = 0;
	$mm = 0;
	$file = fopen($filen, "r");	
	while(!feof($file)){
		$k++;
		$barisdata = fgets($file);
		$line[$k] = trim($barisdata);
		if ($k > 1 && strlen($line[$k])>10)
		{
			$mm++;
			$linearr = explode('|', $line[$k]);
			$shortname = trim($linearr[0]);
//echo $mm . " " . $shortname . "<br>";
			$description = trim($linearr[1]);
			$tglraw = $linearr[2];
			$tglarr = explode('-',$tglraw);
			$tgltgl = $tglarr[0];
			$tglbul = $tglarr[1];
			$tgltahun = $tglarr[2] + 2000;
			$tglbulan=0;
			for($m=0; $m<12; $m++)
			{
				if (strtoupper($tglbul)==strtoupper($bulan[$m]))
				{
					$tglbulan = $m+1;
					break;
				}
			}
			$tglku = $tgltahun . "-" . $tglbulan . "-" . $tgltgl;
//echo $tglku . "<br>";
//Check tgl. Kalau sudah ada di DB, hapus semua data pada tgl tsb.

			$type = $linearr[3];
			$subtype = $linearr[4];
			$localcode = $linearr[5];
			$isincode = $linearr[6];
			$curr = $linearr[7];
			$demat = $linearr[8];
			$startdate = $linearr[9];
			if ($startdate==null || $startdate=="" || strlen($startdate)<2)
				$startku = "";
			else {
				$tglarr = explode('-',$startdate);
				$starttgl = $tglarr[0];
				$startbul = $tglarr[1];
				$starttahun = $tglarr[2] * 1;
				if ($starttahun > 70)
					$starttahun =  $starttahun + 1900;
				else if ($starttahun <=70)
					$starttahun =  $starttahun + 2000;
				$startbulan=0;
				for($m=0; $m<12; $m++)
				{
					if (strtoupper($startbul)==strtoupper($bulan[$m]))
					{
						$startbulan = $m+1;
						break;
					}
				}
				$startku = $starttahun . "-" . $startbulan . "-" . $starttgl;
			}
			$enddate = $linearr[10];
			$tglarr = explode('-',$enddate);
			if ($enddate==null || $enddate=="" || strlen($enddate)<2)
				$endku = "";
			else {
				$endtgl = $tglarr[0];
				$endbul = $tglarr[1];
				$endtahun = $tglarr[2] * 1;
				if ($endtahun > 70)
					$endtahun =  $endtahun + 1900;
				else if ($endtahun <=70)
					$endtahun =  $endtahun + 2000;
				$endbulan=0;
				for($m=0; $m<12; $m++)
				{
					if (strtoupper($endbul)==strtoupper($bulan[$m]))
					{
						$endbulan = $m+1;
						break;
					}
				}
				$endku = $endtahun . "-" . $endbulan . "-" . $endtgl;
			}
// Cari jenis surat berharga
			
			$sql0 = "SELECT * FROM jenissuratberharga WHERE (UPPER(keterangan) = '" . strtoupper($subtype) . "' OR UPPER(keterangan)='" . strtoupper($type) . "');";
//echo $sql0 . "<br>";
			$row_cnt = 0;
			$jmldata = 0;
			$result = mysqli_query($link, $sql0);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt > 0) {
				$i = 0;
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$i++;
					$kodejenis = $row['kode'];
				}
			}
//Periksa apakah ada data yg sama persis. Jika ada, tidak insert. Jika tidak ada, masukkan
			$sql0 = "SELECT * FROM equitybond WHERE (tglcreate='" . $tglku . "' AND shortname='" . $shortname  . "' AND type='" . $type . "' AND subtype='" . 
					$subtype . "' AND localcode='" . $localcode . "' AND isincode='" . $isincode . "' AND cur='" . $curr . "');";
			$row_cnt = 0;
			$jmldata = 0;
			$result = mysqli_query($link, $sql0);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt == 0) {
				$sqlku = "INSERT INTO equitybond(tglcreate, shortname, description, type, subtype, localcode, isincode, cur, dematerialized,
						startdate, enddate, jenissuratberharga, createduser, createddate) VALUES('" . $tglku . "','" . $shortname . "','" . 
						$description . "','" . $type . "','" .	$subtype . "','" . $localcode . "','" . $isincode . "','" . $curr . "','" . $demat . 
						"','" . $startku . "','" . $endku . "'," . $kodejenis . "," . $userid . ", now()" . ");";
				$resku = mysqli_query($link, $sqlku);
			}

		}
	}
	fclose($file);
	
	$jmlk = $mm;
	
	unlink($filen);


	//return $jmldatamatch . "|" . $jmlunmatchtek . "|" . $jmlunmatchext;
	//return $jmlinfo . "|" . $statusmatch;
}
//=========================================================================================
function readfiletxtclient($link, $filename, $userid)
//=========================================================================================
{
	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;
	$filen = './savefile/' . $filename;
	$file = fopen($filen, "r");
	$k = 0;
	$nopegindex = 0;
	$namapegindex = 0;
	$norekdbindex = 0;
	$jmlgajiindex = 0;
//HAPUS Data yg ada di DATABASE

	$sql00 = "TRUNCATE client;";
	$result00 = mysqli_query($link, $sql00);

//Cek apakah data dgn tgl x sudah ada di database
/*
	$sql = "SELECT * FROM equitybond WHERE (tglcreate='" . $tglku . "');";
	$row_cnt = 0;
	$jmldata = 0;
	$result = mysqli_query($link, $sql);
	if ($result) {
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt > 0) {
		$sqldel = "DELETE FROM equitybond WHERE (tglcreate='" . $tglku . "');";
		$result = mysqli_query($link, $sqldel);
	}
*/
// Baca semua data dan masukkan ke DB
//==================================================================================================================
	$k = 0;
	$mm = 0;
	$file = fopen($filen, "r");	
	while(!feof($file)){
		$k++;
		$barisdata = fgets($file);
		$line[$k] = trim($barisdata);
		if ($k > 1 && strlen($line[$k])>10)
		{
			$mm++;
			$linearr = explode('|', $line[$k]);
			$fullname = trim($linearr[1]);
			$shortname = trim($linearr[2]);
			$type = $linearr[3];
			$sandi = $linearr[4];
			$localcode = $linearr[5];

//Periksa apakah ada data yg sama persis. Jika ada, tidak insert. Jika tidak ada, masukkan
			$sql0 = "SELECT * FROM client WHERE (shortname='" . $shortname  . "');";
//echo $sql0 . "<br>";
			$row_cnt = 0;
			$jmldata = 0;
			$result = mysqli_query($link, $sql0);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt == 0) {
				$sqlku = "INSERT INTO client(fullname, shortname, tipeinvestor, sandigolongan, sandipemilik, createduser, createddate) VALUES('" . 
						$fullname . "','" . $shortname . "','" . $type . "','" .	$sandi . "','" . $localcode . "'," . $userid . ", now()" . ");";
//echo $sqlku . "<br>";
				$resku = mysqli_query($link, $sqlku);
			}

		}
	}
	fclose($file);
	
	$jmlk = $mm;
	
	unlink($filen);


	//return $jmldatamatch . "|" . $jmlunmatchtek . "|" . $jmlunmatchext;
	//return $jmlinfo . "|" . $statusmatch;
}
//=========================================================================================
function readfiletxtmain($link, $filename, $userid)
//=========================================================================================
{
	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;
	$filen = './savefile/' . $filename;
	$file = fopen($filen, "r");
	$k = 0;
	$mm = 0;
	$nopegindex = 0;
	$namapegindex = 0;
	$norekdbindex = 0;
	$jmlgajiindex = 0;
	while(!feof($file)){
		$k++;
		$barisdata = fgets($file);
		$line[$k] = $barisdata;
		if ($k > 1 && strlen($line[$k])>10)
		{
			$linearr = explode('|', $line[$k]);
			$tglraw = $linearr[0];
			if (strpos(strtoupper($line[$k]), 'AS OF') !== false)
			{
				$bbb = 0;
//echo "--" . $tglraw . "<br>";			
			}
			else
			{
				$mm++;
//echo $tglraw . "<br>";
				$tglarr = explode('-',$tglraw);
				$tgltgl = $tglarr[0];
				$tglbul = $tglarr[1];
				$tgltahun = $tglarr[2] + 2000;
				$tglbulan=0;
				for($m=0; $m<12; $m++)
				{
					if (strtoupper($tglbul)==strtoupper($bulan[$m]))
					{
						$tglbulan = $m+1;
						break;
					}
				}
				$tglku = $tgltahun . "-" . $tglbulan . "-" . $tgltgl;
//Check tgl. Kalau sudah ada di DB, hapus semua data pada tgl tsb.
				if ($k==2) {
					$sql = "SELECT * FROM maindata WHERE tgl='" . $tglku . "';";
					$row_cnt = 0;
					$jmldata = 0;
					$result = mysqli_query($link, $sql);
					if ($result) {
// determine number of rows result set //
						$row_cnt = $result->num_rows;
					}
					if ($row_cnt>0) {
						$sqldel = "DELETE FROM maindata WHERE tgl='" . $tglku . "';";
						$resultdel = mysqli_query($link, $sqldel);
					}
				}
				$bpid = $linearr[1];
				$clicode = $linearr[2];
				$cliname = $linearr[3];
				$clicountry = $linearr[4];
				$instrutype = $linearr[5];
				$issuername = $linearr[6];
				$issuercountry = $linearr[7];
				$instrucode = $linearr[8];
				$iss = $linearr[9];
//-------------------------------------------------------------------------
				$startdate = $linearr[10];
				if ($startdate==null || $startdate=="" || strlen($startdate)<2)
					$tglstartku = "";
				else {
					$tglarr = explode('-',$startdate);
					$tgltgl = $tglarr[0];
					$tglbul = $tglarr[1];
					$tgltahun = $tglarr[2] * 1;
//echo "*" . $line[$k] . "<br>";
//echo $tgltahun . "<br>";
					if ($tgltahun > 70)
						$tgltahun =  $tgltahun + 1900;
					else if ($tgltahun <= 70)
						$tgltahun =  $tgltahun + 2000;
					$tglbulan=0;
					for($m=0; $m<12; $m++)
					{
						if (strtoupper($tglbul)==strtoupper($bulan[$m]))
						{
							$tglbulan = $m+1;
							break;
						}
					}
					$tglstartku = $tgltahun . "-" . $tglbulan . "-" . $tgltgl;
				}
//------------------------------------------------------------------------
				$enddate = $linearr[11];
				if ($enddate==null || $enddate=="" || strlen($enddate)<2)
					$tglendku = "";
				else {
					$tglarr = explode('-',$enddate);
					$tgltgl = $tglarr[0];
					$tglbul = $tglarr[1];
					$tgltahun = $tglarr[2] * 1;
//echo "---" . $tgltahun . "<br>";
					if ($tgltahun > 70)
						$tgltahun =  $tgltahun + 1900;
					else if ($tgltahun <= 70)
						$tgltahun =  $tgltahun + 2000;
					$tglbulan=0;
					for($m=0; $m<12; $m++)
					{
						if (strtoupper($tglbul)==strtoupper($bulan[$m]))
						{
							$tglbulan = $m+1;
							break;
						}
					}
					$tglendku = $tgltahun . "-" . $tglbulan . "-" . $tgltgl;
				}
//-------------------------------------------------------------------------
				$holding = round($linearr[12]);
				$latestprice = $linearr[13];
				$marketvalue = round($linearr[14]);
				$cashproceed = round($linearr[15]);
				$depository = $linearr[16];
				if (strlen($bpid) > 3) {
					$sqlku = "INSERT INTO maindata(tgl, bpid, clientcode, clientname, clientcountry, instrumenttype, issuername, issuercountry,
							instrumentcode, iss, startdate, enddate, holding, latestprice, marketvalue, cashproceed, depository,
							createduser, createddate) VALUES('" . $tglku . "','" . $bpid . "','" . $clicode . "','" . $cliname . "','" .
							$clicountry . "','" . $instrutype . "','" . $issuername . "','" . $issuercountry . "','" . $instrucode . 
							"','" . $iss . "','" . $tglstartku . "','" . $tglendku . "'," . $holding . ",'" . $latestprice . 
							"'," . $marketvalue . "," . $cashproceed . ",'" . $depository .  "'," . $userid . ", now()" . ");";
//echo $sqlku . "<br>";
					$resku = mysqli_query($link, $sqlku);
				}
			}
		}
	}
	fclose($file);
	
	$jmlk = $mm;

	unlink($filen);

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
			if (strpos(strtoupper($headercol),'SHORT') !== false && strpos(strtoupper($headercol),'NAME') !== false)
				$shortnamecol = $mycol;
			if (strpos(strtoupper($headercol),'TYPE') !== false && strpos(strtoupper($headercol),'INVESTOR') !== false) 
				$typeinvestorcol = $mycol;
		}
		if ($rowku > 0)
			break;
	}
	$ourrow = $rowku + 1;

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

		$shortname[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($shortnamecol, $row)->getValue();
		$fullname[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fullnamecol, $row)->getValue();
		$typeinvestor[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($typeinvestorcol, $row)->getValue();
		$sandigol[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, $row)->getValue();
		$pemiliksb[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($5, $row)->getValue();
	}
	$countk = $k;

	$statusinsert = 0;

	for ($i=1; $i <= $countk; $i++) {

		$sql01 = "INSERT INTO client(fullname, shortname, tipeinvestor, sandigolongan, sandipemilik, createduser, createddate) VALUES('" . 
					$fullname[$i] . "','" . $shortname[$i] . "','" . $typeinvestor[$i] . "','" .	$sandigol[$i] . "','" . 
					$pemiliksb[$i] . "'," . $userid . ", now());";
//echo $sql01 . "<br>";
		$result01 = mysqli_query($link, $sql01);
	}
	


unlink($filen);
return $countk;	
	
}



//=============================================================================================================
function readfilexlsandiclient($link, $filename, $userid, $tipefile)
//=============================================================================================================
{
	$filen = './savefile/' . $filename;
	$sql00 = "TRUNCATE client;";
	$result00 = mysqli_query($link, $sql00);

	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;

echo $filename . "<br>";	
	
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
				$shortnamecol = $mycol;
				$rowku = $myrow;
			if (strpos(strtoupper($headercol),'FULL') !== false && strpos(strtoupper($headercol),'NAME') !== false) 
				$fullnamecol = $mycol;
			if (strpos(strtoupper($headercol),'TYPE') !== false && strpos(strtoupper($headercol),'INVESTOR') !== false) 
				$typeinvestorcol = $mycol;
			if (strpos(strtoupper($headercol),'SANDI') !== false && strpos(strtoupper($headercol),'BERHARGA 1') !== false) 
				$sandiharga1col = $mycol;
			if (strpos(strtoupper($headercol),'SANDI') !== false && strpos(strtoupper($headercol),'BERHARGA 2') !== false) 
				$sandiharga2col = $mycol;
		}
		if ($rowku > 0)
			break;
	}
	$ourrow = $rowku + 1;

	$k = 0;
	for ($row = $ourrow; $row <= $highestRow; $row++) {
		$k++;
		$fullnameku[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fullnamecol, $row)->getValue();
		$shortnameku[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($shortnamecol, $row)->getValue();
		$typeinvestorku[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($typeinvestorcol, $row)->getValue(); 
		$sandiharga1ku[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($sandiharga1col, $row)->getOldCalculatedValue();
		$sandiharga2ku[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($sandiharga2col, $row)->getValue();
	}
	$countk = $k;	
	
	$statusinsert = 0;

	for ($i=1; $i <= $countk; $i++) {

		$sql01 = "INSERT INTO client (shortname, fullname, tipeinvestor, sandigolongan, sandipemilik, createduser, createddate) VALUES('" . 
				$shortnameku[$i] . "','" . $fullnameku[$i] . "','" . $typeinvestorku[$i] . "'," . $sandiharga1ku[$i] . ",'" . $sandiharga2ku[$i] . 
				"'," . $userid . ",now());";
//echo $sql01 . "<br>";
		$result01 = mysqli_query($link, $sql01);
//echo $i . "--" . $result01 . "--" . $sql01 . "<br><br>";
	}


unlink($filen);
return $countk;	
	
}

//=============================================================================================================
function readfilexlsandisec($link, $filename, $userid, $tipefile)
//=============================================================================================================
{
	$filen = './savefile/' . $filename;
	$sql00 = "TRUNCATE sandisecurity;";
	$result00 = mysqli_query($link, $sql00);
	
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
			if (strpos(strtoupper($headercol),'TANGGAL') !== false && strpos(strtoupper($headercol),'TERBIT') !== false) 
				$tglterbitcol = $mycol;
			if (strpos(strtoupper($headercol),'TANGGAL') !== false && strpos(strtoupper($headercol),'JATUH TEMPO') !== false) 
				$tgljatuhtempocol = $mycol;
			if (strpos(strtoupper($headercol),'TYPE') !== false) 
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
		$fullname[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fullnamecol, $row)->getValue();
		$jenisvaluta[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($jenisvalutacol, $row)->getValue();
		$issuername[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($issuernamecol, $row)->getValue(); 
		$seccriteria[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($seccriteriacol, $row)->getValue();
		$tglterbit[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($tglterbitcol, $row)->getFormattedValue();
		$tgljatuhtempo[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($tgljatuhtempocol, $row)->getFormattedValue();
//echo $tglterbit[$k] . "<br>";
		$type[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($typecol, $row)->getValue();
		$subtype[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($subtypecol, $row)->getValue();
		//$equities[$k] = str_replace("'","",$equities[$k]);
		$sandipenerbit[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($sandipenerbitcol, $row)->getValue();
		//$bondgovt[$k] = str_replace("'","",$bondgovt[$k]);
		$sandijenis[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($sandijeniscol, $row)->getValue();
		//$bondcorp[$k] = str_replace("'","",$bondcorp[$k]);
		$negaraasal[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($negaraasalcol, $row)->getValue();
		//$security[$k] = str_replace("'","",$security[$k]);

	}
	$countk = $k;

	$statusinsert = 0;

	for ($i=1; $i <= $countk; $i++) {
		$sql01 = "INSERT INTO sandisecurity (shortname, fullname, issuername, jenisvaluta, seccriteria, tglterbit, tgljatuhtempo, type, subtype, 
				sandipenerbit, jenissuratberharga, negaraasal, createduser, createddate) VALUES('" . 
				$shortname[$i] . "','" . $fullname[$i] . "','" . $issuername[$i] . "','" . $jenisvaluta[$i] . "','" . $seccriteria[$i] . 
				"','" . $tglterbit[$i] . "','" . $tgljatuhtempo[$i] . "','" . $type[$i] . "','" . $subtype[$i] . "'," . $sandipenerbit[$i] . "," . 
				$sandijenis[$i] . ",'" . $negaraasal[$i] . "'," . $userid . ",now());";
//echo $sql01 . "<br>";
		$result01 = mysqli_query($link, $sql01);
	}
	


unlink($filen);
return $countk;	
	
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