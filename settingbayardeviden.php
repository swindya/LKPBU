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
<script src="../jqueryforms/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="checkbox2style.css"/>
<link rel="stylesheet" href="styleradio.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/tip-yellowsimple.css" />
<script type="text/javascript" src="../jqueryforms/jquery.min.js"></script>
<script type="text/javascript" src="src/jquery.poshytip.js"></script>
<style type="text/css">
	label {margin-right:20px;}
	.cb-styles table{float:left; width:200px; padding-left:25px; font-family:sans-serif;}
	table td, table th{padding:0px 10px 5px 0px; text-align:left;}
</style>
<style type="text/css">
	/*this is just to organize the demo checkboxes*/
	label {margin-right:20px;}
</style>
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
font-size: 12px
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
<script type="text/javascript">
$(function(){
	$('#unameblock').poshytip({
		className: 'tip-yellowsimple',
		showOn: 'focus',
		alignTo: 'target',
		alignX: 'inner-left',
		alignY: 'top',
		offsetX: 10
	});
	
	$('#pwblock').poshytip({
		className: 'tip-yellowsimple',
		showOn: 'focus',
		alignTo: 'target',
		alignX: 'inner-left',
		alignY: 'top',
		offsetX: 10
	});
});
</script>
<script>
function cancelku()
{
	window.open('','_self').close();
}
</script>
<script>
function submitcheck()
{
		var perushid = document.getElementsByName("perusahaan")[0].value;
		var tahunbuku = document.getElementsByName("tahunbuku")[0].value;
		var jmlbatch = document.getElementsByName("jmlbatch")[0].value;
		var norekpub = document.getElementsByName("norekpub")[0].value;
		var sppdpubfrom = document.getElementsByName("sppdpubfrom")[0].value;
		var sppdpubfromno = document.getElementsByName("sppdpubfromno")[0].value;
		var sppdpubto = document.getElementsByName("sppdpubto")[0].value;
		var sppdpubtono = document.getElementsByName("sppdpubtono")[0].value;

//alert(document.getElementsByName("bpid")[0].selectedIndex);
		if (perushid == null || perushid == "" || tahunbuku == null || tahunbuku == "" || jmlbatch == null || jmlbatch == "")
		{
			alert("Data ada yg kosong/invalid");
			return false;
		}
		else {
			document.setting.submit();
			return true;
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

$userid = $_SESSION['userid'];
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


<?php
if (!isset($_SESSION["perusahaanid"])) {
	$perushid=0;
}
else
	$perushid=$_SESSION["perusahaanid"];

if (!isset($_SESSION["tahun"])) {
	$tahun=$_POST["tahun"];
}
else
	$tahun=$_SESSION["tahun"];

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

# query the users table for name and surname 
$query = "SELECT * FROM perusahaan ORDER BY nama ASC;";
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
		$perushidar[$i] = $row['ID'];
		$namaperusar[$i] = $row['nama'];
	}
}
$counti = $i;

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
$tahunsaiki = date('Y');
$th2 = $tahunsaiki - 2000;
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
	<li><a href='summary.php'><span>Ringkasan</span></a></li>
	<li class='active'><a href='#'><span>Setting</span></a>
        <ul>
            <li><a href="settingbayardeviden.php" class="documents">Batch Pembayaran Deviden</a></li>
            <li><a href="settingbank.php" class="documents">Bank & Kode Kliring</a></li>
            <li><a href="settingjenisusaha.php" class="documents">JenisUsaha</a></li>
        </ul>
	</li>
	<li class='last'><a href='mainmenu.php'><span>Menu Utama</span></a></li>
</ul>
<DIV align="left">
	<br><br>

	<form target="_blank" name="setting" id="setting" action="updatesetting.php" method="post">
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="600px" border="0" cellpadding="0" cellspacing="0">
		<tr height="60px">
			<td colspan="3" style="padding-left: 10px; padding-top: 0px;text-align: left; font-size: 12; height: 60px;">
				<h2><font face="arial" color="black">Setting</font></h2>
			</td>
		</tr>
		<tr height="40px">
			<td colspan="3" style="padding-left: 10px; padding-top: 0px;text-align: left; font-size: 12; height: 40px;">
				<b><font face="arial" size="3" color="black">Batch Pembayaran Dividen</font></b>
			</td>
		</tr>
		<tr height="35px"> 
            <td style="padding-left: 25px; text-align: left; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">Perusahaan</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">
				:
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
				<div class="side-by-side clearfix">
					<select id="perusahaan" name="perusahaan" data-placeholder="Perusahaan" style="width:200px;" class="chosen-select-deselect" tabindex="11">
						<option value=""></option>
<?php
						for ($i=1;$i<=$counti;$i++) {
?>
						<option value="<?php print $perushidar[$i];?>">
						<?php print $namaperusar[$i];?>
						</option>
<?php
						}
?>
					</select> 
				</div>
			</td>
        </tr>
		<tr height="35px"> 
            <td style="padding-left: 25px; text-align: left; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">Tahun Buku</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">
				:
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
				<div class="side-by-side clearfix">
					<select id="tahunbuku" name="tahunbuku" data-placeholder="Tahun Buku" style="width:120px;" class="chosen-select-deselect" tabindex="11">
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
        </tr>
		<tr height="35px"> 
            <td style="padding-left: 25px; text-align: left; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">Jumlah Batch/tahun</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">
				:
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
				<div class="side-by-side clearfix">
					<select id="jmlbatch" name="jmlbatch" data-placeholder="Jml Batch" style="width:120px;" class="chosen-select-deselect" tabindex="11">
						<option value=""></option>
