<?php /* Fichier appellé lors de la connexion d'un utilisateur */
	session_start();
    include ("mysql.php");
    
	$reponse = $connect->query('SELECT * FROM user');
	$donnees = $reponse->fetch();
	
	$login_valid = $donnees['pseudo'];
	$pwd_valid= $donnees['password'];
	
	$pseudo = filter_input(INPUT_POST, 'pseudo');
	$password = filter_input(INPUT_POST, 'password');
	
	if(isset($pseudo) && isset($password)){
		if($login_valid==$pseudo && $pwd_valid==$password){
			$_SESSION['connected']=TRUE;
			$_SESSION['login'] = $pseudo;
			$_SESSION['password'] = $password;
			
			//Redirection vers la page membre.
			header("location: test_session.php");
		}
		else{
			echo '<body onLoad="alert(\'Membre non reconnu...\')">';
			echo '<meta http-equiv="refresh" content="0;URL=index.htm">';
		}
	}
	else{
		echo 'Les variables du formulaire ne sont pas déclarées';
	}
?>
