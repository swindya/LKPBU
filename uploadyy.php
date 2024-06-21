<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
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
 
 <style>
.verticalhorizontal {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
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
	var bulan = document.getElementsByName("bulan")[0].value;
	var tahun = document.getElementsByName("tahun")[0].value;
	
	if (bulan == null || bulan == 0 || tahun == null || tahun == 0)
	{
		alert("Lengkapi data lebih dulu");
		return false;
	}
	else {
		document.getElementsByName("statusrun")[0].value = 2;
		document.getElementById('cssload-loader').style.display='inline';
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


$bulanarr = array('---','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

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
	

<table style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="1200px" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td style="vertical-align: top; padding-left: auto; padding-top: 0; text-align: left; font-size: 12; width:1200px">
	<form name="myrun" id="myrun" action="uploadyy.php" method="post" enctype="multipart/form-data">
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
											<option value="<?php echo $k;?>" <?php if ($k==$bulanku) echo 'selected';?>><?php echo $bulanarr[$k];?>&nbsp;&nbsp;&nbsp;</option>
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
										<!--option value="0">---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option-->
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
<br><br>

<div id="cssload-loader" class="cssload-preloader">
	<div class="cssload-preloader-box">		<div>L</div>		<div>o</div>		<div>a</div>		<div>d</div>		<div>i</div>		<div>n</div>		<div>g</div></div>
</div>

<?php
if ($statusrun==2)
{

?>

<!--img id="" src="./images/spinnercolor.gif" alt="spinner" class="verticalhorizontal" height="200" width="200"-->

<?php
//Read Data

	$files = glob('./OUTPUT/*BNI01-01.txt'); // get all file names
	foreach($files as $file){ // iterate files
	  if(is_file($file)) {
		unlink($file); // delete file
	  }
	}
	$files = glob('./OUTPUT/LKPBU_PASAR*.xlsx'); // get all file names
	foreach($files as $file){ // iterate files
	  if(is_file($file)) {
		unlink($file); // delete file
	  }
	}
		
//=======================================================================================
// Update APOLLOSECOJK
//=======================================================================================
//$sql0 = "UPDATE apollowsecojk SET jenis='TERM NOTES' WHERE jenis='MEDIUM TERM NOTES';";
//$result = mysqli_query($link, $sql0);

$sql0 = "UPDATE apollow SET isin='', kodetipeefek='', issuercode='';";
$result = mysqli_query($link, $sql0);

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
			$scode[$i] = trim($row['seccode']);
		}
	}
	$jmlcode = $i;
//====================================================================================================
//Kalau ternyata scode ternyata isin ("ID" sbg header) maka copy ke kolom/field ISIN
//Kemudian cari seccode dari tabel Apollowisin
//====================================================================================================
	for ($a=1; $a<=$jmlcode; $a++)
	{
		if (strlen($scode[$a]) > 2 && strtoupper(substr($scode[$a],0,2))=="ID")
		{
			$sql00 = "UPDATE apollow SET isin='" . $scode[$a] . "' WHERE (seccode='" . $scode[$a] . "');";
			$result00 = mysqli_query($link, $sql00);
			$scodexx = "";
			$sql22 = "SELECT * FROM apollowisin WHERE isin='" . $scode[$a] . "';";
			$result = mysqli_query($link, $sql22);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$scodexx = trim($row['seccode']);
				}
			}
			$sql33 = "UPDATE apollow SET seccode='" . $scodexx . "' WHERE (isin='" . $scode[$a] . "');";
			$result33 = mysqli_query($link, $sql33);
		}
	}
//====================================================================================================
//UPDATE SEC CODE
//====================================================================================================
//substr($scode[$a],0,12)
	for ($a=1; $a<=$jmlcode; $a++)
	{
		$row_cnt = 0;
		$sta = 0;
		$isinx[$a] = "";
		$sql1 = "SELECT * FROM apollowisin WHERE seccode='" . $scode[$a] . "';";
		$result = mysqli_query($link, $sql1);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$isinx[$a] = trim($row['isin']);
			}
		}
		if (strlen($isinx[$a]) < 2)
		{
			$row_cnt = 0;
			$sql1 = "SELECT * FROM apollosecojk WHERE kodeefek='" . $scode[$a] . "';";
			$result = mysqli_query($link, $sql1);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$isinx[$a] = trim($row['kodeisin']);
				}
			}
		}

		$sql2 = "UPDATE apollow SET isin='" . $isinx[$a] . "' WHERE seccode='" . $scode[$a] . "';";
