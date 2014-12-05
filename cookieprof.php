<?php
$id=$_GET['id'];
if ($id!="")
	{
		$id=$_GET['id'];
		SetCookie(acceso,1);
		SetCookie(tipo,'user');
		SetCookie(id,$id);
		SESSION_START();
		$_SESSION['acceso']=1;
		$_SESSION['id']=$id;
		header("location:indexprof.php");
		exit;
	}
else
	{
		header("location:login.php?msg='error de acceso'");
		exit;
	}
?>