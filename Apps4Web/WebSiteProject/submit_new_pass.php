<?php

//Include database connection details
require_once('connection.php');
require_once('authentication.php');

echo "Welcome, " . htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');

//Start session
session_start();

$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
$qry="SELECT * FROM users WHERE username='$username'";
$result=mysqli_query($conn,$qry);
$row = mysqli_fetch_array($result);

if ($_POST["currentPassword"] == $row["password"])
{
  mysqli_query($conn, "UPDATE users set password='" . $_POST["newPassword"] . "' WHERE mem_id='" . $_SESSION["SESS_MEMBER_ID"] . "'");
  //session_write_close();
  //header("location: LoginForm.php");
  //exit();
   echo "Password Changed";
  } else echo "Current Password is not correct";

?>