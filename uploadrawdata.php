

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
//-------------------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//-------------------------------------------------------------
if (!isset($_GET["id"])) {
	$perushid=$_SESSION["id"];
}
else
	$perushid=$_GET["id"];
//--------------------------------------------------------------------
$tahun = 0;
if (!isset($_POST["tahun"])) {
	if (!isset($_SESSION["tahun"])) {
		$tahun = 0;
	}
	else
		$tahun=$_SESSION["tahun"];
}
else
	$tahun=$_POST["tahun"];
//--------------------------------------------------------------------
if (!isset($_POST["batch"])) {
	if (!isset($_SESSION["batch"])) 	
		$batch = 0;
	else
		$batch=$_SESSION["batch"];
}
else
	$batch=$_POST["batch"];
//--------------------------------------------------------------------
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
?>


<?php


if (!isset($_POST["tahun"])) {
	if (!isset($_GET["tahun"]))
		$tahun = date('Y');
	else
		$tahun=$_GET["tahun"];
}
else
	$tahun=$_POST["tahun"];
//-----------------------------------------------------------------------
if (!isset($_POST["tahunbuku"])) {
	$tahunbuku=0;
}
else
	$tahunbuku=$_POST["tahunbuku"];
//-----------------------------------------------------------------------
if (!isset($_POST["batch"])) {
	if (!isset($_GET["batch"]))
		$batch = 1;
	else
		$batch=$_GET["batch"];
}
else
	$batch=$_POST["batch"];
//-----------------------------------------------------------------------
if (!isset($_POST["mysort"])) {
	if (!isset($_GET["mysort"])) 
		$mysort = "ID";
	else
		$mysort=$_GET["mysort"];
}
else
	$mysort=$_POST["mysort"];
//-----------------------------------------------------------------------
if (!isset($_POST["noretur"])) {
	if (!isset($_GET["noretur"]))
		$noretur = 1;
	else
		$noretur=$_GET["noretur"];
}
else
	$noretur=$_POST["noretur"];
//-----------------------------------------------------------------------
if (!isset($_POST["nosuratdatindo"])) {
	$nosuratdatindo="none";
}
else
	$nosuratdatindo=$_POST["nosuratdatindo"];
//-----------------------------------------------------------------------
if (strlen($nosuratdatindo)<2) {
	$nosuratdatindo="none";
}

if (!isset($_POST["cari"])) {
	$cari="none";
}
else
	$cari=$_POST["cari"];

if (strlen($cari)<2) {
	$cari="none";
}

$cariku = $cari;
if ($cari=="none")
	$cariku = "";


# query the users table for name and surname 
$query = "SELECT * FROM perusahaan WHERE ID=" . $perushid . ";";
$row_cnt = 0;
$namaperush = "none";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$namaperusku = $row['nama'];
	}
}

$noret = $noretur;

$bulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
# query the users table for name and surname 
$query = "SELECT * FROM returtransfer WHERE perusahaanID=" . $perushid . " AND tahun=" . $tahunbuku . ";";
$row_cnt = 0;
$i = 0;
$counti = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
	}
}
$counti = $i;

# query the users table for name and surname 
$query = "SELECT * FROM perusahaan WHERE ID=" . $perushid . ";";
$row_cnt = 0;
$namaperus = "none";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$namaperus = $row['nama'];
	}
}



?>

<br>
	<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="100%" border="0" cellpadding="2" cellspacing="0">
          <tr style="height:20px;"> 
            <td style="padding-left: 40px; text-align: left; height: 20px">
				<font face="Verdana,Arial" color="black" size="5"><b>
<?php 
	if ($namaperus == "none") {
		print "Not Selected";
	}
	else
		print $namaperus;
?>
				</b></font>
			</td>
          </tr>
		<tr height="10px">
			<td align="left" style="padding-left: 30px; padding-top: 10px; text-align: left; font-size: 12;">
				<img style="padding-left: 10px;" align="left" src="./img/line1.png" height="5px" width="800px">
			</td>
		</tr>
    </table>

