


<?php
    /* Fichier appelé lors de l'inscription d'une personne */
    
    header('Content-type: text/html; charset=UTF-8');// Indique le bon format des entêtes (par défaut apache risque de les envoyer au standard ISO-8859-1)

    $message = null;// Initialisation de la variable du message de réponse
  echo 'ligne 10';
    // Récupération des variables issues du formulaire par la méthode post
    $pseudo = filter_input(INPUT_POST, 'pseudo');
    $pass = filter_input(INPUT_POST, 'password');
    //$email = filter_input(INPUT_POST, 'email');
    $nom = filter_input(INPUT_POST, 'nom');
    $prenom = filter_input(INPUT_POST, 'prenom');
    $pass_hache = sha1($pass);
echo 'ligne 18';
if (isset($pseudo,$pass)) {// Si le formulaire est envoyé
  
echo'ligne 21';
    // Teste que les valeurs ne sont pas vides ou composées uniquement d'espaces  
    $pseudo = trim($pseudo) != '' ? $pseudo : null;
    $pass = trim($pass) != '' ? $pass : null;
   

    // Si $pseudo et $pass différents de null
        if(isset($pseudo,$pass)) {
            echo 'ligne 29';
                /* Connexion au serveur : dans cet exemple, en local sur le serveur d'évaluation
                A MODIFIER avec vos valeurs */
                $hostname = "localhost";
                $database = "projet";
                $username = "root";
                $password = "";

               // Configuration des options de connexion
                /* Désactive l'éumlateur de requêtes préparées (hautement recommandé)
                $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
               
                //      Active le mode exception
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;*/
               
                // Connexion
               include ('mysql.php');
               echo'ligne46';       
               
                // Requête pour compter le nombre d'enregistrements répondant à la clause : champ du pseudo de la table = pseudo posté dans le formulaire
                $requete = "SELECT count(*) FROM user WHERE pseudo = ?";
               
                try
                {
                        
                        echo'ligne 54';// préparation de la requête
                        $req_prep = $connect->prepare($requete);
                       
                        // Exécution de la requête en passant la position du marqueur et sa variable associée dans un tableau
                        $req_prep->execute(array(0=>$pseudo));
                       
                        // Récupération du résultat
                        $resultat = $req_prep->fetchColumn();
                       
                        if ($resultat == 0)
                        // Résultat du comptage = 0 pour ce pseudo, on peut donc l'enregistrer
                        {
                          echo 'ligne 66';
                                // Pour enregistrer la date actuelle (date/heure/minutes/secondes) on peut utiliser directement la fonction mysql : NOW()
                                $modification = "UPDATE user SET pseudo =:nvpseudo, password =:nvpassword,nom =:nvnom, prenom=:nvprenom WHERE pseudo = ?";
                               echo'ligne 69';
                                // préparation de la modification
                                $modif_prep = $connect->prepare($modification);
                               
                                // Exécution de la requête en passant les marqueurs et leur variables associées dans un tableau
                                $modif_exec = $modif_prep->execute(array(':nvpseudo'=>$pseudo,':nvpassword'=>$pass_hache = sha1($pass), ':nvnom'=>$nom,':nvprenom'=>$prenom,));
                               echo'ligne 75';
                                /* Si l'insertion s'est faite correctement...*/
                                if ($modif_exec === true)
                                {
                                    echo'ligne 79';
                                        /* Démarre une session si aucune n'est déjà existante et enregistre le pseudo dans la variable de session $_SESSION['login'] qui donne au visiteur la possibilité de se connecter.  */
                                        if (!session_id()) session_start();
                                        $_SESSION['pseudo'] = $pseudo;
                                       echo'ligne 83';
                                        // A MODIFIER Remplacer le '#' par l'adresse de votre page de destination, sinon ce lien indique la page actuelle.
                                        $message = 'Votre modification est enregistrée.';
                                        //ou redirection vers une page en cas de succès ex : menu.php
                                        //header("Location: menu.php");
                                        //exit();  
                                }  
                        }
                        else
                        {   // Le pseudo est déjà utilisé
                                $message = 'Ce pseudo est déjà utilisé, changez-le.';
                        }
                }
                catch (PDOException $e)
                {
                        $message = 'Problème dans la requête de modification';
                }      
        }
        else
        {    // Au moins un des deux champs "pseudo" ou "mot de passe" n'a pas été rempli
                $message = 'Les champs Pseudo et Mot de passe doivent être remplis.';
        }
}
?>