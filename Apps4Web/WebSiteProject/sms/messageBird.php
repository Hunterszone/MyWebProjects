<!-- Calling MessageBird API -->
<?php
		require 'vendor/autoload.php';

		$six_digit_random_number = random_int(100000, 999999);
		
		$MessageBird = new \MessageBird\Client('****************');
		$Message = new \MessageBird\Objects\Message();
		$Message->originator = 'Me4Gaming';
		$Message->recipients = array('+359889619295');
		$Message->body = $six_digit_random_number;

		$MessageBird->messages->create($Message);
?>

<!-- Helper method to print php vars to browser's console -->
<?php
	function console_log($output, $with_script_tags = true) {
		$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
	');';
	if ($with_script_tags) {
		$js_code = '<script>' . $js_code . '</script>';
	}
	echo $js_code;
}