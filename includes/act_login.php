<?php  /* Fichier appellé lors de la connexion d'un utilisateur */
	
	include ('mysql.php');
	include('header.php');
	// Hachage du mot de passe
	$pass_hache = sha1($_POST['password']);
	$pseudo = $_POST['pseudo'];

	// Vérification des identifiants
	$req = $connect->prepare('SELECT id FROM user WHERE pseudo = :pseudo AND password = :password');
	$req->execute(array(
		'pseudo' => $pseudo,
		'password' => $pass_hache));

	$resultat = $req->fetch();

	if (!$resultat)
	{
		echo 'Mauvais identifiant ou mot de passe !';
	}
	else
	{

		$_SESSION['id'] = $resultat['id'];
		$_SESSION['pseudo'] = $pseudo;
		echo 'Vous êtes connecté !';
		
		header('Location: http://localhost/Projet/'); 
	}
?>
