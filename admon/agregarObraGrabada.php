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
		echo "<center><h3>Agregar Obra Grabada</h3></center>";  
?>
		<div class="adminBlock" id="disco">
Id Obra: <input type="text" name="IdObra" id="IdObra" value="" size="80" /><br />
Titulo: <input type="text" name="Titulo" id="Titulo" value="" size="80" /><br />
IdMusico: <input type="text" name="IdMusico" id="IdMusico" value="" size="80" /><br />
Dotacion: <input type="text" name="Dotacion" id="Dotacion" value="" size="80" /><br />
Orquesta: <input type="text" name="Orquesta" id="Orquesta" value="<?php echo $Orquesta; ?>" size="80" /><br />
Director: <input type="text" name="Director" id="Director" value="<?php echo $Director; ?>" size="80" /><br />
Solistas: <input type="text" name="Solistas" id="Solistas" value="" size="80" /><br />
Movimientos: <input type="text" name="Movimientos" id="Movimientos" value="" size="80" /><br />
Track: <input type="text" name="Track" id="Track" value="" size="80" /><br />
Duracion: <input type="text" name="Duracion" id="Duracion" value="" size="80" /><br />
IdDisco: <input type="text" name="IdDisco" id="IdDisco" value="" size="80" /><br />
Notas: <input type="text" name="Notas" id="Notas" value="" size="80" /><br /><br />
<input type="button" onclick="doAgregarObraGrabada();" value="Agregar" /> || <input type="button" onclick="showObrasGrabadas();" value="Cancelar" />
        </div>
<?php	
	}	
}
?>