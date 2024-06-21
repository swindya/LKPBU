<?php
// Cari jumlah data TUNAI (PUB, ESA1, ESA2)
$jmltunpub = 0;
$jmltunesa1 = 0;
$jmltunesa2 = 0;
$jmltunesa = 0;
$grostunpub = 0;
$grostunesa1 = 0;
$grostunesa2 = 0;
$grostunesa = 0;
$sql0 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TUN');";
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow==0) {
	$jmltunpub = 0;
	$jmltunesa1 = 0;
	$jmltunesa2 = 0;
	$jmltunesa = 0;
	$grostunpub = 0;
	$grostunesa1 = 0;
	$grostunesa2 = 0;
	$grostunesa = 0;
}
else if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$jenisku = $row['jenisesop'];
		$dgrosku = $row['bayar'];
		if ($jenisku == "PUB") {
			$jmltunpub++;
			$grostunpub = $grostunpub + $dgrosku;
		}
		else if ($jenisku == "ESA1") {
			$jmltunesa1++;
			$grostunesa1 = $grostunesa1 + $dgrosku;
		}
		else if ($jenisku == "ESA2") {
			$jmltunesa2++;
			$grostunesa2 = $grostunesa2 + $dgrosku;
		}
		else if ($jenisku == "ESA") {
			$jmltunesa1++;
			$grostunesa1 = $grostunesa1 + $dgrosku;
		}
	}
}

// Cari jumlah data TRANSFER ke BNI (PUB, ESA1, ESA2)
$jmltxbnipub = 0;
$jmltxbniesa1 = 0;
$jmltxbniesa2 = 0;
$jmltxbniesa = 0;
$grostxbnipub = 0;
$grostxbniesa1 = 0;
$grostxbniesa2 = 0;
$grostxbniesa = 0;

$sql0 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TRF' AND jenisbank LIKE '%BNI%');";
//echo $sql0;
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow==0) {
	$jmltxbnipub = 0;
	$jmltxbniesa1 = 0;
	$jmltxbniesa2 = 0;
	$jmltxbniesa = 0;
	$grostxbnipub = 0;
	$grostxbniesa1 = 0;
	$grostxbniesa2 = 0;
	$grostxbniesa = 0;
}
else if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$jenisku = $row['jenisesop'];
		$dgrosku = $row['bayar'];
		if ($jenisku == "PUB") {
			$jmltxbnipub++;
			$grostxbnipub = $grostxbnipub + $dgrosku;
		}
		else if ($jenisku == "ESA1") {
			$jmltxbniesa1++;
			$grostxbniesa1 = $grostxbniesa1 + $dgrosku;
		}
		else if ($jenisku == "ESA2") {
			$jmltxbniesa2++;
			$grostxbniesa2 = $grostxbniesa2 + $dgrosku;
		}
		else if ($jenisku == "ESA") {
			$jmltxbniesa1++;
			$grostxbniesa1 = $grostxbniesa1 + $dgrosku;
		}
	}
}
// Cari jumlah data TRANSFER ke Bank LAIN (PUB, ESA1, ESA2)
$jmltxlainpub = 0;
$jmltxlainesa1 = 0;
$jmltxlainesa2 = 0;
$jmltxlainesa = 0;
$grostxlainpub = 0;
$grostxlainesa1 = 0;
$grostxlainesa2 = 0;
$grostxlainesa = 0;

$sql0 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TRF' AND jenisbank='LAIN');";

$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow==0) {
	$jmltxlainpub = 0;
	$jmltxlainesa1 = 0;
	$jmltxlainesa2 = 0;
	$jmltxlainesa = 0;
	$grostxlainpub = 0;
	$grostxlainesa1 = 0;
	$grostxlainesa2 = 0;
	$grostxlainesa = 0;
}
else if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$jenisku = $row['jenisesop'];
		$dgrosku = $row['bayar'];
		if ($jenisku == "PUB") {
			$jmltxlainpub++;
			$grostxlainpub = $grostxlainpub + $dgrosku;
		}
		else if ($jenisku == "ESA1") {
			$jmltxlainesa1++;
			$grostxlainesa1 = $grostxlainesa1 + $dgrosku;
		}
		else if ($jenisku == "ESA2") {
			$jmltxlainesa2++;
			$grostxlainesa2 = $grostxlainesa2 + $dgrosku;
		}
		else if ($jenisku == "ESA") {
			$jmltxlainesa1++;
			$grostxlainesa1 = $grostxlainesa1 + $dgrosku;
		}
	}
}

