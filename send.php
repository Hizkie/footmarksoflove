<?php 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'vendor/autoload.php'; 

$mail = new PHPMailer(true); 

try { 
	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();											 
	$mail->Host	 = 'ssl://smtp.gmail.com;';					 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'hizclick@gmail.com';				 
	$mail->Password = 'hizclickhepta';						 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	$mail->setFrom('hizclick@gmail.com', 'Name');		 
	$mail->addAddress('hizclick@gmail.com'); 

	
	$mail->isHTML(true);								 
	$mail->Subject = 'Subject'; 
	$mail->Body = 'HTML message body in <b>bold</b> '; 
	$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$mail->send(); 
	echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 

?> 
