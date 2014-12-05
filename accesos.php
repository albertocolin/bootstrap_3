<?php
$idu=$_GET['idu'];
$nivel=$_GET['nivel'];

setCookie('idu',$idu);
setCookie('acceso',1);
SESSION_start();
$_SESSION['idu']=$idu;
$_SEESION['acceso']=1;

if($idu=="")
{
print"<meta http-equiv='refresh' content='0;
       url=login.php?msg=$msg=1'>";	   
	   exit; 
}

if($nivel=='1')
{
setCookie('idu',$idu);
setCookie('acceso',1);
print"<meta http-equiv='refresh' content='0;
       url=indexadmin.php?idu=$idu'>";
exit;
	}
	else
	{
	if($nivel=='2'){
	setCookie('idu',$idu);
	setCookie('acceso',1);
	print"<meta http-equiv='refresh' content='0;
       url=indexprof.php?idu=$idu'>";
	exit;
		}
	}
?>