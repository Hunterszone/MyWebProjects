 <?php
    require('../connectivity/connection.php');
	require_once('../auth/first_login_pass.php');
    //if(isset($_POST['username']) && isset($_POST['password'])){
		
        $username = $_POST['username'];
		$password = PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT);
		trim($password);
		$email = $_POST['email'];
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
        else
            echo "Error registering!";
    //}
	
	$conn->close();

?>