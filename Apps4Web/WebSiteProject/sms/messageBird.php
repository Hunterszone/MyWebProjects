<?php
		require 'vendor/autoload.php';

		$six_digit_random_number = random_int(100000, 999999);
		
		$MessageBird = new \MessageBird\Client('2zTf9c76AOSGIo74cjzFDWfWq');
		$Message = new \MessageBird\Objects\Message();
		$Message->originator = 'TestMessage';
		$Message->recipients = array('+359889619295');
		$Message->body = $six_digit_random_number;

		$MessageBird->messages->create($Message);
?>