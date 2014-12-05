<?php
setCookie('idu',"");
setCookie('acceso',"");
SESSION_start();
session_unset();
session_destroy();
$msg="Sesion terminada";
print"<meta http-equiv='refresh' content='0;
       url=login.php?msg=$msg'>";
exit;
?>