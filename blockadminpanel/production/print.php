<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('connection.php'); ?>
   <link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>
    <title>Annual Report</title>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	<!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  </head>
   <body  onload="window.print()">
 <?php $yer=date('Y');
       $lastyer=$yer-1;?></br></br>
       <label class="pull pull-right"><?php date_default_timezone_set('Asia/Kolkata');
echo date('Y-m-d h:i:s a', time()); ?></label>

 <h5><B> <img src="icons/iconv.png" alt="logo">VEBO</B> </h5>
</br></br>
<div align="center"><B><U> <h3> ANNUAL REPORT FOR THE YEAR <?php echo $lastyer;  ?> - <?php echo $yer; ?></h3> </U></B></div></br></br></br></br></br></br></br></br>
					    <form action="http://localhost/vebo/blockadminpanel/production/reportmonitoring.php">
             <?php
                $sql="select * from bookingstatus where bflag=1 and b_status='Booked'";
                $res=mysql_query($sql,$con);
                $resn=mysql_num_rows($res);

             ?>
        <div class="x_content">

            <div class="col-md-5 col-sm- col-xs-12">
                <div class="form-horizontal">
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-6">CURRENT BOOKED EVENTS :-</label>
                    <div class="col-lg-4">
                        <label for="text1" class="control-label col-lg-4"><?php echo $resn;  ?></label>
                    </div>
                </div>
                 <?php
                $sql1="select * from bookingstatus where bflag=1";
                $res1=mysql_query($sql1,$con);
                $resn1=mysql_num_rows($res1);

             ?>
				<div class="form-group">
                    <label for="text1" class="control-label col-lg-6">TOTAL NO. OF EVENTS :-</label>
                    <div class="col-lg-4">
                        <label for="text1" class="control-label col-lg-4"><?php echo $resn1;  ?></label>
                    </div>
                </div>
                </div>
			</div>
			         <?php
                $sql2="select * from bookingstatus where bflag=1 and b_status='Completed'";
                $res2=mysql_query($sql2,$con);
                $resn2=mysql_num_rows($res2);
                $d1=0;
                while($row2=mysql_fetch_assoc($res2))
                {
                  $ref=$row2['ref_no'];
                  $sd=new DateTime($row2['start_date']);
                  $st=$row2['start_time'];
                  $fd=new DateTime($row2['finish_date']);
                  $ft=$row2['finish_time'];
                 
                  $sql4="select start_date,finish_date,(finish_date-start_date),start_time,finish_time from bookingstatus where ref_no='$ref'";
                   $res4=mysql_query($sql4,$con);
                   $row4=mysql_fetch_assoc($res4);
                   
                    $d1=$d1+(($row4['(finish_date-start_date)']+1)*12);
                
                   if(!$res4)
                      echo mysql_error();
                    
                }
             
             ?>
		    <div class="col-md-6 col-sm-6 col-xs-12 pull-right">
				 
                <div class="form-horizontal">
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-6">CURRENT FINISHED EVENTS :-</label>
                    <div class="col-lg-4">
                        <label for="text1" class="control-label col-lg-4"><?php echo $resn2;  ?></label>
                    </div>
                </div>
                
				<div class="form-group">
                    <label for="text1" class="control-label col-lg-6">TOTAL HOURS :-</label>
                    <div class="col-lg-4">
                        <label for="text1" class="control-label col-lg-4"><?php echo $d1."&nbspHours";  ?></label>
                    </div>
                </div>
                </div>
			</div>
        <table class="table table-condensed table-hovered sortableTable">
           <tr><th>Venue Name</th><th>No Of Events</th><th>Total Hours</th></tr>
          <?php
             $sqlz="select * from venue";
             $resz=mysql_query($sqlz,$con);
             while($rowz=mysql_fetch_assoc($resz))
             {
               $vi=$rowz['v_id'];
               $sqlz1="select * from cell where v_id=$vi and cell_status='Completed'";
               $resz1=mysql_query($sqlz1,$con);
               $d1=0;
               while($rowz1=mysql_fetch_assoc($resz1))
               {
                $ci=$rowz1['cell_id'];
                $sqlz2="select start_date,finish_date,(finish_date-start_date) from bookingstatus where cell_id=$ci and b_status='Completed'";
                $resz2=mysql_query($sqlz2,$con);
                $resbn=mysql_num_rows($resz2);
                while($rowz2=mysql_fetch_assoc($resz2))
                  {
                $d1=$d1+(($rowz2['(finish_date-start_date)']+1)*12);
                  }
                echo "<tr><td>".$rowz['v_name']."</td><td>".$resbn."</td><td>".$d1."</td></tr>";

               }
             }
        



          ?>
          </table>
			
				
                </div>
                <button type="submit" class="btn btn-success pull-right">BACK</button>
	</form>
					
				   <!--/VENUE GRID VIEW FIELDS-->
       
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
	<!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
</body>
</html>