<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
<!--script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script-->
<script src="script.js"></script>
<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
</style>
 
<script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_polaris',
    radioClass: 'iradio_polaris',
    increaseArea: '-10%' // optional
  });
});
</script>


</head>
<body>
<?php
include "koneksi.php";

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
//----------------------------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//----------------------------------------------------------------------

//----------------------------------------------------------------------
if (!isset($_POST["myid"])) {
	$myid=0;
}
else
	$myid=$_POST["myid"];
//----------------------------------------------------------------------
if (!isset($_POST["useridtrf"])) {
	$userid=0;
}
else
	$userid=$_POST["useridtrf"];
//----------------------------------------------------------------------
if (!isset($_POST["perusidtrf"])) {
	$perusid=0;
}
else
	$perusid=$_POST["perusidtrf"];
//----------------------------------------------------------------------
if (!isset($_POST["tahuntrf"])) {
	$tahun=0;
}
else
	$tahun=$_POST["tahuntrf"];
//----------------------------------------------------------------------
if (!isset($_POST["batchtrf"])) {
	$batch=0;
}
else
	$batch=$_POST["batchtrf"];
//----------------------------------------------------------------------
if (!isset($_POST["sorttrf"])) {
	$mysort="nama";
}
else
	$mysort=$_POST["sorttrf"];
//----------------------------------------------------------------------
if (!isset($_POST["caritrf"])) {
	$cari="";
}
else
	$cari=$_POST["caritrf"];
//----------------------------------------------------------------------
//----------------------------------------------------------------------

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
//print '<br><br><input name="Button" type="Button" onClick="javascript:history.back();return false" value="KEMBALI">&nbsp;&nbsp;&nbsp;' . "\n";

die();
	
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
<script>
window.top.location.href = "index.php"; 
</script>
<?php
die;
	}
}


?>
    </table>
</DIV>


<?php

//	transferbni($userid,$link, $myid);
$tglsaiki = date('Y-m-d');
	
$sql = "UPDATE telkomsusulan SET statustransfer=1, tglbayar='" . $tglsaiki . "' WHERE ID=" . $myid . ";";
$rs = mysqli_query($link, $sql);

//Update tabel Telkomdatindo
$sql = "UPDATE telkomdatindo SET statusbayar=1, statussusulan=1, tglbayar='" . $tglsaiki . "', tglbayar='" . $tglsaiki . "' WHERE ID=" . $myid . ";";
$rs = mysqli_query($link, $sql);


?>


<br><br>
<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="800px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td></td>
	</tr>
</table>

</body>


</html>

<meta http-equiv="refresh" content="0; url=susulan.php?id=<?php echo $perusid;?>&userid=<?php echo $userid;?>&tahun=<?php echo $tahun;?>
	&batch=<?php echo $batch;?>&cari<?php echo $cari;?>&sort=<?php echo $mysort;?>&statusview=1&statuscetak=0" />



<?php
//----------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------

function transferbni($userid,$link, $myid)
{
//Find the total number of data provided perusahaanid and tahun buku
	
	$sql = "UPDATE bnisusulan SET statustransfer=1 WHERE ID=" . $myid . ";";
//echo $sql;
	$rs = mysqli_query($link, $sql);
	
	
/*	
	$jmlr = 0;
	$i = 0;
	if ($rs) {
		$jmlr = $rs->num_rows;
	}
	if ($jmlr > 0) {
		while ($row = mysqli_fetch_array ($rs, MYSQLI_ASSOC)) {
			$i++;
			$namaku[$i] = $row['nama'];
			$sppdku[$i] = $row['sppd'];
			$norekku[$i] = $row['norekkd'];
			$bankku[$i] = $row['bank'];
			$nominalku[$i] = $row['nominal'];	
		}
	}
*/
	
}


//----------------------------------------------------------------------------------------------------

?>

<?php

//*******************************************************************************************************


//*******************************************************************************************************

?>