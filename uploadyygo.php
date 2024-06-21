<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<script src="jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="./Chosen/chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">

<script src="script.js"></script>

<script src="jquery-1.11.2.min.js"></script>

<link rel="stylesheet" href="./datepicker/public/css/default.css" type="text/css">
<script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>
<link rel="stylesheet" href="./datepicker/public/css/default.css" type="text/css">
<link type="text/css" rel="stylesheet" href="./datepicker/examples/libraries/syntaxhighlighter/public/css/shCoreDefault.css">

<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shCore.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushJScript.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushXML.js"></script>

<link type="text/css" rel="stylesheet" href="barloading1.css">

<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
</style>

<style type="text/css">
	/*this is just to organize the demo checkboxes*/
	label {margin-right:20px;}
</style>

<script type="text/javascript">
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.all();
</script>
<style>
.button, .button:visited {
background-color: #222;
display: inline-block;
padding: 5px 10px 6px;
color: #fff;
text-decoration: none;
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
border-bottom: 1px solid rgba(0,0,0,0.25);
position: relative;
cursor: pointer;
font-family: calibri;
}
.button:hover {
background-color: #111;
color: #fff;
} .button:active {
top: 1px;
} 
.small.button, .small.button:visited {
font-size: 11px
} 
.button, .button:visited,
.medium.button, .medium.button:visited {
font-size: 13px;
font-weight: bold;
line-height: 1;
text-shadow: 0 -1px 1px rgba(0,0,0,0.25); 
} 
.medium.button, .medium.button:visited {
font-size: 14px;
padding: 8px 14px 9px;
} 
.large.button, .large.button:visited {
font-size: 16px;
padding: 10px 16px 12px;
} 
.pink.button, .magenta.button:visited {
background-color: #e22092;
} 
.pink.button:hover {
background-color: #c81e82;
} 
.green.button, .green.button:visited {
background-color: #91bd09;
} 
.green.button:hover {
background-color: #749a02;
} 
.red.button, .red.button:visited {
background-color: #e62727;
}
.red.button:hover {
background-color: #cf2525;
}
.orange.button, .orange.button:visited {
background-color: #ff5c00;
} 
.orange.button:hover {
background-color: #d45500;
}
.blue.button, .blue.button:visited {
background-color: #2981e4;
}
.blue.button:hover {
background-color: #2575cf;
}
.yellow.button, .yellow.button:visited {
background-color: #ffb515;
}
.yellow.button:hover {
background-color: #fc9200;
} 
</style>
<style> 
  .textbox { 
    border: 1px solid #c4c4c4; 
    height: 14px; 
    width: 220px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 4px; 
    box-shadow: 0px 0px 4px #d9d9d9; 
    -moz-box-shadow: 0px 0px 4px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 4px #d9d9d9; 
} 
 
.textbox:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
</style>
<style>
.textboxnarrow { 
    border: 1px solid #c4c4c4; 
    height: 14px; 
    width: 40px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 4px; 
    box-shadow: 0px 0px 4px #d9d9d9; 
    -moz-box-shadow: 0px 0px 4px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 4px #d9d9d9; 
} 
 
.textboxnarrow:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
</style>
<style>
.textboxmid { 
    border: 1px solid #c4c4c4; 
    height: 14px; 
    width: 180px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 4px; 
    box-shadow: 0px 0px 4px #d9d9d9; 
    -moz-box-shadow: 0px 0px 4px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 4px #d9d9d9; 
} 
 
.textboxmid:focus { 
    outline: none; 
    border: 1px solid #c4c4c4; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
} 
 </style>
 <style>
.textboxwide { 
    border: 1px solid #c4c4c4; 
    height: 14px; 
    width: 250px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 4px; 
    box-shadow: 0px 0px 4px #d9d9d9; 
    -moz-box-shadow: 0px 0px 4px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 4px #d9d9d9; 
} 
 
.textboxwide:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
} 
 </style>
 <style> 
  .textboxtgl { 
    border: 1px transparent; 
    height: 14px; 
    width: 90px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 2px; 
    -moz-border-radius: 2px; 
    -webkit-border-radius: 2px; 
    box-shadow: 0px 0px 2px #d9d9d9; 
    -moz-box-shadow: 0px 0px 2px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 2px #d9d9d9; 
} 
 
