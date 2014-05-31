<?php
	$req = $connect->prepare('SELECT * FROM object WHERE id = ?');
	$req->execute(array($_GET['id']));
	//$resultat=$req->fetch();
	
	

	
	// On affiche chaque entrée une à une
	while ($resultat = $req->fetch())
	{	if($resultat['type']=='PC'){
?>
    <p>
    Object's type : <?php echo $resultat['type']; ?><br />
	Descritpion : <?php echo $resultat['description']; ?><br />
	CPU : <?php echo $resultat['cpu']; ?> <br />
	CPU's frequency : <?php echo $resultat['frequence']; ?> GHz<br />
	RAM : <?php echo $resultat['ram']; ?> Go<br />
	Hard drive : <?php echo $resultat['hard_drive']; ?> Go<br />
	GPU : <?php echo $resultat['gpu']; ?><br />
   </p>

<?php
	}
	if($resultat['type']=='cable ethernet'){
?>
	<p>
    Object's type : <?php echo $resultat['type']; ?><br />
	Descritpion : <?php echo $resultat['description']; ?><br />
	cable's lenght : <?php echo $resultat['lenght']; ?> cm<br />
   </p>
 <?php 
	}	
	if($resultat['type']=='switch'){
?>
	<p>
    Object's type : <?php echo $resultat['type']; ?><br />
	Descritpion : <?php echo $resultat['description']; ?><br />
	Number of port : <?php echo $resultat['number_port']; ?><br />
   </p>
<?php
	}
}
$req->closeCursor(); // Termine le traitement de la requête
	
?>