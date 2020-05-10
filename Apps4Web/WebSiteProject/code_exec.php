 <?php
    require('connection.php');
    //if(isset($_POST['username']) && isset($_POST['password'])){
		
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";
        $result = mysqli_query($conn,$query);
		
        if($result){
            echo "New user registered succesfully!";
			/* Redirect browser */
			header("refresh:3;url=index.php");
			exit();
        }
        else
            echo "Error registering!";
    //}
	
	$conn->close();

?>