.textboxtgl:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 2px #7bc1f7; 
    -moz-box-shadow: 0px 0px 2px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 2px #7bc1f7; 
} 
 </style> 
 
 <style>
.verticalhorizontal {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
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
<script>
 	function viewform(forme, aa, bb) {
		//var usermu = document.getElementsByName("username")[0].value;
		//var formus = document.forms[forme].name;
		var formname = "formpajak" + aa;
		//alert(document.forms.forme[bb].name);
		//alert(document.forms.[0]);
		//document.forms[formname].submit();
		window.open("returbayar.php?id=" + aa + "&noretur=" + bb, "_blank");
		//document.forms.submit();
	}
</script>
<script>
function delretur1(aa) {
	//var formename = document.forms.hapusretur1.name;
	//var forme = document.forms[aa];
	//var usermu = document.getElementsByName("nomorreturku")[0].value;
	var con = confirm("Apakah anda yakin akan menghapus data ?");
	if (con == true)
	{
		document.forms["hapusretur1"].submit();
		return true;
	}
	else
	{
		return false;
	}
}
</script>

<script>
function cekdata() {
	//var forme = document.forms[aa];
	var bulan = document.getElementsByName("bulan")[0].value;
	var tahun = document.getElementsByName("tahun")[0].value;
	
	if (bulan == null || bulan == 0 || tahun == null || tahun == 0)
	{
		alert("Lengkapi data lebih dulu");
		return false;
	}
	else {
		document.getElementsByName("statusrun")[0].value = 2;
		document.getElementById('cssload-loader').style.display='inline';
		document.forms["myrun"].submit();
		return true;
	}

}
</script>
<script>
function showDiv(elem){
//alert(elem.value);
	if(elem.value == 1)
		document.getElementById('uploadfile').style.display = "none";
	else if (elem.value == 2)
		document.getElementById('uploadfile').style.display = "block";
}
</script>
<script>
function loadme(){
	document.getElementById('cssload-loader').style.display='block';
}
</script>
</head>
<body OnLoad="loadme();">
<?php
include "koneksi.php";

ini_set('max_execution_time', 6000); //300 seconds = 5 minutes

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
//-------------------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];

//--------------------------------------------------------------------
$tahunku = 0;
if (!isset($_POST["tahun"])) 
	$tahunku = 0;
else
	$tahunku=$_POST["tahun"];
//--------------------------------------------------------------------
$bulanku = 0;
if (!isset($_POST["bulan"])) 
	$bulanku = 0;
else
	$bulanku=$_POST["bulan"];
//--------------------------------------------------------------------
$userid = 0;
if (!isset($_GET["userid"])) {
	$userid=$_POST["userid"];
}
else
	$userid=$_GET["userid"];
//--------------------------------------------------------------------



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

#mysql_connect("localhost",$uname,$pwd);
# query the users table for name and surname 
if ($userid==0 || $userid==null)
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
else 
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
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
<script>
window.top.location.href = "index.php"; 
</script>
<?php
die;
	}
}

if ($row_cnt > 0) {
	$_SESSION['statuslogin'] = 0;
?>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<?php
}
else  {
	$_SESSION['statuslogin'] = 8; //user not found in database or unauthorized
?>
<script>
//window.top.location.href = "index.php"; 
</script>
<?php
}
//--------------------------------------------------------------------
$statusrun = 0;
if (!isset($_POST["statusrun"])) 
	$statusrun = 0;
else
	$statusrun = $_POST["statusrun"];
if ($statusrun==0)
{
	if (!isset($_GET["statusrun"])) 
		$statusrun = 0;
	else
		$statusrun = $_GET["statusrun"];	
}
//--------------------------------------------------------------------


$bulanarr = array('---','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');


?>

	


