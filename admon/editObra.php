<?php 
session_start();
// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
} elseif($_REQUEST['id']<1) { echo "Faltan datos para procesar su solicitud!"; }
else {
	include('DB.php');
	$IdObra = $_REQUEST['id'];
	$query = $db->query("SET NAMES utf8");
	$query = $db->query("SELECT * FROM obras WHERE IdObra = '$IdObra' LIMIT 1");
	while ($result = $query->fetch_object()) {
		$id = $result->IdObra;
		$AnoComposicion = $result->AnoComposicion;
		$Duracion = $result->Duracion;
		$Duracion2 = $result->Duracion2;
		$Periodo = $result->Periodo;
		$Tema = $result->Tema;
		$IdMusico = $result->IdMusico;
		$Titulo = $result->Titulo;
		$Texto = $result->Texto;
		$Solista = $result->Solista;
		$DotacionEspecifica = $result->DotacionEspecifica;
		$Solista = $result->Solista;
		$IdDotacion = $result->IdDotacion;
		$Localizacion = $result->Localizacion;
		$Movimientos = $result->Movimientos;
		$Estreno = $result->Estreno;
		$Fuentes = $result->Fuentes;				
?>		
		<div class="adminBlock" id="musico">
        <form name="editMusico">
<input type="hidden" name="idObra" id="idObra" value="<?php echo $id; ?>">
Id: <?php echo $id; ?><br />
Titulo: <input type="text" name="titulo" id="titulo" size="80" value="<?php echo $Titulo; ?>"><br>
Año Composicion: <input type="text" name="anoComposicion" id="anoComposicion" size="70" value="<?php echo $AnoComposicion; ?>"><br>
Duracion: <input type="text" name="duracion" id="duracion" size="80" value="<?php echo $Duracion; ?>"><br>
Duracion2: <input type="text" name="duracion2" id="duracion2" size="80" value="<?php echo $Duracion2; ?>"><br>
Periodo: <input type="text" name="periodo" id="periodo" size="80" value="<?php echo $Periodo; ?>"><br>
Tema: <input type="text" name="tema" id="tema" size="80" value="<?php echo $Tema; ?>"><br>
IdMusico: <input type="text" name="idMusico" id="idMusico" size="70" value="<?php echo $IdMusico; ?>"><br>
Texto: <input type="text" name="texto" id="texto" size="80" value="<?php echo $Texto; ?>"><br>
Solista: <input type="text" name="solista" id="solista" size="80" value="<?php echo $Solista; ?>"><br>
Dotacion Específica: <input type="text" name="dotacionEspecifica" id="dotacionEspecifica" size="60" value="<?php echo $DotacionEspecifica; ?>"><br>
Id Dotación: <input type="text" name="idDotacion" id="idDotacion" size="80" value="<?php echo $IdDotacion ?>"><br>
Localizacion: <input type="text" name="localizacion" id="localizacion" size="80" value="<?php echo $Localizacion; ?>"><br>
Movimientos: <input type="text" name="movimientos" id="movimientos" size="80" value="<?php echo $Movimientos; ?>"><br>
Estreno: <input type="text" name="estreno" id="estreno" size="80" value="<?php echo $Estreno; ?>"><br>
Fuentes: <input type="text" name="fuentes" id="fuentes" size="80" value="<?php echo $Fuentes; ?>"><br>

<input type="button" onClick="doEditarObra()" value="Editar"> ||
<input type="button" onClick="showObras()" value="Cancelar">
        </form>
        </div>
<?php		
	}
}
?>