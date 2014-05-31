<?php /* Ajout une nouvelle cathégorie dans la table preset */ 
    include '../header.php'; 
    include '../mysql.php';
    // On vérifie que la cathégorie n'existe pas deja
    $req = $connect->prepare('SELECT id FROM preset WHERE name = ?');
    $req->execute(array($_POST['name']));
    $result=$req->fetch();
    $exist=$result[0];
    $req->closeCursor();
    if(isset($exist)) {// On vérifie que la cathégorie n'existe pas deja
       header('Location: ../../admin.php?sec=preset&msg=exist');
    } else { //On ajoute la nouvelle catégorie à l'aide d'une requette préparé
        //préparation des variables
        if(isset($_POST['lenght'])) { $lenght = 1;} else { $lenght = 0; }
        if(isset($_POST['number_port'])) { $number_port = 1; } else { $number_port = 0; }
        if(isset($_POST['cpu'])) { $cpu = 1; } else { $cpu = 0; }
        if(isset($_POST['frequence'])) { $frequence = 1; } else { $frequence = 0; }
        if(isset($_POST['ram'])) { $ram = 1; } else { $ram = 0; }
        if(isset($_POST['hard_drive'])) { $hard_drive = 1; } else { $hard_drive = 0; }
        if(isset($_POST['gpu'])) { $gpu = 1; } else { $gpu = 0; }
           
        //requete
        $req = $connect->prepare('INSERT INTO preset(id, name, description, lenght, number_port, cpu, frequence, ram, hard_drive, gpu) 
                                        VALUES(:id, :name, :description, :lenght, :number_port, :cpu, :frequence, :ram, :hard_drive, :gpu)');
        $req->execute(array(
            'id' => '',
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'lenght' => $lenght,
            'number_port' => $number_port,
            'cpu' => $cpu,
            'frequence' => $frequence,
            'ram' => $ram,
            'hard_drive' => $hard_drive,
            'gpu' => $gpu            
        ));
        $req->closeCursor();
        echo 'Cathégorie bien ajouté';
        header('Location: ../../admin.php?sec=preset&msg=ok');
    }
?>
