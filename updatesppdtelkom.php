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
<script src="script.js"></script>

</head>
<body>
<?php
include "koneksi.php";

$now = time(); // Checking the time now when home page starts.

?>

<?php


if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
//----------------------------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//----------------------------------------------------------------------
if (!isset($_GET["tahun"])) {
	$tahun=0;
}
else
	$tahun=$_GET["tahun"];
//----------------------------------------------------------------------
if (!isset($_GET["batch"])) {
	$batch=1;
}
else
	$batch=$_GET["batch"];
//----------------------------------------------------------------------
if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];
//----------------------------------------------------------------------
if (!isset($_GET["id"])) {
	$perusid=0;
}
else
	$perusid=$_GET["id"];
//----------------------------------------------------------------------
if (!isset($_GET["noretur"])) {
	$noretur=1;
}
else
	$noretur=$_GET["noretur"];
//----------------------------------------------------------------------
if (!isset($_GET["sort"])) {
	$mysort='nama';
}
else
	$mysort=$_GET["sort"];
//----------------------------------------------------------------------
if (!isset($_GET["cari"])) {
	$cari="";
}
else
	$cari=$_GET["cari"];
//----------------------------------------------------------------------
if (!isset($_GET["sppd"])) {
	$sppd="";
}
else
	$sppd=$_GET["sppd"];
//----------------------------------------------------------------------
if (!isset($_GET["returid"])) {
	$returid="";
}
else
	$returid=$_GET["returid"];
//----------------------------------------------------------------------

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

<?php
}

?>
    </table>
</DIV>

<?php

	$sql = "UPDATE telkomretur SET sppd='" . $sppd . "' WHERE ID=" . $returid;
echo $sql;
	$result = mysqli_query($link, $sql);
	
?>


<br><br>
<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="800px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td></td>
	</tr>
</table>

</body>

<!--meta http-equiv="refresh" content="0; url=tunaiupload.php?id=<?php echo $perusid;?>&userid=<?php echo $userid;?>&tahun=<?php echo $tahun;?>
&batch=<?php echo $batch;?>&noretur=<?php echo $noretur;?>&mysort=<?php echo $mysort;?>&statuscetak=1" /-->

</html>

<?php
//----------------------------------------------------------------------------------------------------
?>
