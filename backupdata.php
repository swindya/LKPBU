<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>LKPBU</title>
<?php
session_start();
?>
<script src="mootools.js"></script>
<script src="Form.MultipleFileInput.js"></script>
<script src="Form.Upload.js"></script>
<script src="Request.File.js"></script>
<script src="iFrameFormRequest.js"></script>
<script src="jquery-1.11.2.min.js"></script>
<!--link href="stylemenuhoriz.css" rel="stylesheet" /-->
<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
<script src="../jqueryforms/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
<script type="text/javascript" src="jquery-1.3.2.js"></script>
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
.demo-frame header, .demo-frame h1, .demo-frame .demo-conversion {
	display: none;
}

.demo-wrapper {
	min-height: 500px;
}

.bsap {
	position: absolute;
	top: 0;
	right: 0;
}
</style>
<style>
.droppable {
	border: #ccc 1px solid;
	border-radius: 8px;
	background: #eee;
	color: #666;
	padding: 20px;
	margin: 10px;
	width: 500px;
	clear: both;
	text-align: center;
}

.droppable.hover {
	background: #ddd;
}

.uploadList {
	margin: 0;
	padding: 0;
	list-style: none;
}

.uploadItem {
	overflow: hidden;
	border-bottom: #BCBCBC 1px solid;
	margin: 0 20px;
	padding: 3px;
}

.uploadItem span {
	overflow: hidden;
	width: 430px;
	float: left;
	display: block;
}

a.addInputRow,
a.delInputRow,
.uploadItem a {
	display: inline-block;
	background: url(add.png) no-repeat;
	height: 16px;
	width: 16px;
	text-indent: -999px;
}

.uploadItem a {
	float: left;
	display: block;
	padding-left: 20px;
	background-image: url(./images/delete.png);
}

a.delInputRow {
	background-image: url(./images/delete.png);
}

.progress {
	margin: 5px 0;
	height: 15px;
	border-radius: 3px;
	background: #545A74;
}
</style>
<style>
.loader {
  margin: 100px auto;
  font-size: 25px;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  position: relative;
  text-indent: -9999em;
  -webkit-animation: load5 1.1s infinite ease;
  animation: load5 1.1s infinite ease;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
@-webkit-keyframes load5 {
  0%,
  100% {
    box-shadow: 0em -2.6em 0em 0em #ffffff, 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.5), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.7);
  }
  12.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.7), 1.8em -1.8em 0 0em #ffffff, 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.5);
  }
  25% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.5), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.7), 2.5em 0em 0 0em #ffffff, 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
  }
  37.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.5), 2.5em 0em 0 0em rgba(255, 255, 255, 0.7), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
  }
  50% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.5), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.7), 0em 2.5em 0 0em #ffffff, -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
  }
  62.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.5), 0em 2.5em 0 0em rgba(255, 255, 255, 0.7), -1.8em 1.8em 0 0em #ffffff, -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
  }
  75% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.5), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.7), -2.6em 0em 0 0em #ffffff, -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
  }
  87.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.5), -2.6em 0em 0 0em rgba(255, 255, 255, 0.7), -1.8em -1.8em 0 0em #ffffff;
  }
}
@keyframes load5 {
  0%,
  100% {
    box-shadow: 0em -2.6em 0em 0em #ffffff, 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.5), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.7);
  }
  12.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.7), 1.8em -1.8em 0 0em #ffffff, 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.5);
  }
  25% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.5), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.7), 2.5em 0em 0 0em #ffffff, 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
  }
  37.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.5), 2.5em 0em 0 0em rgba(255, 255, 255, 0.7), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
  }
  50% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.5), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.7), 0em 2.5em 0 0em #ffffff, -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
  }
  62.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.5), 0em 2.5em 0 0em rgba(255, 255, 255, 0.7), -1.8em 1.8em 0 0em #ffffff, -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
  }
  75% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.5), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.7), -2.6em 0em 0 0em #ffffff, -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);
  }
  87.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.5), -2.6em 0em 0 0em rgba(255, 255, 255, 0.7), -1.8em -1.8em 0 0em #ffffff;
  }
}
</style>
<style>
.content { position:absolute;top:0;}
.overlay {
  background: rgba(0, 0, 0, 0.1);
  height: 0vh;
}

