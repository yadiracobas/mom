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
		echo "<center><h3>Agregar Obra</h3></center>";  
?>
		<div class="adminBlock" id="musico">
        <form name="editMusico">
Titulo: <input type="text" name="titulo" id="titulo" size="80" value=""><br>
Año Composicion: <input type="text" name="anoComposicion" id="anoComposicion" size="70" value=""><br>
Duracion: <input type="text" name="duracion" id="duracion" size="80" value=""><br>
Duracion2: <input type="text" name="duracion2" id="duracion2" size="80" value=""><br>
Periodo: <input type="text" name="periodo" id="periodo" size="80" value=""><br>
Tema: <input type="text" name="tema" id="tema" size="80" value=""><br>
IdMusico: <input type="text" name="idMusico" id="idMusico" size="70" value=""><br>
Texto: <input type="text" name="texto" id="texto" size="80" value=""><br>
Solista: <input type="text" name="solista" id="solista" size="80" value=""><br>
Dotacion Específica: <input type="text" name="dotacionEspecifica" id="dotacionEspecifica" size="60" value=""><br>
Id Dotación: <input type="text" name="idDotacion" id="idDotacion" size="80" value=""><br>
Localizacion: <input type="text" name="localizacion" id="localizacion" size="80" value=""><br>
Movimientos: <input type="text" name="movimientos" id="movimientos" size="80" value=""><br>
Estreno: <input type="text" name="estreno" id="estreno" size="80" value=""><br>
Fuentes: <input type="text" name="fuentes" id="fuentes" size="80" value=""><br>

<input type="button" onClick="doAgregarObra()" value="Agregar"> ||
<input type="button" onClick="showObras()" value="Cancelar">
        </form>
        </div>
<?php	
	}	
}
?>