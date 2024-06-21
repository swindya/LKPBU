<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title></title>
	<link rel="StyleSheet" href="./dtree.css" type="text/css">
	<script type="text/javascript" src="./dtree.js"></script>

</head>

<body>
<?php
session_start();

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
//---------------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//---------------------------------------------------------
if (!isset($_GET["id"])) {
	$userid=0;
}
else
	$userid=$_GET["id"];
//---------------------------------------------------------
if (!isset($_GET["perusid"])) {
	$perid=0;
}
else
	$perid=$_GET["perusid"];
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
		$_SESSION['statuslogin'] = 7;//session expired
?>
<script>
window.top.location.href = "index.php"; 
</script>
<?php
die;
	}
}

//Cari data customer
$query = "SELECT * FROM perusahaan ORDER BY ID ASC;";

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
		$perusnama[$i] = $row['nama'];
	}
}
$jmli = $i;

// Cek data expire

$jmlexpireall = findexpire($link);

if ($jmlexpireall>0)
{
?>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1020px" border="0" cellpadding="0" cellspacing="0">
		<tr height="30px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 30px;">
			</td>
		</tr>
		<tr height="30px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 30px;">
				<b><i><font face="arial" size="5" color="black">TGL HABIS MASA BERLAKU</font></i></b>
			</td>
		</tr>
		<tr height="40px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 30px;">
			</td>
		</tr>
	</table>
	<br>
<?php
}

// Check KTP ==========================================================================

$saiki90 = date('Y-m-d', strtotime("+90 days"));
$saiki30 = date('Y-m-d', strtotime("+30 days"));
$saiki = date('Y-m-d');
$query = "SELECT * FROM perusahaanktp WHERE tglexpire < '" . $saiki90 . "';";
$jmlrowktp = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
	$jmlrowktp = $result->num_rows;
}
if ($jmlrowktp>0)
{
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$idku[$i] = $row['ID'];
		$perusahaanid[$i] = $row['perusahaanID'];
		$nama[$i] = $row['nama'];
		$nomorktp[$i] = $row['nomorktp'];
		$alamat[$i] = $row['alamat'];
		$jabatan[$i] = $row['jabatan'];
		$tgllahir[$i] = $row['tgllahir'];
		$tglexpire[$i] = $row['tglexpire'];
		$namafile[$i] = $row['namafile'];
	}
}
$jmli = $i;

