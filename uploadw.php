<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="./Chosen/chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">

<script src="script.js"></script>

<script src="jquery-1.11.2.min.js"></script>

<link rel="stylesheet" href="./datepicker/public/css/default.css" type="text/css">
<script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>
<link rel="stylesheet" href="./datepicker/public/css/default.css" type="text/css">
<link type="text/css" rel="stylesheet" href="./datepicker/examples/libraries/syntaxhighlighter/public/css/shCoreDefault.css">

<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shCore.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushJScript.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushXML.js"></script>

<link type="text/css" rel="stylesheet" href="barloading1.css">

<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
</style>

<style type="text/css">
	/*this is just to organize the demo checkboxes*/
	label {margin-right:20px;}
</style>

<script type="text/javascript">
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.all();
</script>
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
font-size: 16px;
padding: 10px 16px 12px;
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
<style> 
  .textbox { 
    border: 1px solid #c4c4c4; 
    height: 14px; 
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
</style>
<style>
.textboxnarrow { 
    border: 1px solid #c4c4c4; 
    height: 14px; 
    width: 40px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 4px; 
    box-shadow: 0px 0px 4px #d9d9d9; 
    -moz-box-shadow: 0px 0px 4px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 4px #d9d9d9; 
} 
 
.textboxnarrow:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
</style>
<style>
.textboxmid { 
    border: 1px solid #c4c4c4; 
    height: 14px; 
    width: 180px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 4px; 
    box-shadow: 0px 0px 4px #d9d9d9; 
    -moz-box-shadow: 0px 0px 4px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 4px #d9d9d9; 
} 
 
.textboxmid:focus { 
    outline: none; 
    border: 1px solid #c4c4c4; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
} 
 </style>
 <style>
.textboxwide { 
    border: 1px solid #c4c4c4; 
    height: 14px; 
    width: 250px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 4px; 
    box-shadow: 0px 0px 4px #d9d9d9; 
    -moz-box-shadow: 0px 0px 4px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 4px #d9d9d9; 
} 
 
.textboxwide:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
} 
 </style>
 <style> 
  .textboxtgl { 
    border: 1px transparent; 
    height: 14px; 
    width: 90px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 2px; 
    -moz-border-radius: 2px; 
    -webkit-border-radius: 2px; 
    box-shadow: 0px 0px 2px #d9d9d9; 
    -moz-box-shadow: 0px 0px 2px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 2px #d9d9d9; 
} 
 
.textboxtgl:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 2px #7bc1f7; 
    -moz-box-shadow: 0px 0px 2px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 2px #7bc1f7; 
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
<script>
 	function viewform(forme, aa, bb) {
		//var usermu = document.getElementsByName("username")[0].value;
		//var formus = document.forms[forme].name;
		var formname = "formpajak" + aa;
		//alert(document.forms.forme[bb].name);
		//alert(document.forms.[0]);
		//document.forms[formname].submit();
		window.open("returbayar.php?id=" + aa + "&noretur=" + bb, "_blank");
		//document.forms.submit();
	}
</script>
<script>
function delretur1(aa) {
	//var formename = document.forms.hapusretur1.name;
	//var forme = document.forms[aa];
	//var usermu = document.getElementsByName("nomorreturku")[0].value;
	var con = confirm("Apakah anda yakin akan menghapus data ?");
	if (con == true)
	{
		document.forms["hapusretur1"].submit();
		return true;
	}
	else
	{
		return false;
	}
}
</script>

