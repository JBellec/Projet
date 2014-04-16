<?php include 'includes/header.php' ?>
<?php include 'includes/mysql.php' ?>
<?php include 'lib/phpqrcode/qrlib.php' ?>

	<title>QR-Xid</title>
	
    </head>
    
	<body>
		<h1>Exemple de QR Code</h1>
		
		
<?php
try 
{
		  echo '<img src="qr/test.php"/>';
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
?>

	</boby>

<?php include 'includes/footer.php' ?>
