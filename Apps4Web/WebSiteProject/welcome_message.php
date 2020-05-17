<?php           
                require_once('authentication.php');
                require_once('member.php');
                
                echo "<center>";
                echo "<span style='font-size:20px'>";
                echo "<p>Welcome, " . htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');
                echo "!</p>";
                echo "<p>Your hostname is: " . htmlspecialchars($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8');
                echo "</p>";
                $ip = gethostbyname($_SERVER['SERVER_NAME']);
                echo "<p>Your IP address is: " . htmlspecialchars($ip, ENT_QUOTES, 'UTF-8');
                echo "</p>";
                echo "<p>Your email is: " . htmlspecialchars($_SESSION['SESS_EMAIL'], ENT_QUOTES, 'UTF-8');
                echo "</p>";
                echo "<p>Your personal ID is: " . htmlspecialchars($_SESSION['SESS_MEMBER_ID'], ENT_QUOTES, 'UTF-8');
                echo "</p>";
                echo "</center>";
                echo "</font>";
                
?>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <style type="text/css">

		body { 
		background: url(book-carousel.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		}
                                                        
</style>
    <title></title>
  </head>
  <body></body>
</html>
