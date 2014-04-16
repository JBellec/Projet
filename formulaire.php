<?php

// vérifier si les champs sont rempli
if(!empty($_POST['email'])&&(!empty($_POST['password'])
&&(!empty($_POST['pseudo'])
&&(!empty($_POST['lastname'])
&&(!empty($_POST['password2'])
&&(!empty($_POST['name']))

{

// D'abord, je me connecte à la base de données.
$bdd = new  PDO('mysql:host=localhost;dbname=projet1a', 'root','');

// Je mets aussi certaines sécurités ici…
$password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
$password2 = mysql_real_escape_string(htmlspecialchars($_POST['password2']));


if($password == $password2)
{
	// je récupère les données rentrées
$pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
$lastname = mysql_real_escape_string(htmlspecialchars($_POST['lastname']));


// Je vais crypter le mot de passe.
$password = sha1($password);

mysql_query("INSERT INTO projet1a VALUES('', '$pseudo', '$password', '$email','$name','$lastname')");


}
 
else
{
echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
}

}
?>