if ($jmlrowktp>0)
{
?>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1020px" border="0" cellpadding="0" cellspacing="0">
		<tr height="40px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 30px;">
				<b><i><font face="arial" size="3" color="black">KTP</font></i></b>
			</td>
		</tr>
	</table>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1070px" border="1" cellpadding="0" cellspacing="0">
		<tr height="40px" bgcolor="#88eeff"> 
            <td style="padding-left: auto; text-align: center; font-size: 12;  width: 30px;">
				<b><i><font face="arial" size="2" color="black">NO</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">NAMA PEGAWAI</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 90px">
				<b><i><font face="arial" size="2" color="black">NO KTP</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 90px">
				<b><i><font face="arial" size="2" color="black">TGL EXPIRE</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 90px">
				<b><i><font face="arial" size="2" color="black">DURASI</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 90px">
				<b><i><font face="arial" size="2" color="black">TGL LAHIR</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">JABATAN</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">ALAMAT</font></i></b>
			</td>
           <td style="padding-left: auto; text-align: center; font-size: 12; width: 140px">
				<b><i><font face="arial" size="2" color="black">NAMA PERUSAHAAN</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">VIEW DOC</font></i></b>
			</td>
           </tr>
<?php

	$bulan = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Des');

	for ($i=1; $i <= $jmli; $i++)
	{
# query the users table for name and surname 
		$query = "SELECT * FROM perusahaan WHERE ID=" . $perusahaanid[$i] . ";";
		$row_cnt = 0;
		$result = mysqli_query($link, $query);
		if ($result) {
 /* determine number of rows result set */
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$namaperus = $row['nama'];
			}
		}
		else
			$namaperus = "";
		$warna="black";
		if ($tglexpire[$i] > $saiki30)
			$warna1 = "green";
		else if (($tglexpire[$i] < $saiki30) && ($tglexpire[$i] >= $saiki))
			$warna1 = "orange";
		else if ($tglexpire[$i] < $saiki)
			$warna1 = "red";
		
?>
        <tr height="30" <?php if (($i%2)==0) echo 'bgcolor="#bbffd7"'; else echo 'bgcolor="#d7ffe7"';?>>
            <td style="padding-right: auto; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>"><?php print $i;?></font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<input type="hidden" id="perusid" name="perusid" value="<?php print $perid;?>">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $nama[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $nomorktp[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $tglexpire[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna1;?>">
					<?php print round((strtotime($tglexpire[$i])-strtotime($saiki))/(3600*24));?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $tgllahir[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $jabatan[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $alamat[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<input type="hidden" id="ktpid<?php echo $i;?>" name="ktpid<?php echo $i;?>" value="<?php print $idku[$i];?>">
					<?php print $namaperus;?>
				</font>
			</td>
			<td style="padding-left: auto; text-align: center; font-size: 12;">
<?php
		if (isset($namafile[$i])==false || $namafile[$i]==null || $namafile[$i]=="")
			$namafile[$i] = "nodata.jpg";
?>
				<a href="./DOC/KTP/<?php echo $namafile[$i];?>" target="_blank" class="button green small">View</a>
			</td>    
        </tr>
<?php
	}
	
}
?>
    </table>
	<br>

<?php
	
//============================================================================================
// Check TDP
//============================================================================================
$query = "SELECT * FROM perusahaantdp WHERE tglsd < '" . $saiki90 . "';";
$jmlrowtdp = 0;
$i = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
	$jmlrowtdp = $result->num_rows;
}
if ($jmlrowtdp>0) {
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$tdpid[$i] = $row['ID'];
		$perustdpid[$i] = $row['perusahaanID'];
		$nomortdp[$i] = $row['nomor'];
		$tgltdp[$i] = $row['tgl'];
		$pjtdp[$i] = $row['pj'];
		$tglsdtdp[$i] = $row['tglsd'];
		$namafiletdp[$i] = $row['namafile'];
	}
}
$jmltdp = $i;

if ($jmltdp>0)
{
?>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1020px" border="0" cellpadding="0" cellspacing="0">
		<tr height="20px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 30px;">
			</td>
		</tr>
		<tr height="40px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 30px;">
				<b><i><font face="arial" size="3" color="black">TDP</font></i></b>
			</td>
		</tr>
	</table>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="890px" border="1" cellpadding="0" cellspacing="0">
		<tr height="40px" bgcolor="#88eeff"> 
            <td style="padding-left: auto; text-align: center; font-size: 12;  width: 30px;">
				<b><i><font face="arial" size="2" color="black">NO</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 140px">
				<b><i><font face="arial" size="2" color="black">NO TDP</font></i></b>
			</td>
           <td style="padding-left: auto; text-align: center; font-size: 12; width: 160px">
				<b><i><font face="arial" size="2" color="black">NAMA PERUSAHAAN</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 90px">
				<b><i><font face="arial" size="2" color="black">TGL TERBIT</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 90px">
				<b><i><font face="arial" size="2" color="black">TGL EXPIRE</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 80px">
				<b><i><font face="arial" size="2" color="black">DURASI</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 200px">
				<b><i><font face="arial" size="2" color="black">PENANGGUNG JAWAB</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">VIEW DOC</font></i></b>
			</td>
           </tr>
<?php

	$bulan = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Des');

	for ($i=1; $i <= $jmltdp; $i++)
	{
# query the users table for name and surname 
		$query = "SELECT * FROM perusahaan WHERE ID=" . $perustdpid[$i] . ";";
		$row_cnt = 0;
		$result = mysqli_query($link, $query);
		if ($result) {
 /* determine number of rows result set */
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$namaperus = $row['nama'];
			}
		}

		$warna="black";
		$warna1="blue";
		if ($tglsdtdp[$i] > $saiki30)
			$warna1 = "green";
		else if (($tglsdtdp[$i] < $saiki30) && ($tglsdtdp[$i] >= $saiki))
			$warna1 = "orange";
		else if ($tglsdtdp[$i] < $saiki)
			$warna1 = "red";		
?>
        <tr height="30" <?php if (($i%2)==0) echo 'bgcolor="#bbffd7"'; else echo 'bgcolor="#d7ffe7"';?>>
            <td style="padding-right: auto; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>"><?php print $i;?></font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<input type="hidden" id="perusid" name="perusid" value="<?php print $perid;?>">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $nomortdp[$i];?>
				</font>
			</td>
			<td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $namaperus;?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $tgltdp[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $tglsdtdp[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna1;?>">
					<?php print round((strtotime($tglsdtdp[$i])-strtotime($saiki))/(3600*24));?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $pjtdp[$i];?>
				</font>
			</td>
			<td style="padding-left: auto; text-align: center; font-size: 12;">
<?php
		if (isset($namafiletdp[$i])==false || $namafiletdp[$i]==null || $namafiletdp[$i]=="")
			$namafile[$i] = "nodata.jpg";
?>
				<a href="./DOC/TDP/<?php echo $namafiletdp[$i];?>" target="_blank" class="button green small">View</a>
			</td>    
        </tr>
<?php
	}
?>
    </table>
	<br>
<?php
	
}
	
	
//======================================================================================================
// Check SIUP
//======================================================================================================
	$query = "SELECT * FROM perusahaansiup WHERE tglexpire < '" . $saiki90 . "';";
	$jmlrowsiup = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
		$jmlrowsiup = $result->num_rows;
	}

if ($jmlrowsiup>0)
{
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$idku[$i] = $row['ID'];
		$perusahaanid[$i] = $row['perusahaanID'];
		$nama[$i] = $row['nama'];
		$nomorsiup[$i] = $row['nomor'];
		$namapemilik[$i] = $row['namapemilik'];
		$tgl[$i] = $row['tgl'];
		$tglexpire[$i] = $row['tglexpire'];
		$namafile[$i] = $row['namafile'];
		$lembaga[$i] = $row['kelembagaan'];
		$kegiatan[$i] = $row['kegiatanusaha'];
		$jenis[$i] = $row['jenisusaha'];
	}
}
$jmli = $i;


if ($jmlrowsiup>0)
{
?>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1020px" border="0" cellpadding="0" cellspacing="0">
		<tr height="20px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 30px;">
			</td>
		</tr>
		<tr height="40px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 30px;">
				<b><i><font face="arial" size="3" color="black">SIUP</font></i></b>
			</td>
		</tr>
	</table>
	<br>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1160px" border="1" cellpadding="0" cellspacing="0">
		<tr height="40px" bgcolor="#88eeff"> 
            <td style="padding-left: auto; text-align: center; font-size: 12;  width: 30px;">
				<b><i><font face="arial" size="2" color="black">NO</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">NOMOR SIUP</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">PERUSAHAAN</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">NAMA PEMILIK</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 90px">
				<b><i><font face="arial" size="2" color="black">TGL EXPIRE</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 70px">
				<b><i><font face="arial" size="2" color="black">DURASI</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 90px">
				<b><i><font face="arial" size="2" color="black">TGL TERBIT</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">KELEMBAGAAN</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">KEGIATAN USAHA</font></i></b>
			</td>
           <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">JENIS USAHA</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">VIEW DOC</font></i></b>
			</td>
           </tr>
<?php

	$bulan = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Des');

	for ($i=1; $i <= $jmli; $i++)
	{
# query the users table for name and surname 
		$query = "SELECT * FROM perusahaan WHERE ID=" . $perusahaanid[$i] . ";";
		$row_cnt = 0;
		$result = mysqli_query($link, $query);
		if ($result) {
 /* determine number of rows result set */
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$namaperus = $row['nama'];
			}
		}
		$warna="black";
		if ($tglexpire[$i] > $saiki30)
			$warna1 = "green";
		else if (($tglexpire[$i] < $saiki30) && ($tglexpire[$i] >= $saiki))
			$warna1 = "orange";
		else if ($tglexpire[$i] < $saiki)
			$warna1 = "red";
		
?>
        <tr height="30" <?php if (($i%2)==0) echo 'bgcolor="#bbffd7"'; else echo 'bgcolor="#d7ffe7"';?>>
            <td style="padding-right: auto; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>"><?php print $i;?></font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<input type="hidden" id="perusid" name="perusid" value="<?php print $perid;?>">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $nomorsiup[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<input type="hidden" id="perusid" name="perusid" value="<?php print $perid;?>">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $namaperus;?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $namapemilik[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $tglexpire[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna1;?>">
					<?php print round((strtotime($tglexpire[$i])-strtotime($saiki))/(3600*24));?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $tgl[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $lembaga[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $kegiatan[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<input type="hidden" id="ktpid<?php echo $i;?>" name="ktpid<?php echo $i;?>" value="<?php print $idku[$i];?>">
					<?php print $jenis[$i];?>
				</font>
			</td>
			<td style="padding-left: auto; text-align: center; font-size: 12;">
<?php
		if (isset($namafile[$i])==false || $namafile[$i]==null || $namafile[$i]=="")
			$namafile[$i] = "nodata.jpg";
?>
				<a href="./DOC/SIUP/<?php echo $namafile[$i];?>" target="_blank" class="button green small">View</a>
			</td>    
        </tr>
<?php
	}
	
}
?>
    </table>
	<br>
	
	
<?php
// Check AKTE

//======================================================================================================
// Check SKDP
//======================================================================================================
	$query = "SELECT * FROM perusahaanskdp WHERE tglsd < '" . date('Y-m-d') . "';";
	$jmlrowskdp = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
		$jmlrowskdp = $result->num_rows;
	}
if ($jmlrowskdp > 0)
{
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$idku[$i] = $row['ID'];
		$perusahaanid[$i] = $row['perusahaanID'];
		$nomor[$i] = $row['nomor'];
		$statusbangunan[$i] = $row['statusbangunan'];
		$tgl[$i] = $row['tgl'];
		$tglexpire[$i] = $row['tglsd'];
		$alamat[$i] = $row['alamat'];
	}
}
$jmli = $i;

if ($jmlrowktp>0)
{
?>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1020px" border="0" cellpadding="0" cellspacing="0">
		<tr height="20px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 30px;">
			</td>
		</tr>
		<tr height="40px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 30px;">
				<b><i><font face="arial" size="3" color="black">SKDP</font></i></b>
			</td>
		</tr>
	</table>
	<br>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="820px" border="1" cellpadding="0" cellspacing="0">
		<tr height="40px" bgcolor="#88eeff"> 
            <td style="padding-left: auto; text-align: center; font-size: 12;  width: 30px;">
				<b><i><font face="arial" size="2" color="black">NO</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">NOMOR SKDP</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 200px">
				<b><i><font face="arial" size="2" color="black">NAMA PERUSAHAAN</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">TGL TERBIT</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 90px">
				<b><i><font face="arial" size="2" color="black">TGL EXPIRE</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 90px">
				<b><i><font face="arial" size="2" color="black">DURASI</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">STATUS BANGUNAN</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">VIEW DOC</font></i></b>
			</td>
           </tr>
<?php

	$bulan = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Des');

	for ($i=1; $i <= $jmli; $i++)
	{
# query the users table for name and surname 
		$query = "SELECT * FROM perusahaan WHERE ID=" . $perusahaanid[$i] . ";";
		$row_cnt = 0;
		$result = mysqli_query($link, $query);
		if ($result) {
 /* determine number of rows result set */
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$namaperus = $row['nama'];
			}
		}
		$warna="black";
		if ($tglexpire[$i] > $saiki30)
			$warna1 = "green";
		else if (($tglexpire[$i] < $saiki30) && ($tglexpire[$i] >= $saiki))
			$warna1 = "orange";
		else if ($tglexpire[$i] < $saiki)
			$warna1 = "red";
		
?>
        <tr height="30" <?php if (($i%2)==0) echo 'bgcolor="#bbffd7"'; else echo 'bgcolor="#d7ffe7"';?>>
            <td style="padding-right: auto; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>"><?php print $i;?></font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<input type="hidden" id="perusid" name="perusid" value="<?php print $perid;?>">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $nomor[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<input type="hidden" id="perusid" name="perusid" value="<?php print $perid;?>">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $namaperus;?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $tgl[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $tglexpire[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna1;?>">
					<?php print round((strtotime($tglexpire[$i])-strtotime($saiki))/(3600*24));?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="<?php echo $warna;?>">
					<?php print $statusbangunan[$i];?>
				</font>
			</td>
			<td style="padding-left: auto; text-align: center; font-size: 12;">
<?php
		if (isset($namafile[$i])==false || $namafile[$i]==null || $namafile[$i]=="")
			$namafile[$i] = "nodata.jpg";
?>
				<a href="./DOC/KTP/<?php echo $namafile[$i];?>" target="_blank" class="button green small">View</a>
			</td>    
        </tr>
<?php
	}
	
}
?>
    </table>
	<br>

	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="1020px" border="0" cellpadding="0" cellspacing="0">
		<tr height="30px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 30px;">
			</td>
		</tr>
	</table>
	

<!--p><a href="mailto:drop@destroydrop.com">©2002-2003 Geir Landrö</a></p-->
<br><br>


</body>
<?php

function findexpire($link)
{
// Check KTP
	$query = "SELECT * FROM perusahaanktp WHERE tglexpire < '" . date('Y-m-d') . "';";
	$jmlrowktp = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
		$jmlrowktp = $result->num_rows;
	}

// Check TDP
	$query = "SELECT * FROM perusahaantdp WHERE tglsd < '" . date('Y-m-d') . "';";
	$jmlrowtdp = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
		$jmlrowtdp = $result->num_rows;
	}


// Check SIUP
	$query = "SELECT * FROM perusahaansiup WHERE tglexpire < '" . date('Y-m-d') . "';";
	$jmlrowsiup = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
		$jmlrowsiup = $result->num_rows;
	}


// Check AKTE



// Check SKDP
	$query = "SELECT * FROM perusahaanskdp WHERE tglsd < '" . date('Y-m-d') . "';";
	$jmlrowskdp = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
		$jmlrowskdp = $result->num_rows;
	}
	
	$jmltotal = $jmlrowktp + $jmlrowtdp + $jmlrowsiup + $jmlrowskdp;
	return $jmltotal;
}



//*******************************************************************************************************
	//$_SESSION['userid'] = $userid;
	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;

//*******************************************************************************************************


//*******************************************************************************************************\



?>
</html>