<?php
						$maxyear=date('Y');
						for ($i=1;$i<=5;$i++) {
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
        </tr>
		<tr height="35px"> 
            <td colspan="3" style="padding-left: 25px; text-align: left; font-size: 12; width: 400px">
				<font face="arial" size="2" color="black">Rekening <strong><i>PUBLIK</i></strong></font>
			</td>
        </tr>
		<tr height="26px"> 
            <td style="padding-left: 40px; text-align: left; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">- Nomor</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">:
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
				<div class="c">
				<input type="text" name="norekpub" id="norekpub" title="nomor rekening" class="u1" />
				</div>
			</td>
        </tr>
		<tr height="26px"> 
            <td style="padding-left: 40px; text-align: left; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">- Range SPPD</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">:
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
				<div class="c">
				<input type="text" name="sppdpubfrom" id="sppdpubfrom" size="4" title="SPPD dari" class="u1" value="TLKM <?php echo $th2;?>"/>
				<input type="text" name="sppdpubfromno" id="sppdfromno" size="5" title="Nomor SPPD dari" class="u1" />
				s/d &nbsp;
				<input type="text" name="sppdpubto" id="sppdpubto" size="4" title="SPPD sampai dengan" class="u1" value="TLKM <?php echo $th2;?>"/>
				<input type="text" name="sppdpubtono" id="sppdpubtono" size="5" title="Nomor SPPD sampai dengan" class="u1" />
				</div>
			</td>
        </tr>
		<tr height="26px"> 
            <td style="padding-left: 40px; text-align: left; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">- Nama Rekening</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">:
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
				<div class="c">
				<input type="text" name="namarekpub" id="namarekpub" title="nama rekening" size="42" class="u1" />
				</div>
			</td>
        </tr>
		<tr height="35px"> 
            <td colspan="3" style="padding-left: 25px; text-align: left; font-size: 12; width: 400px">
				<font face="arial" size="2" color="black">Rekening <strong><i>ESOP 1</i></strong></font>
			</td>
        </tr>
		<tr height="26px"> 
            <td style="padding-left: 40px; text-align: left; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">- Nomor</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">:
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
				<div class="c">
				<input type="text" name="norekesa1" id="norekesa1" title="Nomor Rekening ESOP 1" class="u1" />
				</div>
			</td>
        </tr>
		<tr height="26px"> 
            <td style="padding-left: 40px; text-align: left; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">- Range SPPD</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">:
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
				<div class="c">
				<input type="text" name="sppdesa1from" id="sppdesa1from" size="4" title="SPPD dari" class="u1" value="TLKM <?php echo $th2;?>"/>
				<input type="text" name="sppdesa1fromno" id="sppdesa1fromno" size="5" title="Nomor SPPD dari" class="u1" />
				s/d &nbsp;
				<input type="text" name="sppdesa1to" id="sppdesa1to" size="4" title="SPPD sampai dengan" class="u1" value="TLKM <?php echo $th2;?>"/>
				<input type="text" name="sppdesa1tono" id="sppdesa1tono" size="5" title="Nomor SPPD sampai dengan" class="u1" />
				</div>
			</td>
        </tr>
		<tr height="26px"> 
            <td style="padding-left: 40px; text-align: left; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">- Nama Rekening</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">:
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
				<div class="c">
				<input type="text" name="namarekesa1" id="namarekesa1" title="nama rekening" size="42" class="u1" />
				</div>
			</td>
        </tr>
		<tr height="35px"> 
            <td colspan="3" style="padding-left: 25px; text-align: left; font-size: 12; width: 400px">
				<font face="arial" size="2" color="black">Rekening <strong><i>ESOP 2</i></strong></font>
			</td>
        </tr>
		<tr height="26px"> 
            <td style="padding-left: 40px; text-align: left; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">- Nomor</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">:
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
				<div class="c">
				<input type="text" name="norekesa2" id="norekesa2" title="nomor rekening" class="u1" />
				</div>
			</td>
        </tr>
		<tr height="26px"> 
            <td style="padding-left: 40px; text-align: left; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">- Range SPPD</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">:
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
				<div class="c">
				<input type="text" name="sppdesa2from" id="sppdesa2from" size="4" title="SPPD dari" class="u1" value="TLKM <?php echo $th2;?>"/>
				<input type="text" name="sppdesa2fromno" id="sppdesa2fromno" size="5" title="Nomor SPPD dari" class="u1" />
				s/d &nbsp;
				<input type="text" name="sppdesa2to" id="sppdesa2to" size="4" title="SPPD sampai dengan" class="u1" value="TLKM <?php echo $th2;?>"/>
				<input type="text" name="sppdesa2tono" id="sppdesa2tono" size="5" title="Nomor SPPD sampai dengan" class="u1" />
				</div>
			</td>
        </tr>
		<tr height="26px"> 
            <td style="padding-left: 40px; text-align: left; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black">- Nama Rekening</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">:
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
				<div class="c">
				<input type="text" name="namarekesa2" id="namarekesa2" title="nama rekening" size="42" class="u1" />
				</div>
			</td>
        </tr>
		<tr height="10px"> 
            <td style="padding-left: 40px; text-align: left; font-size: 12; width: 120px">
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 10px">
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 400px">
			</td>
        </tr>
		<tr height="40px">
			<td colspan="3" style="padding-left: 27px; padding-top: 0px;text-align: left; font-size: 12; height: 60px;">
				<a href="" class="medium button orange" onclick="submitcheck(); return false;">Update</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="" class="medium button grey" onclick="cancelku(); return false;">Cancel</a>
			</td>
		</tr>
    </table>
</form>
</DIV>


  <script src="../jqueryforms/jquery.min.js" type="text/javascript"></script>
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