<script>
function cekdata() {
	//var forme = document.forms[aa];
	//var bulan = document.getElementsByName("bulan")[0].value;
	//var tahun = document.getElementsByName("tahun")[0].value;
	
	//if (bulan == null || bulan == 0 || tahun == null || tahun == 0)
	//{
	///	alert("Lengkapi data lebih dulu");
	//	return false;
	//}
	//else {
	document.getElementsByName("statusrun")[0].value=2;
	document.getElementById('cssload-loader').style.display='block';
	document.forms["myrun"].submit();
		//return true;
	//}

}
</script>
<script>
function showDiv(elem){
//alert(elem.value);
	if(elem.value == 1)
		document.getElementById('uploadfile').style.display = "none";
	else if (elem.value == 2)
		document.getElementById('uploadfile').style.display = "block";
}
</script>
<script>
function loadme(){
	document.getElementById('cssload-loader').style.display='none';
}
</script>
</head>
<body OnLoad="loadme();">
<?php
include "koneksi.php";

ini_set('max_execution_time', 6000); //300 seconds = 5 minutes

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
//-------------------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];

//--------------------------------------------------------------------
$tahunku = 0;
if (!isset($_POST["tahun"])) 
	$tahunku = 0;
else
	$tahunku=$_POST["tahun"];
//--------------------------------------------------------------------
$bulanku = 0;
if (!isset($_POST["bulan"])) 
	$bulanku = 0;
else
	$bulanku=$_POST["bulan"];
//--------------------------------------------------------------------
$userid = 0;
if (!isset($_GET["userid"])) {
	$userid=$_POST["userid"];
}
else
	$userid=$_GET["userid"];
//--------------------------------------------------------------------
$statusrun = 0;
if (!isset($_POST["statusrun"])) 
	$statusrun = 0;
else
	$statusrun = $_POST["statusrun"];
if ($statusrun==0)
{
	if (!isset($_GET["statusrun"])) 
		$statusrun = 0;
	else
		$statusrun = $_GET["statusrun"];	
}
//--------------------------------------------------------------------


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

$bulan = array('---','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');


?>

<br>
	<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="1000px" border="0" cellpadding="2" cellspacing="0">
          <tr style="height:20px;"> 
            <td style="padding-left: 40px; text-align: left; height: 20px">
				<font face="Verdana,Arial" color="black" size="5"><b>
					PROSES LAPORAN
				</b></font>
			</td>
          </tr>
		<tr height="10px">
			<td align="left" style="padding-left: 30px; padding-top: 10px; text-align: left; font-size: 12;">
				<img style="padding-left: 10px;" align="left" src="./img/line1.png" height="5px" width="800px">
			</td>
		</tr>
    </table>

<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="1000px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width:300px">
		</td>
	</tr>
	<tr height="10px">
		<td style="padding-left: 40px; text-align: left; font-size: 12; width:300px">
			<font face="arial" size="3" color="black"><b></b></font>
		</td>
	</tr>
</table>
	

<table style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="900px" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td style="vertical-align: top; padding-left: auto; padding-top: 0; text-align: left; font-size: 12; width:700px">
	<form name="myrun" id="myrun" action="" method="post" enctype="multipart/form-data">
		<table style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: auto;" width="800px" border="0" cellspacing="0" cellpadding="0">
			<thead>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11; width: 600px">
						<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
						<input type="hidden" id="statusrun" name="statusrun" value="1">
					</td>
				</tr>
			</thead>
			<tbody>
				<tr height="10px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
					</td>
				</tr>


				<tr height="40px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
						<b><font face="arial" color="black" size="3">Periode Data :</font></b>
					</td>
				</tr>
				<tr height="10px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
						
					</td>
				</tr>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
						<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="330px" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td style="padding-left: auto; text-align: left; width: 150px">
									<font size="3" face="arial" color="black">
									<select id="bulan" name="bulan" class="chosen-select" style="width:130px;">
<?php
										for ($k=1; $k<=12; $k++) {
?>
											<option value="<?php echo $k;?>" <?php if($k==$bulanku) echo 'selected';?>><?php echo $bulan[$k];?>&nbsp;&nbsp;&nbsp;</option>
<?php
										}
