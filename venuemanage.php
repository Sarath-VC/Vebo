<!doctype html>
<?php session_start(); 
if(!isset($_SESSION['admin']))
   {header("Location: http://localhost/vebo/login.php"); } ?>
<html>

<head>
    <meta charset="utf-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>
    <title>Venue Mangement Form |VEBO</title>
    
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
                    <!-- /.navbar -->                        <header class="head"><!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              <i class="col-lg-5"></i>   &nbsp;
            VENUE MANAGEMENT </h3></a>
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
                   
                             
				<form action="" >
	<div class="box">
    
     <header>
            <div class="icons"><i class="">Venues</i></div>
            
        </header>
	    <div class="body">
		<table class="table table-condensed table-hovered sortableTable">
		    <thead>
			<tr>
			    <th>Venue ID<i class="fa sort"></i></th>
			    <th>NAME<i class="fa sort"></i></th>
			    <th>TYPE<i class="fa sort"></i></th>
				<th>DEPARTMENT<i class="fa sort"></i></th>
				<th>IMAGE<i class="fa sort"></i></th>
				<th>MANAGE<i class="fa sort"></i></th>
			</tr>
		    </thead>
		    <tbody>
			 <?php
         error_reporting(E_ALL ^ E_DEPRECATED);
        include('connection.php');
        $sql="select * from venue join department on venue.dept_id=department.dept_id and vflag=1";

        $res=mysql_query($sql,$con);
        if(!$res)
        {
            echo "error".mysql_error($con);
        }

        while($row=mysql_fetch_assoc($res))
        {
            echo "<tr><form method='GET'><td>".$row['v_id']."</td><td>".$row['v_name']."</td><td>".$row['v_type']."</td><td>".$row['dept_name']."</td><td><img alt='No Picture' src='data:image/jpeg; base64,". base64_encode($row['v_image'])."' width='100' height='100'/></td><td>";
            ?>    <a href="viewvenue.php?vid=<?php echo $row['v_id']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;&nbsp;<a href="editvenue.php?vid=<?php echo $row['v_id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href="deletevenue.php?vid=<?php echo $row['v_id']; ?>">
            <span class="glyphicon glyphicon-trash"></span></a> <?php echo "</td></form></tr>";
    
        }
        


        ?>
		    </tbody>
		</table>
	    </div></div>
		</form>
                    
                </div>
				
                <div class="tab-pane fade" id="preview">
                
                
                <div class="wmd-panel">
                        <div id="wmd-button-bar" class="btn-toolbar"></div>
                    
<form action="" method="POST" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-12">
    <div class="box dark">
    <header>
                    <div class="icons"><i class="glyphicon glyphicon-map-marker"> VENUE REGISTRATION</i></div>
                        <h5><!-- .toolbar -->            </h5>
                        <div class="icons pull-right"><a href="venuemanage.php"><i class="glyphicon glyphicon-share-alt"> BACK</i></a></div>
                 <!-- /.toolbar -->
                </header>
        <header>
            <div class="icons"><i class="glyphicon glyphicon-info-sign"></i></div>
            <h5>Venue Details</h5>
            <!-- .toolbar -->
            <div class="toolbar">
              <nav style="padding: 8px;">
                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                      <span class="glyphicon glyphicon-resize-small ">
                  </a>
              </nav>
            </div>            <!-- /.toolbar -->
        </header>
        <div id="" class="body">
        
            <div class="form-horizontal">

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-5">Venue Name</label>

                    <div class="col-lg-3">
                        <input type="text" id="venue" required placeholder="Venue" class="form-control" name="vname">
                    </div>
                </div>
                   <!-- /.form-group -->
 <div class="form-group">
    <label class="control-label col-lg-5">Venue Type</label>

    <div class="col-lg-3">
        <select required class="form-control" name="vtype">
           <option value="" required pattern="select">--select--</option>
            <option>Seminar Hall</option>
            <option>Conference Hall</option>
            <option>Drawing Hall</option>
			<option>Class Room</option>
			<option>Lab</option>
           <option>Department Library</option>
        </select>
    </div>
</div>
                
                    
                  <!-- /.form-group -->

        
   
 <div class="form-group">
    <label class="control-label col-lg-5">Department</label>

   
    <div class="col-lg-3">
        <select required class="form-control" name="vdep">
            <option value="" required pattern="select"> select </option>
            <?php 
            $sqld="select * from department where dflag=1";
            $resd=mysql_query($sqld,$con);
            while($rowd=mysql_fetch_assoc($resd)){
            ?>
          <option value="<?php echo $rowd['dept_id']; ?>"><?php echo $rowd['dept_name']; ?></option>
         <?php } ?>
           
        </select>
    </div>
</div>    
          
                <!-- /.form-group -->
				<div class="form-group">
                    <label for="text1" class="control-label col-lg-5">Discription</label>

                    <div class="col-lg-3">
                        <textarea  id="dimension" required placeholder="" class="form-control" name="vdimen"></textarea>
                    </div>
                </div>
              
                <!-- /.form-group -->
				<div class="form-group">
                    <label for="text1" class="control-label col-lg-5">Seating Capacity</label>

                    <div class="col-lg-3">
                        <input type="text" required pattern="[0-9]{1,3}" id="seating" placeholder="" class="form-control" name="vcap">
                    </div>
                </div>
              
                <!-- /.form-group -->
				</div>
				</div>
				</div>
				</div>
				<!--BEGIN SELECT        -->
<div class="col-lg-12">
<div class="box dark">
<header>
    <div class="icons"><i class="glyphicon glyphicon-picture"></i></div>
    <h5>Photo Session</h5>

    <!-- .toolbar -->
    <div class="toolbar">
      <nav style="padding: 8px;">
          <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
              <span class="glyphicon glyphicon-resize-small ">
          </a>
      </nav>
    </div>    <!-- /.toolbar -->

</header>
<div id="div-2" class="body">
<div class="form-horizontal">
                <div class="form-group">
                <div class="col-lg-1"> </div>
                <div class="form-group" style="float:left;">
                <div>
                    <label for="text1" class="control-label pull-left col-lg-5">Main View</label>
                    <div class="pull-right">
                    <input type="file" required accept="image/*" class="form-control" name="mvimg"></div>
                </div>
                </div>
                <!-- /.form-group -->
               
                <div class="form-group" style="float:left;">
                <div>
                    <label for="text1" class="control-label pull-right col-lg-5">Front View</label>
                    <div class="pull-right">
                    <input type="file" class="form-control" name="fvimg"></div>
                </div>
                </div>
                <!-- /.form-group -->
				<div class="form-group" style="float:left;">
                <div>
                    <label for="text1" class="control-label col-lg-5 pull-right">Audience View</label>
                    <div class="pull-right"><input type="file" class="form-control" name="avimg"></div>
                </div>
                </div>
                <!-- /.form-group -->
			  </div>

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
<button class="btn btn-primary btn-rect "  type="submit" name="btns">SAVE</button>
<button class="btn btn-primary btn-rect pull-right " type="submit" name="btnd" onclick="disca();">DISCARD</button>
</div>
</form>
              <?php
               if(isset($_POST["btns"]))
               {
        
                            //$fn=$_FILES["mvimg"]["name"];
       $conmv=addslashes(file_get_contents($_FILES['mvimg']['tmp_name']));
             $confv=addslashes(file_get_contents($_FILES['fvimg']['tmp_name']));
              $conav=addslashes(file_get_contents($_FILES['avimg']['tmp_name']));
                $sql="insert into venue(v_name,v_type,dept_id,v_description,v_capacity,v_image,v_frontimage,v_audienceimage,vflag)values('$_POST[vname]','$_POST[vtype]','$_POST[vdep]','$_POST[vdimen]','$_POST[vcap]','{$conmv}','{$confv}','{$conav}',1)";
                $result=mysql_query($sql,$con);
                  //while($row=mysql_fetch_assoc($result))
                  if(!$result)
                 { die('Error'.mysql_error($con)); }
            else{
                ?>
<script type="text/javascript">alert("Successfully Inserted");</script>
                    ?> <script>window.location.assign("http://localhost/vebo/venuemanage.php");</script>  <?php
            }
         
                }
                mysql_close($con);

              ?>
              <script> function disca(){ window.location.assign("http://localhost/vebo/venuemanage.php"); }</script> 

					
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

                    <script src="assets/lib/inputlimiter/jquery.inputlimiter.js"></script>
                    <script src="assets/lib/validVal/js/jquery.validVal.min.js"></script>
                    <script src="assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>

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
