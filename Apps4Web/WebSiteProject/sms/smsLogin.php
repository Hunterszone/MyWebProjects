<!DOCTYPE html>
<html>
   <head>
      <meta name="generator"
         content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
      <title></title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <style type="text/css">
         body { 
         background: url(../img/quiz_cover.png) no-repeat center center fixed; 
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
      </style>
   </head>
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
	  <center>
         <form method="post" action="enterSmsCode.php" name="update">
            <input type="hidden" name="action" value="update" />
            <br />
            <br />
            <label>
            <strong>Enter phone number:</strong>
            </label>
            <br />
            <br />
            <input type="text" name="phoneNum" maxlength="25" required="" />
            <br />
            <br />
            <button type="submit" class="btn btn-secondary">Send code</button>
         </form>
      </center>
    </body>
	</html>
	<?php

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.msg91.com/api/v5/flow/363815ASTthTI9L60e36b2bP1",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "{\n  \"flow_id\": \"1234\",\n  \"sender\": \"KoDr\",\n  \"mobiles\": \"359889619295\",\n  \"VAR1\": \"VALUE 1\",\n  \"VAR2\": \"VALUE 2\"\n}",
		  CURLOPT_HTTPHEADER => array(
			"authkey: 363815ASTthTI9L60e36b2bP1",
			"content-type: application/JSON"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo "<center>";	
		  echo "Response: " . $response;
		  echo "</center>";	
		}
	?>