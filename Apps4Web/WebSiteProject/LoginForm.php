<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    	//Starting of session
    	session_start();	
    	//The variables stored in session, must be unset
    	unset($_SESSION['SESS_MEMBER_ID']);
    	unset($_SESSION['SESS_USERNAME']);
    	unset($_SESSION['SESS_PASSWORD']);
        ?>
        
        

    <form name="loginform" action="login_exec.php" method="post">
    <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
      <tr>
        <td colspan="2">
    		<!--the code bellow is used to display the message of the input validation-->
    		 <?php
    			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    			echo '<ul class="err">';
    			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    				echo '<li>',$msg,'</li>'; 
    				}
    			echo '</ul>';
    			unset($_SESSION['ERRMSG_ARR']);
    			}
    		?>
    	</td>
      </tr>
      <tr>
        <td width="116"><div align="right">Username</div></td>
        <td width="177"><input name="username" type="text" /></td>
      </tr>
      <tr>
        <td><div align="right">Password</div></td>
        <td><input type="password" type="text" /></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input name="" type="submit" value="login" /></td>
      </tr>
    </table>
    </form>
    </body>
    
    <STYLE TYPE="text/css">
 
body { 
background: url(http://www.calgaryherald.com/news/cms/binary/10271025.jpg?size=sw620x65) no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
 
</style> 




</html>

