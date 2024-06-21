<?php
// Cari jumlah data TUNAI (PUB, ESA1, ESA2)
$totgrostun = 0;
$totjmltun = 0;

$sql0 = "SELECT SUM(bayar) AS grostunai, COUNT(ID) AS jmltunai FROM bni WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TUN');";
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow==0) {
	$jmltun = 0;
}
else if ($jmlrow>0) {
	$i = 0;
	$grostun = 0;
	$jmltun = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$totgrostun = $row['grostunai'];
		$totjmltun = $row['jmltunai'];
	}
}

// Cari jumlah data TRANSFER ke BNI1

$totjmlbni1 = 0;
$totgrosbni1 = 0;

$sql0 = "SELECT SUM(bayar) AS grostunai, COUNT(ID) AS jmltunai FROM bni WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TRF' AND jenisbank='BNI1');";
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}

if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$totgrosbni1 = $row['grostunai'];
		$totjmlbni1 = $row['jmltunai'];
	}
}

// Cari jumlah data TRANSFER ke BNI2


$totjmlbni2 = 0;
$totgrosbni2 = 0;

$sql0 = "SELECT SUM(bayar) AS grostunai, COUNT(ID) AS jmltunai FROM bni WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TRF' AND jenisbank='BNI2');";

$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}

if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$totgrosbni2 = $row['grostunai'];
		$totjmlbni2 = $row['jmltunai'];
	}
}

// Cari jumlah data TRANSFER ke LAIN


$totjmllain = 0;
$totgroslain = 0;

$sql0 = "SELECT SUM(bayar) AS grostunai, COUNT(ID) AS jmltunai FROM bni WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TRF' AND jenisbank='LAIN');";
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}

if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$totgroslain = $row['grostunai'];
		$totjmllain = $row['jmltunai'];
	}
}

// Cari jumlah data TRANSFER ke SCB


$totjmlscb = 0;
$totgrosscb = 0;

$sql0 = "SELECT SUM(bayar) AS grostunai, COUNT(ID) AS jmltunai FROM bni WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TRF' AND jenisbank='SCB');";
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}

if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$totgrosscb = $row['grostunai'];
		$totjmlscb = $row['jmltunai'];
	}
}

// Cari GRAND TOTAL 


$totjml = 0;
$totgros = 0;

$sql0 = "SELECT SUM(bayar) AS grostunai, COUNT(ID) AS jmltunai FROM bni WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . ");";
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}

if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$totgros = $row['grostunai'];
		$totjml = $row['jmltunai'];
	}
}

?>


<table style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: 10px;" width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr height="30px"> 
        <td style="padding-left: 20px; text-align: left; font-size: 12">
			<font face="Arial" color="black" size="5"><b>
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
		<td align="left" style="padding-left: 20px; padding-top: 10px; text-align: left; font-size: 12;">
			<img style="padding-left: auto;" align="left" src="./img/line1.png" height="5px" width="800px">
		</td>
	</tr>
</table>

<table style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: 10px;" width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr height="30px"> 
        <td style="padding-left: 20px; text-align: left; font-size: 12">
		</td>
    </tr>
	<tr height="50px">
			<td colspan="6" style="padding-left: 20px; text-align: left; font-size: 12; height: 40px; width=50%">
				<font face="arial" color="black" size="4"><b>Ringkasan (Summary)</b></font>
			</td>
	</tr>
    <tr height="20px"> 
        <td style="padding-left: 20px; text-align: left; font-size: 12">
		</td>
    </tr>
</table>
	
<form method="post" name="mysummary" id="mysummary" action="summary.php" method="post">
<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="600px" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td style="padding-left: 30px; text-align: left; height: 25px; width: 80px">
			<font size="2" face="arial" color="black">Tahun :</font>
		</td>
		<td style="padding-left: 0px; text-align: left; width: 100px">
			<font size="2" face="arial" color="black">
			<select id="tahun" name="tahun" class="chosen-select-deselect" style="width:90px;/>
			<!--select id="tahun" name="tahun" style="width:80px;"-->
				<option value=""></option>
<?php
					$minyear=2006;
					$maxyear=date('Y')*1;
					for ($i=$maxyear;$i>=$minyear;$i--) {
?>
						<option value="<?php print $i;?>" <?php if ($i==$tahun) {echo "selected";};?>><?php print $i;?></option>
<?php
					}
?>
			</select>
			</font>
		</td>

		<td style="padding-left: 0px; text-align: left; width: 100px">
		</td>
		<td style="padding-left: 0px; text-align: left; width: 80px">
			<font size="2" face="arial" color="black">Batch ke :</font>
		</td>
		<td style="padding-left: 0px; text-align: left; width: 100px">
			<font size="2" face="arial" color="black">
			<select id="batch" name="batch" data-placeholder="Batch" class="chosen-select-deselect" style="width:50px;">
			<!--select id="batch" name="batch" style="width:50px;"-->
				<option value="1" <?php if ($batch==1) {echo "selected";};?>>1</option>
				<option value="2" <?php if ($batch==2) {echo "selected";};?>>2</option>
				<option value="3" <?php if ($batch==3) {echo "selected";};?>>3</option>
				<option value="4" <?php if ($batch==4) {echo "selected";};?>>4</option>
			</select>
			</font>
		</td>
	</tr>
	<tr height="30px">
		<td colspan="5" style="padding-left: 30px; text-align: right;">
		</td>
	</tr>
	<tr height="30px">
		<td colspan="2" style="padding-left: 30px; text-align: left;">
			<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
			<input type="hidden" id="perusid" name="perusid"  value="<?php echo $perushid;?>">
			<a class="button orange medium" onclick="document.mysummary.submit(); return false;">View</a>
		</td>
		<td colspan="3" style="padding-left: 30px; text-align: right;">
			<a class="button red medium" onclick="hapusdatabni(); return false;">Delete</a>
		</td>
	</tr>
</table>
</form>
	
<DIV align="left">
	<br><br>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="750px" border="0" cellpadding="0" cellspacing="0">
		<tr height="30px">
		</tr>
		<tr height="50px">
			<td colspan="6" style="padding-left: 10px; text-align: left; font-size: 12; height: 40px; width=50%">
				<h2><font face="arial" color="black">Ringkasan (Summary) Data:</font></h2>
			</td>
		</tr>

		<tr height="40px"> 
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">Tunai</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">Transfer BNI1</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">Transfer BNI2</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">Transfer Bank Lain</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 120px">
				<b><i><font face="arial" size="2" color="black">Transfer SCB</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">T O T A L</font></i></b>
			</td>
          </tr>
          <tr height="60px"> 
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($totjmltun,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($totgrostun,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($totjmlbni1,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($totgrosbni1,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($totjmlbni2,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($totgrosbni2,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($totjmllain,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($totgroslain,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($totjmlscb,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($totgrosscb,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: right; font-size: 12; width: 150px">
				<font face="arial" size="2" color="black">
				<?php 
					print number_format($totjml,0);
				?>
				</font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black">
				<?php 
					print "Rp. " . number_format($totgros,0);
				?>
				</font></p>
			</td>
          </tr>
    </table>
</DIV>