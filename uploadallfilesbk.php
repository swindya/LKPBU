<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
<!--script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script-->
<link type='text/css' href='./simplemodal/basic/css/basiccc.css' rel='stylesheet' media='screen' />
<script src="script.js"></script>


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
    width: 110px; 
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
function uploaddata() {
	//var forme = document.forms[aa];
	var namafile = document.getElementsByName("uploadfiles[]")[0].value;
	if (namafile == null || namafile == "undefined" || namafile=="")
	{
		alert("File belum dipilih. Silahkan Pilih File");
		return false;
	}
	else {
		document.forms["myupload"].submit();
		document.getElementById('cssload-loader').style.display='inline';
		//document.getElementById('css-spinner').style.display='inline';
		return true;
	}

}
</script>
<script>
function LoadMe()
{
	//document.getElementById('css-spinner').style.display='none';
	document.getElementById('cssload-loader').style.display='none';
}
</script>
</head>
<body onload="LoadMe()">
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
//-------------------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];

//--------------------------------------------------------------------
if (!isset($_GET["userid"])) {
	$userid=$_POST["userid"];
}
else
	$userid=$_GET["userid"];
//--------------------------------------------------------------------
if (!isset($_GET["jmldata"])) {
	$jmldata=0;
}
else
	$jmldata=$_GET["jmldata"];
//--------------------------------------------------------------------
if (!isset($_POST["datepicker-example1a"])) {
	$tgl1=0;
}
else
	$tgl1=$_POST["datepicker-example1a"];
//--------------------------------------------------------------------
if (!isset($_POST["datepicker-example1b"])) {
	$tgl2=0;
}
else
	$tgl2=$_POST["datepicker-example1b"];
//--------------------------------------------------------------------
if (!isset($_POST["statusview"])) {
	$statusview=0;
}
else
	$statusview=$_POST["statusview"];
//--------------------------------------------------------------------
if (!isset($_GET["statusoutput"])) {
	$statusoutput=0;
}
else
	$statusoutput=$_GET["statusoutput"];
//--------------------------------------------------------------------
if (!isset($_GET["outputinfo"])) {
	$outputinfo="";
}
else
	$outputinfo=$_GET["outputinfo"];
//--------------------------------------------------------------------

if (strlen($outputinfo)>1)
{
	$outputarr = explode("@", $outputinfo);
}

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
	<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="100%" border="0" cellpadding="2" cellspacing="0">
          <tr style="height:20px;"> 
            <td style="padding-left: 40px; text-align: left; height: 20px">
				<font face="Verdana,Arial" color="black" size="5"><b>
					DATA BK
				</b></font>
			</td>
          </tr>
		<tr height="10px">
			<td align="left" style="padding-left: 30px; padding-top: 10px; text-align: left; font-size: 12;">
				<img style="padding-left: 10px;" align="left" src="./img/line1.png" height="5px" width="800px">
			</td>
		</tr>
    </table>

<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width=300px">
		</td>
	</tr>

</table>
	

<table style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="1100px" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td style="vertical-align: top; padding-left: auto; padding-top: 0; text-align: left; font-size: 12; width: 500px">
	<form name="myupload" id="myupload" action="uploadallfilesbkgo.php" method="post" enctype="multipart/form-data">
		<table style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: auto;" width="850px" border="0" cellspacing="0" cellpadding="0">
			<thead>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11; width: 360px">
						<font face="arial" color="black" size="4"><b>Silahkan Upload File :</b></font>
					</td>
				</tr>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11; width: 360px">
						<font face="arial" color="black" size="3">Perhatikan nama files. Files bulanan harus mengandung kata "BK"</font>
					</td>
				</tr>
			</thead>
			<tbody>

				<tr height="40px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
						<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
					</td>
				</tr>
				<tr height="30px">
					<td style="padding-left: 10px; text-align: left; font-size: 12; width: 100px">
						<div>
							<div class="formRow">
								<input name="uploadfiles[]" type="file" id="files" multiple>
							</div>
						<div id="selectedFiles"></div>
					</td>
					<td style="padding-left: auto; padding-top: 0px; text-align: left; font-size: 11; width: 400px">
					</td>
				</tr>
				<tr height="50px">
					<td colspan="2" style="padding-left: 10px; text-align: left; font-size: 12"></td>
				</tr>
				<tr height="30px">
					<td style="padding-left: 10px; text-align: left;">
						<a href="" class="medium button orange" onclick="uploaddata(); return false;">Upload</a>
					</td>
					<td style="padding-left: auto; text-align: left;">
						<?php if ($jmldata>0) echo "Jumlah data: " . $jmldata . "";?>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	</td>
	</tr>
</table>
<script>
	var selDiv = "";
		
	document.addEventListener("DOMContentLoaded", init, false);
	
	function init() {
		document.querySelector('#files').addEventListener('change', handleFileSelect, false);
		selDiv = document.querySelector("#selectedFiles");
	}
		
	function handleFileSelect(e) {
		
		if(!e.target.files) return;
		
		selDiv.innerHTML = "<br>";
		
		var files = e.target.files;
		for(var i=0; i<files.length; i++) {
			var f = files[i];
			
			selDiv.innerHTML += f.name + "<br/>";

		}
		
	}
