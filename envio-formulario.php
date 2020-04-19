<?php
$nombre_usuario=$_POST['nombre'];
$telefono_usuario=$_POST['telefono'];
$consulta_usuario=$_POST['consulta'];
// Creo 3 variables que me toman lo que se envía por POST de cada valor

$destino="alonso.hernandez.hdz@live.com";

$asunto="Consulta enviada desde DENTAL-PLUS";

$mensaje="Nombre: ".$nombre_usuario."\r\n";
$mensaje.="Telefono: ".$telefono_usuario."\r\n";
$mensaje.="Consulta: ".$consulta_usuario."\r\n";

$remitente="From: algo@jonylif.com.ar";

mail($destino, $asunto, $mensaje, $remitente);


header("Location:index.php?i=ok");
// SI EL FORMULARIO SE ENVIO CORRECTAMENTE, PONEME EN LA URL DESPUES DEL INDEX.PHP UN SIGNO DE PREGUNTA, UNA LETRA I, Y UN IGUAL OK
?>
