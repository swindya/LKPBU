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

ini_set('max_execution_time', 3000); //300 seconds = 5 minutes
//ini_set("memory_limit","512M");

$userid = $_SESSION['userid'];

//Get perusahaan info and tahun buku
if (!isset($_POST["perusid"])) {
	$perushid=0;
}
else
	$perushid=$_POST["perusid"];
//------------------------------------------------------
if (!isset($_POST["tahun"])) {
	$tahun=0;
}
else
	$tahun=$_POST["tahun"];
//------------------------------------------------------
if (!isset($_POST["batch"])) {
	$batch=0;
}
else
	$batch=$_POST["batch"];
//------------------------------------------------------
if (!isset($_POST["norekesa1"])) {
	$norekesa1=0;
}
else
	$norekesa1=$_POST["norekesa1"];
//------------------------------------------------------
if (!isset($_POST["norekesa2"])) {
	$norekesa2=0;
}
else
	$norekesa2=$_POST["norekesa2"];
//------------------------------------------------------
if (!isset($_POST["norekpub"])) {
	$norekpub=0;
}
else
	$norekpub=$_POST["norekpub"];
//------------------------------------------------------
if (!isset($_POST["noreklain"])) {
	$noreklain=0;
}
else
	$noreklain=$_POST["noreklain"];
//------------------------------------------------------

$norekstr = $norekesa1 . "|" . $norekesa2 . "|" . $norekpub . "|" . $noreklain;
//$namaperus=$_SESSION['namaperusahaan'];
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

//Сheck that we have a file

//if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
if(isset($_FILES['transfer1'])){
	foreach($_FILES['transfer1']['tmp_name'] as $key => $tmp_name)
	{
		$file_name = $key.$_FILES['transfer1']['name'][$key];
		$file_name = substr($file_name,1);
		$file_size =$_FILES['transfer1']['size'][$key];
		if ($file_size == null || $file_size==0) {
			continue;
		}
		$file_tmp =$_FILES['transfer1']['tmp_name'][$key];
		$file_type=$_FILES['transfer1']['type'][$key];  
		$tipefile = pathinfo($file_name, PATHINFO_EXTENSION);
		$abc = explode(".", $file_name);
		$countarr = count($abc);
		$file_extension = $abc[$countarr-1];
		//echo $file_name . "==" . $file_type . "<br>";
		//Determine the path to which we want to save this file
		$newname = './savefile/' . $file_name;
		$newnameku = dirname(__FILE__) . '\savefile' . '\\' . $file_name;
		//echo $newname . "---" . $file_extension . "<br>";
		// Check if the file with the same name is already exists on the server
		if (!file_exists($newname) && ($file_extension=='xls' || $file_extension=='xlsx')) {
        //Attempt to move the uploaded file to its new place
			if ((move_uploaded_file($_FILES['transfer1']['tmp_name'][$key],$newname))) { 
				$filename = strtoupper($file_name);
				$filename1 = $filename;
				$Time = microtime(true);
				// Tunai
				if ((strpos($filename,'TUN') !== false) && (strpos($filename,'PUB_') !== false)) {
					$jenis = "PUB";
					$tahun = tunai($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr);
				}
				if ((strpos($filename,'TUN') !== false) && (strpos($filename,'ESA_') !== false)) {
					$jenis = "ESA";
					$tahun = tunai($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr);
				}
				if ((strpos($filename,'TUN') !== false) && (strpos($filename,'ESA1_') !== false)) {
					$jenis = "ESA1";
					$tahun = tunai($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr);
				}
				if ((strpos($filename,'TUN') !== false) && (strpos($filename,'ESA2_') !== false)) {
					$jenis = "ESA2";
					$tahun = tunai($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr);
				}

				// Transfer: PUBLIC & BNI
				if ((strpos($filename,'PUB') !== false) && (strpos($filename,'BNI1') !== false)) {
					$jenis = "PUB";
					$jenisbank= "BNI1";
					transferbni($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $jenisbank, $norekstr);
				}
				if ((strpos($filename,'PUB') !== false) && (strpos($filename,'BNI2') !== false)) {
					$jenis = "PUB";
					$jenisbank= "BNI2";
					transferbni($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $jenisbank, $norekstr);
				}
				// Transfer: ESA & BNI
				if ((strpos($filename,'ESA_') !== false) && (strpos($filename,'BNI1') !== false)) {
					$jenis = "ESA";
					$jenisbank = "BNI1";
					transferbni($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $jenisbank, $norekstr);
				}
				if ((strpos($filename,'ESA_') !== false) && (strpos($filename,'BNI2') !== false)) {
					$jenis = "ESA";
					$jenisbank = "BNI2";
					transferbni($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $jenisbank, $norekstr);
				}
				if ((strpos($filename,'ESA1_') !== false) && (strpos($filename,'BNI1') !== false)) {
					$jenis = "ESA1";
					$jenisbank = "BNI1";
					transferbni($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $jenisbank, $norekstr);
				}
				if ((strpos($filename,'ESA1_') !== false) && (strpos($filename,'BNI2') !== false)) {
					$jenis = "ESA1";
					$jenisbank = "BNI2";
					transferbni($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $jenisbank, $norekstr);
				}
				if ((strpos($filename,'ESA2_') !== false) && (strpos($filename,'BNI1') !== false)) {
					$jenis = "ESA2";
					$jenisbank = "BNI1";
					transferbni($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $jenisbank, $norekstr);
				}
				if ((strpos($filename,'ESA2_') !== false) && (strpos($filename,'BNI2') !== false)) {
					$jenis = "ESA2";
					$jenisbank = "BNI2";
					transferbni($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $jenisbank, $norekstr);
				}
				// Transfer: ESA & BANK LAIN
				if ((strpos($filename,'ESA_') !== false) && (strpos($filename,'LAIN') !== false)) {
					$jenis = "ESA";
					transferlain($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr);
				}
				if ((strpos($filename,'ESA1_') !== false) && (strpos($filename,'LAIN') !== false)) {
					$jenis = "ESA1";
					transferlain($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr);
				}
				if ((strpos($filename,'ESA2_') !== false) && (strpos($filename,'LAIN') !== false)) {
					$jenis = "ESA2";
					transferlain($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr);
				}
				// Transfer: PUBLIC & BANK LAIN
				if ((strpos($filename,'PUB_') !== false) && (strpos($filename,'LAIN') !== false)) {
					$jenis = 'PUB';
					transferlain($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr);
				}
				// Transfer: PUBLIC & STANDARD CHARTER BANK
				if ((strpos($filename,'PUB_') !== false) && (strpos($filename,'SCB') !== false)) {
					$jenis = 'PUB';
					transferscb($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr);
				}
				// Transfer: ESA & STANDARD CHARTER BANK
				if ((strpos($filename,'ESA1_') !== false) && (strpos($filename,'SCB') !== false)) {
					$jenis = "ESA1";
					transferscb($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr);
				}
				if ((strpos($filename,'ESA2_') !== false) && (strpos($filename,'SCB') !== false)) {
					$jenis = "ESA2";
					transferscb($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr);
				}
				echo "It's done! The file has been saved as: ".$newname;
			} 
			else {
				echo "OK". $_FILES['transfer1']['error'][$key] . "Error: A problem occurred during file upload!";
			}	
			
		} 
		else {
			echo "Error Bingits: File ".$_FILES["transfer1"]["name"][$key]." already exists" . "<br>";
		}
		unlink($newnameku);
	}
}
else {
	echo "Error3";
}

mysqli_close($link);
$_SESSION['start'] = time(); // Taking now logged in time.

?>
<meta http-equiv="refresh" content="0; url=summary.php?id=<?php echo $perushid;?>&userid=<?php echo $userid;?>&tahun=<?php echo $tahun;?>&batch=<?php echo $batch;?>&statusupload=1" />
<?php

