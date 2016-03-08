<?php
session_start();
//if logout then destroy the session and redirect the user

	session_destroy();
	header("Location:index.html");

?>