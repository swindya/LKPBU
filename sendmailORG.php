<?php

require_once "./PHPMailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

//Set PHPMailer to use SMTP.
$mail->IsSMTP();   
//Enable SMTP debugging. 
$mail->SMTPDebug = 2;                                        
//Set SMTP host name                          
$mail->CharSet="UTF-8";
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "swindya@gmail.com";                 
$mail->Password = "doni6969";                           
//If SMTP requires TLS encryption then set it
//$mail->SMTPSecure = "tls";                           
                                  

$mail->From = "Fikrie@gmail.com";
$mail->FromName = "Fikrieeeee";

$mail->addAddress("ary.rachman@bni.co.id", "Ary Rachman");

$mail->isHTML(true);

$mail->Subject = "TEST";
$mail->Body = "<i>Hihihihi... Dikirim dari email Dividen</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
	
}