//*****************************************************************************************
//********************************** F U N C T I O N S  ***********************************
//*****************************************************************************************
//
//-------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------
function tunai($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr)
{
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;
	$norekarr = explode("|", $norekstr);
	$norekesa1 = $norekarr[0];
	$norekesa2 = $norekarr[1];
	$norekpub = $norekarr[2];
	$noreklain = $norekarr[3];
	if ($tipefile == 'xls') {
		require_once('./php-excel-reader/excel_reader2.php');
		require_once('SpreadsheetReader.php');
	
		error_reporting(E_ALL ^ E_NOTICE);

// READ FILE EXCEL

		$Spreadsheet = new SpreadsheetReader($newname);
		$Sheets = $Spreadsheet -> Sheets();	
	
		$k = 0;
		foreach ($Spreadsheet as $Key => $Col)
		{
			$k++;
			if ($Col)
				{
					$sppd[$k]=$Col[0];
					$nama1[$k]=$Col[2];
					if ($Col[3]==null) {
						$nama2[$k]="";
					}
					else {
						$nama2[$k]=$Col[3];
					}
					$namanikku = $nama1[$k] . $nama2[$k];
					$nikku = explode("NIK:", $namanikku);
					if (count($nikku) > 1) {
						$nik[$k] = trim($nikku[1]);
					}
					else
						$nik[$k] = "none";
					$nama1[$k]= $nikku[0];
					$nama1[$k] = str_replace("'","\'", $nama1[$k]);
					$alamat1[$k]=$Col[4];
					$alamat1[$k]=str_replace("\\","", $alamat1[$k]);
					$alamat1[$k] = str_replace("'","\'", $alamat1[$k]);
					$alamat2[$k]=$Col[5];
					$alamat2[$k]=str_replace("\\","", $alamat2[$k]);
					$alamat2[$k]=str_replace("'","\'", $alamat2[$k]);
					$seqno[$k]=$Col[6];
					$kota[$k]=$Col[7];
					$totstoc[$k]=$Col[8];
					$divgros[$k]=$Col[9];
					$taxamnt[$k]=$Col[10];
					$nominal[$k]=$divgros[$k] - $taxamnt[$k];
					$pco[$k]=$Col[17];
					$tahunku[$k] = '20'.$Col[18];
					$tahun = $tahunku[$k];
				}
		}
		$countk = $k;
	}
	else if ($tipefile == 'xlsx') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';

		error_reporting(E_ALL ^ E_NOTICE);
	
		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
		$objReader->setReadDataOnly(true);
		$objPHPExcel = $objReader->load($newname);
		$objWorksheet = $objPHPExcel->getActiveSheet();
		$highestRow = $objWorksheet->getHighestRow();

		$mysppd = 'A';
		$mynama1 = 'C';
		$mynama2 = 'D';
		$myalamat1 = 'E';
		$myalamat2 = 'F';
		$myseqno = 'G';
		$mykota = 'H';
		$mytotstoc = 'I';
		$mydivgros = 'J';	
		$mytaxamnt = 'K';		
		$mypco = 'R';
		$mytahun = 'S';
		
		$mysppd = 0; 	//Kolom A
		$mynama1 = 2;	//Kolom C
		$mynama2 = 3;	//Kolom D
		$myalamat1 = 4;	//Kolom E
		$myalamat2 = 5;	//Kolom F
		$myseqno = 6;	//Kolom G
		$mykota = 7;	//Kolom H
		$mytotstoc = 8;	//Kolom I
		$mydivgros = 9;	//Kolom J
		$mytaxamnt = 10;//Kolom K		
		$mypco = 17;	//Kolom R
		$mytahun = 18;	//Kolom S

		$k = 0;
		for ($row = 1; $row <= $highestRow; $row++) {
			$k++;
			$sppd[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mysppd,$row)->getValue();
				$sppdku = $sppd[$row];
				$sppdarr = explode(" ", $sppdku);
				$countsppd = count($sppdarr);
				if ($countsppd > 1)
					$sppd[$row] = $sppdarr[$countsppd-1];	
			$nama1[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mynama1,$row)->getValue(); 
			if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mynama2,$row)->getValue()==null) {
				$nama2[$row]="";
			}
			else {
				$nama2[$row]=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mynama2,$row)->getValue();
			}			
			//$nama2[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mynama2.$row)->getValue();
			$namanikku = $nama1[$row] . $nama2[$row];
			$nikku = explode("NIK:", $namanikku);
			if (count($nikku) > 1) {
				$nik[$row] = trim($nikku[1]);
			}
			else
				$nik[$row] = "none";
			$nama1[$row]= $nikku[0];
			$nama1[$row] = str_replace("'","\'", $nama1[$row]);
			$alamat1ku = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($myalamat1,$row)->getValue(); 
			$alamat1ku=str_replace("\\","", $alamat1ku);
			$alamat1[$row] = str_replace("'","\'", $alamat1ku);
			$alamat2ku = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($myalamat2,$row)->getValue(); 
			$alamat2ku=str_replace("\\","", $alamat2ku);
			$alamat2[$row]=str_replace("'","\'", $alamat2ku);
			$seqno[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($myseqno,$row)->getValue(); 
			$kota[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mykota,$row)->getValue(); 
			$totstoc[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mytotstoc,$row)->getValue(); 
			$divgros[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mydivgros,$row)->getValue(); 
			$taxamnt[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mytaxamnt,$row)->getValue();
			$nominal[$row] = $divgros[$row] - $taxamnt[$row];
			$pco[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mypco,$row)->getValue(); 
			$tahunku[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mytahun,$row)->getValue();
			if ($tahunku[$row]<2000) {
				$tahunku[$row] = 2000 + ($tahunku[$row]*1);
			}
			$tahun = $tahunku[$row];			
		}
		$countk = $k;
	}
	
	$jml00 = 0;
// Query ke tabel -> apakah data file sdh masuk/ada di database
	$statusinsert = 0;
	$sql00 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
			" AND batchtahun=" . $batch . " AND jenisbayar='TUN' AND jenisesop='" . $jenis . "');";
//echo $sql00 . "<br>";
	$result00 = mysqli_query($link, $sql00);
	if ($result00) {
		$jml00 = $result00->num_rows;
	}
	if ($jml00 > 0) {
		$statusinsert = 1;
	}
	if ($statusinsert == 0) {
		for ($i=1;$i <= $countk;$i++) {
			$sql01 = "INSERT INTO telkomdatindo (perusahaanID, tahun, batchtahun, norekesa1, norekesa2, norekpub, noreklain, sppd, nama1, nik, 
					alamat1, alamat2, seqno, kota, jmlsaham, jmldeviden, bayar, pajak, paymentco, year, jenisbayar, jenisesop, jenisbank, 
					createduser, createddate) VALUES(" . $perushid . "," . $tahunku[$i] . "," . $batch . ",'" . $norekesa1 . "','" . 
					$norekesa2 . "','" . $norekpub . "','" . $noreklain . "','" . $sppd[$i] . "','" . $nama1[$i] . "','" . $nik[$i] . "','" . 
					$alamat1[$i] . "','" . $alamat2[$i] . "','" . $seqno[$i] . "','" . $kota[$i] .	"'," . $totstoc[$i] . ",'" . $divgros[$i] . 
					"','" . $nominal[$i] . "','" . $taxamnt[$i] . "','" . $pco[$i] . "','" . $tahunku[$i] .	"','TUN','" . $jenis . "','none'," . 
					$userid . ",'" . $date . "');";
//echo $sql01 . "<br>";
			$result01 = mysqli_query($link, $sql01);
		}
	}
	else if ($statusinsert > 0) {
		for ($i=1;$i <= $countk;$i++) {
			$sql00 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
					" AND batchtahun=" . $batch . " AND sppd='" . $sppd[$i] . " AND bayar='" . $nominal[$i] . 
					"' AND jenisbayar='TUN' AND jenisesop='" . $jenis . "');";
			$result00 = mysqli_query($link, $sql00);
			if ($result00) {
				$jml00 = $result00->num_rows;
			}
			if ($jml00==0) {
				$sql01 = "INSERT INTO telkomdatindo (perusahaanID, tahun, batchtahun, norekesa1, norekesa2, norekpub, noreklain, sppd, nama1, nik, 
						alamat1, alamat2, seqno, kota, jmlsaham, jmldeviden, bayar, pajak, paymentco, year, jenisbayar, jenisesop, jenisbank, 
						createduser, createddate) VALUES(" . $perushid . "," . $tahunku[$i] . "," . $batch . ",'" . $norekesa1 . "','" . 
						$norekesa2 . "','" . $norekpub . "','" . $noreklain . "','" . $sppd[$i] . "','" . $nama1[$i] . "','" . $nik[$i] . "','" . 
						$alamat1[$i] . "','" . $alamat2[$i] . "','" . $seqno[$i] . "','" . $kota[$i] .	"'," . $totstoc[$i] . ",'" . $divgros[$i] . 
						"','" . $nominal[$i] . "','" . $taxamnt[$i] . "','" . $pco[$i] . "','" . $tahunku[$i] .	"','TUN','" . $jenis . "','none'," . 
						$userid . ",'" . $date . "');";
//echo $sql01 . "<br>";
				$result01 = mysqli_query($link, $sql01);
			}
		}	
	}
