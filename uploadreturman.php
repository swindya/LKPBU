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
if (!isset($_POST["returke"])) {
	$returke=$_SESSION["returke"];
}
else
	$returke=$_POST["returke"];
//-------------------------------------------------
if (!isset($_POST["nama"])) {
	$nama=$_SESSION["nama"];
}
else
	$nama=$_POST["nama"];
//-------------------------------------------------
if (!isset($_POST["tahun"])) {
	$tahun=$_SESSION["tahun"];
}
else
	$tahun=$_POST["tahun"];
//-------------------------------------------------
if (!isset($_POST["batch"])) {
	$batch=$_SESSION["batch"];
}
else
	$batch=$_POST["batch"];
//-------------------------------------------------
if (!isset($_POST["nopay"])) {
	$nopay=$_SESSION["nopay"];
}
else
	$nopay=$_POST["nopay"];
//-------------------------------------------------
if (!isset($_POST["nominal"])) {
	$nominal=$_SESSION["nominal"];
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
if (!isset($_POST["alasan"])) {
	$alasan=$_SESSION["alasan"];
}
else
	$alasan=$_POST["alasan"];
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
if ($returke==1)
	$returstr = " gudanggaramretur1 ";
else if ($returke==2)
	$returstr = " gudanggaramretur2 ";
else if ($returke==3)
	$returstr = " gudanggaramretur3 ";
else if ($returke==4)
	$returstr = " gudanggaramretur4 ";

//Query dulu...apakah data sudah ada di database
$sql0 = "SELECT * FROM" . $returstr . "WHERE (nopay='" . $nopay . "' AND tahun=" . $tahun . " AND batch=" . $batch . ");";
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
	$sql = "INSERT INTO" . $returstr . "(perusahaanID, nama, tahun, batch, nomorpay, nominal, bank, cabang, atasnama, tgl, alasan, 
			createduser, createddate) VALUES(" . $perusid . ",'" . $nama . "'," . $tahun . "," . $batch . ",'" . $nopay . "','" . 
			$nominal . "','" . $namabank . "','" . $cabang . "','" . $atasnama . "','" . $tglentry . "','" . $alasan . "'," .
			$userid . ",now());";
echo $sql . "<br>";;
	$result = mysqli_query($link,$sql);
// Log trail -------------------------------
	$dataku = $returstr . "|" . $nama . "|" . $tahun . "|" . $batch . "|" . $nopay . "|" . $nominal . "|" . $namabank . "|" .
				$cabang . "|" . $atasnama . "|" . $tglentry . "|" . $alasan . "|" . $userid;
	$sql1 = "INSERT INTO mylog (userid, username, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . ",'" . $uname .
			"',now(),'add', '" . $dataku . "');";
echo $sql1 . "<br>";
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

<!--meta http-equiv="refresh" content="0; url=returupload.php?id=<?php echo $perusid?>&userid=<?php echo $userid?>" /-->