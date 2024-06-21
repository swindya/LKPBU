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
				<tr height="80px">
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

//-----------------------------------------------------------------------------
//Read Data
# query the users table for name and surname
	$query = "SELECT * FROM maindata WHERE ((UPPER(instrumenttype) <> 'MISCELLANEOUS' AND UPPER(instrumenttype) <> 'TIME DEPOSIT') AND NOT(depository LIKE '%VAULT%') AND marketvalue <> 0 " .
			" AND instrumentcode <> '-R' AND instrumentcode <> '-W' AND clientcode <> 'RDPTDWEI');";
//echo $query . "<br>";
	$row_cnt = 0;
	$namaperus = "none";
	$jmldatamain = 0;
	$i = 0;
	$result = mysqli_query($link, $query);
	if ($result) 
	{
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$statusdataok[$i] = 1;
			$idkux[$i] = $row['ID'];
		}
	}
	$jmldatamain = $i;
	
	for ($a=1; $a<=$jmldatamain; $a++)
	{
		$sqls = "UPDATE maindata SET statusout=1 WHERE ID=" . $idkux[$a] . ";";
		$result = mysqli_query($link, $sqls);
	}
//===============================================================================================================
// HAPUS DATA YG TIDAK PERLU (status=0)
//===============================================================================================================
		$sqls = "DELETE FROM maindata WHERE (statusout=0);";
		$result = mysqli_query($link, $sqls);
//===============================================================================================================
// RESET SEMUA KOLOM OUTPUT
//===============================================================================================================
		$sqlreset = "UPDATE maindata SET out1client='', out2sandiasuransi='', out3golpenerbit='', out4negarapemilik='', out5negarapenerbit=''," . 
				"out6kodesb='', out7jenissb='', out8='', out9='', out10='', out11='', out12='';";
		$resultres = mysqli_query($link, $sqlreset);
//===============================================================================================================
// BACA LAGI maindata yg terfilter (status=1)
//===============================================================================================================
	$query = "SELECT * FROM maindata ORDER BY ID ASC;";
	$i = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$statusdataok[$i] = 1;
			$idku[$i] = $row['ID'];
			$clientcodeku[$i] = $row['clientcode'];
			$clientnameku[$i] = strtoupper($row['clientname']);
			$instrumenttypeku[$i] = $row['instrumenttype'];
			$instrumentcodeku[$i] = $row['instrumentcode'];
			$issku[$i] = $row['iss'];
			$holdingku[$i] = $row['holding'];
			$latestpriceku[$i] = $row['latestprice'];
			$marketvalueku[$i] = $row['marketvalue'];
			$cashproceedku[$i] = $row['cashproceed'];
			$marketval = '0000000000000000' . (string)$marketvalueku[$i];
			//$marketvaluekux[$i] = strright($marketval,15);
			$cashpro = '0000000000000000' . (string)$cashproceedku[$i];
			//$cashproceedku[$i] = strright($cashpro,15);
			$instrumentcodemu[$i] = strtoupper($instrumentcodeku[$i]);
			if (strlen($instrumentcodeku[$i])>1)
			{
				$instrumentcodekuku = str_replace('PT','',$instrumentcodeku[$i]);
				$instrumentcodekuku = str_replace(' ','',$instrumentcodekuku);
				$instrumentcodekuku = str_replace('.','',$instrumentcodekuku);
				$instrumentcodekuku = str_replace('-','',$instrumentcodekuku);
				$instrumentcodekuku = str_replace(',','',$instrumentcodekuku);
				$instrumentcodemu[$i] = strtoupper($instrumentcodekuku);
			}
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

	else if ($jmldatamain>0)
	{
?>

<?php
		$jmldatasu = 0;
		$jmlnotfoundsandi = 0;
		$jmlclientsu = 0;
		$aa=0;
		$bb=0;
		$cc=0;
		$jmlmatch1 = 0;
//=======================================================================================================
// CLEAN shortname
//=======================================================================================================
// Baca SandiSecurity -> hapus '.', '-'. spaces
		$a = 0;
		$sql0 = "SELECT * FROM client;";
		$result0 = mysqli_query($link, $sql0);
		if ($result0) {
			$row_cnt = $result0->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
				$a++;
				$idmu[$a] = $row['ID'];
				$shortnamemu[$a] = $row['shortname'];
			}
		}
		$jmla = $a;
		
		for ($a=1; $a<=$jmla; $a++)
		{
			$shortnamekuku = str_replace('REKSADANA','',$shortnamemu[$a]);
			$shortnamekuku = str_replace('PT','',$shortnamekuku);
			//$shortnamekuku = str_replace(' ','',$shortnamekuku);
			$shortnamekuku = str_replace('.','',$shortnamekuku);
			$shortnamekuku = str_replace('-','',$shortnamekuku);
			$shortnamekuku = str_replace(',','',$shortnamekuku);
			$sql1 = "UPDATE client SET shortnameclean='" . $shortnamekuku . "' WHERE ID=" . $idmu[$a] . ";";
			$result1 = mysqli_query($link, $sql1);
		}

		$sql0 = "UPDATE client SET shortnameclean=replace(shortnameclean,'DanaPensiun', 'DP');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE client SET shortnameclean=replace(shortnameclean,'DANAPENSIUN', 'DP');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE client SET shortnameclean=replace(shortnameclean,'DANA PENSIUN', 'DP');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE client SET shortnameclean=replace(shortnameclean,'Dana Pensiun', 'DP');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE client SET shortnameclean=replace(shortnameclean,'DP.', 'DP');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE client SET shortnameclean=replace(shortnameclean,'REKSADANA', 'RD');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE client SET shortnameclean=replace(shortnameclean,'REKSA DANA', 'RD');";
		$result = mysqli_query($link, $sql0);
		//$sql0 = "UPDATE client SET shortnameclean=replace(shortnameclean,' ', '');";
		//$result = mysqli_query($link, $sql0);
		
		$sql0 = "UPDATE client SET fullnameclean=replace(fullnameclean,'DanaPensiun', 'DP');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE client SET fullnameclean=replace(fullnameclean,'DANAPENSIUN', 'DP');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE client SET fullnameclean=replace(fullnameclean,'DANA PENSIUN', 'DP');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE client SET fullnameclean=replace(fullnameclean,'Dana Pensiun', 'DP');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE client SET fullnameclean=replace(fullnameclean,'DP.', 'DP');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE client SET fullnameclean=replace(fullnameclean,'REKSADANA', 'RD');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE client SET fullnameclean=replace(fullnameclean,'REKSA DANA', 'RD');";
		$result = mysqli_query($link, $sql0);
		//$sql0 = "UPDATE client SET fullnameclean=replace(fullnameclean,' ', '');";
		//$result = mysqli_query($link, $sql0);