//unlink($newnameku);
return $tahun;
}

//-----------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------
function transferbni($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $jenisbank, $norekstr)
{
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;
	$norekarr = explode("|", $norekstr);
	$norekesa1 = $norekarr[0];
	$norekesa2 = $norekarr[1];
	$norekpub = $norekarr[2];
	$noreklain = $norekarr[3];
	if ($tipefile == 'xls') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel5.php';

		$fileType = 'Excel5';

		error_reporting(E_ALL ^ E_NOTICE);
	
		$objReader = PHPExcel_IOFactory::createReader('Excel5');
	}
	else if ($tipefile == 'xlsx') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';

		$fileType = 'Excel2007';

		error_reporting(E_ALL ^ E_NOTICE);
	
		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
	}
	$objReader->setReadDataOnly(true);
	$objPHPExcel = $objReader->load($newname);
	$objWorksheet = $objPHPExcel->getActiveSheet();
	$highestRow = $objWorksheet->getHighestRow();

	$mysppd = 'A';
	$mynama = 'B';
	$mynoacc = 'C';
	$mybayar = 'D';
		
	$mysppd = 0;
	$mynama = 1;
	$mynoacc = 2;
	$mybayar = 3;
 
	for ($row = 1; $row <= $highestRow; $row++) {
			$sppd[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mysppd,$row)->getValue();
				$sppdku = $sppd[$row];
				$sppdarr = explode(" ", $sppdku);
				$countsppd = count($sppdarr);
				if ($countsppd > 1)
					$sppd[$row] = $sppdarr[$countsppd-1];	
			//$nama[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mynama.$row)->getValue();
			if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mynama,$row)->getValue()==null) {
				$nama[$row]="";
			}
			else {
				$nama[$row]=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mynama,$row)->getValue();
			}
			$nama[$row]=str_replace("\\","", $nama[$row]);
			$nama[$row] = str_replace("'","\'", $nama[$row]);			
			$noacc[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mynoacc,$row)->getValue();   
			$bayar[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mybayar,$row)->getValue();    
	}	
	$countk = $highestRow;

	$jml00 = 0;
// Query ke tabel -> apakah data file sdh masuk/ada di database
	$statusinsert = 0;
	$sql00 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . " AND batchtahun=" . $batch .
			" AND jenisbayar='TRF' AND jenisbank = '" . $jenisbank . "' AND jenisesop='" . $jenis . "');";
//echo $sql00 . "<br>";
	$result00 = mysqli_query($link, $sql00);
	if ($result00) {
		$jml00 = $result00->num_rows;
	}
	if ($jml00 > 0) {
		$statusinsert = 1;
	}
	if ($statusinsert == 0) {
		for ($i=2;$i <= $countk;$i++) {
			//$sql01 = "INSERT INTO transferbni (perusahaanID, tahun, sppd, nama, noacc, nominal, jenis, createduser, createddate) VALUES(" . 1 . ",2013,'" . $sppd[$i] . 
			//		"','" . $nama[$i] . "','" . $noacc[$i] . "','" . $bayar[$i] . "','" . $jenis .
			//	 	"'," . $userid . ",'" . $date . "');";
			$sql01 = "INSERT INTO telkomdatindo (perusahaanID, tahun, batchtahun, norekesa1, norekesa2, norekpub, noreklain, sppd, nik, 
						nama1, noacc1, bayar, jenisbayar, jenisesop, jenisbank, createduser, createddate) VALUES(" . $perushid . "," . 
						$tahun . "," . $batch . ",'" . $norekesa1 . "','" . $norekesa2 . "','" . $norekpub . "','" . $noreklain . "','" .
						$sppd[$i] . "','none','" . $nama[$i] . "','" . $noacc[$i] . "'," . $bayar[$i] . ",'TRF','" . $jenis . "','" . 
						$jenisbank . "'," . $userid . ",'" . $date . "');";

//echo $sql01 . "<br>";
			$result01 = mysqli_query($link, $sql01);
		}
	}
	else if ($statusinsert == 1) {
		for ($i=2;$i <= $countk;$i++) {
			$sql00 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
					" AND batchtahun=" . $batch . " AND noacc1='" . $noacc[$i] . " AND bayar='" . $nominal[$i] . 
					"' AND jenisbayar='TRF' AND jenisbank = '" . $jenisbank . "' AND jenisesop='" . $jenis . "');";
			$result00 = mysqli_query($link, $sql00);
			if ($result00) {
				$jml00 = $result00->num_rows;
			}
			if ($jml00==0) {
				$sql01 = "INSERT INTO telkomdatindo (perusahaanID, tahun, batchtahun, norekesa1, norekesa2, norekpub, noreklain, sppd, nik, 
						nama1, noacc1, bayar, jenisbayar, jenisesop, jenisbank, createduser, createddate) VALUES(" . $perushid . "," . 
						$tahun . "," . $batch . ",'" . $norekesa1 . "','" . $norekesa2 . "','" . $norekpub . "','" . $noreklain . "','" .
						$sppd[$i] . "','none','" . $nama[$i] . "','" . $noacc[$i] . "'," . $bayar[$i] . ",'TRF','" . $jenis . "','BNI'," . 
						$userid . ",'" . $date . "');";

//echo $sql01 . "<br>";
				$result01 = mysqli_query($link, $sql01);
			}
		}
	}
//unlink($newnameku);
}

