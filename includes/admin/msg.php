<?php
    /*
        Permet d'afficher des alertes sur la page d'admin
        Author : Gaël
    */
    $msg=$_GET['msg'];
    switch ($msg)
    {
        case 'exist': ?>
            <div class="alert alert-danger alert-dismissable">Something went wrong, the preset allready exist. Please choose a new preset name ! 
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><?php
        break;
        
        case 'ok': ?>
            <div class="alert alert-success alert-dismissable">Good job, the new preset is now available! Go add objects now!
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><?php
        break;
        
        case 'deleted': ?>
            <div class="alert alert-success alert-dismissable">Good job, the preset was deleted! Let's create a new one!
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><?php
        break;
        
        case 'delerror': ?>
            <div class="alert alert-danger alert-dismissable">Oups! Something went wrong, the preset don't exist. Wanna create it?
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><?php
        break;
        
        case 'deladmin': ?>
            <div class="alert alert-success alert-dismissable">Good job, one less admin. Keep the power ;-)
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><?php
        break;
        
        case 'addadmin': ?>
            <div class="alert alert-success alert-dismissable">Good job ! Brace yourself there is a new admin!
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><?php
        break;
        
        case 'userdontexist': ?>
            <div class="alert alert-danger alert-dismissable">Oups! Something went wrong, this user doesn't exist.
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><?php
        break;
                
        default:
           
        break;
    }
?>
