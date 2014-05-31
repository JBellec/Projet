<?php include 'includes/header.php'; ?>
<link href="css/admin_panel.css" rel="stylesheet">
<title>Admin Panel</title>
<?php include 'includes/navbar.php'; ?>
        
	<div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="admin.php">Overview</a></li>
                    <?php include 'includes/admin/nav.php'; ?>
                </ul>
            </div><!-- /side bar -->
         
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Dashboard</h1>
              <?php
                
                if(isset($_GET['sec'])) {
                    $section = $_GET['sec'];
                    include "includes/admin/$section.php";
                } else {
                    echo "J'affiche tout !";
                    include "includes/admin/all.php";
                    }
              ?>
        </div>
    </div><!-- /container-fluid-->
<?php include 'includes/footer.php'; ?>
