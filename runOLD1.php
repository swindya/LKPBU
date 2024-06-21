<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php
session_start();
?>
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
	document.getElementById('cssload-loader').style.display='none';
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
$statusrun = 0;
if (!isset($_POST["statusrun"])) 
	$statusrun = $_GET["statusrun"];
else
	$statusrun = $_POST["statusrun"];
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

$bulan = array('---','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');


if ($statusrun==1)
{


}



?>

<br>
	<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="1000px" border="0" cellpadding="2" cellspacing="0">
          <tr style="height:20px;"> 
            <td style="padding-left: 40px; text-align: left; height: 20px">
				<font face="Verdana,Arial" color="black" size="5"><b>
					PROSES LAPORAN
				</b></font>
			</td>
          </tr>
		<tr height="10px">
			<td align="left" style="padding-left: 30px; padding-top: 10px; text-align: left; font-size: 12;">
				<img style="padding-left: 10px;" align="left" src="./img/line1.png" height="5px" width="800px">
			</td>
		</tr>
    </table>

<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="1000px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width:300px">
		</td>
	</tr>
	<tr height="10px">
		<td style="padding-left: 40px; text-align: left; font-size: 12; width:300px">
			<font face="arial" size="3" color="black"><b></b></font>
		</td>
	</tr>
</table>
	

<table style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="900px" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td style="vertical-align: top; padding-left: auto; padding-top: 0; text-align: left; font-size: 12; width:700px">
	<form name="myrun" id="myrun" action="" method="post" enctype="multipart/form-data">
		<table style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: auto;" width="800px" border="0" cellspacing="0" cellpadding="0">
			<thead>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11; width: 600px">
						<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
						<input type="hidden" id="statusrun" name="statusrun" value="1">
					</td>
				</tr>
			</thead>
			<tbody>
				<tr height="10px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
					</td>
				</tr>


				<tr height="40px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
						<b><font face="arial" color="black" size="3">Periode Data :</font></b>
					</td>
				</tr>
				<tr height="10px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
						
					</td>
				</tr>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
						<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="330px" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td style="padding-left: auto; text-align: left; width: 150px">
									<font size="3" face="arial" color="black">
									<select id="bulan" name="bulan" class="chosen-select" style="width:130px;">
<?php
										for ($k=1; $k<=12; $k++) {
?>
											<option value="<?php echo $k;?>"><?php echo $bulan[$k];?>&nbsp;&nbsp;&nbsp;</option>
<?php
										}
?>
									</select>
									</font>
								</td>
								<td style="padding-left: auto; text-align: left; width: 10px">
								</td>
								<td style="padding-left: auto; text-align: left; width: 80px">
									<font size="2" face="arial" color="black">
									<select id="tahun" name="tahun" class="chosen-select" style="width:80px;">
										<!--option value="0">---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option-->
<?php
										$tahunsaiki = date('Y');
										for ($k=$tahunsaiki; $k >= 2014; $k--) {
?>
											<option value="<?php echo $k;?>"><?php echo $k;?>&nbsp;&nbsp;</option>
<?php
										}
?>
									</select>
									</font>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr height="80px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
						
					</td>
				</tr>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
						<a href="" class="large button blue" onclick="cekdata(); return false;">Proses & View</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	</td>
	</tr>
</table>

<?php
	if ($statusrun==1)
	{

//Read Data
# query the users table for name and surname 
	$query = "SELECT * FROM maindata WHERE (MONTH(tgl)=" . $bulanku . " AND YEAR(tgl)=" . $tahunku . 
			" AND (UPPER(instrumenttype) <> 'MISCELLANEOUS' OR UPPER(instrumenttype) <> 'TIME DEPOSIT') AND marketvalue <> 0 " .
			" AND instrumentcode <> '-R' AND instrumentcode <> '-W' AND instrumentcode <> '-RDPTDWEI');";
//echo $query . "<br>";
	$row_cnt = 0;
	$namaperus = "none";
	$jmldatamain = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		$i = 0;
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$statusdataok[$i] = 1;
			$idku[$i] = $row['ID'];
			$clientcodeku[$i] = $row['clientcode'];
			$clientnameku[$i] = $row['clientname'];
			$instrumenttypeku[$i] = $row['instrumenttype'];
			$issuernameku1 = $row['issuername'];
			//$issuernameku[$i] = $issuernameku1;
			if (strlen($issuernameku1) > 2) {
				$issuernameku1 = $issuernameku1 . "                                   ";
				$issuernameku[$i] = substr($issuernameku1,0,35);
			}
			else {
				$issuernameku1 = "  " . "                                   ";
				$issuernameku[$i] = substr($issuernameku1,0,35);
			}
			$instrumentcodeku[$i] = $row['instrumentcode'];
			$issku[$i] = $row['iss'];
			$holdingku[$i] = $row['holding'];
			$latestpriceku[$i] = $row['latestprice'];
			$marketvalueku[$i] = $row['marketvalue'];
			$cashproceedku[$i] = $row['cashproceed'];
			$marketval = '0000000000000000' . (string)$marketvalueku[$i];
			$marketvalueku[$i] = strright($marketval,15);
			$cashpro = '0000000000000000' . (string)$cashproceedku[$i];
			$cashproceedku[$i] = strright($cashpro,15);
		}
	}
	$jmldatamain = $i;
