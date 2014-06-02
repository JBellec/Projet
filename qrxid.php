<?php include 'includes/header.php' ?>
<title>QR-Xid</title>
<?php include 'includes/navbar.php';
    include 'lib/phpqrcode/qrlib.php';
    include 'includes/mysql.php';
    $objects = $connect->query('SELECT * FROM object');
    $i=0;?>
<div class="container">
    <div class="row">
        <h1>Our Stuff ;-)</h1>
        <?php 
            while ($fetched = $objects->fetch()){
            echo '<div class="col-md-1">';
            echo '<img src="qr/generate.php?txt='.'object.php?id='.$fetched['id'].'" class="img-responsive"  />';
            echo  htmlspecialchars($fetched['name']);
            echo '</div>';
            $i =($i+1)%12;
            if($i==12) {
        echo  '</div>' ;
        echo  '<div class="row">';
            }
        }
        ?>
    </div>
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
	
			$reponse = $connect->query('SELECT * FROM user');

			echo '<h2>QR Code de la base de donnée</h2>';

			while ($fetched = $reponse->fetch()){
				try {
					echo '<img src="qr/generate.php?txt='.'http://zoski.fr/'.$fetched['id'].'" />'.$fetched['prenom'];
				
				}
				catch (Exception $e){
					die('Erreur : ' . $e->getMessage());
				}
			}
		?>
		
		<h1>Test 3</h1>
		<h2>Sauvegarder un QR Code</h2>
		<?php
			QRcode::png('some othertext 1234', 'test3.png');
		?>
</div>
<?php include 'includes/footer.php' ?>