//-------------------------------------------------------------------------------------------------------------------------------------------------------------
echo "       " . "Init.....<br>";
//==========================================================================================================================
// STEP 1
//==========================================================================================================================
// Cari utk kolom out1client (kolom C)
// Baca data terus cari di tabel CLIENT
//==========================================================================================================================
		$jmlmatch1 = 0;
//echo $jmldatamain . "<br>";
		for ($j=1; $j <= $jmldatamain; $j++)
		{
			$sandigolx[$j] = "";
			$clix = str_replace('REKSADANA','',$clientnameku[$j]);
			$clix = str_replace('REKSA DANA','',$clix);
			$clix = str_replace('DANA PENSIUN','',$clix);
			$clix = str_replace('DANAPENSIUN','',$clix);
			$clix = str_replace('DP','',$clix);
			$clix = str_replace('PT','',$clix);
			$clix = str_replace('.','',$clix);
			$clix = str_replace('-',' ',$clix);
			$clix = str_replace(',',' ',$clix);
			$clix = trim($clix);
			$clixx = $clix;
//-------------------------------
			$row_cnt = 0;
			$clientarr = explode(" ", $clix);
			$countarr = count($clientarr);
			$countx = $countarr-1;
			if ($countarr >= 6)
			{
				$qstr1 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = $clientarr[$countx-4] . " " . $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$qstr11 = $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr21 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$sq0 = "(UPPER(fullnameclean) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-1] . 
						"%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-2] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-3] . 
						"%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-4] . "%');";
			}
			else if ($countarr == 5)
			{
				$qstr1 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = $clientarr[$countx-4] . " " . $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$qstr11 = $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr21 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$sq0 = "(UPPER(fullnameclean) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-1] . 
						"%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-2] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-3] . 
						"%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-4] . "%');";
			}
			else if ($countarr == 4)
			{
				$qstr1 = $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$qstr11 = $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr21 = $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$sq0 = "(UPPER(fullnameclean) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-1] . 
						"%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-2] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-3] . 
						"%');";
			}
			else if ($countarr == 3)
			{
				$qstr1 = $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = $clientarr[$countx] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx-2];
				$qstr11 = $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr21 = $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$sq0 = "(UPPER(fullnameclean) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-1] . 
						"%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-2] . "%');";
			}
			else if ($countarr == 2)
			{
				$qstr1 = $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = "XYZ";
				$qstr11 = $clientarr[$countx];
				$qstr21 = "VXYZ";
				$sq0 = "(UPPER(fullnameclean) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-1] . 
						"%');";
			}
			else if ($countarr == 1)
			{
				$qstr1 = $clientarr[$countx];
				$qstr2 = "XYZ";
				$qstr11 = "POQ";
				$qstr21 = "VXYZ";
				$sq0 = "(UPPER(fullnameclean) LIKE '%" . $clientarr[$countx] . "%');";
			}
			$query1 = "SELECT * FROM client WHERE (UPPER(fullnameclean) LIKE '%" . strtoupper($qstr1) . "%' OR UPPER(shortnameclean) LIKE '%" . 
				strtoupper($qstr1) . "%' OR UPPER(fullnameclean) LIKE '%" . strtoupper($qstr2) . "%' OR UPPER(shortnameclean) LIKE '%" . 
				strtoupper($qstr2) . "%');";
			$row_cnt = 0;
			$result = mysqli_query($link, $query1);
			if ($result) {
				$row_cnt = $result->num_rows;
			}					
			if ($row_cnt>0) {
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$sandigolx[$j] = $row['sandigolongan'];
				}
				$qupdate1 = "UPDATE maindata SET out1client='" . $sandigolx[$j] . "' WHERE (ID=" . $idku[$j] . ");";
				$resultupdate1 = mysqli_query($link, $qupdate1);
			}
			if ($row_cnt==0)
			{
				$jmlrow = 0;
				$query2 = "SELECT * FROM client WHERE (UPPER(fullnameclean) LIKE '%" . strtoupper($qstr11) . "%' OR UPPER(shortnameclean) LIKE '%" . 
					strtoupper($qstr11) . "%' OR UPPER(fullnameclean) LIKE '%" . strtoupper($qstr21) . "%' OR UPPER(shortnameclean) LIKE '%" . 
					strtoupper($qstr21) . "%');";
				$resulta = mysqli_query($link, $query2);
				if ($resulta) {
					$jmlrow = $resulta->num_rows;
				}					
				if ($jmlrow>0) {
					while ($row = mysqli_fetch_array ($resulta, MYSQLI_ASSOC)) {
						$sandigolx[$j] = $row['sandigolongan'];
					}
					$qupdate1 = "UPDATE maindata SET out1client='" . $sandigolx[$j] . "' WHERE (ID=" . $idku[$j] . ");";
					$resultupdate1 = mysqli_query($link, $qupdate1);
				}
			}
