<?php include 'includes/header.php'; ?>
<title>QR-Ensisa</title>
<?php include 'includes/navbar.php'; ?> 
<div class="container">
    <div class="jumbotron">
        <h1>Our fun project!</h1>
        <p class="lead">Hi everybody and welcome on our wesite :) . Yes your in the right one ! Here you can scan a QR Code in order to find  your classmate, being his friend, and else. You can also borrow stuff from XID so easily !</p>
    </div><!-- Fin Jumbotron -->

    <div class="row"> <!-- Début du vecteur -->
        <div class="col-lg-4"><!-- 1er colonne -->
            <h2>XID QRcode</h2>
            <p>Would you borrow XID's objects ? Or check if the item you want is available in the XID ? </br> Our project is to make your work easier, it is based QRcode (yes too much fun).
            Indeed, scanning the QRCode of the requested object can add the product, click on OKeeyyy and it's done! : D</p>
        </div><!-- fin 1er colonne -->
		
        <div class="col-lg-4"><!-- 2em colonne -->
            <h2>Profil Access</h2>
            <p>You met a classmate and you want to take the contact information faster? Or visit his profile and see his photos (chouette)? </br> Scan the QRcode and let you guide!</p>
        </div><!-- fin 2em colonne -->

        <div class="col-lg-4"><!-- 3em colonne -->
		
        	<?php
			if(!isset($_SESSION['pseudo'])){
			include ("includes/connexion.php");
			}
			?>
			<?php
			if(isset($_SESSION['pseudo'])){
			?>
			<p><h2>You are connected !!</h2>
			<img class="img-responsive" src="image/minion.jpg" alt="Une image d'un Minion">
			</p>
			<?php
			}
			?>
        </div><!-- fin 3em colonne -->
    </div><!-- fin du vecteur -->       
</div> <!-- /container -->
<?php include 'includes/footer.php' ?>
