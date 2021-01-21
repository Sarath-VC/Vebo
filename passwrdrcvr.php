
<!DOCTYPE html>
<html lang="zxx">
<head>
 <link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>
<title>VEBO| RECOVERY </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
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
														<form action="" method="post">
															<input type="email" name="reml" placeholder="REGISTRED E-MAIL" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="">
                                                            															<div class="tp">
																<input type="submit" value="SEND" name="send">
															</div>
															
														</form>
													</div>
													<h6>
													<a href="login.php">BACK TO LOGIN</a><h6>

													 
												</div>

					

				    </div>
				    <?php
                     if(isset($_POST['send']))
                     {
                     include('connection.php');
		             $sql="select * from student where stud_email='$_POST[reml]'";
		             $res=mysql_query($sql,$con);
		             $resn=mysql_num_rows($res);
		             $sql1="select * from executive where exe_email='$_POST[reml]'";
		             $res1=mysql_query($sql1,$con);
		             $resn1=mysql_num_rows($res1);
		             $recml=$_POST['reml'];
		             if($resn==1)
		             {
                         while($row=mysql_fetch_assoc($res))
                         {
                         	$u=$row['user_id'];
                         	$sqlu="select * from login where user_id=$u and lflag=1";
		                    $resu=mysql_query($sqlu,$con);
		                    while($rowu=mysql_fetch_assoc($resu))
                            {


                            	date_default_timezone_set('Etc/UTC');
require 'mailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();

$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;                         // Enable SMTP authentication
$mail->Username = 'cevmca2015@gmail.com';                 // SMTP username
$mail->Password = 'cevmca@2015';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->FromName = "VEBO";

$mail->setFrom('cevmca2015@gmail.com');
$mail->addAddress($recml); 

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Account recovery';
$mail->Body    = 'This is an auto genereated mail dont reply for this. Your username for VEBO is '.$rowu['user_name'].' and the password is '.$rowu['password'];
$mail->AltBody = 'This is an auto genereated mail dont reply for this. Your username for VEBO is '.$rowu['user_name'].' and the password is '.$rowu['password'];

if(!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "<script>alert('Username and password has been send to your email $recml');</script>"; 
}


                         
		                    }
                         }
		             }
		             elseif($resn1==1)
		             {
                           while($row=mysql_fetch_assoc($res1))
                         {
                         	$u=$row['user_id'];
                         	$sqlu="select * from login where user_id=$u and lflag=1";
		                    $resu=mysql_query($sqlu,$con);
		                    while($rowu=mysql_fetch_assoc($resu))
                            {
                         


                            	date_default_timezone_set('Etc/UTC');
require 'mailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();

$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;                         // Enable SMTP authentication
$mail->Username = 'cevmca2015@gmail.com';                 // SMTP username
$mail->Password = 'cevmca@2015';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->FromName = "VEBO";

$mail->setFrom('cevmca2015@gmail.com');
$mail->addAddress($recml); 

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Account recovery';
$mail->Body    = 'This is an auto genereated mail dont reply for this. Your username for VEBO is '.$rowu['user_name'].' and the password is '.$rowu['password'];
$mail->AltBody = 'This is an auto genereated mail dont reply for this. Your username for VEBO is '.$rowu['user_name'].' and the password is '.$rowu['password'];

if(!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
       echo "<script>alert('Username and password has been send to your email $recml');</script>"; 
}


		                    }
                         }
		             }

                    }
				    ?>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 MESTOZYME.All Rights Reserved | Design by <a href="">MESTOZYME</a></p>
</div>	
<!--copy rights end here-->
<!-- js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="login/js/script1.js"></script>
          <script type="text/javascript" src="login/js/jquery-2.1.4.min.js"></script>
		  <script src="login/js/modernizr.custom.js"></script>
		
		   <script src="login/js/classie.js"></script>
		  <script src="login/js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
<script src="login/js/scripts.js"></script>
<script type="text/javascript" src="login/js/bootstrap-3.1.1.min.js"></script>
</body>
</html>