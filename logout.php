<?php 
	session_start();
	
	session_destroy();
	
	//redirection vers la page de connexion par exemple, ou une autre page
	
	header('location: index.php');

?>