//---------------------------------------------------------------
			$query3 = "SELECT * FROM client WHERE " . $sq0;
			$rowa = 0;
			$result = mysqli_query($link, $query3);
			if ($result) {
				$rowa = $result->num_rows;
			}					
			if ($rowa>0) {
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$sandigolx[$j] = $row['sandigolongan'];
				}
				$qupdate1 = "UPDATE maindata SET out1client='" . $sandigolx[$j] . "' WHERE (ID=" . $idku[$j] . ");";
				$resultupdate1 = mysqli_query($link, $qupdate1);
			}
//---------------------------------------------------------------			
			$query = "SELECT * FROM client WHERE (UPPER(fullname) LIKE '%" . strtoupper($clixx) . "%' OR UPPER(shortname) LIKE '%" . 
					strtoupper($clixx) . "%');";
//echo $query . "<br>";
			$row_cnt = 0;
			$result = mysqli_query($link, $query);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$sandigolx[$j] = $row['sandigolongan'];
				}
				$qupdate1 = "UPDATE maindata SET out1client='" . $sandigolx[$j] . "' WHERE (ID=" . $idku[$j] . ");";
				$resultupdate1 = mysqli_query($link, $qupdate1);
			}			
			
			if (strlen($sandigolx[$j]) > 0)
			{
				$jmlmatch1++;
			}
			
		}		
echo "       " . "Pass 1 .....<br>";
//==========================================================================================================================
// STEP 2
//==========================================================================================================================
// Cari utk kolom out2sandiasuransi (kolom C)
// Baca data terus cari di tabel ASURANSI
//==========================================================================================================================
		$sql0 = "UPDATE asuransi SET asuransistr=replace(asuransistr,' ', '');";
		$result = mysqli_query($link, $sql0);
		$sql0 = "UPDATE asuransi SET asuransistr=replace(asuransistr,',', '');";
		$result = mysqli_query($link, $sql0);
//Cari kode utk LAINNYA
		$sql0 = "SELECT * FROM asuransi WHERE (UPPER(asuransistr)='LAINNYA');";
		$result0 = mysqli_query($link, $sql0);
		if ($result0) {
			$row_cnt = $result0->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
				$kodeinit = $row['code'];
			}
		}
		$sqlinit = "UPDATE maindata SET out2sandiasuransi='" . $kodeinit . "';";
		$resultinit = mysqli_query($link, $sqlinit);
//----------------------------------------		
		$jmlmatch2 = 0;
		for ($j=1; $j <= $jmldatamain; $j++)
		{
			$codex[$j] = "";
			if (strpos(strtoupper($clientnameku[$j]), 'SURAN') !== false || strpos(strtoupper($clientnameku[$j]), 'JASSINDO') !== false || strpos(strtoupper($clientnameku[$j]), 'JIWA') !== false || strpos(strtoupper($clientnameku[$j]), 'LIFE') !== false)
			{
				$codex[$j] = "";
				$clix = $clientnameku[$j];
				if (strlen($clientnameku[$j])>1)
				{
					$clix = str_replace('ASURANSI','',$clientnameku[$j]);
					$clix = str_replace('INSURANCE','',$clix);
					$clix = str_replace('PT','',$clix);
					$clix = str_replace('.','',$clix);
					$clix = str_replace('-',' ',$clix);
					$clix = str_replace(',',' ',$clix);
					$clix = trim($clix);
					$qstr1 = $clix;
					$qstr2 = "xyz";
					$qstr3 = "bcd";
					$clientarr = explode(" ", $clix);
					$countarr = count($clientarr);
					$countx = $countarr-1;
					if ($countarr >= 3)
					{
						$qstr1 = $clientarr[$countx];
						$qstr2 = $clientarr[$countx-1];
						$qstr3 = $clientarr[$countx-2];
					}
					else if ($countarr == 2)
					{
						$qstr1 = $clientarr[$countx];
						$qstr2 = $clientarr[$countx-1];
						$qstr3 = "";
					}
				}
				$query = "SELECT * FROM asuransi WHERE (UPPER(asuransistr) LIKE '%" . strtoupper($qstr1) . "%' OR UPPER(asuransistr) LIKE '%" . strtoupper($qstr2) .
							 "%' OR UPPER(asuransistr) LIKE '%" . strtoupper($qstr3) . "%');";
				$row_cnt = 0;
				$statusx = 0;
				$result = mysqli_query($link, $query);
				if ($result) {
					$row_cnt = $result->num_rows;
				}
				if ($row_cnt>0) {
					$jmlmatch2++;
					while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
						$codex[$j] = $row['code'];
					}
					//$qupdate2 = "UPDATE maindata SET out2sandiasuransi='" . $codex[$j] . "' WHERE (ID=" . $idku[$j] . ");";
					//$resultupdate2 = mysqli_query($link, $qupdate2);
				}

				$row_cnt = 0;
				$query1 = "SELECT * FROM asuransi WHERE (UPPER(asuransistr) LIKE '%" . strtoupper($qstr1) . "%' AND UPPER(asuransistr) LIKE '%" . strtoupper($qstr2) .
							 "%' AND UPPER(asuransistr) LIKE '%" . strtoupper($qstr3) . "%');";
				$result = mysqli_query($link, $query1);
				if ($result) {
					$row_cnt = $result->num_rows;
				}					
				if ($row_cnt>0) {
					while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
						$codex[$j] = $row['code'];
					}
				}
				$qupdate2 = "UPDATE maindata SET out2sandiasuransi='" . $codex[$j] . "' WHERE (ID=" . $idku[$j] . ");";
				$resultupdate2 = mysqli_query($link, $qupdate2);
				if ($resultupdate2)
				{
					$jmlmatch2++;
				}
			}
		}
