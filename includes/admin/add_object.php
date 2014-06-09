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

					?>
							<p class="lead">
								<form method="post" action="includes/admin/act_add_object.php">
									<div class="form-group">
										<label>Name</label>
										<input type="text" name ="name">
									</div>
									
									<div class="form-group">
										<label>Type</label>
										<input type="text" name ="type">
									</div>
									<div class="form-group">
										<label>Description</label>
										<input type="text" name ="description">
									</div>
									<div class="form-group">
										<label>CPU</label>
										<input type="text" name="cpu">
									</div>
									<div class="form-group">
										<label>Frequency</label>
										<input type="text" name="frequence">
									</div>
									<div class="form-group">
										<label>RAM</label>
										<input type="text" name="ram">
									</div>
									<div class="form-group">
										<label>Hard drive</label>
										<input type="text" name="hard_drive">
									</div>
									<div class="form-group">
										<label>GPU</label>
										<input type="text" name="gpu">
									</div>
									<div class="form-group">
										<input type="submit" value="Add">
									</div>
								</form>
							</p>
		<?php
						}

					}
						

				  else {
						echo 'You should login to borrow this item'; // on doit se connecter
					}
				}    
		?> 
		
</div> <!-- /container -->

