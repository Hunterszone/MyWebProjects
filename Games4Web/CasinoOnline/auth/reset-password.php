<?php
include('../connectivity/connection.php');

$error = '';

if (isset($_GET['resetKey']) && isset($_GET['email']) && isset($_GET['action']) 
&& ($_GET['action']=='reset') && !isset($_POST['action'])){
  $resetKey = $_GET['resetKey'];
  $email = $_GET['email'];
  $curDate = date("Y-m-d H:i:s");
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $query);
  $row = "";
  if (mysqli_num_rows($result)==0){
  $error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the resetKey in which case it is 
deactivated.</p>
<p><a href="http://localhost:8080/index.php">
Click here</a> to reset password.</p>';
 }else{
  $row = mysqli_fetch_assoc($result);
  if (true){
  ?>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <br />
    <center>
      <form method="post" action="" name="update">
      <input type="hidden" name="action" value="update" />
      <br />
      <br />
      <label>
        <strong>Enter New Password:</strong>
      </label>
      <br />
      <input type="password" name="pass1" maxlength="15" required="" />
      <br />
      <br />
      <label>
        <strong>Re-Enter New Password:</strong>
      </label>
      <br />
      <input type="password" name="pass2" maxlength="15" />
      <br />
      <br />
      <input type="hidden" name="email" value="<?php echo $email;?>" /> 
      <button type="submit" class="btn btn-secondary">Reset password</button>
    </center><?php
        }else{
        $error .= "<h2>Link Expired</h2>
        <p>The link is expired. You are trying to use the expired link which 
        as valid only 24 hours (1 days after request).<br /><br /></p>";
                    }
              }
        if($error!=""){
          echo "<div class='error'>".$error."</div><br />";
          } 
        } // isset email resetKey validate end
         
         
        if(isset($_POST["email"]) && isset($_POST["action"]) &&
         ($_POST["action"]=="update")){
        $error="";
        $pass1 = mysqli_real_escape_string($conn,$_POST["pass1"]);
        $pass2 = mysqli_real_escape_string($conn,$_POST["pass2"]);
        $email = $_POST["email"];
        $curDate = date("Y-m-d H:i:s");
        if ($pass1!=$pass2){
        $error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
          }
          if($error!=""){
        echo "<div class='error'>".$error."</div><br />";
        }else{
        //$pass1 = md5($pass1);
        mysqli_query($conn, "UPDATE users SET password='$pass1' WHERE email='$email'"); 
         
        echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
        <p><a href="http://localhost:8080/auth/login_exec.php">
        Click here</a> to Login.</p></div><br />';
           } 
        }
        ?>
		
<STYLE TYPE="text/css">

body { 
background: url(book-carousel.jpg) no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}

</style> 	

  </body>
</html>
