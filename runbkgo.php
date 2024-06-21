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

<script src="Form.Upload.js"></script>
<link rel="stylesheet" href="spinnerclock.css" type="text/css">

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
function cekdata() 
{

		document.getElementsByName("statusrunme")[0].value=1;
		//document.getElementById('cssload-loader').style.display='inline';
		//document.getElementById('cssload-loader').style.display='inline';
		document.forms["myrun"].submit();
}
</script>
<script>
function cekdatarekon() {
	//var forme = document.forms[aa];
	var bulan = document.getElementsByName("bulan")[0].value;
	var tahun = document.getElementsByName("tahun")[0].value;

	if (bulan == null || bulan == 0 || tahun == null || tahun == 0)
	{
		alert("Lengkapi data lebih dulu");
		return false;
	}
	else {
		document.getElementsByName("bulans")[0].value=bulan;
		document.getElementsByName("tahuns")[0].value=tahun;
		document.getElementsByName("statusrunme")[0].value=2;
		//document.getElementById('cssload-loader').style.display='inline';
		document.forms["myrun"].submit();
		return true;
	}

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
function loadme(status){
	if (status==1)
	{
		//document.getElementById('cssload-loader').style.display='inline';
	}
	else
	{
		//document.getElementById('cssload-loader').style.display='none';
	}
}
</script>

<script>
function LoadMe()
{
	//document.getElementById('css-spinner').style.display='none';
	//document.getElementById('cssload-loader').style.display='none';
}
</script>


</head>

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
$userid = 0;
if (!isset($_GET["userid"])) {
	$userid=$_POST["userid"];
}
else
	$userid=$_GET["userid"];
//--------------------------------------------------------------------
$statusrun = 0;
if (!isset($_POST["statusrunme"]))
	$statusrun = 0;
else
	$statusrun = $_POST["statusrunme"];
//--------------------------------------------------------------------

$usdval = 0;
if (!isset($_POST["usdtoidr"])) 
	$usdval = 0;
else
	$usdval = $_POST["usdtoidr"];
//--------------------------------------------------------------------


?>

<!--body OnLoad="loadme(<?php echo $statusrun;?>);"-->
<body onload="LoadMe()">

<?php


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

$mulai = time();

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
//window.top.location.href = "index.php";
</script>
<?php
//die;
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
<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="900px" border="0" cellpadding="2" cellspacing="0">
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

<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="900px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width:300px">
		</td>
	</tr>
</table>


<table style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="900px" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td style="vertical-align: top; padding-left: auto; padding-top: 0; text-align: left; font-size: 12; width:700px">
		<table style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: auto;" width="800px" border="0" cellspacing="0" cellpadding="0">
			<thead>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11; width: 600px">
					</td>
				</tr>
			</thead>
			<tbody>
				<tr height="10px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
					</td>
				</tr>
				<tr height="10px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">

					</td>
				</tr>
				<tr height="30px">
					<td style="padding-left: 10px; text-align: left; width: 250px">
						<form name="myrun" id="myrun" action="rungo.php" method="post" enctype="multipart/form-data">
							<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
							<input type="hidden" id="statusrunme" name="statusrunme" value="0">
							<input type="hidden" id="bulans" name="bulans">
							<input type="hidden" id="tahuns" name="tahuns">
							<!--a href="#" class="large button blue" onclick="cekdata();">Proses & View</a-->
						</form>
					</td>
					<td style="padding-left: 10px; text-align: left; width: 550px">
						<!--a href="" class="large button orange" onclick="cekdatarekon(); return false;">Rekon</a-->
					</td>
				</tr>
			</tbody>
		</table>
	
	</td>
	</tr>
</table>


<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="900px" border="0" cellspacing="0" cellpadding="0">
	<tr height="0px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width:900px">
		</td>
	</tr>
</table>



<?php
//echo $usdval . "<br>";

?>

<div id="cssload-loader" class="cssload-preloader">
	<div class="cssload-preloader-box">		<div>L</div>		<div>o</div>		<div>a</div>		<div>d</div>		<div>i</div>		<div>n</div>		<div>g</div></div>
</div>

<?php
//=======================================================================================================
// REORGANIZE TABLES: asuransi, golongan, jenissuratberharga, negara, valuta, 
//=======================================================================================================
// 
//-----------------------------------------------------------------------------
//Read Data

//===============================================================================================================
// BACA DATA BK
//===============================================================================================================
	$tglini = "";
	$query = "SELECT * FROM bk ORDER BY ID ASC;";
	$i = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$idku[$i] = $row['ID'];
			$asofdate[$i] = $row['asofdate'];
			$tglini = $asofdate[$i];
			$curr[$i] = $row['curr'];
			$totqtybcx[$i] = strtoupper($row['totqtybc']);
			$totmarketvalbcx[$i] = $row['totmarketvalbc'];
			$totqtygbondx[$i] = $row['totqtygbond'];
			$totmarketgbondx[$i] = $row['totmarketgbond'];
			$totqtybondsx[$i] = $row['totqtybonds'];
			$totmarketvalbondsx[$i] = $row['totmarketvalbonds'];
			$totqtyeqx[$i] = $row['totqtyeq'];
			$totmarketvaleqx[$i] = $row['totmarketvaleq'];
			$totqtytdpx[$i] = $row['totqtytdp'];
			$totmarketvaltdpx[$i] = $row['totmarketvaltdp'];
			$totqtymiscx[$i] = $row['totqtymisc'];
			$totmarketvalmiscx[$i] = $row['totmarketvalmisc'];
			$totvalx[$i] = $row['totval'];
		}
	}
	$jmldatamain = $i;
	

	