//echo $sql2 . "<br>";
		$result2 = mysqli_query($link, $sql2);
	}
//====================================================================================================


//=======================================================================================
// Read data apollo
//=======================================================================================
	
	for ($a=1; $a<=$jmlcode; $a++)
	{
		$scodex[$a] = $scode[$a];
		if (strlen($scode[$a])>12)
		{
			$scodex[$a] = substr($scode[$a],0,12);
		}
	}

//====================================================================================================
//UPDATE SEC CODE
//====================================================================================================
/*
	for ($a=1; $a<=$jmlcode; $a++)
	{
		$row_cnt = 0;
		$sta = 0;
		$isinco[$a] = "";
		$sql1 = "SELECT * FROM apollowisin WHERE (seccode='" . $scode[$a] . "');";
		$result = mysqli_query($link, $sql1);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			$sta = 1;
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$isinco[$a] = trim($row['isin']);
			}
		}
		if (strlen($isinco[$a])<1)
		{
			$row_cnt = 0;
			$sql1 = "SELECT * FROM apollosecojk WHERE (kodeefek='" . $scode[$a] . "');";
			$result = mysqli_query($link, $sql1);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				$sta = 1;
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$isinco[$a] = trim($row['kodeisin']);
				}
			}
		}
		$sql2 = "UPDATE apollow SET isin='" . $isinco[$a] . "' WHERE (seccode='" . $scode[$a] . "' AND LENGTH(isin)<2);";
		//$result2 = mysqli_query($link, $sql2);
	}
*/
//====================================================================================================
//UPDATE JENIS & KODE ISSUER
//====================================================================================================
	for ($a=1; $a<=$jmlcode; $a++)
	{
		$row_cnt = 0;
		$jenis[$a] = "";
		$kodeis[$a] = "";
		$kodex[$a] = "";
		$kisin[$a] = "";
		//$sql1 = "SELECT * FROM apollosecojk WHERE kodeefek LIKE '" . $scodex[$a] . "%';";
		$sql1 = "SELECT * FROM apollosecojk WHERE kodeefek='" . $scode[$a] . "';";
		$result = mysqli_query($link, $sql1);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$jenis[$a] = trim($row['jenis']);
				$kodeis[$a] = trim($row['kodeissuer']);
				$kisin[$a] = trim($row['kodeisin']);
			}
		}
		$row_cnt = 0;
		$sql1 = "SELECT * FROM apollorefsec WHERE UPPER(sectype)='" . strtoupper($jenis[$a]) . "';";
//echo $sql1 . "<br>";
		$result = mysqli_query($link, $sql1);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$kodex[$a] = trim($row['kode']);
			}
		}

		$sql2 = "UPDATE apollow SET kodetipeefek='" . $kodex[$a] . "', issuercode='" . $kodeis[$a] . 
				"' WHERE seccode='" . $scodex[$a] . "';";
				
		$result2 = mysqli_query($link, $sql2);
		
		$sql3 = "UPDATE apollow SET isin='" . $kisin[$a] . "' WHERE (seccode='" . $scodex[$a] . "' AND LENGTH(isin)<2);";
		$result3 = mysqli_query($link, $sql3);

	}
//====================================================================================================
//READ SEC CODE PER TGL
//====================================================================================================
//====================================================================================================
	$row_cnt = 0;
	$i = 0;
	$query = "SELECT * FROM apollow GROUP BY tgl ORDER BY tgl ASC;";
	$result = mysqli_query($link, $query);
	if ($result) {
    $row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$idku[$i] = $row['ID'];
			$tglku[$i] = $row['tgl'];
		}
	}
	$jmltgl = $i;
