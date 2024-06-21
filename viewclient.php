<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Daftar Data Client</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<script src="icheck.js"></script>

<script src="script.js"></script>

<script src="Form.Upload.js"></script>
<link rel="stylesheet" href="spinnerclock.css" type="text/css">

<style>
	@import url(http://fonts.googleapis.com/css?family=Kaushan+Script);
	body{
		background-color: transparent;
	}
	#popup {
		visibility: hidden;
		opacity: 0;
		position: fixed;
		margin-top: -200px;
		background: black;
		color:black;
	}
	#popup:target {
		visibility:visible;
		opacity: 1;
		background-color: rgba(0,0,0,0.2);
		position: fixed;
		padding-top: 3%;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		z-index: 99;
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		transition:all 1s;
	}
	#tombol{
		top:50%;
		left:50%;
	}
	.popwrapper{
		background: #111144;
		position: relative;
		margin:auto;
		width: 580px;
		height: auto;
		padding: 10px;
		border-radius: 3px;
	}
	#header{
		height: 100px;
		padding-top:10px;
	}
	.navigasi{
		font-size: 24px;
		font-weight: 400;
	}
	#navigasi a:hover{
		color: white;
		border-bottom: 2px solid black;
	}
	.content{
		padding-top:40px;
		color: white;
	}
	.navbar-brand{
		font-size: 36px;
	}
</style>
<style>
	@import url(http://fonts.googleapis.com/css?family=Kaushan+Script);
	body{
		background-color: transparent;
	}
	#popup1 {
		visibility: hidden;
		opacity: 0;
		position: fixed;
		margin-top: -200px;
		background: black;
		color:black;
	}
	#popup1:target {
		visibility:visible;
		opacity: 1;
		background-color: rgba(0,0,0,0.2);
		position: fixed;
		padding-top: 3%;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		z-index: 99;
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		transition:all 1s;
	}
	#tombol{
		top:50%;
		left:50%;
	}
	.popwrapper{
		background: #111144;
		position: relative;
		margin:auto;
		width: 580px;
		height: auto;
		padding: 10px;
		border-radius: 3px;
	}
	#header{
		height: 100px;
		padding-top:50px;
	}
	.navigasi{
		font-size: 24px;
		font-weight: 400;
	}
	#navigasi a:hover{
		color: white;
		border-bottom: 2px solid black;
	}
	.content{
		padding-top:20px;
		color: white;
	}
	.navbar-brand{
		font-size: 36px;
	}
</style>
<style type="text/css">
	/*this is just to organize the demo checkboxes*/
	label {margin-right:20px;}
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
h1 {
    font-size: 200%;
}

h2 {
    font-size: 85%;
}

h3 {
    font-size: 90%;
}
</style>
<style> 
  .textbox { 
    border: 1px solid #c4c4c4; 
    height: 14px; 
    width: 215px; 
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
    width: 50px; 
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
    width: 140px; 
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
    width: 300px; 
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
    border: 1px solid #c4c4c4; 
    height: 14px; 
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
 
.textboxtgl:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 2px #7bc1f7; 
    -moz-box-shadow: 0px 0px 2px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 2px #7bc1f7; 
} 
 </style>
<style>
select#bank {
    max-width: 350px;
    min-width: 220px;
    width: 220px !important;
}
</style>
<style>
select#jenis {
    max-width: 250px;
    min-width: 120px;
    width: 150px !important;
}
</style>