echo "       " . "Pass 2 .....<br>";
//==========================================================================================================================
// STEP 3
//==========================================================================================================================
// Cari utk kolom out3golpenerbit 
// Baca data terus cari di tabel SANDI SECURITY -  Cari Issuer Name dari Instrument Code
//==========================================================================================================================

		//$sql0 = "UPDATE golongan SET asuransistr=replace(asuransistr,' ', '');";
		//$result = mysqli_query($link, $sql0);
//echo $jmldatamain . "<br>";
		$jmlmatch3 = 0;
		for ($j=1; $j <= $jmldatamain; $j++)
		{
			$isntrucode = $instrumentcodemu[$j];
			$clix = $isntrucode;
			$golxy = "";
			if (strlen($isntrucode)>2)
			{
				//$clix = str_replace('REKSADANA','',$clientnameku[$j]);
				//$clix = str_replace('REKSA DANA','',$clix);
				$clix = trim($isntrucode);
			}
			$query = "SELECT * FROM sandisecurity WHERE (UPPER(shortname)='" . strtoupper($clix) . "' OR UPPER(shortnameclean)='" . strtoupper($clix) . "');";
//echo $query . "<br>";
			$row_cnt = 0;
			$golxy = "";
			$issuernamexy = "";
			$result = mysqli_query($link, $query);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$golxy = $row['golcode'];
				}
			}
/*
			$row_cnt = 0;
			$clientarr = explode(" ", $clix);
			$countarr = count($clientarr);
			$countx = $countarr - 1;
			$countx = $countarr-1;
			if ($countarr >= 6)
			{
				$qstr1 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = $clientarr[$countx-4] . " " . $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$qstr11 = $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr21 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$sq0 = "(UPPER(fullnameclean) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-1] . 
						"%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-2] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-3] . 
						"%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-4] . "%');";
			}
			else if ($countarr == 5)
			{
				$qstr1 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = $clientarr[$countx-4] . " " . $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$qstr11 = $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr21 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$sq0 = "(UPPER(fullnameclean) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-1] . 
						"%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-2] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-3] . 
						"%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-4] . "%');";
			}
			else if ($countarr == 4)
			{
				$qstr1 = $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$qstr11 = $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr21 = $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$sq0 = "(UPPER(fullnameclean) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-1] . 
						"%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-2] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-3] . 
						"%');";
			}
			else if ($countarr == 3)
			{
				$qstr1 = $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$qstr11 = $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr21 = $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$sq0 = "(UPPER(fullnameclean) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-1] . 
						"%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-2] . "%');";
			}
			else if ($countarr == 2)
			{
				$qstr1 = $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = "XYZ";
				$qstr11 = $clientarr[$countx];
				$qstr21 = "VXYZ";
				$sq0 = "(UPPER(fullnameclean) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullnameclean) LIKE '%" . $clientarr[$countx-1] . 
						"%');";
			}
			else if ($countarr == 1)
			{
				$qstr1 = $clientarr[$countx];
				$qstr2 = "XYZ";
				$qstr11 = "POQ";
				$qstr21 = "VXYZ";
				$sq0 = "(UPPER(fullnameclean) LIKE '%" . $clientarr[$countx] . "%');";
			}
				$query1 = "SELECT * FROM client WHERE (UPPER(shortname) LIKE '%" . strtoupper($qstr1) . "%' OR UPPER(shortnameclean) LIKE '%" . 
						strtoupper($qstr1) . "%' OR UPPER(shortname) LIKE '%" . strtoupper($qstr2) . "%' OR UPPER(shortnameclean) LIKE '%" . 
						strtoupper($qstr2) . "%');";
				$result = mysqli_query($link, $query1);
				if ($result) {
					$row_cnt = $result->num_rows;
				}					
				if ($row_cnt>0) {
					$jmlmatch1++;
					while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
						$sandigolx[$j] = $row['sandigolongan'];
					}
				}
				if ($row_cnt==0)
				{
					$jmlrow = 0;
					$query2 = "SELECT * FROM client WHERE (UPPER(shortname) LIKE '%" . strtoupper($qstr11) . "%' OR UPPER(shortnameclean) LIKE '%" . 
						strtoupper($qstr11) . "%' OR UPPER(shortname) LIKE '%" . strtoupper($qstr21) . "%' OR UPPER(shortnameclean) LIKE '%" . 
						strtoupper($qstr21) . "%');";
					$resulta = mysqli_query($link, $query2);
					if ($resulta) {
						$jmlrow = $resulta->num_rows;
					}					
					if ($jmlrow>0) {
						$jmlmatch1++;
						while ($row = mysqli_fetch_array ($resulta, MYSQLI_ASSOC)) {
							$sandigolx[$j] = $row['sandigolongan'];
						}
					}					
				}
					
					
			}

			$sqla = "SELECT * FROM golongan WHERE (UPPER(golonganstr)='" & strtoupper($fullnamexy) . "' OR UPPER(golonganstr)='" . $issuernamexy . "');";
			$jmlrow = 0;
			$kodexy = "";
			$resulta = mysqli_query($link, $sqla);
			if ($resulta) {
				$jmlrow = $resulta->num_rows;
			}					
			if ($jmlrow>0) {
				while ($row = mysqli_fetch_array ($resulta, MYSQLI_ASSOC)) {
					$kodexy = $row['code'];
				}
			}			
*/
					
			$qupdate3 = "UPDATE maindata SET out3golpenerbit='" . $golxy . "' WHERE (ID=" . $idku[$j] . ");";
			$resultupdate3 = mysqli_query($link, $qupdate3);
			if ($resultupdate3)
			{
				$jmlmatch3++;
			}
		}		
