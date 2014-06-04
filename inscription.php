<?php include 'includes/header.php';
    include 'includes/navbar.php'; ?>
	
	<div class="jumbotron">
                <h1>Our fun project!</h1>
                <p class="lead">
					<form method="post" action="includes/act_inscription.php">
						<div class="form-group">
							<label for="email">Enter email</label>
							<input type="email" class="form-control"  name="email" id ="email" placeholder="Enter email">
						</div>

						<div class="form-group">
						<label for="pseudo">Pseudo</label>
						<input type="text" class="form-control" name="pseudo"  id="pseudo" placeholder="Entrez votre pseudo">
						</div>
		
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
						</div>
  

						<div class="form-group">
						   <label for="lastname">Lastname</label>
						   <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter your lastname">
						</div>
  
        
		
						<div class="form-group">
						  <label for="pass">Password</label>
						  <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
						 </div>
						 
						 <div class="form-group">
						  <label for="pass">Confirm Password</label>
						  <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Password">
						 </div>
        

						</br>
  
					   <div>
						  <input type="submit" class="btn btn-success"></input>
					  </div>

					</form></p>
               
    </div><!-- Fin Jumbotron -->
</body>
</html>
