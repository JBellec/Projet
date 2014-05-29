<? /* Fichier appellé lors de la connexion d'un utilisateur */
    include 'includes/mysql.php';
    
	$reponse = $bdd->query('SELECT * FROM user');
	$donnees = $reponse->fetch();
	
	$login_valid = $donnees['email'];
	$pwd_valid= $donnees['password'];
	
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');
	
	if(isset($email) && isset($password)){
		if($login_valid==$email && $pwd_valid==$password){
			session_start();
			$_SESSION['login'] = $email;
			$_SESSION['password'] = $password;
			
			//Redirection vers la page membre.
			//header('location: page membre');
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
