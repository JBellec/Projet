<?php /* Enleve les droit d'admin à un utilisateur*/ 
    include '../header.php'; 
    include '../mysql.php';
    // On vérifie que l'utilisateur existe est on enlève ses droits
    $req = $connect->prepare('SELECT pseudo FROM user WHERE pseudo = ?');
    $req->execute(array($_POST['pseudo']));
    $result=$req->fetch();
    $exist=$result[0];
    $req->closeCursor();
    if(isset($exist)) {// On vérifie que l'utilisateur existe
        $req = $connect->prepare('UPDATE user SET admin=0 WHERE pseudo=:pseudo');
        $req->execute(array('pseudo' => $_POST['pseudo']));
        $req->closeCursor();
        header('Location: ../../admin.php?sec=add_admin&msg=deladmin');    
    } else { //l'utilisateur n'hexiste pas on le dit
        header('Location: ../../admin.php?sec=add_admin&msg=userdontexist');
    }
?>
