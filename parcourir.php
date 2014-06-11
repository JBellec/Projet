<?php 
	include 'includes/header.php'; 
    include 'includes/navbar.php';
 ?>
		<title>QR-Ensisa</title>
	</head>  
	<body>
	
	
	
<form method="post" action="includes/profil/act_enregistrer.php" enctype="multipart/form-data">
     <fieldset>
					<legend><h2>ajout d'un projet : </h2></legend>
					<label><strong>enter your pseudo</strong></label></br>
					<input type="text" size="16" name="pseudoactuel"/></br>
					<label><strong>titre</strong></label></br>
					<input type="text" size="16" name="titre"/></br>
					<label><strong>image du projet (max. 1 Mo format jpg) : </strong></label></br>
					<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
					<input type="file" name="image"/></br>
					<label><strong>description du projet : </strong></label></br>
					<textarea name="description" rows="10" cols="70"></textarea></br>
					<input type="submit" value="ajouter"/></br></br>
			</fieldset>
    
</form>

 <?php include 'includes/footer.php' ?>

</body>
