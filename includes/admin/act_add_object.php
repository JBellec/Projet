<?php /* Fichier appelé lors de l'ajout d'un objet */ 
    include '../mysql.php';
    try {
    $req = $connect->prepare('INSERT INTO object(id, name, description, type, borrowed, lenght, number_port, cpu, frequence, ram, hard_drive, gpu) VALUES(:id, :name, :description, :type, :borrowed, :lenght, :number_port, :cpu, :frequence, :ram, :hard_drive, :gpu)');
    $req->execute(
    array('id' => '',
           'name' => $_POST['name'],
           'description' => $_POST['description'],
           'type' => $_POST['type'],
           'borrowed' => '0',
           'lenght' => $_POST['lenght'],
           'number_port' => $_POST['number_port'],
           'cpu' => $_POST['cpu'],
           'frequence' => $_POST['frequence'],
           'ram' => $_POST['ram'],
           'hard_drive' => $_POST['hard_drive'],
           'gpu' => $_POST['gpu']));
    $req->closeCursor();
    echo "requette bien executé";
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    echo  $_POST['name']; echo $_POST['description']; echo $_POST['type']; echo $_POST['lenght']; echo $_POST['number_port']; echo $_POST['cpu']; echo $_POST['frequence']; echo $_POST['ram']; echo $_POST['hard_drive']; echo $_POST['gpu'];
    header('Location: ../../admin.php?sec=add_object&msg=addobject');    
?>
