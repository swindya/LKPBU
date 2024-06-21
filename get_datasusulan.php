<?php
include('koneksi.php');
$link = mysqli_connect($db_hostname, $db_username, $db_password);
$db_selected = mysqli_select_db($link, $db_database);
$_POST['tahunbuku'] = 2014;
if ($_POST['sppd'])
{
	$id=$_POST['sppd'];
	$que = "SELECT * FROM telkomdatindo WHERE (perusahaanID=1 AND jenisbayar='TUN' AND tahun=" . $id . ");";
	$row_cnt = 0;
	$result = mysqli_query($link, $que);
	if ($result) {
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		$i = 0;
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$idku = $row['ID'];
			$namaku = $row['nama1'];
?>
        <option value="<?php echo $idku;?>"><?php echo $namaku;?></option>
<?php
		}
	}
}
?>