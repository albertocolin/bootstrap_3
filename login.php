<html>
<?php
require 'menu_login.php';
require 'header.php';
?>
<body>
<div class='table-responsive'>
<form action='valida.php' method='GET' class='form'>
<table class='table table-striped'>
<tr><td><font color='blue'>Usuario</font><input type='text' id='name' name='user' size='12'></td></tr>
<tr><td><font color='blue'>Password</font><input type='password' id='key' name='psw'  size='12'></td></tr>
<tr><td><input type='submit' id='submit' value='Ingresar'></td></tr>
</table>
</form>
</div>
<?php
if(isset($_GET['msg'])){
$msg=$_GET['msg'];
if($msg!=1)
{
echo "$msg";
}
}
?>
</body>
</html>