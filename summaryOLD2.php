<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<link href="stylemenuhoriz.css" rel="stylesheet" />
<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
<!--script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script-->
<script src="script.js"></script>
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
.menu1,
.menu1 ul,
.menu1 li,
.menu1 a {
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
}
 
.menu1 { /*Find this class in the css file*/

height: 40px;
width: 100%; /*I changed this to a percentage of the page,*/
margin-left:auto; /*Then added these two margin styles.*/
margin-right:auto;

background: #4c4e5a;
background: -webkit-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
background: -moz-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
background: -o-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
background: -ms-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
background: linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);

-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}
 
.menu1 li {
    position: relative;
    list-style: none;
    float: left;
    display: block;
    height: 40px;
}
.menu1 li a {
    display: block;
    padding: 0 14px;
    margin: 6px 0;
    line-height: 28px;
    text-decoration: none;
 
    border-left: 1px solid #393942;
    border-right: 1px solid #4f5058;
 
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold;
    font-size: 13px;
 
    color: #f3f3f3;
    text-shadow: 1px 1px 1px rgba(0,0,0,.6);
 
    -webkit-transition: color .2s ease-in-out;
    -moz-transition: color .2s ease-in-out;
    -o-transition: color .2s ease-in-out;
    -ms-transition: color .2s ease-in-out;
    transition: color .2s ease-in-out;
}
 
.menu1 li:first-child a { border-left: none; }
.menu1 li:last-child a{ border-right: none; }
 
