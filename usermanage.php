<!doctype html>
<?php session_start(); 
if(!isset($_SESSION['admin']))
   {header("Location: http://localhost/vebo/login.php"); } ?>
<html>
<?php error_reporting(E_ALL ^ E_DEPRECATED);  ?>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>
    <title>User Mangement Form|VEBO</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">


        <link rel="stylesheet" href="/assets/lib/inputlimiter/jquery.inputlimiter.css">
        <link rel="stylesheet" href="/assets/lib/bootstrap-daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="/assets/libs/Uniform.js/2.1.2/themes/default/css/uniform.default.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.3/jquery.tagsinput.css">
        <link rel="stylesheet" href="assets/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
        <link rel="stylesheet" href="assets/libs/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css">
        <link rel="stylesheet" href="assets/libs/datepicker/1.3.1/css/datepicker3.min.css">
        <link rel="stylesheet" href="assets/libs/bootstrap-colorpicker/2.0.1/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="assets/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

  </head>

        <body class="  ">


            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                    <div class="navbar-collapse">
                    <!-- /.container-fluid -->
                    <h1><a class="navbar-brand" href="adminhome.php"><i class="glyphicon glyphicon-home col-lg-5"></i>VEBO<br /><span></span></a></h1>
                    </div>
                    <div class="clearfix"> </div></div>
                    </nav> 
                    <!-- /.navbar -->                        
                    <header class="head"><!-- /.search-bar -->
                            <div class="main-bar">
                                <h3 align="center">&nbsp;USER MANAGEMENT</h3>
                     
                        </div>    <!-- /.main-bar -->
                  </header>
                         <!-- /.head -->
              </div>
                <!-- /#top --><!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <!--BEGIN INPUT TEXT FIELDS-->
<div class="row"><!--BEGIN SELECT        --></div>
<div class="row">
</div>
<div class="row">
    <!-- .col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <ul class="nav nav-tabs pull-right">
                    <li class="active"><a href="#markdown" data-toggle="tab">MANAGE</a></li>
                    <li><a href="#preview" data-toggle="tab">NEW</a></li>
                </ul>
            </header>
            <div id="div-3" class="body tab-content">
                <div class="tab-pane fade active in" id="markdown">
                   
                             
				<form name="viewuser" action="" method="post">
	<div class="box">
     <header>
            <div class="icons"><i class="">USERS</i></div>
            
        </header>
	    <div class="body"><!--kolikkoo-->	<table class="table table-condensed table-hovered sortableTable">
		    <thead>
			<tr>
			    <th>USER ID<i class="fa sort"></i></th>
			    <th>USERNAME<i class="fa sort"></i></th>
			    <th>TYPE<i class="fa sort"></i></th>			    
				<th>DEPARTMENT<i class="fa sort"></i></th>
				<th>E-MAIL<i class="fa sort"></i></th>
				<th>CONTACT<i class="fa sort"></i></th>
				<th>MANAGE<i class="fa sort"></i></th>
			</tr>
		    </thead>
		    <tbody>
<?php
	
	$con=mysql_connect("localhost","root","");
	if (!$con)
  {
  die('Could not connect: '.mysql_error());
  }
 
