<?php
print('<html>');
print('<head>');
print('<title>Fuse box test</title>');
print('</head>');
print('<body>');
print('<h3 align="center">Please confirm</h3>');
print('<form method="post" action="index.php ? boxaction=display">');
print('<table  cellpadding=10 cellspacing=0 align="center" bgcolor="#cccccc" border="3">');
print('<tr>');
print('<td>');
print('First name:</td> <td> <input type="text" name="firstname" size=10 value="'.$firstname.'">');
print('</td>');
print('</tr>');

print('<tr>');
print('<td>');
print('Last name:</td> <td> <input type="text" name="lastname" size=10 value="'.$lastname.'">');
print('</td>');
print('</tr>');
print('<tr>');
print('<td colspan=2 align="center">');
print('<input type="submit" name="submit" value="Submit">');
print('</td>');
print('</tr>');
print('</table>');
print('</form>');

print('</body>');
print('</html>');

?>