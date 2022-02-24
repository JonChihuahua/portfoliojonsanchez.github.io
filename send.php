<?php
//Calling fields
$name = $_POST["name"];
$mail = $_POST["email"];
$message = $_POST["message"];

//Mail data
$destiny = "pcmdelicias@hotmail.com";
$about = "Email contact from portfolio";

$letter = "From: $name \n";
$letter .= "Mail: $email \n";
$letter .= "Message: $message";

//Sending massage
mail($destiny, $about, $mail);
header('Location:message_sent.html');

?>