//echo $jmldatamain . "<br>";
	if ($jmldatamain==0)
	{
?>

<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="900px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width:1000px">
		</td>
	</tr>
	<tr height="30px">
		<td style="padding-left: 0px; text-align: left; font-size: 12; width:1000px">
			<font face="arial" size="3" color="black"><b>TIDAK ADA DATA</b></font>
		</td>
	</tr>
</table>

<?php

	}
?>

<?php


//==========================================================================================================================
//Process Data

// Write to Excel

	if ($jmldatamain > 0)
	{

		$files = glob('./OUTPUT/*BNI01-02.txt'); // get all file names
		foreach($files as $file){ // iterate files
		  if(is_file($file)) {
			unlink($file); // delete file
		  }
		}
		$files = glob('./OUTPUT/LKPBU_BK*.xlsx'); // get all file names
		foreach($files as $file){ // iterate files
		  if(is_file($file)) {
			unlink($file); // delete file
		  }
		}
		$files = glob('./OUTPUT/LKPBU_BK*.xlsx.*'); // get all file names
		foreach($files as $file){ // iterate files
		  if(is_file($file)) {
			unlink($file); // delete file
		  }
		}

		$ttoqtybc = 0;
		$ttomvbc = 0;
		$ttoqgb = 0;
		$ttomgb = 0;
		$ttoqb = 0;
		$ttomvbs = 0;
		$ttoqeq = 0;
		$ttomveq = 0;
		$ttoqtdp = 0;
		$ttomvtdp = 0;
		$ttoqmisc = 0;
		$ttomvmisc = 0;
		$ttoval = 0;
		
		for ($a=1; $a<=$jmldatamain; $a++)
		{
			$totqtybcxx[$a] = 0;
			$totmarketvalbcxx[$a] = 0;
			$totqtygbondxx[$a] = 0;
			$totmarketgbondxx[$a] = 0;
			$totqtybondsxx[$a] = 0;
			$totmarketvalbondsxx[$a] = 0;
			$totqtyeqxx[$a] = 0;
			$totmarketvaleqxx[$a] = 0;
			$totqtytdpxx[$a] = 0;
			$totmarketvaltdpxx[$a] = 0;
			$totqtymiscxx[$a] = 0;
			$totmarketvalmiscxx[$a] = 0;
			$totvalxx[$a] = 0;	

			if (strtoupper($curr[$a])=="IDR")
			{
				$totqtybcxx[$a] = $totqtybcx[$a];
				$totmarketvalbcxx[$a] = $totmarketvalbcx[$a];
				$totqtygbondxx[$a] = $totqtygbondx[$a];
				$totmarketgbondxx[$a] = $totmarketgbondx[$a];
				$totqtybondsxx[$a] = $totqtybondsx[$a];
				$totmarketvalbondsxx[$a] = $totmarketvalbondsx[$a];
				$totqtyeqxx[$a] = $totqtyeqx[$a];
				$totmarketvaleqxx[$a] = $totmarketvaleqx[$a];
				$totqtytdpxx[$a] = $totqtytdpx[$a];
				$totmarketvaltdpxx[$a] = $totmarketvaltdpx[$a];
				$totqtymiscxx[$a] = $totqtymiscx[$a];
				$totmarketvalmiscxx[$a] = $totmarketvalmiscx[$a];
				$totvalxx[$a] = $totvalx[$a];				
			}
			//else if (strtoupper($curr[$a])=="USD" || (strlen($curr[$a])<2))
			else if (strtoupper($curr[$a])=="USD")
			{
//echo "USD: " . $usdval . "<br>";
				$totqtybcxx[$a] = $totqtybcx[$a] * $usdval;
				$totmarketvalbcxx[$a] = $totmarketvalbcx[$a] * $usdval;
				$totqtygbondxx[$a] = $totqtygbondx[$a] * $usdval;
				$totmarketgbondxx[$a] = $totmarketgbondx[$a] * $usdval;
				$totqtybondsxx[$a] = $totqtybondsx[$a] * $usdval;
				$totmarketvalbondsxx[$a] = $totmarketvalbondsx[$a] * $usdval;
				$totqtyeqxx[$a] = $totqtyeqx[$a] * $usdval;
				$totmarketvaleqxx[$a] = $totmarketvaleqx[$a] * $usdval;
				$totqtytdpxx[$a] = $totqtytdpx[$a] * $usdval;
				$totmarketvaltdpxx[$a] = $totmarketvaltdpx[$a] * $usdval;
				$totqtymiscxx[$a] = $totqtymiscx[$a] * $usdval;
				$totmarketvalmiscxx[$a] = $totmarketvalmiscx[$a] * $usdval;
				$totvalxx[$a] = $totvalx[$a] * $usdval;
//echo $totmarketvalbcx[$a] . "===" . $totmarketvalbcxx[$a] . "<br>";
			}
			$ttoqtybc = $ttoqtybc + $totqtybcxx[$a];
			$ttomvbc = $ttomvbc + $totmarketvalbcxx[$a];
			$ttoqgb = $ttoqgb + $totqtygbondxx[$a];
			$ttomgb = $ttomgb + $totmarketgbondxx[$a];
			$ttoqb = $ttoqb + $totqtybondsxx[$a];
			$ttomvbs = $ttomvbs + $totmarketvalbondsxx[$a];
			$ttoqeq = $ttoqeq + $totqtyeqxx[$a];
			$ttomveq = $ttomveq + $totmarketvaleqxx[$a];
			$ttoqtdp = $ttoqtdp + $totqtytdpxx[$a];
			$ttomvtdp = $ttomvtdp + $totmarketvaltdpxx[$a];
			$ttoqmisc = $ttoqmisc + $totqtymiscxx[$a];
			$ttomvmisc = $ttomvmisc + $totmarketvalmiscxx[$a];
			$ttoval = $ttoval + $totvalxx[$a];
//echo $totmarketvalbcxx[$a] . "<br>";
		}
//echo "VBC: " . $ttomvbc . "<br>";
//echo "VBS: " . $ttomvbs . "<br>";
		$equity = $ttomveq;
		$corpbond = $ttomvbc + $ttomvbs;
		$govbond = $ttomgb;
		$rgovbond = $govbond / 10;
		$timedeposit = $ttomvtdp;
		$newsec = $ttomvmisc;
		
		$govbondx = number_format($govbond,0, '.', '');
		$govbondxy = $govbondx;
//echo number_format($govbond,0, '.', '') . "==" . $rgovbond . "==" . $lengb . "<br>";

		//$govbondxx = $govbondx * 1;
		$tglhead = $asofdate[1];
		$date=date_create($tglhead);
		$tglheadth = substr($tglhead,0,4) ;
		$tglheadbl = substr($tglhead,5,2) ;
		$tglheadbln = $tglheadbl * 1;
		$tglheadbl =  $tglheadbln + 1;
		if ($tglheadbl==13)
		{
			$tglheadbl = 1;
			$tglheadth = $tglheadth + 1;
		}
		$tglaaa = $tglheadth . "-" . $tglheadbl . "-01";

		$date=date_create($tglaaa);
		date_add($date,date_interval_create_from_date_string("-1 days"));
		$tglss = date_format($date,"Y-m-d");		
		
		$tglfile = date_format($date,"Ymd");
		$timeq = date_format($date,"His");

//echo $tglfile . "<br>";		
		$tglsaiki = date("d-M-Y");
		$tglsaikibul = date("Ymdhis");
		$filenameku = "./OUTPUT/LKPBU_BK_OUT_" . $tglsaikibul . "-BNI01-02.xlsx";
		$filetxtku = './OUTPUT/LKPBU_BK_OUT_' . $tglsaikibul . '.txt';
		$filetxtku = "./OUTPUT/" . "BKMAB-94M102-R-M-" . $tglfile . "-BNI01-02.txt";
		$ipku = "localhost";
		$ipku = "10.50.14.11";
		$urlxlfile = "http://" . $ipku . "/lkpbu/OUTPUT/" . "LKPBU_BK_OUT_" . $tglsaikibul . "-BNI01-01.xlsx";
		$urlfile = "http://" . $ipku . "/lkpbu/OUTPUT/" . "BKMAB-94M102-R-M-" . $tglfile . "-BNI01-01.txt";
//echo $filetxtku . "<br>";
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
		{
			unlink($filenameku);
		}



// Read the file
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);

		$nm = 'O' . ($jmldatamain+6);
