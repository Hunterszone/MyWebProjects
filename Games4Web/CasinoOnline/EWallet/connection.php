<?php
	
	error_reporting(E_ERROR | E_PARSE);

	// DB connection
    $host = 'localhost';
	$user = 'root';
    $pass = 'root';
    $db = 'casino';
	$prefix = "";
	$fallback_address = "../home.html";
    $conn = new mysqli($host, $user, $pass, $db, 3306) or die("Could not connect to the database");
	mysqli_select_db($conn, $db) or die("Could not select database. Click <a href='".$fallback_address."'>here</a> to return to game.");
	
	if(is_null($db)) {
		echo "Could not select database. Click <a href='".$fallback_address."'>here</a> to return to game.";
	}
	
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
	
?>