//-------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------
function transferlain($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr)
{

	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;
	$norekarr = explode("|", $norekstr);
	$norekesa1 = $norekarr[0];
	$norekesa2 = $norekarr[1];
	$norekpub = $norekarr[2];
	$noreklain = $norekarr[3];
	
	if ($tipefile == 'xls') {
		require_once('php-excel-reader/excel_reader2.php');
		require_once('SpreadsheetReader.php');

		error_reporting(E_ALL ^ E_NOTICE);
	
		$datarow = $data->sheets[0]['numRows'];
		$datarow = $datarow;

// READ FILE EXCEL

		$Spreadsheet = new SpreadsheetReader($newname);
		$Sheets = $Spreadsheet -> Sheets();	

		$k = 0;
		if (strpos($jenis,'PUB') !== false) {
			foreach ($Spreadsheet as $Key => $Col)
			{
				$k++;
				if ($Col)
				{
					$carisppd[$k] = $Col[0];
					if (strpos($carisppd[1],"TAHUN") !== false) {
						$tahunku[$k]=$Col[0];
						$tahap[$k]=$Col[1];
						$n = 2;
					}
					else {
						$tahunku[$k] = $tahun;
						$tahap[$k] = 1;
						$n = 0;
					}
					$sppd[$k]=$Col[$n];
						$sppdku = $sppd[$k];
						$sppdarr = explode(" ", $sppdku);
						$countsppd = count($sppdarr);
						if ($countsppd > 1)
							$sppd[$k] = $sppdarr[$countsppd-1];	
					$nama1[$k]=$Col[$n+1];
					$nama2[$k]=$Col[$n+2];
					$namanikku = $nama1[$k] . $nama2[$k];
					$nikku = explode("NIK:", $namanikku);
					if (count($nikku) > 1) {
						$nik[$k] = trim($nikku[1]);
					}
					else
						$nik[$k] = "none";
					$nama1[$k] = trim($nikku[0]);
					$nama1[$k] = str_replace("\\","", $nama1[$k]);
					$nama1[$k] = str_replace("'","\'", $nama1[$k]);	
					if ($Col[$n+3]==null) {
						$alamat1[$k] = 'none';
					}
					else {
						$alamat1[$k]=$Col[$n+3];
					}
					$alamat1[$k] = str_replace("\\","", $alamat1[$k]);
					$alamat1[$k] = str_replace("'","\'", $alamat1[$k]);	
					$alamat2[$k]=$Col[$n+4];
					$alamat2[$k] = str_replace("\\","", $alamat2[$k]);
					$alamat2[$k] = str_replace("'","\'", $alamat2[$k]);	
					if ($Col[$n+5]==null) {
						$kota[$k]='none';
					}
					else {
						$kota[$k]=$Col[$n+5];
					}
					$saham[$k]=$Col[$n+6];
					$deviden[$k]=$Col[$n+7];
					$pajak[$k]=$Col[$n+8];
					$bayar[$k]=$Col[$n+9];
					$namabank[$k]=$Col[$n+10];
					$cabangbank[$k]=$Col[$n+11];
					$alamatbank1[$k]=$Col[$n+12];
					if ($Col[$n+13] == null) {
						$alamatbank2[$k]='none';
					}
					else {
						$alamatbank2[$k]=$Col[$n+13];
					}
					if ($Col[$n+14] == null) {
						$kotabank[$k]='none';
					}
					else {
						$kotabank[$k]=$Col[$n+14];
					}
					$noaccur = (string) $Col[$n+15];
					$noaccu = str_replace("-","",$noaccur);
					$noaccu = str_replace(".","",$noaccu);
					$noaccu = str_replace(" ","",$noaccu);
					$noaccumu = cekascii($noaccu);
					$accnote = "";
					if (strlen($noaccur) > strlen($noaccu)) {
						$accnote = "SIGN";
					}				
					if (strlen($noaccu) > strlen($noaccumu)) {
						$accnote = $accnote . "LETTER";
					}
					if (strlen($noaccur) == strlen($noaccumu)) {
						$accnote = "OK";
					}
					$noacc[$k] = $noaccumu;
					$namaacc[$k]=$Col[$n+17];
					$namaacc[$k] = str_replace("\\","", $namaacc[$k]);
					$namaacc[$k] = str_replace("'","\'", $namaacc[$k]);	
				}
			}
			$countk = $k;
		}
		else if (strpos($jenis,'ESA') !== false) {
			foreach ($Spreadsheet as $Key => $Col)
			{
				$k++;
				if ($Col)
				{
					$cariku[$k] = $Col[0];
					if (strpos($cariku[1],"TAHUN") !== false) {
						$tahunku[$k]=$Col[0];
						$tahap[$k]=$Col[1];
						$n = 2;
					}
					else {
						$tahunku[$k] = $tahun;
						$tahap[$k] = 1;
						$n = 0;
					}
					$sppd[$k]=$Col[$n];
						$sppdku = $sppd[$k];
						$sppdarr = explode(" ", $sppdku);
						$countsppd = count($sppdarr);
						if ($countsppd > 1)
							$sppd[$k] = $sppdarr[$countsppd-1];	
					$nama1[$k]=$Col[$n+1];
					$nama2[$k]=$Col[$n+2];
					$namanikku = $nama1[$k] . $nama2[$k];
					$nikku = explode("NIK:", $namanikku);
					if (count($nikku) > 1) {
						$nik[$k] = trim($nikku[1]);
					}
					else
						$nik[$k] = "none";
					$nama1[$k] = trim($nikku[0]);
					$nama1[$k] = str_replace("\\","", $nama1[$k]);
					$nama1[$k] = str_replace("'","\'", $nama1[$k]);	
					if ($Col[$n+3]==null) {
						$alamat1[$k] = 'none';
					}
					else {
						$alamat1[$k]=$Col[$n+3];
					}
					$alamat1[$k] = str_replace("\\","", $alamat1[$k]);
					$alamat1[$k] = str_replace("'","\'", $alamat1[$k]);	
					if ($Col[$n+4]==null) {
						$alamat2[$k] = 'none';
					}
					else {
						$alamat2[$k]=$Col[$n+4];
					}
					$alamat2[$k] = str_replace("\\","", $alamat2[$k]);
					$alamat2[$k] = str_replace("'","\'", $alamat2[$k]);	
					if ($Col[$n+5]==null) {
						$kota[$k] = 'none';
					}
					else {
						$kota[$k]=$Col[$n+5];
					}
					$saham[$k]=$Col[$n+6];
					$deviden[$k]=$Col[$n+7];
					$pajak[$k]=$Col[$n+8];
					$bayar[$k]=$Col[$n+9];
					$namabank[$k]=$Col[$n+10];
					$noaccur = (string) $Col[$n+11];
					$noaccu = str_replace("-","",$noaccur);
					$noaccu = str_replace(".","",$noaccu);
					$noaccu = str_replace(" ","",$noaccu);
					$noaccumu = cekascii($noaccu);
					$accnot = "";
					if (strlen($noaccur) > strlen($noaccu)) {
						$accnot = "SIGN";
					}				
					if (strlen($noaccu) > strlen($noaccumu)) {
						$accnot = $accnote . "LETTER";
					}
					if (strlen($noaccur) == strlen($noaccumu)) {
						$accnot = "OK";
					}
					$accnote[$k] = $accnot;
					$noaccu = cekascii($noaccu);
					$noacc[$k] = $noaccu;
					$namaacc[$k]=$Col[$n+12];
					if (strpos($namaacc[$k], "'") || strpos($namaacc[$k], "\\")) {
						$namaacc[$k] = str_replace("\\","", $namaacc[$k]);
						$namaacc[$k] = str_replace("'","\'", $namaacc[$k]);						
					}
				}
			}
			$countk = $k;
		}
	}
	else if ($tipefile == 'xlsx') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';
		error_reporting(E_ALL ^ E_NOTICE);
	
		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
		$objReader->setReadDataOnly(true);
		$objPHPExcel = $objReader->load($newname);
		$objWorksheet = $objPHPExcel->getActiveSheet();
		$highestRow = $objWorksheet->getHighestRow();
		if (strpos($jenis,'PUB') !== false) {
			for ($row = 1; $row <= $highestRow; $row++) {
				$cariku[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
				if (strpos($cariku[1],"TAHUN") !== false) {
					$tahunku[$row]=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
					$tahap[$row]=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue();
					$n = 2;
				}
				else {
					$tahunku[$row] = $tahun;
					$tahap[$row] = 1;
					$n = 0;
				}
				$sppd[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n, $row)->getValue();
					$sppdku = $sppd[$row];
					$sppdarr = explode(" ", $sppdku);
					$countsppd = count($sppdarr);
					if ($countsppd > 1)
						$sppd[$row] = $sppdarr[$countsppd-1];	
				$nama1[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+1, $row)->getValue();
				$nama2[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+2, $row)->getValue();
				$namanikku = $nama1[$row] . $nama2[$row];
				$nikku = explode("NIK:", $namanikku);
				if (count($nikku) > 1) {
					$nik[$row] = trim($nikku[1]);
				}
				else
					$nik[$row] = "none";
				$nama1[$row] = trim($nikku[0]);
				$nama1[$row]=str_replace("\\","", $nama1[$row]);
				$nama1[$row] = str_replace("'","\'", $nama1[$row]);	
				$nama2[$row]=str_replace("\\","", $nama2[$row]);
				$nama2[$row] = str_replace("'","\'", $nama2[$row]);	
				$alamat1[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+3, $row)->getValue();
				$alamat1[$row]=str_replace("\\","", $alamat1[$row]);
				$alamat1[$row] = str_replace("'","\'", $alamat1[$row]);	
				$alamat2[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+4, $row)->getValue();
				$alamat2[$row]=str_replace("\\","", $alamat2[$row]);
				$alamat2[$row] = str_replace("'","\'", $alamat2[$row]);	
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+5, $row)->getValue()==null) {
					$kota[$row]='none';
				}
				else {
					$kota[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+5, $row)->getValue();
				}
				$saham[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+6, $row)->getValue();
				$deviden[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+7, $row)->getValue();
				$pajak[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+8, $row)->getValue();
				$bayar[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+9, $row)->getValue();
				$namabank[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+10, $row)->getValue();
				$namabank[$row]=str_replace("\\","", $namabank[$row]);
				$namabank[$row] = str_replace("'","\'", $namabank[$row]);	
				$cabangbank[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+11, $row)->getValue();
				$cabangbank[$row]=str_replace("\\","", $cabangbank[$row]);
				$cabangbank[$row] = str_replace("'","\'", $cabangbank[$row]);	
				$alamatbank1[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+12, $row)->getValue();
				$alamatbank1[$row]=str_replace("\\","", $alamatbank1[$row]);
				$alamatbank1[$row] = str_replace("'","\'", $alamatbank1[$row]);	
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+13, $row)->getValue() == null) {
					$alamatbank2[$row]='none';
				}
				else {
					$alamatbank2[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+13, $row)->getValue();
				}
				$alamatbank2[$row]=str_replace("\\","", $alamatbank2[$row]);
				$alamatbank2[$row] = str_replace("'","\'", $alamatbank2[$row]);	
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+14, $row)->getValue() == null) {
					$kotabank[$row]='none';
				}
				else {
					$kotabank[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+14, $row)->getValue();
				}
				$kotabank[$row]=str_replace("\\","", $kotabank[$row]);
				$kotabank[$row] = str_replace("'","\'", $kotabank[$row]);	
				$noaccur = (string) $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+15, $row)->getValue();
				$noaccu = str_replace("-","",$noaccur);
				$noaccu = str_replace(".","",$noaccu);
				$noaccu = str_replace(" ","",$noaccu);
				$noaccumu = cekascii($noaccu);
				$accnote = "";
				if (strlen($noaccur) > strlen($noaccu)) {
					$accnote = "SIGN";
				}				
				if (strlen($noaccu) > strlen($noaccumu)) {
					$accnote = $accnote . "LETTER";
				}
				if (strlen($noaccur) == strlen($noaccumu)) {
					$accnote = "OK";
				}
				$noacc[$row] = $noaccumu;
				$noacc[$row] = str_replace("\\","", $noacc[$row]);
				$noacc[$row] = str_replace("'","\'", $noacc[$row]);	
				$namaacc[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+17, $row)->getValue();
				$namaacc[$row] = str_replace("\\","", $namaacc[$row]);
				$namaacc[$row] = str_replace("'","\'", $namaacc[$row]);	
			}
			$countk = $highestRow;
		}
		else if (strpos($jenis,'ESA') !== false) {
			for ($row = 1; $row <= $highestRow; $row++) {
				$cariku[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
				if (strpos($cariku[1],"TAHUN") !== false) {
					$tahunku[$row]=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
					$tahap[$row]=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue();
					$n = 2;
				}
				else {
					$tahunku[$row] = $tahun;
					$tahap[$row] = 1;
					$n = 0;
				}
				$sppd[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n, $row)->getValue();
					$sppdku = $sppd[$row];
					$sppdarr = explode(" ", $sppdku);
					$countsppd = count($sppdarr);
					if ($countsppd > 1)
						$sppd[$row] = $sppdarr[$countsppd-1];	
				$nama1[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+1, $row)->getValue();
				$nama2[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+2, $row)->getValue();
				$namanikku = $nama1[$row] . $nama2[$row];
				$nikku = explode("NIK:", $namanikku);
				if (count($nikku) > 1) {
					$nik[$row] = trim($nikku[1]);
				}
				else
					$nik[$row] = "none";
				$nama1[$row] = trim($nikku[0]);
				$nama1[$row]=str_replace("\\","", $nama1[$row]);
				$nama1[$row] = str_replace("'","\'", $nama1[$row]);	
				$nama2[$row]=str_replace("\\","", $nama2[$row]);
				$nama2[$row] = str_replace("'","\'", $nama2[$row]);	
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+3, $row)->getValue() == null) {
					$alamat1[$row] = 'none';
				}
				else {
					$alamat1[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+3, $row)->getValue();
				}
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+4, $row)->getValue() == null) {
					$alamat2[$row] = 'none';
				}
				else {
					$alamat2[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+4, $row)->getValue();
				}
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+5, $row)->getValue()==null) {
					$kota[$row] = 'none';
				}
				else {
					$kota[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+5, $row)->getValue();
				}
				$alamat1[$row]=str_replace("\\","", $alamat1[$row]);
				$alamat1[$row] = str_replace("'","\'", $alamat1[$row]);	
				$alamat2[$row]=str_replace("\\","", $alamat2[$row]);
				$alamat2[$row] = str_replace("'","\'", $alamat2[$row]);	
				$saham[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+6, $row)->getValue();
				$deviden[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+7, $row)->getValue();
				$pajak[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+8, $row)->getValue();
				$bayar[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+9, $row)->getValue();
				$namabank[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+10, $row)->getValue();
				$cabangbank[$row]='none';
				$alamatbank1[$row]='none';
				$alamatbank2[$row]='none';
				$kotabank[$row]='none';
				$noaccur = (string) $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+11, $row)->getValue();
				$noaccu = str_replace("-","",$noaccur);
				$noaccu = str_replace(".","",$noaccu);
				$noaccu = str_replace(" ","",$noaccu);
				$noaccumu = cekascii($noaccu);
				$accnot = "";
				if (strlen($noaccur) > strlen($noaccu)) {
					$accnot = "SIGN";
				}				
				if (strlen($noaccu) > strlen($noaccumu)) {
					$accnot = $accnote . "LETTER";
				}
				if (strlen($noaccur) == strlen($noaccumu)) {
					$accnot = "OK";
				}
				$accnote[$row] = $accnot;
				$noaccu = cekascii($noaccu);
				$noacc[$row] = $noaccu;
				$namaacc[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+12, $row)->getValue();
				$namaacc[$row]=str_replace("\\","", $namaacc[$row]);
				$namaacc[$row] = str_replace("'","\'", $namaacc[$row]);	
			}
			$countk = $highestRow;
		}
	}
	
	$jml00 = 0;
