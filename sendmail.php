<?php
$to = "cop3828rattlerfootball2012@gmail.com";
$email = $_REQUEST['email'] ;
$name = $_REQUEST['name'] ;
$site = $_REQUEST['site'] ;
$subject = "Message from: $name";
$message = $_REQUEST['message'] ;
$headers = "noreply@rattlersfootball.allalla.com/";
$body = "From: $name \n\n Email: $email \n\n Wesbite: $site \n\n Message: $message";
$sent = mail($to, $subject, $body, $headers) ;
if($sent)
{echo "<script language=javascript>window.location = 'thanks.html';</script>";}
else
{echo "<script language=javascript>window.location = 'contact.html';</script>";}
?>