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
if (!isset($_POST["nama"])) {
	$nama=$_SESSION["nama"];
}
else
	$nama=$_POST["nama"];
//-------------------------------------------------
if (!isset($_POST["jenis"])) {
	$jenis=0;
}
else
	$jenis=$_POST["jenis"];
//-------------------------------------------------
if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];
//-------------------------------------------------
if (!isset($_POST["mauapa"])) {
	$mauapa=0;
}
else
	$mauapa=$_POST["mauapa"];
//-------------------------------------------------

if ($uname=0 || $pwd=0)
{
?>
<script>
window.top.location.href = "index.php"; 
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
		$userid = $row['ID'];
	}
}
//---------------------------------------------------------------------------------------------------

//Query dulu...apakah data sudah ada di database
$sql0 = "SELECT * FROM perusahaan WHERE (nama='" . $nama . "');";

$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}


if ($row_cnt == 0) {
	$sql = "INSERT INTO perusahaan (nama, jenisusaha, mauapa, createduser, createddate) VALUES('" . $nama . "','" . $jenis . "'," . 
			$mauapa . "," . $userid . ",now());";
//echo $sql;
	$result = mysqli_query($link,$sql);
	
	$sql0 = "SELECT * FROM perusahaan WHERE(nama='" . $nama . "');";
	$result0 = mysqli_query($link,$sql0);
	if ($result0) {
 /* determine number of rows result set */
		$jmlr = $result0->num_rows;
	}
	if ($jmlr>0) {
		$i = 0;
		while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
			$perid = $row['ID'];
		}
/*
		$sql00 = "INSERT INTO perusahaanakte(perusahaanID, createduser, createddate) VALUES(" . $perid . "," . $userid . ", now())";
		$result00 = mysqli_query($link,$sql00);

		$sql00 = "INSERT INTO perusahaanfee(perusahaanID, createduser, createddate) VALUES(" . $perid . "," . $userid . ", now())";
		$result00 = mysqli_query($link,$sql00);
		
		$sql00 = "INSERT INTO perusahaanhk(perusahaanID, createduser, createddate) VALUES(" . $perid . "," . $userid . ", now())";
		$result00 = mysqli_query($link,$sql00);
		
		$sql00 = "INSERT INTO perusahaanlainlain(perusahaanID, createduser, createddate) VALUES(" . $perid . "," . $userid . ", now())";
		$result00 = mysqli_query($link,$sql00);
		
		$sql00 = "INSERT INTO perusahaannpwp(perusahaanID, createduser, createddate) VALUES(" . $perid . "," . $userid . ", now())";
		$result00 = mysqli_query($link,$sql00);
		
		$sql00 = "INSERT INTO perusahaanoutstanding(perusahaanID, createduser, createddate) VALUES(" . $perid . "," . $userid . ", now())";
		$result00 = mysqli_query($link,$sql00);
		
		$sql00 = "INSERT INTO perusahaanpengesahan(perusahaanID, createduser, createddate) VALUES(" . $perid . "," . $userid . ", now())";
		$result00 = mysqli_query($link,$sql00);
		
		$sql00 = "INSERT INTO perusahaanpic(perusahaanID, createduser, createddate) VALUES(" . $perid . "," . $userid . ", now())";
		$result00 = mysqli_query($link,$sql00);
		
		$sql00 = "INSERT INTO perusahaansiup(perusahaanID, createduser, createddate) VALUES(" . $perid . "," . $userid . ", now())";
		$result00 = mysqli_query($link,$sql00);
		
		$sql00 = "INSERT INTO perusahaanskdp(perusahaanID, createduser, createddate) VALUES(" . $perid . "," . $userid . ", now())";
		$result00 = mysqli_query($link,$sql00);
		
		$sql00 = "INSERT INTO perusahaantdp(perusahaanID, createduser, createddate) VALUES(" . $perid . "," . $userid . ", now())";
		$result00 = mysqli_query($link,$sql00);
*/
	}
	
// Log trail -------------------------------
	$sql1 = "INSERT INTO mylog (userid, username, perusahaanID, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . ",'" . $uname .
			"'," . $perid . ",now(),'ADD', 'perusahaan|" . $nama . "|" . $jenis . "|" . $mauapa . "');";
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

if ($mauapa == 2) {
}

mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['username'] = $uname;
$_SESSION['passwd'] = $pwd;
$_SESSION['start'] = time(); // Taking now logged in time.

?>
<script>
//window.frames['framekiri'].location.reload();
//window.location.reload();
parent.framekiri.location.reload();
//parent.framekiri.location = "menukiri.php?userid=<?php echo $userid;?>";
</script>
<!--meta http-equiv="refresh" content="0 ; url=menukiri.php" target="framekiri">
<meta http-equiv="refresh" content="0; url=perusahaan.php" target="mainframe"-->
<meta http-equiv="refresh" content="0; url=perusahaan.php?userid=<?php echo $userid;?>" />
