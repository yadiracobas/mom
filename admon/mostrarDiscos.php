<?php 
session_start();
// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
} else { 
	echo '<center><a href="javascript:void;" onclick="showAgregarDisco();">Agregar un Disco Nuevo</a><br /><br /></center>';
	include('DB.php');
	$query = $db->query("SET NAMES utf8");
	$query = $db->query("SELECT * FROM discos ORDER BY Titulo");
	$i = 0;
	while ($result = $query->fetch_object()) {
		$i++;
		$IdDisco = $result->IdDisco;
		$Titulo = $result->Titulo;	
?>		
	<div class="adminBlock" id="musico">
		Id Disco: <?php echo $IdDisco; ?><br />
		Titulo: <?php echo $Titulo; ?><br />
		<a href="javascript:void" onclick="editarDisco('<?php echo $IdDisco; ?>');">Ver / Editar</a> || 
		<a href="javascript:void" onclick="eliminarDisco('<?php echo $IdDisco; ?>');">Eliminar</a>
    </div>
<?php		
	}
}
?>