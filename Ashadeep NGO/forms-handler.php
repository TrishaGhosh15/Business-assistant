<?php
$name = $_POST['name'];
$visitor_email =  $_POST['email'];
$dubject =  $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@mywebsite..com';

$email_subject = 'New Form Submission';

$email_body = "User Name : $name.\n".
              "User Email: $visitor_email.\n".
              "Subject :$subject.\n"
             "User Message: $message.\n.";

$to  = 'akardhan1704@gmail.com';
// my email  id 
$headers = "From: $email_from \r\n";
$headers = "Reply-to : $visitor_email \r\n"
mail($to,$emai_subject,$email_body,$headers );
header("Location contact .html");
?>      
