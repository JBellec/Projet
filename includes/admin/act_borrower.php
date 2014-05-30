<?php include 'includes/header.php'; ?>
</head>
<?php include 'includes/mysql.php';
    $id = $_GET['id']
    // On vérifie que l'object n'est pas deja emprunté au cas où
    $req = $connect->query('SELECT borrowed FROM object WHERE id = 
    //   



?>