//echo $countk;
// Query ke tabel -> apakah data file sdh masuk/ada di database
	$sql00 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
			" AND jenisbayar='TRF' AND jenisbank = 'LAIN' AND jenisesop='" . $jenis . "');";
//echo $sql00 . "<br>";
	$result00 = mysqli_query($link, $sql00);
	if ($result00) {
		$jml00 = $result00->num_rows;
	}
	if ($jml00 > 0) {
		$statusinsert = 1;
	}
	if ($statusinsert == 0) {
		for ($i=2;$i <= $countk;$i++) {
			$sql01 = "INSERT INTO telkomdatindo (perusahaanID, tahun, batchtahun, tahap, norekesa1, norekesa2, norekpub, noreklain, 
					sppd, nama1, nama2, nik, alamat1, alamat2, kota, jmlsaham, jmldeviden, pajak, bayar, namabank, cabang, 
					alamatbank1, alamatbank2, kotabank, noacc1, accnote, namaacc1, jenisbayar, jenisesop, jenisbank, createduser, 
					createddate) VALUES(" . $perushid . "," . $tahunku[$i] . "," . $batch . "," . $tahap[$i] . ",'" . $norekesa1 . "','" .
					$norekesa2 . "','" . $norekpub . "','" . $noreklain . "','" . $sppd[$i] . "','" . $nama1[$i] . "','" . $nama2[$i] . 
					"','" . $nik[$i] . "','" . $alamat1[$i] . "','" . $alamat2[$i] . "','" . $kota[$i] . "'," . $saham[$i] . ",'" . 
					$deviden[$i] . "','" . $pajak[$i] . "','" . $bayar[$i] . "','" . $namabank[$i] . "','" . $cabangbank[$i] . "','" . 
					$alamatbank1[$i] . "','" . $alamatbank2[$i] . "','" . $kotabank[$i] . "','" . $noacc[$i] . "','" . $accnote[$i] . 
					"','" . $namaacc[$i] . "','TRF','" . $jenis . "','LAIN'," . $userid . ",'" . $date . "');";
//echo $sql01 . "<br>";
			$result01 = mysqli_query($link, $sql01);
			if (strpos($namaacc[$i], "\'")) {
			}
		}
	}
	if ($statusinsert > 0) {
		for ($i=2;$i <= $countk;$i++) {
			$sql00 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
					" AND batchtahun=" . $batch . " AND noacc1='" . $noacc[$i] . " AND bayar=" . $bayar[$i] . 
					" AND jenisbayar='TRF' AND jenisbank = 'LAIN' AND jenisesop='" . $jenis . "');";
			$result00 = mysqli_query($link, $sql00);
			if ($result00) {
				$jml00 = $result00->num_rows;
			}
			if ($jml00==0) {
				$sql01 = "INSERT INTO telkomdatindo (perusahaanID, tahun, batchtahun, tahap, norekesa1, norekesa2, norekpub, noreklain, 
						sppd, nama1, nama2, nik, alamat1, alamat2, kota, jmlsaham, jmldeviden, pajak, bayar, namabank, cabang, 
						alamatbank1, alamatbank2, kotabank, noacc1, accnote, namaacc1, jenisbayar, jenisesop, jenisbank, createduser, 
						createddate) VALUES(" . $perushid . "," . $tahunku[$i] . "," . $batch . "," . $tahap[$i] . ",'" . $norekesa1 . "','" .
						$norekesa2 . "','" . $norekpub . "','" . $noreklain . "','" . $sppd[$i] . "','" . $nama1[$i] . "','" . $nama2[$i] . 
						"','" . $nik[$i] . "','" . $alamat1[$i] . "','" . $alamat2[$i] . "','" . $kota[$i] . "'," . $saham[$i] . ",'" . 
						$deviden[$i] . "','" . $pajak[$i] . "','" . $bayar[$i] . "','" . $namabank[$i] . "','" . $cabangbank[$i] . "','" . 
						$alamatbank1[$i] . "','" . $alamatbank2[$i] . "','" . $kotabank[$i] . "','" . $noacc[$i] . "','" . $accnote[$i] . 
						"','" . $namaacc[$i] . "','TRF','" . $jenis . "','LAIN'," . $userid . ",'" . $date . "');";
				$result01 = mysqli_query($link, $sql01);
				if (strpos($namaacc[$i], "\'")) {
				}
			}
		}
	}
	
