


<?php
session_start();

include('koneksi.php');

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
if (!isset($_POST["perusahaanid"])) {
	$perushid=$_SESSION["perusahaanid"];
}
else
	$perushid=$_POST["perusahaanid"];

if (!isset($_POST["tahun"])) {
	$tahun=$_SESSION["tahun"];
}
else
	$tahun=$_POST["tahun"];	

if($_REQUEST)
{
	$id 	= $_REQUEST['parent_id'];
	$i = 0;
	$query = "select * from perusahaanbatch where perusahaanID = " . $perushid . " AND tahun=" . $id;
	$result = mysqli_query($link, $query);
	$row_cnt = 0;
	$jmlbatch = 0;
	if ($result) {
 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC))
		{
			$jmlbatch = $row['jmlbatch'];
		}
	}
	for ($d=1;$d<=$jmlbatch;$d++) {
		$batarr[$d] = $d;
	}

	$query = "select * from telkomdatindo where perusahaanID = " . $perushid . " AND tahun=" . $id . " ORDER BY batchtahun;";
	$lastbatch = 0;
	$row_cnt = 0;
	$jmlkk = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC))
		{
			$batchku = $row['batchtahun']; 
			if ($lastbatch < $batchku) {
				$i++;
				$batchar[$i] = $batchku;
				unset($batarr[$batchku]);
				$myarray = array_filter($batarr);
				$myarray = array_slice($myarray,0);
			}
			$lastbatch = $batchku;
		}
		$jmlkk = count($batarr);
	}
	$counti = $i;

?>
	
	<select id="batch" class="chosen-select-deselect" style="width:120px;">
	<option value="" selected="selected"></option>
	<?php
	for ($i=1;$i<=$jmlkk;$i++)
	{
	?>
		<option value="<?php echo $myarray[$i-1];?>"><?php echo $myarray[$i-1];?></option>
	<?php
	}?>
	</select>	
	
<?php	
}
?>
