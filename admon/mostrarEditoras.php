<?php 
session_start();
// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
} else { 
	echo '<center><a href="javascript:void;" onclick="showAgregarEditor();">Agregar una Nueva Editora o Contacto</a><br /><br /></center>';
	include('DB.php');
	$query = $db->query("SET NAMES utf8");
	$query = $db->query("SELECT * FROM `editoras y contactos` ORDER BY Nombre ASC ");
	while ($result = $query->fetch_object()) {
		$IdEditor = $result->IdEditor;
		$Nombre = $result->Nombre;
?>		
	<div class="adminBlock" >
		Id Editor: <?php echo $IdEditor; ?><br />
		Nombre: <?php echo $Nombre; ?><br />
		<a href="javascript:void" onclick="editarEditor('<?php echo $IdEditor; ?>');">Ver / Editar</a> || 
		<a href="javascript:void" onclick="eliminarEditor('<?php echo $IdEditor; ?>');">Eliminar</a>
    </div>
<?php		
	}
}
?>