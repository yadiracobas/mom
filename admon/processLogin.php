<?php 

	session_start();
	
	include('DB.php');	
	if(!$db) {
		// Show error if we cannot connect.
		echo 'ERROR: No se pudo conectar con la Base de Datos.';
	} else {		
		$user = $db->real_escape_string($_POST['user']);
		$pass = md5($db->real_escape_string($_POST['password']));
		$query = $db->query("SET NAMES utf8");
		$query = $db->query("SELECT * FROM usuarios WHERE usuario='$user'");		
		while ($result = $query -> fetch_object()) {
			$true_pass = $result->password;
		}
		if($true_pass===$pass) {
			echo "yes";
			$_SESSION['u_name'] = $user; 
		}
		else echo "no";						
	}
	
?>