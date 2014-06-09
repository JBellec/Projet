<?php 
	include 'includes/header.php'; 
    include 'includes/navbar.php';
 ?>
		<title>QR-Ensisa</title>
	</head>  
	<body>
	
	
	
<form method="post" action="includes/profil/act_enregistrer.php" enctype="multipart/form-data">
    <label><strong>image du projet (max. 1 Mo format jpg) : </strong></label></br>
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    <input type="file" name="photos"/></br>

    <label for="description">Description of your file (max. 255 caractères) :</label><br />
    <textarea name="description" rows="10" cols="70"></textarea><br />
    <input type="submit" name="submit" value="add" />
</form>

 <?php include 'includes/footer.php' ?>

</body>
