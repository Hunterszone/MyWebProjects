<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<title></title>
		</head>
		<body>
			<?php
    	//Starting of session
    	session_start();	
    	//The variables stored in session, must be unset
    	unset($_SESSION['SESS_MEMBER_ID']);
    	unset($_SESSION['SESS_USERNAME']);
    	unset($_SESSION['SESS_PASSWORD']);
		unset($_SESSION['SESS_EMAIL']);
        ?>

			<table>
				<tr>
					<td>
						<a href="index.php">
							<div id="milkyway">
								<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="200" width="auto">
									<param name="wmode" value="transparent">
										<param name="movie" value="http://parallelreality-bg.com/templates/reality/images/milkyway2.png">
											<param name="quality" value="best">
												<param name="play" value="true">
													<embed height="91" src="http://parallelreality-bg.com/templates/reality/images/milkyway2.png" bgcolor="#000000" width="115" quality="best" play="true" wmode="transparent">
													</object>
												</div>
											</a>
										</td>
									</tr>
								</table>    

								<form name="loginform" action="login_exec.php" method="post">
									<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
										<tr>
											<td colspan="2">
												<!--the code bellow is used to display the message of the input validation-->
												<?php
    			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    			echo '<ul class="err">';
    			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    				echo '<li>',$msg,'</li>'; 
    				}
    			echo '</ul>';
    			unset($_SESSION['ERRMSG_ARR']);
    			}
    		?>
											</td>
										</tr>
										<tr>
											<td width="116"><div align="right">Username</div></td>
											<td width="177"><input name="username" type="text" /></td>
										</tr>
										<tr>
											<td><div align="right">Password</div></td>
											<td><input type="password" name="password" type="text" /></td>
										</tr>
										<tr>
											<td><div align="right"></div></td>
											<td><input type="submit" value="Login" /></td>
										</tr>
										<tr>
											<td><div align="right"></div></td>
											<td><a href="forgotPass.php" target="_blank">Forgot password ?</a></td>
										</tr>
									</table>
								</form>
							</body>

							<STYLE TYPE="text/css">

body { 
background: url(book-carousel.jpg) no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}

							</style> 




						</html>

						