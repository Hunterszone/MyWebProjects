<?php

	// DB connection
    $host = 'localhost';
	$user = 'root';
    $pass = '';
    $db = 'dangerous';
	$prefix = "";
    $conn = new mysqli($host, $user, $pass, $db, 3306) or die("Could not connect to the database");
	mysqli_select_db($conn, $db) or die("Could not select database");
	
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