//Cek/Update kolom sandi golongan pada tabel client dgn melihat tabel kodepenerbit
//Lengkapi data bulanan (main) dgn:
//Isi Kode Penerbit Surat Berharga & Golongan
//----------------------------------------------------------------------------
	for ($j=1; $j <= $jmldatamain; $j++)
	{
		$sandiku[$j] = "   ";
		$negaraasalku[$j] = "ooo";
		$jenisvalutaku[$j] = "ooo";
		$sandipenerbitku[$j] = "";
		//$issuernameku[$j] = "ooo";
		$startdateku[$j] = "ooo";
		$enddateku[$j] = "ooo";
		$curku[$j] = "xxx";
		$jenissuratberhargaku[$j] = "";
		$penerbitsuratberhargaku[$j] = "000";
		
		$query = "SELECT * FROM equitybond WHERE (UPPER(shortname) LIKE '%" . strtoupper($instrumentcodeku[$j]) . "%' OR UPPER(localcode) LIKE '%" . 
				strtoupper($instrumentcodeku[$j]) . "%');";
		$row_cnt = 0;
		$namaperus = "";
		$result = mysqli_query($link, $query);
		if ($result) {
 /* determine number of rows result set */
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			//$statusdataok[$j] = 1;
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$isincodeku[$j] = $row['isincode'];							//ID1000127905
				$curku[$j] = $row['cur'];									//IDR 
				$jenissuratberhargaku[$j] = $row['jenissuratberharga'];		//15, 20, 45
				$sandipenerbitku[$j] = $jenissuratberhargaku[$j];
				$penerbitsuratberhargaku[$j] = $row['penerbitsuratberharga'];
				$typeku = $row['type'];				//Equities, Bond, Time Deposit
				$subtypeku = $row['subtype'];		//
				$startdate = $row['startdate'];		//
				if (strlen($startdate)>5) {
					$startarr = explode('-',$startdate);
					$startdateku[$j] = $startarr[2] . $startarr[1] . $startarr[0];
				}
				else
					$startdateku[$j] = "00000000";
				
				$enddate = $row['enddate'];		//
				if (strlen($enddate)>5) {
					$endarr = explode('-',$enddate);
					$enddateku[$j] = $endarr[2] . $endarr[1] . $endarr[0];
				}
				else
					$enddateku[$j] = "00000000";
			}
//echo  $penerbitsuratberhargaku[$j] . " --- " . $query . "<br>";
		}

//-------------------------------------------------------------------------------------------------------------------------------------------------------------		
		$query = "SELECT * FROM client WHERE (UPPER(fullname) LIKE '%" . strtoupper($clientnameku[$j]) . "%' OR UPPER(shortname) LIKE '%" . strtoupper($clientnameku[$j]) . "%');";
		$row_cnt = 0;
		$tipeinvestorku[$j] = "";
		$sandipemilikku[$j] = "ID";
		$sandigolku[$j] = "000";
		$fullnameku[$j] = $clientnameku[$j];
		$tipeinvestorku[$j] = "";
		$result = mysqli_query($link, $query);
		if ($result) {
 /* determine number of rows result set */
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			$i = 0;
			//$statusdataok[$j] = 1;
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$clientidku[$j] = $row['ID'];					
				$sandigolku[$j] = $row['sandigolongan'];					//290, 340, 430, 999
				$sandipemilikku[$j] = $row['sandipemilik'];					//ID
				$fullnameku[$j] = $row['fullname'];
				$tipeinvestorku[$j] = $row['tipeinvestor'];
			}
		}
