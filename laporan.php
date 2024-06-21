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

<div id='cssmenu'>
<ul>
   <li><a href='menu1.php'><span>Home</span></a></li>
   <li><a href='uploadfile.php'><span>Impor Data</span></a></li>
   <li><a href='viewdata.php'><span>View Data</span></a></li>
   <li><a href='bayarawal.php'><span>Pembayaran Transfer Awal</span></a></li>
   <li><a href='retur.php'><span>Retur</span></a></li>
   <li><a href='returbayar.php'><span>Pembayaran Retur</span></a></li>
   <li class='active'><a href='laporan.php'><span>Laporan</span></a></li>
   <li><a href='summary.php'><span>Ringkasan</span></a></li>
   <li class='last'><a href='#'><span>Menu Utama</span></a></li>
</ul>
</div>

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
		$namaperus = $row['nama'];
	}
}

// Get oldest year & latest year
$sql00 = "SELECT MIN(tahun) AS minyear, MAX(tahun) AS maxyear FROM transferbni;";
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


$query = "SELECT * FROM telkomdatindo WHERE perusahaanID=" . $perushid . " AND tahun=" . $tahun . " ORDER BY sppd;";
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
		$nama[$i] = $row['nama1'];
		$sppd[$i] = $row['sppd'];
		$jenis[$i] = $row['jenisesop'];
	}
}
$counti = $i;

$query = "SELECT * FROM telkomdatindo WHERE perusahaanID=" . $perushid . " AND tahun=" . $tahun . " ORDER BY nama1;";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$j = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$j++;
		$namaj[$j] = $row['nama1'];
		$sppdj[$j] = $row['sppd'];
		$jenisj[$j] = $row['jenisesop'];
	}
}
$countj = $j;

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
	
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="630px" border="1" cellpadding="0" cellspacing="0">
		<tr height="60px">
			<td colspan="3" style="padding-left: 10px; padding-top: 0px;text-align: left; font-size: 12; height: 60px;">
				<h2><font face="arial" color="black">Laporan:</font></h2>
			</td>
		</tr>
		<tr height="35px"> 
			<form target="_blank" name="tahunbuku" action="tahunbuku.php" method="post">
            <td style="padding-left: 10px; text-align: left; font-size: 12; width: 220px">
				<input type="radio" name="radiog_lite" id="radio1" class="css-checkbox" />
				<label for="radio1" class="css-label radGroup2">Per Tahun Buku</label>
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 280px">
				<div class="side-by-side clearfix">
					<select id="tahunmu" name="tahunmu" data-placeholder="Tahun Buku" style="width:120px;" class="chosen-select-deselect" tabindex="11">
						<option value=""></option>
<?php
	$maxyear=2015;
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
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 60px">
				<a href="" class="small button orange" onclick="document.tahunbuku.submit(); return false;">View</a>
			</td>
			</form>
        </tr>
		<tr height="35px"> 
			<form target="_blank" name="pernik" action="pernik.php" method="post">
            <td style="padding-left: 10px; text-align: left; font-size: 12; width: 220px">
				<input type="radio" name="radiog_lite" id="radio2" class="css-checkbox" />
				<label for="radio2" class="css-label radGroup2">Per NIK</label>
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 280px">
				<div class="side-by-side clearfix">
					<select id="sppd" name="nik" data-placeholder="NIK" style="width:280px;" class="chosen-select-deselect" tabindex="11">
						<option value=""></option>
<?php
						for ($i=1;$i<=$counti;$i++) {
?>
						<option value="<?php print $sppd[$i];?>">
						<?php print $sppd[$i] . " - " . $nama[$i];?>
						</option>
<?php
						}
?>
					</select> 
				</div>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 60px">
				<a href="" class="small button orange" onclick="document.pernik.submit(); return false;">View</a>
			</td>
			</form>
        </tr>
        <tr height="35px">
			<form target="_blank" name="pernama" action="pernama.php" method="post">
            <td style="padding-left: 10px; text-align: left; font-size: 12; width: 220px">
				<input type="radio" name="radiog_lite" id="radio3" class="css-checkbox"/>
				<label for="radio3" class="css-label radGroup2">Per Nama</label>
			</td>
            <td style="padding-right: 10px; text-align: left; font-size: 12; width: 150px">
				<div class="side-by-side clearfix">
					<select id="nama" name="nama" data-placeholder="Nama" style="width:280px;" class="chosen-select-deselect" tabindex="11">
						<option value=""></option>
