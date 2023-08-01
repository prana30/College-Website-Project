<?php$name = $_POST['name'];
$visitor_email = $_POST['subject'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@sggswebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n"<div class=""><div class=""></div>
                "User Email: $visitor_email.\n"<div class=""></div>
                "User Message: $message .\n"<div class=""></div>

$to = 'pratikshanarwade30@gmail.com';

$headers = "Form: $email_form \r\n";

$headers = 
