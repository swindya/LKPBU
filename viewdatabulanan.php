<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Laporan Deposito</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<script src="icheck.js"></script>

<script src="script.js"></script>

<script src="Form.Upload.js"></script>
<link rel="stylesheet" href="spinnerclock.css" type="text/css">

<style>
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
function deldata(dhid, userid) {
	
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
		var linkget = "deldataharian.php?id=" + dhid + "&userid=" + userid;
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
 	function filleditdata(id,jenistrx,namabank,nominal,sukubunga,tglpenempatan,tgljatuhtempo,jmlhari,hasilbunga,portofolio) {
		//,tgljatuhtempo,jmlhari,hasilbunga,portofolio
		//function filleditdata(jenistrx,namabank,nominal,sukubunga,tglpenempatan,tgljatuhtempo,jmlhari,hasilbunga,portofolio) {
		//document.forms[formname].submit();
		//window.open("returbayar.php?id=" + aa + "&noretur=" + bb, "_blank");
		//alert(namabank + " " + hasilbunga);
		//window.open('dataharian.php#popup');
		var nom = nominal.toLocaleString();
		var jmlhb = hasilbunga.toLocaleString();
		document.getElementById("jenistransaksib").value = jenistrx;
		document.getElementById("namabankb").value = namabank;
		document.getElementsByName("nominalb")[0].value = nom;
		document.getElementsByName("sukubungab")[0].value = sukubunga;
		document.getElementsByName("tglpenempatanb")[0].value = tglpenempatan;
		document.getElementsByName("tgljatuhtempob")[0].value = tgljatuhtempo;
		document.getElementsByName("jmlharib")[0].value = jmlhari;
		document.getElementsByName("jmlhasilbungab")[0].value = jmlhb;
		document.getElementsByName("portofoliob")[0].value = portofolio;
		document.getElementsByName("dhid")[0].value = id;
//alert(document.getElementsByName("statusview")[0].value);
		//document.forms["viewdata"].submit();
		//return false;
	}
</script>
<script>
 	function clearcari() {

	document.getElementsByName("cari")[0].value="";
	}
</script>

<script>
function cekdataku() {

	var jenistrx = document.getElementsByName("jenistransaksi")[0].value;
	var namabank = document.getElementsByName("namabank")[0].value;
	var nominal = document.getElementsByName("nominal")[0].value;
	var sukubunga = document.getElementsByName("sukubunga")[0].value;
	var tglpenempatan = document.getElementsByName("datepicker-example1a")[0].value;
	var jmlhari = document.getElementsByName("jmlhari")[0].value;
	var tgljatuhtempo = document.getElementsByName("datepicker-example1b")[0].value;
	var jmlhasilbunga = document.getElementsByName("jmlhasilbunga")[0].value;
	var portofolio = document.getElementsByName("portofolio")[0].value;
	
	if (jenistrx == null || jenistrx == "" || namabank == null || namabank =="" || nominal == null || nominal == "" || 
		sukubunga == null || sukubunga == "" || tglpenempatan == null || tglpenempatan == "" || jmlhari == null || jmlhari == ""
		 || tgljatuhtempo == null || tgljatuhtempo == "" || jmlhasilbunga == null || jmlhasilbunga == "" || portofolio == null || portofolio == "")
	{
		alert("File belum dipilih. Silahkan Pilih File");
		return false;
	}
	else {
		document.getElementsByName("tglpenempatan")[0].value = tglpenempatan;
		document.getElementsByName("tgljatuhtempo")[0].value = tgljatuhtempo;
		document.getElementById('css-spinner').style.display='block';
		document.forms["adddh"].submit();
		return true;
	}

}
</script>
<script>
function cekdataedit() {

	var jenistrx = document.getElementsByName("jenistransaksib")[0].value;
	var namabank = document.getElementsByName("namabankb")[0].value;
	var nominal = document.getElementsByName("nominalb")[0].value;
	var sukubunga = document.getElementsByName("sukubungab")[0].value;
	var tglpenempatan = document.getElementsByName("tglpenempatanb")[0].value;
	var jmlhari = document.getElementsByName("jmlharib")[0].value;
	var tgljatuhtempo = document.getElementsByName("tgljatuhtempob")[0].value;
	var jmlhasilbunga = document.getElementsByName("jmlhasilbungab")[0].value;
	var portofolio = document.getElementsByName("portofoliob")[0].value;

	if (jenistrx == null || jenistrx == "" || namabank == null || namabank =="" || nominal == null || nominal == "" || 
		sukubunga == null || sukubunga == "" || tglpenempatan == null || tglpenempatan == "" || jmlhari == null || jmlhari == ""
		 || tgljatuhtempo == null || tgljatuhtempo == "" || jmlhasilbunga == null || jmlhasilbunga == "" || portofolio == null || portofolio == "")
	{
		alert("Data belum lengkap. Isi semua kotak.");
		return false;
	}
	else {
		document.getElementById('css-spinner').style.display='block';
		document.forms["updateh"].submit();
		return true;
	}

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
if (!isset($_POST["bulanbul"])) {
	$bulan=0;
}
else
	$bulan=$_POST["bulanbul"];
//----------------------------------------------------
if (!isset($_POST["tahunbul"])) {
	$tahun=0;
}
else
	$tahun=$_POST["tahunbul"];
//------------------------------------------------------------------------
if (!isset($_POST["useridbul"])) {
	$userid=0;
}
else
	$userid=$_POST["useridbul"];

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

$query = "SELECT * FROM maindata WHERE (MONTH(tgl)=" . $bulan . " AND YEAR(tgl)=" . $tahun . ");";
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
		$bpidmu[$i] = $row['bpid'];
		$clientcodemu[$i] = $row['clientcode'];
		$clientnamemu[$i] = $row['clientname'];
		$clientcountrymu[$i] = $row['clientcountry'];
		$instrumenttypemu[$i] = $row['instrumenttype'];
		$issuernamemu[$i] = $row['issuername'];
		$issuercountrymu[$i] = $row['issuercountry'];
		$instrumentcodemu[$i] = $row['instrumentcode'];
		$issmu[$i] = $row['iss'];
		$marketvaluemu[$i] = $row['marketvalue'];
		$depositorymu[$i] = $row['depository'];
//echo $bpidmu[$i] . "<br>";
	}
	$jmldata = $i;
}

