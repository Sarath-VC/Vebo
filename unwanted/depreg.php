<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	if(isset($_POST['regsubbtn']))

	{
	error_reporting(E_ALL ^ E_DEPRECATED);
	$depname=$_POST['dep'];
	$con = mysql_connect("localhost","root","");
if(!$con)
{
    die('Connection Failed'.mysql_error());
}
mysql_select_db("vebo",$con);

$sql="INSERT INTO department(dept_name) VALUES('$depname')";
		
	if(!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
	else
	{
		echo "<script language='javascript'>";
        echo "alert('Department has been successfully registered')";
		echo "</script>";
		?> <script>window.location.assign("http://localhost/vebo/depmanage.php");</script>  <?php
	}

mysql_close($con);
	}
?>	
</body>
</html>