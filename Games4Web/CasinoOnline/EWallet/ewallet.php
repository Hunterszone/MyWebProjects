<?php
	
    require('connection.php');
	
		//Create array to store validation errors
		$errmsg_arr = array();
	 
		//Validation error flag
		$errflag = false;
		
        $money = $_POST['cash'];
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
		function print(){
			console.log("Bankroll: " + bankroll);
		}
	</script>
</head>

<body>
	<div class="wallet-container text-center">
		<p class="page-title"><i class="fa fa-align-left"></i><a href="#" onclick="print();">My E-wallet</a></p>

		<div class="amount-box text-center">
			<img src="https://lh3.googleusercontent.com/ohLHGNvMvQjOcmRpL4rjS3YQlcpO0D_80jJpJ-QA7-fQln9p3n7BAnqu3mxQ6kI4Sw" alt="wallet">
			<p>Total Balance : <?php echo $_POST['bankroll'] ?> $</p>
			<!--<p id=bankroll class="amount">$ 0</p>-->
		</div>

		<div class="btn-group text-center">
			<button type="button" class="btn btn-outline-light">Add Money</button>
			<button type="button" class="btn btn-outline-light">Widthdraw</button>
			</div>

			<div class="txn-history">
				<p><b>History</b></p>
				<p class="txn-list">Payment to xyz shop<span class="debit-amount">-$100</span></p>

				<p class="txn-list">Payment to abc shop<span class="debit-amount">-$150</span></p>

				<p class="txn-list">Credit From abc ltd<span class="credit-amount">+$300</span></p>

				<p class="txn-list">Transfer From John Doe<span class="credit-amount">+$100</span></p>
			</div>

			<div class="footer-menu">
				<div class="row text-center">
					<div class="col-md-3">
						<i class="fa fa-home"></i>
						<a href="../home.html">Home</a>
					</div>

					<div class="col-md-3">
						<i class="fa fa-inbox"></i>
						<a href="../home.html">Inbox</a>
					</div>

					<div class="col-md-3">
						<i class="fa fa-university"></i>
						<a href="../home.html">Bank</a>
					</div>

					<div class="col-md-3">
						<i class="fa fa-bell"></i>
						<a href="../home.html">Alerts</a>
					</div>
				</div>
			</div>
</div>
<script src="../crazy.js"></script>
<script src="../casinojs.js"></script>
</body>