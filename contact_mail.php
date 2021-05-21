<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
	if(isset($_POST['submit'])){
		// Get the submitted form data
		$name=$_POST['fname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$comment=$_POST['msg'];
	 	$message="You have received a new message. ".
        " Here are the details: <br> Name :".$name."<br>"."Phone :".$phone."<br>"."From :".$email."<br>"."Comment  :".$comment;
	
	    // Server settings
	    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output 
	    $mail->isSMTP();
	    $mail->Host = 'smartlabs.sg';
	    $mail->SMTPAuth = true;
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	    $mail->Port = 587;

	    $mail->Username = 'Info@smartlabs.sg'; // YOUR gmail email
	    $mail->Password = 'Info@101$'; // YOUR gmail password

	    // Sender and recipient settings
	    $mail->setFrom('Info@smartlabs.sg', 'SmartLabs admin');
	    $mail->addAddress('Info@smartlabs.sg', 'SmartLabs admin');
	    $mail->addReplyTo('Info@smartlabs.sg', 'SmartLabs admin'); // to set the reply to

	    // Setting the email content
	    $mail->IsHTML(true);
	    $mail->Subject = "SmartLabs Contact Form Submission: $name";
	    $mail->Body = $message;

	    $mail->send();
	    echo "<script type='text/javascript'>
				window.location='contact.php?success_message=1#message_alert'; 
			  </script>";
   }
} catch (Exception $e) {
    echo "<script type='text/javascript'>
			window.location='contact.php?success_message=2#message_alert'; 
		  </script>";
}