<?php
if ($statusrun==2)
{

?>

<div id="cssload-loader" class="cssload-preloader">
	<div class="cssload-preloader-box">		<div>L</div>		<div>o</div>		<div>a</div>		<div>d</div>		<div>i</div>		<div>n</div>		<div>g</div></div>
</div>
<?php
//Read Data
//=======================================================================================
// Update APOLLOSECOJK
//=======================================================================================
$sql0 = "UPDATE apollowsecojk SET jenis='TERM NOTES' WHERE jenis='MEDIUM TERM NOTES';";
$result = mysqli_query($link, $sql0);


//=======================================================================================
// Read data apollo
//=======================================================================================
	$row_cnt = 0;
	$i = 0;
	$query = "SELECT * FROM apollow GROUP BY seccode ORDER BY seccode ASC;";
	$result = mysqli_query($link, $query);
	if ($result) {
    $row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$idku[$i] = $row['ID'];
			$scode[$i] = $row['seccode'];
		}
	}
	$jmlcode = $i;
	
	for ($a=1; $a<=$jmlcode; $a++)
	{
//echo "--" . substr($scode[$a],0,12) . "--" . "<br>";
		$sql0 = "UPDATE apollow SET seccode='" . substr($scode[$a],0,12) . "' WHERE ID=" . $idku[$a] . ";";
//echo strlen($scode[$a]) . "--" . $sql0 . "<br>";
		$result0 = mysqli_query($link, $sql0);
	}


	$row_cnt = 0;
	$i = 0;
	$query = "SELECT * FROM apollow GROUP BY seccode ORDER BY seccode ASC;";
	$result = mysqli_query($link, $query);
	if ($result) {
    $row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$idku[$i] = $row['ID'];
			$scode[$i] = $row['seccode'];
		}
	}
	$jmlcode = $i;	
//====================================================================================================
//UPDATE SEC CODE
//====================================================================================================
	for ($a=1; $a<=$jmlcode; $a++)
	{
		$row_cnt = 0;
		$sta = 0;
		$sql1 = "SELECT * FROM apollowisin WHERE isin='" . substr($scode[$a],0,12) . "';";
		$result = mysqli_query($link, $sql1);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			$sta = 1;
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$secode[$a] = trim($row['seccode']);
			}
		}
		if ($sta==1)
		{
			$sql2 = "UPDATE apollow SET seccode='" . $secode[$a] . "' WHERE seccode='" . substr($scode[$a],0,12) . "';";
			$result2 = mysqli_query($link, $sql2);
		}
	}
//====================================================================================================


//=======================================================================================
// Read data apollo
//=======================================================================================
	$row_cnt = 0;
	$i = 0;
	$query = "SELECT * FROM apollow GROUP BY seccode ORDER BY seccode ASC;";
	$result = mysqli_query($link, $query);
	if ($result) {
    $row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$scode[$i] = $row['seccode'];
		}
	}
	$jmlcode = $i;
	
	for ($a=1; $a<=$jmlcode; $a++)
	{
		$scodex[$a] = $scode[$a];
		if (strlen($scode[$a])>12)
		{
			$scodex[$a] = substr($scode[$a],0,12);
		}
	}

//====================================================================================================
//UPDATE SEC CODE
//====================================================================================================
	for ($a=1; $a<=$jmlcode; $a++)
	{
		$row_cnt = 0;
		$sta = 0;
		$isinco[$a] = "";
		$sql1 = "SELECT * FROM apollowisin WHERE seccode='" . $scodex[$a] . "';";
		$result = mysqli_query($link, $sql1);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			$sta = 1;
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$isinco[$a] = trim($row['isin']);
			}
		}
		//if ($sta==1)
		//{
			$sql2 = "UPDATE apollow SET isin='" . $isinco[$a] . "' WHERE seccode='" . $scodex[$a] . "';";
			$result2 = mysqli_query($link, $sql2);
		//}
// Isi 	jenis & kodeissuer
		$row_cnt = 0;
		$jenis[$a] = "";
		$kodeis[$a] = "";
		$kodex[$a] = "";
		$sql1 = "SELECT * FROM apollosecojk WHERE kodeefek='" . $scodex[$a] . "';";
		$result = mysqli_query($link, $sql1);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$jenis[$a] = trim($row['jenis']);
				$kodeis[$a] = trim($row['kodeissuer']);
			}
		}
		if (strlen($jenis[$a])>1)
		{
			$row_cnt = 0;
			$sql1 = "SELECT * FROM apollorefsec WHERE sectype='" . $jenis[$a] . "';";
			$result = mysqli_query($link, $sql1);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$kodex[$a] = trim($row['kode']);
				}
			}
		}
		//if ($sta==1)
		//{
			$sql2 = "UPDATE apollow SET kodetipeefek='" . $kodex[$a] . "', issuercode='" . $kodeis[$a] . 
					"' WHERE seccode='" . $scodex[$a] . "';";
			$result2 = mysqli_query($link, $sql2);
		//}
	}
