<?php

	if(!isset($_SESSION)) 
  { 
		session_start(); 
		if(!$_SESSION['validar']){
			header("Location:ingresar.php");
			exit();
		}
		else {
			session_destroy();
		}
	}
	
   
	else
	session_destroy();

?>