echo "       " . "Pass 3 .....";
//==========================================================================================================================
//==========================================================================================================================
// STEP 4
//==========================================================================================================================
// Cari utk kolom out4negarapemilik 
// Baca data terus cari di tabel SANDI CLIENT
//==========================================================================================================================

		//$sql0 = "UPDATE golongan SET asuransistr=replace(asuransistr,' ', '');";
		//$result = mysqli_query($link, $sql0);
		$jmlmatch4 = 0;
		for ($j=1; $j <= $jmldatamain; $j++)
		{
			$sandimilikx[$j] = "";
			$clientnameku[$j] = strtoupper($clientnameku[$j]);
			$clix = str_replace('PT','',$clientnameku[$j]);
			$clix = str_replace('ASURANSI','',$clix);
			$clix = str_replace('INSURANCE','',$clix);
			$clix = str_replace('DANAREKSA','',$clix);
			$clix = str_replace('DANA REKSA','',$clix);
			$clix = str_replace('DP','',$clix);
			$clix = str_replace('DANA PENSIUN','',$clix);
			$clix = str_replace('.','',$clix);
			$clix = str_replace('-','',$clix);
			$clix = str_replace(',','',$clix);
			
			$query = "SELECT * FROM client WHERE (UPPER(fullname) LIKE '%" . strtoupper($clix) . "%');";
//echo $query . "<br>";
			$row_cnt = 0;
			$statusx = 0;
			$namaperus = "";
			$result = mysqli_query($link, $query);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				$statusx = 1;
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$sandimilikx[$j] = $row['sandipemilik'];
				}
			}
			//$qupdate4 = "UPDATE maindata SET out4negarapemilik='" . $sandimilikx[$j] . "' WHERE (ID=" . $idku[$j] . ");";
			//$resultupdate4 = mysqli_query($link, $qupdate4);
			
			$clientarr = explode(" ", $clix);
			$countarr = count($clientarr);
			$countx = $countarr-1;
			if ($countarr >= 6)
			{
				$qstr1 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = $clientarr[$countx-4] . " " . $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$qstr11 = $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr21 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$sq0 = "(UPPER(fullname) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-1] . 
						"%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-2] . "%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-3] . 
						"%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-4] . "%');";
			}
			else if ($countarr == 5)
			{
				$qstr1 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = $clientarr[$countx-4] . " " . $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$qstr11 = $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr21 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$sq0 = "(UPPER(fullname) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-1] . 
						"%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-2] . "%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-3] . 
						"%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-4] . "%');";
			}
			else if ($countarr == 4)
			{
				$qstr1 = $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = $clientarr[$countx-3] . " " . $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$qstr11 = $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr21 = $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$sq0 = "(UPPER(fullname) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-1] . 
						"%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-2] . "%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-3] . 
						"%');";
			}
			else if ($countarr == 3)
			{
				$qstr1 = $clientarr[$countx-2] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = $clientarr[$countx] . " " . $clientarr[$countx-1] . " " . $clientarr[$countx-2];
				$qstr11 = $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr21 = $clientarr[$countx-2] . " " . $clientarr[$countx-1];
				$sq0 = "(UPPER(fullname) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-1] . 
						"%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-2] . "%');";
			}
			else if ($countarr == 2)
			{
				$qstr1 = $clientarr[$countx-1] . " " . $clientarr[$countx];
				$qstr2 = "XYZ";
				$qstr11 = $clientarr[$countx];
				$qstr21 = "VXYZ";
				$sq0 = "(UPPER(fullname) LIKE '%" . $clientarr[$countx] . "%' AND UPPER(fullname) LIKE '%" . $clientarr[$countx-1] . 
						"%');";
			}
			else if ($countarr == 1)
			{
				$qstr1 = $clientarr[$countx];
				$qstr2 = "XYZ";
				$qstr11 = "POQ";
				$qstr21 = "VXYZ";
				$sq0 = "(UPPER(fullname) LIKE '%" . $clientarr[$countx] . "%');";
			}

			$query1 = "SELECT * FROM client WHERE (UPPER(fullname) LIKE '%" . strtoupper($qstr1) . "%' OR UPPER(shortnameclean) LIKE '%" . 
				strtoupper($qstr1) . "%' OR UPPER(fullname) LIKE '%" . strtoupper($qstr2) . "%' OR UPPER(shortnameclean) LIKE '%" . 
				strtoupper($qstr2) . "%');";
			$row_cnt = 0;
			$result = mysqli_query($link, $query1);
			if ($result) {
				$row_cnt = $result->num_rows;
			}					
			if ($row_cnt>0) {
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$sandipemilikx[$j] = $row['sandipemilik'];
				}
				//$qupdate1 = "UPDATE maindata SET out4negarapemilik='" . $sandipemilikx[$j] . "' WHERE (ID=" . $idku[$j] . ");";
				//$resultupdate1 = mysqli_query($link, $qupdate1);
			}
			if ($row_cnt==0)
			{
				$jmlrow = 0;
				$query2 = "SELECT * FROM client WHERE (UPPER(fullname) LIKE '%" . strtoupper($qstr11) . "%' OR UPPER(shortnameclean) LIKE '%" . 
					strtoupper($qstr11) . "%' OR UPPER(fullname) LIKE '%" . strtoupper($qstr21) . "%' OR UPPER(shortnameclean) LIKE '%" . 
					strtoupper($qstr21) . "%');";
				$resulta = mysqli_query($link, $query2);
				if ($resulta) {
					$jmlrow = $resulta->num_rows;
				}					
				if ($jmlrow>0) {
					while ($row = mysqli_fetch_array ($resulta, MYSQLI_ASSOC)) {
						$sandipemilikx[$j] = $row['sandipemilik'];
					}
					//$qupdate1 = "UPDATE maindata SET out4negarapemilik='" . $sandipemilikx[$j] . "' WHERE (ID=" . $idku[$j] . ");";
					//$resultupdate1 = mysqli_query($link, $qupdate1);
				}
			}
