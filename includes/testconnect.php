<?php 
    if (!isset($_SESSION['pseudo'])){
    	<?php include ('connexion.php'); ?>
    }else {
         if($_SESSION['pseudo']== $_GET['pseudo']){
         <?php include (''); ?>
     }else {
     	<?php include (''); ?>
     }


}