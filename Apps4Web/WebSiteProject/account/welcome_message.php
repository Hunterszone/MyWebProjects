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
                echo "<p><b>Welcome, " . htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');
                echo "!</b></p>";
				echo "<table style='width:100%; border:1px solid black;'>";
				echo "<tr><th>Personal ID</th>";
				echo "<th>Password</th>";
				echo "<th>Email</th>";
				echo "<th>Hostname</th>";
				echo "<th>Remote IP</th>";
				echo "<th>Client IP</th>";
				echo "<th>Country</th>";
				echo "<th>City</th></tr>";
				echo "<tr><td>";
				echo "<center>";
				echo htmlspecialchars($_SESSION['SESS_MEMBER_ID'], ENT_QUOTES, 'UTF-8');
				echo "</center>";
				echo "</td>";
				echo "<td>";
				echo "<center>";
				echo htmlspecialchars($_SESSION['SESS_PASSWORD'], ENT_QUOTES, 'UTF-8');
				echo "</center>";
				echo "</td>";
				echo "<td>";
				echo "<center>";
				echo htmlspecialchars($_SESSION['SESS_EMAIL'], ENT_QUOTES, 'UTF-8');
				echo "</center>";
				echo "</td>";
				echo "<td>";
				echo "<center>";
				echo htmlspecialchars($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8');
				echo "</center>";
				echo "</td>";
				echo "<td>";
				echo "<center>";
				echo htmlspecialchars($remoteIp, ENT_QUOTES, 'UTF-8');
				echo "</center>";
				echo "</td>";
				echo "<td>";
				echo "<center>{$geoplugin->ip}</center>";
				echo "</td>";
				echo "<td>";
				echo "<center>{$geoplugin->countryName}</center>";
				echo "</td>";
				echo "<td>";
				echo "<center>{$geoplugin->city}</center>";
				echo "</td></tr>";
				echo "</table>";
				echo "</center>";
                echo "</font>";
				echo "<p>";
				echo "<center>";
				echo "<img src= '../uploads/".$pic."' style='border-radius: 8px; max-width: 100%; max-height: 100%; margin: auto;'>";
				echo "</center>";
				echo "</p>";
				echo "<p>";
				echo "<form action='welcome_message.php' method='post' enctype='multipart/form-data'>";
				echo "<div align='center'>";
				echo "<input type='file' name='fileToUpload' />";
				echo "<input type='submit' name='changePic' value='Change pic' />";
				echo "</div>";
				echo "</form>";
				echo "</p>";
				
				if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['changePic']))
				{
					changeProfPic();
				}
				function changeProfPic()
				{
					$host = 'localhost';
					$user = 'root';
					$pass = 'root';
					$db = 'phpwebsite';
					$prefix = "";
					$conn = new mysqli($host, $user, $pass, $db, 3306) or die("Could not connect to the database");
					//$username = htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');
					$userId = htmlspecialchars($_SESSION['SESS_MEMBER_ID']);

					//file name
					$filename = $_FILES['fileToUpload']['name'];
					$temp_name = $_FILES['fileToUpload']['tmp_name'];
					$folder = "../uploads/".$filename;
					//get file type
					$fileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

					//check file type
					if ($fileType != 'jpg' && $fileType != 'png' && $fileType !='jpeg' && $fileType!='gif') {
						echo '<script language="javascript">';
						echo 'alert("Image type is unsupported!")';
						echo '</script>';
						return;
					} else{
						//check file size
						if ($_FILES['fileToUpload']['size'] > 500000) {
							echo '<script language="javascript">';
							echo 'alert("Image size is too large!")';
							echo '</script>';
							return;
						}else{
									
								$sql = "UPDATE  users SET profile_pic ='$filename' WHERE mem_id='$userId'";

								$result = mysqli_query($conn, $sql);

								if (move_uploaded_file($temp_name, $folder)) {
									echo "image uploaded";
								}else{
									echo "failed To upload image";
								}
								//an automatic redirect to update the pic and stop a double submission
								header('Location: /account/welcome_message.php');
								return;
						}
				}
					

					}
					
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
	<link rel="shortcut icon" type="image/jpg" href="../../img/favicon.ico"/>
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
