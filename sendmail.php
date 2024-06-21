<?php

//session_start();

include "koneksi.php";

//---------------------------------------------------------
if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];

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

$query = "SELECT * FROM settingemail;";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$emailuser = $row['emailuser'];
		$emailpwd = $row['emailpwd'];
		$smtpserver = $row['smtpserver'];
		$port = $row['port'];
		$sendername = $row['sendername'];
		$senderemail = $row['senderemail'];
		$recemail = $row['recipientemail'];
	}
}
 
$recemailarr = explode(";", $recemail);
$jmlrecemail = count($recemailarr);


require_once "./PHPMailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

//Set PHPMailer to use SMTP.
$mail->IsSMTP();   
//Enable SMTP debugging. 
$mail->SMTPDebug = 2;                                        
//Set SMTP host name                          
$mail->CharSet="UTF-8";
$mail->SMTPSecure = 'tls';
$mail->Host = $smtpserver;
$mail->Port = $port;
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = $emailuser;                 
$mail->Password = $emailpwd;                           
//If SMTP requires TLS encryption then set it
//$mail->SMTPSecure = "tls";                           
                                  

$mail->From = $senderemail;
$mail->FromName = $sendername;

for ($i=0; $i<$jmlrecemail;$i++) {
	$mail->addAddress($recemailarr[$i], "aa");
}

$mail->isHTML(true);

$mail->Subject = "TEST Expiry Date";
ob_start();
include('warnexpire.php');
$mail->Body = ob_get_contents();
ob_end_clean();
//$body = include "warnexpire.php";
//$mail->MsgHTML($body);
//$mail->Body = include "warnexpire.php";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
	
}


