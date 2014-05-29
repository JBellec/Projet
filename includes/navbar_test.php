<?php if(isset($_SESSION['login'])) { //$_SESSION['login'] = pseudo
        include 'mysql.php';
        $req='SELECT admin FROM user WHERE pseudo='.$_SESSION['login'];
        $isadmin=$connect->query($req);
        $fetched=$isadmin->fetch();
        if($fetched==1) {
        include 'admin_navbar.php';
    } 
}                    
?> 