</script>
<br>
<!--form name="tgltgl" id="tgltgl" action="" method="post">
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="500px" border="0" cellspacing="0" cellpadding="0">
		<tr align="left" height="6px">
            <td align="left" colspan="2" style="padding-left: 10px; text-align: left; font-size: 12;">
				<hr align="left" noshade size="2" width="800px">
			</td>
        </tr>
		<tr height="10px">
			<td style="padding-left: 10px; text-align: left; font-size: 12" width="320px">
			</td>
			<td style="padding-left: 10px; text-align: left; font-size: 12" width="150px">
			</td>
		</tr>
		<tr height="40px">
			<td colspan="2" style="padding-left: 10px; text-align: left; font-size: 12">
				<FONT face="arial" color="black" size="2"><b>
					View Data (per Tgl)
				</b></FONT>
			</td>
		</tr>
		<tr height="10px">
			<td style="padding-left: 10px; text-align: left; font-size: 12">
			</td>
			<td>
				<input type="hidden" id="statusview" name="statusview" value="1">
			</td>
		</tr>
		<tr height="20px">
			<td style="padding-left: 10px; padding-top: auto;text-align: left; font-size: 12">
				<div class="main-wrapper">
						<input id="datepicker-example1a" type="text" name="datepicker-example1a" class="textboxtgl">
						&nbsp; s/d &nbsp;
						<input id="datepicker-example1b" type="text" name="datepicker-example1b" class="textboxtgl">&nbsp;&nbsp;
						<a href="" class="small button orange" onclick="document.tgltgl.submit(); return false;">View</a>
				</div>
			</td>
			<td style="padding-left: auto; text-align: left; font-size: 12">
				
			</td>
		</tr>

		<tr height="40px">
			<td style="padding-left: 10px; text-align: left; font-size: 12">
			</td>
			<td></td>
		</tr>

	</table>
</form-->	
<?php
$query = "SELECT * FROM equity WHERE (tglcreate BETWEEN '" . $tgl1 . "' AND '" . $tgl2 . "') ORDER BY tglcreate DESC;";
$row_cnt = 0;
$jmldata = 0;
$totalholding = 0;
$aa = 0;
$tglki = "1970-01-01";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$tglmu = $row['tglcreate'];
		if ($tglmu <> $tglki) 
		{
			$aa++;
			$tglku[$aa] = $tglmu;
			//$totalholding = $row['holding'];
			$i = 1;
		}
		$tglki = $tglmu;
		//$totalholding = $totalholding + $row['holding'];
		//$totholding[$aa] = $totalholding;
		$jmlbaris[$aa] = $i;
	}
	$jmldata = $aa;
}
//echo $statusview . "--" . $jmldata;

if ($statusoutput==1)
{
	$outputinfoarr = explode("|",$outputinfo);
	$jmlada = count($outputinfoarr);
//echo $jmlada . "--" . $outputinfo . "<br>";
	if ($jmlada > 0)
	{
?>

	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="800px" border="0" cellpadding="0" cellspacing="0">
		<tr height="60px">
            <td colspan="3" style="padding-left: auto; text-align: center; font-size: 12;  width: 150px;">
			</td>
		</tr>
		<tr height="30px">
            <td colspan="3" style="padding-left: 20px; text-align: left; width: 150px;">
				<b><u><font face="calibri" size="3" color="black">RINGKASAN UPLOAD</font></u></b>
			</td>
		</tr>
		<tr height="30px">
            <td colspan="3" style="padding-left: auto; text-align: center; font-size: 12;  width: 150px;">
			</td>
		</tr>
<?php
		for ($a = 0; $a < $jmlada; $a++)
		{
			$strarr = explode(":", $outputinfoarr[$a]);
			if (count($strarr)>1)
			{
?>
		<tr height="30px">
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 150px;">
				<b><font face="calibri" size="2" color="black"><?php echo $strarr[0];?></font></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12;  width: 30px;">
				<b><i><u><font face="calibri" size="2" color="black">:</font></u></i></b>
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 520px">
				<b><font face="calibri" size="2" color="black"><?php echo $strarr[1];?></font></b>
			</td>
		</tr>

<?php
			}
		}
?>
	</table>
<?php
	}
	
}


if ($statusview==1 && $jmldata > 0)
{
?>
	<!--table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="850px" border="0" cellpadding="0" cellspacing="0">
		<tr height="40px">
            <td style="padding-left: auto; text-align: center; font-size: 12;  width: 30px;">
				<b><i><u><font face="calibri" size="2" color="black">NO</font></u></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12;  width: 120px;">
				<b><i><u><font face="calibri" size="2" color="black">TGL</font></u></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><u><font face="calibri" size="2" color="black">JML DATA</font></u></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 600px">
				<b><i><u><font face="calibri" size="2" color="black"></font></u></i></b>
			</td>
        </tr>
<?php

		for ($j=1; $j <= $jmldata; $j++)
		{
?>
		<tr height="22px"> 
            <td style="padding-left: auto; text-align: center;">
				<font face="calibri" size="2" color="black"><?php echo $j;?></font>
			</td>
            <td style="padding-left: auto; text-align: center;">
				<font face="calibri" size="2" color="black"><?php echo $tglku[$j];?></font>
			</td>
            <td style="padding-left: auto; text-align: center;">
				<font face="calibri" size="2" color="black"><?php echo number_format($jmlbaris[$j]);?></font>
			</td>
            <td style="padding-left: auto; text-align: left;">
				<font face="calibri" size="2" color="black"></font>
			</td>
        </tr>
<?php
		}
?>

	</table-->

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

<script type='text/javascript' src='./simplemodal/basic/js/jquery.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/basic.js'></script>

<script type="text/javascript" src="./datepicker/examples/public/javascript/jquery-1.11.1.js"></script>
<script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="./datepicker/examples/public/javascript/core.js"></script>


<script>
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

//*******************************************************************************************************

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;



//*******************************************************************************************************

?>
</html>