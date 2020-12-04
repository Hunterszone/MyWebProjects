<?php
	
	error_reporting(E_ERROR | E_PARSE);

	// DB connection
    $host = 'localhost';
	$user = 'root';
    $pass = '';
    $db = 'dangerous';
	$prefix = "";
	$fallback_address = "game1.html";
    $conn = new mysqli($host, $user, $pass, $db, 3306) or die("Could not connect to the database");
	mysqli_select_db($conn, $db) or die("Could not select database. Click <a href='".$fallback_address."'>here</a> to return to game.");
	
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
	
	// ob_start();
	// echo "This output will be sent to the browser";	
	
	/*$sql = "INSERT INTO users (username, password) VALUES ('JohnDoe', 'Today123')";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}*/
	
?>