<style>
.select_style 
{
	background: #FFF;
	overflow: hidden;
	display: inline-block;
	color: #525252;
	font-weight: 300;
	-webkit-border-radius: 5px 4px 4px 5px/5px 5px 4px 4px;
	-moz-border-radius: 5px 4px 4px 5px/5px 5px 4px 4px;
	border-radius: 5px 4px 4px 5px/5px 5px 4px 4px;
	-webkit-box-shadow: 0 0 5px rgba(123, 123, 123, 0.2);
	-moz-box-shadow: 0 0 5px rgba(123,123,123,.2);
	box-shadow: 0 0 5px rgba(123, 123, 123, 0.2);
	border: solid 1px #DADADA;
	font-family: "helvetica neue",arial;
	position: relative;
	cursor: pointer;
	padding-right:2px;

}
.select_style span
{
	position: absolute;
	right: 10px;
	width: 8px;
	height: 8px;
	background: url ('./images/arrowdown1.png') no-repeat;
	top: 50%;
	margin-top: -4px;
}
.select_style select
{

	appearance:none;
	width:120%;
	background:none;
	background:transparent;
	border:none;
	outline:none;
	cursor:pointer;
	padding:4px 6px;
background: url('/images/arrowdown1.png') no-repeat 100% 4px #fff; /* add your own arrow image */
background: url('/images/arrowdown1.png') no-repeat 100% 0px #fff; /* fallback bg image*/
background: url('/images/arrowdown1.png') no-repeat 100% 0px, -webkit-linear-gradient(top, #fff, #9c9c9c);
background: url('/images/arrowdown1.png') no-repeat 100% 0px, -moz-linear-gradient(top, #fff, #9c9c9c);
background: url('/images/arrowdown1.png') no-repeat 100% 0px, -ms-linear-gradient(top, #fff, #9c9c9c);
background: url('/images/arrowdown1.png') no-repeat 100% 0px, -o-linear-gradient(top, #fff, #9c9c9c);
background: url('/images/arrowdown1.png') no-repeat 100% 0px, linear-gradient(top, #fff, #9c9c9c);
-webkit-appearance: menulist-button;
}
</style>
<script>
function formatnumber(nField) {
  //el.value = el.value.replace(/[^\d]/g,'').replace(/(\d\d?)$/,'.$1');
		if (/^0/.test(nField.value))
			{
			 nField.value = nField.value.substring(0,1);
			}
		if (Number(nField.value.replace(/,/g,"")))
			{
			 var tmp = nField.value.replace(/,/g,"");
	 		 tmp = tmp.toString().split('').reverse().join('').replace(/(\d{3})/g,'$1,').split('').reverse().join('').replace(/^,/,'');
			 if (/\./g.test(tmp))
				{
			 	 tmp = tmp.split(".");
				 tmp[1] = tmp[1].replace(/\,/g,"").replace(/ /,"");
				 nField.value = tmp[0]+"."+tmp[1]
				}
			 else 	{
				 nField.value = tmp.replace(/ /,"");
				} 
			}
		else	{
			 nField.value = nField.value.replace(/[^\d\,\.]/g,"").replace(/ /,"");
			}
}
</script>
<script>
function formatnumberku(nField) {
  //el.value = el.value.replace(/[^\d]/g,'').replace(/(\d\d?)$/,'.$1');
		if (/^0/.test(nField))
			{
			 nField = nField.substring(0,1);
			}
		if (Number(nField.replace(/,/g,"")))
			{
			 var tmp = nField.replace(/,/g,"");
	 		 tmp = tmp.toString().split('').reverse().join('').replace(/(\d{3})/g,'$1,').split('').reverse().join('').replace(/^,/,'');
			 if (/\./g.test(tmp))
				{
			 	 tmp = tmp.split(".");
				 tmp[1] = tmp[1].replace(/\,/g,"").replace(/ /,"");
				 nField = tmp[0]+"."+tmp[1]
				}
			 else 	{
				 nField = tmp.replace(/ /,"");
				} 
			}
		else	{
			 nField = nField.replace(/[^\d\,\.]/g,"").replace(/ /,"");
			}
}
</script>	

<script>
function hapusdata(id, userid) {
	
	var r = confirm("Apakah anda yakin akan hapus data ?");
	if (r==true)
	{	
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} 
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				//document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
				var mystr = xmlhttp.responseText;
				if (mystr.indexOf('Data sudah dihapus')>=0) {
					alert("Data sudah dihapus");
					window.location.reload();
				}
			}
		}
		var linkget = "delclient.php?id=" + id + "&userid=" + userid;
		xmlhttp.open("GET", linkget, true);
		xmlhttp.send();

	}
	
}
</script>
<script>
function cekfile() 
{
	//var element = document.getElementById("tahun");
    //var tahun = element.options[element.selectedIndex].value;
	//var noreklain = document.getElementsByName("noreklain")[0].value;
	var namafilemu = document.getElementsByName("datahariandepo")[0].value

	if (namafilemu == null || namafilemu == "")
	{
		alert("File masih kosong/invalid. Silahkan Pilih File terlebih dulu.");
		return false;
	}
	else {
		document.getElementById('processbar').style.display='inline';
		document.myupload.submit();
		return true;
	}
}
</script>
<script>
 	function viewdata() {
		var jenisrep = document.getElementsByName("jenisreport")[0].value;
		var client = document.getElementsByName("namaclient")[0].value;
		var tglp1 = document.getElementsByName("tglpenempatan1")[0].value;
		var tglp2 = document.getElementsByName("tglpenempatan2")[0].value;
		var portofolio = document.getElementsByName("portofolio")[0].value;
		var oblisah = document.getElementsByName("oblisah")[0].value;
		if (jenisrep == null || jenisrep == "" || client == null || client == "" || tglp1 == null || tglp1 == "" || 
			tglp2 == null || tglp2 == "" || portofolio == null || portofolio == "" || oblisah == null || oblisah == "")
		{
			alert("Data masih kosong/invalid. Silahkan diisi/lengkapi terlebih dulu.");
			return false;
		}
		else {
			document.getElementsByName("sview")[0].value = 1;
			document.forms["myview"].submit();
			return true;
		}
		//alert(document.forms.forme[bb].name);
		//alert(document.forms.[0]);
		//document.forms[formname].submit();
		//window.open("returbayar.php?id=" + aa + "&noretur=" + bb, "_blank");
		//document.forms.submit();
		//document.getElementsByName("statusview")[0].value = 1;
		//window.open("#popup");
//alert(document.getElementsByName("statusview")[0].value);

	}
</script>
<script>
 	function clearcari() {

	document.getElementsByName("cari")[0].value="";
	}
</script>

<script>
function cekdatabaru() {
	
		var fullname = document.getElementsByName("fullname")[0].value;
		var shortname = document.getElementsByName("shortname")[0].value;
		var tipe = document.getElementsByName("tipe")[0].value;
		var sandigolongan = document.getElementsByName("sandigolongan")[0].value;
		var sandipemilik = document.getElementsByName("sandipemilik")[0].value;

		if (fullname.length < 3 || fullname == null || fullname == "" || tipe == null || tipe.length < 2 || sandigolongan < 0 || sandigolongan > 999)
		{
			alert("Data masih kosong/invalid. Silahkan diisi/lengkapi terlebih dulu.");
			return false
		}
		document.getElementById('css-spinner').style.display='block';
		document.forms["formbaru"].submit();

}
</script>
<script>
function cekdataedit() {

		document.getElementById('css-spinner').style.display='block';
		document.forms["updatec"].submit();

}
</script>
<script>
 	function filleditdata(id,fullname,shortname,tipeinvestor,sandigolongan,sandipemilik) {
		//,tgljatuhtempo,jmlhari,hasilbunga,portofolio
		//function filleditdata(jenistrx,namabank,nominal,sukubunga,tglpenempatan,tgljatuhtempo,jmlhari,hasilbunga,portofolio) {
		//document.forms[formname].submit();
		//window.open("returbayar.php?id=" + aa + "&noretur=" + bb, "_blank");
		//alert(namabank + " " + hasilbunga + " " + program + " " + portofolio);
		//alert(program);
		//window.open('dataharian.php#popup');
		
		document.getElementsByName("fullnameb")[0].value = fullname;
		document.getElementsByName("shortnameb")[0].value = shortname;
		document.getElementById("tipeb").value = tipeinvestor;
		document.getElementById("sandigolonganb").value = sandigolongan;
		document.getElementById("sandipemilikb").value = sandipemilik;
		document.getElementsByName("hid")[0].value = id;

//alert(document.getElementsByName("statusview")[0].value);
		//document.forms["viewdata"].submit();
		//return false;
	}
</script>
<script>
function LoadMe()
{
	document.getElementById('css-spinner').style.display='none';
}
</script>
</head>
<body onload="LoadMe()">
<?php
include "koneksi.php";
if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];
//----------------------------------------------------
if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
//----------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//----------------------------------------------------
if (!isset($_POST["bulanclient"])) {
	$bulan=0;
}
else
	$bulan=$_POST["bulanclient"];
//----------------------------------------------------
if (!isset($_POST["tahunclient"])) {
	$tahun=0;
}
else
	$tahun=$_POST["tahunclient"];
//------------------------------------------------------------------------
if (!isset($_POST["useridclient"])) {
	$userid=0;
}
else
	$userid=$_POST["useridclient"];

//------------------------------------------------------------------------
//------------------------------------------------------------------------



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

$jmldata = 0;

$query = "SELECT * FROM client;";
//echo $query . "<br>";
$row_cnt = 0;
$jmlclient = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$idmu[$i] = $row['ID'];
		$fullnamemu[$i] = $row['fullname'];
		$shortnamemu[$i] = $row['shortname'];
		$tipeinvestormu[$i] = $row['tipeinvestor'];
		$sandigolonganmu[$i] = $row['sandigolongan'];
		$sandipemilikmu[$i] = $row['sandipemilik'];
//echo $bpidmu[$i] . "<br>";
	}
	$jmldata = $i;
}

