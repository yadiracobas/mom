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
		echo "<center><h3>Agregar Musico</h3></center>";  
?>
		<div class="adminBlock" id="agregar_musico">  
        <form name="agregarMusico" id="agregarMusico">
Músico: <input type="text" name="nombreMusicoNuevo" id="nombreMusicoNuevo" size="80" value=""><br>
Vitae: <input type="text" name="vitaeMusicoNuevo" id="vitaeMusicoNuevo" size="80" value=""><br>
Sexo: <input type="text" name="sexoMusicoNuevo" id="sexoMusicoNuevo" size="80" value=""><br>
Crono: <input type="text" name="cronoMusicoNuevo" id="cronoMusicoNuevo" size="80" value=""><br>
Especialidad: <input type="text" name="especialidadMusicoNuevo" id="especialidadMusicoNuevo" size="80" value=""><br>
Notas: <input type="text" name="notasMusicoNuevo" id="notasMusicoNuevo" size="80" value=""><br>
<input type="button" onClick="doAgregarMusico();" value="Agregar">             
        </form>
        </div>        
<?php	
	}	
}
?>