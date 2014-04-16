<?php
	include '../lib/phpqrcode/qrlib.php';
	include 'includes/mysql.php';
	
	$input = $_GET['txt'];	//txt à générer
	
	ob_start("callback");
	
	$debugLog = ob_get_contents();
	ob_end_clean();
    
    // outputs image directly into browser, as PNG stream
    QRcode::png($input);
	
?>

