<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php
session_start();
?>

<link href="stylemenuhoriz.css" rel="stylesheet" />
<link rel="stylesheet" href="chosen.css">
<link rel="stylesheet" href="styles.css">


<link rel="stylesheet" href="./datepicker/public/css/default.css" type="text/css">


<link rel="stylesheet" type="text/css" href="datepicker.css" />
<script src="jquery-1.11.2.min.js"></script> 
<script type="text/javascript" src="datepicker.js"></script> 
<script type="text/javascript" src="timepicker.js"></script> 
<script src="script.js"></script>
<script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>
<link rel="stylesheet" href="./datepicker/public/css/default.css" type="text/css">

<link type="text/css" rel="stylesheet" href="./datepicker/examples/libraries/syntaxhighlighter/public/css/shCoreDefault.css">

<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shCore.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushJScript.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushXML.js"></script>



<script>
//$(document).on('change','#sppd',function(){
//    var id=$(this).val();
//		var dataString = 'sppd='+ id;
//		$.ajax
//		({	
//			type: "POST",
//			url: "get_datasusulan.php",
//			data: dataString,
//			success: function(html)
//			{
//			   $("#nama").html(html);
//			} 
//		 });
//});
</script>

<script type="text/javascript">
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.all();
</script>
<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
</style>

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
    height: 16px; 
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
} 
 </style> 

<script>
function ceksusulan() 
{

		var suratdatindo = document.getElementsByName("nosuratdatindo")[0].value;
		var tahunbuku = document.getElementsByName("tahunbuku")[0].value;
		var sppd = document.getElementsByName("sppd")[0].value;
		var nama = document.getElementsByName("nama")[0].value;
		var alamat = document.getElementsByName("alamat")[0].value;
		var banktujuan = document.getElementsByName("banktujuan")[0].value;
		var cabang = document.getElementsByName("cabang")[0].value;
		var nominal = document.getElementsByName("nominal")[0].value;
		var atasnamarek = document.getElementsByName("atasnamarek")[0].value;
		var norekbaru = document.getElementsByName("norekbaru")[0].value;
		var biaya = document.getElementsByName("biaya")[0].value;
		var atasnamarek = document.getElementsByName("atasnamarek")[0].value;

//alert(document.getElementsByName("bpid")[0].selectedIndex);
		if (tahunbuku == null || tahunbuku == "" || sppd == null || sppd == "" || banktujuan == null || banktujuan == "" || 
			cabang == null || cabang == "" || norekbaru =="" || norekbaru == null || atasnamarek == "" || atasnamarek == null  ||
			nominal == null || nominal == "" || nominal < 0 )
		{
			alert("Data ada yg kosong/invalid");
			return false;
		}
		else {
			document.isisusulan.submit();
			return true;
		}

}
</script>
<script>
function getothersppd()
{
	var url = "getsppddata.php?sppd=";
	if (window.XMLHttpRequest) { // Mozilla, Safari, IE7+ ...
		httpRequest = new XMLHttpRequest();
	} else if (window.ActiveXObject) { // IE 6 and older
		httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var sppdValue = document.getElementById("sppd").value;
	var tahunbukuValue = document.getElementById("tahunbuku").value;
	var batchValue = document.getElementById("batch").value;
	var myRandom = parseInt(Math.random()*99999999);  // cache buster
	var dourl = url + (sppdValue) + "&tahunbuku=" + escape(tahunbukuValue) + "&batch=" + escape(batchValue) + "&rand=" + myRandom;
	httpRequest.open("GET",dourl , true);
	httpRequest.onreadystatechange = handleHttpResponse;
	httpRequest.send(null);
}
</script>
<script>
function handleHttpResponse() {
	if (httpRequest.readyState === 4) {
		if (httpRequest.status === 200) {
			if (httpRequest.responseText.length > 5)
			{
				results = httpRequest.responseText.split(",");
				document.getElementById('nama').value = results[0];
				document.getElementById('alamat').value = results[1];
				document.getElementById('nominal').value = results[2];
			}
			else
			{
				document.getElementById('nama').value = "";
				document.getElementById('alamat').value = "";
				document.getElementById('nominal').value = "";
			}
		}
	}
}  
</script>
</head>
<body>
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
<meta http-equiv="refresh" content="0; url=login.php" />
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
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
		$userid = $row['ID'];
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
<meta http-equiv="refresh" content="0; url=login.php" />
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
<meta http-equiv="refresh" content="0; url=login.php" />
<?php
}
?>

<br>


<?php
if (!isset($_POST["perusahaanid"])) {
	$perushid=$_SESSION["perusahaanid"];
}
else
	$perushid=$_POST["perusahaanid"];

if (!isset($_POST["tahun"])) {
	$tahun=$_SESSION["tahun"];
}
else
	$tahun=$_POST["tahun"];
	

if (!isset($_GET["nosusulan"])) {
	$nosusulan=0;
}
else
	$nosusulan=$_GET["nosusulan"];

if (!isset($_GET["susulid"])) {
	$susulid=0;
}
else
	$susulid=$_GET["susulid"];

