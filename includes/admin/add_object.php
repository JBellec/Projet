<h2 class="sub-header">Add an object</h2>
<div class="container">
<li><a href="admin.php?sec=add_object&preset=PC">Add a PC</a></li>
<li><a href="admin.php?sec=add_object&preset=cable_ethernet">Add a cable</a></li>
<li><a href="admin.php?sec=add_object&preset=switch">Add a switch</a></li>


<?php
	if(isset($_GET['preset'])){
		include 'add_object_cible.php';
	}
?>
</div> <!-- /container -->

