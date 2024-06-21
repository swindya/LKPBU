<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen - Retur</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="chosen.css">
<!--script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script-->
<link type='text/css' href='./simplemodal/basic/css/basicd.css' rel='stylesheet' media='screen' />
<script src="script.js"></script>
<link rel="stylesheet" href="./public/css/reset.css" type="text/css">
<link rel="stylesheet" href="./public/css/style.css" type="text/css">

<link rel="stylesheet" href="./datepicker2/public/css/default.css" type="text/css">
<script type="text/javascript" src="./datepicker2/public/javascript/zebra_datepicker.js"></script>
<link rel="stylesheet" href="./datepicker2/public/css/default.css" type="text/css">
<link type="text/css" rel="stylesheet" href="./datepicker2/examples/libraries/syntaxhighlighter/public/css/shCoreDefault.css">

<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shCore.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushJScript.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushXML.js"></script>

<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
</style>
<style type="text/css">
	/*label {margin-right:20px;}
	.cb-styles table{float:left; width:200px; padding-left:25px; font-family:sans-serif;}
	table td, table th{padding:0px 10px 5px 0px; text-align:left;}*/
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
 <style> 
  .textboxmid { 
    border: 1px solid #c4c4c4; 
    height: 12px; 
    width: 150px; 
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
  .textboxtgl { 
    border: 1px solid #c4c4c4; 
    height: 12px; 
    width: 100px; 
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
<script>
 function viewform(forme, aa, bb) {

	//var formname = "formpajak" + aa;
	var myurl = "returbayar.php?id=" + aa + "&noretur=" + bb + "_blank";
alert(myurl);
	window.open(myurl);
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
function delretur2(aa) {
	//var formename = document.forms.hapusretur1.name;
	//var forme = document.forms[aa];
	//var usermu = document.getElementsByName("nomorreturku")[0].value;
	var con = confirm("Apakah anda yakin akan menghapus data ?");
	if (con == true)
	{
		document.forms["hapusretur2"].submit();
		return true;
	}
	else
	{
		return false;
	}
}
</script>
<script>
function hapusku(aa) {

	var tahun = document.getElementsByName("tahun")[0].value;
	var batch = document.getElementsByName("batch")[0].value;
	var noretur = document.getElementsByName("noretur")[0].value;
	var perusid = document.getElementsByName("perusidi")[0].value;
	var userid = document.getElementsByName("userid")[0].value;

	var con = confirm("Apakah anda yakin akan menghapus data ?");
	if (con == true)
	{
		//document.getElementsByName("tahundel")[0].value = tahun;
		//document.getElementsByName("bulandel")[0].value = bulan;
		//document.getElementsByName("noreturdel")[0].value = noretur;

		if (tahun=="" || tahun ==null || batch=="" || batch==null || noretur=="") {
			alert("Lengkapi data terlebih dahulu, khususnya tahunbuku, batch, dan status retur");
			return false;
		}
		else {
			if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			} 
			else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
					alert(xmlhttp.responseText);
					window.location.reload();
					window.location.refresh();
				}
			}
			if (aa=='bni') {
				var linkget = "delreturbni.php?tahun=" + tahun + "&batch=" + batch + "&statusretur=" + noretur + "&perusahaanID" + 
						perusid + "&userid=" + $userid;
			}
			else if (aa=='gg') {
				var linkget = "delreturgg.php?tahun=" + tahun + "&batch=" + batch + "&noretur=" + noretur + "&perusid=" + perusid + "&userid=" + userid;
				//var linkget = "delreturgg.php?tahun=" + tahun + "&batch=" + batch + "&noretur=" + noretur + "&perusahaanID=" + perusid + "&userid=" + $userid;
			}
			else if (aa=='telkom') {
				var linkget = "delreturtelkom.php?tahun=" + tahun + "&batch=" + batch + "&statusretur=" + noretur + "&perusahaanID" + 
						perusid + "&userid=" + $userid;
			}
			xmlhttp.open("GET", linkget,true);
			xmlhttp.send();
		//alert("Data sudah di-update");
		
		//pauseme(1000);
		//alert("File sudah dihasilkan");
			return true;
		}		
	}
	else
	{
		return false;
	}
}
</script>
<script>
function cetakreturbni(myform) {
	var tahunbuku = document.getElementsByName("tahunbuku")[0].value;
	var batch = document.getElementsByName("batch")[0].value;
	var noretur = document.getElementsByName("noretur")[0].value;
	var userid = document.getElementsByName("userid")[0].value;
	
	if (tahunbuku=="" || tahunbuku ==null || batch=="" || batch==null || noretur=="" || noretur==null)
	{
		alert("Lengkapi data terlebih dahulu, khususnya tahunbuku, batch, dan status retur");
	}
	else {
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} 
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {

				document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
			}
		}
		var linkget = "cetakreturbni.php?userid=" + userid + "&tahunbuku=" + tahunbuku + "&batch=" + batch + "&statusretur=" + noretur;
		xmlhttp.open("GET", linkget,true);
		xmlhttp.send();
		//alert("Data sudah di-update");
		
		//pauseme(1000);
		alert("File sudah dihasilkan");
		//window.location.reload();
		//window.location.refresh();
	}
	
}
</script>
<script>
function cetakreturgg(myform) {

	var tahun = document.getElementsByName("tahun")[0].value;
	var batch = document.getElementsByName("batch")[0].value;
	var userid = document.getElementsByName("userid")[0].value;
	var perusid = document.getElementsByName("id")[0].value;
	var noretur = document.getElementsByName("noretur")[0].value;
	var mysort = document.getElementsByName("mysort")[0].value;

	if (tahun=="" || tahun ==null || batch=="" || batch==null || noretur=="" || noretur==null)
	{
		alert("Lengkapi data terlebih dahulu, khususnya tahunbuku, batch, dan status retur");
	}
	else {
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} 
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
				alert("File sudah dihasilkan");
			}
		}
		var linkget = "cetakreturgg.php?id=" + perusid + "&userid=" + userid + "&tahun=" + tahun + "&batch=" + batch + "&noretur=" + noretur + "&sort=" + mysort;

		xmlhttp.open("GET", linkget,true);
		xmlhttp.send();
		//alert("Data sudah di-update");
		
		//pauseme(1000);
		//window.location.reload();
		//window.location.refresh();
	}
	
}
</script>
<script>
function cetakreturtelkom(myform) {
	
	var tahun = document.getElementsByName("tahun")[0].value;
	var batch = document.getElementsByName("batch")[0].value;
	var userid = document.getElementsByName("userid")[0].value;
	var perusid = document.getElementsByName("id")[0].value;
	var noretur = document.getElementsByName("noretur")[0].value;
	var mysort = document.getElementsByName("mysort")[0].value;
	var cari = document.getElementsByName("cari")[0].value;
	
	document.getElementsByName("tahuncetak")[0].value = tahun;
	document.getElementsByName("batchcetak")[0].value = batch;
	document.getElementsByName("noreturcetak")[0].value = noretur;
	document.getElementsByName("sortcetak")[0].value = mysort;
	document.getElementsByName("caricetak")[0].value = cari;

	if (tahun=="" || tahun ==null || batch=="" || batch==null || noretur=="" || noretur==null)
	{
		alert("Lengkapi data terlebih dahulu, khususnya tahunbuku, batch, dan status retur");
	}
	else {
		document.forms["mycetak"].submit();
	}

}
</script>
<script>
function fillreturtelkom(norek, thsaiki, th, batch, trid, noretur, teldatidku, nama, nom, sppd, bank, cabang) {

	//var tahunb = document.getElementsByName("tahuna")[0].value;
	//var batch = document.getElementsByName("batcha")[0].value;
	//var noretur = document.getElementsByName("noretur")[0].value;

	var thmu = th-2006;
	document.getElementById("returkea").options[noretur-1].selected = true;
//alert(aa + "-" + th + "-" + nom + "-" + nama);
	document.getElementById("tahuna").options[thmu].selected = true;
    //document.getElementById('returkea')[0].value=2;
	document.getElementsByName("tahuna")[0].value = th;
	document.getElementsByName("batcha")[0].value = batch;
	document.getElementsByName("returkea")[0].value = noretur;
	document.getElementsByName("namaa")[0].value = nama;
	document.getElementsByName("sppda")[0].value = sppd;
	document.getElementsByName("nominala")[0].value = nom;
	document.getElementsByName("telkomrid")[0].value = trid;
	document.getElementsByName("telkomid")[0].value = teldatidku;
	document.getElementsByName("namabank")[0].value = bank;
	document.getElementsByName("cabang")[0].value = cabang;
}
</script>
<script>
function fillreturbni(norek, tahunsaiki, tahun, batch, bnireturid, noretur, bniid, nama, nom, sppd) {

	var thmu = tahun-2006;
	document.getElementById("returkea").options[noretur-1].selected = true;
	document.getElementById("tahuna").options[tahunsaiki-tahun].selected = true;
    document.getElementById("batcha").options[batch-1].selected = true;
	document.getElementsByName("namaa")[0].value = nama;
	document.getElementsByName("nominala")[0].value = nom;
	document.getElementsByName("bnirid")[0].value = bnireturid;
	document.getElementsByName("bniid")[0].value = bniid;
	document.getElementsByName("sppda")[0].value = sppd;
	document.getElementsByName("norek")[0].value = norek;
}
</script>
<script>
function fillreturgg(batch, ggid, ggrid, noretur, tahun, nom, nama, alasan, bank, cabang, noacc, noretur) {
	var thmu = tahun-2006;
	document.getElementById("returkea").options[noretur-1].selected = true;
	document.getElementById("tahuna").options[thmu].selected = true;
    document.getElementById("batcha").options[batch-1].selected = true;
	document.getElementsByName("returkea")[0].value = noretur;
	document.getElementsByName("namaa")[0].value = nama;
	document.getElementsByName("nominala")[0].value = nom;
	document.getElementsByName("ggrid")[0].value = ggrid;
	document.getElementsByName("ggid")[0].value = ggid;
	document.getElementsByName("alasan")[0].value = alasan;
	document.getElementsByName("namabank")[0].value = bank;
	document.getElementsByName("cabang")[0].value = cabang;
	document.getElementsByName("norek")[0].value = noacc;
}
</script>
<script>
function hapusreturbni() {

	var r = confirm("Apakah anda yakin akan hapus data ?");
	if (r==true)
	{	
		var tahun = document.getElementsByName("tahun")[0].value;
		var batch = document.getElementsByName("batch")[0].value;
		var noretur = document.getElementsByName("noretur")[0].value;
		var userid = document.getElementsByName("userid")[0].value;
		var perusid = document.getElementsByName("perusid")[0].value;
		var cari = document.getElementsByName("cari")[0].value;

		if (tahun=="" || tahun ==null || batch=="" || batch==null)
		{
			alert("Lengkapi data terlebih dahulu.");
			return false;
		}
		else {

			if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			} 
			else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//alert(xmlhttp.responseText);
				alert("Data sudah dihapus");
				window.location.reload();
				window.location.refresh();
				}
			}
			var linkget = "delreturbni.php?id=" + perusid + "&userid=" + userid + "&tahun=" + tahun + "&batch=" + batch + 
						"&noretur=" + noretur + "&cari=" + cari;
			xmlhttp.open("GET", linkget,true);
			xmlhttp.send();
		//alert("Data sudah di-update");
		}
	}
}
</script>
<script>
function hapusreturgg() {

	var r = confirm("Apakah anda yakin akan hapus data ?");
	if (r==true)
	{	
		var tahun = document.getElementsByName("tahun")[0].value;
		var batch = document.getElementsByName("batch")[0].value;
		var userid = document.getElementsByName("userid")[0].value;
		var perusid = document.getElementsByName("perusid")[0].value;

		if (tahun=="" || tahun ==null || batch=="" || batch==null)
		{
			alert("Lengkapi data terlebih dahulu.");
			return false;
		}
		else {
			if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			} 
			else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				alert("Data sudah dihapus");
				window.location.reload();
				window.location.refresh();
				}
			}
			var linkget = "delreturgg.php?perusid=" + perusid + "&userid=" + userid + "&tahun=" + tahun + "&batch=" + batch;
			xmlhttp.open("GET", linkget,true);
			xmlhttp.send();
		//alert("Data sudah di-update");
		}
	}
}
</script>
<script>
function hapusreturtelkom() {

	var r = confirm("Apakah anda yakin akan hapus data ?");
	if (r==true)
	{	
		var tahun = document.getElementsByName("tahun")[0].value;
		var batch = document.getElementsByName("batch")[0].value;
		var noretur = document.getElementsByName("noretur")[0].value;
		var userid = document.getElementsByName("userid")[0].value;
		var perusid = document.getElementsByName("perusid")[0].value;

		if (tahun=="" || tahun ==null || batch=="" || batch==null)
		{
			alert("Lengkapi data terlebih dahulu.");
			return false;
		}
		else {
			if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			} 
			else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				//alert(xmlhttp.responseText);
				alert("Data sudah dihapus");
				window.location.reload();
				window.location.refresh();
				}
			}
			var linkget = "delreturtelkom.php?perusid=" + perusid + "&userid=" + userid + "&tahun=" + tahun + "&batch=" + batch +
						"&noretur=" + noretur;
			xmlhttp.open("GET", linkget,true);
			xmlhttp.send();
		//alert("Data sudah di-update");
		}
	}
}
</script>
<style>
p.calibri {
    font-family: "calibri", Times, serif;
}

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
//-------------------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//-------------------------------------------------------------
$userid=0;
if (!isset($_GET["userid"])) {
	if (!isset($_POST["userid"]))
		$userid = 0;
	else
		$userid = $_POST["userid"];
}
else
	$userid=$_GET["userid"];
