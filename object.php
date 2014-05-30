<?php include 'includes/header.php'; 
    include 'includes/mysql.php';
    
    $req = $connect->prepare('SELECT name FROM object WHERE id = ?');
    $req->execute(array($_GET['id'])); 
    $result=$req->fetch();
    $object_name = $result[0];
	$req->closeCursor();
    ?>
<title>Object - <?php echo "$object_name" ?></title>
<?php include 'includes/navbar.php'; ?>
<div class="container">
    <?php 
        if(isset($_GET['qr'])) { /* Pour un accès par qr Code */
            if(isset($_SESSION['pseudo'])){
                include 'includes/object/borrow.php'; //si on est connecté on peu emprunter
            }
            else {  //sinon il est nécessaire de se connecter
                include "include/object/login.php";
            }
        } else {/* On fait un accès direct depuis l'administration par exe */
        
            include 'includes/object/description.php';
                if(isset($_SESSION['pseudo'])){
                    include 'includes/object/borrow.php';//on affiche de quoi emprunter l'objet
                }
                else {
                    echo 'You should login to borrow this item'; // on doit se connecter
                }
            }    
    ?>  
</div> <!-- /container -->
    <?php include 'includes/footer.php'; ?>