//$mylink = 'http://172.18.37.18/deposito/OUTPUT/';
//$mylink = 'http://localhost/deposito/OUTPUT/';
$mylink = './OUTPUT/';

?>


	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1300px" border="0" cellpadding="0" cellspacing="0">
		<tr height="10px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;">
			</td>
		</tr>
	</table>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: 20px; margin-top: 0px;" width="1300px" border="0" cellpadding="0" cellspacing="0">
		<tr height="50px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 1100px;">
				<b><font face="arial" size="3" color="black"></font></b>
			</td>
            <td rowspan="2" style="padding-left: auto; text-align: right; font-size: 12;  width: 200px;">
				<!--img src="./images/bnilogosmall.jpg" alt="Logo BNI" style="width:170px;height:70px;"-->
			</td>
			
		</tr>
		<tr height="30px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;">
				<b><font face="arial" size="3" color="black"></font></b>
			</td>
		</tr>
		<tr height="30px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 1100px;">
				<b><font face="arial" size="3" color="black">DAFTAR DATA BULANAN&nbsp;<?php //echo strtoupper($namamu[$m]);?></font></b>
			</td>
		
		</tr>
		<tr height="30px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;">
				<b><font face="arial" size="3" color="black">PERIODE&nbsp;<?php echo $bulan . " - " . $tahun;?></font></b>
			</td>
		</tr>
	</table>

	<table align="left" style="text-align: left; margin-left: 20px; margin-right: 20px; margin-top: 0px;" width="1300px" border="0" cellpadding="0" cellspacing="0">
		<tr height="20px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;">
			</td>
		</tr>
	</table>

	<table align="left" style="text-align: left; margin-left: 20px; margin-right: 20px; margin-top: 0px;" width="1300px" border="0" cellpadding="0" cellspacing="0">
		<tr height="40px" STYLE="background-color: #ffffff;"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;">
			</td>
		</tr>
	</table>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: 20px; margin-top: 0px;" width="1820px" border="1" cellpadding="0" cellspacing="0">
		<tr height="45px"> 
            <td style="padding-left: auto; text-align: center; font-size: 12;  width: 50px;">
				<b><font face="arial" size="2" color="black">NO</font></b>
			</td>
            <td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; width: 100px">
				<b><font face="arial" size="2" color="black">BPID</font></b>
			</td>
            <td style="padding-left: 5px; padding-right: 5px; text-align: center; font-size: 12; width: 300px">
				<b><font face="arial" size="2" color="black">CLIENT CODE</font></b>
			</td>
            <td style="padding-left: 5px; padding-right: 5px; text-align: center; font-size: 12; width: 300px">
				<b><font face="arial" size="2" color="black">CLIENT NAME</font></b>
			</td>
            <td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; width: 100px">
				<b><font face="arial" size="2" color="black">CLIENT COUNTRY</font></b>
			</td>
            <td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; width: 150px">
				<b><font face="arial" size="2" color="black">INSTRUMENT TYPE</font></b>
			</td>
			<td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; width: 250px">
				<b><font face="arial" size="2" color="black">ISSUER NAME</font></b>
			</td>
			<td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; width: 150px">
				<b><font face="arial" size="2" color="black">ISSUER COUNTRY</font></b>
			</td>
			<td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; width: 150px">
				<b><font face="arial" size="2" color="black">INSTRUMENT CODE</font></b>
			</td>
			<td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; width: 50px">
				<b><font face="arial" size="2" color="black">ISS</font></b>
			</td>
			<td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; width: 120px">
				<b><font face="arial" size="2" color="black">MARKET VALUE</font></b>
			</td>
			<td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; width: 100px">
				<b><font face="arial" size="2" color="black">DEPOSITORY</font></b>
			</td>
			<!--td style="padding-left: 10px; padding-right: 10px; text-align: center; font-size: 12; width: 100px">
				<b><font face="arial" size="2" color="black">EDIT</font></b>
			</td-->
        </tr>
