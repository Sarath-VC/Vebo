<!DOCTYPE html>
<html lang="en">
  <head>
	<!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
  </head>
  <?php
  include('blockadminheader.php');
  include('subheader.php');
    include('connection.php');
   $user=$_SESSION['block'];
    $sqlu="select * from login where user_id=$user";
    $resu=mysql_query($sqlu,$con);
    $rowu=mysql_fetch_assoc($resu);
          $sqlu1="select * from executive join department on executive.dept_id=department.dept_id and executive.user_id=$user";
  
  $resu1=mysql_query($sqlu1,$con);
      $rowu1=mysql_fetch_assoc($resu1);
  ?>
  <div class="row">
              <!-- form input mask -->
              <div class="col-md-12 col-sm-12 col-xs-12"> 
                    <div class="form-horizontal form-label-left">
                      <div class="ln_solid"></div>
                    </div>
                </div>
              <!-- /form input mask -->

        <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#e2e4ec;">
                <div class="x_panel">
                    <div class="x_title" style="background-color:#2e2e33; color:white; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif">
                    <h2><i class="fa fa-institution"></i> VENUES</h2>
					<ul class="nav navbar-right panel_toolbox"> 
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sort by   <i class="fa fa-sort"></i> </a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="" name="type">Type</a>
                           </li>
                           <li><a href="" name="dep">Department</a>
                           </li>
                        </ul>
                        </li>  
                    </ul>
                    <div class="clearfix"></div>
                    </div>
					
                   <!--VENUE GRID VIEW FIELDS-->
		              <?php
                   
                     $sql="select * from venue where vflag=1"; 
                    $res=mysql_query($sql,$con);
                    while($row=mysql_fetch_assoc($res))
                    {

                   ?>
					<div class="col-md-55">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="data:image/jpeg; base64,<?php echo base64_encode($row['v_image']); ?>" alt="image" />
                                <div class="mask">
                                    <p><?php echo $row['v_name']; ?></p>
                                    <div class="tools tools-bottom">
                                    <a href="generalvenue.php?vid=<?php echo $row['v_id']; ?>"><i class="fa fa-desktop"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption" align="center">
                                <p> <?php echo $row['v_name']; ?></p>
                            </div>
                        </div>
                    </div>
					         <?php  }  ?>
				   <!--/VENUE GRID VIEW FIELDS-->
					
                </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	  <!-- Dropzone.js -->
    <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>

  </body>
</html>