mysql_select_db('vebo',$con);
	$sql="SELECT * FROM login WHERE user_id != 1 and lflag=1";
	
	$res=mysql_query($sql,$con);
	while($row=mysql_fetch_assoc($res))
	{   
		echo "<tr><form method='GET'><td>".$row['user_id']."</td><td>".$row['user_name']."</td><td>";
		$u=$row['user_id'];
		switch($row['user_type'])
		{
			case "BA" :echo "BLOCK ADMIN</td><td>"; break;
				case "FAC" :echo "FACULTY</td><td>"; break;
				case "EC" :echo "EXAM CONTROLLER</td><td>"; break;
				case "CH" :echo "CHAIRMAN</td><td>"; break;
				case "AS" :echo "ASSOCIATION SECRETARY</td><td>"; break;
				case "CR" :echo "CLASS REPRESENTIVE</td><td>"; break;
		}
		if($row['user_type']=="BA"||$row['user_type']=="FAC"||$row['user_type']=="EC")
		{
		
			$sql1="SELECT dept_name,exe_email,exe_contact FROM executive join department on executive.dept_id=department.dept_id and executive.user_id=$u";
	
	$res1=mysql_query($sql1,$con);
			$row1=mysql_fetch_assoc($res1);
			do{
				echo $row1['dept_name'];
	     echo "</td><td>".$row1['exe_email']."</td><td>".$row1['exe_contact']."</td><td>"; ?><a href="profile.php?uid=<?php echo $row['user_id']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;&nbsp;<a href="edit.php?uid=<?php echo $row['user_id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href="delete.php?uid=<?php echo $row['user_id']; ?>"><span class="glyphicon glyphicon-trash"></span></a> <?php echo "</td></tr>";
			}while($row1=mysql_fetch_assoc($res1) && mysql_num_rows($res1)==1);
			echo "</form>";
	  
		
	}
		elseif($row['user_type']=="CH"||$row['user_type']=="CR"||$row['user_type']=="AS")
		{
			$sql1="SELECT * FROM student join department on student.dept_id=department.dept_id and student.user_id=$u";
	
	$res1=mysql_query($sql1,$con);
	$row1=mysql_fetch_assoc($res1);
	do{
		echo $row1['dept_name'];
		  echo "</td><td>".$row1['stud_email']."</td><td>".$row1['stud_contact']."</td><td>";?>
		  <a href="profile.php?uid=<?php echo $row['user_id']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;&nbsp;<a href="edit.php?uid=<?php echo $row['user_id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href="delete.php?uid=<?php echo $row['user_id']; ?>"><span class="glyphicon glyphicon-trash"></span></a> <?php echo "</td></tr>";
		}while($row1=mysql_fetch_assoc($res1) && mysql_num_rows($res1)==1);
			echo "</form>";
	}
	
		
		
	}
	?>
	 </tbody>
		</table>
	
		</div></div>

                    
                </div>
				
                <div class="tab-pane fade" id="preview">
                
                
                <div class="wmd-panel">
                        <div id="wmd-button-bar" class="btn-toolbar"></div>
                    
<form name="adduser" action="" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="box dark">
                <header>
                    <div class="icons"><i class="glyphicon glyphicon-user"> USER REGISTRATION</i></div>
                        <h5><!-- .toolbar -->            </h5>
                        <div class="icons pull-right"><a href="usermanage.php"><i class="glyphicon glyphicon-share-alt"> BACK</i></a></div>
                 <!-- /.toolbar -->
                </header>
                <div id="" class="body">
        
                    <div class="form-horizontal">

                        <div class="form-group">
                            <label for="text1" class="control-label col-lg-4">User Name</label>

                            <div class="col-lg-4">
                                <input name="name" type="text" required class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>
                  <!-- /.form-group -->
                  
                        <div class="form-group">
                            <label  class="control-label col-lg-4">User Type</label>

                            <div class="col-lg-4">
                                <select name="type" required class="form-control" title="SELECT">
                                    <option label value="">SELECT</option>
                                    <option value="BA">BLOCKADMIN</option>
                                    <option value="FAC">FACULTY</option>
                                    <option value="EC">EXAMINATION CONTROLLER</option>
                                    <option value="CH">CHAIRMAN</option>
                                    <option value="AS">ASSOCIATION SECRETARY</option>
                                    <option value="CR">CLASS REPRESENTATIVE</option>
                                </select>
                            </div>
                        </div>
                
                <!-- /.form-group -->
                  
                        <div class="form-group">
                            <label class="control-label col-lg-4">Department</label>
                            <div class="col-lg-4">
		                        <select name="dep" required class="form-control" title="SELECT">
                                    <option label value="">SELECT</option>
                                        <?php			
			                                 $sql="SELECT * FROM department where dflag=1";
			                                 $res=mysql_query($sql,$con);
			                                 while($row=mysql_fetch_assoc($res)):
			                            ?>
                                        <option value="<?php echo $row['dept_id']; ?>"><?php echo $row['dept_name'];  ?></option>
                                        <?php endwhile; ?>
                                    </select>
                            </div>
                        </div>


                
                <!-- /.form-group -->
                    <!--    <div class="form-group">
                            <label class="control-label col-lg-4">Password</label>

                            <div class="col-lg-4">
                                <input name="password" type="password" required pattern="[a-z0-9A-Z]{8,16}" class="form-control" id="password" placeholder="*******">
                            </div>
                        </div> -->
                  <!-- /.form-group -->
                    <!--    <div class="form-group">
                            <label for="text2" class="control-label col-lg-4">Confirm Password</label>

                            <div class="col-lg-4">
                                <input name="confirm" type="password" required pattern="[a-z0-9A-Z]{8,16}" class="form-control" id="confirm" onmouseout="Validate()" placeholder="*******">
                                 <label id="labeltxt"></label>
                            </div>
                        </div>
                     -->   
                  <!-- /.form-group -->
                        <div class="form-group">
                            <label for="text1" class="control-label col-lg-4">E-Mail</label>

                            <div class="col-lg-4">
                                <input name="email" type="email" required pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" placeholder="you@example.com">
                            </div>
                        </div>
                <!-- /.form-group -->
                
                        <div class="form-group">
                            <label class="control-label col-lg-4">Mobile</label>

                            <div class="col-lg-4">
                                <input name="mobile" type="tel" required pattern="[0-9]{10}"  class="form-control">
                            </div>
                        </div>
                <!-- /.form-group -->   
                    </div>
                </div>
       
		    </div>
        </div>
    </div>
    <div class="row"></div>
<div class="row">
    <!-- .col-lg-12 -->
    <div class="col-lg-12">
        <!-- .box -->
        <div class="box">
        </div>
    </div>
</div>
<!-- /.row -->
<!--END DATE RANGE PICKER -->
<div style=" background-color: #1dcadf;color: white;padding: 14px 20px;margin: 8px 0;border: none;  cursor: pointer; width: 100%;">

<button class="btn btn-primary " name="regsubbtn" type="submit" >PROCEED</button>

<button class="btn btn-primary pull-right " name="disc" type="submit" onclick="disca();" >DISCARD</button>

</div>
</form>
 
<?php
   
    if(isset($_POST['regsubbtn']))

    {
$name=$_POST['name'];
$usertype=$_POST['type'];
$dept=$_POST['dep'];
 $passwrd=$name.rand(0,999);
//$pass1=$_POST['password'];
//$pass2=$_POST['confirm'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: '.mysql_error());
  }
 

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
$mail->addAddress($email); 

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Account Registred';
$mail->Body    = 'This is an auto genereated mail dont reply for this. Your username for VEBO is '.$name.' and the password is '.$passwrd.' Please log into vebo and get in touch with us. Thank you';
$mail->AltBody = 'This is an auto genereated mail dont reply for this. Your username for VEBO is '.$name.' and the password is '.$passwrd.' Please log into vebo and get in touch with us. Thank you';

if(!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "<script>alert('Username and password has been generated');</script>"; 
}






mysql_select_db('vebo',$con);
        
    if ($usertype=="BA"||$usertype=="FAC"||$usertype=="EC")
    {
        
        $sql1="INSERT INTO login (user_name,password,user_type,lflag) VALUES ('$name','$passwrd','$usertype',1)";
        mysql_query($sql1,$con);
        $res1=mysql_query("SELECT * FROM login WHERE user_name='$name' ");
         while($rows=mysql_fetch_assoc($res1))
      {
         $dbuserid=$rows["user_id"];
          
      }
        
    
        $query1="INSERT INTO executive (exe_email,exe_contact,dept_id,user_id,eflag) VALUES ('$email','$mobile','$dept','$dbuserid',1)";
        $resq1=mysql_query($query1,$con);
        if($res1)
           {
            if($resq1)
                {
                    ?> <script>window.location.assign("http://localhost/vebo/usermanage.php");</script>  <?php
                 }
            else
                echo "<script>alert('Updated Partially');</script>";
           }
           else
               echo "<script>alert('Cannot Update');</script>";
        
            
    }
    elseif($usertype=="CH"||$usertype=="AS"||$usertype=="CR")
    {
        
        $sql2="INSERT INTO login (user_name,password,user_type,lflag) VALUES ('$name','$passwrd','$usertype',1)";
        mysql_query($sql2,$con);
        $res2=mysql_query("SELECT * FROM login WHERE user_name='$name' ");
         while($rows=mysql_fetch_assoc($res2))
      {
         $dbuserid=$rows["user_id"];
          
      }
        
        
        $query2="INSERT INTO student (stud_email,stud_contact,dept_id,user_id,sflag) VALUES ('$email','$mobile','$dept','$dbuserid',1)";
        $resq2=mysql_query($query2,$con);
        if($res2)
           {
            if($resq2)
                {
                    ?> <script>window.location.assign("http://localhost/vebo/usermanage.php");</script>  <?php
                 }
            else
                echo "<script>alert('Updated Partially');</script>";
           }
           else
               echo "<script>alert('Cannot Update');</script>";
        
            
        
    }
        
mysql_close($con);
    } 
    ?>
    <script> function disca(){ window.location.assign("http://localhost/vebo/usermanage.php"); }</script> 
    		
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!--END DATE RANGE PICKER -->
<!--END GRID INPUTS-->
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content --> 
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>VEBO ADMIN PANEL &copy; MESTOZYME</p>
            </footer>
            <!-- /#footer -->
      
            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/jquery.uniform.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.3/jquery.tagsinput.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/autosize.js/1.18.17/jquery.autosize.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/js/bootstrap-datepicker.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.0.1/js/bootstrap-colorpicker.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>

                    <script src="/assets/lib/inputlimiter/jquery.inputlimiter.js"></script>
                    <script src="/assets/lib/validVal/js/jquery.validVal.min.js"></script>
                    <script src="/assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>

            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <script type="text/javascript">
                            function Validate() {
                                var password = document.getElementById("password").value;
                                var confirmPassword = document.getElementById("confirm").value;
                                if (password != confirmPassword) {
                                    document.getElementById("labeltxt").innerHTML="Password does not match";
                                    return false;
                                }
                                else{
                                  document.getElementById("labeltxt").innerHTML="";
                                }
                                return true;
                            }
            </script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.formGeneral();
                    });
                </script>

            
        </body>

</html>
