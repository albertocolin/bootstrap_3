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
require 'menu_prof.php';
require 'Materia.php';
    require 'db.php';

 $sql="select * from usuario
       where id=$idu";
$consulta=mysql_query($sql) or die("Error consulta");
$nombre=mysql_result($consulta,0,'Nombre');
$app=mysql_result($consulta,0,'ApellidoPaterno');
$apm=mysql_result($consulta,0,'ApellidoMaterno');
$nombrec = "$nombre $app $apm";
 echo"<h1>Hola $nombrec sus materias son:</h1>";
 

$sql = "SELECT * FROM maestro_materia WHERE id_maestro=$idu";
$consulta = mysql_query($sql)or die("Error de consulta");
$filas=mysql_num_rows($consulta);

     echo"<div class='table-responsive'>";
        echo"<table class=table table-bordered><tr><td><b>Mis materias</b></td></tr>";

for ($y=0;$y<=$filas-1;$y++)//ciclo hasta que $y sea menor a $filas
{					
$sqlq = "SELECT * FROM maestro_materia WHERE id_maestro=$idu";
$consultaq = mysql_query($sqlq)or die("Error de consultaq");

$id_materia=mysql_result($consultaq,$y,'id_materia')or die('Error en id_materia');//obtener valores de consulta

$sqlx = "SELECT * FROM materia WHERE id=$id_materia";
$consultax = mysql_query($sqlx)or die("Error de consultax");

$nombre_mat=mysql_result($consultax,0,'nombre')or die('Error en nombre_mat');//obtener valores de consulta
echo"<tr><td>$nombre_mat</td></tr>";
}
echo"</table></div>";

 ?>