<?php
	$req = $connect->prepare('SELECT * FROM object WHERE id = ?');
	$req->execute(array($_GET['id']));
	//$resultat=$req->fetch();
	
	

	switch($resultat)
		case $resultat['PC']=1:
	// On affiche chaque entrée une à une
	while ($resultat = $req->fetch())
	{
?>
    <p>
    Type d'objet : <?php echo $resultat['name']; ?><br />
	Descritpion de l'objet : <?php echo $resultat['description']; ?><br />
	CPU : <?php echo $resultat['cpu']; ?> <br />
	Frequence du CPU : <?php echo $resultat['frequence']; ?> GHz<br />
	RAM : <?php echo $resultat['ram']; ?> Go<br />
	Disque dur : <?php echo $resultat['hard_drive']; ?> Go<br />
	Carte graphique : <?php echo $resultat['gpu']; ?><br />
   </p>

<?php
}
break;

$req->closeCursor(); // Termine le traitement de la requête
	
?>