   <?php
    $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = hash('sha256',$_POST['password']);
    $mysql_password = "";
    $mysql_database = "simple_login";
    $prefix = "";
    $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to the database");
    mysql_select_db($mysql_database, $bd) or die("Could not select database");
   ?>