<?php 
	include 'includes/header.php'; 
    include 'includes/navbar.php';
 ?>
		<title>QR-Ensisa</title>
	</head>  
	<body>
	
	
	
	<form method="post" action="act_enregistrer.php" enctype="multipart/form-data">
	
     <label for="icone">Image (JPG, PNG ou GIF | max. 15 Ko) :</label><br />
     <input type="file" name="icone" id="icone" /><br />
     
     <label for="description">Description of your file (max. 255 caractères) :</label><br />
     <textarea name="description" id="description"></textarea><br />
     <input type="submit" name="submit" value="Envoyer" />
</form>

 <?php include 'includes/footer.php' ?>

</body>