//====================================================================================================
//READ SEC CODE PER TGL
//====================================================================================================
	$row_cnt = 0;
	$i = 0;
	$query = "SELECT * FROM apollow GROUP BY seccode ORDER BY seccode ASC;";
	$result = mysqli_query($link, $query);
	if ($result) {
    $row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$idku[$i] = $row['ID'];
			$scode[$i] = $row['seccode'];
		}
	}
	$jmlcode = $i;	
//====================================================================================================
	$row_cnt = 0;
	$i = 0;
	$query = "SELECT * FROM apollow GROUP BY tgl ORDER BY tgl ASC;";
	$result = mysqli_query($link, $query);
	if ($result) {
    $row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$idku[$i] = $row['ID'];
			$tglku[$i] = $row['tgl'];
		}
	}
	$jmltgl = $i;	




	for ($a=1; $a<=$jmltgl; $a++)
	{
		$row_cnt = 0;
		$sta = 0;
		$j = 0;
		//$jmltglpercode[$a] = 0;

		for ($b=1; $b<=$jmlcode; $b++)
		{
			$jmlrec[$a][$b] = 0;
			$jmldel[$a][$b] = 0;
			$qtyrec[$a][$b] = 0;
			$qtydel[$a][$b] = 0;
			$netrec[$a][$b] = 0;
			$netdel[$a][$b] = 0;
			$statrec = 0;
			$statdel = 0;
			$currx[$a][$b] = "";
			$j = 0;
			$sql1 = "SELECT * FROM apollow WHERE tgl='" . $tglku[$a] . "' AND seccode='" . $scode[$b] . "' ORDER BY seccode ASC;";
			$result = mysqli_query($link, $sql1);
			if ($result) {
				$row_cnt = $result->num_rows;
			}
			if ($row_cnt>0) {
				while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
					$j++;
					$idx[$a][$b][$j] = $row['ID'];
					$statusx[$a][$b][$j] = $row['statusr'];
					$qtyx[$a][$b][$j] = $row['qty'];
					$kodetex[$a][$b] = $row['kodetipeefek'];
					$issuercodex[$a][$b] = $row['issuercode'];
					$isinx[$a][$b] = $row['isin'];
					$seckode[$a][$b] = $row['seccode'];
					if (strlen($row['curr'])>0)
					{
						$currx[$a][$b] = $row['curr'];
					}
					$amountx[$a][$b][$j] = $row['netamount'];
					if (strpos(strtoupper($statusx[$a][$b][$j]),"RECEIVE")!==false)
					{
						$statrec++;
						$qtyrec[$a][$b] = $qtyrec[$a][$b] + $qtyx[$a][$b][$j];
						$netrec[$a][$b] = $netrec[$a][$b] + $amountx[$a][$b][$j];
					}
					else if (strpos(strtoupper($statusx[$a][$b][$j]),"DELIVER")!==false)
					{
						$statdel++;
						$qtydel[$a][$b] = $qtydel[$a][$b] + $qtyx[$a][$b][$j];
						$netdel[$a][$b] = $netdel[$a][$b] + $amountx[$a][$b][$j];
					}
	//echo $scode[$a] . "--" . $tglx[$a] . "++" . $statusx[$a] . "++" . $qtyx[$a] . "++" . $amountx[$a] . "<br>";
				}
			}
			$jmlaaa[$a][$b] = $j;
			$jmlrec[$a][$b] = $statrec;
			$jmldel[$a][$b] = $statdel;
		}

//echo $scode[$a] . "--" . $jmltglpercode[$a] . "-" . $jmlrec[$a] . "-" . $jmldel[$a] . "<br>";
	}
//====================================================================================================


//Isi Kode Jenis Surat Berharga


$jmldatamain = 1;
	
