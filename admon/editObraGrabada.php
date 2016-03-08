<?php 
session_start();
// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
} else { 	
	include('DB.php');
	$id = $IdObraGrabada = $_REQUEST['id'];
	$query = $db->query("SET NAMES utf8");
	$query1 = $db->query("SELECT * FROM obrasGrabadas WHERE id='$id' LIMIT 1");
	while ($result = $query1->fetch_object()) {
		$IdObra = $result->IdObra;
		$Titulo = $result->Titulo;		
		$IdMusico = $result->IdMusico;
		$Dotacion = $result->Dotacion;
		$Orquesta = $result->Orquesta;
		$Director = $result->Director;			
		$Solistas = $result->Solistas;
		$Movimientos = $result->Movimientos;
		$Track = $result->Track;
		$Duracion = $result->Duracion;
		$IdDisco = $result->IdDisco;
		$Notas = $result->Notas;
?>		
		<div class="adminBlock" id="disco">
Id Obra Grabada: <?php echo $IdObraGrabada; ?><br />
<input type="hidden" name="IdObraGrabada" id="IdObraGrabada" value="<?php echo $id; ?>" />
Id Obra: <input type="text" name="IdObra" id="IdObra" value="<?php echo $IdObra; ?>" size="80" /><br />
Titulo: <input type="text" name="Titulo" id="Titulo" value="<?php echo $Titulo; ?>" size="80" /><br />
IdMusico: <input type="text" name="IdMusico" id="IdMusico" value="<?php echo $IdMusico; ?>" size="80" /><br />
Dotacion: <input type="text" name="Dotacion" id="Dotacion" value="<?php echo $Dotacion; ?>" size="80" /><br />
Orquesta: <input type="text" name="Orquesta" id="Orquesta" value="<?php echo $Orquesta; ?>" size="80" /><br />
Director: <input type="text" name="Director" id="Director" value="<?php echo $Director; ?>" size="80" /><br />
Solistas: <input type="text" name="Solistas" id="Solistas" value="<?php echo $Solistas; ?>" size="80" /><br />
Movimientos: <input type="text" name="Movimientos" id="Movimientos" value="<?php echo $Movimientos; ?>" size="80" /><br />
Track: <input type="text" name="Track" id="Track" value="<?php echo $Track; ?>" size="80" /><br />
Duracion: <input type="text" name="Duracion" id="Duracion" value="<?php echo $Duracion; ?>" size="80" /><br />
IdDisco: <input type="text" name="IdDisco" id="IdDisco" value="<?php echo $IdDisco; ?>" size="80" /><br />
Notas: <input type="text" name="Notas" id="Notas" value="<?php echo $Notas; ?>" size="80" /><br /><br />
<input type="button" onclick="doEditarObraGrabada();" value="Editar" /> || <input type="button" onclick="showObrasGrabadas();" value="Cancelar" />
        </div>
<?php			
	}
}
?>