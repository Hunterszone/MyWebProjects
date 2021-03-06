<!DOCTYPE html>
<html>
   <head>
      <STYLE TYPE="text/css">
         body { 
         background: url(../img/quiz_cover.png) no-repeat center center fixed;
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
      </style>
	  <link rel="shortcut icon" type="image/jpg" href="../img/favicon.ico"/>
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
   </body>
   <?php
      use Sonata\GoogleAuthenticator;
      
      //Load composer's autoloader
      require '../oauth/vendor/vendor/autoload.php';
      
      //Include member details
      @include_once 'account/member.php';
      
      include_once __DIR__.'..\..\oauth\vendor\src\FixedBitNotation.php';
      include_once __DIR__.'..\..\oauth\vendor\src\GoogleAuthenticator.php';
      include_once __DIR__.'..\..\oauth\vendor\src\GoogleQrUrl.php';
      include_once __DIR__.'..\..\oauth\vendor\src\GoogleAuthenticatorInterface.php';
      
      $g = new \Google\Authenticator\GoogleAuthenticator();
      $salt = '7WAO342QFANY6IKBF7L7SWEUU79WL3VMT920VB5NQMW';
      $secret = @$username.$salt;
      
      echo '<center>';
      echo 'Scan this QR and use the verification code from your mobile app to proceed';
      echo '<br><br><br>';
      echo '<img id="qrImg" src="'.$g->getURL(@$username, 'me4gaming.com', $secret).'" />';
      echo '<br><br><br>';
      echo "<a href=verifyQR.html>Enter verification code</a>";
      echo '</center>';
      
      ?>