<?php
// Check for empty fields
if(empty($_GET['name'])  		||
   empty($_GET['email']) 		||
   empty($_GET['message'])	||
   !filter_var($_GET['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_GET['name'];
$email_address = $_GET['email'];
$message = $_GET['message'];

$to = 'hoangkhoa9089@gmail.com';
$email_subject = "Github Contact Form:  $name";
$email_body = "You have received a new message from your github contact form.<br/>
Here are the details:<br/>
Name: $name<br/>
Email: $email_address<br/>
Message:<br/><p style='padding: 10px;'>$message</p>";

require 'class.smtp.php';
require 'class.phpmailer.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'khoahd.mailer@gmail.com';
$mail->Password = 'A@b12345';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('khoahd.mailer@gmail.com', 'Github Mailer');
$mail->addAddress($to);
$mail->addReplyTo($email_address);
$mail->isHTML(true);

$mail->Subject = $email_subject;
$mail->Body    = $email_body;
$mail->AltBody = $email_body; //for none html client

if(!$mail->send()) {
    return false;
} else {
    return "OK";
}
?>