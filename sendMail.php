<?
$destinatario="info@musicaorquestal.com.mx";
$titulo="MusicaOrquestal.com.mx :: Mensaje recibido";
$mensaje= "Se ha recibido un mensaje atraves del portal MusicaOrquestal.com.mx.\n\r".
		  "Nombre: " . $_REQUEST['nombre'] . "\n".
		  "Email: " . $_REQUEST['email'] . "\n".
		  "Mensaje: " . $_REQUEST['mensaje'] . "\n".
		  "\n\n*****************   Fin del Mensaje  ****************\n";
$cabeceras = 'From: no-replay@musicaorquestal.com.mx' . "\r\n" .
		     'Reply-To: ' . $_REQUEST['email'] . "\r\n" .
		     'X-Mailer: PHP/' . phpversion();
if( mail($destinatario, $titulo, $mensaje, $cabeceras)){ header( 'Location: creditos.html' ) ; }
else echo "<center><br>Hubo un error al enviar su mensaje<br><br><a href='javascript:history.back()'>Intentelo de nuevo</a><br></center>";
?>
