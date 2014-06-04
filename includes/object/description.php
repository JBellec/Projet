<?php
	$req = $connect->prepare('SELECT * FROM object WHERE id = ?');
	$req->execute(array($_GET['id']));
	//$resultat=$req->fetch();
	// On affiche chaque entrée une à une
	while ($resultat = $req->fetch()) {	
	    if($resultat['type']=='PC'){ ?>
            <p>
            <strong>Object's type :</strong> <?php echo $resultat['type']; ?><br />
	        <strong>Descritpion :</strong> <?php echo $resultat['description']; ?><br />
	        <strong>CPU : </strong><?php echo $resultat['cpu']; ?> <br />
	        <strong>CPU's frequency :</strong> <?php echo $resultat['frequence']; ?> GHz<br />
	        <strong>RAM : </strong><?php echo $resultat['ram']; ?> Go<br />
	       <strong> Hard drive :</strong> <?php echo $resultat['hard_drive']; ?> Go<br />
	        <strong>GPU :</strong> <?php echo $resultat['gpu']; ?><br />
           </p>
<?php   }
	    if($resultat['type']=='cable ethernet'){ ?>
	        <p>
           <strong>Object's type :</strong> <?php echo $resultat['type']; ?><br />
	       <strong>Descritpion :</strong> <?php echo $resultat['description']; ?><br />
	       <strong>Cable's lenght :</strong> <?php echo $resultat['lenght']; ?> cm<br />
            </p>
<?php 	}	
	    if($resultat['type']=='switch'){ ?>
	        <p>
            <strong>Object's type :</strong> <?php echo $resultat['type']; ?><br />
	        <strong>Descritpion :</strong> <?php echo $resultat['description']; ?><br />
	        <strong>Number of port :</strong> <?php echo $resultat['number_port']; ?><br />
           </p>
<?php	}
    }
$req->closeCursor(); // Termine le traitement de la requête
?>
