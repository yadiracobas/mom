<?php 
session_start();
// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
} else { 	
	include('DB.php');
	$IdEditor = $_REQUEST['IdEditor'];
	$Nombre = $_REQUEST['Nombre'];
	$Abreviatura = $_REQUEST['Abreviatura'];		
	$Direccion = $_REQUEST['Direccion'];
	$Email = $_REQUEST['Email'];
	$Contacto = $_REQUEST['Contacto'];
	$Telefono = $_REQUEST['Telefono'];
	
	$query = $db->query("SET NAMES utf8");
	$query = $db->query("UPDATE `editoras y contactos` SET IdEditor='$IdEditor', Nombre='$Nombre', Abreviatura='$Abreviatura', Direccion='$Direccion', Email='$Email', Contacto='$Contacto', Telefono='$Telefono' WHERE IdEditor='$IdEditor'");		
		
	if ($query) { echo '<center>El editor/Contacto se ha Editado correctamente!<br><br><a href="javascript:void();" onclick="showEditores();">Regresar a Editores y Contactos</a> || <a href="javascript:void" onclick="editarEditor(\''.$IdEditor.'\');">Volver a Editar</a></center>'; }
	else { echo '<center>Hubo un error al actualizar la información del Editor/Contacto.</center>'; }
}
?>