// Cari jumlah data TRANSFER ke Bank SCB (PUB, ESA1, ESA2)
$jmltxscbpub = 0;
$jmltxscbesa1 = 0;
$jmltxscbesa2 = 0;
$jmltxscbesa = 0;
$grostxscbpub = 0;
$grostxscbesa1 = 0;
$grostxscbesa2 = 0;
$grostxscbesa = 0;
$sql0 = "SELECT * FROM telkomdatindo WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TRF' AND jenisbank='SCB');";
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow==0) {
	$jmltxscbpub = 0;
	$jmltxscbesa1 = 0;
	$jmltxscbesa2 = 0;
	$jmltxscbesa = 0;
	$grostxscbpub = 0;
	$grostxscbesa1 = 0;
	$grostxscbesa2 = 0;
	$grostxscbesa = 0;
}
else if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$jenisku = $row['jenisesop'];
		$dgrosku = $row['bayar'];
		if ($jenisku == "PUB") {
			$jmltxscbpub++;
			$grostxscbpub = $grostxscbpub + $dgrosku;
		}
		else if ($jenisku == "ESA1") {
			$jmltxscbesa1++;
			$grostxscbesa1 = $grostxscbesa1 + $dgrosku;
		}
		else if ($jenisku == "ESA2") {
			$jmltxscbesa2++;
			$grostxscbesa2 = $grostxscbesa2 + $dgrosku;
		}
		else if ($jenisku == "ESA") {
			$jmltxscbesa1++;
			$grostxscbesa1 = $grostxscbesa1 + $dgrosku;
		}
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
		<tr height="30px"> 
		</tr>
</table>
	
<form method="post" name="mysummary" id="mysummary" action="summary.php" method="post">
<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="830px" border="0" cellspacing="0" cellpadding="0">
	<tr height="60px">
		<td colspan="6" style="padding-left: 30px; text-align: left; font-size: 12; height: 40px;">
			<font face="arial" size="4" color="black"><b>Ringkasan (Summary)</b></font>
		</td>
	</tr>
	<tr height="20px">
		<td colspan="6" style="padding-left: 30px; text-align: left; font-size: 12; width: 300px">
		</td>
	</tr>
	<tr>
		<td style="padding-left: 30px; text-align: left; height: 25px; width: 60px">
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
		<td style="padding-left: 0px; text-align: left; width: 50px">
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
		<td style="padding-left: 0px; text-align: left; width: 420px">
		</td>
	</tr>
	<tr height="30px">
	</tr>
	<tr height="30px">
		<td colspan="3" style="padding-left: 30px; text-align: left; width: 100px">
			<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
			<input type="hidden" id="perusid" name="perusid"  value="<?php echo $perushid;?>">
			<a class="button orange medium" onclick="document.mysummary.submit(); return false;">View</a>
		</td>
		<td colspan="3" style="padding-left: 30px; text-align: right; width: 100px">
			<a class="button red medium" onclick="hapusdatatelkom(); return false;">Delete</a>
		</td>
	</tr>
</table>
</form>
	
