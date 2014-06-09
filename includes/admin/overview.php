<h1 class="sub-header">Overview</h1>
<?php include 'includes/mysql.php';
$preset = $connect->query('SELECT * FROM preset');

while ($fetched_pre = $preset->fetch()){

    $object = $connect->prepare('SELECT * FROM object WHERE type= ?');
    $pre_name=$fetched_pre['name'];
    $object->execute(array($pre_name));
    echo '<h2 class="sub-header">'.$pre_name.'</h2>';
    
    
}
?>