//-------------------------------------------------------------
//-------------------------------------------------------------
if (!isset($_GET["id"])) {
	if (!isset($_POST["id"])) {
		$perushid = 0;
	}
	else
		$perushid=$_POST["id"];
}
else
	$perushid=$_GET["id"];
//-------------------------------------------------------------
if (!isset($_GET["tahun"])) {
	if (!isset($_POST["tahun"]))
		$tahun=0;
	else
		$tahun=$_POST["tahun"];
}
else
	$tahun=$_GET["tahun"];
//------------------------------------------------------------------------
if (!isset($_POST["tahunview"])) {
	if (!isset($_GET["tahunview"])) 
		$tahun=0;
	else
		$tahun=$_GET["tahunview"];
}
else
	$tahun=$_POST["tahunview"];
//------------------------------------------------------------------------
//if (!isset($_POST["tahunbuku"])) {
//	$tahunbuku=$_GET["tahunbuku"];
//}
//else
//	$tahunbuku=$_POST["tahunbuku"];
//------------------------------------------------------------------------
if (!isset($_POST["batchview"])) {
	if (!isset($_GET["batchview"])) 
		$batch=0;
	else
		$batch=$_GET["batchview"];
}
else
	$batch=$_POST["batchview"];
//------------------------------------------------------------------------
if (!isset($_POST["sortview"])) {
	if (!isset($_GET["sortview"])) 
		$sort="ID";
	else
		$sort=$_GET["sortview"];
}
else
	$sort=$_POST["sortview"];
