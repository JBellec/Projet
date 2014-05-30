<?php include 'includes/header.php'; 
    include 'includes/mysql.php';
    echo $_GET['id'];
    /* On va effectuer une requette préparé pour récupérer les différentes informations de l'objet */
    $req = $connect->query('SELECT name FROM object WHERE id = ?');
    $req->execute(array($_GET['id'])) or die(print_r($connect->errorInfo()));; 
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
        }
    
    
    
        include 'includes/object/description.php';
            if(isset($_SESSION['pseudo'])){
                include 'includes/object/borrow.php';
            }
            else {
                echo 'You should login to borrow this item';
            }      
    ?>  
</div> <!-- /container -->
    <?php include 'includes/footer.php'; ?>
