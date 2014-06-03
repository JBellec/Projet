<h2 class="sub-header">All Objects</h2>
<?php include 'lib/phpqrcode/qrlib.php';
    include 'includes/mysql.php';
    $objects_out = $connect->query('SELECT * FROM object');
    $i=0;
    while ($fetched = $objects_out->fetch()){
        echo '<div class="col-xs-4 col-md-2">';
        echo '<a href="'.$URL.'object.php?id='.$fetched['id'].'"><img src="qr/generate.php?txt='.$URL.'/object.php?id='.$fetched['id'].'" class="img-responsive"/></a>';
        echo  '<h4>'.$fetched['name'].'</h4>';
        echo '</div>';
}?>
