<?php
	
    require('connection.php');
	
		//Create array to store validation errors
		$errmsg_arr = array();
	 
		//Validation error flag
		$errflag = false;
		
        $money = $_POST['bankroll'];
		$query = "INSERT INTO wallet (amount) VALUES('$money')";
        $result = mysqli_query($conn,$query);
			
	$conn->close();

?>

<html>

<head>
	<meta charset="UTF-8">
	<title>E-wallet</title>
	<link rel="stylesheet" href="E-wallet.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script>		
		var calc = parseInt("<?php echo $_POST['bankroll'] ?>") / 4;
		
		window.onload = function() {
    	   document.getElementById("myScore").innerHTML="$ " + calc;
		   document.getElementById("myScore2").innerHTML="$ " + calc;
		   document.getElementById("myScore3").innerHTML="$ " + calc;
		   document.getElementById("myScore4").innerHTML="$ " + calc;
		} 
		
	</script>
</head>

<body>
	<div class="wallet-container text-center">
		<p class="page-title"><i class="fa fa-align-left"></i><a href="#" onclick="print();">My E-wallet</a></p>

		<div class="amount-box text-center">
			<img src="../img/wallet.png" alt="wallet">
			<h4><p>Total Balance : <?php echo $_POST['bankroll'] ?> $</p></h4>
			<!--<p id=bankroll class="amount">$ 0</p>-->
		</div>

		<div class="btn-group text-center">
			<!--<button id=deposit type="button" name="button" class="btn btn-outline-light">Add Money</button>-->
			<button type="button" class="btn btn-outline-light" onclick="window.location.href='https://www.payoneer.com/raf/?rid=62510A8E-D0B3-4483-98C5-A8E0938653B9'" target="_blank">Widthdraw</button>
			</div>

			<div class="txn-history">
				<p><b>History</b></p>
				<p class="txn-list">Balance for Magical numbers<span id="myScore" class="credit-amount"></span></p>

				<p class="txn-list">Balance for Stars of fortune<span id="myScore2" class="credit-amount"></span></p>

				<p class="txn-list">Balance for Wheel of fortune<span id="myScore3" class="credit-amount"></span></p>

				<p class="txn-list">Balance for slot machine<span id="myScore4" class="credit-amount"></span></p>
			</div>

			<div class="footer-menu">
				<div class="row text-center">
					<div class="col-md-3">
						<i class="fa fa-home"></i>
						<a href="../index.php">Home</a>
					</div>

					<div class="col-md-3">
						<i class="fa fa-inbox"></i>
						<a href="https://www.mailinator.com/v4/public/inboxes.jsp?to=BET4MORE" target="_blank">Inbox</a>
					</div>

					<div class="col-md-3">
						<i class="fa fa-university"></i>
						<a href="https://www.payoneer.com/raf/?rid=62510A8E-D0B3-4483-98C5-A8E0938653B9" target="_blank">Bank</a>
					</div>

					<div class="col-md-3">
						<i class="fa fa-bell"></i>
						<a href="http://alert-generator.feedsynews.com/" target="_blank">Alerts</a>
					</div>
				</div>
			</div>
</div>
<script src="../crazy.js"></script>
<script src="../casinojs.js"></script>
</body>