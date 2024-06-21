<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php
session_start();
?>
<script src="mootools.js"></script>
<script src="Form.MultipleFileInput.js"></script>
<script src="Form.Upload.js"></script>
<script src="Request.File.js"></script>
<script src="iFrameFormRequest.js"></script>
<script src="jquery-1.11.2.min.js"></script>
<!--link href="stylemenuhoriz.css" rel="stylesheet" /-->
<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
<script src="../jqueryforms/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
<script type="text/javascript" src="jquery-1.3.2.js"></script>
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
.demo-frame header, .demo-frame h1, .demo-frame .demo-conversion {
	display: none;
}

.demo-wrapper {
	min-height: 500px;
}

.bsap {
	position: absolute;
	top: 0;
	right: 0;
}
</style>
<style>
.droppable {
	border: #ccc 1px solid;
	border-radius: 8px;
	background: #eee;
	color: #666;
	padding: 20px;
	margin: 10px;
	width: 500px;
	clear: both;
	text-align: center;
}

.droppable.hover {
	background: #ddd;
}

.uploadList {
	margin: 0;
	padding: 0;
	list-style: none;
}

.uploadItem {
	overflow: hidden;
	border-bottom: #BCBCBC 1px solid;
	margin: 0 20px;
	padding: 3px;
}

.uploadItem span {
	overflow: hidden;
	width: 430px;
	float: left;
	display: block;
}

a.addInputRow,
a.delInputRow,
.uploadItem a {
	display: inline-block;
	background: url(add.png) no-repeat;
	height: 16px;
	width: 16px;
	text-indent: -999px;
}

.uploadItem a {
	float: left;
	display: block;
	padding-left: 20px;
	background-image: url(./images/delete.png);
}

a.delInputRow {
	background-image: url(./images/delete.png);
}

.progress {
	margin: 5px 0;
	height: 15px;
	border-radius: 3px;
	background: #545A74;
}
</style>


<script type="text/javascript">

$(document).ready(function() {
	$('#loader').hide();
	//$('#show_heading').hide();
	
	$('#tahun').change(function(){
		$('#batchid').fadeOut();
		$('#loader').show();
		$.post("get_chid_categories.php", {
			parent_id: $('#tahun').val(),
		}, function(response){
			
			setTimeout("finishAjax('batchid', '"+escape(response)+"')", 400);
		});
		return false;
	});
});

function finishAjax(id, response){
  $('#loader').hide();
  //$('#show_heading').show();
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
} 

function alert_id()
{
	if($('#batch').val() == '')
	alert('Please select a sub category.');
	else
	alert($('#batch').val());
	return false;
}

</script>
<script>
function cekdata()
{
	var smtpserverku = document.getElementsByName("smtpserver")[0].value;
	var portku = document.getElementsByName("port")[0].value;
	var userku = document.getElementsByName("mailusername")[0].value;
	var pwdku = document.getElementsByName("mailpwd")[0].value;
	
	if ((smtpserverku==null) || (portku==null) || (userku==null) || (pwdku==null))
	{	
		alert("Data ada yg invalid. Harap dikoreksi.");
		return false;
	}
	else
	{
		document.forms["mailform"].submit();
	}
}
</script>
<script>
function sendmailgo(a, userid) {

	if (a < 0)
	{
		alert("Lengkapi data terlebih dahulu, khususnya tahunbuku, batch, dan status retur");
	}
	else {
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} 
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		//alert(xmlhttp.responseText);
		alert("Email sudah dikirim");
		window.location.reload();
		window.location.refresh();
			}
		}
		var linkget = "sendmail.php?userid=" + userid;
		xmlhttp.open("GET", linkget,true);
		xmlhttp.send();
		//alert("Data sudah di-update");
		
		//pauseme(1000);
		//window.location.reload();
		//window.location.refresh();
	}
	
}
</script>
</head>
<body bgcolor="#71D9B1">
<?php

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

include "koneksi.php";

if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
//--------------------------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//--------------------------------------------------------------------
if (!isset($_GET["userid"])) {
	if (!isset($_POST["userid"])) 
		$userid=0;
	else
		$userid=$_POST["userid"];
}
else
	$userid=$_GET["userid"];
//--------------------------------------------------------------------
if (!isset($_POST["smtpserver"])) {
	$smtpserver=0;
}
else
	$smtpserver=$_POST["smtpserver"];
//--------------------------------------------------------------------
if (!isset($_POST["port"])) {
	$port=0;
}
else
	$port=$_POST["port"];
//--------------------------------------------------------------------
if (!isset($_POST["mailusername"])) {
	$mailusername=0;
}
else
	$mailusername=$_POST["mailusername"];
//--------------------------------------------------------------------
if (!isset($_POST["mailpwd"])) {
	$mailpwd=0;
}
else
	$mailpwd=$_POST["mailpwd"];
//--------------------------------------------------------------------
if (!isset($_POST["namasender"])) {
	$namasender=0;
}
else
	$namasender=$_POST["namasender"];
