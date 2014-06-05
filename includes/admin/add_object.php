<h2 class="sub-header">Add an object</h2>
<?php
    $req = $connect->prepare('SELECT * FROM preset WHERE name = ?');
    $req->execute(array($_GET['preset'])); 
   // $result=$req->fetch();
    //$object_name = $result['name'];
	
?>

<div class="container">
	
		<?php 
			if(isset($_GET['qr'])) { /* Pour un accès par qr Code */
				if(isset($_SESSION['pseudo'])){
					if($_GET['preset']==PC){
						//$req2 = $connect->prepare('SELECT * from preset WHERE name= ?');
						//$req2->execute(array($_GET['preset']));

							while($result=$req->fetch()){
		?>
							<p><?php echo $result['name'];?></p>
							<p><?php echo $result['description'];?></p>
							<p><?php echo $result['cpu'];?></p>
							<p><?php echo $result['frequence'];?></p>
							<p><?php echo $result['ram'];?></p>
							<p><?php echo $result['hard_drive'];?></p>
							<p><?php echo $result['gpu'];?></p>
							
					<?php	
						}

					}
				
					
				} else {  //sinon il est nécessaire de se connecter
					include "include/object/login.php";
				}
			} else {/* On fait un accès direct depuis l'administration par exe */
				if(isset($_SESSION['pseudo'])){
							if($_GET['preset']=='PC'){
						//$req2 = $connect->prepare('SELECT * from preset WHERE name= ?');
						//$req2->execute(array($_GET['preset']));

							while($result=$req->fetch()){
		?>
							<p><?php echo $result['name'];?></p>
							<p><?php echo $result['description'];?></p>
							<p><?php echo $result['cpu'];?></p>
							<p><?php echo $result['frequence'];?></p>
							<p><?php echo $result['ram'];?></p>
							<p><?php echo $result['hard_drive'];?></p>
							<p><?php echo $result['gpu'];?></p>
							
					<?php	
						}

					}
						
						//include 'includes/object/borrow.php';//on affiche de quoi emprunter l'objet
				 } else {
						echo 'You should login to borrow this item'; // on doit se connecter
					}
				}    
		?> 
		
</div> <!-- /container -->

