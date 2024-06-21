<?php
// Cari jumlah data TUNAI 
$jmlcek = 0;
$groscek = 0;

$sql0 = "SELECT COUNT(ID) AS jmldata, SUM(gross) AS mygross, SUM(pajak) AS mypajak, SUM(netto) AS jmlnet FROM gudanggaram WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='CEK');";
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow==0) {
	$jmlcek = 0;
	$groscek = 0;
}
else if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$jmlcek = $row['jmldata'];
		$groscek = $row['jmlnet'];
		$gross = $row['mygross'];
		$pajak = $row['mypajak'];
		$netto = $gross - $pajak;
		if ($groscek==0)
			$groscek = $netto;
	}
}

// Cari jumlah data TRANSFER
$jmltx = 0;
$grostx = 0;

$sql0 = "SELECT COUNT(ID) AS jmldata, SUM(netto) AS jmlnet FROM gudanggaram WHERE (perusahaanID=" . $perushid . " AND tahun=" . $tahun . 
		" AND batchtahun=" . $batch . " AND jenisbayar='TRF');";
$jmlrow = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow==0) {
	$jmltx = 0;
	$grostx = 0;
}
else if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$jmltx = $row['jmldata'];
		$grostx = $row['jmlnet'];
	}
}

?>


	<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="100%" border="0" cellpadding="2" cellspacing="0">
          <tr height="30px"> 
            <td style="padding-left: 30px; text-align: left; font-size: 12; height: 30px">
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
			<td align="left" style="padding-left: 30px; padding-top: 10px; text-align: left; font-size: 12;">
				<img style="padding-left: auto;" align="left" src="./img/line1.png" height="5px" width="800px">
			</td>
		</tr>
		<tr height="30px"> 
		</tr>
    </table>
	
<form method="post" name="mysummary" id="mysummary" action="summary.php" method="post">
<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="700px" border="0" cellspacing="0" cellpadding="0">
	<tr valign="middle" height="60px">
		<td colspan="6" style="padding-left: 30px; text-align: left; font-size: 12; height: 40px; width=50%">
			<font face="arial" color="black" size="4"><b>Ringkasan (Summary)</b></font>
		</td>
	</tr>
	<tr height="20px">
		<td colspan="6" style="padding-left: 30px; text-align: left; font-size: 12; height: 40px; width=50%">
		</td>
	</tr>
	<tr>
		<td style="padding-left: 30px; text-align: left; height: 25px; width: 60px">
			<font size="2" face="arial" color="black">Tahun :</font>
		</td>
		<td style="padding-left: 0px; text-align: left; width: 120px">
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
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
			</font>
		</td>
		<td style="padding-left: 0px; text-align: left; width: 280px">
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
			<a class="button red medium" onclick="hapusdatagg(); return false;">Delete</a>
		</td>
	</tr>
</table>
</form>
	
<DIV align="left">
	<br><br>
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="780px" border="0" cellpadding="0" cellspacing="0">
		<tr height="30px">
		</tr>
		<tr height="40px"> 
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">Cek/Tunai</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">Transfer</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 180px">
				<b><i><font face="arial" size="2" color="black">T O T A L</font></i></b>
			</td>
        </tr>
        <tr height="60px"> 
            <td style="padding-right: 10px; text-align: center; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmlcek,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($groscek,0);?></font></p>
			</td>
            <td style="padding-right: 10px; text-align: center; font-size: 12; width: 120px">
				<font face="arial" size="2" color="black"><?php print number_format($jmltx,0);?></font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black"><?php print "Rp. " . number_format($grostx,0);?></font></p>
			</td>
             <td style="padding-right: 10px; text-align: center; font-size: 12; width: 150px">
				<font face="arial" size="2" color="black">
				<?php 
					$totnum = $jmlcek + $jmltx;
					print number_format($totnum,0);
				?>
				</font>
				<p><font face="arial" size="1" color="black">&nbsp;</font></p>
				<p><font face="arial" size="2" color="black">
				<?php 
					$totval = $groscek + $grostx;
					print "Rp. " . number_format($totval,0);
				?>
				</font></p>
			</td>
        </tr>

    </table>
</DIV>