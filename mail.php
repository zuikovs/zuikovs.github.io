<?php

//Mail sending function
$subject = $_POST['name'];
$from = $_POST['email'];
$to = "fakeko9889@sc2hub.com";

//data
$msg = $_POST['message'];

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "WEB From: <".$from. ">" ;

mail($to,$subject,$msg,$headers);
echo "Mail Sent.";

?>
