<?php
$name = $_POST['name'];
$subject = $_POST['subject'];
$number = $_POST['number'];
$visitor_email = $_POST['email'];

$email_from = 'thrillseekerdevt@gmail.com';

$email_subject ="New Form Submission";

$email_body = "User Name: $name.\n". 
              "User Email: $visitor_email. \n". 
              "User Subject: $subject. \n". 
              "User Number: $number. \n";

$to = "ilishjyoti17@gmail.com";
$headers ="From:  $emai_from \r\n";
$headers ="Reply-To: $vistor_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("location: index.html");

?>