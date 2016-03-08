<?php 
session_start();
// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
} else { 	
	include('DB.php');
	$IdEditor = $_REQUEST['id'];
	$query = $db->query("SET NAMES utf8");
	$query1 = $db->query("SELECT * FROM `editoras y contactos` WHERE IdEditor='$IdEditor' LIMIT 1");
	while ($result = $query1->fetch_object()) {
		$Nombre = $result->Nombre;
		$Abreviatura = $result->Abreviatura;		
		$Direccion = $result->Direccion;
		$Email = $result->Email;
		$Contacto = $result->Contacto;
		$Telefono = $result->Telefono;			
?>		
		<div class="adminBlock" id="disco">
Id Editor: <?php echo $IdEditor; ?><br />
<input type="hidden" name="IdEditor" id="IdEditor" value="<?php echo $IdEditor; ?>" />
Nombre: <input type="text" name="Nombre" id="Nombre" value="<?php echo $Nombre; ?>" size="80" /><br />
Abreviatura: <input type="text" name="Abreviatura" id="Abreviatura" value="<?php echo $Abreviatura; ?>" size="80" /><br />
Direccion: <input type="text" name="Direccion" id="Direccion" value="<?php echo $Direccion; ?>" size="80" /><br />
Email: <input type="text" name="Email" id="Email" value="<?php echo $Email; ?>" size="80" /><br />
Contacto: <input type="text" name="Claves" id="Claves" value="<?php echo $Claves; ?>" size="80" /><br />
Telefono: <input type="text" name="Interpretes" id="Interpretes" value="<?php echo $Interpretes; ?>" size="80" /><br /><br />
<input type="button" onclick="doEditarEditor();" value="Editar" /> || <input type="button" onclick="showEditores();" value="Cancelar" />
        </div>
<?php			
	}
}
?>