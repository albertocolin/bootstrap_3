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
    require 'Usuario.php';
    require 'db.php';
    require 'header.php';

    //Creamos un objeto
    $usuario = new Usuario();
    if(isset($_POST["submit"]))
    {
        switch($_POST["submit"])
        {
            case "Agregar":
                $nombre=$_POST['nombre'];
                $app=$_POST['app'];
                $apm=$_POST['apm'];
                $usuario->createUsuario("$nombre","$app","$apm",$_POST['nivel']);
                break;
            case "Eliminar":
                $ide = $_POST['ide'];
                if($ide != ""){
                    $usuario->deleteUsuario("$_POST[ide]");
                }
                break;
            case "Modificar":
                $idm = $_POST['idm'];
                if($idm != ""){
                    $usuario->updateUsuario("$_POST[idm]","$_POST[nombre]","$_POST[app]","$_POST[apm]","$_POST[nivel]");
                }
                break;
            case "Consultar":
                $idc = $_POST['idc'];
                if($idc != ""){
                    $usuario->readUsuarioS($_POST["idc"]);
                }
                break;
        }
    }
?>

<div class='table-responsive'>
    <form name='alumno' action='TestUsuario.php' method='POST'>
        <table class="table table-bordered">
            <tr>
                <td>Nombre(s):</td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td>Apellido Paterno:</td>
                <td><input type="text" name="app"></td>
            </tr>
            <tr>
                <td>Apellido Materno:</td>
                <td><input type="text" name="apm"></td>
            </tr>
            <tr>
                <td>Nivel:</td>
                <td><select name="nivel">
                        <option value="1">Administrador</option>
                        <option value="2">Maestro</option>
                        <option value="3">Alumno</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Agregar"></td>
            </tr>
            <tr>
                <th>ID:</th><td> <input type="text" name="ide" placeholder="Eliminar"></td>
                <td><input type="submit" name="submit" value="Eliminar"> </td>
            </tr>
            <tr>
                <th>ID:</th><td> <input type="text" name="idm" placeholder="Modificar"></td>
                <td><input type="submit" name="submit" value="Modificar"> </td>
            </tr>
            <tr>
                <th>ID:</th><td> <input type="text" name="idc" placeholder="Consultar"></td>
                <td><input type="submit" name="submit" value="Consultar"> </td>
            </tr>

        </table>
    </form>
</div>

<?php

    //Mandamos llamar la función 'readUsuarioG' del objeto $usuario.
    //Que nos muestra los registros de la BD.
    $usuario->readUsuarioG();

    require 'footer.php';

?>