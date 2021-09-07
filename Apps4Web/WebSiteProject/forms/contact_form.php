<?php
		require_once('../auth/authentication.php');
		if($_SESSION['SESS_USERNAME'] != "") {			
			echo "Welcome, " . htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');
		}
?>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<head>
	<title>Contact Us</title>
	<link rel="shortcut icon" type="image/jpg" href="../img/favicon.ico"/>
    <script type="text/javascript">

        var app = angular.module("myNoteApp", []);

        app.controller("myNoteCtrl", function($scope) {
            $scope.message = "";
            $scope.left  = function() {return 400 - $scope.message.length;};
            $scope.clear = function() {$scope.message = "";};
        });

    </script>
</head>

<body background="../img/book-carousel.jpg" ng-app="myNoteApp" ng-controller="myNoteCtrl">

<fieldset>
<p><center>
	
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
	<div align="left">
		<a href="../auth/user_login.php">
			<img id="backToSite" src="../img/faces.gif" title="Back" style="width: 120px; height: 120px;">
		</a>
	</div>
    <p><font face="algerian" color="black">Your name:
    <input name="name" type="text" value="" size="30" required="" placeholder="<?php echo $_SESSION['SESS_USERNAME'];?>"/></font></p>
    <p><font face="algerian" color="black">Your email:
    <input name="email" type="email" value="" size="30" required=""/></font></p>
    <p><legend><font face="algerian"><font size="4"><font color="black"><u>Send us your feedback:</u></font></font></font></legend></p>
    <textarea ng-model="message" name="message" cols="55" rows="16" maxlength="400" required="" placeholder="UP TO 400 CHARACTERS"></textarea>
    <center><p>
		<input type='submit' id="send" ng-click="send()" value='Send' style="cursor: pointer;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type='reset' id="reset" ng-click="clear()" value='Clear' style="cursor: pointer;">
	</p></center>
	<p><font face="algerian"><font size="2"><font color="black">Number of characters left: <span ng-bind="left()"></span></font></font></font></p>
    </form></center></p>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];          
	$from="From: $name<$email>\r\nReturn-path: $email";
	$subject="Message sent using your contact form";
	mail("k.drenski91@gmail.com", $subject, $message, $from);
	echo "<center>";
	echo "Feedback sent! Thank you!";
	echo "<p>";
	echo "If you experience any troubles, please <a href='mailto:k.drenski91@gmail.com'> contact administrator</a>";
    echo "</p>";
	echo "<p>";
	echo "You will be redirected to your profile...";
    echo "</p>";
	echo "</center>";
	/* Redirect browser */
	header("refresh:3;url=../auth/user_login.php");
	exit();
    }
?>

</body>