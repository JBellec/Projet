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
							if($_GET['preset']=='PC'){

					?>
						<p class="lead">
							<form method="post" action="includes/admin/act_add_object.php">
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Name</label>
										<input type="text" class="form-control"  name="name" id ="name" >
									</div>
									
									<div class="form-group">
										<label for="pseudo">Description</label>
										<input type="text" class="form-control" name="description"  id="description" >
									</div>

									<div class="form-group">
										<label for="pseudo">Type</label>
										<input type="text" class="form-control" name="type"  id="type" >
									</div>
									<div class="form-group">
										<label for="lastname">CPU</label>
										<input type="text" class="form-control" name="cpu" id="cpu">
									</div>
									
								</div>
								<div class="col-md-4">
								</div>
								
								<div class="col-md-6">

									<div class="form-group">
										<label for="pass">Frequency</label>
										<input type="text" class="form-control" name="frequence" id="frequence">
									</div>
								 
									<div class="form-group">
										<label for="pass">RAM</label>
										<input type="text" class="form-control" name="ram" id="ram">
									</div>
									
									<div class="form-group">
										<label for="pass">Hard drive</label>
										<input type="text" class="form-control" name="hard_drive" id="hard_drive">
									</div>
									
									<div class="form-group">
										<label for="pass">GPU</label>
										<input type="text" class="form-control" name="gpu" id="gpu">
									</div>
								</div>
								
								
								<div class="col-md-1">
									<input type="submit" class="btn btn-success"></input>
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

				if(isset($_SESSION['pseudo'])){
							if($_GET['preset']=='cable_ethernet'){

					?>
						<p class="lead">
							<form method="post" action="includes/admin/act_add_object.php">
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Name</label>
										<input type="text" class="form-control"  name="name" id ="name" >
									</div>
									
									<div class="form-group">
										<label for="pseudo">Description</label>
										<input type="text" class="form-control" name="description"  id="description" >
									</div>

									<div class="form-group">
										<label for="pseudo">Type</label>
										<input type="text" class="form-control" name="type"  id="type" >
									</div>
									
									<input type="submit" class="btn btn-success"></input>
								
							</form>
						</p>
		<?php
						}

					}
						

				  else {
						echo 'You should login to borrow this item'; // on doit se connecter
					}
								
		?> 
		<?php
						if(isset($_SESSION['pseudo'])){
							if($_GET['preset']=='switch'){

		?>
						<p class="lead">
							<form method="post" action="includes/admin/act_add_object.php">
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Name</label>
										<input type="text" class="form-control"  name="name" id ="name" >
									</div>
									
									<div class="form-group">
										<label for="pseudo">Description</label>
										<input type="text" class="form-control" name="description"  id="description" >
									</div>

									<div class="form-group">
										<label for="pseudo">Type</label>
										<input type="text" class="form-control" name="type"  id="type" >
									</div>
									
									<div class="form-group">
										<label for="pseudo">Number of port</label>
										<input type="text" class="form-control" name="number_port"  id="number_port" >
									</div>
									
									<input type="submit" class="btn btn-success"></input>
									
								</div>
								

							</form>
						</p>
						<?php
						}

					}
						

				  else {
						echo 'You should login to borrow this item'; // on doit se connecter
					}
					?>
							
					<?php	

				if(isset($_SESSION['pseudo'])){
							if($_GET['preset']=='PC'){

					?>
						<p class="lead">
							<form method="post" action="includes/admin/act_add_object.php">
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Name</label>
										<input type="text" class="form-control"  name="name" id ="name" >
									</div>
									
									<div class="form-group">
										<label for="pseudo">Description</label>
										<input type="text" class="form-control" name="description"  id="description" >
									</div>

									<div class="form-group">
										<label for="pseudo">Type</label>
										<input type="text" class="form-control" name="type"  id="type" >
									</div>
									<div class="form-group">
										<label for="lastname">CPU</label>
										<input type="text" class="form-control" name="cpu" id="cpu">
									</div>
									
								</div>
								<div class="col-md-4">
								</div>
								
								<div class="col-md-6">

									<div class="form-group">
										<label for="pass">Frequency</label>
										<input type="text" class="form-control" name="frequence" id="frequence">
									</div>
								 
									<div class="form-group">
										<label for="pass">RAM</label>
										<input type="text" class="form-control" name="ram" id="ram">
									</div>
									
									<div class="form-group">
										<label for="pass">Hard drive</label>
										<input type="text" class="form-control" name="hard_drive" id="hard_drive">
									</div>
									
									<div class="form-group">
										<label for="pass">GPU</label>
										<input type="text" class="form-control" name="gpu" id="gpu">
									</div>
								</div>
								
								
								<div class="col-md-1">
									<input type="submit" class="btn btn-success"></input>
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

				if(isset($_SESSION['pseudo'])){
							if($_GET['preset']=='cable_ethernet'){

					?>
						<p class="lead">
							<form method="post" action="includes/admin/act_add_object.php">
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Name</label>
										<input type="text" class="form-control"  name="name" id ="name" >
									</div>
									
									<div class="form-group">
										<label for="pseudo">Description</label>
										<input type="text" class="form-control" name="description"  id="description" >
									</div>

									<div class="form-group">
										<label for="pseudo">Type</label>
										<input type="text" class="form-control" name="type"  id="type" >
									</div>
									
									<input type="submit" class="btn btn-success"></input>
								
							</form>
						</p>
		<?php
						}

					}
						

				  else {
						echo 'You should login to borrow this item'; // on doit se connecter
					}
								
		?> 
		<?php
						if(isset($_SESSION['pseudo'])){
							if($_GET['preset']=='switch'){

		?>
						<p class="lead">
							<form method="post" action="includes/admin/act_add_object.php">
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Name</label>
										<input type="text" class="form-control"  name="name" id ="name" >
									</div>
									
									<div class="form-group">
										<label for="pseudo">Description</label>
										<input type="text" class="form-control" name="description"  id="description" >
									</div>

									<div class="form-group">
										<label for="pseudo">Type</label>
										<input type="text" class="form-control" name="type"  id="type" >
									</div>
									
									<div class="form-group">
										<label for="pseudo">Number of port</label>
										<input type="text" class="form-control" name="number_port"  id="number_port" >
									</div>
									
									<input type="submit" class="btn btn-success"></input>
									
								</div>
								

							</form>
						</p>
						<?php
						}

					}
						

				  else {
						echo 'You should login to borrow this item'; // on doit se connecter
					}
					?>
		
</div> <!-- /container -->

