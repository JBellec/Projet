<h2 class="sub-header">Add an object</h2>
<?php
$req= $connect -> query('select name from preset');
?>
<div class="container">
<?php
while($fetched = $req->fetch()){
echo '<li><a href="admin.php?sec=add_object&preset=PC">Add a '.$fetched['name'].'</a></li>';
}
?>


</div> <!-- /container -->