?>
									</select>
									</font>
								</td>
								<td style="padding-left: auto; text-align: left; width: 10px">
								</td>
								<td style="padding-left: auto; text-align: left; width: 80px">
									<font size="2" face="arial" color="black">
									<select id="tahun" name="tahun" class="chosen-select" style="width:80px;">
										
<?php
										$tahunsaiki = date('Y');
										for ($k=$tahunsaiki; $k >= 2014; $k--) {
?>
											<option value="<?php echo $k;?>" <?php if($k==$tahunku) echo 'selected';?>><?php echo $k;?>&nbsp;&nbsp;</option>
<?php
										}
?>
									</select>
									</font>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr height="80px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
						
					</td>
				</tr>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
						<a href="" class="large button blue" onclick="cekdata(); return false;">Proses & View</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	</td>
	</tr>
</table>

<?php

if ($statusrun==2)
{
//Read Data
//=======================================================================================
// Read data apollo
//=======================================================================================
	$row_cnt = 0;
	$i = 0;
	$query = "SELECT * FROM apollow GROUP BY seccode ORDER BY seccode ASC;";
	$result = mysqli_query($link, $query);
	if ($result) {
    $row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$idku[$i] = $row['ID'];
			$scode[$i] = $row['seccode'];
		}
	}
	$jmlcode = $i;
	
	for ($a=1; $a<=$jmlcode; $a++)
	{
//echo "--" . substr($scode[$a],0,12) . "--" . "<br>";
		$sql0 = "UPDATE apollow SET seccode='" . substr($scode[$a],0,12) . "' WHERE ID=" . $idku[$a] . ";";
//echo strlen($scode[$a]) . "--" . $sql0 . "<br>";
		$result0 = mysqli_query($link, $sql0);
	}


	$row_cnt = 0;
	$i = 0;
	$query = "SELECT * FROM apollow GROUP BY seccode ORDER BY seccode ASC;";
	$result = mysqli_query($link, $query);
	if ($result) {
    $row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$idku[$i] = $row['ID'];
			$scode[$i] = $row['seccode'];
		}
	}
	$jmlcode = $i;	
//====================================================================================================
//UPDATE SEC CODE
//====================================================================================================
	for ($a=1; $a<=$jmlcode; $a++)
	{
		$row_cnt = 0;
		$sta = 0;
		$sql1 = "SELECT * FROM apollowisin WHERE isin='" . substr($scode[$a],0,12) . "';";
		$result = mysqli_query($link, $sql1);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			$sta = 1;
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$secode[$a] = trim($row['seccode']);
			}
		}
		if ($sta==1)
		{
			$sql2 = "UPDATE apollow SET seccode='" . $secode[$a] . "' WHERE seccode='" . substr($scode[$a],0,12) . "';";
			$result2 = mysqli_query($link, $sql2);
		}
	}
//====================================================================================================
//READ SEC CODE PER TGL
//====================================================================================================
	$row_cnt = 0;
	$i = 0;
	$query = "SELECT * FROM apollow GROUP BY seccode ORDER BY seccode ASC;";
	$result = mysqli_query($link, $query);
	if ($result) {
    $row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$idku[$i] = $row['ID'];
			$scode[$i] = $row['seccode'];
		}
	}
	$jmlcode = $i;	
	
	for ($a=1; $a<=$jmlcode; $a++)
	{
		$row_cnt = 0;
		$sta = 0;
		$j = 0;
		$statrec = 0;
		$statdel = 0;
		$jmltglpercode[$a] = 0;
		$jmlrec[$a] = 0;
		$jmldel[$a] = 0;
		$sql1 = "SELECT * FROM apollow WHERE seccode='" . $scode[$a] . "' ORDER BY tgl ASC;";
		$result = mysqli_query($link, $sql1);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$j++;
				$idx[$a][$j] = $row['ID'];
				$tglx[$a][$j] = $row['tgl'];
				$statusx[$a][$j] = $row['statusr'];
				$qtyx[$a][$j] = $row['qty'];
				$currx[$a][$j] = $row['curr'];
				$amountx[$a][$j] = $row['netamount'];
				if (strpos(strtoupper($statusx[$a][$j]),"RECEIVE")!==false)
				{
					$statrec++;
				}
				else if (strpos(strtoupper($statusx[$a][$j]),"DELIVER")!==false)
				{
					$statdel++;
				}
//echo $scode[$a] . "--" . $tglx[$a] . "++" . $statusx[$a] . "++" . $qtyx[$a] . "++" . $amountx[$a] . "<br>";
			}
		}
		$jmltglpercode[$a] = $j;
		$jmlrec[$a] = $statrec;
		$jmldel[$a] = $statdel;
