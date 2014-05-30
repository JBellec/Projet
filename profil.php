
<?php include 'includes/header.php'; 
 include 'includes/navbar.php';
  include 'includes/mysql.php'; ?>

	
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

            <?php 
             
             $reponse = $connect->query('SELECT * FROM user');

            
             // On récupère tout le contenu de la table user
             $req = $connect->prepare('SELECT * FROM user Where pseudo = ?');
             $req->execute(array($_GET['pseudo']));
             // On affiche chaque entrée une à une
             while ($donnees = $req->fetch())
                {
                    ?>
                        <p>

                        
                        <?php echo $donnees['nom']; ?><br />
                        <?php echo $donnees['prenom']; ?></br>
                        <?php echo$donnees['pseudo'];?>
                        
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