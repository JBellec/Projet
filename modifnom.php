<?php include 'includes/header.php';
    include 'includes/navbar.php'; ?>
  
  <div class="jumbotron">
                <h1>Vos modification par là!</h1>
                <p class="lead">
          <form method="post" action="includes/profil/act_modifnom.php">
            <div class="form-group">
              <label for="pseudoactuel">Enter your recent pseudo</label>
              <input type="pseudoactuel" class="form-control"  name="pseudoactuel" id ="pseudoactuel" placeholder="Enter pseudo">
            </div>

            <div class="form-group">
              <label for="nom">Enter your new name</label>
              <input type="text" class="form-control" name="nom" id="nom" placeholder="Enter name">
            </div>
          </form>
          <form method="post" action="includes/profil/act_modifnom.php">
            <div class="form-group">
              <label for="pseudoactuel">Enter your recent pseudo</label>
              <input type="pseudoactuel" class="form-control"  name="pseudoactuel" id ="pseudoactuel" placeholder="Enter pseudo">
            </div>

            <div class="form-group">
              <label for="nom">Enter your new lastname</label>
              <input type="text" class="form-control" name="nom" id="nom" placeholder="Enter lastname">
            </div>
          </form>
          <form method="post" action="includes/profil/act_modifnom.php">
            <div class="form-group">
              <label for="pseudoactuel">Enter your recent pseudo</label>
              <input type="pseudoactuel" class="form-control"  name="pseudoactuel" id ="pseudoactuel" placeholder="Enter pseudo">
            </div>

            <div class="form-group">
              <label for="nom">Enter your new email </label>
              <input type="text" class="form-control" name="nom" id="nom" placeholder="example@example.com">
            </div>
          </form>
          
  
            </br>
  
             <div>
              <input type="submit" class="btn btn-success">modifier</input>
            </div>

               
    </div><!-- Fin Jumbotron -->
</body>
</html>