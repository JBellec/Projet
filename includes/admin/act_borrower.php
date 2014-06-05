<?php include '../header.php'; 
    include '../mysql.php';
    // On vérifie que l'object n'est pas deja emprunté au cas où
    $req = $connect->prepare('SELECT borrowed FROM object WHERE id = ?');
    $req->execute(array($_GET['id']));
    echo $_GET['id'];
    $result=$req->fetch();
    $isborrowed = $result[0];
	$req->closeCursor();
    if($isborrowed!=1) {
        echo "L'objet n'est pas emprunté...";
        // On modifie l'état de l'object
         $req = $connect->prepare('UPDATE object SET borrowed = 1 WHERE id = :id');
         $req->execute(array('id'=>$_GET['id']));
         echo "L'état de l'objet est passé à emprunté...";
         
        // On ajoute une entrée à la table borrow
        $req = $connect->prepare('INSERT INTO borrowed(id, object_id, pseudo) VALUES(:id, :object_id,:pseudo)');
        $req->execute(array(
        'id' => '',
        'object_id' => $_GET['id'],
        'pseudo' => $_SESSION['pseudo']
        ));
        echo "L'utilisateur à emprunter l'objet";
        header('location: ../../object.php?id='.$_GET['id']);
    } else { //Ya eu un emprunt l'instant d'avant
        header('location: ../../index.php');
    }
?>
