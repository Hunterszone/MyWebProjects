<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>"
      enctype="multipart/form-data">
<input type="file" name="file"/>
<input type="submit" value="Send File"/>
</form>
<?php } else { 
    if (isset($_FILES['file']) &&
    ($_FILES['file']['error'] == UPLOAD_ERR_OK)) {
        $thisFile = $_FILES['file']['name'];
        $thisFileName = basename($_FILES['file']['name']);
        $newPath = '../uploads/' . $thisFileName;
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