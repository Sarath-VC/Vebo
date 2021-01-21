<!doctype html>
<?php session_start(); 
if(!isset($_SESSION['admin']))
   {header("Location: http://localhost/vebo/login.php"); } ?>
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
    <title>Amenity Mangement Form|VEBO</title>
    
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
        <link rel="stylesheet" href="/assets/libs/bootstrap-colorpicker/2.0.1/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="/assets/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

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
                                <h3>
              <i class="col-lg-5"></i>      &nbsp;AMENITY MANAGEMENT</h3>
                     
                        </div>    <!-- /.main-bar -->
                  </header>
                </div>         <!-- /.head -->
            </div>
                <div class="wmd-panel">
                        <div id="wmd-button-bar" class="btn-toolbar"></div>
                        <?php
         error_reporting(E_ALL ^ E_DEPRECATED);
        $u=$_GET["aid"];
        include('connection.php');
        $sql="select * from aminities join department on a_id=$u and aminities.dept_id=department.dept_id";
        $res=mysql_query($sql,$con);
        while($row=mysql_fetch_assoc($res)){
        
        
        ?>
                    
<form action="" method="POST" enctype="multipart/form-data">

<div class="col-lg-12">
    <div class="box dark">
        <header>
                    <div class="icons"><i class="glyphicon glyphicon-blackboard"> AMENITY</i></div>
                        <h5><!-- .toolbar -->            </h5>
                        <div class="icons pull-right"><a href="amenitymanage.php"><i class="glyphicon glyphicon-share-alt"> BACK</i></a></div>
                 <!-- /.toolbar -->
                </header>
    </div>
 </div>       
        <div id="" class="body">
        
            <div class="form-horizontal">

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Aminity name</label>

                    <div class="col-lg-4">
                        <input type="text" id="text1" placeholder value="<?php echo $row['a_name'] ?>"class="form-control" name="aname">
                    </div>
                </div>
                  <!-- /.form-group -->
 <div class="form-group">
    <label class="control-label col-lg-4">Aminity type</label>

    <div class="col-lg-4">
        <select class="form-control" name="atype">
           <option required><?php echo $row['a_type']; ?></option>
            <option>Projector</option>
            <option>Sound system</option>
            <option>Laptop</option>
            <option>Computer</option>
           
        </select>
    </div>
</div>
                
                    
                  <!-- /.form-group -->

        
   
 <div class="form-group">
    <label class="control-label col-lg-4">Department</label>

   
    <div class="col-lg-4">
        <select class="form-control" name="adep">
                                        <option  value="<?php echo $row['dept_id'] ?>" required pattern="select"><?php echo $row['dept_name'] ?></option>
                                            <?php 
                                                include('connection.php');
                                                $sqld="select * from department";
                                                $resd=mysql_query($sqld,$con);
                                                while($rowd=mysql_fetch_assoc($resd)){
                                            ?>
                                        <option value="<?php echo $rowd['dept_id']; ?>"><?php echo $rowd['dept_name']; ?></option>
                                            <?php } ?>
                                    </select>
    </div>
</div>    
          
                <!-- /.form-group -->
              
                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Image</label>

                    <div class="col-lg-4" style="float:left;">
                       <img  class="media-object user-img " alt="Amenity Picture" 
            src="data:image/jpeg; base64,<?php echo base64_encode($row['a_image']); ?>" width="132" height="170"/>
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
  
            <div style=" background-color: #1dcadf;color: white;padding: 14px 20px;margin: 8px 0;border: none;  cursor: pointer; width: 100%;">
<button class="btn btn-primary "  type="submit" name="btnp">DELETE</button>
<button class="btn btn-primary pull-right " type="submit" name="btnd">DISCARD</button>
</div>  

<?php } ?>
</form>
            

 <?php
                    if(isset($_POST["btnp"]))
                        {
                            $conam=addslashes(file_get_contents($_FILES['aimg']['tmp_name']));
                            $sql="update aminities set a_name='$_POST[aname]',a_type='$_POST[atype]',dept_id='$_POST[adep]',a_image='{$conam}',aflag=0 where a_id=$u";
                            $result=mysql_query($sql,$con);
                            if(!$result)
                                { 
                                    die('Error'.mysql_error($con)); }
                            else{
                ?>
                                    <script type="text/javascript">alert("Successfully Deleted");</script>
                                    <script>window.location.assign("http://localhost/vebo/amenitymanage.php");</script><?php
                                }
         
                        }
                 if(isset($_POST["btnd"])){ ?> <script>window.location.assign("http://localhost/vebo/amenitymanage.php");</script>  <?php }
                mysql_close($con);

                ?>

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
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.formGeneral();
                    });
                </script>

            
        </body>

</html>
