 <?php
    require('../connectivity/connection.php');
    //if(isset($_POST['username']) && isset($_POST['password'])){
		
        $username = $_POST['username'];
		$password = PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT);
		trim($password);
		$email = $_POST['email'];
		
		$sql_u = "SELECT * FROM users WHERE username='$username'";
		$sql_e = "SELECT * FROM users WHERE email='$email'";
		$res_u = mysqli_query($conn, $sql_u);
		$res_e = mysqli_query($conn, $sql_e);
		
		if (mysqli_num_rows($res_u) > 0) {
			$name_error = "This username was already taken!"; 	
			echo "<center>";
			echo "<span style='font-size:20px'>";
			echo $name_error;
			echo "<br><br>";
			echo "Redirecting to home page...";
			echo "</center>";
			echo "</font>";
			/* Redirect browser */
			header("refresh:3;url=../index.php");
			exit();
		} else if(mysqli_num_rows($res_e) > 0){
			$email_error = "This email was already taken!"; 	
			echo "<center>";
			echo "<span style='font-size:20px'>";
			echo $email_error;
			echo "<br><br>";
			echo "Redirecting to home page...";
			echo "</center>";
			echo "</font>";
			/* Redirect browser */
			header("refresh:3;url=../index.php");
			exit();
		} else {
			require_once('../auth/first_login_pass.php');
			$query = "INSERT INTO users (username, password, email) VALUES('$username', '$password', '$email')";
			$result = mysqli_query($conn,$query);					
			if($result){
				echo "<center>";
				echo "<span style='font-size:20px'>";
				echo "New user registered succesfully!";
				echo "<br><br>";
				echo "Redirecting to home page...";
				echo "</center>";
				echo "</font>";
				/* Redirect browser */
				header("refresh:3;url=../index.php");
				exit();
			}
		}
    //}
	
	$conn->close();

?>