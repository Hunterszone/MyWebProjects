<?php

		require_once('authentication.php');
		echo "<center>";
		echo "<span style='font-size:20px'>";
		echo "Welcome, " . htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');
		echo "<br>";
		echo "Your email is: " . htmlspecialchars($_SESSION['SESS_EMAIL'], ENT_QUOTES, 'UTF-8');
		echo "<br>";
		echo "Your personal ID is: " . htmlspecialchars($_SESSION['SESS_MEMBER_ID'], ENT_QUOTES, 'UTF-8');
		echo "</center>";
		echo "</font>";
			
?>