if (!isset($_GET["telkomdatindoid"])) {
	$telkomdatindoid=0;
}
else
	$telkomdatindoid=$_GET["telkomdatindoid"];

# query the users table for name and surname 
$query = "SELECT * FROM perusahaan WHERE ID=" . $perushid . ";";
$row_cnt = 0;
$namaperus = "none";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$namaperus = $row['nama'];
	}
}

// Get oldest year & latest year
$sql00 = "SELECT MIN(tahun) AS minyear, MAX(tahun) AS maxyear FROM telkomdatindo;";
$row_cnt = 0;
$result = mysqli_query($link, $sql00);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$minyear = $row['minyear'];
		$maxyear = $row['maxyear'];
	}
}
$minyear = 2007;

// List nama bank 
$sql00 = "SELECT * FROM kodekliring ORDER BY namabank ASC;";
$row_cnt = 0;
$result = mysqli_query($link, $sql00);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$idku[$i] = $row['ID'];
		$namabankku[$i] = $row['namabank'];
	}
}
$jmlbank = $i;

if ($nosusulan > 0)
{
// Data dari susulan

	if ($nosusulan==1) {
		$sql00 = "SELECT * FROM susulan1 WHERE ID=" . $susulid . ";";
	}
	else if ($nosusulan==2) {
		$sql00 = "SELECT * FROM susulan2 WHERE ID=" . $susulid . ";";
	}
	else if ($nosusulan==3) {
		$sql00 = "SELECT * FROM susulan3 WHERE ID=" . $susulid . ";";
	}
	else if ($nosusulan==4) {
		$sql00 = "SELECT * FROM susulan4 WHERE ID=" . $susulid . ";";
	}


	$row_cnt = 0;
	$result = mysqli_query($link, $sql00);
	if ($result) {
 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		$i = 0;
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$idku = $row['ID'];
			$tahunku = $row['tahun'];
			$namaku = $row['nama'];
			$alamatku = $row['alamat'];
			$batchku = $row['batch'];
			$sppdku = $row['sppd'];
			$atasnamaku = $row['atasnama'];
			$telkomdatid = $row['telkomdatindoID'];
			$bankku = trim($row['bank']);
			$nominalku = $row['nominal'];
			$feeku = $row['biaya'];
			$cabangku = $row['cabang'];
			$norekku = $row['norek'];
		}
	}
}
else
{
			$idku = "";
			$tahunku = "";
			$namaku = "";
			$alamatku = "";
			$batchku = "";
			$sppdku = "";
			$telkomdatid = "";
			$bankku = "";
			$nominalku = "";
			$feeku = "";
			$cabangku = "";
			$norekku = "";
			$atasnamaku = "";

}


?>
	<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="800px" border="0" cellpadding="2" cellspacing="0">
          <tr height="30px"> 
            <td style="padding-left: 30px; text-align: left; font-size: 12; width: 50px">
				<h1>
<?php 
	if ($namaperus == "none") {
		print "Not Selected";
	}
	else
		print $namaperus;
?>
				</h1>
			</td>
           <td style="padding-left: 30px; text-align: left; font-size: 12; width: 200px">
				<h2>
<?php 
	if ($tahun == 0) {
		print "Not Selected";
	}
	else
		print $tahun;	
	
?>
				</h2>
			</td>
          </tr>
          <tr height="10px"> 
            <td style="padding-left: 30px; text-align: left; font-size: 12; width: 50px">
			</td>
            <td style="padding-left: 30px; text-align: left; font-size: 12; width: 200px">
			</td>
          </tr>
    </table>

<form action="updateisisusulan.php" method="post" name="isisusulan" id="isisusulan">
	<table style="text-align: left; margin-left: 30px; margin-right: auto; margin-top: 20px;" width="880px" border="0" cellpadding="2" cellspacing="0">
          <tr height="50px"> 
            <td colspan="7" style="padding-left: 0px; text-align: left; font-size: 12;"><h2>Data Susulan (Tunai ke Transfer)</h2></td>
          </tr>
          <tr height="20px"> 
            <td colspan="7" style="padding-left: 30px; text-align: left; font-size: 12; height: 20px">
				<input type="hidden" id="nosusulan" name="nosusulan" value="<?php echo $nosusulan;?>"-->
			</td>
          </tr>
          <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Tahun Proses</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="240px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<select id="tahunproses" name="tahunproses" data-placeholder="Tahun Proses" style="width:120px;" class="chosen-select-deselect">
						<option value=""></option>
<?php
						$maxyear=date('Y');
						for ($i=$minyear;$i<=$maxyear;$i++) {
?>
						<option value="<?php print $i;?>">
						<?php print $i;?>
						</option>
<?php
						}
?>
					</select> 
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Tgl Proses</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="240px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
						<input id="datepicker-example1a" type="text" name="datepicker-example1a" class="textbox" size="5" value="<?php echo date('Y-m-d');?>">
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Tahun Buku</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="240px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<select id="tahunbuku" name="tahunbuku" data-placeholder="Tahun Buku" style="width:120px;" class="chosen-select-deselect">
						<option value=""></option>
