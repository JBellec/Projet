<?php 
if(isset($_SESSION['login'])) { //$_SESSION['login'] = pseudo
        include 'mysql.php';

		$req = $connect->prepare('SELECT admin FROM user WHERE pseudo = ?');
		$req->execute(array($_SESSION['pseudo']));
		$resultat=$req->fetch();
		$isadmin = $resultat[0];
		$req->closeCursor();
		if($isadmin==1) {
        include 'navbar_isadmin.php';
		} 
}               
?> 
