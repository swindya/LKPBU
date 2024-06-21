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
<link rel="stylesheet" type="text/css" href="datepicker.css" /> 
<script type="text/javascript" src="datepicker.js"></script> 
<script type="text/javascript" src="timepicker.js"></script> 
<script src="../jqueryforms/jquery-latest.min.js" type="text/javascript"></script>
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

ini_set('max_execution_time', 50); //300 seconds = 5 minutes

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
<div id='cssmenu'>
<ul>
   <li><a href='menu1.php'><span>Home</span></a></li>
   <li><a href='uploadfile.php'><span>Impor Data</span></a></li>
   <li><a href='viewdata.php'><span>View Data</span></a></li>
   <li><a href='bayartxawal.php'><span>Pembayaran Transfer Awal</span></a></li>
   <li><a href='retur.php'><span>Retur</span></a></li>
   <li class='active'><a href='returbayar.php'><span>Pembayaran Retur</span></a></li>
   <li><a href='laporan.php'><span>Laporan</span></a></li>
   <li><a href='summary.php'><span>Ringkasan</span></a></li>
   <li class='last'><a href='mainmenu.php'><span>Menu Utama</span></a></li>
</ul>
</div>
<br>
<DIV align="right">
<p><font face="arial" color="blue">-&nbsp;</font>
	<i><font face="arial" color="blue"><?php print $namaku;?></font></i>
	&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
</p>
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

//-----------------------------------------
if (!isset($_POST["perusahaan"])) {
	$perush="none";
}
else
	$perush=$_POST["perusahaan"];
//-----------------------------------------
if (!isset($_POST["tahunbuku"])) {
	$tahunbuku=0;
}
else
	$tahunbuku=$_POST["tahunbuku"];
//-----------------------------------------
if (!isset($_POST["jmlbatch"])) {
	$jmlbatch="0";
}
else
	$jmlbatch=$_POST["jmlbatch"];
//-----------------------------------------
if (!isset($_POST["norekpub"])) {
	$norekpub="0";
}
else
	$norekpub=$_POST["norekpub"];
//-----------------------------------------
if (!isset($_POST["sppdpubfrom"])) {
	$sppdpubfrom="0";
}
else
	$sppdpubfrom=$_POST["sppdpubfrom"];
//-----------------------------------------
if (!isset($_POST["sppdpubfromno"])) {
	$sppdpubfromno="0";
}
else
	$sppdpubfromno=$_POST["sppdpubfromno"];
//-----------------------------------------
if (!isset($_POST["sppdpubto"])) {
	$sppdpubto=0;
}
else
	$sppdpubto=$_POST["sppdpubto"];
//-----------------------------------------
if (!isset($_POST["sppdpubtono"])) {
	$sppdpubtono="0";
}
else
	$sppdpubtono=$_POST["sppdpubtono"];
//-----------------------------------------
if (!isset($_POST["namarekpub"])) {
	$namarekpub="0";
}
else
	$namarekpub=$_POST["namarekpub"];
//-----------------------------------------
//-----------------------------------------
if (!isset($_POST["norekesa1"])) {
	$norekesa1="0";
}
else
	$norekesa1=$_POST["norekesa1"];
//-----------------------------------------
if (!isset($_POST["sppdesa1from"])) {
	$sppdesa1from="0";
}
else
	$sppdesa1from=$_POST["sppdesa1from"];
//-----------------------------------------
if (!isset($_POST["sppdesa1fromno"])) {
	$sppdesa1fromno="0";
}
else
	$sppdesa1fromno=$_POST["sppdesa1fromno"];
//-----------------------------------------
if (!isset($_POST["sppdesa1to"])) {
	$sppdesa1to=0;
}
else
	$sppdesa1to=$_POST["sppdesa1to"];
//-----------------------------------------
if (!isset($_POST["sppdesa1tono"])) {
	$sppdesa1tono="0";
}
else
	$sppdesa1tono=$_POST["sppdesa1tono"];
//-----------------------------------------
if (!isset($_POST["namarekesa1"])) {
	$namarekesa1="0";
}
else
	$namarekesa1=$_POST["namarekesa1"];
//-----------------------------------------
//-----------------------------------------
if (!isset($_POST["norekesa2"])) {
	$norekesa2="0";
}
else
	$norekesa2=$_POST["norekesa2"];
//-----------------------------------------
if (!isset($_POST["sppdesa2from"])) {
	$sppdesa2from="0";
}
else
	$sppdesa2from=$_POST["sppdesa2from"];
//-----------------------------------------
if (!isset($_POST["sppdesa2fromno"])) {
	$sppdesa2fromno="0";
}
else
	$sppdesa2fromno=$_POST["sppdesa2fromno"];
//-----------------------------------------
if (!isset($_POST["sppdesa2to"])) {
	$sppdesa2to=0;
}
else
	$sppdesa2to=$_POST["sppdesa2to"];
//-----------------------------------------
if (!isset($_POST["sppdesa2tono"])) {
	$sppdesa2tono="0";
}
else
	$sppdesa2tono=$_POST["sppdesa2tono"];
//-----------------------------------------
if (!isset($_POST["namarekesa2"])) {
	$namarekesa2="0";
}
else
	$namarekesa2=$_POST["namarekesa2"];
//-----------------------------------------
//-----------------------------------------

//===========================================

$bulan = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Des');

//echo $noret . "<br>";

//-------------------------------------------
// Check apakah data sudah ada (perushID, tahun, sppd, nominal, norek, nomer status retur)

$sql = "SELECT * FROM perusahaanbatch WHERE (perusahaanID=" . $perush . " AND tahun=" . $tahunbuku . ");";
$row_cnt = 0;
$ii = 0;
$result1 = mysqli_query($link, $sql);
if ($result1) {
 /* determine number of rows result set */
    $row_cnt = $result1->num_rows;
}
if ($row_cnt == 0) {
	$sql0 = "INSERT INTO perusahaanbatch(perusahaanID, tahun, createduser, createddate) VALUES(" . $perush . ", " . $tahunbuku . 
			", " . $userid . ", '" . date('Y-m-d') . "');";
//echo $sql0 . "<br>";
	$result0 = mysqli_query($link, $sql0);
}
$sql2 = "UPDATE perusahaanbatch SET jmlbatch=" . $jmlbatch . ", pubnorek='" . $norekpub . "', pubsppdfrom='" . $sppdpubfrom .
		"', pubsppdfromno=" . $sppdpubfromno . ", pubsppdto='" . $sppdpubto . "', pubsppdtono=" . $sppdpubtono . ", pubnamarek='" .
		$namarekpub . "', esa1norek='" .	$norekesa1 . "', esa1sppdfrom='" . $sppdesa1from . "', esa1sppdfromno=" . $sppdesa1fromno .
		", esa1sppdto='" . $sppdesa1to . "', esa1sppdtono=" . $sppdesa1tono . ", esa1namarek='" . $namarekesa1 . "', esa2norek='" . 
		$norekesa2 . "', esa2sppdfrom='" . $sppdesa1from . "', esa2sppdfromno=" . $sppdesa2fromno . ", esa2sppdto='" . $sppdesa2to . 
		"', esa2sppdtono=" . $sppdesa2tono . ", esa2namarek='" . $namarekesa2 .	"' WHERE (perusahaanID=" . $perush . " AND tahun=" . 
		$tahunbuku . ");";
//echo $sql2;
$result2 = mysqli_query($link, $sql2);
		


?>
<meta http-equiv="refresh" content="0; url=menu1.php" />


  <script src="jquery.min.js" type="text/javascript"></script>
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