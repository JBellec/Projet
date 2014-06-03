<?php include 'includes/header.php';
    include 'includes/navbar.php'; ?>
  
  <div class="jumbotron">
                <h3>Vos modification par là! entrer dans l'URL le nom de la variable à modifier !</h3>
                       <form method="post" action="includes/profil/act_modifnom.php?modif=nom">
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
                            <input type="submit" class="btn btn-success"></input>
                            </div>

                     </form></p>

                      <form method="post" action="includes/profil/act_modifnom.php?modif=prenom">
                            <div class="form-group">
                                   <label for="pseudoactuel">Enter votre pseudo actuel</label>
                                   <input type="pseudoactuel" class="form-control"  name="pseudoactuel" id ="pseudoactuel" placeholder="Enter pseudo">
                            </div>

                            <div class="form-group">
                                  <label for="prenom">NVPrenom</label>
                                  <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrez votre prenom">
                            </div>
                            </br>
  
                            <div>
                            <input type="submit" class="btn btn-success"></input>
                            </div>

                     </form></p>
      </div>
               
    
<?php include 'includes/footer.php'; ?>
