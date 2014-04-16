<?php include 'includes/header.php' ?>
	<title>QR-Xid</title>
	
    </head>
    
	<body>
		<h1>Test 1 - Affichage</h1>	
<?php
	try 
	{
		echo '<img src="qr/test1.php"/>';
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}


		echo '<h1>Test 2 - To file</h1>	';

	include 'includes/mysql.php';
	
		$reponse = $bdd->query('SELECT lien FROM item');

		echo '<h2>QR Code de la base de donnée</h2>';

		while ($donnees = $reponse->fetch()){
			try 
			{
				 echo '<img src="generate.php?id='.$donnees['lien'].'" />'; 
			}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}

			
		}
?>

	</boby>

<?php include 'includes/footer.php' ?>
