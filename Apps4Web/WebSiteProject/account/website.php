<?php
    	require_once('../auth/authentication.php');
		echo "Welcome, " . htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');

    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Login success</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="../../css/particles.css">
		<script src= "https://github.com/VincentGarreau/particles.js"></script>
		<title>Untitled Document</title>
		<style type="text/css">
		.style1 {
			font-size: 36px;
			font-weight: bold;
			color: #eb7434;
		}
		.style2 {
			font-size: 20px;
			color: #ffffff;
		}
		</style>
	</head>

	<body background="./img/book-carousel.jpg">
		<p align="center" class="style1">Login successful</p>

		<p align="center" class="style2"><a href="../auth/user_login.php">Go to user profile</a></p>
		<p align="center" class="style2"><a href="../index.php">Logout</a></p>

		<!-- CSS for BACKGROUND -->

		<style type="text/css">

body { 
background-image: url("./img/book-carousel.jpg") no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}

		</style> 
		<div id="particles-js"></div>
      <!-- scripts -->
      <script src="../js/particles.js"></script>
      <script src="../js/app.js"></script>
      <!-- stats.js -->
      <!--<script src="js/lib/stats.js"></script>-->
      <script>
         var count_particles, stats, update;
         stats = new Stats;
         stats.setMode(0);
         stats.domElement.style.position = 'absolute';
         stats.domElement.style.left = '0px';
         stats.domElement.style.top = '0px';
         document.body.appendChild(stats.domElement);
         count_particles = document.querySelector('.js-count-particles');
         update = function() {
         stats.begin();
         stats.end();
         if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
          count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
         }
         requestAnimationFrame(update);
         };
         requestAnimationFrame(update);
      </script>
	</body>
</html>