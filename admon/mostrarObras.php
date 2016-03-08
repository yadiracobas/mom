<?php 
session_start();
// if session is not set redirect the user
if(empty($_SESSION['u_name'])) { header("Location:index.html");	} 
else { ?>
	<center><a href="javascript:void;" onclick="showAgregarObra();">Agregar una Obra Nueva</a><br /><br /></center> <?php 
	include('DB.php');
	$query = $db->query("SET NAMES utf8");
	$query = $db->query("SELECT * FROM obras ORDER BY Titulo");
	$i = 0;
	while ($result = $query->fetch_object()) {
		$i++;
		$id = $result->IdObra;
		$Titulo = $result->Titulo;				
?>		
		<div class="adminBlock" id="musico_<?php echo $i; ?>">
Id Obra: <?php echo $id; ?><br />
Titulo: <?php echo $Titulo; ?><br />
<a href="javascript:void" onclick="editarObra('<?php echo $id; ?>');">Ver / Editar</a> || 
<a href="javascript:void" onclick="eliminarObra('<?php echo $id; ?>');">Eliminar</a>
        </div>
<?php		
	}
}
?>