.menu1 li:hover > a { color: #ffffff; 
  background: #ff9122;
  background: -moz-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffba5b), color-stop(100%, #fd6522));
  background: -webkit-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -o-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -ms-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: linear-gradient(to bottom, #ffba5b 0%, #fd6522 100%);
}
.menu1 li.active > a{
  background: #ff9122;
  background: -moz-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffba5b), color-stop(100%, #fd6522));
  background: -webkit-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -o-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -ms-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: linear-gradient(to bottom, #ffba5b 0%, #fd6522 100%);
}
.menu1 ul {
    
    position: absolute;
    top: 40px;
    left: 0;
 
    opacity: 50;
    background: #1f2024;
 
    -webkit-border-radius: 0 0 5px 5px;
    -moz-border-radius: 0 0 5px 5px;
    border-radius: 0 0 5px 5px;
 
    -webkit-transition: opacity .25s ease .1s;
    -moz-transition: opacity .25s ease .1s;
    -o-transition: opacity .25s ease .1s;
    -ms-transition: opacity .25s ease .1s;
    transition: opacity .25s ease .1s;

}
 
.menu1 li:hover > ul { opacity: 50; }
 
.menu1 ul li {
    height: 0;
    overflow: hidden;
    padding: 0;
 
    -webkit-transition: height .25s ease .1s;
    -moz-transition: height .25s ease .1s;
    -o-transition: height .25s ease .1s;
    -ms-transition: height .25s ease .1s;
    transition: height .25s ease .1s;
}
 
.menu1 li:hover > ul li {
    height: 36px;
    overflow: visible;
    padding: 0;
}
.menu1 ul li a {
    width: 200px;
    padding: 4px 0 4px 16px;
    margin: 0;
 
    border: none;
    border-bottom: 1px solid #353539;
}
 
.menu1 ul li:last-child a { border: none; 
}
.menu1 a.documents { background: url(../img/docs.png) no-repeat 6px center; }
.menu1 a.messages { background: url(../img/bubble.png) no-repeat 6px center; }
.menu1 a.signout { background: url(../img/arrow.png) no-repeat 6px center;
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
window.top.location.href = "http://localhost/deviden/index.php"; 
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
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$userid = $row['ID'];
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
window.top.location.href = "http://localhost/deviden/index.php"; 
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
window.top.location.href = "http://localhost/deviden/index.php"; 
</script>
<?php
}
?>

<ul class="menu1">
	<li><a href='menu1.php'><span>Home</span></a></li>
	<li><a href='uploadfile.php'><span>Impor Data</span></a></li>
	<li><a href='viewdata.php'><span>View Data</span></a></li>
	<li><a href='bayarawal.php'><span>Pembayaran Transfer Awal</span></a></li>
	<li><a href='retur.php'><span>Retur & Susulan</span></a>
        <ul>
            <li><a href="returupload.php" class="documents">Retur - Upload Data/File</a></li>
            <li><a href="retur.php" class="messages">Retur - View & Create File</a></li>
            <li><a href="susulanupload.php" class="signout">Susulan - Upload Data/File</a></li>
			<li><a href="susulan.php" class="signout">Susulan - View & Create File</a></li>
        </ul>
	</li>
	<li><a href='returbayar.php'><span>Pembayaran Retur</span></a></li>
	<li><a href='laporan.php'><span>Laporan</span></a></li>
	<li class='active'><a href='summary.php'><span>Ringkasan</span></a></li>
	<li><a href='#'><span>Setting</span></a>
        <ul>
            <li><a href="settingbayardeviden.php" class="documents">Batch Pembayaran Deviden</a></li>
            <li><a href="settingbank.php" class="documents">Bank & Kode Kliring</a></li>
            <li><a href="settingjenisusaha.php" class="documents">JenisUsaha</a></li>
        </ul>
	</li>
	<li class='last'><a href='mainmenu.php'><span>Menu Utama</span></a></li>
</ul>

<br>
<DIV align="right">
	<table align="right" style="text-align: right; margin-left: auto; margin-right: auto; margin-top: 0px; height: 30px;" width="220px" border="0" cellpadding="2" cellspacing="0">
          <tr height="40px"> 
            <td style="padding-left: 0px; text-align: left; font-size: 12; width: 80px">
				<span title="Setting"><a href="setting.php" target="_blank"><img src="settingicon24.png" /></a></span>
			</td>
            <td style="padding-left: 0px; text-align: left; font-size: 12; width: 140px">
				<p><font face="arial" color="blue">-&nbsp;</font>
				<i><font face="arial" color="blue"><?php print $namaku;?></font></i>
				&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
			</td>
          </tr>
	</table>
</DIV>

<?php
if (!isset($_POST["perusahaan"])) {
	$perushid=$_SESSION["perusahaanid"];
}
else
	$perushid=$_POST["perusahaan"];

if (!isset($_POST["tahun"])) {
	$tahun=$_SESSION["tahun"];
}
else
	$tahun=$_POST["tahun"];

if (!isset($_POST["batch"])) {
	$batch=$_SESSION["batch"];
}
else
	$batch=$_POST["batch"];

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
$counti = $i;

//***********************************************************************************************************
//***********************************************************************************************************
if (strpos(strtoupper($namaperus), "TELKOM") !== false)
{	

// Cari jumlah data TUNAI (PUB, ESA1, ESA2)
$jmltunpub = 0;
$jmltunesa1 = 0;
$jmltunesa2 = 0;
$grostunpub = 0;
$grostunesa1 = 0;
$grostunesa2 = 0;
$sql0 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TUN');";
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow==0) {
	$jmltunpub = 0;
	$jmltunesa1 = 0;
	$jmltunesa2 = 0;
	$grostunpub = 0;
	$grostunesa1 = 0;
	$grostunesa2 = 0;
}
else if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$jenisku = $row['jenisesop'];
		$dgrosku = $row['bayar'];
		if ($jenisku == "PUB") {
			$jmltunpub++;
			$grostunpub = $grostunpub + $dgrosku;
		}
		else if ($jenisku == "ESA1") {
			$jmltunesa1++;
			$grostunesa1 = $grostunesa1 + $dgrosku;
		}
		else if ($jenisku == "ESA2") {
			$jmltunesa2++;
			$grostunesa2 = $grostunesa2 + $dgrosku;
		}
	}
}