//$mylink = 'http://172.18.37.18/deposito/OUTPUT/';
//$mylink = 'http://localhost/deposito/OUTPUT/';
$mylink = './OUTPUT/';

?>


    <div id="popup">
        <div class="container popwrapper">
			<div style="text-align:right;">
				<FONT face="arial" color="#000000" size="2">
				<a href="#close" title="close modal dialog"><img src="./images/exit.png" /></a>
				</FONT>
            </div>
            <div style="padding:30px;">
                <center>
			<form method="post" name="updatec" id="updatec" action="updateclient.php">
				<table style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="520px">
					<tr height="20px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="#EEEE22" size="4"><b>EDIT DATA</b></FONT>
						</td>
					</tr>
					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 0px; text-align: left;" width="160px">
							<FONT face="arial" color="#bbbbff" size="2">Full Name</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="white" size="2">:</FONT>
						</td>
						<td style="padding-left: 0px; text-align: left;" width="330px">
							<input STYLE="padding-left: 5px; color: #000000; font-family: Arial; font-weight: normal; text-align: left; background-color: #ffffff;" class="textboxwide" id="fullnameb" name="fullnameb" value="" type="text" maxlength="50";>
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 0px; text-align: left;">
							<FONT face="arial" color="#bbbbff" size="2">Short Name</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="white" size="2">:</FONT>
						</td>
						<td style="padding-left: 0px; text-align: left;">
							<FONT face="arial" color="blue" size="2">
							<input STYLE="padding-left: 5px; color: #000000; text-align: left; background-color: #ffffff;" size="9" class="textboxwide" id="shortnameb" type="text" name="shortnameb">
							</FONT>
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 0px; text-align: left;">
							<FONT face="arial" color="#bbbbff" size="2">Tipe Investor</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="white" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<FONT face="arial" color="blue" size="2">
							<input STYLE="padding-left: 5px; text-align: left; color: #000000; background-color: #ffffff;" size="10" class="textboxtgl" id="tipeb" type="text" name="tipeb">
							</FONT>
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 0px; text-align: left;">
							<FONT face="arial" color="#bbbbff" size="2">Sandi Golongan</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="white" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<FONT face="arial" color="blue" size="2">
							<input STYLE="padding-left: 5px; color: #000000; text-align: left; background-color: #ffffff; font-size:1.0em;" class="textboxtgl" id="sandigolonganb" name="sandigolonganb" value="" type="text" maxlength="4" OnFocus="hitungjmlhariedit();">
							</FONT>
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 0px; text-align: left;">
							<a name="jatuhtempoblbl" id="jatuhtempoblbl">
							<FONT face="arial" color="#bbbbff" size="2">Sandi Pemilik</FONT>
							</a>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="white" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<a>
								<FONT face="arial" color="blue" size="2">
									<!--input STYLE="padding-left: 5px; color: #000000; background-color: #ffffff;" size="10" class="textboxnarrow" id="sandipemilik" type="text" name="sandipemilik"-->
									<div class="select_style"> <!--class="side-by-side clearfix"-->
									<select class="selectpicker" STYLE="padding-left: 10px; color: #000000; background-color: #ffffff; width: 80px" id="sandipemilikb" name="sandipemilikb"> <!-- multiple class="chosen-select"-->
										<option value="ID" selected>ID</option>
									</select>
									<span></span>
									</div>
								</FONT>
							</a>
						</td>
					</tr>

					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;" width="200px">
						</td>
					</tr>
					<tr height="50px">
						<td colspan="3" style="padding-left: auto; text-align: center;" width="200px">
							<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
							<input type="hidden" id="hid" name="hid">
							<a class="button green medium" onclick="cekdataedit(); return false;">UPDATE</a>
						</td>
					</tr>
				</table>
			</form>
                </center>
            </div>
        </div>
    </div>



	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1410px" border="0" cellpadding="0" cellspacing="0">
		<tr height="10px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;">
			</td>
		</tr>
	</table>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: 20px; margin-top: 0px;" width="1410px" border="0" cellpadding="0" cellspacing="0">

		<tr height="30px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;">
				<b><font face="arial" size="3" color="black"></font></b>
			</td>
		</tr>
		<tr height="30px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;">
				<b><font face="arial" size="5" color="black">DAFTAR DATA CLIENT</font></b>
			</td>
		
		</tr>
		<tr height="50px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;">
				<b><font face="arial" size="3" color="black"></font></b>
			</td>
		</tr>
		<tr height="30px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;">
				<b><font face="arial" size="3" color="black"></font></b>
				<a href="#popup1" class="medium button orange">Tambah Data</a>
			</td>
		</tr>
		<tr height="20px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;">
				<b><font face="arial" size="3" color="black"></font></b>
			</td>
		</tr>
	</table>

    <div id="popup1">
        <div class="container popwrapper">
			<div style="text-align:right;">
				<FONT face="arial" color="#000000" size="2">
				<a href="#close" title="close modal dialog"><img src="./images/exit.png" /></a>
				</FONT>
            </div>
            <div style="padding:30px;">
                <center>
			<form method="post" name="updatec" id="formbaru" action="uploadclient.php">
				<table style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="520px">
					<tr height="20px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="#EEEE22" size="4"><b>DATA BARU</b></FONT>
						</td>
					</tr>
					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 0px; text-align: left;" width="160px">
							<FONT face="arial" color="#bbbbff" size="2">Full Name</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="white" size="2">:</FONT>
						</td>
						<td style="padding-left: 0px; text-align: left;" width="330px">
							<input STYLE="padding-left: 5px; color: #000000; font-family: Arial; font-weight: normal; text-align: left; background-color: #ffffff;" class="textboxwide" id="fullname" name="fullname" value="" type="text" maxlength="50";>
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 0px; text-align: left;">
							<FONT face="arial" color="#bbbbff" size="2">Short Name</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="white" size="2">:</FONT>
						</td>
						<td style="padding-left: 0px; text-align: left;">
							<FONT face="arial" color="blue" size="2">
							<input STYLE="padding-left: 5px; color: #000000; text-align: left; background-color: #ffffff;" size="9" class="textboxwide" id="shortname" type="text" name="shortname">
							</FONT>
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 0px; text-align: left;">
							<FONT face="arial" color="#bbbbff" size="2">Tipe Investor</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="white" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<FONT face="arial" color="blue" size="2">
							<input STYLE="padding-left: 5px; text-align: left; color: #000000; background-color: #ffffff;" size="10" class="textboxmid" id="tipe" type="text" name="tipe">
							</FONT>
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 0px; text-align: left;">
							<FONT face="arial" color="#bbbbff" size="2">Sandi Golongan</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="white" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<FONT face="arial" color="blue" size="2">
							<input STYLE="padding-left: 5px; color: #000000; text-align: left; background-color: #ffffff; font-size:1.0em;" class="textboxnarrow" id="sandigolongan" name="sandigolongan" value="" type="text" maxlength="4" OnFocus="hitungjmlhariedit();">
							</FONT>
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 0px; text-align: left;">
							<a name="jatuhtempoblbl" id="jatuhtempoblbl">
							<FONT face="arial" color="#bbbbff" size="2">Sandi Pemilik</FONT>
							</a>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="white" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<a>
								<FONT face="arial" color="blue" size="2">
									<!--input STYLE="padding-left: 5px; color: #000000; background-color: #ffffff;" size="10" class="textboxnarrow" id="sandipemilik" type="text" name="sandipemilik"-->
									<div class="select_style"> <!--class="side-by-side clearfix"-->
									<select class="selectpicker" STYLE="padding-left: 10px; color: #000000; background-color: #ffffff; width: 80px" id="sandipemilik" name="sandipemilik"> <!-- multiple class="chosen-select"-->
										<option value="ID" selected>ID</option>
									</select>
									<span></span>
									</div>
								</FONT>
							</a>
						</td>
					</tr>

					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;" width="200px">
						</td>
					</tr>
					<tr height="50px">
						<td colspan="3" style="padding-left: auto; text-align: center;" width="200px">
							<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
							<input type="hidden" id="hid" name="hid">
							<a class="button orange medium" onclick="cekdatabaru(); return false;">TAMBAHKAN</a>
						</td>
					</tr>
				</table>
			</form>
                </center>
            </div>
        </div>
    </div>

	<table align="left" style="text-align: left; margin-left: 20px; margin-right: 20px; margin-top: 0px;" width="1410px" border="0" cellpadding="0" cellspacing="0">
		<tr height="20px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;">
			</td>
		</tr>
	</table>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: 20px; margin-top: 0px;" width="1350px" border="1" cellpadding="0" cellspacing="0">
		<tr height="45px">
            <td style="padding-left: auto; text-align: center; font-size: 12; background-color: #aaffdd; width: 60px;">
				<b><font face="arial" size="2" color="black">NO</font></b>
			</td>
            <td style="padding-left: 5px; padding-right: 5px; text-align: center; font-size: 12; background-color: #aaffdd; width: 350px">
				<b><font face="arial" size="2" color="black">FULL NAME</font></b>
			</td>
            <td style="padding-left: 5px; padding-right: 5px; text-align: center; font-size: 12; background-color: #aaffdd; width: 350px">
				<b><font face="arial" size="2" color="black">SHORT NAME</font></b>
			</td>
            <td style="padding-left: 5px; padding-right: 5px; text-align: center; font-size: 12; background-color: #aaffdd; width: 150px">
				<b><font face="arial" size="2" color="black">TIPE INVESTOR</font></b>
			</td>
            <td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; background-color: #aaffdd; width: 150px">
				<b><font face="arial" size="2" color="black">SANDI GOLONGAN</font></b>
			</td>
            <td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; background-color: #aaffdd; width: 150px">
				<b><font face="arial" size="2" color="black">SANDI PEMILIK</font></b>
			</td>
			<td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; background-color: #aaffdd; width: 100px">
				<b><font face="arial" size="2" color="black">EDIT</font></b>
			</td>
			<td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; background-color: #aaffdd; width: 100px">
				<b><font face="arial" size="2" color="black">HAPUS</font></b>
			</td>
        </tr>
