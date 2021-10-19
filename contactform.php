<?php

if(!empty($_POST['contact-submit'])) {
	$name = $POST['contact-name'];
	$subject = $POST['contact-subject'];
	$mailFrom = $POST['contact-email'];
	$message = $POST['contact-project'];

	$toEmail = "parijatdhar86@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contactform.php";
?>


