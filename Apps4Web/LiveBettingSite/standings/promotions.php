<?php 
	require_once('../auth/authentication.php' );
	
	$APIkey='39f9a09acde4424f3327fb7b1f7180695e79e924f749082e6634b764701fb892';
	$league_id = 302;

	$curl_options = array(
	  CURLOPT_URL => "https://apiv3.apifootball.com/?action=get_standings&league_id=$league_id&APIkey=$APIkey",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_HEADER => false,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_CONNECTTIMEOUT => 5
	);

	$curl = curl_init();
	curl_setopt_array( $curl, $curl_options );
	$resultStanding = curl_exec( $curl );

	$resultStanding = (array) json_decode($resultStanding);

	echo '<center><table style="width:100%">';
		echo 'League: '.$resultStanding[0]->league_name;
		echo '<p>PROMOTIONS<p> ';
	
		echo '<tr>';
			echo '<td>';
				echo $resultStanding[0]->overall_promotion;
				$image = $resultStanding[0]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			
				echo $resultStanding[1]->overall_promotion;
				$image = $resultStanding[1]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
				
				echo $resultStanding[2]->overall_promotion;
				$image = $resultStanding[2]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			echo '</td>';			
			echo '<td>';
				echo $resultStanding[3]->overall_promotion;
				$image = $resultStanding[3]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			
				echo $resultStanding[4]->overall_promotion;
				$image = $resultStanding[4]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
				
				echo $resultStanding[5]->overall_promotion;
				$image = $resultStanding[5]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			echo '</td>';
		echo '</tr>';
		
	echo '</table></center>';

?>							