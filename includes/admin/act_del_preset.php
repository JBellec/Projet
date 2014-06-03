<?php /* Destruction d'une cathégorie dans la table preset */ 
    include '../header.php'; 
    include '../mysql.php';
    // On vérifie que la cathégorie existe est on la détruit
    $req = $connect->prepare('SELECT id FROM preset WHERE name = ?');
    $req->execute(array($_POST['name']));
    $result=$req->fetch();
    $exist=$result[0];
    $req->closeCursor();
    if(isset($exist)) {// On vérifie que la cathégorie existe
        $req = $connect->prepare('DELETE FROM preset WHERE name=:name');
        $req->execute(array('name' => $_POST['name']));
        $req->closeCursor();
        header('Location: ../../admin.php?sec=preset&msg=deleted');    
    } else { //la cathégorie n'hexiste pas on le dit
        header('Location: ../../admin.php?sec=preset&msg=delerror');
    }
?>
