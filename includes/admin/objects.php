<h2 class="sub-header">All Objects</h2>
<?php include 'lib/phpqrcode/qrlib.php';
    include 'includes/mysql.php';
    $objects_out = $connect->query('SELECT * FROM object');
    $i=0;
    while ($fetched = $objects_out->fetch()){
        echo '<div class="col-xs-4 col-md-2">';
        echo '<a href="'.$URL.'object.php?id='.$fetched['id'].'"><img src="qr/generate.php?txt='.$URL.'/object.php?id='.$fetched['id'].'" class="img-responsive"/></a>';
        echo  '<h4>'.$fetched['name'].'</h4>';
        if($fetched['borrowed']==0) {
            echo ' <span class="label label-success">available</span>';
        } else {
            $user = $connect->prepare('SELECT pseudo FROM borrowed WHERE object_id=?');
            $user->execute(array($fetched['id']));
            $fetched_user=$user->fetch();
            $the_user=$fetched_user[0];
            echo ' <span class="label label-warning">'.$the_user.'</span>';
        }
        echo '</div>';
}?>

