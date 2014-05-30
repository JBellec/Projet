<?php include 'includes/header.php';
   include 'includes/navbar.php'; ?>
        <title>Admin Panel</title>
	</head>  
	<body>
	<div class="container-fluid">
	    
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="admin.php">Overview</a></li>
                <?php include 'includes/admin/nav.php'; ?>
            </ul>
        </div><!-- /side bar -->
     
        <div class="col-sm-9 col-md-10">
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
	</body>
	
<?php include 'includes/footer.php'; ?>
