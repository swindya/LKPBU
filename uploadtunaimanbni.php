<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Data Invoice</title>
<?php
session_start();

include "koneksi.php";
?>
</head>
<body>

<?php
$uname="";
if (!isset($_GET["username"])) {
	//$uname=$_POST["username"];
}
else
	$uname=$_GET["username"];
//-------------------------------------------------
$pwd="";
if (!isset($_GET["passwd"])) {
	//$pwd=$_POST["passwd"];
}
else
	$pwd=$_POST["passwd"];
//-------------------------------------------------
if (!isset($_POST["userid"])) {
	$userid=$_GET["userid"];
}
else
	$userid=$_POST["userid"];
//-------------------------------------------------
if (!isset($_POST["id"])) {
	$perusid=0;
}
else
	$perusid=$_POST["id"];
//-------------------------------------------------
if (!isset($_POST["nama"])) {
	$nama="";
}
else
	$nama=$_POST["nama"];
//-------------------------------------------------
if (!isset($_POST["tahun"])) {
	$tahun=0;
}
else
	$tahun=$_POST["tahun"];
//-------------------------------------------------
if (!isset($_POST["batch"])) {
	$batch=10;
}
else
	$batch=$_POST["batch"];
//-------------------------------------------------
if (!isset($_POST["nosurat"])) {
	$nosurat=1;
}
else
	$nosurat=$_POST["nosurat"];
//-------------------------------------------------
if (!isset($_POST["sppd"])) {
	$sppd=$_GET["sppd"];
}
else
	$sppd=$_POST["sppd"];
//-------------------------------------------------
if (!isset($_POST["nominal"])) {
	$nominal=0;
}
else
	$nominal=$_POST["nominal"];
//-------------------------------------------------
if (!isset($_POST["datepicker-example1a"])) {
	$tgl=date('Y-m-d');
}
else
	$tgl=$_POST["datepicker-example1a"];
//-------------------------------------------------


//Сheck that we have a file
$valstr = "";
$jmlfile = 0;
$jj=0;
$mm=0;
$statusku = 0;

if ($uname=0 || $pwd=0)
{
?>
<script>
//window.top.location.href = "index.php"; 
</script>
<?php
}
//-------------------------------------------------

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
die();	
}
//---------------------------------------------------------------------------------------------------
// Get user
# query the users table for name and surname 
$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
//echo $query . "<br>";

$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
		$uname = $row['username'];
		$userid = $row['ID'];
	}
}
//---------------------------------------------------------------------------------------------------

//Query dulu...apakah data sudah ada di database
$sql0 = "SELECT * FROM bnitunai WHERE (sppd='" . $sppd . "' AND tahun=" . $tahun . " AND batch=" . $batch . ");";
$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}


if ($row_cnt > 0) {

?>
<script>
alert('Data sudah ada dan terupdate.');
</script>
<?php
}
else if ($row_cnt == 0) {
	$sql0 = "SELECT * FROM bni WHERE (sppd='" . $sppd . "' AND tahun=" . $tahun . " AND batchtahun=" . $batch . 
			" AND jenisbayar='TUN');";
	$jmlrow = 0;
	$result0 = mysqli_query($link, $sql0);
	if ($result0) {
 /* determine number of rows result set */
		$jmlrow = $result0->num_rows;
	}
	if ($jmlrow>0) {
		$i = 0;
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$bniid = $row['ID'];
		}
	}
	$sql = "INSERT INTO bnitunai(perusahaanID, bniID, nama, tahun, batch, sppd, nominal, tglbayar,
			createduser, createddate) VALUES(" . $perusid . "," . $bniid . ",'" . $nama . "'," . $tahun . "," . $batch . ",'" . $sppd . "'," . 
			$nominal . ",'" . $tgl . "'," . $userid . ",now());";
echo $sql . "<br>";;
	$result = mysqli_query($link,$sql);

	$sql0 = "UPDATE bni SET statusbayar=1, tglbayar='" . $tgl . "' WHERE ID=" . $bniid . ";";
	$result0 = mysqli_query($link,$sql0);
	
// Log trail -------------------------------
	$dataku = "BNITUNAI|manual|nama:" . $nama . "|tahun:" . $tahun . "|batch:" . $batch . "|sppd:" . $sppd . "|jml:" . $nominal . 
				"|atasnama:" . $atasnama . "|tglbayar:" . $tgl . "|" . $userid;
	$sql1 = "INSERT INTO mylog (userid, username, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . ",'" . $uname .
			"',now(),'ADD', '" . $dataku . "');";
//echo $sql1 . "<br>";
	$res = mysqli_query($link,$sql1);
//------------------------------------------
	if ($result) {
		echo "Data sudah ditambahkan";
	}
	else
		echo "Data tidak bisa ditambahkan. Mungkin data udah ada. Cek kembali data !";
}
else
	echo "Data tidak bisa ditambahkan. Cek/periksa kembali data !";

mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['start'] = time(); // Taking now logged in time.


?>
<script>
//window.location.href="retur.php?id=<?php echo $perusid;?>&userid=<?php echo $userid;?>&tahun=<?php echo $tahun;?>&batch=<?php echo $batch;?>&noretur=<?php echo $noretur;?>&mysort=nama&statusview=1";
</script>

<meta http-equiv="refresh" content="20; url=tunaiupload.php?id=<?php echo $perusid;?>&userid=<?php echo $userid;?>&tahun=<?php echo $tahun;?>&batch=<?php echo $batch;?>&noretur=<?php echo $noretur;?>&mysort=nama&statusview=1&cari=<?php echo $sppd;?>" />
</body>
</html>