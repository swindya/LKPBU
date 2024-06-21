<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="shortcut icon" href="logobnilogo.jpg" />
	<title></title>
	<link rel="StyleSheet" href="./dtree.css" type="text/css">
	<script type="text/javascript" src="./dtree.js"></script>
	<style type="text/css"> 
 
body { 
background-image: url("./images/bg.jpg"); 
background-repeat: repeat; 
height: 550px; 
width: 230px; 
} 

</style>
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

$userid = clearnumber($userid);

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

$namaku = "";
#mysql_connect("localhost",$uname,$pwd);
if ($userid == 0)
{
# query the users table for name and surname 
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
}
else
{
# query the users table for name and surname 
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
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
		$uname = $row['username'];
		$pwd = $row['passwd'];
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


?>

<DIV align="left">
	<table align="left" style="text-align: right; margin-left: 10px; margin-right: auto; margin-top: 0px;" width="200px" border="0" cellpadding="0" cellspacing="0">
        <tr style="height: 20px"> 
            <!--td style="padding-left: 100px; text-align: right; font-size: 12; width: 20px">
				<span title="User Login"><a href="" target=""><img src="./img/user3a.png" height="16" width="16" align="right"></a></span>
			</td-->
            <td style="vertical-align: middle; padding-left: 0px; text-align: left; width: 200px">
				<font size="1" face="Tahoma" color="black">Selamat datang, &nbsp;</font>
				<span title="User Login"><a href="" target=""><img src="./img/user3a.png" height="16" width="16"></a>
				<font face="arial" color="blue">&nbsp;</font>
				<i><font size="1" face="arial" color="blue">
				<?php print $namaku;?></font></i>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</span>
			</td>
        </tr>
	</table>
</DIV>

<br><br>

<div class="dtree">

<script type="text/javascript">
		
		d = new dTree('d');

		d.add(0,-1,' APLIKASI LKPBU');

//-------------------------------------------------------------------------------------------
// PERUSAHAAN -----------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
		d.add(1,0,'APOLO BANK UMUM','','Data Perusahaan','mainframe');
		//d.add(2,1,'Main','uploadmain.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah File Data Bulanan','mainframe','./img/upload1.png');
		//d.add(3,1,'Clients','uploadclient.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah File Client','mainframe','./img/upload1.png');
		//d.add(4,1,'Equity','uploadequity.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah File Equity','mainframe','./img/upload1.png');
		//d.add(5,1,'Bond','uploadbond.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah File Bond','mainframe','./img/upload1.png');
		d.add(6,1,'Upload Files','uploadallfiles.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah Semua File','mainframe','./img/upload1.png');
		//d.add(7,1,'View Data','viewdata.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah Semua File','mainframe','./img/upload1.png');
		d.add(9,1,'Create Report','runbu.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Expired Date','mainframe','./img/people.png');
		//d.add(4,1,'Upload Rekon (PEP)','pendingjobs.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Expired Date','mainframe','./img/sandclock16.png');

		d.add(20,0,'AKTIVITAS BK','','Data Perusahaan','mainframe');
		d.add(21,20,'Upload File','uploadallfilesbk.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah Semua File','mainframe','./img/upload1.png');
		d.add(22,20,'Proses & Output Report','runbk.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Expired Date','mainframe','./img/people.png');

		d.add(25,0,'APOLO PASAR MODAL','','Data Perusahaan','mainframe');
		//d.add(2,1,'Main','uploadmain.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah File Data Bulanan','mainframe','./img/upload1.png');
		//d.add(3,1,'Clients','uploadclient.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah File Client','mainframe','./img/upload1.png');
		//d.add(4,1,'Equity','uploadequity.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah File Equity','mainframe','./img/upload1.png');
		//d.add(5,1,'Bond','uploadbond.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah File Bond','mainframe','./img/upload1.png');
		d.add(26,25,'Upload File','uploadpasarmodal.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah Semua File','mainframe','./img/upload1.png');
		//d.add(27,25,'Create Report 1','uploadx.php?id=<?php echo "";?>&userid=<?php echo $userid;?>&statusrun=1','Unggah Semua File','mainframe','./img/upload1.png');
		d.add(28,25,'Create Report OJK','uploadyy.php?id=<?php echo "";?>&userid=<?php echo $userid;?>&statusrun=1','Unggah Semua File','mainframe','./img/upload1.png');
		//d.add(7,1,'View Data','viewdata.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Unggah Semua File','mainframe','./img/upload1.png');

		d.add(31,0,'User','mainuser.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Expired Date','mainframe','./img/people.png');
		d.add(40,0,'LOGOUT','logout.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Setting Parameters','mainframe','./img/logout1.png');

		d.add(45,0,'BACKUP','backupdata.php?id=<?php echo "";?>&userid=<?php echo $userid;?>','Simpan Database','mainframe','./img/backup1.png');

		document.write(d);

		
</script>


<!--p><a href="mailto:drop@destroydrop.com">©2002-2003 Geir Landrö</a></p-->
<br><br>


</body>
<?php

//*******************************************************************************************************
	//$_SESSION['userid'] = $userid;
	//$_SESSION['username'] = $uname;
	//$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;

//*******************************************************************************************************


//*******************************************************************************************************\
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

function clearnumber ($strku)
{
	$aa = strlen($strku);
	$strfinal = "";
	for ($i=0;$i<=$aa;$i++)
	{
		$bstr = substr($strku,$i,1);
		if (ord($bstr)>47 && ord($bstr)<58)
			$strfinal = $strfinal . $bstr;
	}
	return $strfinal;
}

?>
</html>