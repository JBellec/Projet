<?php include 'includes/header.php' ?>
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
            echo '<a href="'.$URL.'/object.php?id='.$fetched['id'].'"><img src="qr/generate.php?txt='.$URL.'/object.php?id='.$fetched['id'].'" class="img-responsive"/></a>';
            echo  htmlspecialchars($fetched['name']);
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
