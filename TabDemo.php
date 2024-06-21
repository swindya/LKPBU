<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0049)http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Tab Demo</title>
<script type="text/javascript" src="./events.js"></script>
<script type="text/javascript" src="./util.js"></script><style type="text/css"></style>
<script type="text/javascript" src="./tabs.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="./tabs.css">
<style type="text/css">
body {
	background:#fff;
	margin:2em;
	padding:0;
	color:#000;
	font:x-small/1.5em Arial,Serif;
	voice-family: "\"}\""; voice-family:inherit;
	font-size:small;
} html>body {font-size: small;}
</style>

<!--[if IE]>
<style type="text/css" media="screen">
body {
	font-size: x-small;
}
</style>
<![endif]-->

<style type="text/css">
h2 {
	font-size: 1em;
	color: #765;
	margin: 0 0 0.5em;
}
p { margin: 0.5em 0; }

#body1, #body2 {
	width: 35em;
	height: 8em;
	border: 1px solid #765;
	color: #333;
}
label {
	display: block;
}
</style>
</head>
<body class="tabs">
<?php
if (!isset($_GET["code"])) {
	$selectme="none";
}
else
	$selectme=$_GET["code"];

echo $selectme;
?>
<h1>Data Perusahaan</h1>

<div class="tabs">
  <ul>
    <li class="selected"><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#profil">Profil</a></li>
    <li><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#news">Dokumen</a></li>
    <li><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#ps">Hak &amp; Kewajiban</a></li>
    <li><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#about">Fee</a></li>
    <li><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#contact">PIC</a></li>
	<li><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#contact">Outstanding/Informasi</a></li>
    <li><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#contact">Audit Trail</a></li>
    <li><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#contact">Others</a></li>
  </ul>
