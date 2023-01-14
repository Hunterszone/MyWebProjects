<?php
	$database="sphider";
	$mysqli_user = "root";
	$mysqli_password = "root"; 
	$mysqli_host = "localhost";
	$mysqli_table_prefix = "";

	$conn = new mysqli($mysqli_host, $mysqli_user, $mysqli_password, $database, 3306) or die("Could not connect to the database");
	$success = mysqli_connect ($mysqli_host, $mysqli_user, $mysqli_password);
	
	if (!$success)
		die ("<b>Cannot connect to database, check if username, password and host are correct.</b>");
    $success = mysqli_select_db($conn, $database);
	if (!$success) {
		print "<b>Cannot choose database, check if database name is correct.";
		die();
	}
?>

