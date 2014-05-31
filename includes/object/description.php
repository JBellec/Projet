<?php
	//include('../mysql.php');
	$req = $connect->prepare('SELECT description FROM object WHERE id = ?');
	$req->execute(array($_GET['id']));
	$resultat=$req->fetch();
	$description = $resultat['description'];
	$req->closeCursor();
		
	echo $description;
?>