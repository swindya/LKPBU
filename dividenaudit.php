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
<link rel="stylesheet" href="chosen.css">
<!--script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script-->
<link type='text/css' href='./simplemodal/basic/css/basicb.css' rel='stylesheet' media='screen' />
<script src="script.js"></script>
<link rel="stylesheet" href="public/css/reset.css" type="text/css">
<link rel="stylesheet" href="./datepicker/public/css/default.css" type="text/css">
<link rel="stylesheet" href="public/css/style.css" type="text/css">

<script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>
<link rel="stylesheet" href="./datepicker/public/css/default.css" type="text/css">

<link type="text/css" rel="stylesheet" href="./datepicker/examples/libraries/syntaxhighlighter/public/css/shCoreDefault.css">

<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shCore.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushJScript.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushXML.js"></script>

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
    border: 1px transparent; 
	background-color: transparent;
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
<style> 
  .textboxmid { 
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 120px; 
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
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
} 
 </style>
<style> 
  .textboxlong { 
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 180px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 2px; 
    -webkit-border-radius: 2px; 
    box-shadow: 0px 0px 2px #d9d9d9; 
    -moz-box-shadow: 0px 0px 2px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 2px #d9d9d9; 
} 
 
.textboxlong:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 2px #7bc1f7; 
    -moz-box-shadow: 0px 0px 2px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 2px #7bc1f7; 
} 
 </style> 
 <style> 
  .textboxnarrow { 
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 80px; 
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
} 
 </style> 
 <style> 
  .textboxtgl { 
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 20px; 
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
  .textboxtahun { 
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 30px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 2px; 
    -moz-border-radius: 2px; 
    -webkit-border-radius: 2px; 
    box-shadow: 0px 0px 2px #d9d9d9; 
    -moz-box-shadow: 0px 0px 2px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 2px #d9d9d9; 
} 
 
.textboxtahun:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 2px #7bc1f7; 
    -moz-box-shadow: 0px 0px 2px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 2px #7bc1f7; 
} 
 </style> 
 <style>
p.calibri {
    font-family: "calibri", Times, serif;
}

p.sansserif {
    font-family: Arial, Helvetica, sans-serif;
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

<style>
table.fixed { table-layout:fixed; }
table.fixed td { overflow: hidden; }
</style>

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
//----------------------------------------------------
if (!isset($_SESSION["passwd"])) {
	$pwd=0;
}
else
	$pwd=$_SESSION["passwd"];
//----------------------------------------------------
if (!isset($_GET["id"])) {
	$perusid=0;
}
else
	$perusid=$_GET["id"];
//---------------------------------------------------------
if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];
//---------------------------------------------------------
$tahun=0;
if (!isset($_POST["tahun"])) {
	if (isset($_GET["tahun"]))
		$tahun=$_GET["tahun"];
}
else
	$tahun=$_POST["tahun"];
//---------------------------------------------------------

if ($userid==0)
{
?>
<script>
window.top.location.href = "index.php"; 
</script>
<?php
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

$levelidku=0;
#mysql_connect("localhost",$uname,$pwd);
if ($userid == 0)
{
# query the users table for name and surname 
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
	$row_cnt = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$userid = $row['ID'];
			$levelidku = $row['levelid'];
			$namaku = $row['nama'];
		}
	}
}
else
{
# query the users table for name and surname 
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
	$row_cnt = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$levelidku = $row['levelid'];
			$namaku = $row['nama'];
			$uname = $row['username'];
			$pwd = $row['passwd'];
		}
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

<?php


$bulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

//----------------------------------------------------------------------------------
# query the users table for name and surname 
$sql1 = "SELECT * FROM perusahaan WHERE ID=" . $perusid . ";";
$row_cnt = 0;
$i = 0;
$namaperku = "";
$res1 = mysqli_query($link, $sql1);
if ($res1) {
 /* determine number of rows result set */
    $row_cnt = $res1->num_rows;
}
if ($row_cnt>0) {
	while ($row = mysqli_fetch_array ($res1, MYSQLI_ASSOC)) {
		$namaperku = $row['nama'];
	}
}

# query the users table for name and surname 
if ($perusid==0)
	$query = "SELECT * FROM mylogdividen WHERE ID>0";
else
	$query = "SELECT * FROM mylogdividen WHERE perusahaanID=" . $perusid;

if ($tahun==0)
	$query = $query . " ORDER BY waktu DESC;";
else if ($tahun > 0)
	$query = $query . " AND YEAR(waktu)=" . $tahun . " ORDER BY waktu DESC;";

//echo $query;

$row_cnt = 0;
$i = 0;
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
		$idku[$i] = $row['ID'];
		$username[$i] = $row['username'];
		$waktu[$i] = $row['waktu'];
		$jenisaktivitas[$i] = $row['jenisaktivitas'];
		$detailaktivitas[$i] = $row['detailaktivitas'];
	}
}
$jmli = $i;

?>


<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="850px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td style="padding-left: 10px; text-align: left; font-size: 12">
		</td>
	</tr>
	<tr height="40px">
		<td style="padding-left: 20px; text-align: left; font-size: 12; width: 300px">
			<font face="arial" size="5" color="black"><a class="calibri"><b>AUDIT TRAIL</b></a></font>&nbsp;&nbsp;
			<font face="arial" size="5" color="blue"><b><i><a class="calibri"><?php echo strtoupper($namaperku);?></a></i></b></font>		
		</td>
	</tr>
	<tr height="30px">
		<td style="padding-left: 20px; text-align: left; font-size: 12; width=300px">
		</td>
	</tr>