<?php
						for ($i=1;$i<=$counti;$i++) {
?>
						<option value="<?php print $sppd[$i];?>">
						<?php print $namaj[$i] . " - " . $sppdj[$i];?>
						</option>
<?php
						}
?>
					</select> 
				</div>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 60px">
				<a href="" class="small button orange" onclick="document.pernama.submit(); return false;">View</a>
			</td>
			</form>
          </tr>
		<tr height="35px">
			<form target="_blank" name="metodebayar" action="metodebayar.php" method="post">
            <td style="padding-left: 10px; text-align: left; font-size: 12; width: 220px">
				<input type="radio" name="radiog_lite" id="radio4" class="css-checkbox" />
				<label for="radio4" class="css-label radGroup2">Per Metode Pembayaran</label>
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 280px">
				<div class="side-by-side clearfix">
					<select id="sppd" name="sppd" data-placeholder="NIK" style="width:280px;" class="chosen-select-deselect" tabindex="11">
						<option value=""></option>
<?php
						for ($i=1;$i<=$counti;$i++) {
?>
						<option value="<?php print $sppd[$i];?>">
						<?php print $sppd[$i] . " - " . $nama[$i];?>
						</option>
<?php
						}
?>
					</select> 
				</div>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 60px">
				<a href="" class="small button orange" onclick="document.metodebayar.submit(); return false;">View</a>
			</td>
			</form>
        </tr>
		<tr height="35px"> 
			<form target="_blank" name="perretur" action="perretur.php" method="post">
            <td style="padding-left: 10px; text-align: left; font-size: 12; width: 220px">
				<input type="radio" name="radiog_lite" id="radio5" class="css-checkbox" />
				<label for="radio5" class="css-label radGroup2">Retur</label>
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 280px">
				<div class="side-by-side clearfix">
					<select id="sppd" name="sppd" data-placeholder="NIK" style="width:280px;" class="chosen-select-deselect" tabindex="11">
						<option value=""></option>
<?php
						for ($i=1;$i<=$counti;$i++) {
?>
						<option value="<?php print $sppd[$i];?>">
						<?php print $sppd[$i] . " - " . $nama[$i];?>
						</option>
<?php
						}
?>
					</select> 
				</div>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 60px">
				<a href="" class="small button orange" onclick="document.perretur.submit(); return false;">View</a>
			</td>
			</form>
        </tr>
		<tr height="35px"> 
            <td style="padding-left: 10px; text-align: left; font-size: 12; width: 220px">
				<input type="radio" name="radiog_lite" id="radio6" class="css-checkbox" />
				<label for="radio6" class="css-label radGroup2">Retur Sudah Ditransfer</label>
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 280px">
				<div class="side-by-side clearfix">
					<select id="sppd" name="sppd" data-placeholder="NIK" style="width:280px;" class="chosen-select-deselect" tabindex="11">
						<option value=""></option>
<?php
						for ($i=1;$i<=$counti;$i++) {
?>
						<option value="<?php print $sppd[$i];?>">
						<?php print $sppd[$i] . " - " . $nama[$i];?>
						</option>
<?php
						}
?>
					</select> 
				</div>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 60px">
				<a href="" class="small button orange" onclick="document.menu1form.submit(); return false;">View</a>
			</td>
        </tr>
		<tr height="35px"> 
            <td style="padding-left: 10px; text-align: left; font-size: 12; width: 220px">
				<input type="radio" name="radiog_lite" id="radio6" class="css-checkbox" />
				<label for="radio6" class="css-label radGroup2">Perubahan Metode Bayar</label>
			</td>
            <td style="padding-left: auto; text-align: left; font-size: 12; width: 280px">
				<div class="side-by-side clearfix">
					<select id="sppd" name="sppd" data-placeholder="NIK" style="width:280px;" class="chosen-select-deselect" tabindex="11">
						<option value=""></option>
<?php
						for ($i=1;$i<=$counti;$i++) {
?>
						<option value="<?php print $sppd[$i];?>">
						<?php print $sppd[$i] . " - " . $nama[$i];?>
						</option>
<?php
						}
?>
					</select> 
				</div>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12; width: 60px">
				<a href="" class="small button orange" onclick="document.menu1form.submit(); return false;">View</a>
			</td>
        </tr>

    </table>
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