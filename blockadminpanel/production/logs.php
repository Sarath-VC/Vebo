<!DOCTYPE html>
<html lang="en">
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
    $id=$rowu1['dept_id'];
    
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
                    <h2><i class="glyphicon glyphicon-book"></i>ACTIVITY LOG</h2>
					<ul class="nav navbar-right panel_toolbox">
					
                    </ul>
                    <div class="clearfix"></div>
                  </div>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
			
                   <div class="body">
		<table class="table table-condensed table-hovered sortableTable">
		    <thead>
			<tr>
			    <th>LOG ID<i class="fa sort"></i></th>
                <th>ACTIVITY<i class="fa sort"></i></th>
			    <th>DATE & TIME<i class="fa sort"></i></th>
        
				
			</tr>
		    </thead>
		    <tbody>
           <?php

             $sql="select * from log where user_id=$user";
             $res=mysql_query($sql,$con);
             if(!$res)
              echo mysql_error();
             while($row=mysql_fetch_assoc($res)) 
             {       
                echo "<tr><td>".$row['logid']."</td><td>".$row['content']."</td><td>".$row['datetime']."</td></tr>"; 
   
              }



            ?>		    
            </tbody>
		</table>
	    </div>
            </form>
	    </div>
	</div>
    </div>
        <!-- footer content -->
        <div style="background-color:#d0d0df;">
          <div class="pull-right">
             <p>© 2017 VEBO.All Rights Reserved | Design by <a href="">MESTOZYME</a></p>

          </div>
          <div class="clearfix"></div>
        </div>
        <!-- /footer content -->
		
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
  </body>
</html>