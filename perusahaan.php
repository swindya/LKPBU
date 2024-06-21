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
<!--script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script-->
<link type='text/css' href='./simplemodal/basic/css/basic.css' rel='stylesheet' media='screen' />
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
		var jenisku = "jenis" + aa;
		var namamu = document.getElementsByName(namaku)[0].value;
		var jenismu = document.getElementsByName(jenisku)[0].value;
		//var selectnpwpme = document.getElementsByName(selectnku)[0].value;
		if (namamu == null || namamu == "" || jenismu == null || jenismu == "") {
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
					//alert(xmlhttp.responseText);
					window.location.reload();
					window.location.refresh();
				}
			}
			var url = "updateperusahaan.php?id=" + aa + "&nama=" + namamu + "&jenis=" + jenismu;
			xmlhttp.open("GET", url,true);
			xmlhttp.send();
		//alert("Data sudah di-update");
		
		//pauseme(1000);
			}



	}
</script>
<script>
 	function delform(forme, perusid, id) {
		var r = confirm("Apakah anda yakin akan hapus data ?");
		if (r==true)
		{	
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
					//alert(xmlhttp.responseText);
					parent.framekiri.location.reload();
					window.location.reload();
					window.location.refresh();
				}
			}
			var url = "delperusahaan.php?id=" + perusid + "&userid=" + id;
			xmlhttp.open("GET",url,true);
			xmlhttp.send();
		}
		//document.forms.submit();
	}
</script>
<script>
 	function cekadd(myform) {

		var nama = document.getElementsByName("nama")[0].value;
		var jenis = document.getElementsByName("jenis")[0].value;
		if (nama == null || nama == "" || jenis==null || jenis=="")
		{
			alert("Silahkan lengkapi data");
		}
		else
		{
			document.forms["addperus"].submit();
		}
	}

</script>
<script>
function disenable(myform, i, aa) 
{

	for (ii = 1; ii <= i; ii++) {
		document.getElementById(aa).style.backgroundColor='transparent';
		document.getElementById(aa).readOnly = true;
	}
	document.getElementById(aa).style.backgroundColor='white';
	document.getElementById(aa).readOnly = false;
//alert(document.getElementById(aa).style.backgroundColor);
//alert(document.getElementById(aa).readOnly);
}
</script>
<script>
function lockme(myform, i, aa) {

if (document.getElementById(aa).style.backgroundColor=='white') {
	document.getElementById(aa).readOnly = false;
}
else {
	for (ii = 1; ii <= i; ii++) { 
		document.getElementById('nama'+ii).style.backgroundColor='transparent';
		document.getElementById('nama'+ii).readOnly = true;
	}
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
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
}
else
{
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
}
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
		$uname = $row['username'];
	}
}

//echo $query;

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

# query the users table for name and surname 
$query = "SELECT * FROM perusahaan;";
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
		$idku[$i] = $row['ID'];
		$namaperusku[$i] = $row['nama'];
		$jenisku[$i] = $row['jenisusaha'];
		$modiflagku[$i] = $row['modiflag'];
	}
}
$jmli = $i;

?>


<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="800px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td style="padding-left: 10px; text-align: left; font-size: 12; width=300px">
		</td>
	</tr>
	<tr height="40px">
		<td style="padding-left: 20px; text-align: left; font-size: 12; width=300px">
			<font face="arial" size="5" color="black"><b>PERUSAHAAN</b></font>
		</td>
	</tr>
	<tr height="30px">
		<td style="padding-left: 20px; text-align: left; font-size: 12; width=300px">
		</td>
	</tr>
</table>

<div id='container'>
	<div id='logo'>
		<h1><span></span></h1>
		<span class='title'></span>
	</div>
	<div id='content'>
		<div id='basic-modal'>
			<h3></h3>
			<!--input type='button' name='basic' value='Demo' class='basic'/> or <a href='#' class='basic'>Demo</a-->
		</div>
		
		<!-- modal content -->
		<div id="basic-modal-content">
			<form method="post" class="signin" name="addperus" id="addperus" action="addperusahaan.php">
				<table style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="500px">
					<tr height="50px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="#9999DD" size="4">Data Perusahaan Baru</FONT>
						</td>
					</tr>
					<tr height="40px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="35px">
						<td style="padding-left: 30px; text-align: left;" width="150px">
							<FONT face="arial" color="#77EEEE" size="2">Nama Perusahaan</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;"  width="330px">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;" class="textbox" id="nama" name="nama" value="" type="text" size="30">
						</td>
					</tr>
					<tr height="10px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="50px">
						<td valign="top" style="padding-left: 30px; text-align: left;">
							<FONT face="arial" color="#77EEEE" size="2">Kegiatan</FONT>
						</td>
						<td valign="top" style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<font face="arial" size="2" color="black">
								<textarea rows="5" cols="34" STYLE="text-align: left;" id="jenis" name="jenis"></textarea>
							</font>
						</td>
					</tr>
					<tr height="50px">
						<td colspan="3" style="padding-left: 40px; text-align: left;" width="200px">
						<input type="radio" name="mauapa" value="1"><FONT face="arial" color="#77EEEE" size="2">Perusahaan (only)</FONT>&nbsp;&nbsp;
						<input type="radio" name="mauapa" value="2"><FONT face="arial" color="#77EEEE" size="2">Perusahaan & Deviden</FONT>
						</td>
					</tr>
					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="50px">
						<td colspan="3" style="padding-left: auto; text-align: center;" width="200px">
							<!--button input type="submit">Tambahkan</button-->
							<input type="hidden" id="userid" name="userid" value=<?php print $userid;?>>
							<a class="button orange medium" onclick="cekadd(this.form); return false;">Tambahkan</a>
						</td>
					</tr>
			</table>
          </form>
		</div>

		<!-- preload the images -->
		<div style='display:none'>
			<img src='img/basic/x.png' alt='' />
		</div>
	</div>
	<div id='footer'>
	</div>
