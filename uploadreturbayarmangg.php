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
if (!isset($_POST["id"])) {
	$perusid=0;
}
else
	$perusid=$_POST["id"];
//-------------------------------------------------
if (!isset($_POST["returkea"])) {
	$returke=$_SESSION["returkea"];
}
else
	$returke=$_POST["returkea"];
//-------------------------------------------------
if (!isset($_POST["namaa"])) {
	$nama=$_SESSION["namaa"];
}
else
	$nama=$_POST["namaa"];
//-------------------------------------------------
if (!isset($_POST["tahuna"])) {
	$tahun=$_SESSION["tahuna"];
}
else
	$tahun=$_POST["tahuna"];
//-------------------------------------------------
if (!isset($_POST["batcha"])) {
	$batch=$_SESSION["batcha"];
}
else
	$batch=$_POST["batcha"];
//-------------------------------------------------
if (!isset($_POST["nopay"])) {
	$nopay="";
}
else
	$nopay=$_POST["nopay"];
//-------------------------------------------------
if (!isset($_POST["norek"])) {
	$norek=$_SESSION["norek"];
}
else
	$norek=$_POST["norek"];
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
	$namabank=$_SESSION["namabank"];
}
else
	$namabank=$_POST["namabank"];
//-------------------------------------------------
if (!isset($_POST["cabang"])) {
	$cabang=$_SESSION["cabang"];
}
else
	$cabang=$_POST["cabang"];
//-------------------------------------------------
if (!isset($_POST["atasnama"])) {
	$atasnama=$_SESSION["atasnama"];
}
else
	$atasnama=$_POST["atasnama"];
//-------------------------------------------------
if (!isset($_POST["biaya"])) {
	$biaya=$_SESSION["biaya"];
}
else
	$biaya=$_POST["biaya"];
//-------------------------------------------------
if (!isset($_POST["cari"])) {
	$cari="";
}
else
	$cari=$_POST["cari"];
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
$sql0 = "SELECT * FROM gudanggaramreturbayar WHERE (returke=" . $returke . " AND tahun=" . $tahun . " AND batch=" . $batch . 
		" AND noacc='" . $norek . "' AND nominal=" . $nominal . ");";
echo $sql0 . "<br>";
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
//echo $row_cnt . "<br>";
if ($row_cnt == 0) {
	$sql = "INSERT INTO gudanggaramreturbayar (perusahaanID, nama, tahun, batch, nosurat, noacc, nominal, bank, cabang, atasnama, tgl, biaya, 
			createduser, createddate) VALUES(" . $perusid . ",'" . $nama . "'," . $tahun . "," . $batch . ",'" . $nopay . "','" . $norek . "'," .  
			$nominal . ",'" . $namabank . "','" . $cabang . "','" . $atasnama . "','" . $tglentry . "'," . $biaya . "," .
			$userid . ",now());";
echo $sql . "<br>";
	$result = mysqli_query($link,$sql);
	
// Log trail -------------------------------
	$dataku = "GUDANGGARAMRETURBAYAR|tahun:" . $tahun . "|batch:" . $batch . "nosurat:|" . $nopay . "|nominal:" . $nominal . "|bank:" . $namabank . "|cabang:" .
				$cabang . "|" . $atasnama . "|" . $tglentry . "|biaya:" . $biaya . "|" . $userid;
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

<meta http-equiv="refresh" content="0; url=retur.php?id=<?php echo $perusid?>&userid=<?php echo $userid?>&tahun=<?php echo $tahun;?>
		&batch=<?php echo $batch;?>&cari=<?php echo $cari;?>" />