//---------------------------------------------------------------
			$query3 = "SELECT * FROM client WHERE " . $sq0;
			$rowa = 0;
			$result = mysqli_query($link, $query3);
			if ($result) {
				$rowa = $result->num_rows;
			}					
			if ($rowa>0) {
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$sandipemilikx[$j] = $row['sandipemilik'];
				}
				//$qupdate1 = "UPDATE maindata SET out4negarapemilik='" . $sandipemilikx[$j] . "' WHERE (ID=" . $idku[$j] . ");";
				//$resultupdate1 = mysqli_query($link, $qupdate1);
			}
//---------------------------------------------------------------			
			$query = "SELECT * FROM client WHERE (UPPER(fullname) LIKE '%" . strtoupper($clixx) . "%' OR UPPER(shortname) LIKE '%" . 
					strtoupper($clixx) . "%');";
//echo $query . "<br>";
			$row_cnt = 0;
			$result = mysqli_query($link, $query);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$sandipemilikx[$j] = $row['sandipemilik'];
				}
				//$qupdate1 = "UPDATE maindata SET out4negarapemilik='" . $sandipemilikx[$j] . "' WHERE (ID=" . $idku[$j] . ");";
				//$resultupdate1 = mysqli_query($link, $qupdate1);
			}	
					
					
			$qupdate4 = "UPDATE maindata SET out4negarapemilik='" . $sandimilikx[$j] . "' WHERE (ID=" . $idku[$j] . ");";
			$resultupdate4 = mysqli_query($link, $qupdate4);
			if ($resultupdate4)
			{
				$jmlmatch4++;
			}
		}		
echo "       " . "Pass 4 .....<br>";
//==========================================================================================================================
//==========================================================================================================================
// STEP 5
//==========================================================================================================================
// Cari utk kolom out5negarapenerbit & out8 (jenis valuta) & out9 & out10
// Baca data terus cari di tabel SANDI SECURITY
//==========================================================================================================================

		//$sql0 = "UPDATE golongan SET asuransistr=replace(asuransistr,' ', '');";
		//$result = mysqli_query($link, $sql0);
		$jmlmatch5 = 0;
		for ($j=1; $j <= $jmldatamain; $j++)
		{
			$query = "SELECT * FROM sandisecurity WHERE (UPPER(shortnameclean) LIKE '%" . strtoupper($instrumentcodemu[$j]) . "%');";
//echo $query . "<br>";
			$row_cnt = 0;
			$statusx = 0;
			$namaperus = "";
			$negarasalx[$j] = "";
			$jenisvalx[$j] = "";
			$tglterbitx[$j] = "";
			$tgljatuhtempox[$j] = "";
			$result = mysqli_query($link, $query);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				$statusx = 1;
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$negarasalx[$j] = $row['negaraasal'];
					$jenisvalx[$j] = $row['jenisvaluta'];
					$tglterbitx[$j] = $row['tglterbit'];
					$tgljatuhtempox[$j] = $row['tgljatuhtempo'];
				}
			}
			$qupdate5 = "UPDATE maindata SET out5negarapenerbit='" . $negarasalx[$j] . "', out8='" . $jenisvalx[$j] . "', out9='" . $tglterbitx[$j] . 
					"', out10='" . $tgljatuhtempox[$j] . "' WHERE (ID=" . $idku[$j] . ");";
			$resultupdate5 = mysqli_query($link, $qupdate5);
			if ($resultupdate5)
			{
				$jmlmatch5++;
			}
		}		
echo "       " . "Pass 5 .....<br>";
//==========================================================================================================================
//==========================================================================================================================
// STEP 6
//==========================================================================================================================
// Cari utk kolom out6kodesb
// Baca data terus cari di tabel SANDI SECURITY
//==========================================================================================================================

		//$sql0 = "UPDATE golongan SET asuransistr=replace(asuransistr,' ', '');";
		//$result = mysqli_query($link, $sql0);
		$jmlmatch6 = 0;
		for ($j=1; $j <= $jmldatamain; $j++)
		{
			$instrx = $instrumentcodemu[$j];
			if (strlen($instrumentcodemu[$j])>1)
			{
				$instrx = str_replace('-','', $instrumentcodemu[$j]);
				$instrx = str_replace('.','', $instrx);
			}
			$query = "SELECT * FROM sandisecurity WHERE (UPPER(shortnameclean) LIKE '%" . strtoupper($instrx) . "%');";
//echo $query . "<br>";
			$row_cnt = 0;
			$statusx = 0;
			$isinx[$j] = "";
			$result = mysqli_query($link, $query);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				$statusx = 1;
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$isinx[$j] = $row['isin'];
				}
			}
			$qupdate6 = "UPDATE maindata SET out6kodesb='" . $isinx[$j] . "' WHERE (ID=" . $idku[$j] . ");";
			$resultupdate6 = mysqli_query($link, $qupdate6);
			if ($resultupdate6)
			{
				$jmlmatch6++;
			}
		}		
