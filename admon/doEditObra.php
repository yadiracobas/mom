<?php 
session_start();

// if session is not set redirect the user
if(empty($_SESSION['u_name']) ) {
	header("Location:index.html");	
}
elseif ( empty($_REQUEST['IdObra']) ) {
	echo "<br><br><center>Hacen falta datos para procesar su solicitud!";
} else {
	include('DB.php');	
	if(!$db) {
		// Show error if we cannot connect.
		echo 'ERROR: No se pudo conectar con la Base de Datos.';
	} else {		
		$IdObra = $_REQUEST['IdObra'];
		$Titulo = $_REQUEST['Titulo'];
		$AnoComposicion = $_REQUEST['AnoComposicion'];
		$Duracion = $_REQUEST['Duracion'];
		$Duracion2 = $_REQUEST['Duracion2'];
		$Periodo = $_REQUEST['Periodo'];
		$Tema = $_REQUEST['Tema'];
		$Texto = $_REQUEST['Texto'];		
		$IdMusico = $_REQUEST['IdMusico'];
		$DotacionEspecifica = $_REQUEST['DotacionEspecifica'];
		$Solista = $_REQUEST['Solista'];
		$IdDotacion = $_REQUEST['IdDotacion'];
		$Localizacion = $_REQUEST['Localizacion'];
		$Movimientos = $_REQUEST['Movimientos'];
		$Estreno = $_REQUEST['Estreno'];
		$Fuentes = $_REQUEST['Fuentes'];
		
		$query = $db->query("SET NAMES utf8");
		$query = $db->query("UPDATE obras SET Titulo='$Titulo', AnoComposicion='$AnoComposicion', Duracion='$Duracion', Duracion2='$Duracion2', Periodo='$Periodo', Tema='$Tema', Texto='$Texto', DotacionEspecifica='$DotacionEspecifica', Solista='$Solista', IdDotacion='$IdDotacion', Localizacion='$Localizacion', Movimientos='$Movimientos', Estreno='$Estreno', Fuentes='$Fuentes', IdMusico='$IdMusico' WHERE IdObra='$IdObra'");		
		
		if ($query) { echo '<center>La Obra se ha Editado correctamente!<br><br><a href="javascript:void();" onclick="showObras();">Regresar a Obras</a> || <a href="javascript:void" onclick="editarObra(\''.$IdObra.'\');">Volver a Editar</a></center>'; }
		else { echo '<center>Hubo un error al actualizar la información de la Obra.</center>'; }
	}	
}

?>