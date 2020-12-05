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

<style>

* {
  box-sizing: border-box;
}

:root {
  --background: #E5FFB3;
  --background-accent: #DBF8A3;
  --background-accent-2: #BDE66E;
  --light: black;
  --dark: red;
  --text: yellow;
}

div {
  display: block;
  width: 400px;
  margin: 0 auto 0 auto;
  position: absolute;
  left: 0;
  right: 0;
  top: 30vh;
}

.fancy {
  display: block;
  cursor: pointer;
  outline: none;
  border: none;
  background-color: var(--light);
  width: 400px;
  height: 70px;
  border-radius: 30px;
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--text);
  background-size: 100% 100%;
  box-shadow: 0 0 0 7px var(--light) inset;
  margin-bottom: 15px;
  text-decoration: none;
  opacity: .4;
}

.fancy:hover {
  background-image: linear-gradient(
    145deg,
    transparent 10%,
    var(--dark) 10% 20%,
    transparent 20% 30%,
    var(--dark) 30% 40%,
    transparent 40% 50%,
    var(--dark) 50% 60%,
    transparent 60% 70%,
    var(--dark) 70% 80%,
    transparent 80% 90%,
    var(--dark) 90% 100%
  );
  animation: background 3s linear infinite;
  text-decoration: none;
}

@keyframes background {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 400px 0;
  }
}

</style>

</head>

<body background="images/background.jpg">

<p></br>
	<center><font size="6"><font color="yellow">Thank you for voting!</font></font>
			<font size="6"><font color="yellow">You gave us <?php echo $_POST['star'] ?>!</font></font>
		<p>
			<div>
				<a href="./game1.html" style="text-decoration:none;">
					<button class="fancy">BACK TO GAME</button>
				</a>
			</div>
						
			<!-- <a href="http://me4gaming.com/">
			   <input type="button" style="cursor: pointer;" value="Back2Site!" />
			</a> -->
		</p>
	</center>
</p>
	
<!---<center><button class="nicetoo" onclick="returned();">RESTART</button></center>--->

</body>