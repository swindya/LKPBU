<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<link href="stylemenuhoriz.css" rel="stylesheet" />
<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include "koneksi.php";

if (!isset($_GET["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_GET["username"];
//---------------------------------------------------------------------------------------
if (!isset($_GET["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//---------------------------------------------------------------------------------------
if (!isset($_POST["kodekliring"])) {
	$kodekliring=$_SESSION["kodekliring"];
}
else
	$kodekliring=$_POST["kodekliring"];
//---------------------------------------------------------------------------------------
if (!isset($_POST["namabank"])) {
	$namabank=$_SESSION["namabank"];
}
else
	$namabank=$_POST["namabank"];
//---------------------------------------------------------------------------------------
if (!isset($_POST["jenisusaha"])) {
	$jenisusaha=$_SESSION["jenisusaha"];
}
else
	$jenisusaha=$_POST["jenisusaha"];
//---------------------------------------------------------------------------------------
if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];
//---------------------------------------------------------------------------------------

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


//Query dulu...apakah data sudah ada di database
$sql0 = "SELECT * FROM kodekliring WHERE (kode='" . $kodekliring . "' AND namabank='" . $namabank . "');";

$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}
echo $row_cnt;
if ($row_cnt == 0) {
	$sql = "INSERT INTO kodekliring (kode, namabank, jenisusaha) VALUES('" . $kodekliring . "','" . $namabank . "'," .
			$jenisusaha . ");";
	$result = mysqli_query($link,$sql);
}


mysqli_close($link);

?>

<meta http-equiv="refresh" content="0; url=settingbank.php?userid=<?php echo $userid;?>" />
</body>
</html>