<?php
    /* Fichier appel� lors de l'inscription d'une personne */
    
    header('Content-type: text/html; charset=UTF-8');// Indique le bon format des ent�tes (par d�faut apache risque de les envoyer au standard ISO-8859-1)

    $message = null;// Initialisation de la variable du message de r�ponse

    // R�cup�ration des variables issues du formulaire par la m�thode post
    $name = filter_input(INPUT_POST, 'name');
	$type = filter_input(INPUT_POST, 'type');
    $description = filter_input(INPUT_POST, 'description');
    $cpu = filter_input(INPUT_POST, 'cpu');
    $frequence = filter_input(INPUT_POST, 'frequence');
    $ram = filter_input(INPUT_POST, 'ram');
	$hard_drive = filter_input(INPUT_POST, 'hard_drive');
	$gpu = filter_input(INPUT_POST, 'gpu');
	$lenght = filter_input(INPUT_POST, 'lenght');
	$number_port = filter_input(INPUT_POST, 'number_port');
	echo 'ligne 18';
	
if (isset($name,$description)) {
	include ('../mysql.php');
	echo 'ligne 22';  
                try
                {
                  
                                // Pour enregistrer la date actuelle (date/heure/minutes/secondes) on peut utiliser directement la fonction mysql : NOW()
                                $insertion = "INSERT INTO object(name,type, description,  lenght, number_port, cpu, frequence, ram, hard_drive, gpu) VALUES(:name, :type, :description, :lenght, :number_port, :cpu, :frequence, :ram, :hard_drive, :gpu)";
                               
                                // pr�paration de l'insertion
                                $insert_prep = $connect->prepare($insertion);
                               
                                // Ex�cution de la requ�te en passant les marqueurs et leur variables associ�es dans un tableau
                                $inser_exec = $insert_prep->execute(array(':name'=>$name, ':type'=>$type,':description'=>$description, ':lenght'=>$lenght, ':number_port'=>$number_port, ':cpu'=>$cpu,':frequence'=>$frequence, ':ram'=>$ram, ':hard_drive'=>$hard_drive, ':gpu'=>$gpu));
                               echo 'ligne 34';
                                /* Si l'insertion s'est faite correctement...*/
                                if ($inser_exec == true)
                                {
										echo'ligne38';
                                       
                                        // A MODIFIER Remplacer le '#' par l'adresse de votre page de destination, sinon ce lien indique la page actuelle.
                                        $message = 'Object added.';
                                        //ou redirection vers une page en cas de succ�s ex : menu.php
                                        header("Location: ../object.php");
                                        //exit();  
                                 
								}
                }
                catch (PDOException $e)
                {
                        $message = 'Probl�me dans la requ�te d\'insertion';
                }      
        }
        else
        {    // Au moins un des deux champs "pseudo" ou "mot de passe" n'a pas �t� rempli
                $message = 'Les champs Name et Description doivent �tre remplis.';
        }

?>
