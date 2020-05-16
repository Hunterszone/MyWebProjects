<?php

    	//Start session
    	session_start();
     
    	//Include database connection details
    	require_once('connection.php');
     
    	//Create array to store validation errors
    	$errmsg_arr = array();
     
    	//Validation error flag
    	$errflag = false;
     
    	//Sanitize the POST values - TODO
    	$username = htmlspecialchars($_POST['username']);
    	$password = htmlspecialchars($_POST['password']);
		//$email = htmlspecialchars($_POST['email']);
        
        if (isset($_COOKIE['PrivatePageLogin'])) {
        if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
        ?>

<!-- LOGGED IN CONTENT HERE -->

<?php
		exit;
		   } else {
			  echo "Bad Cookie.";
			  exit;
		   }
		}
        
    	//Check Input Entries
    	if($username == '') {
    		$errmsg_arr[] = 'Username input is empty';
    		$errflag = true;
    	}
		trim($password);
    	if($password == '') {
    		$errmsg_arr[] = 'Password input is empty';
    		$errflag = true;
    	}
    	//If input entries are correct -> redirect to the login form
    	if($errflag) {
    		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    		session_write_close();
    		header("location: login_form.php");
    		exit();
    	}  
    	//Create query, but first use hashing algorithm for the password
        $hash = PASSWORD_HASH($password, PASSWORD_DEFAULT);
        $qry="SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result=mysqli_query($conn,$qry);
		//die($qry);
				
    	//Check whether the query was successful or not
		if($result && password_verify($password, $hash)) {
    		if(mysqli_num_rows($result) > 0) {
    			//Login Successful
    			session_regenerate_id();
    			$member = mysqli_fetch_assoc($result);
    			$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
    			$_SESSION['SESS_USERNAME']  = $member['username'];
    			$_SESSION['SESS_PASSWORD']  = $member['password'];
				$_SESSION['SESS_EMAIL']  = $member['email'];
    			session_write_close();
    			header("location: website.php");
    			exit();
    		}else {
    			//Login failed -> error message
    			$errmsg_arr[] = 'Username or password not found';
    			$errflag = true;
    			if($errflag) {
    				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    				session_write_close();
    				header("location: login_form.php");
    				exit();
    			}
    		}
    	}else {
			debug_to_console($username);
			debug_to_console($password);
			printf("error: %s\n", mysqli_error($conn));
    		die("Query failed");
    	}
		
		// Helper debug function
		function debug_to_console($data) {
			$output = $data;
			if (is_array($output))
				$output = implode(',', $output);

			echo "<script>console.log('Debug Object: " . $output . "' );</script>";
		}
		
		//$conn->close();

?>