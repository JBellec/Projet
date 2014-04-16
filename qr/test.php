<?php
	include '../lib/phpqrcode/qrlib.php';
	QRcode::png('some othertext 1234');
	QRcode::png('code data text', 'filename.png');
?>
