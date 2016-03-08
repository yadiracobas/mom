<?php 
session_start();
// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
} else {  ?>
	<center><a href="javascript:void;" onclick="showAgregarMusico();">Agregar un Músico Nuevo</a><br /><br /></center>
<?php
	include('DB.php');
	$query = $db->query("SET NAMES utf8");
	$query = $db->query("SELECT * FROM musicos ORDER BY Nombre");
	$i = 0;
	while ($result = $query -> fetch_object()) {
		$i++;
		$id = $result->IdMusico;
		$nombre = $result->Nombre;
		$vitae = $result->Vitae;
		$sexo = $result->Sexo;
		$crono = $result->Crono;
		$especialidad = $result->Especialidad;
		$notas = $result->Notas;
?>		        
		<div class="adminBlock" id="musico_<?php echo $i; ?>">
        <form name="editMusico_<?php echo $i; ?>">
<input type="hidden" name="id_<?php echo $i; ?>" value="<?php echo $id; ?>">
Id: <?php echo $id; ?><br />
Músico: <input type="text" name="nombre_<?php echo $i; ?>" id="nombre_<?php echo $i; ?>" size="80" value="<?php echo $nombre; ?>"><br>
Vitae: <input type="text" name="vitae_<?php echo $i; ?>" id="vitae_<?php echo $i; ?>" size="80" value="<?php echo $vitae; ?>"><br>
Sexo: <input type="text" name="sexo_<?php echo $i; ?>" id="sexo_<?php echo $i; ?>" size="80" value="<?php echo $sexo; ?>"><br>
Crono: <input type="text" name="crono_<?php echo $i; ?>" id="crono_<?php echo $i; ?>" size="80" value="<?php echo $crono; ?>"><br>
Especialidad: <input type="text" name="especialidad_<?php echo $i; ?>" id="especialidad_<?php echo $i; ?>" size="80" value="<?php echo $especialidad; ?>"><br>
Notas: <input type="text" name="notas_<?php echo $i; ?>" id="notas_<?php echo $i; ?>" size="80" value="<?php echo $notas; ?>"><br>
<input type="button" onClick="editarMusico('<?php echo $id; ?>','<?php echo $i ?>')" value="Editar"> || 
<input type="button" onClick="eliminarMusico('<?php echo $id; ?>','<?php echo $i ?>')" value="Eliminar">            
        </form>
        </div>
<?php		
	}
}
?>