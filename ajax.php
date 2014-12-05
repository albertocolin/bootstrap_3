<!DOCTYPE html>
<html lang="en">

<?php
	require 'menu_admin.php';
    require 'Materia.php';
    require 'db.php';
    require 'header.php';
	error_reporting(E_ERROR);
    
    $maestro = $_POST['maestro'];

    //Creamos un objeto
    $materia = new Materia();

    $materia->datosMaestro($maestro);

    $materia->materiasAsignadas($maestro);

    $materia->asignarMateriaMaestro($maestro);

    require 'footer.php';

?>

</html>




