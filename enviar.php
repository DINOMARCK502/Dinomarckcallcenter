<?php
$name = $_POST['nombre'];
$mail = $_POST['email'];
$phone = $_POST['telefono'];
$message = $_POST['mensaje'];

$message = "este mensaje fue enviado por: " . $nombre . "\r\n";
$message = "Su e-mail es: " . $email . "\r\n";
$message = "Telefono de contacto: ". $telefono . "\r\n";
$message = "mensaje: ". $_POST['mensaje'] . "\r\n";
$message = "enviado el: " . date('d/m/y', time());

$para = 'dinomarckcallcenter@gmail.com';
$asunto = 'mensaje de... (nombre)';

mail($para,$asunto, utf8_decode($mensaje),$header);
header("location:contacto.html");
?>