echo "       " . "Pass 6 .....<br>";	
//==========================================================================================================================
// STEP 7
//==========================================================================================================================
// Cari utk kolom out7jenissb
// Baca data terus cari di tabel SANDI SECURITY
//==========================================================================================================================

		//$sql0 = "UPDATE golongan SET asuransistr=replace(asuransistr,' ', '');";
		//$result = mysqli_query($link, $sql0);
		$jmlmatch7 = 0;
		for ($j=1; $j <= $jmldatamain; $j++)
		{
			$instrx = $instrumentcodemu[$j];
			if (strlen($instrumentcodemu[$j])>1)
			{
				$instrx = str_replace('-','', $instrumentcodemu[$j]);
				$instrx = str_replace('.','', $instrx);
			}
			$query = "SELECT * FROM sandisecurity WHERE (UPPER(shortnameclean) LIKE '%" . strtoupper($instrx) . "%');";
//echo $query . "<br>";
			$row_cnt = 0;
			$statusx = 0;
			$sjsbx[$j] = "";
			$result = mysqli_query($link, $query);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				$statusx = 1;
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$sjsbx[$j] = $row['sjsb'];
				}
			}
			$qupdate7 = "UPDATE maindata SET out7jenissb='" . $sjsbx[$j] . "' WHERE (ID=" . $idku[$j] . ");";
			$resultupdate7 = mysqli_query($link, $qupdate7);
			
			if ($resultupdate7)
			{
				$jmlmatch7++;
			}
		}		

echo "       " . "Pass 7 .....<br>";

	}

//==========================================================================================================================
//Process Data

// Write to Excel

	if ($jmldatamain > 0)
	{
		
		$query = "SELECT * FROM maindata WHERE (statusout=1);";
	//echo $query . "<br>";
		$row_cnt = 0;
		$i = 0;
		$jmldatax = 0;
		$result = mysqli_query($link, $query);
		if ($result) {
	 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$i++;
				$idz[$i] = $row['ID'];
				$tglz[$i][$i] = $row['tgl'];
				$clientcodez[$i] = $row['clientcode'];
				$clientnamez[$i] = $row['clientname'];
				$instrumenttypez[$i] = $row['instrumenttype'];
				$instrumentcodez[$i] = $row['instrumentcode'];
				$marketvaluez[$i] = $row['marketvalue'];
				$out1z[$i] = $row['out1client'];
				$out2z[$i] = $row['out2sandiasuransi'];
				$out3z[$i] = $row['out3golpenerbit'];
				$out4z[$i] = $row['out4negarapemilik'];
				$out5z[$i] = $row['out5negarapenerbit'];
				$out6z[$i] = $row['out6kodesb'];
				$out7z[$i] = $row['out7jenissb'];
				$out8z[$i] = $row['out8'];
				$out9z[$i] = $row['out9'];
				$out10z[$i] = $row['out10'];
				$out11z[$i] = $row['marketvalue'];
				$out12z[$i] = $row['cashproceed'];
			}
		}
		$jmldatax = $i;
		
		
		$tglsaiki = date("d-M-Y");
		$tglsaikibul = date("Ymdhis");
		$filenameku = './OUTPUT/LKPBU_OUT_' . $tglsaikibul . '.xlsx';

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

echo "       " . "Writing Output .....<br>";

		if (file_exists($filenameku))
			unlink($filenameku);

// Read the file
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);

		$nm = 'O' . ($jmldatamain+6);
// Change the file
		//$worksheet->setActiveSheetIndex(0)
		$objPHPExcel->getActiveSheet()->setCellValue('A1', "KEGIATAN KUSTODIAN");
		$objPHPExcel->getActiveSheet()->setCellValue('A4', "No");
		$objPHPExcel->getActiveSheet()->mergeCells('A4:A6');		
		$objPHPExcel->getActiveSheet()->setCellValue('B4', 'Kode Komponen');
		$objPHPExcel->getActiveSheet()->mergeCells('B4:B6');
		
		$objPHPExcel->getActiveSheet()->setCellValue('C4', 'Pemilik Surat Berharga');
		$objPHPExcel->getActiveSheet()->mergeCells('C4:E4');
		$objPHPExcel->getActiveSheet()->setCellValue('C5', 'Golongan');
		$objPHPExcel->getActiveSheet()->setCellValue('D5', 'Sandi Perusahaan Asuransi **');
		$objPHPExcel->getActiveSheet()->setCellValue('E5', 'Negara Asal');
		$objPHPExcel->getActiveSheet()->setCellValue('C6', 'I.1');
		$objPHPExcel->getActiveSheet()->setCellValue('D6', 'I.2');
		$objPHPExcel->getActiveSheet()->setCellValue('E6', 'I.3');
		
		$objPHPExcel->getActiveSheet()->setCellValue('F4', 'Penerbit Surat Berharga');
		$objPHPExcel->getActiveSheet()->mergeCells('F4:G4');
		$objPHPExcel->getActiveSheet()->setCellValue('F5', 'Golongan');
		$objPHPExcel->getActiveSheet()->setCellValue('G5', 'Negara Asal');
		$objPHPExcel->getActiveSheet()->setCellValue('F6', 'II.1');
		$objPHPExcel->getActiveSheet()->setCellValue('G6', 'II.2');
		
		$objPHPExcel->getActiveSheet()->setCellValue('H4', 'Surat Berharga');
		$objPHPExcel->getActiveSheet()->mergeCells('H4:J4');
		$objPHPExcel->getActiveSheet()->setCellValue('H5', 'Kode');
		$objPHPExcel->getActiveSheet()->setCellValue('I5', 'Jenis');
		$objPHPExcel->getActiveSheet()->setCellValue('J5', 'Keterangan **');
		$objPHPExcel->getActiveSheet()->setCellValue('H6', 'III.1');
		$objPHPExcel->getActiveSheet()->setCellValue('I6', 'III.2');
		$objPHPExcel->getActiveSheet()->setCellValue('J6', 'III.3');
		
		$objPHPExcel->getActiveSheet()->setCellValue('K4', 'Jenis Valuta');
		$objPHPExcel->getActiveSheet()->mergeCells('K4:K5');
		$objPHPExcel->getActiveSheet()->setCellValue('K6', 'IV');
		
		$objPHPExcel->getActiveSheet()->setCellValue('L4', 'Tanggal');
		$objPHPExcel->getActiveSheet()->mergeCells('L4:M4');
		$objPHPExcel->getActiveSheet()->setCellValue('L5', 'Penerbitan');
		$objPHPExcel->getActiveSheet()->setCellValue('M5', 'Jatuh Tempo');
		$objPHPExcel->getActiveSheet()->setCellValue('L6', 'V.1');
		$objPHPExcel->getActiveSheet()->setCellValue('M6', 'V.2');
		
		$objPHPExcel->getActiveSheet()->setCellValue('N4', 'Nilai Valuta Asal');
		$objPHPExcel->getActiveSheet()->mergeCells('N4:N5');
		$objPHPExcel->getActiveSheet()->setCellValue('N6', 'VI');
		
		$objPHPExcel->getActiveSheet()->setCellValue('O4', 'Pembayaran Kupon/Deviden/Bunga/Diskonto');
		$objPHPExcel->getActiveSheet()->mergeCells('O4:O5');
		$objPHPExcel->getActiveSheet()->setCellValue('O6', 'VII');