//--------------------------------------------------------------------
if (!isset($_POST["emailsender"])) {
	$emailsender=0;
}
else
	$emailsender=$_POST["emailsender"];
//--------------------------------------------------------------------
if (!isset($_POST["recemail"])) {
	$recemail=0;
}
else
	$recemail=$_POST["recemail"];
//--------------------------------------------------------------------
$statusdata=0;
if (!isset($_POST["statusdata"])) {
	$statusdata=0;
}
else
	$statusdata=$_POST["statusdata"];
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

$sql0 = "SELECT * FROM settingemail;";
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 // determine number of rows result set 
	$rowcnt = $result0->num_rows;
}
if ($rowcnt==0) {
	$sql1 = "INSERT INTO settingemail(smtpserver, port, emailuser, emailpwd, sendername, senderemail, recipientemail, createduser, 
			createddate) VALUES('" .	$smtpserver . "'," . $port . ",'" . $mailusername . "','" . $mailpwd . "','" . $namasender . 
			"','" . $emailsender . "','" . $recemail . "'," . $userid . ", now());";
	$result1 = mysqli_query($link, $sql1);
}
else {
	if ($statusdata == 1) {
		$sql1 = "UPDATE settingemail SET smtpserver='" . $smtpserver . "', port=" . $port . ", emailuser='" . $mailusername . "', emailpwd='" . 
				$mailpwd .	"', sendername='" . $namasender . "', senderemail='" . $emailsender . "', recipientemail='" . $recemail . "';";
		$result = mysqli_query($link, $sql1);
	}
}


$sql0 = "SELECT * FROM settingemail;";
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 // determine number of rows result set 
	$rowcnt = $result0->num_rows;
}
if ($rowcnt>0) {
	while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
		$smtpserver = $row['smtpserver'];
		$port = $row['port'];
		$mailuser = $row['emailuser'];
		$mailpwd = $row['emailpwd'];
		$sendername = $row['sendername'];
		$senderemail = $row['senderemail'];
		$recipientemail = $row['recipientemail'];
	}
}


?>
<!--DIV align="right">
	<table align="right" style="text-align: right; margin-left: auto; margin-right: auto; margin-top: 0px;" width="120px" border="0" cellpadding="0" cellspacing="0">
        <tr style="height: 20px"> 
            <td style="padding-left: 0px; text-align: right; font-size: 12; width: 20px">
				<span title="User Login"><a href="" target=""><img src="./img/user3a.png" height="18" width="18" align="right"></a></span>
			</td>
            <td style="vertical-align: middle; padding-left: 0px; text-align: left; width: 100px">
				<p><font face="arial" color="blue">&nbsp;</font>
				<i><font size="2" face="arial" color="blue">
				<?php print $namaku;?></font></i>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
			</td>
        </tr>
	</table>
</DIV-->


	<br><br>
	<DIV>
	<table clear="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="650px" border="0" cellspacing="0" cellpadding="0">
		<thead>
			<tr height="10px">
				<td></td>
			</tr>
			<tr height="25px">
				<td style="padding-left: 0px; text-align: left; width=50%">
					    <font face="arial" color="black" size="5"><b>SETTING EMAIL</b></font>
				</td>
			</tr>
			<tr height="30px">
				<td style="padding-left: 10px; text-align: left; width=50%">
				</td>
			</tr>
		</thead>
	</table>
	</DIV>

