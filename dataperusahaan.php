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
  .textboxlong { 
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 240px; 
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
    width: 90px; 
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
 	function updateform(form, aa) {
		//var usermu = document.getElementsByName("username")[0].value;
		var idku = "id" + aa;
		var namaku = "nama" + aa;
		var namamu = document.getElementsByName(namaku)[0].value;
		//var selectnpwpme = document.getElementsByName(selectnku)[0].value;
		if (namamu == null || namamu == "") {
			alert("Data ada yg kosong/invalid");
		}
		else {
			//window.open("registeruser.php",'_blank');
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
					//document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
					alert(xmlhttp.responseText);
					window.location.reload();
					window.location.refresh();
				}
			}
			var url = "updateperusahaan.php?id=" + aa + "&nama=" + namamu;
			xmlhttp.open("GET", url,true);
			xmlhttp.send();
		//alert("Data sudah di-update");
		
		//pauseme(1000);
			}



	}
</script>

<script>
function hapusktp(forme, aa) 
{
	var r = confirm("Konfirmasi Penghapusan :!\nApakah anda yakin akan hapus data ?");
	if (r==true)
	{	
		var useridku = 'userid' + aa;
		var ktpidku = 'ktpid' + aa;
		var useridmu = document.getElementsByName(useridku)[0].value;
		var ktpidmu = document.getElementsByName(ktpidku)[0].value;
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
				alert(xmlhttp.responseText);
				window.location.reload();
				window.location.refresh();
			}
		}
		var url = "delktp.php?ktpid=" + ktpidmu + "&userid=" + useridmu;
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}
		//document.forms.submit();
}
</script>
<script>
 function addtdp(forme) {

	var namamu = document.getElementsByName(nama)[0].value;
	var alamatmu = document.getElementsByName(alamat)[0].value;
	var jabatanmu = document.getElementsByName(jabatan)[0].value;
	var nomorktpmu = document.getElementsByName(nomorktp)[0].value;
	var dlahirmu = document.getElementsByName(harilahir)[0].value;
	var blahirmu = document.getElementsByName(bulanlahir)[0].value;
	var tlahirmu = document.getElementsByName(tahunlahir)[0].value;
	var dexpiremu = document.getElementsByName(hariexpire)[0].value;
	var bexpiremu = document.getElementsByName(bulanexpire)[0].value;
	var texpiremu = document.getElementsByName(tahunexpire)[0].value;

	//window.open("registeruser.php",'_blank');
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
			alert(xmlhttp.responseText);
			document.forms["addktp"].submit();
		}
	}
	var url = "addktp.php?nama=" + namamu + "&alamat=" + alamatmu + "&jabatan=" + jabatanmu + "&tgllahir=" + tgllahirmu + 
				"&tglexpire=" + tglexpiremu + "&namafile=" + ;
	xmlhttp.open("GET",url,true);
	xmlhttp.send();

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
if (!isset($_SESSION["userid"])) {
	$userid=0;
}
else
	$userid=$_SESSION["userid"];
//---------------------------------------------------------

if ($userid==0)
{
?>
<script>
//var url = (window.location != window.parent.location) ? document.referrer: document.location.href;
window.top.location.href = "http://localhost/deviden/index.php"; 
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
<meta http-equiv="refresh" content="0; url=login.php" />
<?php
//print '<br><br><input name="Button" type="Button" onClick="javascript:history.back();return false" value="KEMBALI">&nbsp;&nbsp;&nbsp;' . "\n";

die();
	
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
//var url = (window.location != window.parent.location) ? document.referrer: document.location.href;
window.top.location.href = "http://localhost/deviden/index.php"; 
</script>
<meta http-equiv="refresh" content="0; url=login.php" />
<?php
die;
	}
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


?>


<br>

<?php


$bulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

# query the users table for name and surname 
$query = "SELECT * FROM perusahaan WHERE ID=" . $perusid . ";";
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
		$idku = $row['ID'];
		$namaku = $row['nama'];
		$jenisusahaku = $row['jenisusaha'];
		$alamatku = $row['alamat'];
		$kontakku = $row['kontak'];
		$notelpku = $row['notelp'];
	}
}

?>


<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="800px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td style="padding-left: 10px; text-align: left; font-size: 12; width=300px">
		</td>
	</tr>
	<tr height="40px">
		<td style="padding-left: 20px; text-align: left; font-size: 12; width=300px">
			<font face="arial" size="5" color="black"><b>DATA PERUSAHAAN</b></font>
		</td>
	</tr>
	<tr height="30px">
		<td style="padding-left: 20px; text-align: left; font-size: 12; width=300px">
		</td>
	</tr>
</table>

<?php
if ($i==0)
{
?>
<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="500px" border="1" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td style="padding-left: 0px; text-align: left; font-size: 12; width=300px">
			<FONT face="arial" color="#EEEE22" size="4"><b>Data Belum ada. Harap lengkapi</b></FONT>
		</td>
	</tr>
</table>
<?php
}
else
{
?>
	<table align="left" style="margin-left: auto; margin-right: auto;" border="1" cellspacing="0" cellpadding="0" width="500px">
		<tr height="40px">
			<td style="padding-left: auto; text-align: center;">
			</td>
		</tr>
		<tr height="34px">
			<td style="padding-left: 20px; text-align: left;" width="500px">
				<FONT face="arial" color="#000000" size="3"><?php echo $namaku;?></FONT>
			</td>
		</tr>
		<tr height="34px">
			<td style="padding-left: 20px; text-align: left;">
				<FONT face="arial" color="#000000" size="3"><?php echo $jenisusahaku;?></FONT>
			</td>
		</tr>
		<tr height="34px">
			<td style="padding-left: 20px; text-align: left;">
				<FONT face="arial" color="#000000" size="3"><?php echo $alamatku;?></FONT>
			</td>
		</tr>
		<tr height="34px">
			<td style="padding-left: 20px; text-align: left;">
				<FONT face="arial" color="#000000" size="3"><?php echo $notelpku;?></FONT>
			</td>
		</tr>
		<tr height="20px">
			<td style="padding-left: auto; text-align: center;">
			</td>
		</tr>
		<tr height="30px">
			<td style="padding-left: auto; text-align: center;">
			</td>
		</tr>
	</table>

<?php
}
?>


<DIV align="left">
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="800px" border="0" cellpadding="0" cellspacing="0">
		<tr height="20px">
			<td style="padding-left: 10px; text-align: left; font-size: 12; width=900px">
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

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;
	//$_SESSION["sppd"] = $sppd;

//*******************************************************************************************************

?>