<?php include 'includes/header.php'; 
    include 'includes/navbar.php'; ?>
		<title>QR-Ensisa</title>
	</head>  
	<body>
	    <div class="container">
            <!-- Jumbotron -->
            <div class="jumbotron">
                <h1>Our fun project!</h1>
                <p class="lead">Hi everybody and welcome on our wesite :) . Yes your in the right one ! Here you can scan a QR Code in order to find  your classmates, being his friend, and else. You can also borrow stuff from XID so easily !</p>
                <p><a class="btn btn-lg btn-success" href="#" role="button"> Don't hesitate and get started today</a></p>
            </div><!-- Fin Jumbotron -->

           
            <div class="row"> <!-- Début du vecteur -->
                <div class="col-lg-4"><!-- 1er colonne -->
                    <h2>XID QRcode</h2>
                    <p>Would you borrow XID's objects ? Or check if the item you want is available in the XID ? </br> Our project is to make your work easier, it is based QRcode (yes too much fun).
                        Indeed, scanning the QRCode of the requested object can add the product, click on OKeeyyy and it's done! : D</p>
                    <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- fin 1er colonne -->
                
                <div class="col-lg-4"><!-- 2em colonne -->
                    <h2>Profil Access</h2>
                    <p>You met a classmate and you want to take the contact information faster? Or visit his profile and see his photos (chouette)? </br> Scan the QRcode and let you guide!  </p>
                    <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- fin 2em colonne -->
                
                <div class="col-lg-4"><!-- 3em colonne -->
                    <form class="form-signin" role="form">
                        <h2 class="form-signin-heading">Please sign in</h2>
                        <input type="email" class="form-control" placeholder="Email address" required autofocus>
                        <input type="password" class="form-control" placeholder="Password" required>
                        <label class="checkbox">
                        <input type="checkbox" value="remember-me"> Remember me
                        </label>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="self.location.href='inscription.php'">Inscription</button>
                    </form>
                </div><!-- fin 3em colonne -->
            </div><!-- fin du vecteur -->
            <!-- Site footer -->
            <div class="footer">
                <p>&copy; ENSISA 2014</p>
            </div>
        </div> <!-- /container -->
<?php include 'includes/footer.php' ?>
