<?php
session_start();

// if session is not set redirect the user
if(empty($_SESSION['u_name'])) {  
		echo 'yes';
} else {  // session is set
		echo 'no';
}

?>