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
   
     <link href="css/projet.css" rel="stylesheet">
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

  <div id="global">
	<div id="entete"><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="Inscription.html">Inscription</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
</div>

	<div id="centre">

		<div id="navigation"><ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="Inscription.html">Inscription</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul></div>
		<div id="contenu"><div class="entête">  

    
    <form name="inscritpion" method="post" action="InscritpiontestPHP.php" role="form">
       <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>

        <div class="form-group">
          <label for="pass">Password</label>
          <input type="password" class="form-control" id="pass" placeholder="Password">
         </div>

        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
         </div>
  
       </br>

        <div class="form-group">
           <label for="prenom">Prenom</label>
           <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prenom">
        </div>
  
        </br>
  
        <div class="form-group">
          <label for="pseudo">Pseudo</label>
          <input type="text" class="form-control" id="pseudo" placeholder="Entrez votre pseudo">
       </div>

       </br>
  
       <div
          <button type="submit" class="btn btn-success">Valider</button>
      </div>

    </form>
   </div>
	 </div>
  </div>
</body>
</html>