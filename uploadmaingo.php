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
	if(isset($_FILES['uploadfilemain'])){
		$file_name = $_FILES['uploadfilemain']['name'];
		//$file_name = substr($file_name,1);
		$file_size =$_FILES['uploadfilemain']['size'];
		if ($file_size == null || $file_size==0) {
			continue;
		}
//echo $userid . "<br>";
		$file_tmp =$_FILES['uploadfilemain']['tmp_name'];
		$file_type=$_FILES['uploadfilemain']['type']; 
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
			if ((move_uploaded_file($_FILES['uploadfilemain']['tmp_name'],$newname))) { 
				$filename = strtoupper($file_name);
				$filename1 = $filename;
				$Time = microtime(true);
				readfiletxt($link, $filename, $userid);
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
	$dataku = "maindata";
	$sql1 = "INSERT INTO mylog (userid, username, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . 
				",'" . $usernameku . "',now(),'UPLOAD', '" . $dataku . "');";
//echo $sql1 . "<br>";
	$res = mysqli_query($link,$sql1);
}

mysqli_close($link);
$_SESSION['start'] = time(); // Taking now logged in time.

?>

<meta http-equiv="refresh" content="0; url=uploadmain.php?userid=<?php echo $userid;?>&statusfile=1" />

<?php

//*****************************************************************************************
//********************************** F U N C T I O N S  ***********************************
//*****************************************************************************************
//
//-----------------------------------------------------------------------------------------
//=========================================================================================
function readfiletxt($link, $filename, $userid)
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
	while(!feof($file)){
		$k++;
		$barisdata = fgets($file);
		$line[$k] = $barisdata;
		if ($k > 1)
		{
			$linearr = explode('|', $line[$k]);
			$tglraw = $linearr[0];
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
			$startdate = $linearr[10];
			$enddate = $linearr[11];
			$holding = round($linearr[12]);
			$latestprice = $linearr[13];
			$marketvalue = round($linearr[14]);
			$cashproceed = round($linearr[15]);
			$depository = $linearr[16];
			$sqlku = "INSERT INTO maindata(tgl, bpid, clientcode, clientname, clientcountry, instrumenttype, issuername, issuercountry,
					instrumentcode, iss, startdate, enddate, holding, latestprice, marketvalue, cashproceed, depository,
					createduser, createddate) VALUES('" . $tglku . "','" . $bpid . "','" . $clicode . "','" . $cliname . "','" .
					$clicountry . "','" . $instrutype . "','" . $issuername . "','" . $issuercountry . "','" . $instrucode . 
					"','" . $iss . "','" . $startdate . "','" . $enddate . "'," . $holding . ",'" . $latestprice . 
					"'," . $marketvalue . "," . $cashproceed . ",'" . $depository .  "'," . $userid . ", now()" . ");";
//echo $sqlku . "<br>";
			$resku = mysqli_query($link, $sqlku);
		}
	}
	fclose($file);
	
	$jmlk = $k;
	
	
/*	
	$getheader = 0;
	$totme = 0;
	$nodata = 0;
	for ($ii=2;$ii<=$jmlk;$ii++)
	{
		$i = $ii - 1;
		$linearr = explode(';', $line[$ii]);
		$nopeg[$i] = $linearr[$nopegindex];
		$namapeg[$i] = $linearr[$namapegindex];
		$norekdb[$i] = $linearr[$norekdbindex];
		$norekkd[$i] = $linearr[$norekkdindex];
		$jmlgaji[$i] = $linearr[$jmlgajiindex];
		$ket1[$i] = $linearr[$ket1index];
		$ket2[$i] = $linearr[$ket2index];
		$tgl[$i] = $linearr[$tglindex];
		$ket3[$i] = $linearr[$tglindex];
		$namaicons[$i] = $linearr[$namaiconsindex];
		$tglmu = $tgl[$i];
		$tglmuarr = explode('-', $tglmu);
		$tglku[$i] = $tglmuarr[2] . "-" . $tglmuarr[1] . "-" . $tglmuarr[0];
		$flag[$i] = trim($linearr[$flagindex]);
	
		$sql00 = "INSERT INTO autodebetkreditext (autodkcustomerID, nomor, nopeg, namapeg, norekdb, norekkd, jmlgaji, keterangan1, keterangan2, 
					keterangan3, tgl, createduser, createddate) VALUES (" .	$produkid . "," . $k . ",'" . $nopegku[$k] . "','" . $namapegku[$k] . "','" . 
					$norekdbku[$k] . "','" . $norekkd . "'," . $jmlgajiku[$k] . ",'" . $ket1ku[$k] . "','" . $ket2ku[$k] . "','" . 
					$ket3ku[$k] . "','" . $tglku . "'," . $userid . ", now());";
		$res00 = mysqli_query($link, $sql00);
	}
*/

	$jmlk = $k;

	unlink($filen);


	//return $jmldatamatch . "|" . $jmlunmatchtek . "|" . $jmlunmatchext;
	//return $jmlinfo . "|" . $statusmatch;
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