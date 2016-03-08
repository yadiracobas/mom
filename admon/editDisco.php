<?php 
session_start();
// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
} else { 	
	include('DB.php');
	$IdDisco = $_REQUEST['id'];
	$query = $db->query("SET NAMES utf8");
	$query = $db->query("SELECT * FROM discos WHERE IdDisco='$IdDisco'");
	while ($result = $query->fetch_object()) {
		$IdDisco = $result->IdDisco;
		$Titulo = $result->Titulo;	
		$IdMarca = $result->IdMarca;			
		$NoSerie = $result->NoSerie;
		$Ano = $result->Ano;
		$Formato = $result->Formato;
		$Claves = $result->Claves;
		$Interpretes = $result->Interpretes;
		$Director = $result->Director;
		$Solista = $result->Solista;
		$Digitalizacion = $result->Digitalizacion;		
?>		
		<div class="adminBlock" id="disco">
Id Disco: <?php echo $IdDisco; ?><br />
<input type="hidden" name="IdDisco" id="IdDisco" value="<?php echo $IdDisco; ?>" />
Titulo: <input type="text" name="Titulo" id="Titulo" value="<?php echo $Titulo; ?>" size="80" /><br />
Id Marca: <input type="text" name="IdMarca" id="IdMarca" value="<?php echo $IdMarca; ?>" size="80" /><br />
No Serie: <input type="text" name="NoSerie" id="NoSerie" value="<?php echo $NoSerie; ?>" size="80" /><br />
Año: <input type="text" name="Ano" id="Ano" value="<?php echo $Ano; ?>" size="80" /><br />
Formato: <input type="text" name="Formato" id="Formato" value="<?php echo $Formato; ?>" size="80" /><br />
Claves: <input type="text" name="Claves" id="Claves" value="<?php echo $Claves; ?>" size="80" /><br />
Intérpretes: <input type="text" name="Interpretes" id="Interpretes" value="<?php echo $Interpretes; ?>" size="80" /><br />
Director: <input type="text" name="Director" id="Director" value="<?php echo $Director; ?>" size="80" /><br />
Solista: <input type="text" name="Solista" id="Solista" value="<?php echo $Solista; ?>" size="80" /><br />
Digitalización: <input type="text" name="Digitalizacion" id="Digitalizacion" value="<?php echo $Digitalizacion; ?>" size="80" /><br /><br />

<input type="button" onclick="doEditarDisco();" value="Editar" /> || <input type="button" onclick="showDiscos();" value="Cancelar" />
        </div>
<?php		
	}
}
?>