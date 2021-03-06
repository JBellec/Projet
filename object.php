<?php include 'includes/header.php'; 
    include 'includes/mysql.php';
    
    $req = $connect->prepare('SELECT * FROM object WHERE id = ?');
    $req->execute(array($_GET['id'])); 
    $result=$req->fetch();
    $object_name = $result['name'];
	$req->closeCursor();
    ?>
<title>Object - <?php echo $object_name?></title>
<?php include 'includes/navbar.php'; ?>
<div class="container">
	<div class="col-md-6">
		<?php 
			if(isset($_GET['qr'])) { /* Pour un accès par qr Code */
				if(isset($_SESSION['pseudo'])){
					include 'includes/object/description.php';
					
					if($result['borrowed']==0) { // si l'objet n'est pas emprunté le bouton s'affiche ?>
						<form method="post" action="includes/admin/act_borrower.php?id=<?php echo $_GET['id'] ?>">
							<?php echo '<input type="submit" value="Borrow" class="btn btn-primary btn-medium" />'; 
						echo '</form>';
					//si on est connecté on peu emprunter
					} else {
						echo "Objet déjà emprunté";
					}
				} else {  //sinon il est nécessaire de se connecter
					include "include/object/login.php";
				}
			} else {/* On fait un accès direct depuis l'administration par exe */
				if(isset($_SESSION['pseudo'])){
						include 'includes/object/description.php';
					   
						if($result['borrowed']==0){ // si l'objet n'est pas emprunté le bouton s'affiche?>
							<form method="post" action="includes/admin/act_borrower.php?id=<?php echo $_GET['id'] ?>">
								<input type="submit" value="Borrow" class="btn btn-info btn-lg" />
							</form><?php //si on est connecté on peu emprunter
						} else{
						    include 'includes/object/status.php';
						}
						
						//include 'includes/object/borrow.php';//on affiche de quoi emprunter l'objet
				 } else {
						echo 'You should login to borrow this item'; // on doit se connecter
					}
				}    
		?> 
	</div>
	
	<div class="col-md-6">
	    <?php echo '<a href="'.$URL.'object.php?id='.$_GET['id'].'"><img src="qr/generate.php?txt='.$URL.'object.php?id='.$_GET['id'].'" class="img-responsive"/></a>'; ?>
	</div>	
</div> <!-- /container -->
    <?php include 'includes/footer.php'; ?>
