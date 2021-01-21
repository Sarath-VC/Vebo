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

    <title>Department Management Form|VEBO</title>
    
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
              <i class="col-lg-5"></i>   &nbsp; DEPARTMENT MANAGEMENT</h3>
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
                   
                             
				<form action="">
	<div class="box">
     <header>
            <div class="icons"><i class="">DEPARTMENTS</i></div>
            
        </header>
	    <div class="body">
		<table class="table table-condensed table-hovered sortableTable">
		    <thead>
			<tr>
			    <th>DEP ID<i class="fa sort"></i></th>
			    <th>DEPARTMENT NAME<i class="fa sort"></i></th>
				<th>MANAGE<i class="fa sort"></i></th>
			</tr>
		    </thead>
		    <tbody>
            <?php
			error_reporting(E_ALL ^ E_DEPRECATED);
               include('connection.php');
                  $sql="Select * from department where dflag=1";
                  $result=mysql_query($sql,$con);
                  //while($row=mysql_fetch_assoc($result))
                  if(!mysql_query($sql,$con))
                 { die('Error'.mysql_error($con)); }


                  while($row=mysql_fetch_assoc($result))
                  {
                    echo "<tr><form method='GET'><td>".$row['dept_id']."</td><td>".$row['dept_name']."</td><td>"?><a href="editdep.php?did=<?php echo $row['dept_id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href="deletedep.php?did=<?php echo $row['dept_id']; ?>">
            <span class="glyphicon glyphicon-trash"></span></a> <?php echo "</td></tr>";
                  }
              
               //mysql_close($con);
            ?> 


		    </tbody>
		</table>
	    </div></div>
		</form>
                    
                </div>
				
                <div class="tab-pane fade" id="preview">
                
                
                <div class="wmd-panel">
                        <div id="wmd-button-bar" class="btn-toolbar"></div>
                    
<form action="" method="post">
<div class="row">
<div class="col-lg-12">
    <div class="box dark">
       <header>
            <div class="icons"><i class="">DEPARTMENT REGISTRATION</i></div>
            <h5><!-- .toolbar -->            </h5>
            <div class="icons pull-right"><a href="depmanage.php"><i class="glyphicon glyphicon-share-alt"> BACK</i></a></div>
             <!-- /.toolbar -->
        </header>
        <div id="" class="body">
        
            <div class="form-horizontal">

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Department name</label>

                    <div class="col-lg-4">
                        <input type="text" required name="dep" placeholder="Department name" class="form-control">
                    </div>
                </div>
             
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
<button class="btn btn-primary " name="depreg" type="submit" onclick="return confirm('Are you sure want to confirm your Registration !') ">PROCEED</button>
<button class="btn btn-primary pull-right " type="submit" name="disc" onclick="disca();">DISCARD</button>
 
</div>
</form>
<?php
               if(isset($_POST['depreg']))
               {
                
                $sql="insert into department(dept_name,dflag) values('$_POST[dep]',1)";
                $result=mysql_query($sql,$con);
                  //while($row=mysql_fetch_assoc($result))
                  if(!$result)
                 { die('Error'.mysql_error($con)); }
            else{
                ?>
<script type="text/javascript">alert("Successfully Inserted");
window.location.assign("http://localhost/vebo/depmanage.php");</script>

                <?php
            }
         }

mysql_close();
            ?>  



<script>
function myFunction() {
    var x;
    if (confirm("Are you sure want to confirm your registration !") == true) {
        x = "You pressed OK!";
    } else {
        x = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = x;
}
</script>
 <script> function disca(){ window.location.assign("http://localhost/vebo/depmanage.php"); }</script> 
              
					
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
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.formGeneral();
                    });
                </script>
            
        </body>

</html>