</div>
<div class="tabBody">
	<div id="profil" class="tabItem selected">
		<h2>Profil Perusahaan</h2>
		<p>Profilmu, dhe.</p>
	</div>

	<div id="dokumen" class="tabItem">
		<h2>Dokumen Perusahaan</h2>
		<p></p>
		<div class="tabs">
		  <ul>
			<li class="selected"><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#local">KTP</a></li>
			<li><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#worldwide">TDP</a></li>
			<li><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#worldwide">NPWP</a></li>
		  </ul>
		</div>
		<div class="tabBody">
			<div id="ktp" class="tabItem selected">
				<h2>KTP</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non orci a ipsum rhoncus consectetuer. Ut in felis. Donec malesuada, dui pharetra dictum suscipit, neque elit eleifend lacus, in eleifend sem metus non erat. Aenean elit tortor, dignissim eget, volutpat in, condimentum a, elit. Sed eros justo, ornare sed, ultrices sit amet, luctus eu, ante. Mauris mi. Maecenas est. Praesent aliquet. Aliquam rutrum blandit ligula. Vivamus porttitor dapibus augue. Mauris tellus nunc, blandit sit amet, volutpat sit amet, feugiat in, urna. Sed nibh. Morbi nibh eros, feugiat in, porta a, semper tincidunt, erat.</p>
			</div>
			<div id="tdp" class="tabItem">
				<h2>TDP</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non orci a ipsum rhoncus consectetuer. Ut in felis. Donec malesuada, dui pharetra dictum suscipit, neque elit eleifend lacus, in eleifend sem metus non erat. Aenean elit tortor, dignissim eget, volutpat in, condimentum a, elit. Sed eros justo, ornare sed, ultrices sit amet, luctus eu, ante. Mauris mi. Maecenas est. Praesent aliquet. Aliquam rutrum blandit ligula. Vivamus porttitor dapibus augue. Mauris tellus nunc, blandit sit amet, volutpat sit amet, feugiat in, urna. Sed nibh. Morbi nibh eros, feugiat in, porta a, semper tincidunt, erat.</p>
			</div>
			<div id="tdp" class="tabItem">
				<h2>NPWP</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non orci a ipsum rhoncus consectetuer. Ut in felis. Donec malesuada, dui pharetra dictum suscipit, neque elit eleifend lacus, in eleifend sem metus non erat. Aenean elit tortor, dignissim eget, volutpat in, condimentum a, elit. Sed eros justo, ornare sed, ultrices sit amet, luctus eu, ante. Mauris mi. Maecenas est. Praesent aliquet. Aliquam rutrum blandit ligula. Vivamus porttitor dapibus augue. Mauris tellus nunc, blandit sit amet, volutpat sit amet, feugiat in, urna. Sed nibh. Morbi nibh eros, feugiat in, porta a, semper tincidunt, erat.</p>
			</div>
		</div>
		</div>

	<div id="hakkewajiban" class="tabItem">
		<h2>Products &amp; Services Tab</h2>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non orci a ipsum rhoncus consectetuer. Ut in felis. Donec malesuada, dui pharetra dictum suscipit, neque elit eleifend lacus, in eleifend sem metus non erat. Aenean elit tortor, dignissim eget, volutpat in, condimentum a, elit. Sed eros justo, ornare sed, ultrices sit amet, luctus eu, ante. Mauris mi. Maecenas est. Praesent aliquet. Aliquam rutrum blandit ligula. Vivamus porttitor dapibus augue. Mauris tellus nunc, blandit sit amet, volutpat sit amet, feugiat in, urna. Sed nibh. Morbi nibh eros, feugiat in, porta a, semper tincidunt, erat.</p>
	</div>

	<div id="fee" class="tabItem">
		<h2>About Tab</h2>
		<div class="tabs">
		  <ul>
			<li class="selected"><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#local">Local</a></li>
			<li><a href="http://tanny.ica.com/ICA/TKO/test.nsf/tabdemo.htm#worldwide">Worldwide</a></li>
		  </ul>
		</div>
		<div class="tabBody">
			<div id="local" class="tabItem selected">
				<h2>Local Tab</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non orci a ipsum rhoncus consectetuer. Ut in felis. Donec malesuada, dui pharetra dictum suscipit, neque elit eleifend lacus, in eleifend sem metus non erat. Aenean elit tortor, dignissim eget, volutpat in, condimentum a, elit. Sed eros justo, ornare sed, ultrices sit amet, luctus eu, ante. Mauris mi. Maecenas est. Praesent aliquet. Aliquam rutrum blandit ligula. Vivamus porttitor dapibus augue. Mauris tellus nunc, blandit sit amet, volutpat sit amet, feugiat in, urna. Sed nibh. Morbi nibh eros, feugiat in, porta a, semper tincidunt, erat.</p>
			</div>
			<div id="worldwide" class="tabItem">
				<h2>Worldwide Tab</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non orci a ipsum rhoncus consectetuer. Ut in felis. Donec malesuada, dui pharetra dictum suscipit, neque elit eleifend lacus, in eleifend sem metus non erat. Aenean elit tortor, dignissim eget, volutpat in, condimentum a, elit. Sed eros justo, ornare sed, ultrices sit amet, luctus eu, ante. Mauris mi. Maecenas est. Praesent aliquet. Aliquam rutrum blandit ligula. Vivamus porttitor dapibus augue. Mauris tellus nunc, blandit sit amet, volutpat sit amet, feugiat in, urna. Sed nibh. Morbi nibh eros, feugiat in, porta a, semper tincidunt, erat.</p>
			</div>
		</div>
	</div>

	<div id="contact" class="tabItem">
		<h2>Contact Tab</h2>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non orci a ipsum rhoncus consectetuer. Ut in felis. Donec malesuada, dui pharetra dictum suscipit, neque elit eleifend lacus, in eleifend sem metus non erat. Aenean elit tortor, dignissim eget, volutpat in, condimentum a, elit. Sed eros justo, ornare sed, ultrices sit amet, luctus eu, ante. Mauris mi. Maecenas est. Praesent aliquet. Aliquam rutrum blandit ligula. Vivamus porttitor dapibus augue. Mauris tellus nunc, blandit sit amet, volutpat sit amet, feugiat in, urna. Sed nibh. Morbi nibh eros, feugiat in, porta a, semper tincidunt, erat.</p>
		<label for="body2">Comments</label>
		<textarea name="body2" id="body2"></textarea>
	</div>
</div>


</body></html>