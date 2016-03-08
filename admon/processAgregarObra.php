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
		$Titulo = $_REQUEST['Titulo'];
		$AnoComposicion = $_REQUEST['Composicion'];
		$Duracion = $_REQUEST['Duracion'];
		$Duracion2 = $_REQUEST['Duracion2'];
		$Periodo = $_REQUEST['Periodo'];
		$Tema = $_REQUEST['Tema'];
		$Texto = $_REQUEST['Texto'];		
		$DotacionEspecifica = $_REQUEST['DotacionEspecifica'];
		$Solista = $_REQUEST['Solista'];
		$IdDotacion = $_REQUEST['IdDotacion'];
		$Localizacion = $_REQUEST['Localizacion'];
		$Movimientos = $_REQUEST['Movimientos'];
		$Estreno = $_REQUEST['Estreno'];
		$Fuentes = $_REQUEST['Fuentes'];
		$IdMusico = $_REQUEST['IdMusico'];
		
		$query = $db->query("SET NAMES utf8");
		$query = $db->query("INSERT INTO obras (Titulo, AnoComposicion, Duracion, Duracion2, Periodo, Tema, Texto, DotacionEspecifica, Solista, IdDotacion, Localizacion, Movimientos, Estreno, Fuentes, IdMusico) VALUES ('$Titulo', '$AnoComposicion', '$Duracion', '$Duracion2', '$Periodo', '$Tema', '$Texto', '$DotacionEspecifica', '$Solista', '$IdDotacion', '$Localizacion', '$Movimientos', '$Estreno', '$Fuentes', '$IdMusico')");	
		if($query) {				
			echo '<center>Obra agregada exitosamente!<br><br><a href="javascript:void;" onclick="showObras();">Regresar a Obras</a> || <a href="javascript:void" onclick="showAgregarObra();">Agregar otra Obra</a></center>';
		} else echo '<center>Error al agregar la Obra!</center>';
	}		
}

?>