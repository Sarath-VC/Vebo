
<?php session_start(); 
if(!isset($_SESSION['admin']))
   {header("Location: http://localhost/vebo/login.php"); } ?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>
    <title>Password Change Form|VEBO</title>
    
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
                    <!-- /.navbar -->                        <header class="head"><!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              <i class=" col-lg-5"></i>   &nbsp;
              CHANGE PASSWORD</h3>
                      </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top --><!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <!--BEGIN INPUT TEXT FIELDS-->
<form action="" method="post">
<div class="row">
<div class="col-lg-12">
    <div class="box dark">
        <header>
            <div >
            <h5><!-- .toolbar -->            </h5>
            <div class="toolbar">
              <nav style="padding: 8px;">
                
                </nav>
            </div>            <!-- /.toolbar -->
        </header>
        <div id="" class="body">
        
            <div class="form-horizontal">

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Old Password</label>

                    <div class="col-lg-4">
                        <input type="password" id="text1" placeholder="********" required pattern="[a-z0-9A-Z]{8,16}"class="form-control" name="oldpass"/>
                    </div>
                </div>
                  <!-- /.form-group -->
                  
                  <!-- /.form-group -->
                     
                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">New Password</label>

                    <div class="col-lg-4">
                        <input type="password" id="newpass" placeholder="********" required pattern="[a-z0-9A-Z]{8,16}"class="form-control" name="newpass"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Confirm New Password</label>

                    <div class="col-lg-4">
                        <input type="password" id="newcpass" placeholder="********" required pattern="[a-z0-9A-Z]{8,16}"class="form-control" name="newcpass" onmouseout="Validate();"/>
                        <label id="labeltxt"></label>
                    </div>
                </div>
                <!-- /.form-group -->
                
                
               
<!-- /.form-group -->

            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
</div>
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
<button class="btn btn-primary "  type="submit" name="btn">SUBMIT</button>
<button class="btn btn-primary pull-right " type="submit" name="btnd" onclick="disca()">DISCARD</button>
</div>
</form>
<?php
if(isset($_POST['btn']))
{
  include('connection.php');
  $sql="select * from login where user_id=1";
  $res=mysql_query($sql,$con);
  $row=mysql_fetch_assoc($res);
  $p=$_POST['newcpass'];
  $up=$_POST['oldpass'];
  if($up==$row['password'])
  {
    $sql1="update login set password='$p' where user_id=1";
    $res1=mysql_query($sql1,$con);
    if($res1)
    {
        ?>  <script type="text/javascript">alert("Password has been changed");
        window.location.assign("http://localhost/vebo/adminhome.php");</script>  <?php
    }
    else
    {
        echo mysql_error();
    }
  }
  else
  {
    ?>  <script type="text/javascript">alert("You were entered a wrong Password !!! Please enter your correct password.");
        window.location.assign("http://localhost/vebo/changepass.php");</script>  <?php

  }
}

?>
<script> function disca(){ window.location.assign("http://localhost/vebo/adminhome.php"); }</script>
<div class="row"></div>
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

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>

                    <script src="assets/lib/inputlimiter/jquery.inputlimiter.js"></script>
                    <script src="assets/lib/validVal/js/jquery.validVal.min.js"></script>
                    <script src="assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>

            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>
                 <script type="text/javascript">
                           function Validate() {
                                var password = document.getElementById("newpass").value;
                                var confirmPassword = document.getElementById("newcpass").value;
                                if (password != confirmPassword) {
                                    document.getElementById("labeltxt").innerHTML="Password does not match";
                                    
                                    return false;
                                }
                                else{
                                  document.getElementById("labeltxt").innerHTML=""; }
                                return true;
                            }
                 </script>
                <script>
                    $(function() {
                      Metis.formGeneral();
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
