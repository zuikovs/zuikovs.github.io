<?php

//Mail sending function
$subject = $_POST['name'];
$from = $_POST['email'];
$to = "info@startrealinvest.eu";

//data
$msg = $_POST['message'];

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "WEB From: <".$from. ">" ;

mail($to,$subject,$msg,$headers);

header("Location: https://startrealinvest.eu");
die();

?>