//echo $scode[$a] . "--" . $jmltglpercode[$a] . "-" . $jmlrec[$a] . "-" . $jmldel[$a] . "<br>";
	}
//====================================================================================================


//Isi Kode Jenis Surat Berharga


	$jmldatamain = 1;
	
// Write to Excel

	if ($jmldatamain > 0)
	{
		$tglsaikibul = date("d-M-Y");
		$tahunku = 2021;
		$filenameku = './OUTPUT/LKPBU_PASARMODAL_' . strtoupper($bulanku) . "_" . $tahunku . '.xlsx';
	
		set_include_path(get_include_path() . PATH_SEPARATOR . './PHPExcel/Classes/');

/** Error reporting */
		error_reporting(E_ALL);

/** Include path **/
//ini_set('include_path', ini_get('include_path').';../Classes/');

		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';

		$fileType = 'Excel2007';
/*		
		$folder = './OUTPUT';

		if(FALSE !== ($path = folder_exist($folder)))
		{
			//die('Folder ' . $path . ' already exist');
		}
		else {
			mkdir($folder);
		}
*/
		
		if (file_exists($filenameku))
			unlink($filenameku);

// Read the file
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);

		$nm = 'E' . ($jmldatamain+3);
// Change the file
		//$worksheet->setActiveSheetIndex(0)
		$objPHPExcel->getActiveSheet()->setCellValue('A1', "LKPBU PASAR MODAL");
		$objPHPExcel->getActiveSheet()->setCellValue('A2', "AS OF AGUSTUS 2021");
		$objPHPExcel->getActiveSheet()->setCellValue('A3', "NO");
		$objPHPExcel->getActiveSheet()->setCellValue('B3', 'SEC NO');
		$objPHPExcel->getActiveSheet()->setCellValue('C3', 'TGL');
		$objPHPExcel->getActiveSheet()->setCellValue('D3', 'RECEIVE/DELIVERY');
		$objPHPExcel->getActiveSheet()->setCellValue('E3', 'RECEIVE');
		$objPHPExcel->getActiveSheet()->setCellValue('F3', 'DELIVERY');
		$objPHPExcel->getActiveSheet()->setCellValue('G3', 'QTY');
		$objPHPExcel->getActiveSheet()->setCellValue('H3', 'NET AMOUNT');

//Set row height dari header
		$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(35);
		$objPHPExcel->getActiveSheet()->getRowDimension('3')->setRowHeight(25);