.spinner {
  font-size: 48px;
  position: relative;
  display: inline-block;
  width: 1em;
  height: 1em;
}
.spinner.center {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
}
.spinner .spinner-blade {
  position: absolute;
  left: 0.4629em;
  bottom: 0;
  width: 0.074em;
  height: 0.2777em;
  border-radius: 0.0555em;
  background-color: transparent;
  -webkit-transform-origin: center -0.2222em;
      -ms-transform-origin: center -0.2222em;
          transform-origin: center -0.2222em;
  -webkit-animation: spinner-fade 1s infinite linear;
          animation: spinner-fade 1s infinite linear;
}
.spinner .spinner-blade:nth-child(1) {
  -webkit-animation-delay: 0s;
          animation-delay: 0s;
  -webkit-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
          transform: rotate(0deg);
}
.spinner .spinner-blade:nth-child(2) {
  -webkit-animation-delay: 0.083s;
          animation-delay: 0.083s;
  -webkit-transform: rotate(30deg);
      -ms-transform: rotate(30deg);
          transform: rotate(30deg);
}
.spinner .spinner-blade:nth-child(3) {
  -webkit-animation-delay: 0.166s;
          animation-delay: 0.166s;
  -webkit-transform: rotate(60deg);
      -ms-transform: rotate(60deg);
          transform: rotate(60deg);
}
.spinner .spinner-blade:nth-child(4) {
  -webkit-animation-delay: 0.249s;
          animation-delay: 0.249s;
  -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
          transform: rotate(90deg);
}
.spinner .spinner-blade:nth-child(5) {
  -webkit-animation-delay: 0.332s;
          animation-delay: 0.332s;
  -webkit-transform: rotate(120deg);
      -ms-transform: rotate(120deg);
          transform: rotate(120deg);
}
.spinner .spinner-blade:nth-child(6) {
  -webkit-animation-delay: 0.415s;
          animation-delay: 0.415s;
  -webkit-transform: rotate(150deg);
      -ms-transform: rotate(150deg);
          transform: rotate(150deg);
}
.spinner .spinner-blade:nth-child(7) {
  -webkit-animation-delay: 0.498s;
          animation-delay: 0.498s;
  -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
          transform: rotate(180deg);
}
.spinner .spinner-blade:nth-child(8) {
  -webkit-animation-delay: 0.581s;
          animation-delay: 0.581s;
  -webkit-transform: rotate(210deg);
      -ms-transform: rotate(210deg);
          transform: rotate(210deg);
}
.spinner .spinner-blade:nth-child(9) {
  -webkit-animation-delay: 0.664s;
          animation-delay: 0.664s;
  -webkit-transform: rotate(240deg);
      -ms-transform: rotate(240deg);
          transform: rotate(240deg);
}
.spinner .spinner-blade:nth-child(10) {
  -webkit-animation-delay: 0.747s;
          animation-delay: 0.747s;
  -webkit-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
          transform: rotate(270deg);
}
.spinner .spinner-blade:nth-child(11) {
  -webkit-animation-delay: 0.83s;
          animation-delay: 0.83s;
  -webkit-transform: rotate(300deg);
      -ms-transform: rotate(300deg);
          transform: rotate(300deg);
}
.spinner .spinner-blade:nth-child(12) {
  -webkit-animation-delay: 0.913s;
          animation-delay: 0.913s;
  -webkit-transform: rotate(330deg);
      -ms-transform: rotate(330deg);
          transform: rotate(330deg);
}

@-webkit-keyframes spinner-fade {
  0% {
    background-color: #69717d;
  }
  100% {
    background-color: transparent;
  }
}

@keyframes spinner-fade {
  0% {
    background-color: #69717d;
  }
  100% {
    background-color: transparent;
  }
}
</style>
<script>
function LoadMe()
{
	document.getElementById('processbar').style.display='none';
}
</script>

<script type="text/javascript">

$(document).ready(function() {
	$('#loader').hide();
	//$('#show_heading').hide();
	
	$('#tahun').change(function(){
		$('#batchid').fadeOut();
		$('#loader').show();
		$.post("get_chid_categories.php", {
			parent_id: $('#tahun').val(),
		}, function(response){
			
			setTimeout("finishAjax('batchid', '"+escape(response)+"')", 400);
		});
		return false;
	});
});

