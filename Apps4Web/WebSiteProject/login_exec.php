<?php

    	//Start session
    	session_start();
     
    	//Include database connection details
    	require_once('connection.php');
     
    	//Create array to store validation errors
    	$errmsg_arr = array();
     
    	//Validation error flag
    	$errflag = false;
     
    	//The following function sanitize values received from the form. Prevents SQL injection
    	function clean($str) {
    		$str = @trim($str);
    		if(get_magic_quotes_gpc()) {
    			$str = stripslashes($str);
    		}
    		return mysqli_real_escape_string($str);
    	}    
    	//Sanitize the POST values
    	$username = clean($_POST['root']);
    	$password = clean($_POST['root']);
        
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
    		$errmsg_arr[] = 'Username is not create';
    		$errflag = true;
    	}
    	if($password == '') {
    		$errmsg_arr[] = 'Password is not filled';
    		$errflag = true;
    	}
     
    	//If input entries are correct -> redirect to the login form
    	if($errflag) {
    		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    		session_write_close();
    		header("location: LoginForm.php");
    		exit();
    	}  
    	//Create query, but first use hashing algorithm md5 for the password
        sha1($password);
    	$qry="SELECT * FROM simple_login WHERE username='$username' AND password='$password'";
    	$result=mysql_query($qry);
        
    	//Check whether the query was successful or not
    	if($result) {
    		if(mysql_num_rows($result) > 0) {
    			//Login Successful
    			session_regenerate_id();
    			$member = mysql_fetch_assoc($result);
    			$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
    			$_SESSION['SESS_USERNAME']  = $member['username'];
    			$_SESSION['SESS_PASSWORD']  = $member['password'];
    			session_write_close();
    			header("location: website.php");
    			exit();
    		}else {
    			//In the cases when login failed -> error message
    			$errmsg_arr[] = 'User name or password not found';
    			$errflag = true;
    			if($errflag) {
    				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    				session_write_close();
    				header("location: LoginForm.php");
    				exit();
    			}
    		}
    	}else {
    		die("Query failed");
    	}
    ?>