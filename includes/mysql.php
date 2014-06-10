<?php
    try {
	    $connect = new PDO('mysql:host=localhost;dbname=qr', 'qr', 't67TvNSzC5XGcV7a', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }
    catch (Exception $e) {
	    die('Erreur : ' . $e->getMessage());
    }
?>

