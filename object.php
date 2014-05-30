<?php include 'includes/header.php';
    include 'includes/navbar.php'; 
    include 'includes/mysql.php';
    
    /* On va effectuer une requette préparé pour récupérer les différentes informations de l'objet */
    $req = $connect->query("SELECT * FROM object WHERE id = ?");
    $req->execute(array($_GET['id']));
    ?>
        <title>Object - </title>
   
   <body>
            
    
    
        </div> <!-- /container -->
   </body>
    <?php include 'includes/footer.php?>