// Cari jumlah data TRANSFER ke BNI (PUB, ESA1, ESA2)
$jmltxbnipub = 0;
$jmltxbniesa1 = 0;
$jmltxbniesa2 = 0;
$grostxbnipub = 0;
$grostxbniesa1 = 0;
$grostxbniesa2 = 0;
$sql0 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TRF' AND jenisbank LIKE '%BNI%');";
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow==0) {
	$jmltxbnipub = 0;
	$jmltxbniesa1 = 0;
	$jmltxbniesa2 = 0;
	$grostxbnipub = 0;
	$grostxbniesa1 = 0;
	$grostxbniesa2 = 0;
}
else if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$jenisku = $row['jenisesop'];
		$dgrosku = $row['bayar'];
		if ($jenisku == "PUB") {
			$jmltxbnipub++;
			$grostxbnipub = $grostxbnipub + $dgrosku;
		}
		else if ($jenisku == "ESA1") {
			$jmltxbniesa1++;
			$grostxbniesa1 = $grostxbniesa1 + $dgrosku;
		}
		else if ($jenisku == "ESA2") {
			$jmltxbniesa2++;
			$grostxbniesa2 = $grostxbniesa2 + $dgrosku;
		}
	}
}
// Cari jumlah data TRANSFER ke Bank LAIN (PUB, ESA1, ESA2)
$jmltxlainpub = 0;
$jmltxlainesa1 = 0;
$jmltxlainesa2 = 0;
$grostxlainpub = 0;
$grostxlainesa1 = 0;
$grostxlainesa2 = 0;
$sql0 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TRF' AND jenisbank='LAIN');";

$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow==0) {
	$jmltxlainpub = 0;
	$jmltxlainesa1 = 0;
	$jmltxlainesa2 = 0;
	$grostxlainpub = 0;
	$grostxlainesa1 = 0;
	$grostxlainesa2 = 0;
}
else if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$jenisku = $row['jenisesop'];
		$dgrosku = $row['bayar'];
		if ($jenisku == "PUB") {
			$jmltxlainpub++;
			$grostxlainpub = $grostxlainpub + $dgrosku;
		}
		else if ($jenisku == "ESA1") {
			$jmltxlainesa1++;
			$grostxlainesa1 = $grostxlainesa1 + $dgrosku;
		}
		else if ($jenisku == "ESA2") {
			$jmltxlainesa2++;
			$grostxlainesa2 = $grostxlainesa2 + $dgrosku;
		}
	}
}

// Cari jumlah data TRANSFER ke Bank SCB (PUB, ESA1, ESA2)
$jmltxscbpub = 0;
$jmltxscbesa1 = 0;
$jmltxscbesa2 = 0;
$grostxscbpub = 0;
$grostxscbesa1 = 0;
$grostxscbesa2 = 0;
$sql0 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TRF' AND jenisbank='SCB');";
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow==0) {
	$jmltxscbpub = 0;
	$jmltxscbesa1 = 0;
	$jmltxscbesa2 = 0;
	$grostxscbpub = 0;
	$grostxscbesa1 = 0;
	$grostxscbesa2 = 0;
}
else if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$jenisku = $row['jenisesop'];
		$dgrosku = $row['bayar'];
		if ($jenisku == "PUB") {
			$jmltxscbpub++;
			$grostxscbpub = $grostxscbpub + $dgrosku;
		}
		else if ($jenisku == "ESA1") {
			$jmltxscbesa1++;
			$grostxscbesa1 = $grostxscbesa1 + $dgrosku;
		}
		else if ($jenisku == "ESA2") {
			$jmltxscbesa2++;
			$grostxscbesa2 = $grostxscbesa2 + $dgrosku;
		}
	}
}

?>


	<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="100%" border="0" cellpadding="2" cellspacing="0">
          <tr height="30px"> 
            <td style="padding-left: 30px; text-align: left; font-size: 12; height: 30px">
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
          </tr>
          <tr height="20px"> 
            <td style="padding-left: 30px; text-align: left; font-size: 12; height: 20px">
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
    </table>
