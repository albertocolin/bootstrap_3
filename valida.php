<?php
$user=$_GET['user'];
$psw=$_GET['psw'];

if($user=="" or $psw=="")
{
$msg="Los campos deben ir llenos";
print"<meta http-equiv='refresh' content='0;
       url=login.php?msg=$msg'>";
	   exit;
	   }
require('db.php');

$sql="select * from usuario
       where Usuario='$user' and
	   Contrasena='$psw'";
$consulta=mysql_query($sql) or die("Error consulta");
$filas=mysql_num_rows($consulta);
if($filas==0)
{
$msg="Usuario o password no valida";
print"<meta http-equiv='refresh' content='0;
       url=login.php?msg=$msg'>";
	   exit;
}
else
{
$idu=mysql_result($consulta,0,'id');
$estatus=mysql_result($consulta,0,'Estatus');
$nivel=mysql_result($consulta,0,'Nivel');
if($estatus=='0')
{
$msg="El usuario esta desactivado, consulte a su administrador";
 print"<meta http-equiv='refresh' content='0;
       url=login.php?msg=$msg'>";
	   exit; 
	   }
	   else
	   {
	    print"<meta http-equiv='refresh' content='0;
       url=accesos.php?idu=$idu&nivel=$nivel'>";
	   exit; 
	   }
	   }
	  ?>