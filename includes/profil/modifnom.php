<?php include 'includes/header.php';
    include 'includes/navbar.php'; ?>

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
               
    
</body>
</html>