// Write to Excel

	if ($jmldatamain > 0)
	{
		$tglsaikibul = date("d-M-Y");
		$kodetime = date("Hs");
		//$tahunku = 2021;
		$filenameku = './OUTPUT/LKPBU_PASARMODAL_' . strtoupper($bulanarr[$bulanku]) . "_" . $tahunku . 'v2.xlsx';
		$namafileku = 'LKPBU_PASARMODAL_' . strtoupper($bulanarr[$bulanku]) . "_" . $tahunku . 'v2.xlsx';
	
		set_include_path(get_include_path() . PATH_SEPARATOR . './PHPExcel/Classes/');

/** Error reporting */
		error_reporting(E_ALL);

/** Include path **/
//ini_set('include_path', ini_get('include_path').';../Classes/');

		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';

		$fileType = 'Excel2007';
/*		
		$folder = './OUTPUT';

		if(FALSE !== ($path = folder_exist($folder)))
		{
			//die('Folder ' . $path . ' already exist');
		}
		else {
			mkdir($folder);
		}
*/
		
		if (file_exists($filenameku))
			unlink($filenameku);

// Read the file
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);

		$nm = 'E' . ($jmldatamain+3);
// Change the file
		//$worksheet->setActiveSheetIndex(0)
		$waktux = "AS OF " . $bulanarr[$bulanku] . " " . $tahunku;
		$objPHPExcel->getActiveSheet()->setCellValue('A1', "LKPBU PASAR MODAL");
		$objPHPExcel->getActiveSheet()->setCellValue('A2', $waktux);
		$objPHPExcel->getActiveSheet()->setCellValue('A3', "No");
		$objPHPExcel->getActiveSheet()->setCellValue('B3', 'Kode Komponen');
		$objPHPExcel->getActiveSheet()->setCellValue('C3', 'Tanggal Transaksi');
		$objPHPExcel->getActiveSheet()->setCellValue('D3', 'Kode Tipe Efek');
		$objPHPExcel->getActiveSheet()->setCellValue('E3', 'Keterangan Tipe Efek');
		$objPHPExcel->getActiveSheet()->setCellValue('F3', 'ISIN Code');
		$objPHPExcel->getActiveSheet()->setCellValue('G3', 'Security Name');
		$objPHPExcel->getActiveSheet()->setCellValue('H3', 'Issuer Code');
		$objPHPExcel->getActiveSheet()->setCellValue('I3', 'Issuer Name');
		$objPHPExcel->getActiveSheet()->setCellValue('J3', 'Kode Mata Uang');
		$objPHPExcel->getActiveSheet()->setCellValue('K3', 'Penyelesaian Transaksi Beli -Frekuensi');
		$objPHPExcel->getActiveSheet()->setCellValue('L3', 'Penyelesaian Transaksi Beli -Volume (Unit)');
		$objPHPExcel->getActiveSheet()->setCellValue('M3', 'Penyelesaian Transaksi Beli-Nilai ');
		$objPHPExcel->getActiveSheet()->setCellValue('N3', '% Penyelesaian Transaksi Beli-Investor Indonesia ');
		$objPHPExcel->getActiveSheet()->setCellValue('O3', '% Penyelesaian Transaksi Beli-Investor Asing');
		$objPHPExcel->getActiveSheet()->setCellValue('P3', '% Penyelesaian Transaksi Beli-Konfirmasi Investor Tepat Waktu ');
		$objPHPExcel->getActiveSheet()->setCellValue('Q3', 'Penyelesaian Transaksi Jual-Frekuensi');
		$objPHPExcel->getActiveSheet()->setCellValue('R3', 'Penyelesaian Transaksi Jual-Volume (Unit)');
		$objPHPExcel->getActiveSheet()->setCellValue('S3', 'Penyelesaian Transaksi Jual-Nilai ');
		$objPHPExcel->getActiveSheet()->setCellValue('T3', '% Penyelesaian Transaksi Jual-Investor Indonesia ');
		$objPHPExcel->getActiveSheet()->setCellValue('U3', '% Penyelesaian Transaksi Jual-Investor Asing');
		$objPHPExcel->getActiveSheet()->setCellValue('V3', '% Penyelesaian Transaksi Jual-Konfirmasi Investor Tepat Waktu');
		$objPHPExcel->getActiveSheet()->setCellValue('W3', 'SEC CODE');
		

