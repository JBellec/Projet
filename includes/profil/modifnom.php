<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/projet.css" rel="stylesheet">
        <link  href="css/image.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="lib/font-awesome-4.1.0/css/font-awesome.min.css">
    
  
  <div class="jumbotron">
                <h1>Vos modification par là!</h1>
                <p class="lead">
          <form method="post" action="act_modifnom.php">
            <div class="form-group">
              <label for="pseudoactuel">Enter votre pseudo actuel</label>
              <input type="pseudoactuel" class="form-control"  name="pseudoactuel" id ="pseudoactuel" placeholder="Enter pseudo">
            </div>

            <div class="form-group">
              <label for="nom">NVNom</label>
              <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez votre nom">
            </div>
  
            </br>
  
             <div>
              <input type="submit" class="btn btn-success">modifier</input>
            </div>

          </form></p>
               
    </div><!-- Fin Jumbotron -->
</body>
</html>