//unlink($newnameku);

}

//-------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------
function transferscb($tipefile, $perushid, $tahun, $batch, $newname, $newnameku, $userid, $link, $jenis, $norekstr)
{

	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;
	$norekarr = explode("|", $norekstr);
	$norekesa1 = $norekarr[0];
	$norekesa2 = $norekarr[1];
	$norekpub = $norekarr[2];
	$noreklain = $norekarr[3];
	
	if ($tipefile == 'xls') {
		require_once('php-excel-reader/excel_reader2.php');
		require_once('SpreadsheetReader.php');

		error_reporting(E_ALL ^ E_NOTICE);
	
		$datarow = $data->sheets[0]['numRows'];
		$datarow = $datarow;

// READ FILE EXCEL

		$Spreadsheet = new SpreadsheetReader($newname);
		$Sheets = $Spreadsheet -> Sheets();	
	
		$k = 0;
		if ($jenis == 'PUB') {
			foreach ($Spreadsheet as $Key => $Col)
			{
				$k++;
				if ($Col)
				{
					$cariku[$k] = $Col[0];
					if (strpos($cariku[1],"TAHUN") !== false) {
						$tahunku[$k]=$Col[0];
						$tahap[$k]=$Col[1];
						$n = 2;
					}
					else {
						$tahunku[$k] = $tahun;
						$tahap[$k] = 1;
						$n = 0;
					}
					$sppd[$k]=$Col[$n+0];
						$sppdku = $sppd[$k];
						$sppdarr = explode(" ", $sppdku);
						$countsppd = count($sppdarr);
						if ($countsppd > 1)
							$sppd[$k] = $sppdarr[$countsppd-1];	
					$nama1[$k]=$Col[$n+1];
					$nama1[$k] = str_replace("\\","", $nama1[$k]);
					$nama1[$k] = str_replace("'","\'", $nama1[$k]);	
					$nama2[$k]=$Col[$n+2];
					$nama2[$k] = str_replace("\\","", $nama2[$k]);
					$nama2[$k] = str_replace("'","\'", $nama2[$k]);	

					if ($Col[$n+3]==null) {
						$alamat1[$k] = 'none';
					}
					else {
						$alamat1[$k]=$Col[$n+3];
					}
					$alamat1[$k] = str_replace("\\","", $alamat1[$k]);
					$alamat1[$k] = str_replace("'","\'", $alamat1[$k]);	

					if ($Col[$n+4]==null) {
						$alamat2[$k] = 'none';
					}
					else {
						$alamat2[$k]=$Col[$n+4];
					}
					$alamat2[$k] = str_replace("\\","", $alamat2[$k]);
					$alamat2[$k] = str_replace("'","\'", $alamat2[$k]);	
					if ($Col[$n+5]==null) {
						$kota[$k]='none';
					}
					else {
						$kota[$k]=$Col[$n+5];
					}
					$saham[$k]=$Col[$n+6];
					$deviden[$k]=$Col[$n+7];
					$pajak[$k]=$Col[$n+8];
					$bayar[$k]=$Col[$n+9];
					$namabank[$k]=$Col[$n+10];
					if ($Col[$n+11] == null) {
						$cabangbank[$k]='none';
					}
					else {
						$cabangbank[$k]=$Col[$n+11];
					}
					$alamatbank1[$k]=$Col[$n+12];
					$alamatbank1[$k] = str_replace("\\","", $alamatbank1[$k]);
					$alamatbank1[$k] = str_replace("'","\'", $alamatbank1[$k]);	
					if ($Col[$n+13] == null) {
						$alamatbank2[$k]='none';
					}
					else {
						$alamatbank2[$k]=$Col[$n+13];
					}
					if ($Col[$n+14] == null) {
						$kotabank[$k]='none';
					}
					else {
						$kotabank[$k]=$Col[$n+14];
					}
					$noaccu = (string) $Col[$n+15];
					$noaccu = str_replace("-","",$noaccu);
					$noaccu = str_replace(".","",$noaccu);
					$noaccu = str_replace(" ","",$noaccu);
					$noacc[$k] = $noaccu;
					$namaacc[$k]=$Col[$n+16];
					$namaacc[$k]=str_replace("\\","", $namaacc[$k]);
					$namaacc[$k] = str_replace("'","\'", $namaacc[$k]);	

				}
			}
			$countk = $k;
		}
		else if ($jenis == 'ESA') {
			foreach ($Spreadsheet as $Key => $Col)
			{
				$k++;
				if ($Col)
				{
					$cariku[$k] = $Col[0];
					if (strpos($cariku[1],"TAHUN") !== false) {
						$tahunku[$k]=$Col[0];
						$tahap[$k]=$Col[1];
						$n = 2;
					}
					else {
						$n = 0;
					}
					$sppd[$k]=$Col[$n+0];
						$sppdku = $sppd[$k];
						$sppdarr = explode(" ", $sppdku);
						$countsppd = count($sppdarr);
						if ($countsppd > 1)
							$sppd[$k] = $sppdarr[$countsppd-1];	
					$nama1[$k]=$Col[$n+1];
					$nama1[$k] = str_replace("\\","", $nama1[$k]);
					$nama1[$k] = str_replace("'","\'", $nama1[$k]);	
					$nama02=$Col[$n+2];
					$nama2[$k] = str_replace(":", "", $nama02);
					$nama2[$k] = str_replace("\\","", $nama2[$k]);
					$nama2[$k] = str_replace("'","\'", $nama2[$k]);	
					if ($Col[$n+3]==null) {
						$alamat1[$k] = 'none';
					}
					else {
						$alamat1[$k]=$Col[$n+3];
					}
					$alamat1[$k] = str_replace("\\","", $alamat1[$k]);
					$alamat1[$k] = str_replace("'","\'", $alamat1[$k]);	

					if ($Col[$n+4]==null) {
						$alamat2[$k] = 'none';
					}
					else {
						$alamat2[$k]=$Col[$n+4];
					}
					if ($Col[$n+5]==null) {
						$kota[$k] = 'none';
					}
					else {
						$kota[$k]=$Col[$n+5];
					}
					$saham[$k]=$Col[$n+6];
					$deviden[$k]=$Col[$n+7];
					$pajak[$k]=$Col[$n+8];
					$bayar[$k]=$Col[$n+9];
					$namabank[$k]=$Col[$n+10];
					if ($Col[$n+11] == null) {
						$cabangbank[$k]='none';
					}
					else {
						$cabangbank[$k]=$Col[$n+11];
					}
					$alamatbank1[$k]=$Col[$n+12];
					$alamatbank1[$k] = str_replace("\\","", $alamatbank1[$k]);
					$alamatbank1[$k] = str_replace("'","\'", $alamatbank1[$k]);	
					if ($Col[$n+13] == null) {
						$alamatbank2[$k]='none';
					}
					else {
						$alamatbank2[$k]=$Col[$n+13];
					}
					$alamatbank2[$k] = str_replace("\\","", $alamatbank2[$k]);
					$alamatbank2[$k] = str_replace("'","\'", $alamatbank2[$k]);	

					if ($Col[$n+14] == null) {
						$kotabank[$k]='none';
					}
					else {
						$kotabank[$k]=$Col[$n+14];
					}
					$noaccu=$Col[$n+15];
					$noaccu = str_replace("-","",$noaccu);
					$noaccu = str_replace(".","",$noaccu);
					$noaccu = str_replace(" ","",$noaccu);
					$noacc[$k] = $noaccu;
					$namaacc[$k]=$Col[$n+16];
					$namaacc[$k]=str_replace("\\","", $namaacc[$k]);
					$namaacc[$k] = str_replace("'","\'", $namaacc[$k]);	

				}
			}
			$countk = $k;
		}
	}
	else if ($tipefile == 'xlsx') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';
		error_reporting(E_ALL ^ E_NOTICE);
	
		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
		$objReader->setReadDataOnly(true);
		$objPHPExcel = $objReader->load($newname);
		$objWorksheet = $objPHPExcel->getActiveSheet();
		$highestRow = $objWorksheet->getHighestRow();
		if ($jenis == 'PUB') {
			for ($row = 1; $row <= $highestRow; $row++) {
				$cariku[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
				if (strpos($cariku[1],"TAHUN") !== false) {
					$tahunku[$row]=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
					$tahap[$row]=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue();
					$n = 2;
				}
				else {
					$tahunku[$row] = $tahun;
					$tahap[$row] = 1;
					$n = 0;
				}
				$sppd[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n, $row)->getValue();
					$sppdku = $sppd[$row];
					$sppdarr = explode(" ", $sppdku);
					$countsppd = count($sppdarr);
					if ($countsppd > 1)
						$sppd[$row] = $sppdarr[$countsppd-1];	
				$nama1[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+1, $row)->getValue();
				$nama1[$row]=str_replace("\\","", $nama1[$row]);
				$nama1[$row] = str_replace("'","\'", $nama1[$row]);	
				$nama2[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+2, $row)->getValue();
				$nama2[$row]=str_replace("\\","", $nama2[$row]);
				$nama2[$row] = str_replace("'","\'", $nama2[$row]);	

				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+3, $row)->getValue() == null) {
					$alamat1[$row] = 'none';
				}
				else {
					$alamat1[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+3, $row)->getValue();
				}
				$alamat1[$row]=str_replace("\\","", $alamat1[$row]);
				$alamat1[$row] = str_replace("'","\'", $alamat1[$row]);	

				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+4, $row)->getValue()==null) {
					$alamat2[$row] = 'none';
				}
				else {
					$alamat2[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+4, $row)->getValue();
				}
				$alamat2[$row]=str_replace("\\","", $alamat2[$row]);
				$alamat2[$row] = str_replace("'","\'", $alamat2[$row]);	
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+5, $row)->getValue()==null) {
					$kota[$row]='none';
				}
				else {
					$kota[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+5, $row)->getValue();
				}
				$saham[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+6, $row)->getValue();
				$deviden[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+7, $row)->getValue();
				$pajak[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+8, $row)->getValue();
				$bayar[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+9, $row)->getValue();
				$namabank[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+10, $row)->getValue();
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+11, $row)->getValue() == null) {
					$cabangbank[$row]='none';
				}
				else {
					$cabangbank[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+11, $row)->getValue();
				}
				$alamatbank1[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+12, $row)->getValue();
				$alamatbank1[$row]=str_replace("\\","", $alamatbank1[$row]);
				$alamatbank1[$row] = str_replace("'","\'", $alamatbank1[$row]);	
				if ( $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+13, $row)->getValue() == null) {
					$alamatbank2[$row]='none';
				}
				else {
					$alamatbank2[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+13, $row)->getValue();
				}
				$alamatbank2[$row]=str_replace("\\","", $alamatbank2[$row]);
				$alamatbank2[$row] = str_replace("'","\'", $alamatbank2[$row]);	
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+14, $row)->getValue() == null) {
					$kotabank[$row]='none';
				}
				else {
					$kotabank[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+14, $row)->getValue();
				}
				$noaccu = (string) $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+15, $row)->getValue();
				$noaccu = str_replace("-","",$noaccu);
				$noaccu = str_replace(".","",$noaccu);
				$noaccu = str_replace(" ","",$noaccu);
				$noacc[$row] = $noaccu;
				$namaacc[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+16, $row)->getValue();
				$namaacc[$row]=str_replace("\\","", $namaacc[$row]);
				$namaacc[$row] = str_replace("'","\'", $namaacc[$row]);	
			}
			$countk = $highestRow;
		}
		else if ($jenis == 'ESA') {
			for ($row = 1; $row <= $highestRow; $row++) {
				$cariku[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
				if (strpos($cariku[1],"TAHUN") !== false) {
					$tahunku[$row]=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
					$tahap[$row]=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue();
					$n = 2;
				}
				else {
					$n = 0;
				}
				$sppd[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n, $row)->getValue();
					$sppdku = $sppd[$row];
					$sppdarr = explode(" ", $sppdku);
					$countsppd = count($sppdarr);
					if ($countsppd > 1)
						$sppd[$row] = $sppdarr[$countsppd-1];	
				$nama1[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+1, $row)->getValue();
				$nama1[$row]=str_replace("\\","", $nama1[$row]);
				$nama1[$row] = str_replace("'","\'", $nama1[$row]);	
				$nama02 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+2, $row)->getValue();
				$nama2[$row] = str_replace(":", "", $nama02);
				$nama2[$row]=str_replace("\\","", $nama2[$row]);
				$nama2[$row] = str_replace("'","\'", $nama2[$row]);	

				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+3, $row)->getValue()==null) {
					$alamat1[$row] = 'none';
				}
				else {
					$alamat1[$row]=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+3, $row)->getValue();
				}
				$alamat1[$row]=str_replace("\\","", $alamat1[$row]);
				$alamat1[$row] = str_replace("'","\'", $alamat1[$row]);	
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+4, $row)->getValue()==null) {
					$alamat2[$row] = 'none';
				}
				else {
					$alamat2[$row]=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+4, $row)->getValue();
				}
				$alamat2[$row]=str_replace("\\","", $alamat2[$row]);
				$alamat2[$row] = str_replace("'","\'", $alamat2[$row]);	
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+5, $row)->getValue()==null) {
					$kota[$row] = 'none';
				}
				else {
					$kota[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+5, $row)->getValue();
				}
				$saham[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+6, $row)->getValue();
				$deviden[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+7, $row)->getValue();
				$pajak[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+8, $row)->getValue();
				$bayar[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+9, $row)->getValue();
				$namabank[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+10, $row)->getValue();
				$namabank[$row]=str_replace("\\","", $namabank[$row]);
				$namabank[$row] = str_replace("'","\'", $namabank[$row]);	
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+11, $row)->getValue() == null) {
					$cabangbank[$row]='none';
				}
				else {
					$cabangbank[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+11, $row)->getValue();
				}
				$cabangbank[$row]=str_replace("\\","", $cabangbank[$row]);
				$cabangbank[$row] = str_replace("'","\'", $cabangbank[$row]);	
				$alamatbank1[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+12, $row)->getValue();
				$alamatbank1[$row]=str_replace("\\","", $alamatbank1[$row]);
				$alamatbank1[$row] = str_replace("'","\'", $alamatbank1[$row]);	

				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+13, $row)->getValue() == null) {
					$alamatbank2[$row]='none';
				}
				else {
					$alamatbank2[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+13, $row)->getValue();
				}
				$alamatbank2[$row]=str_replace("\\","", $alamatbank2[$row]);
				$alamatbank2[$row] = str_replace("'","\'", $alamatbank2[$row]);	
				if ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+14, $row)->getValue() == null) {
					$kotabank[$row]='none';
				}
				else {
					$kotabank[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+14, $row)->getValue();
				}
				$kotabank[$row]=str_replace("\\","", $kotabank[$row]);
				$kotabank[$row] = str_replace("'","\'", $kotabank[$row]);	
				$noaccu = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+15, $row)->getValue();
				$noaccu = str_replace("-","",$noaccu);
				$noaccu = str_replace(".","",$noaccu);
				$noaccu = str_replace(" ","",$noaccu);
				$noacc[$row] = $noaccu;
				$namaacc[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($n+16, $row)->getValue();
				$namaacc[$row]=str_replace("\\","", $namaacc[$row]);
				$namaacc[$row] = str_replace("'","\'", $namaacc[$row]);	
			}
			$countk = $highestRow;
		}
	}
	
	$jml00 = 0;
	$statusinsert = 0;
