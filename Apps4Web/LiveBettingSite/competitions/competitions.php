<?php 
	require_once('../auth/authentication.php' );
	
	$APIkey='39f9a09acde4424f3327fb7b1f7180695e79e924f749082e6634b764701fb892';
	$country_id = 0;

	$curl_options = array(
	  CURLOPT_URL => "https://apiv3.apifootball.com/?action=get_leagues&country_id=$country_id&APIkey=$APIkey",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_HEADER => false,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_CONNECTTIMEOUT => 5
	);

	$curl = curl_init();
	curl_setopt_array( $curl, $curl_options );
	$resultCompetition = curl_exec( $curl );

	$resultCompetition = (array) json_decode($resultCompetition);
	
	echo '<center>';
		echo 'Country: '.$resultCompetition[0]->country_name;
		$image = $resultCompetition[0]->country_logo;
		$imageData = base64_encode(file_get_contents($image));
		echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
		echo "League: ".$resultCompetition[0]->league_name;
		$image = $resultCompetition[0]->league_logo;
		$imageData = base64_encode(file_get_contents($image));
		echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
		
		echo 'Country: '.$resultCompetition[1]->country_name;
		$image = $resultCompetition[1]->country_logo;
		$imageData = base64_encode(file_get_contents($image));
		echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
		echo "League: ".$resultCompetition[1]->league_name;
		$image = $resultCompetition[1]->league_logo;
		$imageData = base64_encode(file_get_contents($image));
		echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';	
	echo '</center>';
?>							