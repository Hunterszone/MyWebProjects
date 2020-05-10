<?php
    	require_once('authentication.php');
		echo "Welcome, " . htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');

    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Untitled Document</title>
		<style type="text/css">
		.style1 {
			font-size: 36px;
			font-weight: bold;
		}
		.style2 {
			font-size: 20px;
		}
		</style>
	</head>

	<body background="book-carousel.jpg">
		<p align="center" class="style1">Login successful</p>
		<p align="center" class="style2"><a href="user_login.php">Go to user profile</a></p>
		<p align="center" class="style2"><a href="index.php">Logout</a></p>

		<!-- CSS for BACKGROUND -->

		<style type="text/css">

body { 
background-image: url("book-carousel.jpg") no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}

		</style> 
	</body>
</html>