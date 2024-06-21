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
if (!isset($_POST["nama"])) {
	$nama=$_SESSION["nama"];
}
else
	$nama=$_POST["nama"];
//-------------------------------------------------
if (!isset($_POST["tahuna"])) {
	$tahun=$_GET["tahuna"];
}
else
	$tahun=$_POST["tahuna"];
//-------------------------------------------------
if (!isset($_POST["batcha"])) {
	$batch=$_GET["batcha"];
}
else
	$batch=$_POST["batcha"];
//-------------------------------------------------
if (!isset($_POST["nocek"])) {
	$nocek=$_GET["nocek"];
}
else
	$nocek=$_POST["nocek"];
//-------------------------------------------------
if (!isset($_POST["nominal"])) {
	$nominal=0;
}
else
	$nominal=$_POST["nominal"];
//-------------------------------------------------
if (!isset($_POST["datepicker-example1a"])) {
	$tgl=$_SESSION["datepicker-example1a"];
}
else
	$tgl=$_POST["datepicker-example1a"];
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
if (!isset($_POST["nosurat"])) {
	$nosurat=$_GET["nosurat"];
}
else
	$nosurat=$_POST["nosurat"];
//-------------------------------------------------
if (!isset($_POST["biaya"])) {
	$biaya=$_GET["biaya"];
}
else
	$biaya=$_POST["biaya"];
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
$sql0 = "SELECT * FROM gudanggaramsusulan WHERE (nomorcek='" . $nocek . "' AND tahun=" . $tahun . " AND batch=" . $batch . ");";
//echo $sql0 . "<br>";
$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
		$ggsusulidku = $row['ID'];
	}
}

if ($row_cnt == 0) {
	$sql00 = "SELECT * FROM gudanggaram WHERE (nomorcek='" . $nocek . "' AND tahun=" . $tahun . " AND batchtahun=" . $batch . " AND jenisbayar='CEK');";
//echo $sql00 . "<br>";
	$jmlcnt = 0;
	$bniidku = 0;
	$result00 = mysqli_query($link, $sql00);
	if ($result00) {
 /* determine number of rows result set */
		$jmlcnt = $result00->num_rows;
	}
	if ($jmlcnt>0) {
		$i = 0;
		while ($row = mysqli_fetch_array ($result00, MYSQLI_ASSOC)) {
			$ggidku = $row['ID'];
		}
	}	
	
	$sql = "INSERT INTO gudanggaramsusulan(perusahaanID, gudanggaramID, nama, tahun, batch, biaya, nomorcek, nominal, bank, cabang, atasnama, nosurat, tglsusul, norekkd,
			createduser, createddate) VALUES(" . $perusid . "," . $ggidku . ",'" . $nama . "'," . $tahun . "," . $batch . "," . $biaya .
			",'" . $nocek . "','" . $nominal . "','" . $namabank . "','" . $cabang . "','" . $atasnama . "','" . $nosurat . "','"
			. $tgl . "','" . $norek . "'," . $userid . ",now());";
//echo $sql . "<br>";
	$result = mysqli_query($link,$sql);
	
// Log trail -------------------------------
	$dataku = "GUDANGGARAMSUSULAN|nama:" . $nama . "|tahun:" . $tahun . "|batch:" . $batch . "|nomorcek:" . $nocek . "|nominal:" . $nominal . "|bank:" . 
				$namabank . "|cabang:" . $cabang . "|atasnama:" . $atasnama . "|tgl:" . $tgl . "|" . $userid;
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

<meta http-equiv="refresh" content="0; url=susulanupload.php?id=<?php echo $perusid?>&userid=<?php echo $userid?>" />
