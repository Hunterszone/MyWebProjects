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
	
	
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BET4MORE</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
</head>

<body>
  <!-- navbar -->
		
<form id="navBarForm" action="EWallet/ewallet.php" method="post">
  <nav class="navbar navbar-expand-lg fixed-top ">
	<button id=deposit type="button" class="btn btn-lg navbar-brand">Deposit</button>
	<button id=deposit class="btn btn-lg navbar-brand" name="bankroll">E-Wallet</button>
	<h2 id=bankroll class="nav-brand">Credit: $ <?php echo end($row) ?></h2>
  <!--<button id=deposit type="button" class="btn btn-lg navbar-brand" name="button" onclick="cashOut();">CashOut</button>-->
    <h2 class="flash nav-brand" id=jackpot>Jackpot: $50000</h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-4">
		<li class="nav-item">
          <a class="nav-link " data-value="Genie" href="#Genie">Magical numbers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-value="Carousel" href="home.html#carousel">Stars of fortune</a> </li>
        <li class="nav-item">
		<li class="nav-item">
          <a class="nav-link " data-value="WheelOfFortune" href="WheelOfFortune/wheelOfFortune.php#WheelOfFortune">Wheel of fortune</a> </li>
		<li class="nav-item">
          <a class="nav-link " data-value="Roulette" href="Roulette/roulette.php#Roulette">Casino Roulette</a> </li>
			<a class="nav-link " data-value="Crazy" href="slotMachine.php">Slot machine</a> </li>
		<li class="nav-item">
          <a class="nav-link " data-value="PokerJs" href="PokerJS/poker.html#PokerJs">Texas Hold'em</a> </li>
      </ul>
    </div>
	<li class="list-inline-item">
		<a href="#!" class="btn btn-success btn-rounded" onclick="window.location.href='../'" value="qrCode"><b>Logout</b></a>
	</li>
  </nav>
