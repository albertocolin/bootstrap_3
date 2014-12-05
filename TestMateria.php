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
    require 'Materia.php';
    require 'db.php';
    require 'header.php';


    if(isset($_REQUEST['accion'])){
        $accion = $_REQUEST['accion'];
        $materia = $_REQUEST['materia'];
        $maestro = $_REQUEST['maestro'];

        if($materia != 0){
            $sql = "INSERT INTO maestro_materia (id_maestro, id_materia) VALUES ($maestro, $materia)";
            $consulta = mysql_query($sql)or die("Error de inserción");
        }

    }

    //Creamos un objeto
    $materia = new Materia();

    $materia->seleccionaMaestro();

    require 'footer.php';
?>