// Change the file
		//$worksheet->setActiveSheetIndex(0)
		$objPHPExcel->getActiveSheet()->setCellValue('A3', "No");	
		$objPHPExcel->getActiveSheet()->setCellValue('B3', 'Kode Komponen');		
		$objPHPExcel->getActiveSheet()->setCellValue('C3', 'Kode Tipe Efek');
		$objPHPExcel->getActiveSheet()->setCellValue('D3', 'Keterangan Tipe Efek');
		$objPHPExcel->getActiveSheet()->setCellValue('E3', 'Nilai (Rupiah)');

//Set row height dari header
		//$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(35);
		//$objPHPExcel->getActiveSheet()->getRowDimension('3')->setRowHeight(25);
//Set lebar kolom
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(16);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);

		
// Wrap text
		$objPHPExcel->getActiveSheet()->getStyle('N4')->getAlignment()->setWrapText(true);
		$objPHPExcel->getActiveSheet()->getStyle('O4')->getAlignment()->setWrapText(true);
//Set alignment
		$objPHPExcel->getActiveSheet()->getStyle('A3:E3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		
		$objPHPExcel->getActiveSheet()->getStyle('A3:E3')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);


//Set warna dari header
		$objPHPExcel->getActiveSheet()
			->getStyle('A3:E3')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()
			->setARGB('EAF4BE');		//Grey
