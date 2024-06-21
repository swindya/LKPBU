<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="./Chosen/chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">

<script src="script.js"></script>

<script src="jquery-1.11.2.min.js"></script>

<link rel="stylesheet" href="./datepicker/public/css/default.css" type="text/css">
<script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>
<link rel="stylesheet" href="./datepicker/public/css/default.css" type="text/css">
<link type="text/css" rel="stylesheet" href="./datepicker/examples/libraries/syntaxhighlighter/public/css/shCoreDefault.css">

<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shCore.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushJScript.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushXML.js"></script>

<link type="text/css" rel="stylesheet" href="barloading1.css">

<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
</style>

<style type="text/css">
	/*this is just to organize the demo checkboxes*/
	label {margin-right:20px;}
</style>

<script type="text/javascript">
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.all();
</script>
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
font-size: 16px;
padding: 10px 16px 12px;
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
    height: 14px; 
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
</style>
<style>
.textboxnarrow { 
    border: 1px solid #c4c4c4; 
    height: 14px; 
    width: 40px; 
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
    width: 180px; 
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
    width: 250px; 
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
    border: 1px transparent; 
    height: 14px; 
    width: 90px; 
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
		//var usermu = document.getElementsByName("username")[0].value;
		//var formus = document.forms[forme].name;
		var formname = "formpajak" + aa;
		//alert(document.forms.forme[bb].name);
		//alert(document.forms.[0]);
		//document.forms[formname].submit();
		window.open("returbayar.php?id=" + aa + "&noretur=" + bb, "_blank");
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
function cekdatabul() {
	//var forme = document.forms[aa];
	var bulan = document.getElementsByName("bulan")[0].value;
	var tahun = document.getElementsByName("tahun")[0].value;
	
	if (bulan == null || bulan == 0 || tahun == null || tahun == 0)
	{
		alert("Lengkapi data lebih dulu");
		return false;
	}
	else {
		//document.getElementById('cssload-loader').style.display='inline';
		document.getElementsByName("bulanbul")[0].value = bulan;
		document.getElementsByName("tahunbul")[0].value = tahun;
		document.forms["myviewdata"].submit();
		return true;
	}

}
</script>
<script>
function cekdatasec() {
	//var forme = document.forms[aa];
	var bulan = document.getElementsByName("bulan")[0].value;
	var tahun = document.getElementsByName("tahun")[0].value;
	
	if (bulan == null || bulan == 0 || tahun == null || tahun == 0)
	{
		alert("Lengkapi data lebih dulu");
		return false;
	}
	else {
		//document.getElementById('cssload-loader').style.display='inline';
		document.getElementsByName("bulansec")[0].value = bulan;
		document.getElementsByName("tahunsec")[0].value = tahun;
		document.forms["myviewsec"].submit();
		return true;
	}

}
</script>
<script>
function cekdatacli() {
	//var forme = document.forms[aa];
	var bulan = document.getElementsByName("bulan")[0].value;
	var tahun = document.getElementsByName("tahun")[0].value;
	
	if (bulan == null || bulan == 0 || tahun == null || tahun == 0)
	{
		alert("Lengkapi data lebih dulu");
		return false;
	}
	else {
		//document.getElementById('cssload-loader').style.display='inline';
		document.getElementsByName("bulanclient")[0].value = bulan;
		document.getElementsByName("tahunclient")[0].value = tahun;
		document.forms["myviewcli"].submit();
		return true;
	}

}
</script>
<script>
function cekdelmain() {
	var bulan = document.getElementsByName("bulan")[0].value;
	var tahun = document.getElementsByName("tahun")[0].value;
	var bulanstr = "";
	if (bulan==1)
	{
		bulanstr="Januari";
	}
	else if (bulan==2)
	{
		bulanstr="Februari";
	}
	else if (bulan==3)
	{
		bulanstr="Maret";
	}
	else if (bulan==4)
	{
		bulanstr="April";
	}
	else if (bulan==5)
	{
		bulanstr="Mei";
	}
	else if (bulan==6)
	{
		bulanstr="Juni";
	}
	else if (bulan==7)
	{
		bulanstr="Juli";
	}
	else if (bulan==8)
	{
		bulanstr="Agustus";
	}
	else if (bulan==9)
	{
		bulanstr="September";
	}
	else if (bulan==10)
	{
		bulanstr="Oktober";
	}
	else if (bulan==11)
	{
		bulanstr="November";
	}
	else if (bulan==12)
	{
		bulanstr="Desember";
	}
	var r = confirm("Apakah anda yakin akan hapus data " + bulanstr + " " + tahun + " ?");
	if (r==true)
	{	
		document.getElementsByName("bulanmain")[0].value = bulan;
		document.getElementsByName("tahunmain")[0].value = tahun;
		document.forms["mydelmain"].submit();
	}
	
}
</script>
<script>
function cekdelsec() {
	
	var r = confirm("Apakah anda yakin akan hapus data ?");
	if (r==true)
	{	

		document.forms["mydelsec"].submit();
	}
	
}
</script>
<script>
function cekdelcli() {
	
	var r = confirm("Apakah anda yakin akan hapus data ?");
	if (r==true)
	{	

		document.forms["mydelcli"].submit();
	}
	
}
</script>
<script>
function showDiv(elem){
//alert(elem.value);
	if(elem.value == 1)
		document.getElementById('uploadfile').style.display = "none";
	else if (elem.value == 2)
		document.getElementById('uploadfile').style.display = "block";
}
</script>
<script>
function loadme(){
	document.getElementById('cssload-loader').style.display='none';
}
</script>
</head>
<body OnLoad="loadme();">
<?php
include "koneksi.php";

ini_set('max_execution_time', 6000); //300 seconds = 5 minutes

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

//--------------------------------------------------------------------
$tahunku = 0;
if (!isset($_POST["tahun"])) 
	$tahunku = 0;
else
	$tahunku=$_POST["tahun"];
//--------------------------------------------------------------------
$bulanku = 0;
if (!isset($_POST["bulan"])) 
	$bulanku = 0;
else
	$bulanku=$_POST["bulan"];
//--------------------------------------------------------------------
$userid = 0;
if (!isset($_GET["userid"])) {
	$userid=$_POST["userid"];
}
else
	$userid=$_GET["userid"];
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

$bulan = array('---','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

?>

<br>
	<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="1000px" border="0" cellpadding="2" cellspacing="0">
          <tr style="height:20px;"> 
            <td style="padding-left: 40px; text-align: left; height: 20px">
				<font face="Verdana,Arial" color="black" size="5"><b>
					VIEW DATA
				</b></font>
			</td>
          </tr>
		<tr height="10px">
			<td align="left" style="padding-left: 30px; padding-top: 10px; text-align: left; font-size: 12;">
				<img style="padding-left: 10px;" align="left" src="./img/line1.png" height="5px" width="800px">
			</td>
		</tr>
    </table>

<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="1000px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width:300px">
		</td>
	</tr>
	<tr height="10px">
		<td style="padding-left: 40px; text-align: left; font-size: 12; width:300px">
			<font face="arial" size="3" color="black"><b></b></font>
		</td>
	</tr>
</table>
	

<table style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="900px" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td style="vertical-align: top; padding-left: auto; padding-top: 0; text-align: left; font-size: 12; width:700px">
		<table style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: auto;" width="800px" border="0" cellspacing="0" cellpadding="0">
			<thead>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11; width: 600px">
						<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
						<input type="hidden" id="statusrun" name="statusrun" value="1">
					</td>
				</tr>
			</thead>
			<tbody>
				<tr height="10px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
					</td>
				</tr>


				<tr height="40px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
						<b><font face="arial" color="black" size="3">Periode Data :</font></b>
					</td>
				</tr>
				<tr height="10px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
						
					</td>
				</tr>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
						<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="330px" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td style="padding-left: auto; text-align: left; width: 150px">
									<font size="3" face="arial" color="black">
									<select id="bulan" name="bulan" class="chosen-select" style="width:130px;">
<?php
										for ($k=1; $k<=12; $k++) {
?>
											<option value="<?php echo $k;?>"><?php echo $bulan[$k];?>&nbsp;&nbsp;&nbsp;</option>
<?php
										}
?>
									</select>
									</font>
								</td>
								<td style="padding-left: auto; text-align: left; width: 10px">
								</td>
								<td style="padding-left: auto; text-align: left; width: 80px">
									<font size="2" face="arial" color="black">
									<select id="tahun" name="tahun" class="chosen-select" style="width:80px;">
										<!--option value="0">---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option-->
<?php
										$tahunsaiki = date('Y');
										for ($k=$tahunsaiki; $k >= 2014; $k--) {
?>
											<option value="<?php echo $k;?>"><?php echo $k;?>&nbsp;&nbsp;</option>
<?php
										}
?>
									</select>
									</font>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr height="80px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
					</td>
				</tr>
				<tr height="30px">
					<td style="padding-left: 10px; text-align: left;" width="400px">
						<form name="myviewdata" id="myviewdata" method="post" action="viewdatabulanan.php" target="_blank" enctype="multipart/form-data">
							<input type="hidden" id="bulanbul" name="bulanbul">
							<input type="hidden" id="tahunbul" name="tahunbul">
							<input type="hidden" id="useridbul" name="useridbul">
							<a href="" class="large button blue" onclick="cekdatabul(); return false;">View Data Bulanan</a>
						</form>
					</td>
					<td style="padding-left: 10px; text-align: left;">
						<form name="mydelmain" id="mydelmain" method="post" action="delmain.php" enctype="multipart/form-data">
							<input type="hidden" id="useridmain" name="useridmain" value="<?php echo $userid;?>">
							<input type="hidden" id="bulanmain" name="bulanmain">
							<input type="hidden" id="tahunmain" name="tahunmain">
							<a href="" class="large button red" onclick="cekdelmain(); return false;">Hapus Data Bulanan</a>
						</form>
					</td>
				</tr>
				<tr height="40px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
					</td>
				</tr>
				<tr height="30px">
					<td style="padding-left: 10px; text-align: left;">
						<form name="myviewsec" id="myviewsec" method="post" action="viewsecurities.php" target="_blank" enctype="multipart/form-data">
							<input type="hidden" id="bulansec" name="bulansec">
							<input type="hidden" id="tahunsec" name="tahunsec">
							<input type="hidden" id="useridsec" name="useridsec">
							<a href="" class="large button blue" onclick="cekdatasec(); return false;">View Data Security</a>
						</form>
					</td>
					<td style="padding-left: 10px; text-align: left;">
						<form name="mydelsec" id="mydelsec" method="post" action="delsecurities.php" enctype="multipart/form-data">
							<input type="hidden" id="useridsecu" name="useridsecu">
							<a href="" class="large button red" onclick="cekdelsec(); return false;">Hapus Data Security</a>
						</form>
					</td>
				</tr>
				<tr height="40px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
					</td>
				</tr>
				<tr height="30px">
					<td style="padding-left: 10px; text-align: left;">
						<form name="myviewcli" id="myviewcli" method="post" action="viewclient.php" target="_blank" enctype="multipart/form-data">
							<input type="hidden" id="bulanclient" name="bulanclient">
							<input type="hidden" id="tahunclient" name="tahunclient">
							<input type="hidden" id="useridclient" name="useridclient">
							<a href="" class="large button blue" onclick="cekdatacli(); return false;">View Data Client</a>
						</form>
					</td>
					<td style="padding-left: 10px; text-align: left;">
						<form name="mydelcli" id="mydelcli" method="post" action="delallclient.php" enctype="multipart/form-data">
							<input type="hidden" id="useridcli" name="useridcli">
							<a href="" class="large button red" onclick="cekdelcli(); return false;">Hapus Data Client</a>
						</form>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	</td>
	</tr>
</table>

<?php


//Read Data
	



?>
<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="1000px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width:600px">
		</td>
	</tr>
	<tr height="10px">
		<td style="padding-left: 40px; text-align: left; font-size: 12; width:600px">
	
			
			</font>
		</td>
	</tr>
</table>
	



<div id="cssload-loader" class="cssload-preloader">
	<div class="cssload-preloader-box">		<div>L</div>		<div>o</div>		<div>a</div>		<div>d</div>		<div>i</div>		<div>n</div>		<div>g</div></div>
</div>


<DIV align="left">
</DIV>

<?php

	//createoutput($perushid, $tahun, $noretur, $batch, $mysort, $link);

?>


  <script src="../jqueryforms/jquery.min.js" type="text/javascript"></script>
  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:12},
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

</body>

</html>


</body>
<?php
//-------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------
function strright($rightstring, $length) {
  return(substr($rightstring, -$length));
}

//*******************************************************************************************************

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;



//*******************************************************************************************************

?>
</html>