<?php
//*************************************************************************************************************
//************************************************* EMAIL ************************************************
//*************************************************************************************************************
?>	
<form method="post" name="mailform" id="mailform" action="" method="post">
	<table align="left" style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: auto;" width="550px" border="0" cellspacing="0" cellpadding="0">
		<tr height="20px">
			<td style="padding-left: auto; text-align: left; font-size: 12; height: 20px;">
			</td>
		</tr>
		<tr height="25px">
			<td style="padding-left: auto; text-align: left; font-size: 11; width: 440px">
				<table align="left" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 0px;" width="600px" border="0" cellspacing="0" cellpadding="0">
						<tr height="30px">
							<td style="padding-left: auto; text-align: left; width: 20px">
							</td>
							<td style="padding-left: auto; text-align: left; width: 130px">
								<font face="arial" size="2" color="black">SMTP Server : </font>
							</td>
							<td style="padding-left: 0px; text-align: left; width: 170px">
								<font face="arial" size="2" color="black">
								<input style="padding-left: 5px" type="text" id="smtpserver" name="smtpserver" value="<?php echo $smtpserver;?>" size="18"></font>
								</font>
							</td>
							<td style="padding-left: auto; text-align: left; width: 40px">
							</td>
							<td style="padding-left: 10px; text-align: left; width: 60px">
								<font face="arial" size="2" color="black">Port : </font>
							</td>
							<td style="padding-left: 0px; text-align: left; width: 180px">
								<font face="arial" size="2" color="black">
								<input style="padding-left: 5px" type="text" id="port" name="port" value="<?php echo $port;?>" size="3" maxlength="5"></font>
								</font>
							</td>
						</tr>
						<tr height="20px">
							<td colspan="7" style="padding-left: 10px; text-align: left; width: 100px">
							</td>
						</tr>
						<tr height="30px">
							<td style="padding-left: auto; text-align: left;">
							</td>
							<td style="padding-left: auto; text-align: left; font-size: 12;">
								<font face="arial" size="2" color="black">Username : </font>
							</td>
							<td colspan="4" style="padding-left: 0px; text-align: left; font-size: 12;">
								<font face="arial" size="2" color="black">
								<input style="padding-left: 5px" type="text" id="mailusername" name="mailusername" value="<?php echo $mailuser;?>" size=14>
								</font>
							</td>
						</tr>
						<tr height="30px">
							<td style="padding-left: auto; text-align: left;">
							</td>
							<td style="padding-left: auto; text-align: left; font-size: 12;">
								<font face="arial" size="2" color="black">Password : </font>
							</td>
							<td colspan="4" style="padding-left: 0px; text-align: left; font-size: 12;">
								<font face="arial" size="2" color="black">
								<input style="padding-left: 5px" type="password" id="mailpwd" name="mailpwd" value="<?php echo $mailpwd;?>" size=14>
								</font>
							</td>
						</tr>
						<tr height="20px">
							<td colspan="7" style="padding-left: 10px; text-align: left; width: 100px">
							</td>
						</tr>
						<tr height="30px">
							<td style="padding-left: auto; text-align: left;">
							</td>
							<td style="padding-left: auto; text-align: left; font-size: 12;">
								<font face="arial" size="2" color="black">Nama Pengirim :</font>
							</td>
							<td colspan="4" style="padding-left: 0px; text-align: left; font-size: 12;">
								<font face="arial" size="2" color="black">
								<input style="padding-left: 5px" type="text" id="namasender" name="namasender" value="<?php echo $sendername;?>" size=14>
								</font>
							</td>
						</tr>
						<tr height="30px">
							<td style="padding-left: auto; text-align: left;">
							</td>
							<td style="padding-left: auto; text-align: left; font-size: 12;">
								<font face="arial" size="2" color="black">Email Pengirim :</font>
							</td>
							<td colspan="4" style="padding-left: 0px; text-align: left; font-size: 12;">
								<font face="arial" size="2" color="black">
								<input style="padding-left: 5px" style="padding-left: 5px" type="text" id="emailsender" name="emailsender" value="<?php echo $senderemail;?>" size=14>
								</font>
							</td>
						</tr>
						<tr height="20px">
							<td colspan="7" style="padding-left: 10px; text-align: left; width: 100px">
							</td>
						</tr>
						<tr height="30px">
							<td style="padding-left: auto; text-align: left;">
							</td>
							<td valign="top" style="padding-left: auto; text-align: left; font-size: 12;">
								<font face="arial" size="2" color="black">Email Penerima :</font>
							</td>
							<td colspan="4" style="padding-left: 0px; text-align: left; font-size: 12;">
								<font face="arial" size="2" color="black">
								<textarea style="padding-left: 5px" rows="3" cols="40" STYLE="text-align: left;" id="recemail" name="recemail"><?php echo $recipientemail;?></textarea>
								</font>
							</td>
						</tr>
						<tr height="40px">
							<td colspan="7" style="padding-left: 10px; text-align: left; width: 100px">
							</td>
						</tr>
						<tr height="50px">
							<td colspan="2" style="padding-left: 20px; text-align: left; width: 300px">
								<div>
									<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
									<input type="hidden" id="statusdata" name="statusdata" value="1">
									<!--input type="submit" name="upload" value="Upload" onclick="cektahunbatchtelkom(); return false;"-->
									<a class="button orange medium" onclick="cekdata(); return false;">UPDATE</a>
								</div>			
							</td>
							<td colspan="5" style="padding-left: 20px; text-align: left;">
								<div>
									<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
									<input type="hidden" id="statusdata" name="statusdata" value="1">
									<!--input type="submit" name="upload" value="Upload" onclick="cektahunbatchtelkom(); return false;"-->
									<a class="button green medium" onclick="sendmailgo(2, <?php echo $userid;?>); return false;">SEND MAIL</a>
								</div>			
							</td>
						</tr>
				</table>
			</td>
		</tr>
		<tr height="25px">
			<td style="padding-left: auto; text-align: left; font-size: 11; width: 360px">
			</td>
		</tr>

	</table> 
</form>	

<!--a href="zip2download.php">Download Zip</a-->

<script type='text/javascript' src='./simplemodal/basic/js/jquery.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/basic.js'></script>

<script type="text/javascript" src="./datepicker/examples/public/javascript/jquery-1.11.1.js"></script>
<script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="./datepicker/examples/public/javascript/core.js"></script>

  <script src="jquery.min.js" type="text/javascript"></script>
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

?>
</html>