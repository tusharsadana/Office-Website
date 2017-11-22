<?php
require("PHPMailerAutoload.php");

$mail = new PHPMailer();

//$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "searching.for.langoor@gmail.com";  // SMTP username
$mail->Password = "TS!@#HILLS"; // SMTP password
$mail->Port= "587";

$mail->From = "searching.for.langoor@gmail.com";
$mail->FromName = "Mailer";
$mail->AddAddress("sadanagulshan@gmail.com", "Gulshan Sadana");


$mail->WordWrap = 50;                                 // set word wrap to 50 characters
    // optional name
$mail->IsHTML(true);                                  // set email format to HTML
$name=$_POST['name'];
$num=$_POST['num'];
$email=$_POST['email'];
$message=$_POST['message'];
$mail->Subject = "New Enquiry";
$mail->Body    = "name: $name<br> phone: $num <br> email:$email  <br> message: $message";


if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";

header("Location: index.html");
?>