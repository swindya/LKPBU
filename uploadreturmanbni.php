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
if (!isset($_POST["returke"])) {
	$noretur=10;
}
else
	$noretur=$_POST["returke"];
//-------------------------------------------------
if (!isset($_POST["nama"])) {
	$nama="";
}
else
	$nama=$_POST["nama"];
//-------------------------------------------------
if (!isset($_POST["tahuna"])) {
	$tahun=0;
}
else
	$tahun=$_POST["tahuna"];
//-------------------------------------------------
if (!isset($_POST["batcha"])) {
	$batch=10;
}
else
	$batch=$_POST["batcha"];
//-------------------------------------------------
if (!isset($_POST["returke"])) {
	$noretur=1;
}
else
	$noretur=$_POST["returke"];
//-------------------------------------------------
if (!isset($_POST["sppd"])) {
	$sppd=$_GET["sppd"];
}
else
	$sppd=$_POST["sppd"];
//-------------------------------------------------
if (!isset($_POST["nosurat"])) {
	$nosurat=$_GET["nosurat"];
}
else
	$nosurat=$_POST["nosurat"];
//-------------------------------------------------
if (!isset($_POST["nominal"])) {
	$nominal=0;
}
else
	$nominal=$_POST["nominal"];
//-------------------------------------------------
if (!isset($_POST["datepicker-example1a"])) {
	$tglentry=date('Y-m-d');
}
else
	$tglentry=$_POST["datepicker-example1a"];
//-------------------------------------------------
if (!isset($_POST["namabank"])) {
	$namabank=$_GET["namabank"];
}
else
	$namabank=$_POST["namabank"];
//-------------------------------------------------
if (!isset($_POST["cabang"])) {
	$cabang=$_GET["cabang"];
}
else
	$cabang=$_POST["cabang"];
//-------------------------------------------------
if (!isset($_POST["norek"])) {
	$norek=$_GET["norek"];
}
else
	$norek=$_POST["norek"];
//-------------------------------------------------
if (!isset($_POST["atasnama"])) {
	$atasnama=$_GET["atasnama"];
}
else
	$atasnama=$_POST["atasnama"];
//-------------------------------------------------
if (!isset($_POST["alasan"])) {
	$alasan=$_GET["alasan"];
}
else
	$alasan=$_POST["alasan"];
//-------------------------------------------------
if (!isset($_POST["bnirid"])) {
	$bnirid=0;
}
else
	$bnirid=$_POST["bnirid"];
//-------------------------------------------------
if (!isset($_POST["bniid"])) {
	$bniid=0;
}
else
	$bniid=$_POST["bniid"];
//-------------------------------------------------
if (!isset($_POST["bnirid"])) {
	$telretid=0;
}
else
	$telretid=$_POST["bnirid"];
//-------------------------------------------------
if (!isset($_POST["bniid"])) {
	$teldatid=0;
}
else
	$teldatid=$_POST["bniid"];
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
$sql0 = "SELECT * FROM bniretur WHERE (sppd='" . $sppd . "' AND returke=" . $noretur . " AND tahun=" . $tahun . 
		" AND nominal=" . $nominal . " AND batch=" . $batch . ");";
//echo $sql0 . "<br>";
$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$bnirid = $row['ID'];
		$bniid = $row['bniID'];
	}
}

if ($row_cnt > 0) {

?>
<script>
alert('Data sudah ada dan terupdate.');
</script>
<?php
}
else if ($row_cnt == 0) {
	$sql0 = "SELECT * FROM bni WHERE (sppd='" . $sppd . "' AND tahun=" . $tahun . 
			" AND nominal=" . $nominal . " AND batchtahun=" . $batch . " AND jenisbayar='TRF');";
//echo $sql0 . "<br>";
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
	$sql = "INSERT INTO bniretur(perusahaanID, bniID, nama, tahun, batch, sppd, nominal, bank, nosuratbni, cabang, atasnama, tgl, alasan, returke, noacc,
			createduser, createddate) VALUES(" . $perusid . "," . $bniid . ",'" . $nama . "'," . $tahun . "," . $batch . ",'" . $sppd . "'," . 
			$nominal . ",'" . $namabank . "','" . $nosurat . "','" . $cabang . "','" . $atasnama . "','" . $tglentry . "','" . $alasan . "'," .
			$noretur . ",'" . $norek . "'," . $userid . ",now());";
//echo $sql . "<br>";;
	$result = mysqli_query($link,$sql);

	$sql0 = "UPDATE bni SET statusretur=1 WHERE ID=" . $bniid . ";";
	$result0 = mysqli_query($link,$sql0);
	
// Log trail -------------------------------
	$dataku = "RETUR|manual|nama:" . $nama . "|tahun:" . $tahun . "|batch:" . $batch . "|retur ke:" . $noretur . "|jml:" . $nominal . "|bank:" . $namabank . "|" .
				$cabang . "|" . $atasnama . "|" . $tglentry . "|alasan:" . $alasan . "|" . $userid;
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

<meta http-equiv="refresh" content="0; url=retur.php?id=<?php echo $perusid;?>&userid=<?php echo $userid;?>&tahun=<?php echo $tahun;?>&batch=<?php echo $batch;?>&noretur=<?php echo $noretur;?>&mysort=nama&statusview=1&cari=<?php echo $sppd;?>" />
</body>
</html>