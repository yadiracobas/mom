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
		echo "<center><h3>Agregar Disco</h3></center>";  
?>
		<div class="adminBlock" id="disco">
Id Disco: <input type="hidden" name="IdDisco" id="IdDisco" value="" /><br />
Titulo: <input type="text" name="Titulo" id="Titulo" value="" size="80" /><br />
Id Marca: <input type="text" name="IdMarca" id="IdMarca" value="" size="80" /><br />
No Serie: <input type="text" name="NoSerie" id="NoSerie" value="" size="80" /><br />
Año: <input type="text" name="Ano" id="Ano" value="" size="80" /><br />
Formato: <input type="text" name="Formato" id="Formato" value="" size="80" /><br />
Claves: <input type="text" name="Claves" id="Claves" value="" size="80" /><br />
Intérpretes: <input type="text" name="Interpretes" id="Interpretes" value="" size="80" /><br />
Director: <input type="text" name="Director" id="Director" value="" size="80" /><br />
Solista: <input type="text" name="Solista" id="Solista" value="" size="80" /><br />
Digitalización: <input type="text" name="Digitalizacion" id="Digitalizacion" value="" size="80" /><br />

<a href="javascript:void" onclick="doAgregarDisco();">Agregar Disco</a> ||
<a href="javascript:void" onclick="showDiscos();">Cancelar</a>
        </div>
<?php	
	}	
}
?>