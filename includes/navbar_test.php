<?php 
if(isset($_SESSION['login'])) { //$_SESSION['login'] = pseudo
        include 'mysql.php';
       $req='SELECT admin FROM user WHERE pseudo='.$_SESSION['pseudo'];
       $isadmin=$connect->query($req);
       //$fetched=$isadmin->fetch();
		
		if($isadmin==1) {
        include 'navbar_isadmin.php';
		} 
}               
?> 