<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 30px; text-align: left; font-size: 12; width=300px">
		</td>
	</tr>
	<tr height="30px">
		<td style="padding-left: 40px; text-align: left; font-size: 12; width=300px">
			<font face="arial" size="3" color="black"><b>PENYESUAIAN</b></font>
		</td>
	</tr>
</table>
	
<div id='container'>
	<div id='logo'>
		<h1><span></span></h1>
		<span class='title'></span>
	</div>
	<div id='content'>
		<div id='basic-modal'>
			<h3></h3>
			<!--input type='button' name='basic' value='Demo' class='basic'/> or <a href='#' class='basic'>Demo</a-->
		</div>
		
		<!-- modal content -->
		<div id="basic-modal-content">
			<form method="post" class="signin" name="addretur" id="addretur" action="uploadtunaimantelkom.php">
				<table style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="400px">
					<tr height="40px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="#EEEE22" size="4"><b>DATA TUNAI BARU</b></FONT>
						</td>
					</tr>
					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="32px">
						<td style="padding-left: 30px; text-align: left;" width="120px">
							<FONT face="arial" color="#7777EE" size="2">Tahun & Batch</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;" width="260px">
							<!--input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;" class="textboxnarrow" id="tahun" name="tahun" value="" type="text" maxlength="4"-->
							<select id="tahuna" name="tahuna"> 
<?php
								$tahuniki = date('Y')*1;
								for ($kk=$tahuniki;$kk>=2006;$kk--) {
?>
								<option value="<?php echo $kk;?>" ><?php echo $kk;?>&nbsp;</option>
<?php
								}
?>
							</select>
							<select id="batcha" name="batcha"> 
								<option value="1" >1&nbsp;</option>
								<option value="2" >2&nbsp;</option>
								<option value="3" >3&nbsp;</option>
								<option value="4" >4&nbsp;</option>
							</select>
						</td>
					</tr>
					<tr height="32px">
						<td style="padding-left: 30px; text-align: left;">
							<FONT face="arial" color="#7777EE" size="2">SPPD</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;" class="textboxmid" id="sppd" name="sppd" OnChange="autofillsppdtelkom();return false;" type="text" maxlength="20">
						</td>
					</tr>
					<tr height="32px">
						<td style="padding-left: 30px; text-align: left;" width="140px">
							<FONT face="arial" color="#7777EE" size="2">Nama</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;" width="320px">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;" class="textboxmid" id="nama" name="nama" value="" type="text" maxlength="20">
						</td>
					</tr>
					<tr height="32px">
						<td style="padding-left: 30px; text-align: left;">
							<FONT face="arial" color="#7777EE" size="2">Nominal</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;" class="textboxmid" id="nominal" name="nominal" value="" type="text" maxlength="20">
						</td>
					</tr>
					<tr height="32px">
						<td style="padding-left: 30px; text-align: left;">
							<FONT face="arial" color="#7777EE" size="2">Tgl</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<!--input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;" id="datepicker-example1a" type="text" name="datepicker-example1a" class="textboxnarrow"-->
							<FONT face="arial" color="#7777EE" size="2">
								<input id="datepicker-example1a" type="text" name="datepicker-example1a" class="textboxtgl">
							</FONT>
						</td>
					</tr>

					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;" width="200px">
						</td>
					</tr>
					<tr height="50px">
						<td colspan="3" style="padding-left: auto; text-align: center;" width="200px">
							<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
							<input type="hidden" id="id" name="id" value="<?php echo $perushid;?>">
							<a class="button orange medium" onclick="document.addretur.submit(); return false;">Tambahkan</a>
						</td>
					</tr>
				</table>
			</form>
		</div>

		<!-- preload the images -->
		<div style='display:none'>
			<img src='img/basic/x.png' alt='' />
		</div>
	</div>
	<div id='footer'>
	</div>
</div>




