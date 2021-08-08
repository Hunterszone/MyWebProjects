<?php
		require 'vendor/autoload.php';

		$six_digit_random_number = random_int(100000, 999999);
		
		$MessageBird = new \MessageBird\Client('j6YajDRkLWhMe4G2KYKGVyIMB');
		$Message = new \MessageBird\Objects\Message();
		$Message->originator = 'TestMessage';
		$Message->recipients = array('+359889619295');
		$Message->body = $six_digit_random_number;

		$MessageBird->messages->create($Message);
?>