//Set row height dari header
		//$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(35);
		//$objPHPExcel->getActiveSheet()->getRowDimension('3')->setRowHeight(25);
//Set lebar kolom
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(12);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(12);
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(12);
		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(12);
		$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(12);
		
// Wrap text
		$objPHPExcel->getActiveSheet()->getStyle('N4')->getAlignment()->setWrapText(true);
		$objPHPExcel->getActiveSheet()->getStyle('O4')->getAlignment()->setWrapText(true);
//Set alignment
		$objPHPExcel->getActiveSheet()->getStyle('C4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('A3:O6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		
		$objPHPExcel->getActiveSheet()->getStyle('A4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('B4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('C4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('F4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('H4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('K4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('C5:J5')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
//Set warna dari header
		$objPHPExcel->getActiveSheet()
			->getStyle('A4:B6')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()
			->setARGB('DDDDDD');		//Grey
		$objPHPExcel->getActiveSheet()
			->getStyle('C4:O5')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()
			->setARGB('C6E1FF');		//Pale blue
		$objPHPExcel->getActiveSheet()
			->getStyle('H6')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()
			->setARGB('C6E1FF');		//Pale blue
		$objPHPExcel->getActiveSheet()
			->getStyle('J6')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()
			->setARGB('C6E1FF');		//Pale blue
		$objPHPExcel->getActiveSheet()
			->getStyle('L6:O6')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()
			->setARGB('C6E1FF');		//Pale blue
		$objPHPExcel->getActiveSheet()
			->getStyle('C6:G6')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()
			->setARGB('FFFF80');		//Yellow
		$objPHPExcel->getActiveSheet()
			->getStyle('I6')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()
			->setARGB('FFFF80');		//Yellow
		$objPHPExcel->getActiveSheet()
			->getStyle('K6')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()
			->setARGB('FFFF80');		//Yellow
//Set border
		$styleArray = array(
		'borders' => array(
		'allborders' => array(
		'style' => PHPExcel_Style_Border::BORDER_THIN
			)
		));

//Reset
		$objPHPExcel->getActiveSheet()->getStyle("A4:$nm")->applyFromArray($styleArray);
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

		$objPHPExcel->getActiveSheet()->getStyle("A4:O6")->getFont()->setBold( true );
//Set FONT DATA
		$styleArray = array(
			'font'  => array(
			'bold'  => false,
			'color' => array('rgb' => '000000'),
			'size'  => 10,
			'name'  => 'Calibri'
		));

		$objPHPExcel->getActiveSheet()->getStyle("A2:$nm")->applyFromArray($styleArray);

		for ($n=1; $n<=$jmldatax; $n++) {
			$p = $n+6;
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, $p, $n);
			$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(1, $p, '010001', PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(2, $p, $out1z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(3, $p, $out2z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, $p, $out4z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(5, $p, $out3z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(6, $p, $out5z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(7, $p, $out6z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(8, $p, $out7z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(10, $p, $out8z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(11, $p, $out9z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(12, $p, $out10z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(13, $p, $out11z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(14, $p, $out12z[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(15, $p, $clientnamez[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(16, $p, $instrumentcodez[$n], PHPExcel_Cell_DataType::TYPE_STRING);
			
			//$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(10, $p, $txta);
		}

// Write the file
		////$writer = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
		$writer->save($filenameku);
	
//============================================================================================
$selesai = time();

$difference = $selesai - $mulai;
$years = abs(floor($difference / 31536000));
$days = abs(floor(($difference-($years * 31536000))/86400));
$hours = abs(floor(($difference-($years * 31536000)-($days * 86400))/3600));
$mins = abs(floor(($difference-($years * 31536000)-($days * 86400)-($hours * 3600))/60));

?>
<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="600px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
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
	<tr height="10px">
		<td colspan="3" style="padding-left: 40px; text-align: left; font-size: 1.0em;">
<?php
		if (file_exists($filenameku)) {
			$namafilexlku = 'LKPBU_OUT_' . $tglsaikibul . '.xlsx';
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
