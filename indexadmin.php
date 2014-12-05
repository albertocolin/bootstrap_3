<?php
$idu=$_COOKIE['idu'];
$acceso=$_COOKIE['acceso'];
if($idu=="" or $acceso=="")
{
print"<meta http-equiv='refresh' content='0;
       url=./login.php?msg=1'>";
	   exit; 
	   }
SESSION_start();
$_SESSION['idu']=$idu;
$_SEESION['acceso']=1;
if($idu=="")
{
print"<meta http-equiv='refresh' content='0;
       url=./login.php?msg=$msg=1'>";	   
	   exit; 
}   
?>
<?php
 require 'menu_admin.php';
 require 'db.php';
 $sql="select * from usuario
       where id=$idu";
$consulta=mysql_query($sql) or die("Error consulta");
$nombre=mysql_result($consulta,0,'Nombre');
$app=mysql_result($consulta,0,'ApellidoPaterno');
$apm=mysql_result($consulta,0,'ApellidoMaterno');
$nombrec = "$nombre $app $apm";
 echo"<h1>*!*Bienvenido $nombrec*!*</h1>";
 ?>