// Query ke tabel -> apakah data file sdh masuk/ada di database
	$sql00 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
			" AND batchtahun=" . $batch . " AND jenisbayar='TRF' AND jenisbank = 'SCB' AND jenisesop='" . $jenis . "');";
	$result00 = mysqli_query($link, $sql00);
	if ($result00) {
		$jml00 = $result00->num_rows;
	}
	if ($jml00 > 0) {
		$statusinsert = 1;
	}
	if ($statusinsert == 0) {
		for ($i=2;$i <= $countk;$i++) {	
			$sql01 = "INSERT INTO telkomdatindo (perusahaanID, tahun, batchtahun, tahap, norekesa1, norekesa2, norekpub, noreklain, 
					sppd, nama1, nama2, alamat1, alamat2, kota, jmlsaham, jmldeviden, pajak, bayar, namabank, cabang, alamatbank1, 
					alamatbank2, kotabank, noacc1, namaacc1, jenisbayar, jenisesop, jenisbank, createduser, createddate) VALUES(" . 
					$perushid . "," . $tahunku[$i] . "," . $batch . "," . $tahap[$i] . ",'" . $norekesa1 . "','" . $norekesa2 . 
					"','" . $norekpub . "','" . $noreklain . "','" . $sppd[$i] . "','" . $nama1[$i] . 
					"','" . $nama2[$i] . "','" . $alamat1[$i] . "','" . $alamat2[$i] . "','" . $kota[$i] . "'," . $saham[$i] . ",'" . 
					$deviden[$i] . "','" . $pajak[$i] . "','" . $bayar[$i] . "','" . $namabank[$i] . "','" . $cabangbank[$i] . "','" . 
					$alamatbank1[$i] . "','" . $alamatbank2[$i] . "','" . $kotabank[$i] . "','" . $noacc[$i] . "','" . $namaacc[$i] . 
					"','TRF','" . $jenis . "','SCB'," . $userid . ",'" . $date . "');";
			$result01 = mysqli_query($link, $sql01);
		}
	}
	else if ($statusinsert > 0) {
		for ($i=2;$i <= $countk;$i++) {
			$sql00 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
					" AND batchtahun=" . $batch . " AND noacc1='" . $noacc[$i] . " AND bayar='" . $nominal[$i] . 
					"' AND jenisbayar='TRF' AND jenisbank = 'SCB' AND jenisesop='" . $jenis . "');";
			$result00 = mysqli_query($link, $sql00);
			if ($result00) {
				$jml00 = $result00->num_rows;
			}
			if ($jml00==0) {
				$sql01 = "INSERT INTO telkomdatindo (perusahaanID, tahun, batchtahun, tahap, norekesa1, norekesa2, norekpub, noreklain, 
						sppd, nama1, nama2, alamat1, alamat2, kota, jmlsaham, jmldeviden, pajak, bayar, namabank, cabang, alamatbank1, 
						alamatbank2, kotabank, noacc1, namaacc1, jenisbayar, jenisesop, jenisbank, createduser, createddate) VALUES(" . 
						$perushid . "," . $tahunku[$i] . "," . $batchtahun . "," . $tahap[$i] . ",'" . $norekesa1 . "','" . $norekesa2 . 
						"','" . $norekpub . "','" . $noreklain . "','" . $sppd[$i] . "','" . $nama1[$i] . 
						"','" . $nama2[$i] . "','" . $alamat1[$i] . "','" . $alamat2[$i] . "','" . $kota[$i] . "'," . $saham[$i] . ",'" . 
						$deviden[$i] . "','" . $pajak[$i] . "','" . $bayar[$i] . "','" . $namabank[$i] . "','" . $cabangbank[$i] . "','" . 
						$alamatbank1[$i] . "','" . $alamatbank2[$i] . "','" . $kotabank[$i] . "','" . $noacc[$i] . "','" . $namaacc[$i] . 
						"','TRF','" . $jenis . "','SCB'," . $userid . ",'" . $date . "');";
				$result01 = mysqli_query($link, $sql01);
			}
		}
	}
//unlink($newnameku);
}

//--------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------
function cekascii($mystring)
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
	$_SESSION['perusahaanid'] = $perushid;
	//$_SESSION['namaperusahaan'] = $namaperus;
	$_SESSION['tahun'] = $tahun;
	$_SESSION['batch'] = $batch;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;



//*******************************************************************************************************

?>
</html>