<table style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="1100px" border="1" cellspacing="0" cellpadding="0">
	<tr>
	<td style="vertical-align: top; padding-left: auto; padding-top: 0; text-align: left; font-size: 12; width=500px">
	<form name="myupload" id="myupload" action="penyesuaianuploadtelkomgo.php" method="post" enctype="multipart/form-data">
		<table style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: auto;" width="500px" border="1" cellspacing="0" cellpadding="0">
			<thead>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11; width: 360px">
						<h2><font face="arial" color="black">Silahkan Upload File Icon:</font></h2>
					</td>
				</tr>
			</thead>
			<tbody>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
					</td>
				</tr>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
						<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="360px" border="1" cellspacing="0" cellpadding="0">
							<tr>
								<td style="padding-left: auto; text-align: left; height: 25px; width: 80px">
									<font size="2" face="arial" color="black">Tahun : </font>
								</td>
								<td style="padding-left: auto; text-align: left; font-size: 12; height: 25px; width: 100px">
									<font size="2" face="arial" color="black">
									<select id="tahun" name="tahun" data-placeholder="Tahun Buku" class="chosen-select-deselect" style="width:80px;" >
<?php
										$minyear=2006;
										$maxyear=date('Y');
										for ($i=$maxyear;$i>=$minyear;$i--) {
?>
										<option value="<?php print $i;?>" <?php if ($i==$tahun) {echo "selected";};?>>
											<?php print $i;?>
										</option>
<?php
										}
?>
									</select>
									</font>
								</td>
								<td style="padding-left: auto; text-align: left; width: 70px">
								</td>
								<td style="padding-left: auto; text-align: left; width: 100px">
									<font size="2" face="arial" color="black">Batch ke :</font>
								</td>
								<td style="padding-left: auto; text-align: left; font-size: 11; width: 50px">
									<font size="2" face="arial" color="black">
									<select id="batch" name="batch" data-placeholder="Batch" class="chosen-select-deselect">
										<option value="1">1&nbsp;&nbsp;</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
									</font>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr height="40px">
					<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
						<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
						<input type="hidden" id="id" name="id" value="<?php echo $perushid;?>">
					</td>
				</tr>
				<tr height="30px">
					<td style="padding-left: 10px; text-align: left; font-size: 12">
						<input name="uploadtelkom" id="uploadtelkom" type="file">
					</td>
					<td style="padding-left: auto; padding-top: 0px; text-align: left; font-size: 11; width: 200px">
						<div id='basic-modal'>
							<a href="#" class="basic">
							<img src="./images/add24.png">
							</a> &nbsp;
						<button type="text" class="basic">Tambah Data Manual</button>
						</div>
					</td>
				</tr>
				<tr height="50px">
					<td colspan="2" style="padding-left: 10px; text-align: left; font-size: 12"></td>
				</tr>
				<tr height="30px">
					<td colspan="2" style="padding-left: 10px; text-align: left;">
						<a href="" class="medium button orange" onclick="document.myupload.submit(); return false;">Upload</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	</td>
	</tr>
</table>

	
<?php

if ($counti > 0) {
?>

<DIV align="left">
</DIV>

<?php

	createoutput($perushid, $tahun, $noretur, $batch, $mysort, $link);
}
?>

<script type='text/javascript' src='./simplemodal/basic/js/jquery.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/basic.js'></script>

<script type="text/javascript" src="./datepicker/examples/public/javascript/jquery-1.11.1.js"></script>
<script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="./datepicker/examples/public/javascript/core.js"></script>


<script>
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
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

<?php
//----------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------

