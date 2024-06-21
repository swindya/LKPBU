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
    border: 1px solid #999;
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
		document.getElementById('cssload-loader').style.display='inline';
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
	document.getElementById('cssload-loader').style.display='none';
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
	<tr height="50px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width:300px">
		</td>
	</tr>
</table>

<form name="myrun" id="myrun" action="runbkgo.php" method="post" enctype="multipart/form-data">
<table style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="800px" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td style="vertical-align: top; padding-left: auto; padding-top: 0; text-align: left; font-size: 12; width:800px">
		<table style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: auto;" width="800px" border="0" cellspacing="0" cellpadding="0">
			<thead>
				<tr height="30px">
					<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11; width: 140px">
						<FONT face="Calibri" color="#000">
							Nilai Tukar USD
						</FONT>		
					</td>
					<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11; width: 40px">
						<FONT face="Calibri" color="#000">
							:
						</FONT>		
					</td>
					<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11; width: 620px">
						<FONT face="Calibri" color="#000">
							<input id="usdtoidr" name="usdtoidr" type="text"  class="textboxtgl">
						</FONT>
					</td>
				</tr>
			</thead>
			<tbody>
				<tr height="50px">
					<td colspan="3" style="padding-left: 10px; text-align: left;">

					</td>
				</tr>
				<tr height="30px">
					<td style="padding-left: 10px; text-align: left;">
							<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
							<input type="hidden" id="statusrunme" name="statusrunme" value="0">
							<input type="hidden" id="bulans" name="bulans">
							<input type="hidden" id="tahuns" name="tahuns">
							<a href="#" class="large button blue" onclick="cekdata();">Proses & View</a>
					</td>
					<td colspan="2" style="padding-left: 10px; text-align: left;">
					</td>
				</tr>
			</tbody>
		</table>
	
	</td>
	</tr>
</table>
</form>


<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="900px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width:900px">
		</td>
	</tr>
	<tr height="30px">
		<td style="padding-left: 0px; text-align: left; font-size: 12; width:900px">
			<font face="arial" size="3" color="black"></font>
		</td>
	</tr>
</table>



<?php
//echo $statusrun . "<br>";


?>

<div id="cssload-loader" class="cssload-preloader">
	<div class="cssload-preloader-box">		<div>L</div>		<div>o</div>		<div>a</div>		<div>d</div>		<div>i</div>		<div>n</div>		<div>g</div></div>
</div>

<?php
//=======================================================================================================
// REORGANIZE TABLES: asuransi, golongan, jenissuratberharga, negara, valuta, 
//=======================================================================================================
// 
/*
		$a = 0;
		$sql0 = "SELECT * FROM asuransi;";
		$result0 = mysqli_query($link, $sql0);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
				$a++;
				$idmu[$a] = $row['ID'];
				$abc = $row['asuransi'];
				$abcarr = explode('(', $abc);
				$kode[$a] = trim($abcarr[0]);
				$abc = str_replace(')','',$abcarr[1]);
				$asuransi[$a] = trim($abc);
			}
		}
		$jmla = $a;
		for ($a=1; $a<=$jmla; $a++)
		{
			$sqlin = "UPDATE asuransi SET code='" . $kode[$a] . "', asuransistr='" . strtoupper($asuransi[$a]) . "' WHERE (ID=" . $idmu[$a] . ");";
			$resultin = mysqli_query($link, $sqlin);
		}
//----------------------------------------------------------------------------		
		$a = 0;
		$sql0 = "SELECT * FROM golongan;";
		$result0 = mysqli_query($link, $sql0);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
				$a++;
				$idmu[$a] = $row['ID'];
				$abc = $row['golongan'];
				$abcarr = explode('(', $abc);
				$kode[$a] = trim($abcarr[0]);
				$abc = str_replace(')','',$abcarr[1]);
				$abcstr[$a] = trim($abc);
			}
		}
		$jmla = $a;
		for ($a=1; $a<=$jmla; $a++)
		{
			$sqlin = "UPDATE golongan SET code='" . $kode[$a] . "', golonganstr='" . strtoupper($abcstr[$a]) . "' WHERE (ID=" . $idmu[$a] . ");";
			$resultin = mysqli_query($link, $sqlin);
		}
//----------------------------------------------------------------------------		
		$a = 0;
		$sql0 = "SELECT * FROM jenissuratberharga;";
		$result0 = mysqli_query($link, $sql0);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
				$a++;
				$idmu[$a] = $row['ID'];
				$abc = $row['jsb'];
				$abcarr = explode('(', $abc);
				$kode[$a] = trim($abcarr[0]);
				$abc = str_replace(')','',$abcarr[1]);
				$abcstr[$a] = trim($abc);
			}
		}
		$jmla = $a;
		for ($a=1; $a<=$jmla; $a++)
		{
			$sqlin = "UPDATE jenissuratberharga SET code='" . $kode[$a] . "', jsbstr='" . strtoupper($abcstr[$a]) . "' WHERE (ID=" . $idmu[$a] . ");";
			$resultin = mysqli_query($link, $sqlin);
		}
//----------------------------------------------------------------------------		
		$a = 0;
		$sql0 = "SELECT * FROM negara;";
		$result0 = mysqli_query($link, $sql0);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
				$a++;
				$idmu[$a] = $row['ID'];
				$abc = $row['negara'];
				$abcarr = explode('(', $abc);
				$kode[$a] = trim($abcarr[0]);
				$abc = str_replace(')','',$abcarr[1]);
				$abcstr[$a] = trim($abc);
			}
		}
		$jmla = $a;
		for ($a=1; $a<=$jmla; $a++)
		{
			$sqlin = "UPDATE negara SET code='" . $kode[$a] . "', negarastr='" . strtoupper($abcstr[$a]) . "' WHERE (ID=" . $idmu[$a] . ");";
			$resultin = mysqli_query($link, $sqlin);
		}
//----------------------------------------------------------------------------		
		$a = 0;
		$sql0 = "SELECT * FROM valuta;";
		$result0 = mysqli_query($link, $sql0);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
				$a++;
				$idmu[$a] = $row['ID'];
				$abc = $row['valuta'];
				$abcarr = explode('(', $abc);
				$kode[$a] = trim($abcarr[0]);
				$abc = str_replace(')','',$abcarr[1]);
				$abcstr[$a] = trim($abc);
			}
		}
		$jmla = $a;
		for ($a=1; $a<=$jmla; $a++)
		{
			$sqlin = "UPDATE valuta SET code='" . $kode[$a] . "', valutastr='" . strtoupper($abcstr[$a]) . "' WHERE (ID=" . $idmu[$a] . ");";
			$resultin = mysqli_query($link, $sqlin);
		}
*/
//-----------------------------------------------------------------------------
//Read Data
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
