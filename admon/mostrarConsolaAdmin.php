<?php 
session_start();

// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {
	header("Location:index.html");	
}
?>

<div id='menu'>
Menú de opciones<br />
<a href="#" onclick="showMusicos();">Musicos</a> | 
<a href="#" onclick="showObras();">Obras</a> | 
<a href="#" onclick="showDiscos();">Discos</a> |
<a href="#" onclick="showObrasGrabadas();">Obras Grabadas</a> |
<a href="#" onclick="showEditores();">Editoras</a> |
<a href="logout.php" >Logout</a>
</div>

<div id='content'>
	<center><big>Bienvenido a la herramienta administrativa</big></center>
</div>