<?php
	$destino 	= "info@grupogadea.com.ar";
	$nombre 	= $_POST["nombre"];
	$motivo  	= $_POST["motivo"];
	$mail       = $_POST["mail"];
	$mensaje    = $_POST["mensaje"];
	$contenido  = "Nombre: " . $nombre  .  "\nCorreo: ". $mail . "\nMensaje: ". $mensaje;
	mail($destino, $motivo, $contenido);
	header("Location:gracias.html");
?>