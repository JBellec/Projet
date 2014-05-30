<?php include 'includes/header.php'; 
 include 'includes/navbar.php';
  include 'includes/mysql.php';?>


	<title>Profil</title>
 </head> 	
    <body>
          <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4"> <!--debut colonne 1 -->
          <img class="img-circle" src="image/img.png" alt="Generic placeholder image">
          <h2>Meeee ^_^</h2>
          <p>

          </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- fin colonne 1 -->
        <div class="col-lg-4"> <!-- debut colonne 2 -->
          
          <h2>Informations divers</h2>
          <p>
            <?php
             
             // On récupère tout le contenu de la table jeux_video
             $req = $connect->prepare('SELECT * FROM user Where user = ?');
             $req->execute(array($_GET['pseudo']));


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
          <p> <h5> Lien facebook :<h5> <a href="http://www.siteduzero.com">Site du Zéro</a></p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- fin colonne -->
      </div><!-- /.row -->
	 
	</body>

<?php include 'includes/footer.php' ?>