<?php
/*connexion a la bdd*/    
  try {
	    $connect = new PDO('mysql:host=localhost;dbname=projet', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }
    catch (Exception $e) {
	    die('Erreur : ' . $e->getMessage());
    }
if(isset($_POST['description']))
{
	/*ajout de ce qu'on a reçu*/
	echo 'on ajoute';
	$req= $connect->prepare('INSERT INTO user(description) VALUES(:description)');
	$req->execute(array('description'=>$_POST['description']));
	if($_FILES['photos']['error'] > 0)
	{
		echo 'erreur de transfert de la photo';
	}
	
	/* traitement de l'image reçue */
	
		//1. strrchr renvoie l'extension avec le point (« . »).
		//2. substr(chaine,1) ignore le premier caractère de chaine.
		//3. strtolower met l'extension en minuscules.
	$extension_upload = strtolower(  substr(  strrchr($_FILES['photos']['name'], '.')  ,1)  );
	$nom = "image/nomphoto.{$extension_upload}";
	$resultat = move_uploaded_file($_FILES['photos']['tmp_name'],$nom);
	if ($resultat)
	{
		header('location:../../index.php');
	}
	else
	{
		echo 'echec du transfert de l\'image';
	}	
}
else
{
	echo 'il faut remplir tous les champs ! =)';
}
?>