<?php
		//$jmldata = 20;
		for ($i=1; $i<=$jmldata; $i++)
		{	
		
?>
		<tr height="35px">
            <td style="padding-left: auto; text-align: center;">
				<font face="arial" size="2" color="black"><?php echo $i;?></font>
			</td>
            <td style="padding-left: 5px; text-align: left;">
				<font face="arial" size="2" color="black"><?php echo $fullnamemu[$i];?></font>
			</td>
            <td style="padding-left: 5px; text-align: left;">
				<font face="arial" size="2" color="black"><?php echo $shortnamemu[$i];?></font>
			</td>
            <td style="padding-left: 5px; text-align: center;">
				<font face="arial" size="2" color="black"><?php echo $tipeinvestormu[$i];?></font>
			</td>
            <td style="padding-left: auto; text-align: center;">
				<font face="arial" size="2" color="black"><?php echo $sandigolonganmu[$i];?></font>
			</td>
            <td style="padding-left: auto; text-align: center;">
				<font face="arial" size="2" color="black"><?php echo $sandipemilikmu[$i];?></font>
			</td>
			<td style="padding-left: 0px; text-align: center;">
<?php
	$datain = $idmu[$i] . ",'" . $fullnamemu[$i] . "','" . $shortnamemu[$i] . "','" . $tipeinvestormu[$i] . "','" . $sandigolonganmu[$i] . "','" . $sandipemilikmu[$i] . "'";
?>
				<font face="arial" size="2" color="black"><a href="#popup" class="small button blue" onclick="filleditdata(<?php echo $datain;?>); return true;">Edit</a></font>
			</td>
			<td style="padding-left: 0px; text-align: center;">
<?php
	$datain = $idmu[$i];
?>
				<font face="arial" size="2" color="black"><a class="small button red" onclick="hapusdata(<?php echo $idmu[$i];?>,<?php echo $userid;?>); return true;">Hapus</a></font>
			</td>
        </tr>
<?php
		}

?>
	</table>

<?php

?>


<DIV align="left">
</DIV>

<div  id="css-spinner" class="cssload-clock"></div>





<?php

	//createoutput($perushid, $tahun, $noretur, $batch, $mysort, $link);

?>


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

//*******************************************************************************************************

function getMimeType($filename){
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $ext = strtolower($ext);
 
    $mime_types=array(
        "pdf" => "application/pdf",
        "txt" => "text/plain",
        "html" => "text/html",
        "htm" => "text/html",
        "exe" => "application/octet-stream",
        "zip" => "application/zip",
        "doc" => "application/msword",
        "xls" => "application/vnd.ms-excel",
        "ppt" => "application/vnd.ms-powerpoint",
        "gif" => "image/gif",
        "png" => "image/png",
        "jpeg"=> "image/jpg",
        "jpg" =>  "image/jpg",
        "php" => "text/plain",
        "csv" => "text/csv",
        "xlsx" => "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
        "pptx" => "application/vnd.openxmlformats-officedocument.presentationml.presentation",
        "docx" => "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
    );
 
    if(isset($mime_types[$ext])){
        return $mime_types[$ext];
    } else {
        return 'application/octet-stream';
    }
}


	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;



//*******************************************************************************************************

?>
</html>