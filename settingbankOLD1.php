<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Setting Data Kliring</title>
<link rel="stylesheet" href="./sexyalertbox/global.css" type="text/css" media="all" />
<?php
session_start();
?>
<style type="text/css">
<!--
@import url("styletable.css");
-->
</style>
<script src="jquery-1.11.2.min.js"></script>
<link href="stylemenuhoriz.css" rel="stylesheet" />
<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
<link rel="shortcut icon" href="logobnilogo.jpg" />
<link rel="stylesheet" type="text/css" href="styletablekliring.css">
<link rel="stylesheet" type="text/css" href="./themes/icon.css">
<link rel="stylesheet" type="text/css" href="./demo/demo.css">
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.easyui.min.js"></script>
<script src="jquery-1.3.2.min.js" language="javascript" type="text/javascript"></script>
<script src="jquery-blink.js" language="javscript" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function()
{
	$('.blink').blink();
});
</script>
<link type='text/css' href='./simplemodal/basic/css/basic.css' rel='stylesheet' media='screen' />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
var SITE = SITE || {};
 
SITE.fileInputs = function() {
  var $this = $(this),
      $val = $this.val(),
      valArray = $val.split('\'),
      newVal = valArray[valArray.length-1],
      $button = $this.siblings('.button'),
      $fakeFile = $this.siblings('.file-holder');
  if(newVal !== '') {
    $button.text('File Chosen');
    if($fakeFile.length === 0) {
      $button.after('<span class="file-holder">' + newVal + '</span>');
    } else {
      $fakeFile.text(newVal);
    }
  }
};
 
$(document).ready(function() {
  $('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);
});
</script>
<script language="javascript">

function pauseme(ms) {
	ms += new Date().getTime();
	while (new Date() < ms){}
} 

</script>
<script>
 	function updateform(form, aa) {
		//var usermu = document.getElementsByName("username")[0].value;
		var idku = "id" + aa;
		var kodeku = "kode" + aa;
		var namabankku = "namabank" + aa;
		var jenisusahaku = "jenisusaha" + aa;
		var kodemu = document.getElementsByName(kodeku)[0].value;
		var namabankmu = document.getElementsByName(namabankku)[0].value;
		var jenisusahamu = document.getElementsByName(jenisusahaku)[0].value;

		//var selectnpwpme = document.getElementsByName(selectnku)[0].value;
		if (kodemu == null || kodemu == "" || namabankmu == null || namabankmu == "") {
			alert("Data ada yg kosong/invalid");
		}
		else {
			//window.open("registeruser.php",'_blank');
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			} 
			else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","updatekodekliring.php?id=" + aa + "&kode=" + kodemu + "&namabank=" + namabankmu + "&jenisusaha=" + jenisusahamu ,true);
			xmlhttp.send();
		//alert("Data sudah di-update");
		
		//pauseme(1000);
			alert("Data sudah terupdate");
			window.location.reload();
			window.location.refresh();
			}



	}
	
 	function delform(forme, id) {
		var r = confirm("Konfirmasi Penghapusan :!\nApakah anda yakin akan hapus data ?");
		if (r==true)
		{	
			//window.open("registeruser.php",'_blank');
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			} 
			else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","delkliring.php?id=" + id,true);
			xmlhttp.send();
		//alert("Data sudah di-update");
		
		//pauseme(1000);
			window.location.reload();
			window.location.refresh();
			alert("Data sudah terupdate");
		}
		//document.forms.submit();
	}

 	function cekadd(myform) {
		var kodekliring = document.getElementsByName("kodekliring")[0].value;
		var namabank = document.getElementsByName("namabank")[0].value;
		if (kodekliring == null || kodekliring == "" || namabank == null || namabank == "")
		{
			return false;
		}
		else
		{
			return true;
		}
	}

</script>

<style>
#dark{
	background-color:#333;
	border:1px solid #000;
	padding:10px;
	margin-top:20px;}
	
#light{
	background-color:#FFF;
	border:1px solid #dedede;
	padding:10px;
	margin-top:20px;}	
	
li{ 
list-style:none;
	padding-top:10px;
	padding-bottom:10px;}	