//===================================================================================
// BIKIN Header TGL
//===================================================================================
//echo $tglku[1] . "<br>";
	$tglhead = $tglku[1];
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
//===================================================================================

	for ($a=1; $a<=$jmltgl; $a++)
	{
		$row_cnt = 0;
		$sta = 0;
		$j = 0;
		//$jmltglpercode[$a] = 0;

		for ($b=1; $b<=$jmlcode; $b++)
		{
			$jmlrec[$a][$b] = 0;
			$jmldel[$a][$b] = 0;
			$qtyrec[$a][$b] = 0;
			$qtydel[$a][$b] = 0;
			$netrec[$a][$b] = 0;
			$netdel[$a][$b] = 0;
			$statrec = 0;
			$statdel = 0;
			$currx[$a][$b] = "IDR";
			$j = 0;
			$sql1 = "SELECT * FROM apollow WHERE tgl='" . $tglku[$a] . "' AND seccode='" . $scode[$b] . "' ORDER BY seccode ASC;";
			$result = mysqli_query($link, $sql1);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$j++;
					$idx[$a][$b][$j] = $row['ID'];
					$statusx[$a][$b][$j] = $row['statusr'];
					$qtyx[$a][$b][$j] = $row['qty'];
					$kodetex[$a][$b] = $row['kodetipeefek'];
					$issuercodex[$a][$b] = $row['issuercode'];
					$isinxx[$a][$b] = $row['isin'];
					$seckode[$a][$b] = $row['seccode'];
					if (strlen($row['curr'])>0)
					{
						$currx[$a][$b] = $row['curr'];
					}
					$amountx[$a][$b][$j] = $row['netamount'];
					if (strpos(strtoupper($statusx[$a][$b][$j]),"RECEIVE")!==false)
					{
						$statrec++;
						$qtyrec[$a][$b] = $qtyrec[$a][$b] + $qtyx[$a][$b][$j];
						$netrec[$a][$b] = $netrec[$a][$b] + $amountx[$a][$b][$j];
					}
					else if (strpos(strtoupper($statusx[$a][$b][$j]),"DELIVER")!==false)
					{
						$statdel++;
						$qtydel[$a][$b] = $qtydel[$a][$b] + $qtyx[$a][$b][$j];
						$netdel[$a][$b] = $netdel[$a][$b] + $amountx[$a][$b][$j];
					}
	//echo $scode[$a] . "--" . $tglx[$a] . "++" . $statusx[$a] . "++" . $qtyx[$a] . "++" . $amountx[$a] . "<br>";
				}
			}
			$jmlaaa[$a][$b] = $j;
			$jmlrec[$a][$b] = $statrec;
			$jmldel[$a][$b] = $statdel;
		}

//echo $scode[$a] . "--" . $jmltglpercode[$a] . "-" . $jmlrec[$a] . "-" . $jmldel[$a] . "<br>";
	}
//====================================================================================================


//Isi Kode Jenis Surat Berharga
?>
<script>
document.getElementById('cssload-loader').style.display='inline';
</script>
<?php