</form>
        
  <!-- header background img -->
  
  <header id=header>
    <!--<img class="img-fluid" src="img/casino1.jpg">-->
			<div>
					<!--<button onclick="location.href='#carousel'" style="text-decoration:none;" type="button" class="fancy">PLAY NOW</button>-->	
				<input type="image" onclick="location.href='#Genie'" class="fancy" src="img/playNow.png" />
			</div>
	   <!--<button id=buttonmain onclick="location.href='#carousel'" type="button" class="btn btn-warning">Play now</button>-->
  </header>


  <div class="container-fluid  About" id=About>
    <div class="description">
    <x-sign id=fancy>
      1$ BONUS PER DEPOSIT!
    </x-sign>
    <h1>Welcome to BET4MORE casino. Good luck and have fun!</h1>
    <p>Deposit first. Choose the game you want to play. Remember progressive jackpot increases with each and every single spin!</p>
    </div>
  </div>


  <!--  Magical numbers game-->
  <div class="wrapper">
    <div class="Genie jackpot" id=Genie>
      <div class="container text-center" id=magicalcontainer>
        <div class="row">
          <x-sign class="col text-center" id=fancy1>
            Magical numbers
          </x-sign>
          <div class="col-12">
            <button id=button type="button" class="btn btn-primary btn-lg" name="button">Play</button>
            <h1 id=info>Magical numbers are waiting for you!!</h1>
            <button id=special type="button" class="btn btn-primary btn-lg" name="button">Your extra spin! Click here!</button>
          </div>
          <div class="col-12">
            <h1 style="color:red" id=number class="animated pulse infinite">777777</h1>
            <div id=svg>
      <!-- Generator: SVG Circus (http://svgcircus.com) -->
      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
      <svg id="SVG-Circus-1210ca36-f756-6c40-bfc4-26aaa8fdb58d" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid meet"><circle id="actor_2" cx="50" cy="50" r="25" opacity="1" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(166,3,17,1)" stroke-width="7" stroke-opacity="1" stroke-dasharray="22 30"></circle><circle id="actor_1" cx="50" cy="50" r="12.5" opacity="1" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(166,3,17,1)" stroke-width="7" stroke-opacity="1" stroke-dasharray="13 13"></circle><script type="text/ecmascript"><![CDATA[(function(){var actors={};actors.actor_1={node:document.getElementById("SVG-Circus-1210ca36-f756-6c40-bfc4-26aaa8fdb58d").getElementById("actor_1"),type:"circle",cx:50,cy:50,dx:25,dy:28,opacity:1};actors.actor_2={node:document.getElementById("SVG-Circus-1210ca36-f756-6c40-bfc4-26aaa8fdb58d").getElementById("actor_2"),type:"circle",cx:50,cy:50,dx:50,dy:28,opacity:1};var tricks={};tricks.trick_1=(function(t,a){a=(function(n){return n})(a)%1,a=a*2%1,a=0>a?1+a:a;var M=a*1*360*Math.PI/180,i=t._tMatrix,_=Math.cos(M),c=Math.sin(M),x=-Math.sin(M),s=Math.cos(M),h=-t.cx*Math.cos(M)+t.cy*Math.sin(M)+t.cx,n=-t.cx*Math.sin(M)-t.cy*Math.cos(M)+t.cy,r=i[0]*_+i[2]*c,o=i[1]*_+i[3]*c,y=i[0]*x+i[2]*s,f=i[1]*x+i[3]*s,d=i[0]*h+i[2]*n+i[4],e=i[1]*h+i[3]*n+i[5];t._tMatrix[0]=r,t._tMatrix[1]=o,t._tMatrix[2]=y,t._tMatrix[3]=f,t._tMatrix[4]=d,t._tMatrix[5]=e});tricks.trick_2=(function(t,a){a=(function(n){return n})(a)%1,a=a*1%1,a=0>a?1+a:a;var M=a*-1*360*Math.PI/180,i=t._tMatrix,_=Math.cos(M),c=Math.sin(M),x=-Math.sin(M),s=Math.cos(M),h=-t.cx*Math.cos(M)+t.cy*Math.sin(M)+t.cx,n=-t.cx*Math.sin(M)-t.cy*Math.cos(M)+t.cy,r=i[0]*_+i[2]*c,o=i[1]*_+i[3]*c,y=i[0]*x+i[2]*s,f=i[1]*x+i[3]*s,d=i[0]*h+i[2]*n+i[4],e=i[1]*h+i[3]*n+i[5];t._tMatrix[0]=r,t._tMatrix[1]=o,t._tMatrix[2]=y,t._tMatrix[3]=f,t._tMatrix[4]=d,t._tMatrix[5]=e});var scenarios={};scenarios.scenario_1={actors: ["actor_1"],tricks: [{trick: "trick_2",start:0,end:1}],startAfter:0,duration:1000,actorDelay:0,repeat:0,repeatDelay:0};scenarios.scenario_2={actors: ["actor_2"],tricks: [{trick: "trick_1",start:0,end:1}],startAfter:0,duration:1000,actorDelay:0,repeat:0,repeatDelay:0};var _reqAnimFrame=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.oRequestAnimationFrame,fnTick=function(t){var r,a,i,e,n,o,s,c,m,f,d,k,w;for(c in actors)actors[c]._tMatrix=[1,0,0,1,0,0];for(s in scenarios)for(o=scenarios[s],m=t-o.startAfter,r=0,a=o.actors.length;a>r;r++){if(i=actors[o.actors[r]],i&&i.node&&i._tMatrix)for(f=0,m>=0&&(d=o.duration+o.repeatDelay,o.repeat>0&&m>d*o.repeat&&(f=1),f+=m%d/o.duration),e=0,n=o.tricks.length;n>e;e++)k=o.tricks[e],w=(f-k.start)*(1/(k.end-k.start)),tricks[k.trick]&&tricks[k.trick](i,Math.max(0,Math.min(1,w)));m-=o.actorDelay}for(c in actors)i=actors[c],i&&i.node&&i._tMatrix&&i.node.setAttribute("transform","matrix("+i._tMatrix.join()+")");_reqAnimFrame(fnTick)};_reqAnimFrame(fnTick);})()]]></script></svg>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer id=footer class="page-footer font-small stylish-color-dark pt-4">
  
    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">BET4MORE</h5>
          <p>For help, support and advice about problem gambling please contact the National Gambling Helpline on 0808 8020 133 or via the NetLine.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">About</a>
            </li>
            <li>
              <a href="#!">Witdrawal policy</a>
            </li>
            <li>
              <a href="#!">Faq</a>
            </li>
            <li>
              <a href="#!">Careers</a>
            </li>
          </ul>

        </div>

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
	  <li class="list-inline-item">
			<a href="#"><img id="toTop" src="img/scroll-to-top.gif" title="Back to top" style="width: 70px; height: 70px;"></a>
	  </li>
    </ul>
    <!-- Call to action -->

    <hr>

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2021 Copyright:
      <a href="http://me4gaming.com/" target="_blank"> Me4Gaming.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <audio id="audio" src="mp3/suspense.mp3" ></audio>
  <audio id="audio2" src="mp3/duel.mp3" ></audio>
  <audio id="audio3" src="mp3/gucci.mp3" ></audio>
  <audio id="audio4" src="mp3/darkhorse.mp3" ></audio>
  <audio id="audio5" src="mp3/darkhorsewin.mp3" ></audio>
  <audio id="audio6" src="mp3/coin.mp3" ></audio>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="casinojs.js"></script>
  <script src="crazy.js"></script>

</body>

</html>