.button, .button:visited {
	background: #222 url(overlay.png) repeat-x; 
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
	cursor: pointer
}
 
	.button:hover							{ background-color: #111; color: #fff; }
	.button:active							{ top: 1px; }
	.small.button, .small.button:visited 			{ font-size: 11px}
	.button, .button:visited,
	.medium.button, .medium.button:visited 		{ font-size: 12px; 
												  font-weight: bold; 
												  line-height: 1; 
												  text-shadow: 0 -1px 1px rgba(0,0,0,0.25); 
												  }
												  
	.large.button, .large.button:visited 			{ font-size: 14px; 
													  padding: 8px 14px 9px; }
													  
	.super.button, .super.button:visited 			{ font-size: 34px; 
													  padding: 8px 14px 9px; }
	
	.pink.button, .magenta.button:visited		{ background-color: #e22092; }
	.pink.button:hover							{ background-color: #c81e82; }
	.green.button, .green.button:visited		{ background-color: #91bd09; }
	.green.button:hover						    { background-color: #749a02; }
	.red.button, .red.button:visited			{ background-color: #e62727; }
	.red.button:hover							{ background-color: #cf2525; }
	.orange.button, .orange.button:visited		{ background-color: #ff5c00; }
	.orange.button:hover						{ background-color: #d45500; }
	.blue.button, .blue.button:visited		    { background-color: #2981e4; }
	.blue.button:hover							{ background-color: #2575cf; }
	.yellow.button, .yellow.button:visited		{ background-color: #ffb515; }
	.yellow.button:hover						{ background-color: #fc9200; }
</style>
<style type="text/css">

/* button 
---------------------------------------------- */
.button {
	display: inline-block;
	zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */
	*display: inline;
	vertical-align: baseline;
	margin: 0 2px;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	font: 14px/100% Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	-webkit-border-radius: .5em; 
	-moz-border-radius: .5em;
	border-radius: .5em;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
.button:hover {
	text-decoration: none;
}
.button:active {
	position: relative;
	top: 1px;
}

.bigrounded {
	-webkit-border-radius: 2em;
	-moz-border-radius: 2em;
	border-radius: 2em;
}
.medium {
	font-size: 12px;
	padding: .4em 1.4em .40em;
}
.small {
	font-size: 11px;
	padding: .2em 1em .275em;
}

/* color styles 
---------------------------------------------- */

/* black */
.black {
	color: #d7d7d7;
	border: solid 1px #333;
	background: #333;
	background: -webkit-gradient(linear, left top, left bottom, from(#666), to(#000));
	background: -moz-linear-gradient(top,  #666,  #000);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#666666', endColorstr='#000000');
}
.black:hover {
	background: #000;
	background: -webkit-gradient(linear, left top, left bottom, from(#444), to(#000));
	background: -moz-linear-gradient(top,  #444,  #000);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#444444', endColorstr='#000000');
}
.black:active {
	color: #666;
	background: -webkit-gradient(linear, left top, left bottom, from(#000), to(#444));
	background: -moz-linear-gradient(top,  #000,  #444);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#666666');
}

/* gray */
.gray {
	color: #e9e9e9;
	border: solid 1px #555;
	background: #6e6e6e;
	background: -webkit-gradient(linear, left top, left bottom, from(#888), to(#575757));
	background: -moz-linear-gradient(top,  #888,  #575757);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#888888', endColorstr='#575757');
}
.gray:hover {
	background: #616161;
	background: -webkit-gradient(linear, left top, left bottom, from(#757575), to(#4b4b4b));
	background: -moz-linear-gradient(top,  #757575,  #4b4b4b);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#757575', endColorstr='#4b4b4b');
}
.gray:active {
	color: #afafaf;
	background: -webkit-gradient(linear, left top, left bottom, from(#575757), to(#888));
	background: -moz-linear-gradient(top,  #575757,  #888);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#575757', endColorstr='#888888');
}

/* white */
.white {
	color: #606060;
	border: solid 1px #b7b7b7;
	background: #fff;
	background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ededed));
	background: -moz-linear-gradient(top,  #fff,  #ededed);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed');
}
.white:hover {
	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#dcdcdc));
	background: -moz-linear-gradient(top,  #fff,  #dcdcdc);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dcdcdc');
}
.white:active {
	color: #999;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#fff));
	background: -moz-linear-gradient(top,  #ededed,  #fff);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#ffffff');
}

/* orange */
.orange {
	color: #fef4e9;
	border: solid 1px #da7c0c;
	background: #f78d1d;
	background: -webkit-gradient(linear, left top, left bottom, from(#faa51a), to(#f47a20));
	background: -moz-linear-gradient(top,  #faa51a,  #f47a20);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
}
.orange:hover {
	background: #f47c20;
	background: -webkit-gradient(linear, left top, left bottom, from(#f88e11), to(#f06015));
	background: -moz-linear-gradient(top,  #f88e11,  #f06015);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
}
.orange:active {
	color: #fcd3a5;
	background: -webkit-gradient(linear, left top, left bottom, from(#f47a20), to(#faa51a));
	background: -moz-linear-gradient(top,  #f47a20,  #faa51a);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f47a20', endColorstr='#faa51a');
}

/* red */
.red {
	color: #faddde;
	border: solid 1px #980c10;
	background: #d81b21;
	background: -webkit-gradient(linear, left top, left bottom, from(#ed1c24), to(#aa1317));
	background: -moz-linear-gradient(top,  #ed1c24,  #aa1317);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ed1c24', endColorstr='#aa1317');
}
.red:hover {
	background: #b61318;
	background: -webkit-gradient(linear, left top, left bottom, from(#c9151b), to(#a11115));
	background: -moz-linear-gradient(top,  #c9151b,  #a11115);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#c9151b', endColorstr='#a11115');
}
.red:active {
	color: #de898c;
	background: -webkit-gradient(linear, left top, left bottom, from(#aa1317), to(#ed1c24));
	background: -moz-linear-gradient(top,  #aa1317,  #ed1c24);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#aa1317', endColorstr='#ed1c24');
}

/* blue */
.blue {
	color: #d9eef7;
	border: solid 1px #0076a3;
	background: #0095cd;
	background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
	background: -moz-linear-gradient(top,  #00adee,  #0078a5);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');
}
.blue:hover {
	background: #007ead;
	background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
	background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#0095cc', endColorstr='#00678e');
}
.blue:active {
	color: #80bed6;
	background: -webkit-gradient(linear, left top, left bottom, from(#0078a5), to(#00adee));
	background: -moz-linear-gradient(top,  #0078a5,  #00adee);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#0078a5', endColorstr='#00adee');
}

/* rosy */
.rosy {
	color: #fae7e9;
	border: solid 1px #b73948;
	background: #da5867;
	background: -webkit-gradient(linear, left top, left bottom, from(#f16c7c), to(#bf404f));
	background: -moz-linear-gradient(top,  #f16c7c,  #bf404f);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f16c7c', endColorstr='#bf404f');
}
.rosy:hover {
	background: #ba4b58;
	background: -webkit-gradient(linear, left top, left bottom, from(#cf5d6a), to(#a53845));
	background: -moz-linear-gradient(top,  #cf5d6a,  #a53845);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#cf5d6a', endColorstr='#a53845');
}
.rosy:active {
	color: #dca4ab;
	background: -webkit-gradient(linear, left top, left bottom, from(#bf404f), to(#f16c7c));
	background: -moz-linear-gradient(top,  #bf404f,  #f16c7c);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#bf404f', endColorstr='#f16c7c');
}

/* green */
.green {
	color: #e8f0de;
	border: solid 1px #538312;
	background: #64991e;
	background: -webkit-gradient(linear, left top, left bottom, from(#7db72f), to(#4e7d0e));
	background: -moz-linear-gradient(top,  #7db72f,  #4e7d0e);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#7db72f', endColorstr='#4e7d0e');
}
.green:hover {
	background: #538018;
	background: -webkit-gradient(linear, left top, left bottom, from(#6b9d28), to(#436b0c));
	background: -moz-linear-gradient(top,  #6b9d28,  #436b0c);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#6b9d28', endColorstr='#436b0c');
}
.green:active {
	color: #a9c08c;
	background: -webkit-gradient(linear, left top, left bottom, from(#4e7d0e), to(#7db72f));
	background: -moz-linear-gradient(top,  #4e7d0e,  #7db72f);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#4e7d0e', endColorstr='#7db72f');
}

/* pink */
.pink {
	color: #feeef5;
	border: solid 1px #d2729e;
	background: #f895c2;
	background: -webkit-gradient(linear, left top, left bottom, from(#feb1d3), to(#f171ab));
	background: -moz-linear-gradient(top,  #feb1d3,  #f171ab);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#feb1d3', endColorstr='#f171ab');
}
.pink:hover {
	background: #d57ea5;
	background: -webkit-gradient(linear, left top, left bottom, from(#f4aacb), to(#e86ca4));
	background: -moz-linear-gradient(top,  #f4aacb,  #e86ca4);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4aacb', endColorstr='#e86ca4');
}
.pink:active {
	color: #f3c3d9;
	background: -webkit-gradient(linear, left top, left bottom, from(#f171ab), to(#feb1d3));
	background: -moz-linear-gradient(top,  #f171ab,  #feb1d3);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f171ab', endColorstr='#feb1d3');
}
</style>
<style type="text/css">
.file-wrapper {
    position: relative;
    display: inline-block;
    overflow: hidden;
    cursor: pointer;
}
.file-wrapper input {
    position: absolute;
    top: 0;
    right: 0;
    filter: alpha(opacity=1);
    opacity: 0.01;
    -moz-opacity: 0.01;
    cursor: pointer;
}
.file-wrapper .button {
    color: #fff;
    background: #117300;
    padding: 4px 18px;
    margin-right: 5px;  
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    display: inline-block;
    font-weight: bold;
    cursor: pointer;
}
.file-holder{
    color: #000;
}
</style>
<style>
input.submit {
    width: 10em;  height: 4em;
}
input.cetaksemua {
    width: 9em;  height: 2.8em;
}
input.uploadfile {
    width: 8em;  height: 2em;
}
</style>
<style type="text/css">
input {
background-color: transparent;
color: #000;
border: none;
}
</style>
<style> 
  .textboxnarrow { 
    border: 1px solid #c4c4c4; 
    height: 20px; 
    width: 60px; 
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
} 
 </style> 
<style> 
  .textbox { 
    border: 1px solid #c4c4c4; 
    height: 20px; 
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
 
.textbox:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
} 
 </style> 
<script>
function disenable(myform, i, aa) {
for (ii = 1; ii <= i; ii++) { 
	document.getElementById('kode'+ii).style.backgroundColor='transparent';
	document.getElementById('kode'+ii).readOnly = true;
	document.getElementById('namabank'+ii).style.backgroundColor='transparent';
	document.getElementById('namabank'+ii).readOnly = true;
}
document.getElementById(aa).style.backgroundColor='white';
document.getElementById(aa).readOnly = false;
}

function lockme(myform, i, aa) {
for (ii = 1; ii <= i; ii++) { 
	//document.getElementById('kode'+ii).style.backgroundColor='transparent';
	//document.getElementById('kode'+ii).readOnly = true;
	//document.getElementById('namabank'+ii).style.backgroundColor='transparent';
	//document.getElementById('namabank'+ii).readOnly = true;
}
}
</script>

</head>
<body>
<script type="text/javascript"><!--
google_ad_client = "pub-6896919298908258";
/* 728x90, creado 27/08/08 */
google_ad_slot = "4399429285";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>

<style>
.menu1,
.menu1 ul,
.menu1 li,
.menu1 a {
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
}
 
.menu1 { /*Find this class in the css file*/

height: 40px;
width: 100%; /*I changed this to a percentage of the page,*/
margin-left:auto; /*Then added these two margin styles.*/
margin-right:auto;

background: #4c4e5a;
background: -webkit-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
background: -moz-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
background: -o-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
background: -ms-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
background: linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);

-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}
 
.menu1 li {
    position: relative;
    list-style: none;
    float: left;
    display: block;
    height: 40px;
}
.menu1 li a {
    display: block;
    padding: 0 14px;
    margin: 6px 0;
    line-height: 28px;
    text-decoration: none;
 
    border-left: 1px solid #393942;
    border-right: 1px solid #4f5058;
 
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold;
    font-size: 13px;
 
    color: #f3f3f3;
    text-shadow: 1px 1px 1px rgba(0,0,0,.6);
 
    -webkit-transition: color .2s ease-in-out;
    -moz-transition: color .2s ease-in-out;
    -o-transition: color .2s ease-in-out;
    -ms-transition: color .2s ease-in-out;
    transition: color .2s ease-in-out;
}
 
.menu1 li:first-child a { border-left: none; }
.menu1 li:last-child a{ border-right: none; }
 
.menu1 li:hover > a { color: #ffffff; 
  background: #ff9122;
  background: -moz-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffba5b), color-stop(100%, #fd6522));
  background: -webkit-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -o-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -ms-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: linear-gradient(to bottom, #ffba5b 0%, #fd6522 100%);
}
.menu1 li.active > a{
  background: #ff9122;
  background: -moz-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffba5b), color-stop(100%, #fd6522));
  background: -webkit-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -o-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: -ms-linear-gradient(top, #ffba5b 0%, #fd6522 100%);
  background: linear-gradient(to bottom, #ffba5b 0%, #fd6522 100%);
}
.menu1 ul {
    
    position: absolute;
    top: 40px;
    left: 0;
 
    opacity: 50;
    background: #1f2024;
 
    -webkit-border-radius: 0 0 5px 5px;
    -moz-border-radius: 0 0 5px 5px;
    border-radius: 0 0 5px 5px;
 
    -webkit-transition: opacity .25s ease .1s;
    -moz-transition: opacity .25s ease .1s;
    -o-transition: opacity .25s ease .1s;
    -ms-transition: opacity .25s ease .1s;
    transition: opacity .25s ease .1s;

}
 
.menu1 li:hover > ul { opacity: 50; }
 
.menu1 ul li {
    height: 0;
    overflow: hidden;
    padding: 0;
 
    -webkit-transition: height .25s ease .1s;
    -moz-transition: height .25s ease .1s;
    -o-transition: height .25s ease .1s;
    -ms-transition: height .25s ease .1s;
    transition: height .25s ease .1s;
}
 
.menu1 li:hover > ul li {
    height: 36px;
    overflow: visible;
    padding: 0;
}
.menu1 ul li a {
    width: 200px;
    padding: 4px 0 4px 16px;
    margin: 0;
 
    border: none;
    border-bottom: 1px solid #353539;
}
 
.menu1 ul li:last-child a { border: none; 
}
.menu1 a.documents { background: url(../img/docs.png) no-repeat 6px center; }
.menu1 a.messages { background: url(../img/bubble.png) no-repeat 6px center; }
.menu1 a.signout { background: url(../img/arrow.png) no-repeat 6px center;
}
</style>
<script type="text/javascript" src="jquery.min.js"></script>

<?php
include "koneksi.php";

ini_set('max_execution_time', 50); //300 seconds = 5 minutes

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
//----------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//----------------------------------------------
if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];
	
$perushid = 0;
$bulan = 0;
$tahun = 0;

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

if (!isset($_POST["batch"])) {
	$batch=$_SESSION["batch"];
}
else
	$batch=$_POST["batch"];


$bulanarr = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

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
		$userid = $row['ID'];
		$levelid = $row['levelid'];
	}
}
 
$now = time(); // Checking the time now when home page starts.
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
if (isset($_SESSION['expire'])) {
	if ($now > $_SESSION['expire']) {
		unset($_SESSION['username']); 
		unset($_SESSION['passwd']); 
		$_SESSION['statuslogin'] = 7;//session expired
?>
<meta http-equiv="refresh" content="0; url=login.php" />
<?php
die;
	}
}

$tahuniki = date("Y");
$tahuniki2 = substr($tahuniki,2);

if (date("m")==1) {
	$tahuniki2 = $tahuniki2 - 1;
}

?>
<ul class="menu1">
	<li><a href='menu1.php'><span>Home</span></a></li>
	<li><a href='uploadfile.php'><span>Impor Data</span></a></li>
	<li><a href='viewdata.php'><span>View Data</span></a></li>
	<li><a href='bayarawal.php'><span>Pembayaran Transfer Awal</span></a></li>
	<li><a href='retur.php'><span>Retur & Susulan</span></a>
        <ul>
            <li><a href="returupload.php" class="documents">Retur - Upload Data/File</a></li>
            <li><a href="retur.php" class="messages">Retur - View & Create File</a></li>
            <li><a href="susulanupload.php" class="signout">Susulan - Upload Data/File</a></li>
			<li><a href="susulan.php" class="signout">Susulan - View & Create File</a></li>
        </ul>
	</li>
	<li><a href='returbayar.php'><span>Pembayaran Retur</span></a></li>
	<li><a href='laporan.php'><span>Laporan</span></a></li>
	<li><a href='summary.php'><span>Ringkasan</span></a></li>
	<li class='active'><a href='#'><span>Setting</span></a>
        <ul>
            <li><a href="settingbayardeviden.php" class="documents">Batch Pembayaran Deviden</a></li>
            <li><a href="settingbank.php" class="documents">Bank & Kode Kliring</a></li>
            <li><a href="settingjenisusaha.php" class="documents">JenisUsaha</a></li>
        </ul>
	</li>
	<li class='last'><a href='mainmenu.php'><span>Menu Utama</span></a></li>
</ul>

	
<table style="text-align: center; margin-left: auto; margin-right: auto;" width="700px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px"> 
		<td></td>
	</tr>
	<tr height="70px"> 
		<td colspan="3">
			<table style="height: 50px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="700px">
				<tbody>
					<tr height="50px" valign="top">
						<!--form action="gennofaktur.php" id="genfaktur" name="genfaktur" target=_blank method="POST"-->
					  <form action="printmeletterall.php" id="printfaktur" name="printfaktur" target=_blank method="POST">
						<td style="padding-left: auto; text-align: center;" width="400px">
							<p><FONT face="arial" color="black" size="5"><b>Daftar Kode Kliring Bank</b></FONT></p>
							</font>
						</td>
					  </form>
					</tr>
				</tbody>
			</table>
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
			<form method="post" class="signin" id="addkliring" onsubmit="return cekadd(this.form); return false;" action="addkliring.php">
				<table style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="400px">
					<tr height="50px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="#99DDDD" size="4">Data Kliring Bank Baru</FONT>
						</td>
					</tr>
					<tr height="20px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="35px">
						<td style="padding-left: auto; text-align: center;" width="100px">
							<FONT face="arial" color="blue" size="2">Kode Kliring</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;" width="250px">
							<FONT face="arial" color="blue" size="2">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;" class="textboxnarrow" id="kodekliring" name="kodekliring" value="" type="text">
							</FONT>
						</td>
					</tr>
					<tr height="35px">
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="2">Nama Bank</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;" class="textbox" id="namabank" name="namabank" value="" type="text" size="30">
						</td>
					</tr>
					<tr height="35px">
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="2">Jenis Usaha</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="2">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<div class="side-by-side clearfix">
							<select id="jenisusaha" name="jenisusaha" data-placeholder="Jenis Usaha" STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px; background-color: #444444;">
								<option value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
								<option value="1">1</option>
								<option value="2">2</option>
							</select> 
							</div>
						</td>
					</tr>
					<tr height="20px">
						<td colspan="3" style="padding-left: auto; text-align: center;" width="200px">
						</td>
					</tr>
					<tr height="50px">
						<td colspan="3" style="padding-left: auto; text-align: center;" width="200px">
							<button input type="submit">Tambahkan</button>
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




<table style="text-align: center; margin-left: auto; margin-right: auto;" width="700px" border="0" cellspacing="0" cellpadding="0">
	<tr height="40px">
		<td colspan="3" style="padding-left: auto; text-align: right">
		<div id='basic-modal'>
			<a href="#" class="basic">
				<img src="./images/add24.png">
			</a> &nbsp;
			<button type="text" class="basic">Tambah Data</button>
		</div>
		</td>
	</tr>
	<tr>
		<td style="padding-left: auto; text-align: center">
			<table id="gradient-style" summary="Meeting Results" style="text-align: center; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="700px">
				<thead height="40px">
					<tr>
						<th scope="col" width="30px" style="padding-left: auto; text-align: center; font-size: 14;"><FONT face="arial" color="black"><b>NO</b></FONT></th>
						<th scope="col" width="120px" style="padding-left: auto; text-align: center; font-size: 14;"><FONT face="arial" color="black"><b>KODE KLIRING</b></FONT></th>
						<th scope="col" width="300px" style="padding-left: auto; text-align: center; font-size: 14;"><FONT face="arial" color="black"><b>NAMA BANK</b></FONT></th>
						<th scope="col" width="90px" style="padding-left: auto; text-align: center; font-size: 14;"><FONT face="arial" color="black"><b>JENIS USAHA</b></FONT></th>
						<th scope="col" width="90px" style="padding-left: auto; text-align: center; font-size: 14;"><FONT face="arial" color="black"><b>UPDATE</b></FONT></th>
<?php
	if ($levelid == 1) {
?>
						<th scope="col" width="90px" style="padding-left: auto; text-align: center; font-size: 14;"><FONT face="arial" color="black"><b>HAPUS</b></FONT></th>
<?php
	}
?>
					</tr>
				</thead>
				<tfoot>
					<tr>
					<!--td colspan="4">Give background color to the table cells to achieve seamless transition</td-->
					</tr>
				</tfoot>
			<tbody>

<?php
$sql1 = "SELECT * FROM kodekliring ORDER BY namabank ASC;";
$jmlr1 = 0;
$res1 = mysqli_query($link, $sql1);
if ($res1) {
/* determine number of rows result set */
	$jmlr1 = $res1->num_rows;
}

if ($jmlr1 > 0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($res1, MYSQLI_ASSOC)) {
		$i++;
		$idku = $row['ID'];
		$kodeku = $row['kode'];
		$namabankku = $row['namabank'];
		$jenisusahaku = $row['jenisusaha'];
?>
				<form action="fakturform.php" id="formpajak<?php print $idku;?>" name="formpajak<?php print $idku;?>" target=_blank method="POST">
					<input type="hidden" id="kliringid<?php print $idku;?>" name="kliringid<?php print $idku;?>" value="<?php print $idku;?>">
					<tr height="26px">
						<td style="padding-left: auto; text-align: center">
							<FONT face="arial" color="black" size="2"><?php echo $i;?></FONT>
						</td>
						<td style="padding-left: auto; text-align: center">
							<FONT face="arial" color="black" size="2">
							<input STYLE="text-align: center;" type="text" size="5" id="kode<?php print $idku;?>" name="kode<?php print $idku;?>" value="<?php echo $kodeku;?>" 
								ondblclick="disenable(this.form,'<?php echo $jmlr1;?>','<?php echo 'kode' . $idku;?>')" 
								onclick="lockme(this.form,'<?php echo $jmlr1;?>','<?php echo 'kode' . $idku;?>')" readonly>
							</FONT>
						</td>
						<td style="padding-left: auto; text-align: left; font-size: 10;">
							<FONT face="arial" color="black" size="2">
							<input type="text" size="37" id="namabank<?php print $idku;?>" name="namabank<?php print $idku;?>" value="<?php echo $namabankku;?>" 
								ondblclick="disenable(this.form,'<?php echo $jmlr1;?>','<?php echo 'namabank' . $idku;?>')" 
								onclick="lockme(this.form,'<?php echo $jmlr1;?>','<?php echo 'namabank' . $idku;?>')" readonly>
							</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 10;">						
							<font face="arial" color="black">
							<div class="side-by-side clearfix">
								<select id="jenisusaha<?php print $idku;?>" name="jenisusaha<?php print $idku;?>" data-placeholder="Jenis Usaha" class="chosen-select-no-single">
								<option value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
								<option value="1" <?php if ($jenisusahaku==1) echo 'selected';?>>1</option>
									<option value="2" <?php if ($jenisusahaku==2) echo 'selected';?>>2</option>
								</select> 
							</div>
							</font>		
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 12;">
							<a class="button orange small" onclick="updateform(this.form,<?php print $idku;?>)">Save/Update</a>
						</td>   
<?php
	if ($levelid == 1) {
?>					
						<td style="padding-left: auto; text-align: center; font-size: 12;">
							<a href="javascript:void(0)" target=_blank class="button red small" onclick="delform(this.form,<?php print $idku;?>,<?php print $i;?>);">Hapus</a>
						</td>        
<?php
	}
?>
					</tr>
<?php
	}
}
?>
				</form>
			</tbody>
		</table>
	</td>
</tr>	
</table>


  <script src="../jqueryforms/jquery.min.js" type="text/javascript"></script>
  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
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

<?php

//*******************************************************************************************************

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION['statusvalid'] = 1;
	$_SESSION['perusahaanid'] = $perushid;
//	$_SESSION['namaperusahaan'] = $namaperus;
	$_SESSION['tahun'] = $tahun;
	$_SESSION['batch'] = $batch;


//*******************************************************************************************************
//			FUNCTIONS
//	
	
?>
<script type='text/javascript' src='./simplemodal/basic/js/jquery.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/basic.js'></script>

</body>
</html>