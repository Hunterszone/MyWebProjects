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
		echo '<p>TEAMS STANDING<p> ';
	
		echo '<tr>';
			echo '<td>';
				echo $resultStanding[0]->overall_league_position;
				echo ". ";
				echo $resultStanding[0]->team_name;
				$image = $resultStanding[0]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			
				echo $resultStanding[1]->overall_league_position;
				echo ". ";
				echo $resultStanding[1]->team_name;
				$image = $resultStanding[1]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
				
				echo $resultStanding[2]->overall_league_position;
				echo ". ";
				echo $resultStanding[2]->team_name;
				$image = $resultStanding[2]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			echo '</td>';			
			echo '<td>';
				echo $resultStanding[3]->overall_league_position;
				echo ". ";
				echo $resultStanding[3]->team_name;
				$image = $resultStanding[3]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			
				echo $resultStanding[4]->overall_league_position;
				echo ". ";
				echo $resultStanding[4]->team_name;
				$image = $resultStanding[4]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
				
				echo $resultStanding[5]->overall_league_position;
				echo ". ";
				echo $resultStanding[5]->team_name;
				$image = $resultStanding[5]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			echo '</td>';
			echo '<td>';
				echo $resultStanding[6]->overall_league_position;
				echo ". ";
				echo $resultStanding[6]->team_name;
				$image = $resultStanding[6]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			
				echo $resultStanding[7]->overall_league_position;
				echo ". ";
				echo $resultStanding[7]->team_name;
				$image = $resultStanding[7]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
				
				echo $resultStanding[8]->overall_league_position;
				echo ". ";
				echo $resultStanding[8]->team_name;
				$image = $resultStanding[8]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			echo '</td>';
			echo '<td>';
				echo $resultStanding[9]->overall_league_position;
				echo ". ";
				echo $resultStanding[9]->team_name;
				$image = $resultStanding[9]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			
				echo $resultStanding[10]->overall_league_position;
				echo ". ";
				echo $resultStanding[10]->team_name;
				$image = $resultStanding[10]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
				
				echo $resultStanding[11]->overall_league_position;
				echo ". ";
				echo $resultStanding[11]->team_name;
				$image = $resultStanding[11]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			echo '</td>';
			echo '<td>';
				echo $resultStanding[12]->overall_league_position;
				echo ". ";
				echo $resultStanding[12]->team_name;
				$image = $resultStanding[12]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			
				echo $resultStanding[13]->overall_league_position;
				echo ". ";
				echo $resultStanding[13]->team_name;
				$image = $resultStanding[13]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
				
				echo $resultStanding[14]->overall_league_position;
				echo ". ";
				echo $resultStanding[14]->team_name;
				$image = $resultStanding[14]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			echo '</td>';
			echo '<td>';
				echo $resultStanding[15]->overall_league_position;
				echo ". ";
				echo $resultStanding[15]->team_name;
				$image = $resultStanding[15]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			
				echo $resultStanding[16]->overall_league_position;
				echo ". ";
				echo $resultStanding[16]->team_name;
				$image = $resultStanding[16]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
				
				echo $resultStanding[17]->overall_league_position;
				echo ". ";
				echo $resultStanding[17]->team_name;
				$image = $resultStanding[17]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			echo '</td>';
			echo '<td>';
				echo $resultStanding[18]->overall_league_position;
				echo ". ";
				echo $resultStanding[18]->team_name;
				$image = $resultStanding[18]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			
				echo $resultStanding[19]->overall_league_position;
				echo ". ";
				echo $resultStanding[19]->team_name;
				$image = $resultStanding[19]->team_badge;
				$imageData = base64_encode(file_get_contents($image));
				echo '<p><img src="data:image/jpeg;base64,'.$imageData.'"></p>';
			echo '</td>';
		echo '</tr>';
		
	echo '</table></center>';

?>							