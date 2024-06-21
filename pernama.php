<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan Tahun Buku</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<!--link href="stylemenuhoriz.css" rel="stylesheet" /-->
<!--link rel="stylesheet" href="chosen.css"-->
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
<script src="../jqueryforms/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
<style type="text/css">
	label {margin-right:0px;}
	.cb-styles table{float:left; width:200px; padding-left:25px; font-family:sans-serif;}
	table td, table th{padding:0px 0px 0px 0px; text-align:left;}
</style>
<style type="text/css">
	/*this is just to organize the demo checkboxes*/
	label {margin-right:0px;}
</style>
<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
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

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

$db_hostname = 'localhost';
$db_database = 'deviden';
$db_username = 'myuser';
$db_password = 'userku';

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
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
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

$bulanstr = array("jan", "peb", "mar", "apr", "mei", "jun", "jul", "agu", "sep", "okt", "nop", "des");
$bulanengstr = array("jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "des");
$userid = 1;
//$aa = strtolower("Saya Makan Nasi");

// Connect to server.
$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}
// Select the database.
$db_selected = mysqli_select_db($link, $db_database);
if (!$db_selected) {
    //die ('Can't use database : ' . mysqli_error());
	die ("Can't use database : '" . mysqli_error());
}

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

if (!isset($_POST["nik"])) {
	$nikmu = "none";
}
else
	$nikmu = $_POST["nik"];
	
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
	
?>

<div style="text-align: left;">
<table style="width: 970px; text-align: left; margin-left: 10; margin-right: auto;" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr height="50px">
	<td style="font-weight: bold; width: 970px; text-align: left;"><font size="4" face="Arial"><big>LAPORAN PEMBAYARAN DIVIDEN PER NAMA: <?php print $nikmu;?></big></font></td>
	</tr>
    <tr height="50px">
	<td style="width: 970px; text-align: left;"><font size="3" face="Arial"><b><?php print $namaperus;?></b></font></td>
	</tr>
  </tbody>
</table>
</div>

<table style="width: 1100px; margin-left: 10px; margin-right: auto;" bordercolor="#BBBBBB" border="1" cellpadding="2" cellspacing="0">
   <thead>
    	<tr height="50px" bgcolor="#EEEEEE">
        	<td valign="middle" align="center"><div style="width: 40px; text-align:center;"><FONT FACE="Geneva, Arial" SIZE=2><b>NO</b></FONT></div></td>
            <td><div style="width: 120px; text-align:center"><FONT FACE="Geneva, Arial" SIZE=2><b>NO SPPD</b></FONT></div></td>
            <td><div style="width: 250px; text-align:center"><FONT FACE="Geneva, Arial" SIZE=2><b>NAMA</b></FONT></div></td>
            <td><div style="width: 80px; text-align:center"><FONT FACE="Geneva, Arial" SIZE=2><b>NIK</b></FONT></div></td>
			<td><div style="width: 80px; text-align:center"><FONT FACE="Geneva, Arial" SIZE=2><b>JML SAHAM</b></FONT></div></td>
			<td><div style="width: 130px; text-align:center"><FONT FACE="Geneva, Arial" SIZE=2><b>JML DIVIDEN YANG DIBAYARKAN (Rp.)</b></FONT></div></td>
			<td><div style="width: 100px; text-align:center"><FONT FACE="Geneva, Arial" SIZE=2><b>TANGGAL PEMBAYARAN</b></FONT></div></td>
			<td><div style="width: 150px; text-align:center"><FONT FACE="Geneva, Arial" SIZE=2><b>KODE PEMBAYARAN (CASH/TRANSFER)</b></FONT></div></td>
			<td><div style="width: 150px; text-align:center"><FONT FACE="Geneva, Arial" SIZE=2><b>KETERANGAN</b></FONT></div></td>
        </tr>
  </thead>
    <tbody>
<?php

$sql0 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND nik=" . $nikmu . ") ORDER BY tahun DESC;";
//echo $sqlcek;
$resultcek = mysqli_query($link, $sql0);
if ($resultcek) {
 /* determine number of rows result set */
    $jmlrow = $resultcek->num_rows;
	$j = 0;
	while ($row = mysqli_fetch_array ($resultcek, MYSQLI_ASSOC)) {
		$j++;
		$id[$j] = $row['ID'];
		$sppd[$j] = $row['sppd'];
		$nama[$j] = $row['nama1'];
		$nik[$j] = $row['nik'];
		$jmlsaham[$j] = $row['jmlsaham'];
		$jmldiv[$j] = $row['jmldeviden'];
		$bayar[$j] = $row['bayar'];
		$tglbayar[$j] = $row['tglbayar'];
		$jenisbayar[$j] = $row['jenisbayar'];
		$jenisesop[$j] = $row['jenisesop'];
		$jenisbank[$j] = $row['jenisbank'];
?>
        <tr style="height: 25px; valign: middle">
        	<td><div style="text-align:center"><FONT FACE="Geneva, Arial" SIZE=2><?php print $j;?></FONT></div></td>
            <td><div style="text-align:center"><FONT FACE="Geneva, Arial" SIZE=2><?php print $sppd[$j];?></FONT></div></td>
            <td><div style="text-align:left; margin-left: 10pt;"><FONT FACE="Geneva, Arial" SIZE=2><?php print $nama[$j];?></FONT></div></td>
            <td><div style="text-align:center"><FONT FACE="Geneva, Arial" SIZE=2>
			<?php 
				if ($nik[$j]=='none')
					print "-";
				else
					print $nik[$j];
			?>
			</FONT></div></td>
			<td><div style="text-align:right; margin-right: 10pt;"><FONT FACE="Geneva, Arial" SIZE=2><?php print number_format($jmlsaham[$j],0);?></FONT></div></td>
			<td><div style="text-align:right; margin-right: 10pt;"><FONT FACE="Geneva, Arial" SIZE=2><?php print number_format($jmldiv[$j],2);?></FONT></div></td>
			<td><div style="text-align:center"><FONT FACE="Geneva, Arial" SIZE=2><?php print $tglbayar[$j];?></FONT></div></td>
			<td><div style="text-align:center"><FONT FACE="Geneva, Arial" SIZE=2><?php print $jenisbayar[$j];?></FONT></div></td>
			<td><div style="text-align:center"><FONT FACE="Geneva, Arial" SIZE=2></FONT></div></td>
        </tr>
		
<?php	
	}
}
?>

    </tbody>
</table>

<?php



//*******************************************************************************************************
//			FUNCTIONS
//*******************************************************************************************************



mysqli_close($link);


//*******************************************************************************************************

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

</body>
</html>