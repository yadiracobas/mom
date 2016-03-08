<?php 
session_start();
// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
} else { 	
	include('DB.php');
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
	$query = $db->query("UPDATE discos SET Titulo='$Titulo', IdMarca='$IdMarca', NoSerie='$NoSerie', Ano='$Ano', Formato='$Formato', Claves='$Claves', Interpretes='$Interpretes', Director='$Director', Solista='$Solista', Digitalizacion='$Digitalizacion' WHERE IdDisco='$IdDisco'");		
		
	if ($query) { echo '<center>El Disco se ha Editado correctamente!<br><br><a href="javascript:void();" onclick="showDiscos();">Regresar a Discos</a> || <a href="javascript:void" onclick="editarDisco(\''.$IdDisco.'\');">Volver a Editar</a></center>'; }
	else { echo '<center>Hubo un error al actualizar la información del Disco.</center>'; }
}
?>