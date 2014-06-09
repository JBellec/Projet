<h2 class="sub-header">Objects in the wild</h2>
<?php include 'lib/phpqrcode/qrlib.php';
    include 'includes/mysql.php';
    $objects_out = $connect->query('SELECT * FROM object WHERE borrowed=1');
    $i=0;
    while ($fetched = $objects_out->fetch()){
        echo '<div class="col-xs-4 col-md-2">';
        echo '<a href="'.$URL.'object.php?id='.$fetched['id'].'"><img src="qr/generate.php?txt='.$URL.'/object.php?id='.$fetched['id'].'" class="img-responsive"/></a>';
        
        echo  '<h4>'.$fetched['name']." ".$fetched['type'].'</h4>';
        $user = $connect->prepare('SELECT pseudo FROM borrowed WHERE object_id=?');
        $user->execute(array($fetched['id']));
        $fetched_user=$user->fetch();
        $the_user=$fetched_user[0];
        $user->closeCursor();

        echo ' <span class="label label-warning">'.$the_user.'</span>';
        echo '</div>';
}$objects_out->closeCursor();?>
