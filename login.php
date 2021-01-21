<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");    
session_start();  
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
 <link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>
<title>VEBO| Login </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- //custom-theme -->
<link href="login/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="login/css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="login/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="login/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="login/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
	    <div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					

							<div class="registration admin_agile">
								
			<div class="signin-form profile admin">
													<a href="index.php"><h2><img src="icons/iconv.png" alt="logo">VEBO</h2></a>
				<div class="login-form">
														<form action="login.php" method="POST">
															<input type="text" name="name" placeholder="Username" required="">
															<input type="password" name="password" placeholder="*********"  required="">
															<div class="tp">
																<input type="submit" value="LOGIN" name="btn">
															</div>
															
														</form>
													</div>
													<h6>
													<a href="passwrdrcvr.php">RECOVERY</a></h6>

													 
												</div>
                               <?php
 error_reporting(E_ALL ^ E_DEPRECATED);
 if(isset($_POST['btn']))
 {
$username = $_POST["name"];
$password = $_POST["password"];

$con = mysql_connect("localhost","root","");
if(!$con)
{
    die('Connection Failed'.mysql_error());
}
mysql_select_db("vebo",$con);

$query =mysql_query("select * from login where user_name='$username'",$con);
	

	 $rows=mysql_fetch_assoc($query);
		 $dbusername=$rows["user_name"];
		 $dbpassword=$rows["password"];
		 $dbtype=$rows["user_type"];
		  if($username==$dbusername&&$password==$dbpassword&&$dbtype=='ADMIN')
		 { $_SESSION['admin']=$rows["user_id"]; ?> <script>window.location.assign("http://localhost/vebo/adminhome.php");</script>  <?php  }
	 elseif ($username==$dbusername&&$password==$dbpassword&&$dbtype=='BA') {
	 	$_SESSION['block']=$rows["user_id"];
	  ?> <script>window.location.assign("http://localhost/vebo/blockadminpanel/production/blockadminhome.php");</script>  <?php 
	  } 
	  elseif($username==$dbusername&&$password==$dbpassword)
	  {   $_SESSION['user']=$rows["user_id"];
		  $_SESSION['cart']=rand(00000,999999999);
	  	 ?> <script>window.location.assign("http://localhost/vebo/userpanel/production/userhome.php");</script>  <?php 
	  }
	  else
	 {
	?> <script>alert('Username or Password is incorrect !');
	window.location.assign('http://localhost/vebo/login.php');</script>
	<?php
	 }

	  

	
mysql_close();
}
?>
					
                           
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	<p>© 2017 MESTOZYME. All Rights Reserved | Design by MESTOZYME </p>
</div>	
<!--copy rights end here-->


	</div>	
</body>
</html>


