<?php
$id=$_GET['id'];
if ($id!="")
	{
		$id=$_GET['id'];
		SetCookie(acceso,1);
		SetCookie(tipo,'admin');
		SetCookie(id,$id);
		SESSION_START();
		$_SESSION['acceso']=1;
		$_SESSION['id']=$id;
		header("location:indexadmin.php");
		exit;
	}
else
	{
		header("location:login.php?msg='error de acceso'");
		exit;
	}
?>