//Set row height dari header
		$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(35);
		$objPHPExcel->getActiveSheet()->getRowDimension('3')->setRowHeight(25);
//Set lebar kolom
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(18);
		
//Set alignment
		$objPHPExcel->getActiveSheet()->getStyle('A3:V3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		//$objPHPExcel->getActiveSheet()->getStyle('D4:D8000')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		//$objPHPExcel->getActiveSheet()->getStyle('H4:H8000')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//Set warna dari header	
		$objPHPExcel->getActiveSheet()
			->getStyle('A3:V3')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()
			->setARGB('FFFFFF00');
//Set border
		$styleArray = array(
		'borders' => array(
		'allborders' => array(
		'style' => PHPExcel_Style_Border::BORDER_THIN
			)
		));

		$objPHPExcel->getActiveSheet()->getStyle("A3:V3")->applyFromArray($styleArray);
		unset($styleArray);	
//Set FONT HEADER
		$styleArray = array(
			'font'  => array(
			'bold'  => true,
			'color' => array('rgb' => '000000'),
			'size'  => 12,
			'name'  => 'Calibri'
		));
		$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($styleArray);	
//Set FONT DATA
		$styleArray = array(
			'font'  => array(
			'bold'  => false,
			'color' => array('rgb' => '000000'),
			'size'  => 14,
			'name'  => 'Calibri'
		));

		$objPHPExcel->getActiveSheet()->getStyle("A2:C2")->applyFromArray($styleArray);
		$styleArray = array(
			'font'  => array(
			'bold'  => false,
			'color' => array('rgb' => '000000'),
			'size'  => 12,
			'name'  => 'Calibri'
		));
		
//Wrap Text
		$objPHPExcel->getActiveSheet()->getStyle('A3:V3')->getAlignment()->setWrapText(true); 
		
//echo "JmlTotData: " . $jmltotdata . "<br>";

		//$objPHPExcel->getActiveSheet()->getStyle('D4:D8000')->getNumberFormat()->setFormatCode('#,##0');
		//$objPHPExcel->getActiveSheet()->getStyle('H4:H8000')->getNumberFormat()->setFormatCode('#,##0');
		
		//$objPHPExcel->getActiveSheet()->getStyle('E4:E8000')->getNumberFormat()->setFormatCode('#,##0');
		//$objPHPExcel->getActiveSheet()->getStyle('I4:I8000')->getNumberFormat()->setFormatCode('#,##0');

		//$objPHPExcel->getActiveSheet()->getStyle('F4:F8000')->getNumberFormat()->setFormatCode('#,##0.00');
		//$objPHPExcel->getActiveSheet()->getStyle('J4:J8000')->getNumberFormat()->setFormatCode('#,##0.00');
		
		//$objPHPExcel->getActiveSheet()->getStyle('F4:F8000')->getNumberFormat()->setFormatCode('#,##0');
		//$objPHPExcel->getActiveSheet()->getStyle('J4:J8000')->getNumberFormat()->setFormatCode('#,##0');
		
		$p = 0;
		$d = 0;
		for ($n=1; $n<=$jmltgl;$n++) 
		{
//echo $scode[$n] . "<br>";
				for ($p=1; $p<=$jmlcode; $p++)
				{
					if ($jmlrec[$n][$p]>0 || $jmldel[$n][$p]>0)
					{
						$d++;
						$pn3 = $d + 3;
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, $pn3, $d);
						$tglarr = explode("-", $tglku[$n]);
						$tglkux[$n] = $tglarr[0] . $tglarr[1] . $tglarr[2];
						$objPHPExcel->getActiveSheet()->getStyle('B' . $pn3)->getNumberFormat()->setFormatCode('000000000000');
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(1, $pn3, "940101010000");
						//$objPHPExcel->getActiveSheet()->setCellValueExplicit('B' . $pn3, "940101010000");
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(2, $pn3, $tglkux[$n]);
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(3, $pn3, $kodetex[$n][$p]);
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, $pn3, "");
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(5, $pn3, $isinx[$n][$p]);
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(6, $pn3, "");
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(7, $pn3, $issuercodex[$n][$p]);
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(8, $pn3, "");
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(9, $pn3, $currx[$n][$p]);
						if ($jmlrec[$n][$p]==0)
						{
							$jmlrecx = "000000000000";
							$persenbeli = "000";
							$objPHPExcel->getActiveSheet()->getStyle('K' . $pn3)->getNumberFormat()->setFormatCode('000000000000');
							$objPHPExcel->getActiveSheet()->getStyle('N' . $pn3)->getNumberFormat()->setFormatCode('000');
							$objPHPExcel->getActiveSheet()->getStyle('O' . $pn3)->getNumberFormat()->setFormatCode('000');
							$objPHPExcel->getActiveSheet()->getStyle('P' . $pn3)->getNumberFormat()->setFormatCode('000');
							//$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(10, $pn3, strval($jmlrecx), PHPExcel_Cell_DataType::TYPE_STRING);
							//$objPHPExcel->getActiveSheet()->setCellValueExplicit('K' . $pn3, strval($jmlrecx), PHPExcel_Cell_DataType::TYPE_STRING);
							$objPHPExcel->getActiveSheet()->setCellValueExplicit('K' . $pn3, strval($jmlrecx));
							$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(13, $pn3, strval($persenbeli));
							$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(14, $pn3, $persenbeli, PHPExcel_Cell_DataType::TYPE_STRING);
							$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(15, $pn3, $persenbeli, PHPExcel_Cell_DataType::TYPE_STRING);
						}
						else
						{
							$jmlrecx = strval($jmlrec[$n][$p]);
							$persenbeli = '100';
							$objPHPExcel->getActiveSheet()->getStyle('N' . $pn3)->getNumberFormat()->setFormatCode('000');
							$objPHPExcel->getActiveSheet()->getStyle('O' . $pn3)->getNumberFormat()->setFormatCode('000');
							$objPHPExcel->getActiveSheet()->getStyle('P' . $pn3)->getNumberFormat()->setFormatCode('000');
							$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(10, $pn3, $jmlrecx);
							$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(13, $pn3, strval($persenbeli));
							$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(14, $pn3, $persenbeli, PHPExcel_Cell_DataType::TYPE_STRING);
							$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(15, $pn3, $persenbeli, PHPExcel_Cell_DataType::TYPE_STRING);

						}
						if ($qtyrec[$n][$p]==0)
						{
							$qtyrecx = "000000000000";
							$objPHPExcel->getActiveSheet()->getStyle('L' . $pn3)->getNumberFormat()->setFormatCode('000000000000');
							$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(11, $pn3, $qtyrecx, PHPExcel_Cell_DataType::TYPE_STRING);
						}
						else
						{
							//$qtyrecx = number_format($qtyrec[$n][$p],2);
							$qtyrecx = $qtyrec[$n][$p];
							$objPHPExcel->getActiveSheet()->getStyle('L' . $pn3)->getNumberFormat()->setFormatCode('#,##0.00');
							$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(11, $pn3, $qtyrecx);
						}
						
						if ($netrec[$n][$p]==0)
						{
							$netrecx = "000000000000";
							$objPHPExcel->getActiveSheet()->getStyle('M' . $pn3)->getNumberFormat()->setFormatCode('000000000000');
							$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(12, $pn3, $netrecx, PHPExcel_Cell_DataType::TYPE_STRING);
						}
						else
						{
							//$netrecx = number_format($netrec[$n][$p],2);
							$netrecx = $netrec[$n][$p];
							$objPHPExcel->getActiveSheet()->getStyle('M' . $pn3)->getNumberFormat()->setFormatCode('#,##0.00');
							$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(12, $pn3, $netrecx);
						}
//--------------------------------------------						
						if ($jmldel[$n][$p]==0)
						{
							$jmldelx = "000000000000";
							$objPHPExcel->getActiveSheet()->getStyle('Q' . $pn3)->getNumberFormat()->setFormatCode('000000000000');
							$persenjual = "000";
							$objPHPExcel->getActiveSheet()->getStyle('T' . $pn3)->getNumberFormat()->setFormatCode('000');
							$objPHPExcel->getActiveSheet()->getStyle('U' . $pn3)->getNumberFormat()->setFormatCode('000');
							$objPHPExcel->getActiveSheet()->getStyle('V' . $pn3)->getNumberFormat()->setFormatCode('000');
						}
						else
						{
							$jmldelx = $jmldel[$n][$p];
							$persenjual = "100";
						}
						if ($qtydel[$n][$p]==0)
						{
							$qtydelx = "000000000000";
							$objPHPExcel->getActiveSheet()->getStyle('R' . $pn3)->getNumberFormat()->setFormatCode('000000000000');
						}
						else
						{
							$qtydelx = number_format($qtydel[$n][$p],2);
						}
						
						if ($netdel[$n][$p]==0)
						{
							$netdelx = "000000000000";
							$objPHPExcel->getActiveSheet()->getStyle('S' . $pn3)->getNumberFormat()->setFormatCode('000000000000');
						}
						else
						{
							$netdelx = number_format($netdel[$n][$p],2);
						}
						$objPHPExcel->getActiveSheet()->getStyle('K' . $pn3)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
						
						//$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow("K" . $pn3, (string) $jmlrecx);
						
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(16, $pn3, strval($jmldelx));
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(17, $pn3, $qtydelx, PHPExcel_Cell_DataType::TYPE_STRING);
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(18, $pn3, $netdelx, PHPExcel_Cell_DataType::TYPE_STRING);
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(19, $pn3, strval($persenjual));
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(20, $pn3, $persenjual, PHPExcel_Cell_DataType::TYPE_STRING);
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(21, $pn3, $persenjual, PHPExcel_Cell_DataType::TYPE_STRING);
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(22, $pn3, $seckode[$n][$p]);

						//$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, $pn3, $qtyrec[$n][$p], PHPExcel_Cell_DataType::TYPE_STRING);
						
					}
				}
		}
