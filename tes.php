<?php

$aa = "TLKM";
$aarr = explode(" ", $aa);
	$countsppd = count($aarr);
	if ($countsppd > 1)
		$sppd = $sppdarr[$countsppd-1];
echo $countsppd . "--" . $aarr[0];

?>