<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Login</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <link rel="shortcut icon" type="image/jpg" href="../img/favicon.ico"/>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
               <a href="../index.php">
				<img id="backToSite" src="../img/faces.gif" title="Back" style="width: 120px; height: 120px;">
                  <!--<div id="milkyway">
                     <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="200" width="auto">
                        <param name="wmode" value="transparent">
                        <param name="movie" value="http://parallelreality-bg.com/templates/reality/images/milkyway2.png">
                        <param name="quality" value="best">
                        <param name="play" value="true">
                        <embed height="91" src="http://parallelreality-bg.com/templates/reality/images/milkyway2.png" bgcolor="#000000" width="115" quality="best" play="true" wmode="transparent">
                     </object>
                  </div>-->
               </a>
            </td>
         </tr>
      </table>
      <form name="loginform" action="../auth/login_exec.php" method="post">
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
               <td width="116">
                  <div align="right">Username</div>
               </td>
               <td width="177"><input name="username" type="text" /></td>
            </tr>
            <tr>
               <td>
                  <div align="right">Password</div>
               </td>
               <td>
				<input id="myPass" type="password" name="password" />
			   </td> 
			   <td>
				<i class="fa fa-eye-slash" id="togglePassword" onclick="togglePass();" style="margin-left: -30px; cursor: pointer;"></i>
			   </td>
            </tr>
            <tr>
               <td>
                  <div align="right">Remember me</div>
               </td>
               <td><input type="checkbox" name="remember" id="remember"
                  <?php if(isset($_COOKIE['USER_IS_LOGGEDIN'])) { ?> checked
                  <?php } ?> />
               </td>
            </tr>
            <tr>
               <td>
                  <div align="right"></div>
               </td>
               <td><input type="submit" value="Login"></td>
            </tr>
            <tr>
               <td>
                  <div align="right"></div>
               </td>
               <td><a href="../auth/forgotPass.php">Forgot password ?</a></td>
            </tr>
            <tr>
               <td>
                  <div align="right"></div>
               </td>
               <td><a href="mailto:k.drenski91@gmail.com" target="_blank">Contact administrator</a></td>
            </tr>
         </table>
      </form>
	  <script>
			function togglePass() {
			  var x = document.getElementById("myPass");
			  var y = document.getElementById("togglePassword");
			  if (x.type === "password") {
				x.type = "text";
				y.className = "far fa-eye"
			  } else {
				x.type = "password";
				y.className = "far fa-eye-slash"
			  }
			}
	  </script>
	  <script src="https://www.google.com/recaptcha/api.js?render=6LdpSyImAAAAAEkpJFJu97kp7RXumgweBDzEP-8C"
	async defer>
	</script>
   </body>
   <STYLE TYPE="text/css">
      body { 
      background: url(../img/quiz_cover.png) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      }
   </style>
</html>