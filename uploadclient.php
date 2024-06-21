<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Data Invoice</title>
<?php

session_start();

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
<script>
window.top.location.href = "index.php"; 
</script>
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
</head>
<body>
<?php



ini_set('max_execution_time', 8000); //300 seconds = 5 minutes
//ini_set("memory_limit","512M");

if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];
//-----------------------------------------------------------------
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
if (!isset($_POST["hid"])) {
	$idku=0;
}
else
	$idku=$_POST["hid"];

//----------------------------------------------------
if (!isset($_POST["fullname"])) {
	$fullname="";
}
else
	$fullname=$_POST["fullname"];
//----------------------------------------------------
if (!isset($_POST["shortname"])) {
	$shortname="";
}
else
	$shortname=$_POST["shortname"];
//----------------------------------------------------
if (!isset($_POST["tipe"])) {
	$tipe="";
}
else
	$tipe=$_POST["tipe"];
//----------------------------------------------------
if (!isset($_POST["sandigolongan"])) {
	$sandigolongan=0;
}
else
	$sandigolongan=$_POST["sandigolongan"];
//----------------------------------------------------
if (!isset($_POST["sandipemilik"])) {
	$sandipemilik="";
}
else
	$sandipemilik=$_POST["sandipemilik"];
//----------------------------------------------------
//----------------------------------------------------

//$portofolio = $program . "-" . $portofolio;


//Get userID
	$sqla = "SELECT * FROM user WHERE username='" . $uname . "';";
	$resa = mysqli_query($link, $sqla);
	$jmlrowa = 0;
	if ($resa) {
		$jmlrowa = $resa->num_rows;
	}
	if ($jmlrowa > 0) {
		while ($rowa = mysqli_fetch_array ($resa, MYSQLI_ASSOC)) {
			$userid = $rowa['ID'];
		}
	}

	$statusdata = 0;

	$sql01 = "INSERT INTO client (shortname,fullname,tipeinvestor,sandigolongan,sandipemilik,createduser) VALUES('" . $shortname . "','" . $fullname . "','" . $tipe . 
				"','" . $sandigolongan . "','" . $sandipemilik . "'," . $userid . ");";
echo $sql01;
	$result01 = mysqli_query($link, $sql01);

	
	if ($result01) {
?>
<script>
	alert("Data sudah masuk");
</script>
<?php
		}



mysqli_close($link);
$_SESSION['start'] = time(); // Taking now logged in time.

?>
<meta http-equiv="refresh" content="10; url=viewclient.php?userid=<?php echo $userid;?>" />

<?php

//*****************************************************************************************
//********************************** F U N C T I O N S  ***********************************
//*****************************************************************************************
//
//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------
function cekascii($mystring)
{
	$mylen = strlen($mystring);
	$i=0;
	$finalstr = "";
	$noteme = "";
	while ($i < $mylen)
	{
		if ((ord($mystring{$i})>57) || (ord($mystring{$i})<48)) {
			$noteme = "LETTER";
		}
		else {
			$finalstr = $finalstr . $mystring{$i};
		}
		$i++;
	}
	$myout = $finalstr;
	return $myout;
}

//---------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------

?>
</body> 

<?php

//*******************************************************************************************************
	$_SESSION['userid'] = $userid;
	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	//$_SESSION['perusahaanid'] = $perushid;
	//$_SESSION['namaperusahaan'] = $namaperus;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;



//*******************************************************************************************************

?>
</html>