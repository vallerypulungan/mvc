<!DOCTYPE html>
<html>
<head>
<title>FORM LOGIN</title>
</head>
<body>
<form name="login" method="POST">
<table>
<tr><td>
<font color="blue" face="Calibri" 
size="5">Login</font></td></tr>
<tr><td></td>
<td><font face="Calibri" size="3"> Username 
</td></font>
<td><font face="Calibri" size="3"><input type="text" 
name="username" placeholder="Username"></input></font>
</td></tr>
<tr><td></td>
<td><font face="Calibri" size="3"> Password 
</td></font>
<td><font face="Calibri" size="3"><input 
type="password" name="password" 
placeholder="Password"></input></font>
</td></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr><td>
<input type="submit" name="submit" value="Login"
style="background-color: #1E90FF; font: Calibri; color:
#ffffff;"></input>
</td></tr>
</td></tr>
</td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
 if($_POST['username'] == 'menteri' && 
$_POST['password'] == 'menteri'){
 header('Location:'.'menteri.php');
 }elseif ($_POST['username'] == 'kepaladepartemen' 
&& $_POST['password'] == 'kadep'){
 header('Location:'.'kadep.php');
 }
}
?>
</body>
</html>