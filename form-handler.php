<?php

$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];


$email__from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "Subject: $visitor_email.\n".
                    "User Message: $message .\n";

$to = 'mnagy6365@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";



mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>