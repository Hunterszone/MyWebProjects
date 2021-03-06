<?php
	
    require('../EWallet/connection.php');
	
	//Create array to store validation errors
	$errmsg_arr = array();
	 
	//Validation error flag
	$errflag = false;
	
	$queryDeposit = "SELECT * FROM wallet AS w WHERE w.amount !='' ORDER BY id DESC limit 1";
    $resultDeposit = mysqli_query($conn,$queryDeposit);
	$row = mysqli_fetch_array($resultDeposit);

	$conn->close();
	
?>


<html lang="en" dir="ltr">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>WheelOfFortune</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
		<link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
        <link rel="stylesheet" href="main.css" type="text/css" />
        <script type="text/javascript" src="Winwheel.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>		
    </head>
    <body>
	<!-- navbar -->
<form id="navBarForm" action="../EWallet/ewallet.php" method="post">
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
				  <a class="nav-link " data-value="Genie" href="../home.html#Genie">Magical numbers</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link " data-value="Carousel" href="../home.html#carousel">Stars of fortune</a> </li>
				<li class="nav-item">
				<li class="nav-item">
				  <a class="nav-link " data-value="WheelOfFortune" href="#">Wheel of fortune</a> </li>
				<li class="nav-item">
					<a class="nav-link " data-value="Roulette" href="../Roulette/roulette.php#Roulette">Casino Roulette</a> </li>
				<li class="nav-item">
				<li><a class="nav-link " data-value="Crazy" href="../slotMachine.php">Slot machine</a> </li>
				<li class="nav-item">
				  <a class="nav-link " data-value="PokerJs" href="../PokerJS/poker.html#PokerJs">Texas Hold'em</a> </li>				  
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
		<br><br><br>
        <div align="center">
            <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>
                    <div class="power_controls">
                        <br />
                        <br />
                        <table class="power" cellpadding="10" cellspacing="0">
                            <tr>
                                <th align="center">Power</th>
                            </tr>
                            <tr>
                                <td width="78" align="center" id="pw3" onClick="powerSelected(3);">High</td>
                            </tr>
                            <tr>
                                <td align="center" id="pw2" onClick="powerSelected(2);">Med</td>
                            </tr>
                            <tr>
                                <td align="center" id="pw1" onClick="powerSelected(1);">Low</td>
                            </tr>
                        </table>
                        <br />
							<img id="spin_button" style="cursor:pointer" src="spin_on.png" alt="Spin" onClick="startSpin();" />
                        <!--<br /><br />
                        &nbsp;&nbsp;<a href="#" onClick="resetWheel(); return false;">Play Again</a><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(reset)-->
                    </div>
					<br>
					<div>   		
					  <button class="btn btn-lg btn-success" id=increasebet>Increase bet</button>
					  <button class="btn btn-lg btn-success" id=decreasebet>Decrease bet</button>
					  </br></br>
					  <p style="color:white" id=currentbet>Current bet: $5</p>
					  </br>
					  <p style="color:red">HANDICAP: BET X2!</p>
  				    </div>
                </td>
                <td width="438" height="582" class="the_wheel" align="center" valign="center">
                    <canvas id="canvas" width="434" height="434">
                        <p style="{color: white}" align="center">Sorry, your browser doesn't support canvas. Please try another.</p>
                    </canvas>
                </td>
            </tr>
        </table>
  </div>
  <audio id="audio4" src="../mp3/tick.mp3" ></audio>
  <audio id="audio5" src="../mp3/darkhorse.mp3" ></audio>
  <audio id="audio6" src="../mp3/darkhorsewin.mp3" ></audio>
  <audio id="audio7" src="../mp3/explosion.wav" ></audio>
  <audio id="audio8" src="../mp3/winJackpot.mp3" ></audio>
  <audio id="audio9" src="../mp3/coin.mp3" ></audio>
        <script>
			
            // Create new wheel object specifying the parameters at creation time.
            let theWheel = new Winwheel({
                'outerRadius'     : 212,        // Set outer radius so wheel fits inside the background.
                'innerRadius'     : 75,         // Make wheel hollow so segments don't go all way to center.
                'textFontSize'    : 24,         // Set default font size for the segments.
                'textOrientation' : 'vertical', // Make text vertial so goes down from the outside of wheel.
                'textAlignment'   : 'outer',    // Align text to outside of wheel.
                'numSegments'     : 24,         // Specify number of segments.
                'segments'        :             // Define segments including colour and text.
                [                               // font size and test colour overridden on backrupt segments.
                   {'fillStyle' : '#ee1c24', 'text' : '300'},
                   {'fillStyle' : '#3cb878', 'text' : '450'},
                   {'fillStyle' : '#f6989d', 'text' : '600'},
                   {'fillStyle' : '#00aef0', 'text' : '750'},
                   {'fillStyle' : '#f26522', 'text' : '500'},
                   {'fillStyle' : '#000000', 'text' : 'BANKRUPT', 'textFontSize' : 16, 'textFillStyle' : '#ffffff'},
                   {'fillStyle' : '#e70697', 'text' : '3000'},
                   {'fillStyle' : '#fff200', 'text' : '600'},
                   {'fillStyle' : '#f6989d', 'text' : '700'},
                   {'fillStyle' : '#ee1c24', 'text' : '350'},
                   {'fillStyle' : '#3cb878', 'text' : '500'},
                   {'fillStyle' : '#f26522', 'text' : '800'},
                   {'fillStyle' : '#a186be', 'text' : '300'},
                   {'fillStyle' : '#fff200', 'text' : '400'},
                   {'fillStyle' : '#00aef0', 'text' : '650'},
                   {'fillStyle' : '#ee1c24', 'text' : '1000'},
                   {'fillStyle' : '#f6989d', 'text' : '500'},
                   {'fillStyle' : '#f26522', 'text' : '400'},
                   {'fillStyle' : '#3cb878', 'text' : '900'},
                   {'fillStyle' : '#e70697', 'text' : 'JACKPOT', 'textFontSize' : 16},
                   {'fillStyle' : '#a186be', 'text' : '600'},
                   {'fillStyle' : '#fff200', 'text' : '700'},
                   {'fillStyle' : '#00aef0', 'text' : '800'},
                   {'fillStyle' : '#ffffff', 'text' : 'LOOSE TURN', 'textFontSize' : 12}
                ],
                'animation' :           // Specify the animation to use.
                {
                    'type'     : 'spinToStop',
                    'duration' : 10,    // Duration in seconds.
                    'spins'    : 3,     // Default number of complete spins.
                    'callbackFinished' : alertPrize,
                    'callbackSound'    : playSound,   // Function to call when the tick sound is to be triggered.
                    'soundTrigger'     : 'pin'        // Specify pins are to trigger the sound, the other option is 'segment'.
                },
                'pins' :				// Turn pins on.
                {
                    'number'     : 24,
                    'fillStyle'  : 'silver',
                    'outerRadius': 4,
                }
            });

            // Loads the tick audio sound in to an audio object.
            let audio = new Audio('../mp3/tick.mp3');

            // This function is called when the sound is to be played.
            function playSound()
            {
                // Stop and rewind the sound if it already happens to be playing.
                audio.pause();
                audio.currentTime = 0;

                // Play the sound.
                audio.play();
            }

            // Vars used by the code in this page to do power controls.
            let wheelPower    = 0;
            let wheelSpinning = false;

            // -------------------------------------------------------
            // Function to handle the onClick on the power buttons.
            // -------------------------------------------------------
            function powerSelected(powerLevel)
            {
                // Ensure that power can't be changed while wheel is spinning.
                if (wheelSpinning == false) {
                    // Reset all to grey incase this is not the first time the user has selected the power.
                    document.getElementById('pw1').className = "";
                    document.getElementById('pw2').className = "";
                    document.getElementById('pw3').className = "";

                    // Now light up all cells below-and-including the one selected by changing the class.
                    if (powerLevel >= 1) {
                        document.getElementById('pw1').className = "pw1";
                    }

                    if (powerLevel >= 2) {
                        document.getElementById('pw2').className = "pw2";
                    }

                    if (powerLevel >= 3) {
                        document.getElementById('pw3').className = "pw3";
                    }

                    // Set wheelPower var used when spin button is clicked.
                    wheelPower = powerLevel;

                    // Light up the spin button by changing it's source image and adding a clickable class to it.
                    document.getElementById('spin_button').src = "spin_on.png";
                    document.getElementById('spin_button').className = "clickable";
                }
            }

            // -------------------------------------------------------
            // Click handler for spin button.
            // -------------------------------------------------------
            function startSpin()
            {
				win = multiplier * 5;
				bankroll -= initialbet;
				document.getElementById("jackpot").innerHTML = "Jackpot: $" + (jackpotmoney + bankroll);
                // Ensure that spinning can't be clicked again while already running.
                if (wheelSpinning == false) {
                    // Based on the power level selected adjust the number of spins for the wheel, the more times is has
                    // to rotate with the duration of the animation the quicker the wheel spins.
                    if (wheelPower == 1) {
                        theWheel.animation.spins = 3;
                    } else if (wheelPower == 2) {
                        theWheel.animation.spins = 6;
                    } else if (wheelPower == 3) {
                        theWheel.animation.spins = 10;
                    }

                    // Disable the spin button so can't click again while wheel is spinning.
                    document.getElementById('spin_button').src       = "spin_on.png";
                    document.getElementById('spin_button').className = "";

                    // Begin the spin animation by calling startAnimation on the wheel object.
                    theWheel.startAnimation();

                    // Set to true so that power can't be changed and spin button re-enabled during
                    // the current animation. The user will have to reset before spinning again.
                    wheelSpinning = true;
                }
            }

            // -------------------------------------------------------
            // Function for reset button.
            // -------------------------------------------------------
            function resetWheel()
            {
                theWheel.stopAnimation(false);  // Stop the animation, false as param so does not call callback function.
                theWheel.rotationAngle = 0;     // Re-set the wheel angle to 0 degrees.
                theWheel.draw();                // Call draw to render changes to the wheel.

                document.getElementById('pw1').className = "";  // Remove all colours from the power level indicators.
                document.getElementById('pw2').className = "";
                document.getElementById('pw3').className = "";

                wheelSpinning = false;          // Reset to false to power buttons and spin can be clicked again.
            }

            // -------------------------------------------------------
            // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters.
            // -------------------------------------------------------
            function alertPrize(indicatedSegment)
            {
                // Just alert to the user what happened.
                // In a real project probably want to do something more interesting than this with the result.
                if (indicatedSegment.text == 'LOOSE TURN') {
                    alert('Sorry but you loose a turn.');
					resetWheel();
                } else if (indicatedSegment.text == 'BANKRUPT') {
					stopmusic5();
					playmusic7();
                    alert('Oh no, you have gone BANKRUPT!');
					document.getElementById("bankroll").innerHTML = "$" + 0;
					bankroll = 0;
					resetWheel();
                } else if (indicatedSegment.text == 'JACKPOT') {
					stopmusic5();
					playmusic8();
                    alert('Congratulations, its a JACKPOT!');
					document.getElementById("bankroll").innerHTML = "$" + 50000;
					bankroll = 50000;
					document.getElementById("jackpot").innerHTML = "Jackpot: $" + 0;
					jackpot = 0;
					jackpotmoney = 0;
					resetWheel();
                } else {
					document.getElementById("bankroll").innerHTML = "$" + indicatedSegment.text;
					bankroll = indicatedSegment.text;
					stopmusic5();
					playmusic6();
                    alert("You have won " + indicatedSegment.text);
					resetWheel();
                }
            }
			
			var images = new Array();

			images[0] = new Image();
			images[0].src = 'spin_on.png';

			document.images[0].addEventListener('click', function() {
			  stopmusic6();
			  playmusic5();
			  resetWheel();
			  if (bankroll < 5) {
				alert(" minimum bet for this game is $10, deposit first please")
			  } else {
				startSpin();
				document.getElementById("bankroll").innerHTML = "$" + bankroll;
			  }
			});
			
			
        </script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	    <script src="../crazy.js"></script>
			
    </body>
	
</html>
