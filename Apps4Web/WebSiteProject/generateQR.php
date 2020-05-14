<?php

use Sonata\GoogleAuthenticator;

//Load composer's autoloader
require 'oauth/vendor/vendor/autoload.php';

//Include member details
include_once 'member.php';

include_once __DIR__.'\oauth\vendor\src\FixedBitNotation.php';
include_once __DIR__.'\oauth\vendor\src\GoogleAuthenticator.php';
include_once __DIR__.'\oauth\vendor\src\GoogleQrUrl.php';
include_once __DIR__.'\oauth\vendor\src\GoogleAuthenticatorInterface.php';

$g = new \Google\Authenticator\GoogleAuthenticator();
$salt = '7WAO342QFANY6IKBF7L7SWEUU79WL3VMT920VB5NQMW';
$secret = $username.$salt;

echo '<center>';
echo 'Scan this QR and use the verification code from your mobile app to proceed';
echo '<br><br><br>';
echo '<img src="'.$g->getURL($username, 'me4gaming.com', $secret).'" />';
echo '<br><br><br>';
echo "<a href=verifyQR.html>Enter verification code</a>";
echo '</center>';

?>