<DIV align="left">
	<br><br>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="750px" border="0" cellpadding="0" cellspacing="0">
		<tr height="50px">
			<td colspan="5" style="padding-left: 10px; text-align: left; font-size: 12; height: 40px; width=50%">
				<h2><font face="arial" color="black">Ringkasan (Summary) Data:</font></h2>
			</td>
		</tr>

		<tr height="40px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 120px; height: 40px">
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">Tunai</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">Transfer BNI</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">Transfer Bank Lain</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">Transfer SCB</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">T O T A L</font></i></b>
			</td>
          </tr>
          <tr height="60px"> 
            <td style="padding-left: 10px; text-align: left; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">PUB</font></i></b>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltunpub,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostunpub,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxbnipub,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxbnipub,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxlainpub,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxlainpub,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxscbpub,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxscbpub,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 150px">
				<font face="arial" size="2" color="black">
				<?php 
					$totnum = $jmltunpub + $jmltxbnipub + $jmltxlainpub + $jmltxscbpub;
					print number_format($totnum,0);
				?>
				</font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black">
				<?php 
					$totval = $grostunpub + $grostxbnipub + $grostxlainpub + $grostxscbpub;
					print "Rp. " . number_format($totval,0);
				?>
				</font></p>
			</td>
          </tr>
          <tr height="60px"> 
            <td style="padding-left: 10px; text-align: left; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">ESA 1</font></i></b>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltunesa1,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostunesa1,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxbniesa1,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxbniesa1,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxlainesa1,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxlainesa1,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxscbesa1,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxscbesa1,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 150px">
				<font face="arial" size="2" color="black">
				<?php
					$totnum = $jmltunesa1 + $jmltxbniesa1 + $jmltxlainesa1 + $jmltxscbesa1;
					print number_format($totnum,0);					
				?>
				</font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black">
				<?php
					$totval = $grostunesa1 + $grostxbniesa1 + $grostxlainesa1 + $grostxscbesa1;
					print "Rp. " . number_format($totval,0);
				?>
				</font></p>
			</td>
          </tr>
          <tr height="60px"> 
            <td style="padding-left: 10px; text-align: left; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">ESA2</font></i></b>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltunesa2,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostunesa2,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxbniesa2,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxbniesa2,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxlainesa2,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxlainesa2,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxscbesa2,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxscbesa2,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 150px">
				<font face="arial" size="2" color="black">
				<?php
					$totnum = $jmltunesa2 + $jmltxbniesa2 + $jmltxlainesa2 + $jmltxscbesa2;
					print number_format($totnum,0);					
				?>
				</font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black">
				<?php
					$totval = $grostunesa2 + $grostxbniesa2 + $grostxlainesa2 + $grostxscbesa2;
					print "Rp. " . number_format($totval,0);
				?>
				</font></p>
			</td>
          </tr>
          <tr height="60px"> 
            <td style="padding-left: 10px; text-align: left; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">T O T A L</font></i></b>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">
				<?php 
					$totnum1 = $jmltunpub + $jmltunesa1 + $jmltunesa2;
					print number_format($totnum1,0);
				?>
				</font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black">
				<?php
					$totval1 = $grostunpub + $grostunesa1 + $grostunesa2;
					print "Rp. " . number_format($totval1,0);
				?>
				</font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">
				<?php
					$totnum2 = $jmltxbnipub + $jmltxbniesa1 + $jmltxbniesa2;
					print number_format($totnum2,0);
				?>
				</font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black">
				<?php
					$totval2 = $grostxbnipub + $grostxbniesa1 + $grostxbniesa2;
					print "Rp. " . number_format($totval2,0);
				?>
				</font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">
				<?php
					$totnum3 = $jmltxlainpub + $jmltxlainesa1 + $jmltxlainesa2;
					print number_format($totnum3,0);
				?>
				</font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black">
				<?php
					$totval3 = $grostxlainpub + $grostxlainesa1 + $grostxlainesa2;
					print "Rp. " . number_format($totval3,0);
				?>
				</font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">
				<?php
					$totnum4 = $jmltxscbpub + $jmltxscbesa1 + $jmltxscbesa2;
					print number_format($totnum4,0);
				?>
				</font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black">
				<?php
					$totval4 = $grostxscbpub + $grostxscbesa1 + $grostxscbesa2;
					print "Rp. " . number_format($totval4,0);
				?>
				</font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 150px">
				<b><font face="arial" size="2" color="black">
				<?php
					$totnum = $totnum1 + $totnum2 + $totnum3 + $totnum4;
					print number_format($totnum,0);					
				?>
				</font></b>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><b><font face="arial" size="2" color="black">
				<?php
					$totval = $totval1 + $totval2 + $totval3 + $totval4;
					print "Rp. " . number_format($totval,0);
				?>
				</font></b></p>
			</td>
          </tr>
    </table>
</DIV>
<?php
}

?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
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


</body>
<?php

//*******************************************************************************************************

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['userid'] = $userid;
	$_SESSION['perusahaanid'] = $perushid;
//	$_SESSION['namaperusahaan'] = $namaperus;
	$_SESSION['tahun'] = $tahun;
	$_SESSION['batch'] = $batch;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;
	$_SESSION["noretur"] = 0;
	$_SESSION["mysort"] = "nama";



//*******************************************************************************************************

?>
</html>