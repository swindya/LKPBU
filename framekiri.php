<HTML>
<HEAD><TITLE>Index ASPSide</TITLE>
<LINK REL=STYLESHEET TYPE='text/css' HREF='../css/tli.css'>
<link rel="stylesheet" href="./reset.css">
<link rel="stylesheet" href="./lib.css">
<link rel="stylesheet" href="./css?family=Open+Sans:400,700">
<link rel="stylesheet" href="./front.css">
<link rel="stylesheet" href="./zino.core.css">
<link rel="stylesheet" href="./prettify.css">
<link rel="stylesheet" href="./zino.menu.css">
<script async="" src="./analytics.js"></script><script src="./jquery.min.js"></script>
<script src="./prettify.js"></script>
<script src="./front.js"></script>
</HEAD>
<BODY bgcolor=#FFFFFF link=#000000 vlink=#000000 alink=#000000>

<br/>

<?php
session_start();

if (!isset($_GET["code"])) {
	$selectme="none";
}
else
	$selectme=$_GET["code"];

echo $selectme;

$db_hostname = 'localhost';
$db_database = 'deviden';
$db_username = 'myuser';
$db_password = 'userku';

$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}
// Select the database.
$db_selected = mysqli_select_db($link, $db_database);
if (!$db_selected) {
    //die ('Can't use database : ' . mysqli_error());
?>
<!--meta http-equiv="refresh" content="0; url=login.php" /-->
<?php
//print '<br><br><input name="Button" type="Button" onClick="javascript:history.back();return false" value="KEMBALI">&nbsp;&nbsp;&nbsp;' . "\n";

die();
	
}

#mysql_connect("localhost",$uname,$pwd);
# query the users table for name and surname 
$query = "SELECT * FROM perusahaan;";
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
		$namaper[$i] = $row['nama'];
		$perid[$i] = $row['ID'];
	}
	$jmli = $i;
}
?>


<P>
<div id="container">
			<div class="leftPanel">
				<ul class="leftMenu">
<?php
	for ($k=1;$k<=$jmli;$k++) {
		
?>
				<li><a target="donnee" href="http://localhost/deviden/vertest1/TabDemo.php?code=accor"><?php echo $namaper[$k];?></a></li>
<?php
	}
?>
				</ul>
			</div>
</div>

</center>
<p>

<span class="p1"><CENTER>
<br>
</center>
</span>

</body>
</HTML>
