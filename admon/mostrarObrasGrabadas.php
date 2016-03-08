<?php 
session_start();

// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
} else { 
	echo '<center><a href="javascript:void;" onclick="showAgregarObraGrabada();">Agregar una Obra Grabada Nueva</a><br /><br /></center>';	
	include('DB.php');
	$query = $db->query("SET NAMES utf8");
	$query = $db->query("SELECT * FROM obrasGrabadas ORDER BY Titulo");
	$i = 0;
	while ($result = $query->fetch_object()) {
		$i++;
		$id = $result->id;
		$Titulo = $result->Titulo;	
		$Director = $result->Director;
		$Orquesta = $result->Orquesta;
		$IdDisco = $result->IdDisco;
		$IdMusico = $result->IdMusico;
?>		
	<div class="adminBlock" id="obraGrabada">
		Id Obra Grabada: <?php echo $id; ?><br />
		Titulo: <?php echo $Titulo; ?><br />
        Orquesta: <?php echo $Orquesta; ?><br />
        Director: <?php echo $Director; ?><br />
        Id Disco: <?php echo $IdDisco; ?>&nbsp;&nbsp;&nbsp;&nbsp;Nombre Disco: <?php echo getNombreDisco($IdDisco); ?><br />
        Id Musico: <?php echo $IdMusico; ?>&nbsp;&nbsp;&nbsp;&nbsp;Nombre Musico: <?php echo getNombreMusico($IdMusico); ?><br />
		<a href="javascript:void" onclick="editarObraGrabada('<?php echo $id; ?>');">Ver / Editar</a> || 
		<a href="javascript:void" onclick="eliminarObraGrabada('<?php echo $id; ?>');">Eliminar</a>
    </div>
<?php		
	}
}

function getNombreDisco($id) {
	include('DB.php');
	$query = $db->query("SET NAMES utf8");
	$query = $db->query("SELECT * FROM discos WHERE IdDisco = '$id' LIMIT 1");
	while ($result = $query->fetch_object()) {
		return $result->Titulo;
	}
}

function getNombreMusico($id) {
	include('DB.php');
	$query = $db->query("SET NAMES utf8");
	$query = $db->query("SELECT * FROM musicos WHERE IdMusico = '$id' LIMIT 1");
	while ($result = $query->fetch_object()) {
		return $result->Nombre;
	}
}

?>