$jmldatamain = 1;


	if ($jmldatamain > 0)
	{
		$tglsaikibul = date("d-M-Y");
		$kodetime = date("Hs");
		//$tahunku = 2021;
		

		
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// Write to TXT
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
		$bulanbesok = $bulanku + 1;
		$tahunbesok = $tahunku;
		if ($bulanbesok==13)
		{
			$bulanbesok = 1;
			$tahunbesok = $tahunku + 1;
		}
		$tglbesok = $tahunbesok . "-" . $bulanbesok . "-01";
		
		$date=date_create($tglbesok);
		date_add($date,date_interval_create_from_date_string("-1 days"));
		$tglss = date_format($date,"Y-m-d");
		$tglfile = date_format($date,"Ymd");
		$timeq = date_format($date,"His");
		$tglsaikibul = date("Ymdhis");

		//$filetxtku = './OUTPUT/2LKPBU_PASARMODAL_' . strtoupper($bulanarr[$bulanku]) . "_" . $tahunku . $timeq . 'v2.txt';
		//$namafiletxtku = '2LKPBU_PASARMODAL_' . strtoupper($bulanarr[$bulanku]) . "_" . $tahunku . $timeq . 'v2.txt';
		$namafiletxtku = "BKMAB-94M101-R-M-" . $tglfile . "-BNI01-01.txt";
		$filetxtku = "./OUTPUT/" . $namafiletxtku;
		$ipku = "localhost";
		$ipku = "10.50.14.11";
		$urlxlfile = "http://" . $ipku . "/lkpbu/OUTPUT/" . "LKPBU_PASARMODAL_OUT_" . $tglsaikibul . "-BNI01-01.txt";
		$urlfile = "http://" . $ipku . "/lkpbu/OUTPUT/" . $namafiletxtku;
		
//Hapus file jika ada
		if (file_exists($filetxtku))
		{
			unlink($filetxtku);
		}		
		
		$filess = fopen($filetxtku,"a");
		$p = 0;
		$d = 0;
		$header = "H01|021001|BNI01|" . $tglss . "|BKMAB|94M101|";
//echo $header . "<br>";
		fwrite($filess,$header.PHP_EOL);
		for ($n=1; $n<=$jmltgl;$n++) 
		{
			for ($p=1; $p<=$jmlcode; $p++)
			{
				if ($jmlrec[$n][$p]>0 || $jmldel[$n][$p]>0)
				{
					$d++;
					$tglarr = explode("-", $tglku[$n]);
					$tglkux[$n] = $tglarr[0] . $tglarr[1] . $tglarr[2];					
					if ($jmlrec[$n][$p]==0)
					{
						$data1015 = "000000000000|0.00|0.00|0.00|0.00|0.00";
					}
					else
					{
						$data1015 = $jmlrec[$n][$p] . "|" . number_format($qtyrec[$n][$p],2,'.','') . "|" . number_format($netrec[$n][$p],2,'.','') . "|100.00|100.00|100.00";
					}

//--------------------------------------------						
					if ($jmldel[$n][$p]==0)
					{
						$data1621 = "0|0.00|0.00|0.00|0.00|0.00";
					}
					else
					{
						//$data1621 = $jmldel[$n][$p] . "|" . number_format($qtydel[$n][$p],2,'.','') . "|" . number_format($netdel[$n][$p],2,'.','') . "|100.00|100.00|100.00";
						$data1621 = $jmldel[$n][$p] . "|" . number_format($qtydel[$n][$p],2,'.','') . "|" . number_format($netdel[$n][$p],2,'.','') . "|100.00|100.00|100.00";
					}
					
					//$datain = "D01|940101010000|" . $tglkux[$n] . "|" . $kodetex[$n][$p] . "||" . $isinx[$n][$p] . "||" . $issuercodex[$n][$p] .
					//		"||" . $currx[$n][$p] . "|" . $data1015 . "|" . $data1621;
							
					$datain = "D01|940101010000|" . $tglkux[$n] . "|" . $kodetex[$n][$p] . "||" . $isinxx[$n][$p] . "||" . $issuercodex[$n][$p] .
							"||IDR|" . $data1015 . "|" . $data1621 . "|" . $seckode[$n][$p];
//echo $datain . "<br>";
					fwrite($filess,$datain.PHP_EOL);
					
				}
			}
		}
		fclose($filess);

/*
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename='.basename($filetxtku));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filetxtku));
header("Content-Type: text/plain");
readfile($filetxtku);
*/
//=========================================================================================
		
	}


?>
<DIV>
<table style="text-align: left; padding-left: 40px; padding-right: auto; padding-top: auto;" width="1200px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 0px; text-align: left; font-size: 12; width:1200px">
			<FONT size="4">
			OUTPUT
			</FONT>
		</td>
	</tr>
	<tr height="30px">
		<td style="padding-left: 0px; text-align: left; font-size: 12; width:1200px">
		</td>
	</tr>
	<tr height="50px">
		<td style="padding-left: 0px; text-align: left; font-size: 12;">
<?php
		$namafile = $filetxtku;
		if (file_exists($namafile)) {
			//$namafileku = 'LKPBU_PASARMODAL_' . "AGUSTUS" . "_" . $tahunku . 'v2.xlsx';
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
	<tr height="50px">
		<td style="padding-left: 0px; text-align: left; font-size: 12;">
<?php
		if (file_exists($filetxtku)) {
			//$namafilexlku = 'LKPBU_' . $bulanku . " " . $tahunku . '.xlsx';
?>
			<font face="arial" size="2" color="black">
				<a href="<?php echo $urlfile;?>" download=<?php echo $filetxtku;?>><img src="text2.png" /></a>
				<a href="<?php echo $urlfile;?>" download=<?php echo $filetxtku;?>> <?php echo $namafiletxtku;?></a>
			</font>
<?php
		}
?>			
			
			</font>
		</td>
	</tr>
</table>
</DIV>

<!--img src="./images/spinnercolor.gif" alt="spinner" class="verticalhorizontal" height="200" width="200"-->

<?php
}
?>


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

<script>
document.getElementById('cssload-loader').style.display='none';
</script>


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