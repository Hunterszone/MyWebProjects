<?php
	
    require('EWallet/connection.php');
	
	//Create array to store validation errors
	$errmsg_arr = array();
	 
	//Validation error flag
	$errflag = false;
	
	$queryDeposit = "SELECT * FROM wallet AS w WHERE w.amount !='' ORDER BY id DESC limit 1";
    $resultDeposit = mysqli_query($conn,$queryDeposit);
	$row = mysqli_fetch_array($resultDeposit);

	$conn->close();
	
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Slot machine</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/crazystyle.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
</head>

<body>

  <!-- navbar -->
<form id="navBarForm" action="EWallet/ewallet.php" method="post">
  <nav class="navbar navbar-expand-lg fixed-top ">
    <button id=deposit type="button" class="btn btn-lg navbar-brand" name="button">Deposit</button>
	<button id=deposit class="btn btn-lg navbar-brand" name="bankroll" data-value="EWallet" value="">E-Wallet</button>
	<!--<button id=deposit type="button" class="btn btn-lg navbar-brand" name="button" onclick="cashOut();">CashOut</button>-->
    <h2 id=bankroll class="nav-brand">Credit: $ <?php echo end($row) ?></h2>
    <h2 class="flash nav-brand" id=jackpot>Jackpot: $50000</h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-4">
        <li class="nav-item">
          <a class="nav-link " data-value="Genie" href="home.html#Genie">Magical numbers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-value="Carousel" href="home.html#carousel">Stars of fortune</a> </li>
        <li class="nav-item">
          <a class="nav-link " data-value="WheelOfFortune" href="WheelOfFortune/wheelOfFortune.php#WheelOfFortune">Wheel of fortune</a> </li>
		<li class="nav-item">
          <a class="nav-link " data-value="Roulette" href="Roulette/index.html#Roulette">Casino Roulette</a> </li>
		<li class="nav-item">		
		  <a class="nav-link " data-value="Crazy" href="#">Slot machine</a> </li>
		<li class="nav-item">
          <a class="nav-link " data-value="PokerJs" href="PokerJS/poker.html#PokerJs">Texas Hold'em</a> </li>
      </ul>
    </div>
	<li class="list-inline-item">
		<a href="#!" class="btn btn-success btn-rounded"><b>Sign in</b></a>
	</li>
	<li class="list-inline-item">
		<a href="#!" class="btn btn-primary btn-rounded"><b>Sign up</b></a>
	</li>
  </nav>
</form>

<div class="container" id=crazy>
  <div class="row">
  <div class="scene col-4">
  <div class="carousel">
    <div class="carousel__cell col-12"></div> <!--add col 4 or add another class before scene-->
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
    <div class="carousel__cell col-12"></div>
  </div>
</div>
<div class="scene col-4">
<div class="carousel2">
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
  <div class="carousel__cell2 col-12"></div>
</div>
</div>
<div class="scene col-4">
<div class="carousel3">
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
  <div class="carousel__cell3 col-12"></div>
</div>
</div>
</div>
<div class="row">
  <div class=" container text-center" id=footer>   <!-- Spin button, betsizing buttons, information tab and also special event which will be hidden.-->
    <h2><x-sign class="text-center" id=info>
      Super cool jackpot!
    </x-sign></h2>
	  <div> 
	   <button class="btn btn-lg btn-success" id=increasebet onclick="betincrease();">Increase bet</button>
	   <button class="btn btn-lg btn-success" id=decreasebet onclick="betdecrease();">Decrease bet</button>
	   <p id=currentbet>Current bet: $5</p>
	  </div> 
      <button class="next-button2" id=playbutton>SPIN</button>
      <div class="col-12" id=specialchest>  <!--special event uncle scroove, player will be able to pick up the random lucky chest which will contain randomly generated price, this event will be triggered through the game of chance itself-->
        <p id=specialchest_info>Uncle Scroove has got lucky chest for you! Pick one and enjoy your prize!</p>
        <button class="btn btn-lg btn-success" id=firstchest><i class="fa fa-gift fa-1x"></i></button>
        <button class="btn btn-lg btn-success" id=secondchest><i class="fa fa-gift fa-1x"></i></button>
        <button class="btn btn-lg btn-success" id=thirdchest><i class="fa fa-gift fa-1x"></i></button>
        <img id=uncle src="img/uncle.jpg">
        <button class="btn btn-lg btn-success" id=continue>Continue</button>
      </div>
  </div>
<div class="carousel-options">
  <p id=invisible>
    <label>
      Cells
      <input class="cells-range" type="range" min="3" max="15" value="10" />
    </label>
  </p>
  <p id=invisible>
    <button class="previous-button btn-lg">Previous</button>
    <button class="next-button btn-lg">Next</button>
  </p>
  <p id=invisible>
    Orientation:
    <label>
      <input type="radio" name="orientation" value="horizontal" />
      horizontal
    </label>
    <label>
      <input type="radio" name="orientation" value="vertical" checked />
      vertical
    </label>
  </p>
</div>
<div class="carousel-options">
  <p id=invisible>
    <label>
      Cells
      <input class="cells-range2" type="range" min="3" max="15" value="10" />
    </label>
  </p>
  <!--<p>
    <button class="next-button2 btn btn-lg btn-success" id=playbutton>Play</button>
  </p>-->
  <p id=invisible>
    Orientation:
    <label>
      <input type="radio" name="orientation" value="horizontal" />
      horizontal
    </label>
    <label>
      <input type="radio" name="orientation" value="vertical" checked />
      vertical
    </label>
  </p>
</div>
</div>
</div>


    <audio id="audio" src="mp3/darkhorse.mp3" ></audio>
    <audio id="audio2" src="mp3/duel.mp3" ></audio>
    <audio id="audio3" src="mp3/coin.mp3" ></audio>
	<audio id="audio4" src="mp3/tick.mp3" ></audio>
	<audio id="audio9" src="mp3/coin.mp3" ></audio>
	<audio id="audio10" src="mp3/slotTurn.mp3" ></audio>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
	<script src="crazy.js"></script>

  </body>

</html>