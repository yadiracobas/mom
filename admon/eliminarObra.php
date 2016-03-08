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
		$query = $db->query("DELETE FROM obras WHERE IdObra='$id'");
		if ($query) { echo "<center>Obra eliminada de la Base de Datos.<br><br><a href='javascript:void();' onlick='showObras();'>Regresar a Obras</a></center>"; }
		else echo "<center>Hubo un error al eliminar la Obra!</center>";	
		
	}		
}

?>