//Set border
		$styleArray = array(
		'borders' => array(
		'allborders' => array(
		'style' => PHPExcel_Style_Border::BORDER_THIN
			)
		));

//Reset
		$objPHPExcel->getActiveSheet()->getStyle("A3:E8")->applyFromArray($styleArray);
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

		$objPHPExcel->getActiveSheet()->getStyle("A3:E3")->getFont()->setBold( true );
//Set FONT DATA
		$styleArray = array(
			'font'  => array(
			'bold'  => false,
			'color' => array('rgb' => '000000'),
			'size'  => 10,
			'name'  => 'Calibri'
		));

		$objPHPExcel->getActiveSheet()->getStyle("A4:E8")->applyFromArray($styleArray);
		
		$objPHPExcel->getActiveSheet()->getStyle('E4:E8')->getNumberFormat()->setFormatCode('#,###');

		//$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(1, $p, '010001', PHPExcel_Cell_DataType::TYPE_STRING);
		//$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(2, $p, $out1z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, 4, 1, PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, 5, 2, PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, 6, 3, PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, 7, 4, PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, 8, 5, PHPExcel_Cell_DataType::TYPE_STRING);

		$objPHPExcel->getActiveSheet()->getStyle('B4:B8')->getNumberFormat()->setFormatCode('000000000000');
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(1, 4, "940102010000", PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(1, 5, "940102010000", PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(1, 6, "940102010000", PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(1, 7, "940102010000", PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(1, 8, "940102010000", PHPExcel_Cell_DataType::TYPE_STRING);

		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(2, 4, "1 (EQUITY)", PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(2, 5, "2 (CORPORATE BOND)", PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(2, 6, "3 (GOVERNMENT BOND)", PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(2, 7, "11 (TIME DEPOSIT)", PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(2, 8, "333 (New Securities)", PHPExcel_Cell_DataType::TYPE_STRING);
		
		//$objPHPExcel->getActiveSheet()->getStyle('E4:E8')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, 4, $equity, PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, 5, $corpbond, PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, 6, $govbondxy, PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, 7, $timedeposit, PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, 8, $newsec, PHPExcel_Cell_DataType::TYPE_STRING);
		
		//$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, 10, $govbond, PHPExcel_Cell_DataType::TYPE_STRING);
		//$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, 11, $govbondx, PHPExcel_Cell_DataType::TYPE_STRING);
		//$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, 12, $govbondxx, PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->setCellValueExplicit('D10', $govbondx, PHPExcel_Cell_DataType::TYPE_STRING);


// Write the file
		////$writer = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
//echo $filenameku . "===<br>";
		$writer->save($filenameku);
		
	
//============================================================================================
// Create TXT file
//============================================================================================
//Hapus file jika ada
	if (file_exists($filetxtku))
	{
		unlink($filetxtku);
	}
//--------------------------------------------------------------------------------------------
	$myfile = fopen($filetxtku, "w") or die("Unable to open file!");
	$baris1 = "H01|021001|BNI01|" . $tglss . "|BKMAB|94M102|";
	fwrite($myfile, $baris1.PHP_EOL);
	$baris2 = "D01|940102010000|1||" . number_format($equity,2, '.', '');
	fwrite($myfile, $baris2.PHP_EOL);
	$baris3 = "D01|940102010000|2||" . number_format($corpbond,2, '.', '');
	fwrite($myfile, $baris3.PHP_EOL);
	$baris4 = "D01|940102010000|3||" . number_format($govbond,2, '.', '');
	fwrite($myfile, $baris4.PHP_EOL);
	$baris5 = "D01|940102010000|11||" . number_format($timedeposit,2, '.', '');
	fwrite($myfile, $baris5.PHP_EOL);
	$baris6 = "D01|940102010000|333|SHGB, SAHAM FISIK|" . number_format($newsec,2, '.', '');
	fwrite($myfile, $baris6.PHP_EOL);
	fclose($myfile);
/*	
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($filetxtku));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filetxtku));
		echo file_get_contents($filetxtku);
*/

//============================================================================================
//$file_url = $mylink . $filenameku;
//echo $file_url . "<br>";

/*
	header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    //header('Content-Disposition: attachment; filename='. basename($filetxtku));
	header('Content-Disposition: attachment; filename="' . basename($filetxtku) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filetxtku));
    readfile($filetxtku);
*/
    //exit;
//============================================================================================
	$selesai = time();

	$difference = $selesai - $mulai;
	$years = abs(floor($difference / 31536000));
	$days = abs(floor(($difference-($years * 31536000))/86400));
	$hours = abs(floor(($difference-($years * 31536000)-($days * 86400))/3600));
	$mins = abs(floor(($difference-($years * 31536000)-($days * 86400)-($hours * 3600))/60));

?>
<table style="text-align: left; margin-left: 30px; margin-right: auto; margin-top: auto;" width="600px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td colspan="3" style="padding-left: 40px; text-align: left; font-size: 12; width:600px">
			<font face="arial" size="3" color="black">
				Writing OUTPUT.....
			</font>
		</td>
	</tr>
	<tr height="80px">
		<td colspan="3" style="padding-left: 30px; text-align: left; font-size: 12; width:600px">
		</td>
	</tr>
	<tr height="25px">
		<td style="padding-left: 40px; text-align: left; font-size: 1.0em; width:200px">
			Jumlah Total Baris Data
		</td>
		<td style="padding-left: 40px; text-align: center; font-size: 1.0em; width:40px">
			:
		</td>
		<td style="padding-left: 40px; text-align: left; font-size: 1.0em; width:360px">
			<font face="arial" size="2" color="black"> <?php echo number_format($jmldatamain,0);?> </font>
		</td>
	</tr>
	<tr height="30px">
		<td colspan="3" style="padding-left: 30px; text-align: left; font-size: 12;">
		</td>
	</tr>
	<tr height="25px">
		<td style="padding-left: 40px; text-align: left; font-size: 1.0em;" width="200px">
			Waktu Proses 
		</td>
		<td style="padding-left: 40px; text-align: center; font-size: 1.0em;" width="40px">
			: 
		</td>
		<td style="padding-left: 40px; text-align: left; font-size: 1.0em;" width="360px">
			<font face="arial" size="2" color="black"><?php echo number_format($mins,0) . " (menit)";?></font>
		</td>
	</tr>
	<tr height="50px">
		<td colspan="3" style="padding-left: 40px; text-align: left; font-size: 12;">
		</td>
	</tr>
<?php
		if (file_exists($filenameku)) {
			$namafilexlku = 'LKPBU_BK_OUT_' . $tglsaikibul . '.xlsx';
			$namafiletxtku = 'LKPBU_BK_OUT_' . $tglsaikibul . '.txt';
?>
	<tr height="10px">
		<td colspan="3" style="padding-left: 40px; text-align: left; font-size: 1.0em;">
			<font face="arial" size="2" color="black">
				<a href="<?php echo $urlxlfile;?>" download=<?php echo $filenameku;?>><img src="text2.png" /></a>
				<a href=<?php echo $urlxlfile;?> download=<?php echo $filenameku;?>> <?php echo $namafilexlku;?></a>
			</font>
			</font>
		</td>
	</tr>
	<tr height="10px">
		<td colspan="3" style="padding-left: 40px; text-align: left; font-size: 1.0em;">
			<font face="arial" size="2" color="black">
				<a href="<?php echo $urlfile;?>" download=<?php echo $filetxtku;?>><img src="text2.png" /></a>
				<a href=<?php echo $urlfile;?> download=<?php echo $filetxtku;?>> <?php echo $namafiletxtku;?></a>
			</font>
			</font>
		</td>
	</tr>
<?php
		}
?>
</table>

<?php
	}

?>

<script>
document.getElementById('cssload-loader').style.display='none';
</script>



<table style="text-align: left; margin-left: 0; margin-right: auto; margin-top: auto;" width="900px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td colspan="3" style="padding-left: 30px; text-align: left; font-size: 12;">
		</td>
	</tr>


</table>

<?php
	


?>

<!--div id="cssload-loader" class="cssload-preloader">
	<div class="cssload-preloader-box">		<div>L</div>		<div>o</div>		<div>a</div>		<div>d</div>		<div>i</div>		<div>n</div>		<div>g</div></div>
</div-->



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