function finishAjax(id, response){
  $('#loader').hide();
  //$('#show_heading').show();
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
} 

function alert_id()
{
	if($('#batch').val() == '')
	alert('Please select a sub category.');
	else
	alert($('#batch').val());
	return false;
}

</script>
<script>
function goaja()
{
	document.getElementById('processbar').style.display='inline';
	document.forms["backup"].submit();
	//document.getElementById('processbar').style.display='none';
}
</script>
<Script language=JavaScript>

function openDialog(){

if (confirm('This will allow you to save this page, but NOT any of the images. To save the complete page you must click File | Save As. Continue to save without images?'))
{
htmlBtn.disabled = true;
document.execCommand("SaveAs",true,"C:\\My Documents\\Saved Content.html");
htmlBtn.disabled = false; 
}
}

</Script>
</head>
<body onload="LoadMe()">
<?php

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

include "koneksi.php";

if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
//--------------------------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//--------------------------------------------------------------------
if (!isset($_GET["userid"])) {
	if (!isset($_POST["userid"])) 
		$userid=0;
	else
		$userid=$_POST["userid"];
}
else
	$userid=$_GET["userid"];
//--------------------------------------------------------------------
if (!isset($_GET["statusdata"])) {
	if (!isset($_POST["statusdata"])) 
		$statusdata=0;
	else
		$statusdata=$_POST["statusdata"];
}
else
	$statusdata=$_GET["statusdata"];
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




if ($statusdata==2)
{
	$username = "myroot"; 
	$password = "adminku"; 
	$hostname = "localhost"; 
	$dbname   = "lkpbu";
 
// if mysqldump is on the system path you do not need to specify the full path
// simply use "mysqldump --add-drop-table ..." in this case
	$dumpfname = $dbname . "_" . date("Y-m-d_H-i-s")."ku.sql";
	$command = "C:\\wamp\\bin\\mysql5.6.17\\bin\\mysqldump --user=$username ";
	if ($password) 
        $command.= "--password=". $password ." "; 
	$command.= $dbname;
	$command.= " > " . $dumpfname;
	echo $command;
	exec($command);

	$dump = ob_get_contents(); 
	ob_end_clean();
 
// send dump file to the output
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename='.basename($dbname . "_" . 
		date("Y-m-d_H-i-s").".sql"));
	flush();
	echo $dump;
	exit();


}

?>


	<br><br>
	<DIV>
	<table clear="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="650px" border="0" cellspacing="0" cellpadding="0">
		<thead>
			<tr height="25px">
				<td></td>
			</tr>
			<tr height="25px">
				<td style="padding-left: 10px; text-align: left; width=50%">
					    <font face="arial" color="black" size="5"><b>BACKUP DATABASE</b></font>
				</td>
			</tr>
			<tr height="10px">
				<td style="padding-left: 10px; text-align: left; width=50%">
				</td>
			</tr>
			<tr height="25px">
				<td style="padding-left: 10px; text-align: left; width=50%">
					    <font face="arial" color="black" size="2">
						</font>
				</td>
			</tr>
			<tr height="20px">
				<td style="padding-left: 10px; text-align: left; width=50%">
				</td>
			</tr>
		</thead>
	</table>
	</DIV>

