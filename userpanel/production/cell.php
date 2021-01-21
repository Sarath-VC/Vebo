<!DOCTYPE html>
<html lang="en">
  <head>
	<!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">	
  </head>
  <?php
	include('userheader.php');
	include('subheader.php');
    include('connection.php');
    $car=$_SESSION['cart'];
  ?>
  

    <div class="row">
              <!-- form input mask -->
                <div class="col-md-12 col-sm-12 col-xs-12">     
                    <div class="form-horizontal form-label-left">
                    <div class="ln_solid"></div>
                    </div>
                </div>
              <!-- /form input mask -->
              <form method="post">
	<div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#e2e4ec;">
        <div class="x_panel">
                <div class="x_title" style="background-color:#2e2e33; color:white; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif">
                <h2><i class="fa fa-th-large"></i>  CELLS</h2>
                <div class="clearfix"></div>
                </div>
				
    <!--BEGIN OF CELL FIELDS-->
    <?php

    $sql="select * from cart where cart_no=$car";
    $res=mysql_query($sql,$con);
     $i=0;
    while($row=mysql_fetch_assoc($res))
    {  

       $rv=$row['v_id'];

       $sql1="select * from venue where v_id=$rv";
       $res1=mysql_query($sql1,$con);

       while($row1=mysql_fetch_assoc($res1))
       {
    ?>          
            <form action="" method="post">
			<div class="cellclass col-md-12">
			               
				    <input type="submit" class="btn btn-danger" name="closebtn" value="X">
                
                
                <input type="hidden" value="<?php echo $row1['v_id']; ?>" name="veid">
				<div class="col-md-55">
                    <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="data:image/jpeg; base64,<?php  echo base64_encode($row1['v_image']); ?>" alt="image" />
                    </div>
                </div>
			    <div class="col-lg-4">
             
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">VENUE:</label>   
					<label for="text1" class="control-label col-lg-6"><?php echo $row1['v_name'];  ?></label>  
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">TYPE:</label>
					<label for="text1" class="control-label col-lg-6"><?php echo $row1['v_type'];  ?></label>    
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">SEATING :</label>
                     <label for="text1" class="control-label col-lg-6"><?php echo $row1['v_capacity'];  ?></label>
                </div>
                <!-- /.form-group -->
				</div>
				
                <!-- /.form-group -->
				<div class="form-group col-lg-2 pull-right">
                   
                </div>
                <!-- /.form-group -->
							
		    </div>
            </form>
			<?php } } ?>
    <!--/END OF CELL FIELDS-->
	        <?php
                if(isset($_POST['closebtn']))
                {
                   $sqlclose="delete from cart where cart_no=$car and v_id=$_POST[veid]";
                   $resclose=mysql_query($sqlclose,$con);
                   if(!$resclose)
                   {
                    die('Error'.mysql_errno());
                   }
                   else
                   {
                    ?> <script type="text/javascript">
                        window.location.assign("http://localhost/vebo/userpanel/production/cell.php");
                    </script> <?php
                   }
                }


            ?>
        </div>	
		
	</div>	
	<div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#e2e4ec;">
	    <div class="form-group">
            <div class="col-md-8 col-sm-9 col-xs-12 col-md-offset-3 pull-right">
               <button type="submit" class="btn btn-primary">BOOK LATER</button>
			    <div class="col-lg-3">
                 <a href="booking2.php"><button type="submit" class="btn btn-success">BOOK NOW</button></a>
                </div>						  
            </div>
        </div>
    </div>
    </div>	
     </form>
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