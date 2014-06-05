<?php
    //seul le propriétaire peu scanne le QRCode on lui propose de ramener l'objet ?>
    <form method="post" action="includes/admin/act_returner.php?id=<?php echo $_GET['id'] ?>">
	    <input type="submit" value="I'm returning this object 'cause I'm cool ;-)" class="btn btn-info btn-lg" />
	</form><?php //si on est connecté on peu emprunter
?>
