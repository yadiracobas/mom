<?php 
session_start();
// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
} else { 	
	include('DB.php');
	$id = $_REQUEST['id'];
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
	$query = $db->query("UPDATE obrasGrabadas SET IdObra='$IdObra', Titulo='$Titulo', IdMusico='$IdMusico', Dotacion='$Dotacion', Orquesta='$Orquesta', Director='$Director', Solistas='$Solistas', Movimientos='$Movimientos', Track='$Track', Duracion='$Duracion', IdDisco='$IdDisco', Notas='$Notas' WHERE id='$id'");		
		
	if ($query) { echo '<center>La Obra Grabada se ha Editado correctamente!<br><br><a href="javascript:void();" onclick="showObrasGrabadas();">Regresar a Obras Grabadas</a> || <a href="javascript:void" onclick="editarObraGrabada(\''.$id.'\');">Volver a Editar</a></center>'; }
	else { echo '<center>Hubo un error al actualizar la información de la Obra Grabada!</center>'; }
}
?>