<?php
$to = 'ahbaalawi@uj.edu.sa';
$subject = 'استبيان جائزة جدة للإبداع';
$from = 'info@jeddahawards.org';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n";
 
// Compose a simple HTML email message
$message = file_get_contents("survey.html");

 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>