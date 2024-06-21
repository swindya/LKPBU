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

if (!isset($_GET["sppd"])) {
	$sppd=$_SESSION["sppd"];
}
else
	$sppd=$_GET["sppd"];

if (!isset($_GET["tahunbuku"])) {
	$tahunbuku=$_SESSION["tahunbuku"];
}
else
	$tahunbuku=$_GET["tahunbuku"];

if (!isset($_GET["batch"])) {
	$batch=$_SESSION["batch"];
}
else
	$batch=$_GET["batch"];

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
		$userid = $row['ID'];
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
<meta http-equiv="refresh" content="0; url=login.php" />
<?php
die;
	}
}
$textout = "";
if(strlen($sppd)>0){
	$sql = "SELECT * FROM telkomdatindo WHERE (perusahaanID=1 AND jenisbayar='TUN' AND tahun=" . $tahunbuku . " AND batchtahun=" . $batch . 
			" AND sppd='" . $sppd . "');";
			$result = mysqli_query($link, $sql);
	if($result) {
		while($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)){
			$nama = $row["nama1"];
			$alamat = $row["alamat1"];
			$nominal = $row["bayar"];
			$textout .= $nama.",".$alamat.",".$nominal;
		}
	} 
	else {
		$textout=" , , ,";
	}
}
echo $textout;
?>