//echo $j . " ** " . $row_cnt . " - " . $query . "<br>";
		if (strtoupper($tipeinvestorku[$j]) == "OTHERS")
		{
			$tipeinvestorku[$j] = "Mutual Fund";
		}
		$row_cnt = 0;


/*		
		$sqlme = "SELECT * FROM sandisecurity WHERE UPPER(shortname)='" . strtoupper($instrumentcodeku[$j]) . "';";
		$result = mysqli_query($link, $sqlme);
		if ($result) {
// determine number of rows result set 
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {  
				$sandipenerbitku[$j] = $row['sandipenerbit'];					//290, 340, 430, 999
				$negaraasalku[$j] = $row['negaraasal'];
				$jenisvalutaku[$j] = $row['jenisvaluta'];
				$startdateku[$j] = $row['tglterbit'];
				$enddateku[$j] = $row['tgljatuhtempo'];
				$issuernameku1 = $row['issuername'];		//
				$issuernameku[$j] = $issuernameku1;
				if (strlen($issuernameku1) > 2) {
					$issuernameku1 = $issuernameku1 . "                                   ";
					$issuernameku[$j] = substr($issuernameku1,0,35);
				}
			}
			//$sql1 = "UPDATE client SET sandigolongan=" . $sandiku[$j] . " WHERE ID=" . $clientidku[$j] . ";";
			//$result = mysqli_query($link, $sql1);
		}
*/

/*
		$sqlme = "SELECT * FROM kodepenerbit WHERE UPPER(typeinvestor)='" . strtoupper($tipeinvestorku[$j]) . "';";
		$row_cnt = 0;
		$sandiku[$j] = "   ";
		$result = mysqli_query($link, $sqlme);
		if ($result) {
// determine number of rows result set 
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {  
				$sandiku[$j] = $row['sandi'];					//290, 340, 430, 999
			}
			//$sql1 = "UPDATE client SET sandigolongan=" . $sandiku[$j] . " WHERE ID=" . $clientidku[$j] . ";";
			//$result = mysqli_query($link, $sql1);
		}
*/
//-------------------------------------
/*
		if (strpos(strtoupper($instrumenttypeku[$j]),'BOND') !== false)
			$aaa = "BONDS";
		else if (strpos(strtoupper($instrumenttypeku[$j]),'EQUIT') !== false)
			$aaa = "EQUITY";	
		$sqlme = "SELECT * FROM jenissuratberharga WHERE UPPER(keterangan)='" . $aaa . "';";
		$row_cnt = 0;
		$jenissuratberhargaku[$j] = "  ";
		$result = mysqli_query($link, $sqlme);
		if ($result) {
// determine number of rows result set 
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {  
				$jenissuratberhargaku[$j] = $row['kode'];					//290, 340, 430, 999
			}
			//$sql1 = "UPDATE client SET sandigolongan=" . $sandiku[$j] . " WHERE ID=" . $clientidku[$j] . ";";
			//$result = mysqli_query($link, $sql1);
		}
*/
		
	}
//----------------------------------------------------------------------------
//Cek/Update kolom sandi golongan pada tabel client dgn melihat tabel kodepenerbit



//Isi Kode Jenis Surat Berharga



//Process Data

//Write to File
	if ($jmldatamain > 0)
	{
		$namafile = './OUTPUT/LKPBU_' . $bulanku . "_" . $tahunku . '.txt';
		if (file_exists($namafile))
			unlink($namafile);
		if (!file_exists($namafile))
		{
			$numi = 0;
			$space1 = "                                   ";	// 35 white spaces
			$space2 = "               ";						// 15 white spaces
			$myfile = fopen($namafile, "w") or die("Unable to open file!");
			for ($n=1; $n <= $jmldatamain; $n++)
			{
				if ($statusdataok[$n] == 1) {
					if ($sandipenerbitku[$n] == 0)
						$sandipenerbitku[$n] = (string) '000';
					else if ($sandipenerbitku[$n] < 10)
						$sandipenerbitku[$n] = (string) '00' . $sandipenerbitku[$n];
					else if ($sandipenerbitku[$n] > 9 && $sandipenerbitku[$n] < 100)
						$sandipenerbitku[$n] = (string) '0' . $sandipenerbitku[$n];
					$jenisvalutaku[$n] = $curku[$n];
					//if (strlen($issuernameku[$n]) > 3) {
//echo $n . "--" . (string)$sandiku[$n] . $space1 . $sandipemilikku[$n] . $sandipenerbitku[$n] . $issuernameku[$n] . $sandipemilikku[$n] . $space2 . "<br>";
					$numi++;
					$txt = (string)$sandigolku[$n] . $space1 . $sandipemilikku[$n] . $sandipenerbitku[$n] . $issuernameku[$n] . $negaraasalku[$n] . $space2 . $jenissuratberhargaku[$n] . 
							$space1 . $jenisvalutaku[$n] . $startdateku[$n] . $enddateku[$n] . $marketvalueku[$n] . $cashproceedku[$n] . "\n";
//echo $txt . "<br>";
					$txtdata[$numi] = $txt;
					fwrite($myfile, $txt);
					//}
				}
			}
			fclose($myfile);
		
		}
	}
	
