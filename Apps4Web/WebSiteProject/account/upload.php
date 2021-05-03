 
<?php 
		include_once '../connectivity/connection.php';
		@$username = htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
		
		if ($_SERVER['REQUEST_METHOD'] == 'GET') { 

?>
<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>"
      enctype="multipart/form-data">
<input type="file" name="file"/>
<input type="submit" value="Send File"/>
</form>
<?php } else { 
    if (isset($_FILES['file']) &&
    ($_FILES['file']['error'] == UPLOAD_ERR_OK)) {
        $newPath = $_SERVER['DOCUMENT_ROOT'] . '\\gallery\\' . basename($_FILES['file']['name']);
		$sqlimg = "INSERT INTO user_img (img) VALUES('$newPath')";
        $resultimg=mysqli_query($conn,$sqlimg);
        if (move_uploaded_file($_FILES['file']['tmp_name'], $newPath)) {
            print "File saved to $newPath";
        } else {
            print "Couldn't move file to $newPath";
        }
    } else {
        print "No valid file uploaded.";
    }
}
?>

<html>

 <head>
  <title>Upload complete</title>
 </head>

 <body>

  <h3>File upload succeeded...</h3>
  <ul>
  <li>Sent: <?php echo $_FILES['file']['name']; ?></li>
  <li>Size: <?php echo $_FILES['file']['size']; ?> bytes</li>
  <li>Type: <?php echo $_FILES['file']['type']; ?></li>
  </ul>

  <a href="<?php echo $newPath; ?>">Click here to view file</a> 

 </body>

</html>