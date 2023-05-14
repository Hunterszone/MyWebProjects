<?php 
	require_once('../auth/authentication.php' );
	
	$curl = curl_init();

	curl_setopt_array($curl, [
		CURLOPT_URL => "https://free-nba.p.rapidapi.com/players?page=0&per_page=25",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => [
			"X-RapidAPI-Host: free-nba.p.rapidapi.com",
			"X-RapidAPI-Key: 09bcc755f2msha35c464a81c956ap1ae560jsn668c2608f4c7"
		],
	]);

	$result = curl_exec($curl);

	$result = (array) json_decode($result);

	echo '<center><table style="width:100%">';
		echo '<p>PLAYER STATS<p> ';
	
		echo '<tr>';
			echo '<th>';
				echo 'FIRST NAME';
			echo '</th>';			
			echo '<th>';			
				echo 'LAST NAME';
			echo '</th>';			
			echo '<th>';						
				echo 'POSITION';
			echo '</th>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>';
				echo $result['data'][0]->first_name;
			echo '</td>';
			echo '<td>';
				echo $result['data'][0]->last_name;
			echo '</td>';
			echo '<td>';
				echo $result['data'][0]->position;
			echo '</td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>';
				echo $result['data'][1]->first_name;
			echo '</td>';
			echo '<td>';
				echo $result['data'][1]->last_name;
			echo '</td>';
			echo '<td>';
				echo $result['data'][1]->position;
			echo '</td>';
		echo '</tr>';
	echo '</table></center>';
?>							