<?php
//*************************************************************************************************************
//************************************************* PT. TELKOM ************************************************
//*************************************************************************************************************
?>	
<form name="backup" id="backup" action="BACKUP_DATABASE.php" method="post">
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="550px" border="0" cellspacing="0" cellpadding="0">
		<tr height="20px">
			<td style="padding-left: auto; text-align: left; font-size: 12; height: 20px;">
			</td>
		</tr>
		<tr height="25px">
			<td style="padding-left: auto; text-align: left; font-size: 11; width: 440px">
				<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 0px;" width="440px" border="0" cellspacing="0" cellpadding="0">
						<tr height="30px">
							<td colspan="3" style="padding-left: 10px; text-align: left; width: 100px">
								<font face="arial" size="3" color="black"><b></b></font>
							</td>
						</tr>
						<tr height="30px">
							<td style="padding-left: auto; text-align: left; width: 40px">
							</td>
							<td style="padding-left: auto; text-align: left; width: 60px">
								<font face="arial" size="2" color="black"></font>
							</td>
							<td style="padding-left: 10px; text-align: left; width: 60px">
								<font face="arial" size="2" color="black"></font>
							</td>
						</tr>
						<tr height="30px">
							<td style="padding-left: auto; text-align: left; width: 40px">
							</td>
							<td style="padding-left: auto; text-align: left; font-size: 12;">
								<font face="arial" size="2" color="black"></font>
							</td>
							<td style="padding-left: 10px; text-align: left; font-size: 12;">
								<font face="arial" size="2" color="black"></font>
							</td>
						</tr>
						<tr height="100px">
							<td colspan="3" style="padding-left: 10px; text-align: left; width: 300px">
								<div>
									<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
									<input type="hidden" id="statusdata" name="statusdata" value="1">
									<!--input type="submit" name="upload" value="Upload" onclick="cektahunbatchtelkom(); return false;"-->
									<!--input type=button id=htmlBtn value='Save as an HTML document' onClick="openDialog()"-->
								</div>			
							</td>
						</tr>
						<tr height="100px">
							<td colspan="3" style="padding-left: 10px; text-align: left; width: 300px">
								<div>
									<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
									<input type="hidden" id="statusdata" name="statusdata" value="1">
									<!--input type="submit" name="upload" value="Upload" onclick="cektahunbatchtelkom(); return false;"-->
									<a class="button orange large" onclick="goaja(); return false;">GO</a>
								</div>			
							</td>
						</tr>
				</table>
			</td>
		</tr>
		<tr height="25px">
			<td style="padding-left: auto; text-align: left; font-size: 11; width: 360px">
			</td>
		</tr>

	</table> 
</form>	
<div class="overlay" id="processbar">
  <div class="spinner center">
    <div class="spinner-blade"></div>
    <div class="spinner-blade"></div>
    <div class="spinner-blade"></div>
    <div class="spinner-blade"></div>
    <div class="spinner-blade"></div>
    <div class="spinner-blade"></div>
    <div class="spinner-blade"></div>
    <div class="spinner-blade"></div>
    <div class="spinner-blade"></div>
    <div class="spinner-blade"></div>
    <div class="spinner-blade"></div>
    <div class="spinner-blade"></div>
  </div>
</div>

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
<?php

//*******************************************************************************************************

?>

<?php
    function copy_directory( $source, $destination ) {
        if ( is_dir( $source ) ) {
        @mkdir( $destination );
        $directory = dir( $source );
        while ( FALSE !== ( $readdirectory = $directory->read() ) ) {
            if ( $readdirectory == '.' || $readdirectory == '..' ) {
                continue;
            }
            $PathDir = $source . '/' . $readdirectory; 
            if ( is_dir( $PathDir ) ) {
                copy_directory( $PathDir, $destination . '/' . $readdirectory );
                continue;
            }
            copy( $PathDir, $destination . '/' . $readdirectory );
        }

        $directory->close();
        }else {
        copy( $source, $destination );
        }
    }
	
//***********************************************************************************************
/**
 * Copy a file, or recursively copy a folder and its contents
 * @author      Aidan Lister <aidan@php.net>
 * @version     1.0.1
 * @link        http://aidanlister.com/2004/04/recursively-copying-directories-in-php/
 * @param       string   $source    Source path
 * @param       string   $dest      Destination path
 * @param       string   $permissions New folder creation permissions
 * @return      bool     Returns true on success, false on failure
 */
function xcopy($source, $dest, $permissions = 0755)
{
    // Check for symlinks
    if (is_link($source)) {
        return symlink(readlink($source), $dest);
    }

    // Simple copy for a file
    if (is_file($source)) {
        return copy($source, $dest);
    }

    // Make destination directory
    if (!is_dir($dest)) {
        mkdir($dest, $permissions);
    }

    // Loop through the folder
    $dir = dir($source);
    while (false !== $entry = $dir->read()) {
        // Skip pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Deep copy directories
        xcopy("$source/$entry", "$dest/$entry", $permissions);
    }
}
	
?>

</html>