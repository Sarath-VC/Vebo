<!DOCTYPE html>
<html lang="en">
    <?php
	include('blockadminheader.php');
	include('subheader.php');
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
                    <h2><i class="glyphicon glyphicon-remove"></i> CANCELLED EVENTS</h2>
					<ul class="nav navbar-right panel_toolbox">
					<li><a href="bookedevents.php" class="close-link"><i class="glyphicon glyphicon-book"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
			
                   <div class="body">
		<table class="table table-condensed table-hovered sortableTable">
		    <thead>
			<tr>
			    <th>Ref ID<i class="fa sort"></i></th>
                <th>EVENT NAME<i class="fa sort"></i></th>
			    <th>REQUESTER<i class="fa sort"></i></th>
			    <th>DEPARTMENT<i class="fa sort"></i></th>
				<th>VENUE/AMENITY NAME<i class="fa sort"></i></th>
				<th>DATE<i class="fa sort"></i></th>
				<th>PURPOSE<i class="fa sort"></i></th>
				
			</tr>
		    </thead>
		    <tbody>
			<?php

             $sql="select * from bookingstatus where bflag=1";
             $res=mysql_query($sql,$con);
             while ($row=mysql_fetch_assoc($res)) 
             {       
                 $un=$row['user_id'];
                $sqln="select * from login where user_id=$un";
                $resn=mysql_query($sqln,$con);
                $rown=mysql_fetch_assoc($resn);
                $ut=$rown['user_type'];
   
      
    if($rown['user_type']=="FAC"||$rown['user_type']=="EC")
    {
    
      $sql1="select * from executive join department on executive.dept_id=department.dept_id and executive.user_id=$un";
      $res1=mysql_query($sql1,$con);
      $row1=mysql_fetch_assoc($res1);
     
    }
    elseif($rown['user_type']=="CH"||$rown['user_type']=="CR"||$rown['user_type']=="AS")
    {
  $sql2="select * from student join department on student.dept_id=department.dept_id and student.user_id=$un";
  $res2=mysql_query($sql2,$con);
  $row2=mysql_fetch_assoc($res2);
  
    }
                     $c=$row['cell_id'];

    $sqlv="select * from cell where cell_id=$c and cell_status='Pending'";
    $resv=mysql_query($sqlv,$con);
    while($rowv=mysql_fetch_assoc($resv))
    {    

        if($rowv['a_id']==0)
          { 
                
         $sqlv2="select * from venue join cell where venue.v_id=cell.v_id and venue.dept_id=$id";
          $resv2=mysql_query($sqlv2,$con);
    $resn=mysql_num_rows($resv);
        $r=$rowv['v_id'];
        $sqlv1="select * from venue where v_id=$r and dept_id=$id";
    $resv1=mysql_query($sqlv1,$con);
   
    while($rowv1=mysql_fetch_assoc($resv1))
    {   echo "<form method='post'><tr><td>".$row['ref_no']."</td><td>".$row['event_name']."</td><td>";
 if($rown['user_type']=="FAC"||$rown['user_type']=="EC")
    {
      echo $row1['exe_fname']."</td><td>".$row1['dept_name']."</td><td>";
    }
    elseif($rown['user_type']=="CH"||$rown['user_type']=="CR"||$rown['user_type']=="AS")
    {
  echo $row2['stud_fname']."</td><td>".$row2['dept_name']."</td><td>";
    }
       echo $rowv1['v_name'];
        echo "</td><td>".$row['start_date']." To ".$row['finish_date']."</td><td>".$row['purpose']."</td><td>";

            ?> 
            <input type="hidden" name="rfno" value="<?php echo $row['ref_no']; ?>"/>
            <input type="hidden" name="cid" value="<?php echo $row['cell_id']; ?>"/>
            <input type="hidden" name="vid" value="<?php echo $rowv['v_id']; ?>"/>
            <input type="hidden" name="avid" value="0"/>
                   <button class="fa fa-check" type="submit" name="btnc"></button>
              
             <?php     
             echo "</td></tr></form>"; 
   
     }
  
      
  }
 else
    { 
         $sqlv2="select * from aminities join cell where aminities.a_id=cell.a_id and aminities.dept_id=$id";
          $resv2=mysql_query($sqlv2,$con);
    $resn=mysql_num_rows($resv);
        $r=$rowv['a_id'];
        $sqlv1="select * from aminities where a_id=$r and dept_id=$id";
    $resv1=mysql_query($sqlv1,$con);
   
    while($rowv1=mysql_fetch_assoc($resv1))
    { echo "<form method='post'><tr><td>".$row['ref_no']."</td><td>".$row['event_name']."</td><td>";
if($rown['user_type']=="FAC"||$rown['user_type']=="EC")
    {
      echo $row1['exe_fname']."</td><td>".$row1['dept_name']."</td><td>";
    }
    elseif($rown['user_type']=="CH"||$rown['user_type']=="CR"||$rown['user_type']=="AS")
    {
  echo $row2['stud_fname']."</td><td>".$row2['dept_name']."</td><td>";
    }
       echo $rowv1['a_name'];
       echo "</td><td>".$row['start_date']." To ".$row['finish_date']."</td><td>".$row['purpose']."</td><td>";
            ?> 
            <input type="hidden" name="rfno" value="<?php echo $row['ref_no']; ?>"/>
             <input type="hidden" name="cid" value="<?php echo $row['cell_id']; ?>"/>
            <input type="hidden" name="aid" value="<?php echo $rowv['a_id']; ?>"/>
            <input type="hidden" name="avid" value="1"/>
                   <button type="submit" name="btnc" class="fa fa-check"></button>
                
              
             <?php     
             echo "</td></tr></form>"; 
     
     }

    

 
         }
          



    }



          
             }
                if(isset($_POST['btnc']))
                {
                   $ci=$_POST['cid'];
                   $vi=$_POST['avid'];
                   if($vi==0)
                   {
                     $vi=$_POST['vid'];
                   $sqlup="update cell set cell_status='Cancelled' where cell_id=$ci and v_id=$vi";
                   $resup=mysql_query($sqlup,$con);
                   if(!$resup)
                     echo mysql_error();
                    else
                    {
                         $ref=$_POST['rfno'];
                        $txt="Cancellation for the ".$ref." has been sanctioned";
                        date_default_timezone_set("Asia/Kolkata");
                     $date = date('Y-m-d H:i:s');
                     $sqll="insert into log(content,datetime,user_id) values('$txt','$date',$user)";
                     $resl=mysql_query($sqll,$con);
                     if(!$resl)
                        echo mysql_error();
                         ?> <script type="text/javascript">window.location.assign('http://localhost/vebo/blockadminpanel/production/cancellations.php');</script>  <?php
                    }
                   }
                   else
                   {
                     $vi=$_POST['aid'];
                    $sqlup="update cell set cell_status='Cancelled' where cell_id=$ci and a_id=$vi";
                   $resup=mysql_query($sqlup,$con);
                   if(!$resup)
                     echo mysql_error();
                    else
                    {
                        $ref=$_POST['rfno'];
                        $txt="Cancellation for the ".$ref." has been sanctioned";
                        date_default_timezone_set("Asia/Kolkata");
                     $date = date('Y-m-d H:i:s');
                     $sqll="insert into log(content,datetime,user_id) values('$txt','$date',$user)";
                     $resl=mysql_query($sqll,$con);
                     if(!$resl)
                        echo mysql_error();
                         ?> <script type="text/javascript">window.location.assign('http://localhost/vebo/blockadminpanel/production/cancellations.php');</script> <?php
                    }
                        }

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
        <footer style="background-color:#d0d0df;">
          <div class="pull-right">
             <p>© 2017 VEBO.All Rights Reserved | Design by <a href="">MESTOZYME</a></p>

          </div>
          <div class="clearfix"></div>
        </footer>
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