<?php
	
    require('connection.php');
	
		//Create array to store validation errors
		$errmsg_arr = array();
	 
		//Validation error flag
		$errflag = false;
		
        $stars = $_POST['star'];
		$query = "INSERT INTO feedback (rating) VALUES('$stars')";
        $result = mysqli_query($conn,$query);
			
	$conn->close();

?>

<html>

<head>

<script>

	/*function returned(){
	
		javascript:location.href='./back2game.html';

	}*/
	
</script>

</head>

<body background="images/background.jpg">

<p></br>
	<center><font size="6"><font color="yellow">Thank you for voting!</font></font>
			<font size="6"><font color="yellow">You think we are <?php echo $_POST['star'] ?>!</font></font>
		<p>
			<a href="./game1.html">
			   <input type="button" style="cursor: pointer;" value="Back2Game!" />
			</a>
			<a href="http://me4gaming.com/">
			   <input type="button" style="cursor: pointer;" value="Back2Site!" />
			</a>
		</p>
	</center>
</p>
	
<!---<center><button class="nicetoo" onclick="returned();">RESTART</button></center>--->

</body>