//Set lebar kolom
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(18);
//Set alignment
		$objPHPExcel->getActiveSheet()->getStyle('A3:I3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//Set warna dari header	
		$objPHPExcel->getActiveSheet()
			->getStyle('A3:H3')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()
			->setARGB('FFFFFF00');
//Set border
		$styleArray = array(
		'borders' => array(
		'allborders' => array(
		'style' => PHPExcel_Style_Border::BORDER_THIN
			)
		));

		$objPHPExcel->getActiveSheet()->getStyle("A3:H3")->applyFromArray($styleArray);
		unset($styleArray);	
//Set FONT HEADER
		$styleArray = array(
			'font'  => array(
			'bold'  => true,
			'color' => array('rgb' => '000000'),
			'size'  => 12,
			'name'  => 'Calibri'
		));
		$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($styleArray);	
//Set FONT DATA
		$styleArray = array(
			'font'  => array(
			'bold'  => false,
			'color' => array('rgb' => '000000'),
			'size'  => 10,
			'name'  => 'Calibri'
		));

		$objPHPExcel->getActiveSheet()->getStyle("A2:C2")->applyFromArray($styleArray);	
//echo "JmlTotData: " . $jmltotdata . "<br>";

		
		$p = 0;
		$d = 0;
		for ($n=1; $n<=$jmlcode;$n++) 
		{
			$d++;
			$pn3 = $d + 3;
//echo $scode[$n] . "<br>";
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, $pn3, $d);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(1, $pn3, $scode[$n]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(2, $pn3, $tglx[$n][1]);
			$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(3, $pn3, $statusx[$n][1], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, $pn3, $jmlrec[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(5, $pn3, $jmldel[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(6, $pn3, $qtyx[$n][1]);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(7, $pn3, floor($amountx[$n][1]));
			if ($jmltglpercode[$n] > 1)
			{
				for ($p=2; $p<=$jmltglpercode[$n]; $p++)
				{
					$d++;
					$pn3 = $d + 3;
					$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(2, $pn3, $tglx[$n][$p]);
					$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(3, $pn3, $statusx[$n][$p], PHPExcel_Cell_DataType::TYPE_STRING);
					$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(6, $pn3, $qtyx[$n][$p]);
					$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(7, $pn3, $amountx[$n][$p]);
				}
			}
		}
// Write the file
		//$writer = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
		$writer->save($filenameku);		
		
	}


?>
<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="1000px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width:600px">
		</td>
	</tr>
	<tr height="10px">
		<td style="padding-left: 40px; text-align: left; font-size: 12; width:600px">
<?php
		$namafile = $filenameku;
		if (file_exists($filenameku)) {
			$namafileku = 'LKPBU_PASARMODAL_' . "AGUSTUS" . "_" . $tahunku . '.xlsx';
			//$filenameku = './OUTPUT/LKPBU_PASARMODAL_' . "AGUSTUS" . "_" . $tahunku . '.xlsx';
?>
			<font face="arial" size="2" color="black">
				<a href="<?php echo $namafile;?>" download=<?php echo $namafile;?>><img src="text2.png" /></a>
				<a href=<?php echo $namafile;?> target="_blank"> <?php echo $namafileku;?></a>
			</font>
<?php
		}
?>
		</td>
	</tr>
	<tr height="10px">
		<td style="padding-left: 40px; text-align: left; font-size: 12; width:600px">
<?php
		if (file_exists($filenameku)) {
			$namafilexlku = 'LKPBU_' . $bulanku . " " . $tahunku . '.xlsx';
?>
			<font face="arial" size="2" color="black">
				<a href="<?php echo $filenameku;?>" download=<?php echo $filenameku;?>><img src="text2.png" /></a>
				<a href=<?php echo $filenameku;?> target="_blank"> <?php echo $namafilexlku;?></a>
			</font>
<?php
		}
?>			
			
			</font>
		</td>
	</tr>
</table>
	
<?php
}
?>



<div id="cssload-loader" class="cssload-preloader">
	<div class="cssload-preloader-box">		<div>L</div>		<div>o</div>		<div>a</div>		<div>d</div>		<div>i</div>		<div>n</div>		<div>g</div></div>
</div>


<DIV align="left">
</DIV>

<?php

	//createoutput($perushid, $tahun, $noretur, $batch, $mysort, $link);

?>


  <script src="../jqueryforms/jquery.min.js" type="text/javascript"></script>
  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:12},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>

<br><br>
<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="800px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td></td>
	</tr>
</table>

</body>

</html>


</body>
<?php
//-------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------
function strright($rightstring, $length) {
  return(substr($rightstring, -$length));
}

//*******************************************************************************************************

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;



//*******************************************************************************************************

?>
</html>