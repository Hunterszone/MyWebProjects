<?php
		
	//Include auth details
	require_once('./auth/authentication.php');
		
		$username = $_SESSION['SESS_USERNAME'];
    	$password = $_SESSION['SESS_PASSWORD'];
		$email = $_SESSION['SESS_EMAIL'];
		
		$token = bin2hex(random_bytes(20));
		$cookie = $username . ':' . $token;
		$hmac_key = hash("sha256", $password, true);
		$mac = hash_hmac('sha256', $cookie, $hmac_key);
		$cookie .= ':' . $mac;
		setcookie('rememberme', $cookie);
		$query = "INSERT INTO users (username, password, email, token, cookie) VALUES('$username', '$password', '$email', '$token', '$cookie')";
		
		if (isset($_COOKIE['rememberme']) ? $_COOKIE['rememberme'] : '') {

			$qry="SELECT * FROM users WHERE token='$token' AND cookie='$cookie'";
			$result = mysqli_query($conn,$qry);	
			
			list ($username, $token, $mac) = explode(':', $cookie);
			if (!hash_equals(hash_hmac('sha256', $username . ':' . $token, $hmac_key), $mac)) {
				return false;
			}
			$usernametoken = '';
			if(mysqli_num_rows($result) > 0) {
    			//Login Successful
    			/*$usernametoken =*/ mysqli_fetch_assoc($result);
				header("location: ../auth/user_login.php");
			}
			/*if (hash_equals(implode("",$usernametoken), $token)) {
				header("location: ../auth/user_login.php");
			}*/
		}		
?>