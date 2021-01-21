<?php
header('Refresh: 5; URL=http://localhost/vebo/logout.php');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");    
session_start();  
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
 <link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>

<title>VEBO|Logging Out </title>
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

        <div class="wthree_agile_admin_info">
	    <div class="clearfix"></div>
			<div class="inner_content">
			    <div class="inner_content_w3_agile_info">
				<div class="registration admin_agile">			
			    <div class="signin-form profile admin">
				    <a href="index.php"><h2><img src="icons/iconv.png" alt="logo">VEBO</h2></a>
				    <div class="copy">
                       <img src="login/images/loading5.gif" width="50px" height="50px" />
                       </br></br></br>
                       <h5>Logging Out... Please wait...</h5><h2> </h2>
				    </div>
				    <div class="copyrights"><p>© 2017 MESTOZYME</p></div>
			    </div>
				</div>
	            </div>
	        </div>
        </div>
		
    </body>
</html>


