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
            <div class="alert alert-success alert-dismissable">Good job, the new preset is now available ! 
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><?php
        break;
        
        case 'deleted': ?>
            <div class="alert alert-success alert-dismissable">Good job, the preset was deleted ! 
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><?php
        break;
        
        case 'delerror': ?>
            <div class="alert alert-danger alert-dismissable">Oups! Something went wrong, the preset don't exist.
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><?php
        break;
                
        default:
           
        break;
    }
?>
