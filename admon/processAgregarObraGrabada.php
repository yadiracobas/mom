<?php 
session_start();

// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
} else {
	include('DB.php');	
	if(!$db) {
		// Show error if we cannot connect.
		echo 'ERROR: No se pudo conectar con la Base de Datos.';
	} else {
		$IdObra = $_REQUEST['IdObra'];
		$Titulo = $_REQUEST['Titulo'];	
		$IdMusico = $_REQUEST['IdMusico'];
		$Dotacion = $_REQUEST['Dotacion'];
		$Orquesta = $_REQUEST['Orquesta'];
		$Director = $_REQUEST['Director'];		
		$Solistas = $_REQUEST['Solistas'];
		$Movimientos = $_REQUEST['Movimientos'];
		$Track = $_REQUEST['Track'];
		$Duracion = $_REQUEST['Duracion'];
		$IdDisco = $_REQUEST['IdDisco'];
		$Notas = $_REQUEST['Notas'];
		
		$query = $db->query("SET NAMES utf8");
		$query = $db->query("INSERT INTO obrasGrabadas (IdObra, Titulo, IdMusico, Dotacion, Orquesta, Director, Solistas, Movimientos, Track, Duracion, IdDisco, Notas) VALUES ('$IdObra', '$Titulo', '$IdMusico', '$Dotacion', '$Orquesta', '$Director', '$Solistas', '$Movimientos', '$Track', '$Duracion', '$IdDisco', '$Notas')");			
		if($query) { echo '<center>Obra Grabada agregada exitosamente!<br><br><a href="javascript:void;" onclick="showObrasGrabadas();">Regresar a Obras Grabadas</a> || <a href="javascript:void" onclick="showAgregarObraGrabada();">Agregar otra Obra Grabada</a></center>'; } 
		else echo '<center>Error al agregar la Obra Grabada!</center>';
	}		
}

?>