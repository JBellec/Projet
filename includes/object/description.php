<?php
	include('../mysql.php');
	$req = $connect->prepare('SELECT description FROM object WHERE id = ?');
		$req->execute(array($_SESSION['pseudo']));
		$resultat=$req->fetch();
		$isadmin = $resultat[0];
		$req->closeCursor();
?>