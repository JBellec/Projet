<?php
    /* Fichier appellé lors de l'inscription d'une personne */
// D'abord, je me connecte à la base de données.
    include 'includes/mysql.php'
// vérifier si les champs sont rempli
    if(!empty($_POST['email'])&&(!empty($_POST['password'])
    &&(!empty($_POST['pseudo'])
    &&(!empty($_POST['lastname'])
    &&(!empty($_POST['password2'])
    &&(!empty($_POST['name'])) {

        // Je mets aussi certaines sécurités ici…
        $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
        $password2 = mysql_real_escape_string(htmlspecialchars($_POST['password2']));


        if($password == $password2) {
	            // je récupère les données rentrées
            $pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
            $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
            $name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
            $lastname = mysql_real_escape_string(htmlspecialchars($_POST['lastname']));
            // Je vais chiffrer le mot de passe.
            $password = sha1($password);

            mysql_query("INSERT INTO projet1a VALUES('', '$pseudo', '$password', '$email','$name','$lastname')");
        } else {
            echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
        }
        /* Il faut ensuite connecté la personne et l'amener sur sa page personnelle */
            header('location: xxx.php'); // A CHANGER !!!
    }
?>
