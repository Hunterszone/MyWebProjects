<?php	
	include('../connectivity/connection.php');
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	//Load composer's autoloader
	require '../vendor/autoload.php';
		
	function sendOTP($email,$otp) {
		$message_body = "One Time Password for your email login authentication is:<br/><br/>" . $otp;
		$mail = new PHPMailer();
		//$mail->IsSMTP();
		$mail->SMTPAuth = TRUE;
		$mail->Username = "Administrator"; // Enter your email here
		$mail->Password = "**********"; //Enter your password here
		$mail->Port = 25;
		$mail->Host = "mail.hmailserver.com"; // Enter your host here
		$mail->From = "me@example.com";
		$mail->FromName = "ThatBadDesign";
		//$mail->Mailer   = "smtp";
		$mail->SetFrom("FROM EMAIL", "FROM NAME");
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		return $result;
}
?>