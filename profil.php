
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
          <p><a class="btn btn-primary" href="photoprofil.php" role="button">Photos &raquo;</a></p>
        </div><!-- fin colonne 1 -->
        <div class="col-lg-4"> <!-- debut colonne 2 -->
          
          <h2>Informations divers</h2>
		  </br>
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

                            <ul> 
                               <li><strong>My last name is : </strong><?php echo $donnees['name']; ?></li><br />
                               <li><strong> have a super first name:</strong> <?php echo $donnees['lastname']; ?></li></br>
                               <li><strong>You can call me : </strong><?php echo $donnees['pseudo'];?></br>
        					             <li><strong>To contact me:</strong> </br>
					                  <ul>
              					       <li>You can send me an e-mail:</strong><?php echo $donnees['email'];?></li></br>
              					       <li>Or phone me at : </strong><?php echo $donnees['phone'];?></li><br/>
						                </ul>
                    					   <li><strong>I live in : </strong><?php echo $donnees['adress'];?></li><br/>
                    					   <li><strong>You can see my beautiful pictures &raquo; <?php echo $donnees ['photos'];?></li></br>
                    					   <li><strong>I study :</strong> <?php echo $donnees ['network'];?></li>
					 
					                  </ul>
					   
                         </p></br>
								<?php if($_SESSION['pseudo']== $_GET['pseudo']){
								?>
						          <p><a class="btn btn-primary" href="modif.php" role="button">Modification &raquo;</a></p>
								<?php }
								?>
                    <?php
                }
               $req->closeCursor(); // Termine le traitement de la requête
             ?>


          </p>
          
        </div><!-- fin colonne 2 -->
        <div class="col-lg-4"> <!-- debut colonne 3 -->
          
          <h2>Liens utiles</h2>
		      </br>
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
              			                         <ul> 
              		                                <li> My facebook count : <?php echo $donnees['lienf'];?></li> </br>
                                                  <li> I have a Twitter count too : <?php echo $donnees['lient']; ?></li><br />
                                     
              					                     </ul>
              				
              			 <?php
                              }
                             $req->closeCursor(); // Termine le traitement de la requête
                      ?>
			                               </p>
                 <!-- <div class="img_QRcode">
                    <p> <?php echo '<img src=“qr/generate.php?txt='.$URL.'/profil.php?pseudo=<?php echo $_SESSION[\'pseudo\'];?>'?></p>
                  </div>-->
                  
		  
        </div><!-- fin colonne -->
      </div><!-- /.row -->
	  </div>

<?php include 'includes/footer.php' ?>