<?php
						$maxyear=date('Y');
						for ($i=$minyear;$i<=$maxyear;$i++) {
?>
						<option value="<?php print $i;?>" <?php if($tahunku==$i) echo "selected";?>>
						<?php print $i;?>
						</option>
<?php
						}
?>
					</select> 
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="240px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Batch</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
							<font face="arial" color="black">
							<select id="batch" name="batch" data-placeholder="Data Retur" class="chosen-select-no-single" >
								<option value="1" <?php if($batchku==1) echo "selected";?>>1 &nbsp;&nbsp;</option>
								<option value="2" <?php if($batchku==2) echo "selected";?>>2</option>
								<option value="3" <?php if($batchku==3) echo "selected";?>>3</option>
								<option value="4" <?php if($batchku==4) echo "selected";?>>4</option>
								<option value="5" <?php if($batchku==5) echo "selected";?>>5</option>
							</select> 
							</font>		
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				</div>
			</td>
		  </tr>
         <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">No Surat Datindo</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
						<input id="nosuratdatindo" name="nosuratdatindo" class="textbox "type="text" >  
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">SPPD</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<input id="sppd" name="sppd" class="textbox" type="text" value="<?php echo $sppdku;?>" onKeyUp="getothersppd();"> 
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Nama</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<input id="nama" name="nama" class="textbox" type="text" value="<?php echo $atasnamaku;?>"> 
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Alamat</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<input id="alamat" name="alamat" class="textbox" type="text"value="<?php echo $alamatku?>" > 
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Nominal</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<input id="nominal" name="nominal" value="<?php echo $nominalku;?>" align="right" STYLE="color: #000000; font-family: Verdana; text-align: right; font-weight: normal; font-size: 12px; background-color: #FFFFFF;" class="textbox" type="text">
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="main-wrapper">
					<div>
					</div>
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Bank Tujuan</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<select id="banktujuan" name="banktujuan" data-placeholder="Nama Bank" class="chosen-select" >
						<option value=""></option>
<?php
						for ($i=1;$i<=$jmlbank;$i++) {
?>
						<option value="<?php print $namabankku[$i];?>" <?php if($namabankku[$i]==$bankku) echo "selected";?>>
						<?php print $namabankku[$i];?>
						</option>
<?php
						}
?>
					</select> 
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;">
			</td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">

				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Cabang</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<input id="cabang" name="cabang" value="<?php echo $cabangku;?>" 
					STYLE="color: #000000; font-family: Verdana; text-align: right; font-weight: normal; font-size: 12px; background-color: #FFFFFF;" class="textbox"type="text" > 
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Biaya</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<input id="biaya" name="biaya" align="right" value="<?php echo $feeku;?>" STYLE="color: #000000; font-family: Verdana; text-align: right; font-weight: normal; font-size: 12px; background-color: #FFFFFF;" class="textbox"type="text">
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="main-wrapper">
					<div>
					</div>
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">No. Rekening Baru</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<input id="norekbaru" name="norekbaru" STYLE="color: #000000; font-family: Verdana; text-align: right; font-weight: normal; font-size: 12px; background-color: #FFFFFF;" class="textbox" type="text">
				</div>
			</td>
			<td colspan="2" ="100px" style="padding-left: auto; padding-top: auto; text-align: left; font-size: 12;">
				No Rek Lama : <?php echo $norekku;?>
			</td>

			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">

				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black">Atas Nama Rek</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<input id="atasnamarek" name="atasnamarek" value="<?php $atasnamaku;?>"
					STYLE="color: #000000; font-family: Verdana; text-align: right; font-weight: normal; font-size: 12px; background-color: #FFFFFF;" class="textbox"type="text" 
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="130px" style="padding-left: 0px; text-align: left;">
				<font face="arial" size="2" color="black"></font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
            <td width="220px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				</div>
			</td>
		  </tr>
          <tr height="30px"> 
            <td colspan="7" width="880px" style="padding-left: auto; text-align: center; font-size: 12;">
				<div class="side-by-side clearfix">
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td colspan="7" width="880px" style="padding-left: auto; text-align: center; font-size: 12;">
				<div class="side-by-side clearfix">
					<a href="" class="medium button orange" onclick="ceksusulan(this.form); return false;">Tambahkan</a>
				</div>
			</td>
		  </tr>
          <tr> 
            <td colspan="7" style="padding-left: auto; text-align: left; font-size: 12; height: 20px">
                <!--input name="remember" type="checkbox" id="remember" value="1">
                Remember Me</div></td-->
			</td>	
			
          </tr>
    </table>
</form>

  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script type="text/javascript">
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
        <script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>
        <script type="text/javascript" src="./datepicker/examples/public/javascript/core.js"></script>
	</script>
</body>
<?php

//*******************************************************************************************************
	$_SESSION['userid'] = $userid;
	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['perusahaanid'] = $perushid;
	$_SESSION['namaperusahaan'] = $namaperus;
	$_SESSION['tahun'] = $tahun;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;

//*******************************************************************************************************

?>
</html>