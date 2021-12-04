<?php
$name = $_POST['name'];
$visitor_email = $_POST['email']; 
$subject = $_POST['subject']; 
$message = $_POST['message'];

$email_from = 'zigarzahar@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Subject: $subject.\n".
              "User Message: $message .\n";

$headers = "From: $email_from \r\n"; 
$headers .= "Reply-To: $visitor_email \r\n"; 

mail($visitor_email,$email_subject,$email_body,$headers); 

header("Location: contact.html"); 
              
?>
