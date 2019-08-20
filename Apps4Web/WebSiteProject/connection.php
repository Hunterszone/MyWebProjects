   <?php
    $mysql_hostname = "localhost";
    $mysql_user = "root";
    //$mysql_password = hash('sha256',$_POST['root']);
    $mysql_password = "root";
    $mysql_database = "simple_login";
    $prefix = "";
    $bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to the database");
    mysqli_select_db($bd, $mysql_database) or die("Could not select database");
   ?>