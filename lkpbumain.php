<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title></title>
	<link rel="StyleSheet" href="./dtree.css" type="text/css">
	<script type="text/javascript" src="./dtree.js"></script>


<style>
body {
  margin: 0;
}
.a {
  max-width: 560px;
  background: grey;
}
img {
  width: 100%;
  height: auto
}
iframe {
  max-width: 100vw;
  max-height: 56.25vw;
  /* 315/560 = .5625 */
}
</style>
<style>
html, body, iframe { height: 100%; }
</style>
</head>

<body>
<?php

session_start();

include "koneksi.php";

$now = time(); // Checking the time now when home page starts.

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
//---------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//---------------------------------------------------
if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];
//---------------------------------------------------

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

if (!isset($uname))
{
?>
<script>
window.top.location.href = "index.php"; 
</script>

<?php	
}
$statuslog = 0;
$row_cnt=0;
$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt==0) {
?>
<script>
alert("Data Login/Access anda salah.");
window.top.location.href = "index.php"; 
</script>

<?php
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

?>


<?php
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
<!--meta http-equiv="refresh" content="0; url=index.php" /-->
<?php


?>

<iframe src="menukiri.php?id=<?php echo $userid;?>" name="framekiri" marginheight="0" width="17%" align="top" onLoad="resizer('framekiri');" style="border:none; height: 100%"></iframe>
<iframe src="uploadmain.php?userid=<?php echo $userid;?>" name="mainframe" width="82%" align="top" marginheight="0" frameborder="0" style="border:none;background-image:url(./images/daun1.jpg);height: 100%" allowfullscreen></iframe>

<!--p><a href="mailto:drop@destroydrop.com">©2002-2003 Geir Landrö</a></p-->
                                                  


</body></html>
<?php
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

//*******************************************************************************************************\
function warntglpassword($link, $userid)
{
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
	$jmlrow = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
		$jmlrow = $result->num_rows;
	}
if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$timest1 = $row['timestamp'];
	}
}
$timearr = explode(" ", $timest1);
$mytime = new DateTime($timearr[0]);
$dateku = new DateTime(date('Y-m-d'));
//$bedatgl = date_sub($mytime,$dateku);
//$bedatgl = $dateku->diff($mytime);
//echo $bedatgl->format('%m months');
//echo $beda . "==" . $mytime . "==" . $dateku;
//$newdate = strtotime ( '-3 month' , strtotime ( $date ) ) ;
$datetime1 = date_create($timearr[0]);
$datetime2 = date_create(date('Y-m-d'));
$interval = date_diff($datetime1, $datetime2);
$aa = $interval->format('%m months');

	return $aa;
}


//*******************************************************************************************************
	$_SESSION['userid'] = $userid;
	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['statusmultif'] = 0;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;

//*******************************************************************************************************

?>