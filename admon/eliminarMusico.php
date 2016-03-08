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
		$id = $_REQUEST['id'];		
		$query = $db->query("SET NAMES utf8");
		$query = $db->query("DELETE FROM musicos WHERE IdMusico='$id'");
		echo "Músico eliminado de la Base de Datos.";	
	}		
}

?>