<?php
$currency = '$'; //Currency sumbol or code

//db settings
$db_username = 'root';
$db_password = 'passwd';
$db_name = 'somstore';
$db_host = 'localhost:3306';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);


//paypal settings
$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'paypaluser@somemail.com'; //PayPal API Username
$PayPalApiPassword 		= '190798792445'; //Paypal API password
$PayPalApiSignature 	= '797987709709709oipuiou98Eq.Gufar'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://localhost:3306/shopping-cart/paypal-express-checkout/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://localhost:3306/shopping-cart/paypal-express-checkout/cancel_url.html'; //Cancel URL if user clicks cancel

?>