//------------------------------------------------------------------------
if (!isset($_POST["noreturview"])) {
	if (!isset($_GET["noreturview"])) 
		$noretur=1;
	else
		$noretur=$_GET["noreturview"];
}
else
	$noretur=$_POST["noreturview"];
//------------------------------------------------------------------------
if (!isset($_POST["statuscetak"])) {
	if (!isset($_GET["statuscetak"])) {
		if (!isset($_POST["statuscetakview"]))
			$statuscetak=0;
		else
			$statuscetak=$_POST["statuscetakview"];
	}
	else
		$statuscetak=$_GET["statuscetak"];
}
else
	$statuscetak=$_POST["statuscetak"];
//------------------------------------------------------------------------
if (!isset($_POST["cariview"]))  {
	if (!isset($_GET["cariview"])) 
		$cari="";
	else
		$cari=$_GET["cariview"];
}
else
	$cari=$_POST["cariview"];
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
$namaku = "-";
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
?>

<br>
<DIV align="right">
	<table align="right" style="text-align: right; margin-left: auto; margin-right: auto; margin-top: 0px;" width="120px" border="0" cellpadding="0" cellspacing="0">
        <tr style="height: 20px"> 
            <!--td style="padding-left: 0px; text-align: right; font-size: 12; width: 20px">
				<span title="User Login"><a href="" target=""><img src="./img/user3a.png" height="18" width="18" align="right"></a></span>
			</td>
            <td style="vertical-align: middle; padding-left: 0px; text-align: left; width: 100px">
				<p><font face="arial" color="blue">&nbsp;</font>
				<i><font size="2" face="arial" color="blue">
				<?php print $namaku;?></font></i>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
			</td-->
        </tr>
	</table>
</DIV>

<?php


# query the users table for name and surname 
$query = "SELECT * FROM perusahaan WHERE ID=" . $perushid . ";";
$row_cnt = 0;
$namaperus = "none";
$i = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
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
	include "returtelkom.php";
}
else if (strpos(strtoupper($namaperus), "GUDANG GARAM") !== false)
{
	include "returgudanggaram.php";
}
else if (strpos(strtoupper($namaperus), "BNI") !== false)
{
	include "returbni.php";
}

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

<?php
//----------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------
?>

<?php

//*******************************************************************************************************

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;


//*******************************************************************************************************

?>