<?php
		for ($i=1; $i<=$jmldata; $i++)
		{	
		
?>
		<tr height="35px">
            <td style="padding-left: auto; text-align: center;">
				<font face="arial" size="2" color="black"><?php echo $i;?></font>
			</td>
            <td style="padding-left: 5px; text-align: left;">
				<font face="arial" size="2" color="black"><?php echo $bpidmu[$i];?></font>
			</td>
            <td style="padding-left: 5px; text-align: left;">
				<font face="arial" size="2" color="black"><?php echo $clientcodemu[$i];?></font>
			</td>
            <td style="padding-left: 5px; text-align: left;">
				<font face="arial" size="2" color="black"><?php echo $clientnamemu[$i];?></font>
			</td>
            <td style="padding-left: 5px; text-align: left;">
				<font face="arial" size="2" color="black"><?php echo $clientcountrymu[$i];?></font>
			</td>
            <td style="padding-left: 5px; text-align: left;">
				<font face="arial" size="2" color="black"><?php echo $instrumenttypemu[$i];?></font>
			</td>
			<td style="padding-left: 5px; text-align: left;">
				<font face="arial" size="2" color="black"><?php echo $issuernamemu[$i];?></font>
			</td>
			<td style="padding-left: 5px; text-align: left;">
				<font face="arial" size="2" color="black"><?php echo $issuercountrymu[$i];?></font>
			</td>
			<td style="padding-left: 5px; text-align: left;">
				<font face="arial" size="2" color="black"><?php echo $instrumentcodemu[$i];?></font>
			</td>
			<td style="padding-left: 5px; text-align: center;">
				<font face="arial" size="2" color="black"><?php echo $issmu[$i];?></font>
			</td>
			<td style="padding-right: 5px; text-align: right;">
				<font face="arial" size="2" color="black"><?php echo number_format($marketvaluemu[$i],0);?></font>
			</td>
			<td style="padding-left: 5px; text-align: left;">
				<font face="arial" size="2" color="black"><?php echo $depositorymu[$i];?></font>
			</td>
			<!--td style="padding-left: 10px; text-align: left;">
				<font face="arial" size="2" color="black"><a href="" class="small button blue" onclick="cekdata(); return false;">Edit</a></font>
			</td-->
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