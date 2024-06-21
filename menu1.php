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
//-------------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//-------------------------------------------------------
if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];
//-------------------------------------------------------
if (!isset($_GET["id"])) {
	//$perusidku=$_SESSION["id"];
	$perusidku=0;
}
else
	$perusidku=$_GET["id"];

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
if ($userid==0)
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
window.top.location.href = "index.php"; 
</script>
<?php
die;
	}
}
?>

<br>
<DIV align="right">
	<table align="right" style="text-align: right; margin-left: auto; margin-right: auto; margin-top: 0px;" width="120px" border="0" cellpadding="0" cellspacing="0">
        <tr style="height: 20px"> 
            <td style="padding-left: 0px; text-align: right; font-size: 12; width: 20px">
				<span title="User Login"><a href="" target=""><img src="./img/user3a.png" height="18" width="18" align="right"></a></span>
			</td>
            <td style="vertical-align: middle; padding-left: 0px; text-align: left; width: 100px">
				<p><font face="arial" color="blue">&nbsp;</font>
				<i><font size="2" face="arial" color="blue">
				<?php print $namaku;?></font></i>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
	$tahun=0;
}
else
	$tahun=$_SESSION["tahun"];

# query the users table for name and surname 
$query = "SELECT * FROM perusahaan WHERE ID=" . $perushid . ";";
$row_cnt = 0;
$namaperush = "none";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$namaperusku = $row['nama'];
	}
}

# query the users table for name and surname 
$query = "SELECT * FROM perusahaan ORDER BY nama;";
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
		$perusid[$i] = $row['ID'];
		$namaperus[$i] = $row['nama'];
	}
}
$counti = $i;

$tahunoldest = date('Y');
$tahunnewest = $tahunoldest;
// Cari tahun paling tua
//
$query = "SELECT * FROM telkomdatindo ORDER BY tahun DESC;";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$tahunoldest = $row['tahun'];
	}
}
// Cari tahun paling muda (latest/newest)
//
$query = "SELECT min(tahun) AS mintahun FROM telkomdatindo ORDER BY tahun ASC;";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$tahunnewest = $row['mintahun'];
	}
}
$tahunnewest = date('Y')*1;
?>

<form action="summary.php" method="post" name="viewdata" id="viewdata">
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="800px" border="0" cellpadding="2" cellspacing="0">
          <tr height="50px"> 
            <td colspan="4" style="padding-left: auto; text-align: left; font-size: 12; height: 60px"><h1>Pilih Perusahaan & Tahun</h1></td>
          </tr>
          <tr height="40px"> 
            <td colspan="4" style="padding-left: auto; text-align: left; font-size: 12; height: 20px"></td>
          </tr>
          <tr height="35px"> 
            <td width="150px" style="padding-left: auto; text-align: left;">
				<font face="arial" size="2" color="black">Perusahaan</font>
			</td>
			<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:
            <td colspan="2" width="600px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<select id="perusahaan" name="perusahaan" data-placeholder="Nama Perusahaan" style="width:190px;" class="chosen-select-deselect" tabindex="11">
						<option value=""></option>
<?php
						for ($i=1;$i<=$counti;$i++) {
?>
						<option value="<?php print $perusid[$i];?>"
						<?php
							if ($perusidku==$perusid[$i]) {
								print "&nbsp;" . " selected";
							}
							else {
								print " ";
							}
						?> >
						<?php print $namaperus[$i];?></option>
<?php
						}
?>
					</select> 
				</div>
			</td>
		  </tr>

          <tr height="35px"> 
            <td style="padding-left: auto; text-align: left;">
				<font face="arial" size="2" color="black">Tahun Buku Dividen</font>
			</td>
			<td style="padding-left: auto; text-align: left; font-size: 12;">:
            <td width="150px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<select name="tahun" data-placeholder="Tahun buku dividen" style="width:90px;" class="chosen-select-deselect" tabindex="12">
						<option value=""></option>
<?php
						for ($i=$tahunoldest;$i<=$tahunnewest;$i++) {
?>
						<option value="<?php print $i;?>"
						<?php
							if ($tahun==$i) {
								print "&nbsp;" . " selected";
							}
							else {
								print " ";
							}
						?> >
						<?php print $i;?></option>
<?php
						}
?>
					</select> 
				</div>
			</td>
			<td width="450px" style="padding-left: auto; text-align: left; font-size: 12;"></td>
		  </tr>
          <tr height="35px"> 
            <td style="padding-left: auto; text-align: left;">
				<font face="arial" size="2" color="black">Batch</font>
			</td>
			<td style="padding-left: auto; text-align: left; font-size: 12;">:
            <td style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
					<select name="batch" id="batch" data-placeholder="Tahun buku dividen" style="width:90px;" class="chosen-select-deselect">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select> 
				</div>
			</td>
			<td style="padding-left: auto; text-align: left; font-size: 12;"></td>
		  </tr>
          <tr> 
            <td colspan="4" style="padding-left: auto; text-align: left; font-size: 12; height: 20px">
                <!--input name="remember" type="checkbox" id="remember" value="1">
                Remember Me</div></td-->
          </tr>
         <tr height="40px"> 
            <td colspan="4" style="padding-left: auto; text-align: left; font-size: 12; height: 20px">
				<input type="hidden" id="userid" name="userid" value="<?php print $userid;?>">
				<a href="" class="medium button orange" onclick="document.viewdata.submit(); return false;">Proceed</a> 
          </tr>
    </table>
</form>

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

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['userid'] = $userid;
	$_SESSION['perusahaanid'] = $perushid;
	$_SESSION['namaperusahaan'] = $namaperus;
	$_SESSION['tahun'] = $tahun;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;
	$_SESSION["noretur"] = 0;
	$_SESSION["nosusulan"] = 0;

//*******************************************************************************************************

?>
</html>