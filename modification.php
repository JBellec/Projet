<?php include 'includes/header.php';
    include 'includes/navbar.php'; ?>
  
  <div class="jumbotron">
                <h1>Vos modification par là!</h1>
                <p class="lead">
          <form method="post" action="includes/profil/act_modification.php">
            <div class="form-group">
              <label for="pseudoactuel">Enter votre pseudo actuel</label>
              <input type="pseudoactuel" class="form-control"  name="pseudoactuel" id ="pseudoactuel" placeholder="Enter pseudo">
            </div>

            <div class="form-group">
            <label for="pseudo">NVPseudo</label>
            <input type="text" class="form-control" name="pseudo"  id="pseudo" placeholder="Entrez votre pseudo">
            </div>
    
            <div class="form-group">
              <label for="nom">NVNom</label>
              <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez votre nom">
            </div>
  

            <div class="form-group">
               <label for="prenom">NVPrenom</label>
               <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrez votre prenom">
            </div>
  
        
    
            <div class="form-group">
              <label for="pass">NVPassword</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
             </div>
             
             <!--<div class="form-group">
              <label for="pass">Confirm Password</label>
              <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Password">
             </div>-->
        

            </br>
  
             <div>
              <input type="submit" class="btn btn-success">modifier</input>
            </div>

          </form></p>
               
    </div><!-- Fin Jumbotron -->
</body>
</html>