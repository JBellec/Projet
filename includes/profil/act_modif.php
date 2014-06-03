<?php
  $modif = $_GET['modif'];
  switch ($modif) {
      case "name" :
            /* Fichier appelé lors de l'inscription d'une personne */
    echo 'ligne 6';
            header('Content-type: text/html; charset=UTF-8');// Indique le bon format des entêtes (par défaut apache risque de les envoyer au standard ISO-8859-1)

            $message = null;// Initialisation de la variable du message de réponse
  
               // Récupération des variables issues du formulaire par la méthode post
               $name = filter_input(INPUT_POST, 'name');
               $pseudoactuel = filter_input(INPUT_POST, 'pseudoactuel');

                                   // Si $pseudo et $pass différents de null
                                        if(isset($pseudoactuel,$name)) {
                                           
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
                                               include ('../mysql.php');
                                                  echo 'ligne 34';    
                                               
                                                // Requête pour compter le nombre d'enregistrements répondant à la clause : champ du pseudo de la table = pseudo posté dans le formulaire
                                                $requete = "SELECT count(*) FROM user WHERE pseudo = ?";
                                               
                                                try
                                                {
                                                    
                                                	 // préparation de la requête
                                                        $req_prep = $connect->prepare($requete);
                                                       
                                                        // Exécution de la requête en passant la position du marqueur et sa variable associée dans un tableau
                                                        $req_prep->execute(array(0=>$pseudoactuel));
                                                       
                                                        // Récupération du résultat
                                                        $resultat = $req_prep->fetchColumn();
                                                       
                                                        //if ($resultat == 0)
                                                        // Résultat du comptage = 0 pour ce pseudo, on peut donc l'enregistrer
                                                        //{
                                                          
                                                                // Pour enregistrer la date actuelle (date/heure/minutes/secondes) on peut utiliser directement la fonction mysql : NOW()
                                                                $modification = "UPDATE user SET name =:nvname WHERE pseudo = :pseudoactuel";
                                                               
                                                                // préparation de la modification
                                                                $modif_prep = $connect->prepare($modification);
                                                               
                                                                // Exécution de la requête en passant les marqueurs et leur variables associées dans un tableau
                                                                $modif_exec = $modif_prep->execute(array(':nvname'=>$name,':pseudoactuel'=>$pseudoactuel));
                                                               
                                                                /* Si l'insertion s'est faite correctement...*/
                                                                if ($modif_exec === true)
                                                                {
                                                                    
                                                                        /* Démarre une session si aucune n'est déjà existante et enregistre le pseudo dans la variable de session $_SESSION['login'] qui donne au visiteur la possibilité de se connecter.  */
                                                                        if (!session_id()) session_start();
                                                                        $_SESSION['pseudoactuel'] = $pseudoactuel;
                                                                       
                                                                        // A MODIFIER Remplacer le '#' par l'adresse de votre page de destination, sinon ce lien indique la page actuelle.
                                                                        $message = 'Votre modification est enregistrée.';
                                                                        //ou redirection vers une page en cas de succès ex : menu.php
                                                                       // header("Location: ../profil.php");
                                                                        //exit();  
                                                                }  
                                                       // }
                                                       // else
                                                       // {   // Le pseudo est déjà utilisé
                                                               // $message = 'Ce pseudo est déjà utilisé, changez-le.';
                                                       // }
                                                }
                                                catch (PDOException $e)
                                                {
                                                        $message = 'Problème dans la requête de modification';
                                                }      
                                        }
                                        break;
        
case "lastname":
    
    header('Content-type: text/html; charset=UTF-8');

    $message = null;
  
    
                $lastname = filter_input(INPUT_POST, 'lastname');
                $pseudoactuel = filter_input(INPUT_POST, 'pseudoactuel');

                   // Si $pseudo et $pass différents de null
                        if(isset($pseudoactuel,$lastname)) {
                                $hostname = "localhost";
                                $database = "projet";
                                $username = "root";
                                $password = "";
                               include ('../mysql.php');
                                $requete = "SELECT count(*) FROM user WHERE pseudo = ?";
                               
                                try
                                {
                                     $req_prep = $connect->prepare($requete);
                                        $req_prep->execute(array(0=>$pseudoactuel));
                                        $resultat = $req_prep->fetchColumn();
                                        //if ($resultat == 0)
                                       // {
                                           $modification = "UPDATE user SET lastname =:nvlastname WHERE pseudo = :pseudoactuel";
                                               $modif_prep = $connect->prepare($modification);
                                               $modif_exec = $modif_prep->execute(array(':nvlastname'=>$prenom,':pseudoactuel'=>$pseudoactuel));
                                               if ($modif_exec === true)
                                                { 
                                                        if (!session_id()) session_start();
                                                        $_SESSION['pseudoactul'] = $pseudoactuel;
                                                        $message = 'Votre modification est enregistrée.';
                                                }  
                                      //  }
                                       // else
                                       // { 
                                             //   $message = 'Ce pseudo est déjà utilisé, changez-le.';
                                       // }
                                }
                                catch (PDOException $e)
                                {
                                        $message = 'Problème dans la requête de modification';
                                }      
                        }
        break;
    }
        
?>