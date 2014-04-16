<?php include 'includes/header.php' ?>
		<title>QR-Xid</title>
	</head>
    
	<body>
		<h1>Test 1 - Affichage direct</h1>	
		
		<?php
			try {
				echo '<img src="qr/test1.php"/>';
			} 
			catch (Exception $e) {
				die('Erreur : ' . $e->getMessage());
			}

		?>
		<h1>Test 2</h1>

		<?php include 'includes/mysql.php';
	
			$reponse = $bdd->query('SELECT lien FROM item');

			echo '<h2>QR Code de la base de donnée</h2>';

			while ($fetched = $reponse->fetch()){
				try {
					echo '<img src="qr/generate.php?txt='.'http://zoski.fr/'.$fetched['lien'].'" />'; 
				}
				catch (Exception $e){
					die('Erreur : ' . $e->getMessage());
				}
			}
		?>

	</boby>

<?php include 'includes/footer.php' ?>
