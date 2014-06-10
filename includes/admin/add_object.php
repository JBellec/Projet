<h2 class="sub-header">Add an object</h2>
<?php
$req= $connect -> query('select name from preset');
?>
<div class="container">
<?php

while($fetched = $req->fetch()){
	echo '<li><a href="admin.php?sec=add_object&preset='.$fetched['name'].'">Add a '.$fetched['name'].'</a></li>';
}
if(isset($_GET['preset'])){
	include ("add_object_cible.php");
}
?>


</div> <!-- /container -->

