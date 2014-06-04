<?php include 'includes/header.php'; 
 include 'includes/navbar.php'; ?>


						<?php 
						    if (!isset($_SESSION['pseudo'])){
						    	<?php include ('connexion.php'); ?> <!-- inclure la page de profil perso -->
						    }else {
						         if($_SESSION['pseudo']== $_GET['pseudo']){
						         <?php include ('../../profil.php'); ?> <!-- inclure la page privé -->
						     }else {
						     	<?php include ('../../profil.php'); ?> <!-- inclure la page public -->
						           }
						  ?>
<?php include 'includes/footer.php' ?>