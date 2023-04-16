<?php
   include('../connectivity/connection.php');
   
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   
   //Load composer's autoloader
   require '../vendor/autoload.php';
   
   if(isset($_POST["email"]) && (!empty($_POST["email"]))){
   $email = $_POST["email"];
   $email = filter_var($email, FILTER_SANITIZE_EMAIL);
   $email = filter_var($email, FILTER_VALIDATE_EMAIL);
   $errmsg = "";
   
   if (!$email) {
      $errmsg .="<p>Invalid email address please type a valid email address!</p>";
      }else{
      $sel_query = "SELECT * FROM `users` WHERE email='".$email."'";
      $result = mysqli_query($conn,$sel_query);
      $row = mysqli_num_rows($result);
      if ($row==""){
      $errmsg .= "<p>No user is registered with this email address!</p>";
      }
     }
      if($errmsg !=""){
      echo "<div class='error'>".$errmsg."</div>
      <br /><a href='javascript:history.go(-1)'>Go Back</a>";
      }else{
      $expFormat = mktime(
      date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
      );
      $expDate = date("Y-m-d H:i:s",$expFormat);
      $resetKey = md5(2418*2 . $email);
      $addKey = substr(md5(uniqid(rand(),1)),3,10);
      $resetKey = $resetKey . $addKey;
   // Insert Temp Table
   mysqli_query($conn,
   "INSERT INTO password_reset_temp (email, resetKey, expDate)
   VALUES ('$email', '$resetKey', '$expDate')");
    
   $output='<p>Dear user,</p>';
   $output.='<p>Please click on the following link to reset your password.</p>';
   $output.='<p>-------------------------------------------------------------</p>';
   $output.='<p><a href="http://localhost:8080/auth/reset-password.php?resetKey='.$resetKey.'&email='.$email.'&action=reset" target="_blank">
   http://localhost:8080/auth/reset-password.php?resetKey='.$resetKey.'&email='.$email.'&action=reset</a></p>'; 
   $output.='<p>-------------------------------------------------------------</p>';
   $output.='<p>Please be sure to copy the entire link into your browser.
   The link will expire after 1 day for security reason.</p>';
   $output.='<p>If you did not request this forgotten password email, no action 
   is needed, your password will not be reset. However, you may want to log into 
   your account and change your security password as someone may have guessed it.</p>';   
   $output.='<p>Thanks,</p>';
   $output.='<p>Me4Gaming Team</p>';
   $body = $output; 
   $subject = "Password Recovery - Me4Gaming.com";
    
   $email_to = $email;
   $fromserver = "me@example.com"; 
   $mail = new PHPMailer();
   //$mail->IsSMTP();
   $mail->Host = "mail.hmailserver.com"; // Enter your host here
   $mail->SMTPAuth = true;
   $mail->Username = "Administrator"; // Enter your email here
   $mail->Password = "*******"; //Enter your password here
   $mail->Port = 25;
   $mail->IsHTML(true);
   $mail->From = "me@example.com";
   $mail->FromName = "ThatBadDesign";
   $mail->Sender = $fromserver; // indicates ReturnPath header
   $mail->Subject = $subject;
   $mail->Body = $body;
   $mail->AddAddress($email_to);
   if(!$mail->Send()){
   echo "Mailer Error: " . $mail->ErrorInfo;
   }else{
   echo "		<table>
   				<tr>
   					<td>
   						<a href='user_login.php'>
   							<!--<div id='milkyway'>
   								<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' height='200' width='auto'>
   									<param name='wmode' value='transparent'>
   										<param name='movie' value='http://parallelreality-bg.com/templates/reality/images/milkyway2.png'>
   											<param name='quality' value='best'>
   												<param name='play' value='true'>
   													<embed height='91' src='http://parallelreality-bg.com/templates/reality/images/milkyway2.png' bgcolor='#000000' width='115' quality='best' play='true' wmode='transparent'>
   													</object>
   												</div>-->
   											</a>
   										</td>
   									</tr>
   								</table>";
   echo "<div class='error'><br><br><br><br>
   <center>
   	<p>An email has been sent to you with instructions on how to reset your password.</p>
   	<p>Redirecting to home page...</p>
   </center>
   </div>";
   /* Redirect browser */
   header("refresh:3;url=user_login.php");
   exit();
    }
      }
   }else{
   ?>
<html>
   <head>
		<meta name="generator"
         content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="shortcut icon" type="image/jpg" href="../../img/favicon.ico"/>
      <title>New password</title>
      <table>
         <tr>
            <td>
               <a href="user_login.php">
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
   <body>
      <center>
         <form method="post" action="" name="reset">
            <br />
            <br />
            <label>
            <strong>Enter Your Email Address:</strong>
            </label>
            <br />
            <br />
            <input type="email" name="email" placeholder="username@email.com" required="" />
            <br />
            <br />
            <button type="submit" class="btn btn-secondary">Reset password</button>
         </form>
      </center>
      <?php } ?>
      <STYLE TYPE="text/css">
         body { 
         background: url(../img/quiz_cover.png) no-repeat center center fixed;
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
      </style>
   </body>
   </head>
</html>