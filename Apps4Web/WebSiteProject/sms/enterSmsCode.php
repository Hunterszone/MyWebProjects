<?php
	require 'messageBird.php';
	console_log($MessageBird->messages->create($Message));
?>
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
	  <script>
		function check() {
			var f = document.getElementById("frm");
			var actualCode = document.getElementById("smsCode");
			var expectedCode = <?php echo $Message->body; ?>;
			
			console.log("Actual: " + actualCode.value);
			console.log("Expected: " + expectedCode);
			
			f.setAttribute('method',"post");
			
			if(actualCode.value == expectedCode) {
				f.setAttribute('action',"../auth/user_login.php");
			} else {
				f.setAttribute('action',"../sms/enterSmsCode.php");
				alert("Actual code is: " + actualCode.value + ". Expected was: " + expectedCode + ".");
			}
			return true;
		}
	  </script>
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
         <form id="frm" onsubmit="return check()" name="update">
            <input type="hidden" name="action" value="update" />
            <br />
            <br />
            <label>
            <strong>Enter SMS code:</strong>
            </label>
            <br />
            <br />
            <input type="text" id="smsCode" value="<?php echo $Message->body; ?>" name="code" maxlength="25" required="" />
            <br />
            <br />
            <button type="submit" class="btn btn-secondary">Login</button>
         </form>
      </center>
    </body>