<DIV align="left">
	<br><br>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="830px" border="0" cellpadding="0" cellspacing="0">
		<tr height="30px">
			<td colspan="6" style="padding-left: 10px; text-align: left; font-size: 12; height: 40px;">
			</td>
		</tr>

		<tr height="40px"> 
            <td style="padding-left: auto; text-align: left; font-size: 12;  width: 120px;">
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 140px">
				<b><i><font face="arial" size="2" color="black">Tunai</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 140px">
				<b><i><font face="arial" size="2" color="black">Transfer BNI</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 140px">
				<b><i><font face="arial" size="2" color="black">Transfer Bank Lain</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 140px">
				<b><i><font face="arial" size="2" color="black">Transfer SCB</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">T O T A L</font></i></b>
			</td>
          </tr>
          <tr height="40px"> 
            <td style="padding-left: 10px; padding-top: 10px; text-align: left; font-size: 12;">
				<b><i><font face="arial" size="2" color="black">PUB</font></i></b>
			</td>
            <td style="padding-right: 10px; padding-top: 10px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print number_format($jmltunpub,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 10px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxbnipub,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 10px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxlainpub,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 10px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxscbpub,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 10px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black">
				<?php 
					$totnum = $jmltunpub + $jmltxbnipub + $jmltxlainpub + $jmltxscbpub;
					print number_format($totnum,0);
				?>
				</font>
			</td>
          </tr>
          <tr height="30px" valign="top"> 
            <td style="padding-left: 10px; padding-top: 0px; text-align: left; font-size: 12;">
				<b><i><font face="arial" size="2" color="black"></font></i></b>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostunpub,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxbnipub,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxlainpub,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxscbpub,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black">
				<?php 
					$totval = $grostunpub + $grostxbnipub + $grostxlainpub + $grostxscbpub;
					print "Rp. " . number_format($totval,0);
				?>
				</font>
			</td>
          </tr>
          <tr height="40px"> 
            <td style="padding-left: 10px; padding-top: 10px; text-align: left; font-size: 12;">
				<b><i><font face="arial" size="2" color="black">ESA 1 / ESA</font></i></b>
			</td>
            <td style="padding-right: 10px; padding-top: 10px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print number_format($jmltunesa1,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 10px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxbniesa1,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 10px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxlainesa1,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 10px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxscbesa1,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 10px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black">
				<?php
					$totnum = $jmltunesa1 + $jmltxbniesa1 + $jmltxlainesa1 + $jmltxscbesa1;
					print number_format($totnum,0);					
				?>
				</font>
			</td>
          </tr>
          <tr height="30px" valign="top"> 
            <td style="padding-left: 10px; padding-top: 0px; text-align: left; font-size: 12;">
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostunesa1,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxbniesa1,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxlainesa1,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxscbesa1,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black">
				<?php
					$totval = $grostunesa1 + $grostxbniesa1 + $grostxlainesa1 + $grostxscbesa1;
					print "Rp. " . number_format($totval,0);
				?>
				</font>
			</td>
          </tr>
          <tr height="40px"> 
            <td style="padding-left: 10px; padding-top: 0px; text-align: left; font-size: 12;">
				<b><i><font face="arial" size="2" color="black">ESA2</font></i></b>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print number_format($jmltunesa2,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxbniesa2,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxlainesa2,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print number_format($jmltxscbesa2,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black">
				<?php
					$totnum = $jmltunesa2 + $jmltxbniesa2 + $jmltxlainesa2 + $jmltxscbesa2;
					print number_format($totnum,0);					
				?>
				</font>
          </tr>
          <tr height="30px" valign="top"> 
            <td style="padding-left: 10px; padding-top: 0px; text-align: left; font-size: 12;">
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostunesa2,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxbniesa2,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxlainesa2,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostxscbesa2,0);?></font>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black">
				<?php
					$totval = $grostunesa2 + $grostxbniesa2 + $grostxlainesa2 + $grostxscbesa2;
					print "Rp. " . number_format($totval,0);
				?>
				</font>
			</td>
        </tr>
        <tr height="20px"> 
			<td colspan="6">
		</tr>
        <tr height="40px" valign="top"> 
            <td style="padding-left: 10px; padding-top: 0px; text-align: left; font-size: 12;">
				<b><i><font face="arial" size="2" color="black">T O T A L</font></i></b>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black">
				<?php 
					$totnum1 = $jmltunpub + $jmltunesa1 + $jmltunesa2;
					print number_format($totnum1,0);
				?>
				</font>
				<p><font face="arial" size="2" color="black">
				<?php
					$totval1 = $grostunpub + $grostunesa1 + $grostunesa2;
					print "Rp. " . number_format($totval1,0);
				?>
				</font></p>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black">
				<?php
					$totnum2 = $jmltxbnipub + $jmltxbniesa1 + $jmltxbniesa2;
					print number_format($totnum2,0);
				?>
				</font>
				<p><font face="arial" size="2" color="black">
				<?php
					$totval2 = $grostxbnipub + $grostxbniesa1 + $grostxbniesa2;
					print "Rp. " . number_format($totval2,0);
				?>
				</font></p>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black">
				<?php
					$totnum3 = $jmltxlainpub + $jmltxlainesa1 + $jmltxlainesa2;
					print number_format($totnum3,0);
				?>
				</font>
				<p><font face="arial" size="2" color="black">
				<?php
					$totval3 = $grostxlainpub + $grostxlainesa1 + $grostxlainesa2;
					print "Rp. " . number_format($totval3,0);
				?>
				</font></p>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<font face="arial" size="2" color="black">
				<?php
					$totnum4 = $jmltxscbpub + $jmltxscbesa1 + $jmltxscbesa2;
					print number_format($totnum4,0);
				?>
				</font>
				<p><font face="arial" size="2" color="black">
				<?php
					$totval4 = $grostxscbpub + $grostxscbesa1 + $grostxscbesa2;
					print "Rp. " . number_format($totval4,0);
				?>
				</font></p>
			</td>
            <td style="padding-right: 10px; padding-top: 0px; text-align: right; font-size: 12;">
				<b><font face="arial" size="2" color="black">
				<?php
					$totnum = $totnum1 + $totnum2 + $totnum3 + $totnum4;
					print number_format($totnum,0);					
				?>
				</font></b>
				<p><b><font face="arial" size="2" color="black">
				<?php
					$totval = $totval1 + $totval2 + $totval3 + $totval4;
					print "Rp. " . number_format($totval,0);
				?>
				</font></b></p>
			</td>
          </tr>
    </table>
</DIV>