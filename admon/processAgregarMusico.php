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
		$nombre = $_REQUEST['nombre'];
		$vitae = $_REQUEST['vitae'];
		$sexo = $_REQUEST['sexo'];
		$crono = $_REQUEST['crono'];
		$especialidad = $_REQUEST['especialidad'];
		$notas = $_REQUEST['notas'];
		
		$query = $db->query("SET NAMES utf8");
		$query = $db->query("INSERT INTO musicos (Nombre, Vitae, Sexo, Crono, Especialidad, Notas) VALUES ('$nombre', '$vitae', '$sexo', '$crono', '$especialidad', '$notas')");	
		if($query) {				
			echo '<center>Músico agregado exitosamente!<br><br><a href="javascript:void;" onclick="showMusicos();">Regresar a Músicos</a></center>';
		} else echo '<center>Error al agregar al Musico!</center>';
	}		
}

?>