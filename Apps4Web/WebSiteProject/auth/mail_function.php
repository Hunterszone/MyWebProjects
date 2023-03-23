<?php	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	//Load composer's autoloader
	require '../vendor/autoload.php';
		
	function sendOTP($email,$otp) {
		$message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Username = "me@example.com"; // Enter your email here
		$mail->Password = "nanameca123"; //Enter your password here
		$mail->Port = 25;
		$mail->Host = "mail.hmailserver.com"; // Enter your host here
		$mail->From = "me@example.com";
		$mail->FromName = "ThatBadDesign";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("FROM EMAIL", "FROM NAME");
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		return $result;
	}
?>