</table>

<form method="post" name="myaudit" id="myaudit" action="">
<table style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="500px" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td style="vertical-align: top; padding-left: auto; padding-top: auto; text-align: left; font-size: 12; width=500px">
		<table align="left" valign="top" style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: 20px;" width="400px" border="1" cellspacing="0" cellpadding="0">	
			<tr height="30px"> 
				<td width="80px" style="padding-left: 0px; text-align: left;">
					<font face="arial" size="2" color="black">Tahun </font>
					<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
				</td>
				<td width="20px" style="padding-left: auto; text-align: left; font-size: 12;">:</td>
				<td width="180px" style="padding-left: auto; text-align: left; font-size: 12;">
					<div class="side-by-side clearfix">
						<select id="tahun" name="tahun" data-placeholder="Tahun" style="width:120px;" class="chosen-select-deselect">
							<option value=""></option>
<?php
							$maxyear=date('Y');
							$k = 0;
							for ($i=2005;$i<=date('Y');$i++) {
								$bb = date('Y') * 1;
								$aa = 2005;
								$ii = $bb - $k;
								$k++;
?>
								<option value="<?php print $ii;?>" <?php if($tahun==$ii) echo " selected";?>>
								<?php print $ii;?>
								</option>
<?php
							}
?>
						</select> 
					</div>
				</td>
				<td>
					<a class="button orange medium" onclick="document.myaudit.submit(); return false;">View</a>
				</td>
			</tr>
		</table>
	</td>
	</tr>
</table>
</form>

<DIV align="left">
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1020px" border="0" cellpadding="0" cellspacing="0">
		<tr height="20px">
			<td style="padding-left: 10px; text-align: left; font-size: 12; width=900px">
			</td>
		</tr>
	</table>
<?php
if ($jmli > 0)
{
?>
	<table class="fixed" align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="850px" border="1" cellpadding="0" cellspacing="0">
		<tr height="40px" bgcolor="#88eeff"> 
            <td style="padding-left: auto; text-align: center;" width="30px;">
				<b><i><font face="arial" size="2" color="black">NO</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center;" width="100px">
				<b><i><font face="arial" size="2" color="black">USER</b>
			</td>
            <td style="padding-left: auto; text-align: center;" width="120px">
				<b><i><font face="arial" size="2" color="black">JENIS AKTIVITAS</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center;" width="380px">
				<b><i><font face="arial" size="2" color="black">DATA</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center;" width="170px">
				<b><i><font face="arial" size="2" color="black">WAKTU</font></i></b>
			</td>
        </tr>
<?php

$bulan = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Des');

for ($i=1; $i <= $jmli; $i++)
{
?>
        <tr height="30" <?php if (($i%2)==0) echo 'bgcolor="#bbffd7"'; else echo 'bgcolor="#d7ffe7"';?>>
            <td valign="top" style="padding-right: auto; text-align: center">
				<font face="arial" size="3" color="black"><p class="calibri"><?php print $i;?></p></font>
			</td>
            <td valign="top" style="padding-left: 10px; text-align: center">
				<font face="arial" size="3" color="black"><p class="calibri">
					<?php echo $username[$i];?></p>
				</font>
			</td>
            <td valign="top" style="padding-left: 10px; text-align: center">
				<font face="arial" size="3" color="black"><p class="calibri">
					<?php echo $jenisaktivitas[$i];?></p>
				</font>
			</td>
            <td valign="top" style="padding-left: 10px; text-align: left">
				<div><font face="arial" size="3" color="black"><p class="calibri">
					<?php echo $detailaktivitas[$i];?></p>
				</font></div>
			</td>
            <td valign="top" style="padding-left: 10px; text-align: center">
				<font face="arial" size="3" color="black"><p class="calibri">
					<?php echo $waktu[$i];?></p>
				</font>
			</td>
        </tr>
<?php
	
}
?>
    </table>
<?php
}
else
{
?>
<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="1000px" border="0" cellspacing="0" cellpadding="0">
	<tr height="50px">
		<td style="padding-left: 0px; text-align: left; font-size: 12; width=300px">
			<font face="arial" size="4" color="red">
				TIDAK ADA DATA
			</font>
		</td>
	</tr>
</table>

<?php
}
?>	
	
</DIV>

<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="800px" border="0" cellpadding="2" cellspacing="0">
    <tr height="30px"> 
        <td style="padding-left: 30px; text-align: left; font-size: 12">
			<h1>
				</h1>
		</td>
    </tr>
</table>

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

<br><br>
<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="800px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td></td>
	</tr>
</table>

<script type='text/javascript' src='./simplemodal/basic/js/jquery.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/basic.js'></script>

<script type="text/javascript" src="./datepicker/examples/public/javascript/jquery-1.11.1.js"></script>
<script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="./datepicker/examples/public/javascript/core.js"></script>

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

</html>
<?php
//*******************************************************************************************************
	$_SESSION['userid'] = $userid;
	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;
	//$_SESSION["sppd"] = $sppd;

//*******************************************************************************************************

?>