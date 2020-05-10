<?php
		require_once('authentication.php');
		if($_SESSION['SESS_USERNAME'] != "") {			
			echo "Welcome, " . htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');
		}
?>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<head>
    <script type="text/javascript">

        var app = angular.module("myNoteApp", []);

        app.controller("myNoteCtrl", function($scope) {
            $scope.message = "";
            $scope.left  = function() {return 400 - $scope.message.length;};
            $scope.clear = function() {$scope.message = "";};
        });

    </script>
</head>

<body background="book-carousel.jpg" ng-app="myNoteApp" ng-controller="myNoteCtrl">

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

<fieldset><p><center>
    <form action="" name="action" method="POST" enctype="multipart/form-data">

<?php

$action="";
if(isset($_REQUEST['action'])){
	$action=$_REQUEST['action'];
}

if ($action=="")    /* display the contact form */
    {
    ?>
    <input type="hidden" name="action" value="submit">
    <p><font face="algerian" color="green">Your name:
    <input name="name" type="text" value="" size="30"/></font></p>
    <p><font face="algerian" color="green">Your email:
    <input name="email" type="text" value="" size="30"/></font></p>
    <p><legend><font face="algerian"><font size="4"><font color="green"><u>Send us your feedback:</u></font></font></font></legend></p>
    <textarea ng-model="message" name="message" cols="55" rows="16" maxlength="400" placeholder="UP TO 400 CHARACTERS"></textarea>
    <center><p>
		<input type='submit' ng-click="send()" value='Send' style="cursor: pointer;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type='reset' ng-click="clear()" value='Clear' style="cursor: pointer;">
	</p></center>
	<p><font face="algerian"><font size="2"><font color="green">Number of characters left: <span ng-bind="left()"></span></font></font></font></p>
    </form></center></p>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "<center>";
        echo "All fields are required, please fill <a href='contact_form.php'>the form</a> again.";
		echo "</center>";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("k.drenski91@gmail.com", $subject, $message, $from);
		echo "<center>";
        echo "Email sent!";
		echo "</center>";
        }
    }  
?>

</body>