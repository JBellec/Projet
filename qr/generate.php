<?php
	/*
	*	Génére un QRCode stocké dans un php strem depuis
	*	une chaine de caractère passé en paramètre par txt
	*	
	*	exemple : truc.php?txt="la chaine de caractère qui finir dans le QRCode"
	*/
	
	include '../lib/phpqrcode/qrlib.php';
	include 'includes/mysql.php';	
	
	$toQrCode = $_GET['txt'];	//Chaine de caractère donné en paramètre truc.php?txt='fghjk'
	
	ob_start("callback");
	
	$debugLog = ob_get_contents();
	ob_end_clean();
    
    // outputs image directly into browser, as PNG stream
    QRcode::png($toQrCode);
	
?>

