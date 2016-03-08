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
		echo "<center><h3>Agregar Editor / Contacto</h3></center>";  
?>
		<div class="adminBlock" id="disco">
Nombre: <input type="text" name="Nombre" id="Nombre" value="<?php echo $Nombre; ?>" size="80" /><br />
Abreviatura: <input type="text" name="Abreviatura" id="Abreviatura" value="<?php echo $Abreviatura; ?>" size="80" /><br />
Direccion: <input type="text" name="Direccion" id="Direccion" value="<?php echo $Direccion; ?>" size="80" /><br />
Email: <input type="text" name="Email" id="Email" value="<?php echo $Email; ?>" size="80" /><br />
Contacto: <input type="text" name="Claves" id="Claves" value="<?php echo $Claves; ?>" size="80" /><br />
Telefono: <input type="text" name="Interpretes" id="Interpretes" value="<?php echo $Interpretes; ?>" size="80" /><br /><br />

<a href="javascript:void" onclick="doAgregarEditor();">Agregar</a> ||
<a href="javascript:void" onclick="showEditores();">Cancelar</a>
        </div>
<?php	
	}	
}
?>