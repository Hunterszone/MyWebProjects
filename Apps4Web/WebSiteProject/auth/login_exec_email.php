<?php

//Start session
session_start();

//Include database connection details
require_once('../connectivity/connection.php');

$success = "";
$error_message = "";
$conn = mysqli_connect("localhost","root","root","phpwebsite");
if(!empty($_POST["submit_email"])) {
	$result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST["email"] . "'");
	$count  = mysqli_num_rows($result);
	if($count>0) {
		//Login Successful
		session_regenerate_id();
		$member = mysqli_fetch_assoc($result);
		$mem_id= $member['mem_id'];
		$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
		$_SESSION['SESS_USERNAME']  = $member['username'];
		$_SESSION['SESS_PASSWORD']  = $member['password'];
		$_SESSION['SESS_EMAIL']  = $member['email'];
		if(isset($_POST['login_session'])){
			$_SESSION['USER_IS_LOGGEDIN'] = $member['login_session'];	
		}
		$arrValues = array_values($member);
		setcookie($arrValues[0],$arrValues[1],time()+3600*24*365,'/','.hunterszone.byethost11.com');
		// generate OTP
		$otp = rand(100000,999999);
		// Send OTP
		require_once("mail_function.php");
		$mail_status = sendOTP($_POST["email"],$otp);
		
		if($mail_status != 1) { // workaround when no mail host is in use
			$result = mysqli_query($conn,"INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
			$current_id = mysqli_insert_id($conn);
			if(!empty($current_id)) {
				$success=1;
			}
		}
	} else {
		$error_message = "Email not exists!";
	}
		
}
if(!empty($_POST["submit_otp"])) {
	$result = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)");
	$count  = mysqli_num_rows($result);
	if(!empty($count)) {
		$result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
		$success = 2;	
	} else {
		$success =1;
		$error_message = "Invalid OTP!";
	}	
}
?>
<html>
<body>
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
            <td>
               <div id="clockbox" style="font-family:Jokerman; font-size:120%; text-align:right; color:#D6FF5C"></div>
            </td>
         </tr>
      </table>
</body>
<head>
<title>User Login</title>
<style>
body{
	font-family: calibri;
	background: url(../img/quiz_cover.png) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
}
.tblLogin {
	border: #95bee6 1px solid;
    background: #d1e8ff;
    border-radius: 4px;
    max-width: 300px;
	padding:20px 30px 30px;
	text-align:center;
}
.tableheader { 
	font-size: 20px;
}
.tablerow { padding:20px; }
.error_message {
	color: #b12d2d;
    background: #ffb5b5;
    border: #c76969 1px solid;
	text-align: center;
}
.message {
	width: 100%;
    max-width: 300px;
    padding: 10px 30px;
    border-radius: 4px;
    margin-bottom: 5px;    
}
.login-input {
	border: #CCC 1px solid;
    padding: 10px 20px;
	border-radius:4px;
}
.btnSubmit {
	padding: 10px 20px;
    background: #2c7ac5;
    border: #d1e8ff 1px solid;
    color: #FFF;
	border-radius:4px;
	cursor: pointer;
}
</style>
</head>
<body>
	<?php
		if(!empty($error_message)) {
	?>
	<center><div class="message error_message"><?php echo $error_message; ?></div></center>
	<?php
		}
	?>

<center>
<form name="frmUser" method="post" action="">
	<div class="tblLogin">
		<?php 
			if(!empty($success == 1)) { 
		?>
		<div class="tableheader">Enter OTP</div>
		<p style="color:#31ab00;">Check your email for the OTP</p>
			
		<div class="tablerow">
			<input type="text" name="otp" placeholder="One Time Password" class="login-input" required>
		</div>
		<div class="tableheader"><input type="submit" name="submit_otp" value="Submit" class="btnSubmit"></div>
		<?php 
			} else if ($success == 2) {
			session_write_close();
			header("location: ../auth/user_login.php");
			exit();
        ?>
		<p style="color:#31ab00;">Welcome, You have successfully loggedin!</p>
		<?php
		}
			else {
		?>
		
		<div class="tableheader">Enter Your Login Email</div>
		<div class="tablerow"><input type="text" name="email" placeholder="Email" class="login-input" required></div>
		<div class="tableheader"><input type="submit" name="submit_email" value="Submit" class="btnSubmit"></div>
		<?php 
			}
		?>
	</div>
</form>
</center>
</body></html>