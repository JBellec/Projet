<div class="container">
    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i>  QR Ensisa</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <!--<li class="active"><a href="#">Link</a></li>-->
                    
                    <li><a href="qrxid.php"></i><i class="fa fa-qrcode"></i> QR Xid</a></li>
                    <?php include 'navbar_test.php';?>                   
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="profile.php"><i class="fa fa-child"></i> Me</a></li>
					<li><a href="logout.php"><i class="fa fa-unlock"></i> Logout</a></li><!-- ICI JULIEN -->
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </div>
</div><!--/.container -->
