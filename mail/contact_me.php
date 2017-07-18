<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

var_export($name, true);
var_export($email_address, true);
var_export($message, true);

// $to = 'hoangkhoa9089@gmail.com';
// $email_subject = "Github Contact Form:  $name";
// $email_body = "You have received a new message from your github contact form.<br/>
// Here are the details:<br/>
// Name: $name<br/>
// Email: $email_address<br/>
// Message:<br/><p style='padding: 10px;'>$message</p>";

// require 'class.smtp.php';
// require 'class.phpmailer.php';

// $mail = new PHPMailer;

// $mail->isSMTP();
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPAuth = true;
// $mail->Username = 'khoahd.mailer@gmail.com';
// $mail->Password = 'A@b12345';
// $mail->SMTPSecure = 'ssl';
// $mail->Port = 465;

// $mail->setFrom('khoahd.mailer@gmail.com', 'Github Mailer');
// $mail->addAddress($to);
// $mail->addReplyTo($email_address);
// $mail->isHTML(true);

// $mail->Subject = $email_subject;
// $mail->Body    = $email_body;
// $mail->AltBody = $email_body; //for none html client

if(!$mail->send()) {
    return false;
} else {
    return "OK";
}
?>