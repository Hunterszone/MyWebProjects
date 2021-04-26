<?php           
                require_once('../auth/authentication.php');
                require_once('../account/member.php');
				require_once('../util/geoplugin.class.php');
	
				$geoplugin = new geoPlugin();
				$geoplugin->locate();
				$remoteIp = htmlspecialchars($_SERVER['REMOTE_ADDR']);
				//$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=". getUserIpAddr());

                echo "<center>";
                echo "<span style='font-size:20px'>";
                echo "<p>Welcome, " . htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');
                echo "!</p>";
				echo "<p>Your personal ID is: " . htmlspecialchars($_SESSION['SESS_MEMBER_ID'], ENT_QUOTES, 'UTF-8');
                echo "</p>";
				echo "<p>Your password is: " . htmlspecialchars($_SESSION['SESS_PASSWORD'], ENT_QUOTES, 'UTF-8');
                echo "</p>";
                echo "<p>Your email is: " . htmlspecialchars($_SESSION['SESS_EMAIL'], ENT_QUOTES, 'UTF-8');
                echo "</p>";
                echo "<p>Your hostname is: " . htmlspecialchars($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8');
                echo "</p>";
                echo "<p>Your remote IP address is: " . htmlspecialchars($remoteIp, ENT_QUOTES, 'UTF-8');
                echo "</p>";
				echo "<p>Your client IP address is: {$geoplugin->ip}";
                echo "</p>";
				echo "<p>Country of origin: {$geoplugin->countryName}";
                echo "</p>";
				echo "<p>City of origin: {$geoplugin->city}";
                echo "</p>";
                echo "</center>";
                echo "</font>";
				
				function getUserIpAddr(){
					if(!empty($_SERVER['HTTP_CLIENT_IP'])){
						//ip from share internet
						$ip = $_SERVER['HTTP_CLIENT_IP'];
					}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
						//ip pass from proxy
						$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
					}else{
						$ip = $_SERVER['REMOTE_ADDR'];
					}
					return $ip;
				}
                
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
