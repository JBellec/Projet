<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   
     <link href="css/inscription.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<?php include 'includes/navbar.php'; ?>
	
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
							<label for="nom">Nom</label>
							<input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez votre nom">
						</div>
  

						<div class="form-group">
						   <label for="prenom">Prenom</label>
						   <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrez votre prenom">
						</div>
  
        
		
						<div class="form-group">
						  <label for="pass">Password</label>
						  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
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