</div>




<table align="left" style="text-align: right; margin-left: 20px; margin-right: auto; margin-top: auto;" width="800px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td style="padding-left: 20px; text-align: right; font-size: 12; width=300px">
			<div id='basic-modal'>
				<a href="#" class="basic">
					<img src="./images/add24.png">
				</a> &nbsp;
				<button type="text" class="basic">Tambah Data</button>
				<!--button type="text" onclick="parent.framekiri.location.reload();">Refresh</button-->
			</div>
		</td>
	</tr>
</table>

<DIV align="left">
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="800px" border="0" cellpadding="0" cellspacing="0">
		<tr height="20px">
			<td style="padding-left: 10px; text-align: left; font-size: 12; width=900px">
			</td>
		</tr>
	</table>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="800px" border="0" cellpadding="0" cellspacing="0">
		<tr height="40px" bgcolor="#88eeff"> 
            <td style="padding-left: auto; text-align: center; font-size: 12;  width: 30px;">
				<b><i><font face="arial" size="2" color="black">NO</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 270px">
				<b><i><font face="arial" size="2" color="black">NAMA PERUSAHAAN</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 300px">
				<b><i><font face="arial" size="2" color="black">JENIS KERJASAMA</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">UPDATE</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">HAPUS</font></i></b>
			</td>
        </tr>
<?php

$bulan = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Des');

$jmli = $i;

for ($i=1; $i <= $jmli; $i++)
{
?>
        <tr height="30" <?php if (($i%2)==0) echo 'bgcolor="#bbffd7"'; else echo 'bgcolor="#d7ffe7"';?>>
            <td style="padding-right: 10px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print $i;?></font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<input type="hidden" id="perusid" name="perusid" value="<?php print $idku[$i];?>">
				<font face="arial" size="2" color="black">
					<input STYLE="text-align: center; font-size: 12;" type="text" size="28" id="nama<?php print $idku[$i];?>" name="nama<?php print $idku[$i];?>" value="<?php print $namaperusku[$i];?>" class="textbox"
						ondblclick="disenable(this.form,'<?php echo $jmli;?>','<?php echo 'nama' . $idku[$i];?>')" 
						onclick="lockme(this.form,'<?php echo $jmli;?>','<?php echo 'nama' . $idku[$i];?>')" readonly>
				</font>
			</td>
            <td style="padding-right: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="black">
					<input STYLE="text-align: center; font-size: 12;" type="text" size="28" id="jenis<?php print $idku[$i];?>" name="jenis<?php print $idku[$i];?>" value="<?php print $jenisku[$i];?>" class="textbox"
						ondblclick="disenable(this.form,'<?php echo $jmli;?>','<?php echo 'jenis' . $idku[$i];?>')" 
						onclick="lockme(this.form,'<?php echo $jmli;?>','<?php echo 'jenis' . $idku[$i];?>')" readonly>				
				</font>
			</td>
			<td style="padding-left: auto; text-align: center; font-size: 12;">
<?php
			if ($modiflagku[$i] > 0) {
?>
				<a class="button yellow small" onclick="updateform(this.form,<?php print $idku[$i];?>)">Save/Update</a>
<?php
			}
?>
			</td>   				
			<td style="padding-left: auto; text-align: center; font-size: 12;">
<?php
	if ($levelidku == 1 && $modiflagku[$i] > 0) {
?>
				<a href="javascript:void(0)" target=_blank class="button red small" onclick="delform(this.form,<?php print $idku[$i];?>,<?php print $userid;?>);">Hapus</a>
<?php
	}
?>
			</td>        

        </tr>
<?php
	
}
?>
    </table>
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