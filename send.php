<?php
error_reporting(0);
$nombre = $_POST['nombre'];
$correo_electronico= $_POST['email'];
$poblacion = $_POST['poblacion'];
$sexo=$_POST['GrupoOpciones1'];
$aficiones=$_POST['comentarios'];
$radio= $_POST['GrupoOpciones2'];
$mensaje=$_POST['mensaje'];
$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .="danos tu opinion".$_POST['opinion'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'crispinojulian@hotmail.com';
$asunto = 'Mensaje desde Portfolio';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'mensaje enviado correctamente';

?>
