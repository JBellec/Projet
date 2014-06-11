<?php    
    if(isset($_GET['preset'])) {
        $req=$connect->query('SELECT name FROM preset');
        while($fetched=$req->fetch()){
            echo '<li><a href="admin.php?sec=add_object&preset='.$fetched['name'].'">Add a '.$fetched['name'].'</a></li>' ;
        }
        
        $req->closeCursor();
        echo '<h2 class="sub-header">Add an '.$_GET['preset'].'</h2>';
        $form=$connect->prepare('SELECT * FROM preset WHERE name=:preset_name');
        $form->execute(array(':preset_name'=>$_GET['preset'])); ?>
        
        <form role="form" method="post" action="includes/admin/act_add_object.php">
        <div class="form-group">
            <label for="name">Object Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter the name of the new object">
    
             <label for="description">Object Description</label>
            <input type="text" class="form-control" name="description" placeholder="Describe it, stay short">
      <?php
        while($fetch_all=$form->fetch()) {
            if($fetch_all['cpu']==1){ ?>
                <label for="cpu">Object CPU</label>
                <input type="text" class="form-control" name="cpu" placeholder="Enter the cpu reference">
            <?php
            }
            if($fetch_all['frequence']==1){?>
                <label for="frequence">CPU Frequence</label>
                <input type="text" class="form-control" name="frequence" placeholder="Enter the cpu frequence">
            <?php
            }
            if($fetch_all['gpu']==1){?>
                <label for="gpu">GPU Reference</label>
                <input type="text" class="form-control" name="gpu" placeholder="Enter the GPU references">
            <?php
            }
            if($fetch_all['hard_drive']==1){?>
                <label for="hard_drive">HDD capacity in Go</label>
                <input type="int" class="form-control" name="hard_drive" placeholder="Enter the hard drive capacity in Go">
            <?php
            }
            if($fetch_all['lenght']==1){?>
                <label for="lenght">Lenght in meter</label>
                <input type="int" class="form-control" name="lenght" placeholder="Lenght of the cable">
            <?php
            }
            if($fetch_all['number_port']==1){?>
                <label for="lenght">Number of port</label>
                <input type="int" class="form-control" name="number_port" placeholder="Number of port">
            <?php
            }
            if($fetch_all['ram']==1){?>
                <label for="ram">Quantity of RAM in Go</label>
                <input type="int" class="form-control" name="ram" placeholder="Quantity of ram">
            <?php
            }
            ?>  </div>
                <button type="submit" class="btn btn-primary">Add object</button>       
            </form>
       <?php
       }
       $form->closeCursor();
       
    } //end of the if $_GET['section'] is set
    else { ?>
        <h2 class="sub-header">Add an new Objet</h2>
        <p>Please chose one the preset below to add a new object to the data base ;-)</p>
    <?php
        $req=$connect->query('SELECT name FROM preset');
        while($fetched=$req->fetch()){
            echo '<li><a href="admin.php?sec=add_object&preset='.$fetched['name'].'">Add a '.$fetched['name'].'</a></li>' ;
        }
        $req->closeCursor();    
    }
?>
