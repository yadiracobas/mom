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
		$Nombre = $_REQUEST['Nombre'];
		$Abreviatura = $_REQUEST['Abreviatura'];		
		$Direccion = $_REQUEST['Direccion'];
		$Email = $_REQUEST['Email'];
		$Contacto = $_REQUEST['Contacto'];
		$Telefono = $_REQUEST['Telefono'];	
		
		$query = $db->query("SET NAMES utf8");
		$query = $db->query("INSERT INTO `editoras y contactos` (Nombre, Abreviatura, Direccion, Email, Contacto, Telefono) VALUES ('$Nombre', '$Abreviatura', '$Direccion', '$Email', 'Contacto', '$Telefono')");			
		if($query) { echo '<center>Editor/Contacto agregado exitosamente!<br><br><a href="javascript:void;" onclick="showEditores();">Regresar a Editores y Contactos</a> || <a href="javascript:void" onclick="showAgregarEditor();">Agregar otro Editor/Contacto</a></center>'; } 
		else echo '<center>Error al agregar el Disco!</center>';
	}		
}

?>