<?php 
	require_once('../auth/authentication.php' );
	
	$APIkey='39f9a09acde4424f3327fb7b1f7180695e79e924f749082e6634b764701fb892';
	$from = '2023-07-12';
	$to = '2023-07-12';
	$league_id = 1;

	$curl_options = array(
	  CURLOPT_URL => "https://apiv3.apifootball.com/?action=get_events&from=$from&to=$to&league_id=$league_id&APIkey=$APIkey",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_HEADER => false,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_CONNECTTIMEOUT => 5
	);

	$curl = curl_init();
	curl_setopt_array( $curl, $curl_options );
	$result = curl_exec( $curl );

	$result = (array) json_decode($result);

	var_dump($result);
?>							