// Write the file
		//$writer = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
		$writer->save($filenameku);		
		
	}


?>
<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="1000px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width:600px">
		</td>
	</tr>
	<tr height="10px">
		<td style="padding-left: 40px; text-align: left; font-size: 12; width:600px">
<?php
		$namafile = $filenameku;
		if (file_exists($filenameku)) {
			//$namafileku = 'LKPBU_PASARMODAL_' . "AGUSTUS" . "_" . $tahunku . 'v2.xlsx';
			//$filenameku = './OUTPUT/LKPBU_PASARMODAL_' . "AGUSTUS" . "_" . $tahunku . '.xlsx';
?>
			<font face="arial" size="2" color="black">
				<a href="<?php echo $namafile;?>" download=<?php echo $namafile;?>><img src="text2.png" /></a>
				<a href=<?php echo $namafile;?> target="_blank"> <?php echo $namafileku;?></a>
			</font>
<?php
		}
?>
		</td>
	</tr>
	<tr height="10px">
		<td style="padding-left: 40px; text-align: left; font-size: 12; width:600px">
<?php
		if (file_exists($filenameku)) {
			//$namafilexlku = 'LKPBU_' . $bulanku . " " . $tahunku . '.xlsx';
?>
			<font face="arial" size="2" color="black">
				<!--a href="<?php echo $filenameku;?>" download=<?php echo $filenameku;?>><img src="text2.png" /></a-->
				<!--a href=<?php echo $filenameku;?> target="_blank"> <?php echo $namafilexlku;?></a-->
			</font>
<?php
		}
?>			
			
			</font>
		</td>
	</tr>
</table>
	
<?php
}
?>
<!--img src="./images/spinnercolor.gif" alt="spinner" class="verticalhorizontal" height="200" width="200"-->



<DIV align="left">
</DIV>

<?php

	//createoutput($perushid, $tahun, $noretur, $batch, $mysort, $link);

?>


  <script src="../jqueryforms/jquery.min.js" type="text/javascript"></script>
  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:12},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>

<br><br>
<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="800px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td></td>
	</tr>
</table>

</body>

</html>

<!--meta http-equiv="refresh" content="0; url=uploadyy.php?userid=<?php echo $userid;?>&statusrun=1" /-->

</body>
<?php
//-------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------
function strright($rightstring, $length) {
  return(substr($rightstring, -$length));
}

//*******************************************************************************************************

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;



//*******************************************************************************************************

?>
</html>