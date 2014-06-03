<?php include 'includes/header.php';
    include 'includes/navbar.php'; ?>
  
  <div class="jumbotron">
                <h3>Vos modification par là! entrer dans l'URL le nom de la variable à modifier !</h3>
                       <form method="post" action="includes/profil/act_modif.php?modif=name">
                            <div class="form-group">
                                   <label for="pseudoactuel">Enter your recent pseudo </label>
                                   <input type="pseudoactuel" class="form-control"  name="pseudoactuel" id ="pseudoactuel" placeholder="Enter pseudo">
                            </div>

                            <div class="form-group">
                                  <label for="name">New Name</label>
                                  <input type="text" class="form-control" name="name" id="name" placeholder="Entrez your name">
                            </div>
                            </br>
  
                            <div>
                            <input type="submit" class="btn btn-success"></input>
                            </div>

                     </form></p>

                      <form method="post" action="includes/profil/act_modif.php?modif=lastname">
                            <div class="form-group">
                                   <label for="pseudoactuel">Enter your recent pseudo </label>
                                   <input type="pseudoactuel" class="form-control"  name="pseudoactuel" id ="pseudoactuel" placeholder="Enter your pseudo">
                            </div>

                            <div class="form-group">
                                  <label for="lastname">New lastname</label>
                                  <input type="text" class="form-control" name="lastname" id="prenom" placeholder="Entrez your lastname">
                            </div>
                            </br>
  
                            <div>
                            <input type="submit" class="btn btn-success"></input>
                            </div>

                     </form></p>
      </div>
               
    
<?php include 'includes/footer.php'; ?>