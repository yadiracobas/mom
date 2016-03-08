<?php 
session_start();

// if session is not set redirect the user
if(empty($_SESSION['u_name']) ) {
	header("Location:index.html");	
}
elseif ( empty($_REQUEST['id']) ) {
	echo "<br><br><center>No tiene permiso para aceder a esta pagina!";
} else {
	include('DB.php');	
	if(!$db) {
		// Show error if we cannot connect.
		echo 'ERROR: No se pudo conectar con la Base de Datos.';
	} else {
		$i = $_REQUEST['i'];
		$id = $_REQUEST['id'];
		$nombre = $_REQUEST['nombre'];
		$vitae = $_REQUEST['vitae'];
		$sexo = $_REQUEST['sexo'];
		$crono = $_REQUEST['crono'];
		$especialidad = $_REQUEST['especialidad'];
		$notas = $_REQUEST['notas'];		
		
		$query = $db->query("SET NAMES utf8");
		$query = $db->query("UPDATE musicos SET Nombre='$nombre', Vitae='$vitae', Sexo='$sexo', Crono='$crono', Notas='$notas', Especialidad='$especialidad' WHERE IdMusico='$id'");		
		?>
        <form name="editMusico_<?php echo $i; ?>">
<input type="hidden" name="id_<?php echo $i; ?>" value="<?php echo $id; ?>">
Id: <?php echo $id ?><br />
Músico: <input type="text" name="nombre_<?php echo $i; ?>" id="nombre_<?php echo $i; ?>" size="80" value="<?php echo $nombre; ?>"><br>
Vitae: <input type="text" name="vitae_<?php echo $i; ?>" id="vitae_<?php echo $i; ?>" size="80" value="<?php echo $vitae; ?>"><br>
Sexo: <input type="text" name="sexo_<?php echo $i; ?>" id="sexo_<?php echo $i; ?>" size="80" value="<?php echo $sexo; ?>"><br>
Crono: <input type="text" name="crono_<?php echo $i; ?>" id="crono_<?php echo $i; ?>" size="80" value="<?php echo $crono; ?>"><br>
Especialidad: <input type="text" name="especialidad_<?php echo $i; ?>" id="especialidad_<?php echo $i; ?>" size="80" value="<?php echo $especialidad; ?>"><br>
Notas: <input type="text" name="notas_<?php echo $i; ?>" id="notas_<?php echo $i; ?>" size="80" value="<?php echo $notas; ?>"><br>
<input type="button" onClick="editarMusico('<?php echo $id; ?>','<?php echo $i ?>')" value="Editar"> || 
<input type="button" onClick="eliminarMusico('<?php echo $id; ?>','<?php echo $i ?>')" value="Eliminar">            
        </form>
        <?
		
	}	
}

?>