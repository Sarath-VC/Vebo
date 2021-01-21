<?php
session_start();
if(isset($_SESSION['user']))
	{unset($_SESSION['user']);
     session_destroy();
 header("Location: login.php");}
elseif(isset($_SESSION['block']))
	{
		include('connection.php');
		$u=$_SESSION['block'];
		$sql="delete from log where user_id=$u";
		$res=mysql_query($sql,$con);
		unset($_SESSION['block']);
		session_destroy();
		header("Location: login.php");
	}
	else
	{
		unset($_SESSION['admin']);
		session_destroy();
		header("Location: login.php");
	}


exit;
?>