<<<<<<< HEAD
<?php include 'includes/header.php'; ?>
<title>Profil</title>
<?php include 'includes/navbar.php'; ?>
=======
<?php include 'includes/header.php'; 
 include 'includes/navbar.php';
  include 'includes/mysql.php';?>

>>>>>>> 28fd536b7446ae3b9119dbf45589b46b7759cdb6

	
      <div class="container">    <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4"> <!--debut colonne 1 -->
          <img class="img-circle" src="image/img.png" alt="Generic placeholder image">
          <h2>Meeee ^_^</h2>
          <p>

          </p>
          <p><a class="btn btn-default" href="photoprofil.php" role="button">Photos &raquo;</a></p>
        </div><!-- fin colonne 1 -->
        <div class="col-lg-4"> <!-- debut colonne 2 -->
          
          <h2>Informations divers</h2>
          <p>
<<<<<<< HEAD
            <?php include 'includes/mysql.php' ;
             
             $reponse = $connect->query('SELECT * FROM user');
=======
            <?php
<<<<<<< HEAD
             
=======
              try
                  {
                        // On se connecte à MySQL
                         $bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
                    }
              catch(Exception $e)
                   {
                        // En cas d'erreur, on affiche un message et on arrête tout
                        die('Erreur : '.$e->getMessage());
                    }
>>>>>>> d1a575fe6b0fb4eb2d862db813337e96f480843f
             // On récupère tout le contenu de la table jeux_video
             $req = $connect->prepare('SELECT * FROM user Where user = ?');
             $req->execute(array($_GET['pseudo']));

>>>>>>> 28fd536b7446ae3b9119dbf45589b46b7759cdb6

             // On affiche chaque entrée une à une
             while ($donnees = $req->fetch())
                {
                    ?>
                        <p>

                        <?php echo 'je suis dans la boucle while'; ?>
                        <?php echo $donnees['nom']; ?><br />
                        <?php echo $donnees['prenom']; ?></br>
                        
                        <!--<?php echo $donnees['']; ?> -->
                         </p>
                    <?php
                }
               $req->closeCursor(); // Termine le traitement de la requête
             ?>


          </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- fin colonne 2 -->
        <div class="col-lg-4"> <!-- debut colonne 3 -->
          
          <h2>Liens utiles</h2>
          <p><a class="btn btn-default" href="http://www.facebook.com" role="button">Facebook</a></p>
		  <p><a class="btn btn-default" href="http://www.siteduzero.com" role="button">Site du Zéro</a></p>
          <p><a class="btn btn-default" href="http://www.twitter.com" role="button">Twitter</a></p>
		  
        </div><!-- fin colonne -->
      </div><!-- /.row -->
	  </div>

<?php include 'includes/footer.php' ?>