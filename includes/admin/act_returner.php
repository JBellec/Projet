<?php include '../header.php'; 
    include '../mysql.php';
    
    //Pas de temps pour faire des vérifications
    $req = $connect->prepare('UPDATE object SET borrowed=0 WHERE id=:id');
    $req->execute(array('id'=>$_GET['id']));
    $req->closeCursor();
    //On enlève l'association utilisateur objet de la table borrowed 
    $req2 = $connect->prepare('DELETE FROM borrowed WHERE object_id=:id');
    $req2->execute(array('id'=>$_GET['id']));
    $req2->closeCursor();
    header('location: ../../object.php?id='.$_GET['id']);
?>
