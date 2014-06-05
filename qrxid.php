<?php include 'includes/header.php' ?>
<link href="css/qrxid.css" rel="stylesheet">
<title>QR-Xid</title>
<?php include 'includes/navbar.php';
    include 'lib/phpqrcode/qrlib.php';
    include 'includes/mysql.php';
    $objects = $connect->query('SELECT * FROM object');
    $i=0;?>
<div class="container">
    <div class="row">
        <h1>Our Stuff ;-)</h1>
        <?php 
            while ($fetched = $objects->fetch()){
            echo '<div class="col-xs-4 col-md-2">';
            echo '<a href="'.$URL.'object.php?id='.$fetched['id'].'"><img src="qr/generate.php?txt='.$URL.'/object.php?id='.$fetched['id'].'" class="img-responsive"/></a>';
            echo  '<p>'.$fetched['name'].'</p>';
            if($fetched['borrowed']==0) {
                echo '<p><span class="label label-success">available</span></p>';
                } else {
                    echo '<p><span class="label label-warning">borrowed</span></p>';
                }
            echo '</div>';
            $i =($i+1)%6;
            if($i==12) {
        echo  '</div>' ;
        echo  '<div class="row">';
            }
        }
        ?>
    </div>
	
</div>
<?php include 'includes/footer.php' ?>
