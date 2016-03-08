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
		$IdDisco = $_REQUEST['IdDisco'];
		$Titulo = $_REQUEST['Titulo'];
		$IdMarca = $_REQUEST['IdMarca'];			
		$NoSerie = $_REQUEST['NoSerie'];
		$Ano = $_REQUEST['Ano'];
		$Formato = $_REQUEST['Formato'];
		$Claves = $_REQUEST['Claves'];
		$Interpretes = $_REQUEST['Interpretes'];
		$Director = $_REQUEST['Director'];
		$Solista = $_REQUEST['Solista'];
		$Digitalizacion = $_REQUEST['Digitalizacion'];
		
		$query = $db->query("SET NAMES utf8");
		$query = $db->query("INSERT INTO discos (Titulo, IdMarca, NoSerie, Ano, Formato, Claves, Interpretes, Director, Solista, Digitalizacion) VALUES ('$Titulo','$IdMarca','$NoSerie','$Ano','$Formato','$Claves','$Interpretes','$Director','$Solista','$Digitalizacion')");			
		if($query) { echo '<center>Disco agregado exitosamente!<br><br><a href="javascript:void;" onclick="showDiscos();">Regresar a Discos</a> || <a href="javascript:void" onclick="showAgregarDisco();">Agregar otro Disco</a></center>'; } 
		else echo '<center>Error al agregar el Disco!</center>';
	}		
}

?>