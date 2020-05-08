<?php

if (isset($POST['contact-submit'])) {
	$name = $POST['contact-name'];
	$subject = $POST['contact-subject'];
	$mailFrom = $POST['contact-email'];
	$message = $POST['contact-project'];


	$mailTo ="parijatdhar86@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt ="You have received an mail from ".$name."\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location : index.php?mailsend");



}