// Write to Excel

	if ($jmldatamain > 0)
	{
		$tglsaikibul = date("d-M-Y");
		$filenameku = './OUTPUT/LKPBU_' . $bulanku . "_" . $tahunku . '.xlsx';
	
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
		$objPHPExcel->getActiveSheet()->setCellValue('A1', "LKPBU");
		$objPHPExcel->getActiveSheet()->setCellValue('A2', "AS OF " . $tglsaikibul . ", Periode: " . $bulanku . " " . $tahunku);
		$objPHPExcel->getActiveSheet()->setCellValue('A3', "NO");
		$objPHPExcel->getActiveSheet()->setCellValue('B3', 'CLIENT CODE');
		$objPHPExcel->getActiveSheet()->setCellValue('C3', 'INSTRUMENT CODE');
		$objPHPExcel->getActiveSheet()->setCellValue('D3', 'MARKET VALUE');
		$objPHPExcel->getActiveSheet()->setCellValue('E3', 'LKPBU DATA');

//Set row height dari header
		$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(35);
		$objPHPExcel->getActiveSheet()->getRowDimension('3')->setRowHeight(25);
//Set lebar kolom
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(34);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(150);
//Set alignment
		$objPHPExcel->getActiveSheet()->getStyle('A3:I3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//Set warna dari header	
		$objPHPExcel->getActiveSheet()
			->getStyle('A3:E3')
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

		$objPHPExcel->getActiveSheet()->getStyle("A3:$nm")->applyFromArray($styleArray);
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
			'size'  => 10,
			'name'  => 'Calibri'
		));

		$objPHPExcel->getActiveSheet()->getStyle("A2:$nm")->applyFromArray($styleArray);	
//echo "JmlTotData: " . $jmltotdata . "<br>";

		for ($n=1; $n<=$jmldatamain;$n++) {
				if ($statusdataok[$n] == 1) {
					if ($sandipenerbitku[$n] < 10)
						$sandipenerbitku[$n] = (string) '00' . $sandipenerbitku[$n];
					else if ($sandipenerbitku[$n] > 9 && $sandipenerbitku[$n] < 100) {
						$sandipenerbitku[$n] = (string) '0' . $sandipenerbitku[$n];
					}
					//if (strlen($issuernameku[$n]) > 3) {
						$txta = (string)$sandigolku[$n] . $space1 . $sandipemilikku[$n] . $sandipenerbitku[$n] . $issuernameku[$n] . $negaraasalku[$n] . $space2 . $jenissuratberhargaku[$n] . 
							$space1 . $jenisvalutaku[$n] . 
							$startdateku[$n] . 
							$enddateku[$n] . 
							$marketvalueku[$n] . 
							$cashproceedku[$n] . "\n";
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, $n+3, $n);
						$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(1, $n+3, $clientcodeku[$n], PHPExcel_Cell_DataType::TYPE_STRING);
						$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(2, $n+3, $instrumentcodeku[$n], PHPExcel_Cell_DataType::TYPE_STRING);
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(3, $n+3, $marketvalueku[$n]);
						$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, $n+3, $txta);
					//}
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
		if (file_exists($namafile)) {
			$namafileku = 'LKPBU_' . $bulanku . " " . $tahunku . '.txt';
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
			$namafilexlku = 'LKPBU_' . $bulanku . " " . $tahunku . '.xlsx';
?>
			<font face="arial" size="2" color="black">
				<a href="<?php echo $filenameku;?>" download=<?php echo $filenameku;?>><img src="text2.png" /></a>
				<a href=<?php echo $filenameku;?> target="_blank"> <?php echo $namafilexlku;?></a>
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



<div id="cssload-loader" class="cssload-preloader">
	<div class="cssload-preloader-box">		<div>L</div>		<div>o</div>		<div>a</div>		<div>d</div>		<div>i</div>		<div>n</div>		<div>g</div></div>
</div>


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