function createoutput($perushid, $tahun, $noretur, $batch, $mysort, $link)
{
//Find the total number of data provided perusahaanid and tahun buku
	if ($noretur==0)
	{
		$sql = "SELECT * FROM returtransfer WHERE perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
				" AND batch=" . $batch . " ORDER BY " . $mysort . " ASC;";
	}
	else if ($noretur==1)
	{
		$sql = "SELECT * FROM returtransfer1 WHERE perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
				" AND batch=" . $batch . " ORDER BY " . $mysort . " ASC;";		
	}
	else if ($noretur==2)
	{
		$sql = "SELECT * FROM returtransfer2 WHERE perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
				" AND batch=" . $batch . " ORDER BY " . $mysort . " ASC;";		
	}
	else if ($noretur==3)
	{
		$sql = "SELECT * FROM returtransfer3 WHERE perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
				" AND batch=" . $batch . " ORDER BY " . $mysort . " ASC;";		
	}
	else if ($noretur==4)
	{
		$sql = "SELECT * FROM returtransfer4 WHERE perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
				" AND batch=" . $batch . " ORDER BY " . $mysort . " ASC;";		
	}
	$rs = mysqli_query($link, $sql);
	$jmlr = 0;
	$i = 0;
	if ($rs) {
		$jmlr = $rs->num_rows;
	}
	if ($jmlr > 0) {
		while ($row = mysqli_fetch_array ($rs, MYSQLI_ASSOC)) {
			$i++;
			$sppdku[$i] = $row['sppd'];
			$namaku[$i] = $row['nama'];
			$noaccku[$i] = $row['norekkd'];
			$nodbku[$i] = $row['norekdb'];
			$nominalku[$i] = $row['nominal'];
			//$jenis[$i] = $row['jenis'];	
		}
	}
	$jmldata = $i;
	$ket2 = substr($tahun,2,2);
	if ($jmldata > 0)
	{
set_include_path(get_include_path() . PATH_SEPARATOR . './PHPExcel/Classes/');

/** Error reporting */
error_reporting(E_ALL);

/** Include path **/
//ini_set('include_path', ini_get('include_path').';../Classes/');

		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel5.php';

		$fileType = 'Excel5';
		$filename = './OUTPUT/TELKOM_RETUR_' . $noretur . '_JPU_' . "_" . $tahun . '_' . $batch . '.xls';

// Read the file
	//$objReader = PHPExcel_IOFactory::createReader($fileType);
	//$objPHPExcel = $objReader->load($fileName);
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
		//$worksheet = $spreadsheet->getActiveSheet();
// Change the file
		//$worksheet->setActiveSheetIndex(0)
		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'NOPEG');
		$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NAMAPEG');
		$objPHPExcel->getActiveSheet()->setCellValue('C1', 'NOREKDB');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', 'NOREKKD');
		$objPHPExcel->getActiveSheet()->setCellValue('E1', 'JMLGAJI');
		$objPHPExcel->getActiveSheet()->setCellValue('F1', 'KETERANGAN1');
		$objPHPExcel->getActiveSheet()->setCellValue('G1', 'KETERANGAN2');
		$objPHPExcel->getActiveSheet()->setCellValue('H1', 'KETERANGAN3');

		for ($j=1; $j<=$jmldata;$j++) {
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, $j+1, $j);
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(1, $j+1, $namaku[$j]);
			$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(2, $j+1, (string) $nodbku[$j], PHPExcel_Cell_DataType::TYPE_STRING);
			$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(3, $j+1, (string) $noaccku[$j], PHPExcel_Cell_DataType::TYPE_STRING);
			if ($jesop == 'ESA2') {
				$nominalku[$j] = round($nominalku[$j]) - 5000;
			}
			$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(4, $j+1, round($nominalku[$j]));	
			$objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow(5, $j+1, $sppdku[$j], PHPExcel_Cell_DataType::TYPE_STRING);
			//$objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(6, $j+1, "TLKM ". $ket2);
	}

// Write the file
		//$writer = new PHPExcel_Writer_Excel5($objPHPExcel);
		$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$writer->save($filename);
	}

}
?>

<?php

//*******************************************************************************************************

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['perusahaanid'] = $perushid;
	$_SESSION['namaperusahaan'] = $namaperus;
	$_SESSION['tahun'] = $tahun;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;
	$_SESSION["noretur"] = $noretur;
	$_SESSION["tahunbuku"] = $tahunbuku;
	$_SESSION["mysort"] = $mysort;
	//$_SESSION["sppd"] = $sppd;

//*******************************************************************************************************

?>