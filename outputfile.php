<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<link href="stylemenuhoriz.css" rel="stylesheet" />
<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
</style>
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
font-size: 34px;
padding: 8px 14px 9px;
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
    height: 16px; 
    width: 200px; 
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

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

$db_hostname = 'localhost';
$db_database = 'deviden';
$db_username = 'myuser';
$db_password = 'userku';

if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];

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
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
	}
}
 
$now = time(); // Checking the time now when home page starts.
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
if (isset($_SESSION['expire'])) {
	if ($now > $_SESSION['expire']) {
		unset($_SESSION['username']); 
		unset($_SESSION['passwd']);
		unset($_SESSION['perusahaanid']); 
		unset($_SESSION['tahun']); 
		$_SESSION['statuslogin'] = 7;//session expired
?>
<meta http-equiv="refresh" content="0; url=login.php" />
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
<meta http-equiv="refresh" content="0; url=login.php" />
<?php
}
?>

<div id='cssmenu'>
<ul>
   <li class='active'><a href='uploadfile.php'><span>Home</span></a></li>
   <li><a href='uploadfile.php'><span>Impor Data</span></a></li>
   <li><a href='viewdata.php'><span>View Data</span></a></li>
   <li><a href='bayartxawal.php'><span>Pembayaran Transfer Awal</span></a></li>
   <li><a href='retur.php'><span>Retur</span></a></li>
   <li><a href='bayarretur.php'><span>Pembayaran Retur</span></a></li>
   <li><a href='laporan.php'><span>Laporan</span></a></li>
   <li><a href='summary.php'><span>Ringkasan</span></a></li>
   <li class='last'><a href='mainmenu.php'><span>Menu Utama</span></a></li>
</ul>
</div>

<br>
<DIV align="right">
<p><font face="arial" color="blue">-&nbsp;</font>
	<i><font face="arial" color="blue"><?php print $namaku;?></font></i>
	&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
</p>
</DIV>

<?php
# query the users table for name and surname 
$query = "SELECT * FROM perusahaan ORDER BY nama;";
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
		$perusid[$i] = $row['ID'];
		$namaperus[$i] = $row['nama'];
	}
}
$counti = $i;
?>

<?php
//*
//* Name this file index.php and place in the directory. 
//* 
 
for ($j=0;$j<6;$j++) {
	$fileout[$j] = "-";
}	

// Define the full path to REGULAR files 
$path1 = "C:/wamp/www/deviden/OUTPUT"; 

// Open the folder 
$dir_handle = @opendir($path1) or die("Unable to open $path"); 

// Loop through the files
$i = 0;
while ($file1 = readdir($dir_handle)) { 
	$file1 = trim($file1," ");
	if (($file1 != "." || $file1 != "..") && (strlen($file1) > 5)) {
		$fileout[$i] = "<a href=downloadfile.php?download_file=" . $file1 . ">" . $file1 . "</a><br/>"; 
		$i++;
		}
}
closedir($dir_handle); 
$jmli = $i;
	
?>

	<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 0px;" width="600px" border="1" cellpadding="2" cellspacing="0">
          <tr height="60px"> 
            <td colspan="3" style="padding-left: 0px; text-align: left; font-size: 12; height: 60px"><h1>Pilih Perusahaan & Tahun</h1></td>
          </tr>
          <tr height="40px"> 
            <td colspan="3" style="padding-left: 30px; text-align: left; font-size: 12; height: 20px"></td>
          </tr>
          <tr height="35px"> 
            <td width="250px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				-
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;">
            <td width="250px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				-
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="250px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				-
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;">
            <td width="250px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				-
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="250px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				-
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;">
            <td width="250px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				-
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="250px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				-
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;">
            <td width="250px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				-
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="250px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				-
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;">
            <td width="250px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				-
				</div>
			</td>
		  </tr>
          <tr height="35px"> 
            <td width="250px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				-
				</div>
			</td>
			<td width="100px" style="padding-left: auto; text-align: left; font-size: 12;">
            <td width="250px" style="padding-left: auto; text-align: left; font-size: 12;">
				<div class="side-by-side clearfix">
				-
				</div>
			</td>
		  </tr>
          <tr> 
            <td colspan="7" style="padding-left: auto; text-align: left; font-size: 12; height: 20px">
                <!--input name="remember" type="checkbox" id="remember" value="1">
                Remember Me</div></td-->
          </tr>
         <tr height="40px"> 
            <td colspan="7" style="padding-left: 0px; text-align: center; font-size: 12; height: 20px">
				<a href="" class="medium button blue" onclick="document.menu1form.submit(); return false;">Proses</a> 
          </tr>
    </table>

<?php 
// Include the PHPWord.php, all other classes were loaded by an autoloader
require_once 'phpword/PHPWord.php';

// Create a new PHPWord Object
$PHPWord = new PHPWord();

// Every element you want to append to the word document is placed in a section. So you need a section:
$section = $PHPWord->createSection();

// After creating a section, you can append elements:
$section->addText('Hello world!');

// You can directly style your text by giving the addText function an array:
$section->addText('Hello world! I am formatted.', array('name'=>'Tahoma', 'size'=>16, 'bold'=>true));

// If you often need the same style again you can create a user defined style to the word document
// and give the addText function the name of the style:
$PHPWord->addFontStyle('myOwnStyle', array('name'=>'Verdana', 'size'=>14, 'color'=>'1B2232'));
$section->addText('Hello world! I am formatted by a user defined style', 'myOwnStyle');

// You can also putthe appended element to local object an call functions like this:
$myTextElement = $section->addText('Hello World!');
$myTextElement = array('bold'=>true, 'size'=>16, 'name'=>'Calibri');
//$myTextElement->setBold();
//$myTextElement->setName('Verdana');
//$myTextElement->setSize(22);

// At least write the document to webspace:
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save('C:/helloWorld.docx');
?> 	
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
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


</body>
<?php

//*******************************************************************************************************

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;



//*******************************************************************************************************

?>
</html>