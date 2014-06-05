<?php include '../header.php'; 
    include '../mysql.php';
    
    //Pas de temps pour faire des vérifications
    $req = $connect->prepare('UPDATE object SET borrowed=0 WHERE id = :id');
    $req->execute(array('id'=>$_GET['id']));
    $req->closeCursor();
    //On enlève l'association utilisateur objet de la table borrowed 
    $req = $connect->prepare('DELETE borrowed WHERE id = :id');
    $req->execute(array('id'=>$_GET['id']));
    $req->closeCursor();
    header('location: ../../object.php?id='.$_GET['id']);
    
?>
