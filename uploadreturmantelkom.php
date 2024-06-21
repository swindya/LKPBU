<?php
session_start();

include "koneksi.php";

if (!isset($_GET["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_GET["username"];
//-------------------------------------------------
if (!isset($_GET["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//-------------------------------------------------
if (!isset($_POST["userid"])) {
	$userid=$_SESSION["userid"];
}
else
	$userid=$_POST["userid"];
//-------------------------------------------------
if (!isset($_POST["perusidi"])) {
	$perusid=0;
}
else
	$perusid=$_POST["perusidi"];
//-------------------------------------------------
if (!isset($_POST["returkea"])) {
	$returke=0;
}
else
	$returke=$_POST["returkea"];
//-------------------------------------------------
if (!isset($_POST["namaa"])) {
	$nama="";
}
else
	$nama=$_POST["namaa"];
//-------------------------------------------------
if (!isset($_POST["tahuna"])) {
	$tahun=0;
}
else
	$tahun=$_POST["tahuna"];
//-------------------------------------------------
if (!isset($_POST["batcha"])) {
	$batch=1;
}
else
	$batch=$_POST["batcha"];
//-------------------------------------------------
if (!isset($_POST["sppda"])) {
	$sppd="";
}
else
	$sppd=$_POST["sppda"];
//-------------------------------------------------
if (!isset($_POST["nosurat"])) {
	$nosurat="";
}
else
	$nosurat=$_POST["nosurat"];
//-------------------------------------------------
if (!isset($_POST["nominala"])) {
	$nominal=0;
}
else
	$nominal=$_POST["nominala"];
//-------------------------------------------------
if (!isset($_POST["datepicker-example1a"])) {
	$tglentry=date('Y-m-d');
}
else
	$tglentry=$_POST["datepicker-example1a"];
//-------------------------------------------------
if (!isset($_POST["namabank"])) {
	$namabank="";
}
else
	$namabank=$_POST["namabank"];
//-------------------------------------------------
if (!isset($_POST["cabang"])) {
	$cabang="";
}
else
	$cabang=$_POST["cabang"];
//-------------------------------------------------
if (!isset($_POST["norekdb"])) {
	$norekdb="";
}
else
	$norekdb=$_POST["norekdb"];
//-------------------------------------------------
if (!isset($_POST["norek"])) {
	$noacc="";
}
else
	$noacc=$_POST["norek"];
//-------------------------------------------------
if (!isset($_POST["norekkd"])) {
	$norekkd="";
}
else
	$norekkd=$_POST["norekkd"];
//-------------------------------------------------
if (!isset($_POST["atasnama"])) {
	$atasnama="";
}
else
	$atasnama=$_POST["atasnama"];
//-------------------------------------------------
if (!isset($_POST["alasan"])) {
	$alasan="";
}
else
	$alasan=$_POST["alasan"];
//-------------------------------------------------
if (!isset($_POST["telkomrid"])) {
	$telretid=0;
}
else
	$telretid=$_POST["telkomrid"];
//-------------------------------------------------
if (!isset($_POST["telkomid"])) {
	$teldatid=0;
}
else
	$teldatid=$_POST["telkomid"];
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
//Cari SPPD
$sql = "SELECT * FROM telkomretur WHERE ID=" . $telretid . ";";
$row_cnt = 0;
$result = mysqli_query($link, $sql);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$sppdku = $row['sppd'];
	}
}
//Query dulu...apakah data sudah ada di database
$sql0 = "SELECT * FROM telkomretur WHERE (tahun=" . $tahun . " AND batch=" . $batch . " AND returke=" . $returke . " AND namabank='" . 
		$namabank . "' AND sppd='" . $sppd . "' AND nominal=" . $nominal . ");";
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
		$returidku = $row['ID'];
	}
}

if ($row_cnt == 0) {
	$sql = "INSERT INTO telkomretur(perusahaanID, telkomdatindoID, nama, tahun, batch, sppd, nosuratdatindo, nosuratbni, 
			nominal, bank, cabang, norekdb, norekkd, atasnama, tgl, alasan, returke, createduser, createddate) VALUES(" . $perusid . 
			"," . $teldatid . ",'" . $nama . "'," . $tahun . "," . $batch . ",'" . $sppd . "','" . $nosuratdatindo . 
			"','" .  $nosuratbni . "'," . $nominal . ",'" . $namabank . "','" . $cabang . "','" . $norekdb . "','" . $norekkd . "','" . 
			$atasnama . "','" . $tglentry . "','" . $alasan . "'," . $returke . "," . $userid . ",now());";
//echo $sql . "<br>";
	$result = mysqli_query($link,$sql);
//-----------------------------------------------------------------------------------------------------------------------------
// Update flag statusretur -> 1
	$sql0 = "UPDATE telkomdatindo SET statusretur=1, statusbayar=0 WHERE ID=" . $teldatid . ";";
	$result0 = mysqli_query($link,$sql0);
/------------------------------------------------------------------------------------------------------------------------------
// Update flag statusnextretur -> 1
	$sql0 = "UPDATE telkomretur SET statusnextretur=1, statusbayar=0 WHERE ID=" . $telretid . ";";
	$result0 = mysqli_query($link,$sql0);
// Log trail ------------------------------------------------------------------------------------------------------------------
	$dataku = "telkomretur" . "|nama:" . $nama . "|th:" . $tahun . "|batch:" . $batch . "|spd:" . $sppd . "|nom:" . $nominal . "|bank:" . 
			$namabank . "|cabang:" . $cabang . "|atasnama:" . $atasnama . "|" . $tglentry . "|alasan:" . $alasan . "|" . $userid;
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
$_SESSION['username'] = $uname;
$_SESSION['passwd'] = $pwd;
$_SESSION['start'] = time(); // Taking now logged in time.

?>

<meta http-equiv="refresh" content="20; url=retur.php?id=<?php echo $perusid?>&userid=<?php echo $userid;?>&noretur=<?php echo $returke;?>" />
