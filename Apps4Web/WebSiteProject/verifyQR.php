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
?>	
	  <?php
	$g = new \Google\Authenticator\GoogleAuthenticator();
	$salt = '7WAO342QFANY6IKBF7L7SWEUU79WL3VMT920VB5NQMW';
	$secret = $username.$salt;
	$check_this_code = $_POST['code'];
	if ($g->checkCode($secret, $check_this_code)) {
	  echo 'Success!';
	  session_write_close();
      header("location: user_login.php");
	  exit();
	} else {
	  echo '<br><br><center>Invalid login</center>';
	  echo '<br><br><center>You will be redirected...</center>';
	  header("Refresh: 2; verifyQR.html");
	}
?>