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
    <title>Feedback|VEBO</title>
    
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
            FEEDBACKS </h3></a>
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
<form action="" name="feds" method="post">
<div class="row">
<div class="col-lg-12">
    <div class="box dark">
        <header>
            <div class="icons"><i class="glyphicon glyphicon-envelope"></i></div>
            <h5>Feedback Details</h5>
            <!-- .toolbar --><div class="icons pull-right"><a href="adminhome.php"><i class="glyphicon glyphicon-share-alt"> BACK</i></a></div>
                 <!-- /.toolbar -->
                      <!-- /.toolbar -->
        </header>
        <div id="" class="body">
        
           <form action="">
	    <div class="body">
		<table class="table table-condensed table-hovered sortableTable">
		    <thead>
			<tr>
			    
			    <th>Sl no.<i class="fa sort"></i></th>
			    <th>E-MAIL<i class="fa sort"></i></th>
				<th>SUBJECT<i class="fa sort"></i></th>
				<th>MANAGE<i class="fa sort"></i></th>
			</tr>
		    </thead>
		    <tbody>
			 <?php
            error_reporting(E_ALL ^ E_DEPRECATED);
               include('connection.php');
                  $sql="Select * from feedback where fflag=1";
                  $result=mysql_query($sql,$con);
                  //while($row=mysql_fetch_assoc($result))
                  if(!mysql_query($sql,$con))
                 { die('Error'.mysql_error($con)); }

                  $i=1;
                  while($row=mysql_fetch_assoc($result))
                  {
                    echo "<tr><form method='GET'><td>$i</td><td>".$row['email']."</td><td>".$row['subject']."</td><td>";?>
          <a href="?fid=<?php echo $row['feed_id']; ?>#modd" ><span class="glyphicon glyphicon-eye-open" data-toggle="modal"  data-target=".bs-example-modal-sm-4"></span></a>&nbsp;&nbsp;<a href="?fid=<?php echo $row['feed_id']; ?>#modd" id="del">
            <span class="glyphicon glyphicon-trash" data-toggle="modal"  data-target=".bs-example-modal-sm-4" id="delt" onclick="disp();"></span></a> <?php echo "</td></form></tr>";
                    $i++;
                  }
              
               //mysql_close($con);
            ?>
		    </tbody>
		</table>
	    </div>

             
          <div id="modd" class="modal fade bs-example-modal-sm-4" tabindex="-1" role="dialog" aria-hidden="true">
                  <?php $fdid=$_GET["fid"]; 
                  include('connection.php');
                            $sqlfv="select * from feedback where feed_id=$fdid and fflag=1";
                            $resfv=mysql_query($sqlfv,$con);
                            $rowfv=mysql_fetch_assoc($resfv); ?>                
                    <div class="modal-dialog modal-sm-4">
                        <div class="modal-content">
                        

                           <div class="modal-header">

                           <button type="submit" class="close" name="x"><span aria-hidden="true">×</span>
                           </button>
                           <h4 class="modal-title" id="myModalLabel" align="center">NOTIFICATION</h4>
                           </div>
                           <!-- form-content-bigins-here --> 
                            


                            <form action="" method="post">
                          
                            <div class="modal-body">
                                <div class="form-horizontal">
                                    <div class="form-group" >
                                    <label class="control-label col-lg-3">From</label>
                                    <div class="col-lg-8">
                                    <input type="text" class="form-control" value="<?php echo $rowfv['email']; ?>"/>
                                    </div>
                                    </div>
                                
                                    <div class="form-group">
                                    <label class="control-label col-lg-3">Subject</label>
                                    <div class="col-lg-8">
                                    <input type="text" class="form-control" value="<?php echo $rowfv['subject']; ?>"/>
                                    </div>
                                    </div>               
                
                                    <div class="form-group">
                                    <label class="control-label col-lg-3">Message</label>
                                    <div class="col-lg-8">
                                    <textarea value=""  class="form-control"/><?php echo $rowfv['content']; ?></textarea>
                                    </div>
                                    </div>                
                                    <div class="ln_solid"></div>
                                    
                                    <div class="form-group">
                                    <div class="col-lg-8" id="dcls">
                                    <button type="submit" class="btn btn-success pull-right" name="cls" id="cls">Close</button>
                                    </div>
                                        <div class="col-lg-8" style="display:none;" id="ddelts">
                                        <button type="submit"  class="btn btn-success pull-right" id="delts" name="delts">Delete</button>
                                        </div>                         
                                    </div>
                                    </div>
                                </div>  
                                </form> 

                                    
                            </div>
                             
                            
                   
                        </div> 
                        <?php 
                                        if (isset($_POST['cls'])) {
                                            ?><script type="text/javascript">window.location.assign("http://localhost/vebo/viewfeedback.php");</script><?php

                                        }
                                        elseif (isset($_POST['x'])) {
                                            ?><script type="text/javascript">window.location.assign("http://localhost/vebo/viewfeedback.php");</script><?php

                                        }
                                        elseif (isset($_POST['delts'])) {
                                            $sqldlt="update feedback set fflag=0 where feed_id=$fdid";
                            $resultdlt=mysql_query($sqldlt,$con);
                            if(!$resultdlt)
                                { 
                                    die('Error'.mysql_error($con)); }
                            else{
                ?>
                                    <script type="text/javascript">alert("Successfully Deleted");</script>
                                    <script>window.location.assign("http://localhost/vebo/viewfeedback.php");</script><?php
                                }
         
                                        }
mysql_close();
                                    ?>

                                                           
                    </div>
                </div>

		</form>
</div>
</div>
</div>
</div>
							</form>
<div class="row">
</div>

<!-- /.row -->


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
                <p>VEBO USER PANEL &copy; MESTOZYME</p>
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
                                                    <script> function disp()
{ 
    document.getElementById('ddelts').style.display='block';
    document.getElementById('dcls').style.display='none';
}</script>

          
        </body>

</html>
