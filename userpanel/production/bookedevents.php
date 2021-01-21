<!DOCTYPE html>
<html lang="en">
    <?php
	include('userheader.php');
	include('subheader.php');
    include('connection.php');
    include('updtsts.php');
    $user=$_SESSION['user'];

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
                    <h2><i class="glyphicon glyphicon-book"></i> BOOKED EVENTS</h2>
					<ul class="nav navbar-right panel_toolbox">
					<li><a href="cancellation.php" class="close-link"><i class="glyphicon glyphicon-trash"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="get" action="">
			
                   <div class="body">
		<table class="table table-condensed table-hovered sortableTable" style=" overflow:auto;">
		    <thead>
			<tr>
			    <th>Reference ID<i class="fa sort"></i></th>
                <th>EVENT NAME<i class="fa sort"></i></th> 
				<th>VENUE/AMINITY NAME<i class="fa sort"></i></th>
				<th>DATE<i class="fa sort"></i></th>
				<th>PURPOSE<i class="fa sort"></i></th>
				<th>STATUS<i class="fa sort"></i></th>
			</tr>
		    </thead>
		    <tbody>
            <?php
        
            $sql="select * from bookingstatus where bflag=1 and user_id=$user and b_status!='Cancelled' ";
             $res=mysql_query($sql,$con);
             while ($row=mysql_fetch_assoc($res)) 
             {
                     echo "<tr><form method='get'><td>".$row['ref_no']."</td><td>".$row['event_name']."</td><td>";
                     $c=$row['cell_id'];


    $sqlv="select * from cell where cell_id=$c";
    $resv=mysql_query($sqlv,$con);
    $i=1;
    while($rowv=mysql_fetch_assoc($resv))
    {    

        if($rowv['a_id']==0)
          { 

         $sqlv2="select * from venue join cell where venue.v_id=cell.v_id";
          $resv2=mysql_query($sqlv2,$con);
    $resn=mysql_num_rows($resv);
        $r=$rowv['v_id'];
        $sqlv1="select * from venue where v_id=$r";
    $resv1=mysql_query($sqlv1,$con);
   $sqlvc="select * from cell where v_id=$r and cell_id=$c";
   $resvc=mysql_query($sqlvc);
   $rowvc=mysql_fetch_assoc($resvc);
    while($rowv1=mysql_fetch_assoc($resv1))
    { 
       echo $rowv1['v_name'];
        if($i<$resn)
        {echo ", ";

          }      
   
     }$i++;
      
  }
 else
    { 
         $sqlv2="select * from aminities join cell where aminities.a_id=cell.a_id";
          $resv2=mysql_query($sqlv2,$con);
    $resn=mysql_num_rows($resv);
        $r=$rowv['a_id'];
        $sqlv1="select * from aminities where a_id=$r ";
    $resv1=mysql_query($sqlv1,$con);
    $sqlvc="select * from cell where a_id=$r and cell_id=$c";
   $resvc=mysql_query($sqlvc);
   $rowvc=mysql_fetch_assoc($resvc);
    while($rowv1=mysql_fetch_assoc($resv1))
    { 
       if($i==1)
      
       echo $rowv1['a_name'];
       if($i<$resn)
        {echo ", ";
 
         
    }
     
     }$i++;
    

 
         }
          



    }


        
            echo "</td><td>".$row['start_date']." To ".$row['finish_date']."</td><td>".$row['purpose']."</td><td>";
    echo $row['b_status']."</td><td>";?> <a href="?fid=<?php echo $row['cell_id']; ?>#modd" ><span class="glyphicon glyphicon-info-sign" data-toggle="modal"  data-target=".bs-example-modal-sm"></span></a><?php echo "</tr></form>";
            
      
             }
             ?>
              </tbody>
    </table>
      </div>
                
<div id="modd" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                  <?php $fdid=$_GET["fid"]; 
                  include('connection.php');
                            
                            ?>                
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                        

                           <div class="modal-header">

                           
                           <h4 class="modal-title" id="myModalLabel" align="center">Status</h4>
                           </div>
                           <!-- form-content-bigins-here --> 
                            


                            <form action="" method="post">
                          
                            <div class="modal-body">
                                <div class="form-horizontal">                
                                    <div class="form-group">
                                    <div class="col-lg-8">
                                    <?php
                                    $sqlfv="select * from cell where cell_id=$fdid";
                            $resfv=mysql_query($sqlfv,$con);
                            while($rowfv=mysql_fetch_assoc($resfv))
                               {
                                $vi=$rowfv['v_id'];
                                $ai=$rowfv['a_id'];
                                if($ai==0)
                                {
                            $sqlfv1="select * from cell join venue on cell_id=$fdid and venue.v_id=$vi";
                            $resfv1=mysql_query($sqlfv1,$con);
                            $rowfv1=mysql_fetch_assoc($resfv1); 
                                }
                                else
                                {
                            $sqlfv1="select * from cell join aminities on cell_id=$fdid and aminities.a_id=$ai";
                            $resfv1=mysql_query($sqlfv1,$con);
                            $rowfv1=mysql_fetch_assoc($resfv1); 
                                } 
                                if($ai==0){ ?> <label> <?php echo $rowfv1['v_name']." : ".$rowfv['cell_status']." "; ?> </label><br> <?php } 
                                else{ ?> <label> <?php echo $rowfv1['a_name']." : ".$rowfv['cell_status']." "; ?> </label><br> <?php }   
                                 }

                                ?>
                                    </div>
                                    </div>                
                                    <div class="ln_solid"></div>
                                    
                                    <div class="form-group">
                                    <div class="col-lg-8" id="dcls">
                                    <button type="submit" class="btn btn-success pull-right" name="cls" id="cls">Close</button>
                                    </div>
                       
                                    </div>
                                    </div>
                                </div>  
                                </form> 

                                  
                            </div>
                             
                            
                   
                        </div> 
                        <?php 
                                        if (isset($_POST['cls'])) {
                                            ?><script type="text/javascript">window.location.assign("http://localhost/vebo/userpanel/production/bookedevents.php");</script><?php

                                        }
                                        elseif(isset($_POST['x'])) {
                                            ?><script type="text/javascript">window.location.assign("http://localhost/vebo/userpanel/production/bookedevents.php");</script><?php

                                        }
                                       
         
                                      
mysql_close();
                                    ?>

                                                           
                    </div>
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