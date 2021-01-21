<?php
   session_start();  
   if(!isset($_SESSION['admin']))
   {header("Location: login.php"); }
?>

<!doctype html>
<html>
<head>
 <link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>
<title>ADMIN PANEL |VEBO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="assets/adminhome/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="assets/adminhome/css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="assets/adminhome/js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="assets/adminhome/js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css">
<!--/fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->

<style>
.w3l_agileits_breadcrumbs{
	padding:1em 0;
	background:#f5f5f5;
}
.w3l_agileits_breadcrumbs ul li{
	display:inline-block;
	color:#212121;
	font-weight:600;
	font-family: 'Open Sans', sans-serif;
	letter-spacing:1px;
}
.w3l_agileits_breadcrumbs ul li a{
    color: #e53238;
	text-decoration:none;
	font-family: 'Open Sans', sans-serif;
}
.w3l_agileits_breadcrumbs ul li a:hover{
	color:#212121;
}
.w3l_agileits_breadcrumbs ul li span{
	padding:0 2em;
}
.w3l_agileits_breadcrumbs_inner {
    padding: 0 2em;
}
h2.w3_inner_tittle {
    text-transform: uppercase;
    color: #000;
    margin: 0.5em 0 1em 0;
    font-weight: 700;
    font-size: 1.8em;
    letter-spacing: 1px;
}
</style>
</head>
	<body>
<!--header-->
		<div class="header" id="home">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-collapse">
					  <h1><a class="navbar-brand" href="adminhome.php"><i class="glyphicon glyphicon-home col-lg-5"></i>VEBO<br /><span></span></a></h1>
                       <div><a href="signout.php"><img src="assets/adminhome/images/power.png" class="navbar-brand pull-right "></a>
					   <a href="changepass.php"><img src="assets/adminhome/images/settings.png" class="navbar-brand pull-right "></a></div>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->

					
				<!-- /.container-fluid -->
				  
				<div class="clearfix"> </div></div>
			</nav>
			</div>
<!--/script-->
		   <div class="clearfix"> </div>

<!-- Top Navigation -->
<div >
  <div class="navbar-collapse" style="background-color:#32302f" >
	<h2></h2>
    <p></p>
	</div>
</div>
<div >
	<div class="container" >
	<h2></h2>
    <p></p>
	</div>
</div>
<div >
	<div class="container" >
	<h2></h2>
    <p></p>
	</div>
</div>

<!--header-->
<!-- gallery -->
			<!-- Page Starts Here -->
			<div class="content">
				<div class="container">
					<div class="gallery">
						<div class="gallery-top">
							<div class="view view-tenth">
							  <img src="assets/adminhome/images/g1.png" alt=""/>
								<div class="mask ">
									<h3>USER MANAGEMENT</h3>
                                    <p></p>
									<a href="usermanage.php"><button class="btn btn-info btn-sm">ENTER</button></a>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="assets/adminhome/images/g2.jpg" alt=""/>
								<div class="mask">
									<h3>VENUE MANAGEMENT</h3>
									<p></p>
                                    <a href="venuemanage.php"><button class="btn btn-info btn-sm">ENTER</button></a>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="assets/adminhome/images/g3.png" alt=""/>
								<div class="mask">
									<h3>AMINITIES MANAGEMENT</h3>
									<p></p>
                                    <a href="amenitymanage.php"><button class="btn btn-info btn-sm">ENTER</button></a>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="assets/adminhome/images/dep.jpg" alt=""/>
								<div class="mask">
									<h3>DEPARTMENT MANAGEMENT</h3>
									<p></p>
                                    <a href="depmanage.php"><button class="btn btn-info btn-sm">ENTER</button></a>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="assets/adminhome/images/g5.png" alt=""/>
								<div class="mask">
									<h3>REPORT MONITORING</h3>
									<p></p>
                                    <a href="blockadminpanel/production/reportmonitoring.php"><button class="btn btn-info btn-sm">ENTER</button></a>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="assets/adminhome/images/g6.png" alt=""/>
								<div class="mask">
									<h3>NOTIFICATIONS</h3>
									<p></p>
                                    <a href="viewnotification.php"><button class="btn btn-info btn-sm">ENTER</button></a>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="assets/adminhome/images/g7.png" alt=""/>
								<div class="mask">
									<h3>FEEDBACK</h3>
									<p></p>
                                    <a href="viewfeedback.php"><button class="btn btn-info btn-sm">ENTER</button></a>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="assets/adminhome/images/g8.png" alt=""/>
								<div class="mask">
									<h3>MAP MANAGEMENT</h3>
									<p></p>
									 <a href="userpanel/production/map.php"><button class="btn btn-info btn-sm">ENTER</button></a>
								</div>
							</div>
                          <div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<!-- Page Ends Here -->
		<!-- //gallery -->
<!--footer-->

<div class="footer" style="background-color:dark">
		<!-- container -->
		<div class="container">
		
		  <div class="clearfix"> </div>	
		</div>
		<!-- //container -->
	</div>
<!--/footer-->
<!--copy-rights--><div class="copyrights">
	 <p align="center">© 2017 MESTOZYME. All Rights Reserved | Design by MESTOZYME </p>
</div>	<!--/copy-rights-->
		</body>
</html>
