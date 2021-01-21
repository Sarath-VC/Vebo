
<!DOCTYPE html>
<html lang="en">
  <head>
	  <!-- bootstrap-daterangepicker -->
      <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  </head>
  <?php
	include('userheader.php');
	include('subheader.php');
  $am=$_SESSION['aid'];
  $user=$_SESSION['user'];
  $_SESSION['cellno']=time();
  $cel=$_SESSION['cellno'];
  $queryuser =mysql_query("select * from login where user_id=$user",$con);
    $rowsuser=mysql_fetch_assoc($queryuser);
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
                   <h2><i class="glyphicon glyphicon-book"></i>  AMENITY BOOKING FORM</h2>
                   <div class="clearfix"></div>
                   </div>
				  <?php
          include('connection.php');
$sql="Select * from aminities where a_id=$am";
                  $result=mysql_query($sql,$con);
                  //while($row=mysql_fetch_assoc($result))
                  if(!mysql_query($sql,$con))
                 { die('Error'.mysql_error($con)); }


                  while($row=mysql_fetch_assoc($result))
                  {



          ?>
<form action="" method="post">
<div class="row">
    <div class="col-lg-12">
            <header>
            <h2><i class="fa fa-edit"></i><small>Event Details</small></h2>
            </header>
        <div id="" class="body">
            <div class="form-horizontal">
               <!-- /.form-group -->
               <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Event Name</label>
                    <div class="col-lg-4">
                        <input type="text" id="text1" required placeholder="Event" class="form-control" name="ename">
                    </div>
               </div>
               <!-- /.form-group -->
               <div class="form-group">
                    <label for="text2" class="control-label col-lg-4">Amenity</label>
                    <div class="col-lg-4">
                        <input type="text" id="text2" required name="loc" placeholder="Current Venue" class="form-control" value="<?php  echo $row['a_name'];  ?>">
                    </div>
               </div>
			   <!-- /.form-group -->
			   <div class="form-group">
                    <label class="control-label col-lg-4" for="reportrange">Date & Time</label>
                    <div class="col-lg-4">
                      <fieldset required>
                           <div class="control-group">
                           <div class="controls">
                           <div class="input-prepend input-group">
                           <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                           <input type="text" name="reservation-time" id="reservation-time" class="form-control"  />
                           </div>
                           </div>
                           </div>
                      </fieldset>
                    </div>
               </div>
               <!-- /.form-group -->
               <div class="form-group">
               <label class="control-label col-lg-4">Reminder</label>
                     <div class="col-lg-4">
                        <select class="form-control" name="rem">
                        <option>No Reminder</option>
                        <option>One Day Before</option>
                        </select>
                     </div>
               </div> 
               <!-- /.form-group -->
               <div class="form-group">
                    <label for="autosize" class="control-label col-lg-4">Purpose</label>
                    <div class="col-lg-4">
                        <textarea required id="autosize" class="form-control" name="des"></textarea>
                    </div>
                </div>
                <!-- /.form-group -->
            </div>
        </div>
    </div>
<!--BEGIN SELECT        -->
    <div class="col-lg-12">
    <?php
     
$sqlu="Select * from login where user_id=$user and lflag=1";
                  $resultu=mysql_query($sqlu,$con);
                  //while($row=mysql_fetch_assoc($result))
                  if(!mysql_query($sqlu,$con))
                 { die('Error'.mysql_error($con)); }


                 $rowu=mysql_fetch_assoc($resultu);
                
                    if($rowu['user_type']=="FAC"||$rowu['user_type']=="EC")
    {
    
      $sql1="select * from executive join department on executive.dept_id=department.dept_id and executive.user_id=$user";
  
  $res1=mysql_query($sql1,$con);
      $row1=mysql_fetch_assoc($res1);
    
    
  }
    elseif($rowu['user_type']=="CH"||$rowu['user_type']=="CR"||$rowu['user_type']=="AS")
    {
      $sql1="select * from student join department on student.dept_id=department.dept_id and student.user_id=$u";
  
  $res1=mysql_query($sql1,$con);
  $row1=mysql_fetch_assoc($res1);
  
  }

    ?>
            <header>
            <h2><i class="fa fa-edit"></i><small>Contact Details</small></h2>
            </header>
        <div id="div-2" class="body">
            <div class="form-horizontal">
                <!-- /.form-group --> 
                <div class="form-group">
                    <label class="control-label col-lg-4">Name</label>
                    <div class="col-lg-4">
                        <input type="text" value="<?php if($rowu['user_type']=="FAC"||$rowu['user_type']=="EC")
  echo $row1['exe_fname']; else echo $row1['stud_fname']; ?>" disabled class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-lg-4">Department</label>
                    <div class="col-lg-4">
                        <select id="dept" class="form-control" name="dep" disabled><option  value="<?php if($rowu['user_type']=="FAC"||$rowu['user_type']=="EC") echo $row1['dept_id']; else echo $row1['dept_id']; ?>" required><?php  if($ut=="BA"||$ut=="FAC"||$ut=="EC")
  echo $row1['dept_name']; else echo $row1['dept_name']; ?></option>
 
          <?php
            
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
                <div class="form-group">
                    <label class="control-label col-lg-4">Mob No.</label>
                    <div class="col-lg-4">
                        <input type="tel" required pattern="[0-9]{10}" value="<?php if($rowu['user_type']=="FAC"||$rowu['user_type']=="EC")
  echo $row1['exe_contact']; else echo $row1['stud_contact']; ?>"  class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">E-Mail</label>
                    <div class="col-lg-4">
                        <input type="text" id="text1" required pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" class="form-control" value="<?php if($rowu['user_type']=="FAC"||$rowu['user_type']=="EC")
  echo $row1['exe_email']; else echo $row1['stud_email']; ?>">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1"  class="control-label col-lg-4">Confirmtion</label>
                    <div class="col-lg-4">
                        <input class="form-control" required name="pass" type="password" id="pass1" data-original-title="Please use your secure password" placeholder="Password" data-placement="top" onmouseout="a();">
                    </div>
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" id="labeltxt">
                        </label>
                </div>
<div class="form-group" style="display : none;">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input id="psw2" value="<?php echo $rowsuser['password']; ?>">
                        </div></div>
                <!-- /.form-group -->
				<div class="ln_solid"></div>
                    <div class="form-group">
                    <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3 pull-right">
                          <button type="submit" class="btn btn-primary" name="btnc" onclick="cancel();">Cancel</button>
						  <div class="col-lg-4">
                          <button type="submit" class="btn btn-success" name="btns">Submit</button>
                    </div>						  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<?php } ?>

<?php

if(isset($_POST['btns']))
      {
         
        if($rowu['password']==$_POST['pass'])
        {
                $dated=$_POST['reservation-time'];
                  
                  $dateval=explode(" - ",$dated);
                  $dated1=$dateval[0];
                  $dated2=$dateval[1];
                  $dateval1=explode(' ',$dated1);
                  $datedsd=$dateval1[0];
                  $datedst=$dateval1[1];
                  $dateval2=explode(' ',$dated2);
                  $dateded=$dateval2[0];
                  $datedet=$dateval2[1];
                  $flag=1;
                  $sqldat1="select * from cell where v_id=$am";
                  $resdat1=mysql_query($sqldat1,$con);
                  while($rowdat1=mysql_fetch_assoc($resdat1))
                  {
                    $cell1=$rowdat1['cell_id'];
                    $sqldat2="select * from bookingstatus where cell_id=$cell1";
                    $resdat2=mysql_query($sqldat2,$con);
                    while($rowdat2=mysql_fetch_assoc($resdat2))
                    {
                      $st=$rowdat2['start_date'];
                      $stt=$rowdat2['start_time'];
                      $fs=$rowdat2['finish_date'];
                      $fst=$rowdat2['finish_time'];
               if(($dateded<$st)||($datedsd>$fs)||(($dateded==$st)&&($datedet<$stt))||(($datedsd==$fs)&&($datedst>$fst))||(($datedsd==$st)&&($datedst>$fst))||(($datedsd==$st)&&($datedet<$stt)))
               {
                   $flag=1;

               }
               else
               {
                 $flag=0;

               }

                    }
                      
                   }  

               if ($flag==1) {
                
               
               $sql1="insert into cell(cell_id,v_id,a_id)values($cel,1,$am)";
                $result1=mysql_query($sql1,$con);
                if(!$result1)
                 { die('Error'.mysql_error($con)); }
            else{
                   $ref="vebeve".$cel;
                  $dated=$_POST['reservation-time'];
                  
                  $dateval=explode(" - ",$dated);
                  $dated1=$dateval[0];
                  $dated2=$dateval[1];
                  $dateval1=explode(' ',$dated1);
                  $datedsd=$dateval1[0];
                  $datedst=$dateval1[1];
                  $dateval2=explode(' ',$dated2);
                  $dateded=$dateval2[0];
                  $datedet=$dateval2[1];


                  
               $sql2="insert into bookingstatus(event_name,cell_id,bflag,purpose,reminder,start_date,start_time,finish_date,finish_time,user_id,ref_no,b_status)values('$_POST[ename]',$cel,1,'$_POST[des]','$_POST[rem]','$datedsd','$datedst','$dateded','$datedet',$u,'$ref','Requested')";
                $result2=mysql_query($sql2,$con);
              if(!$result2)
                 { die('Error'.mysql_error($con)); }
            else{
                  
               ?><script>
                alert('Your request has been registered successfully with reference no: <?php   $ref="vebeve".$cel; echo $ref; ?>');
                  window.location.assign('http://localhost/vebo/userpanel/production/venues.php');
                </script><?php 
          
              }
              }
           } 
         }
          else{
              ?><script>
                alert('You were entered a wrong password !! ');
                </script> <?php
            }
       }


?>
<div class="row">
</div>
</div>
</div>
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
	<!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	 <script>
      $(document).ready(function() {
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2020',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'right',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'YYYY/MM/DD',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };

        $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

        $('#reportrange_right').daterangepicker(optionSet1, cb);

        $('#reportrange_right').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange_right').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange_right').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange_right').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });

        $('#options1').click(function() {
          $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
        });

        $('#options2').click(function() {
          $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
        });

        $('#destroy').click(function() {
          $('#reportrange_right').data('daterangepicker').remove();
        });

      });
    </script>

    <script>
      $(document).ready(function() {
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2020',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'YYYY/MM/DD',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>

    <script>
      $(document).ready(function() {
        $('#single_cal1').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_1"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_2"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>

    <script>
      $(document).ready(function() {
        $('#reservation').daterangepicker(null, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });

        $('#reservation-time').daterangepicker({
          
          
          timePicker: true,
          timePicker24Hour: true,
          timePickerSeconds: true,
          timePickerIncrement: 1,
          locale: {
            format: 'YYYY-MM-DD HH:MM:SS'
          }
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- Ion.RangeSlider -->
    <script>
      $(document).ready(function() {
        $("#range_27").ionRangeSlider({
          type: "double",
          min: 1000000,
          max: 2000000,
          grid: true,
          force_edges: true
        });
        $("#range").ionRangeSlider({
          hide_min_max: true,
          keyboard: true,
          min: 0,
          max: 5000,
          from: 1000,
          to: 4000,
          type: 'double',
          step: 1,
          prefix: "$",
          grid: true
        });
        $("#range_25").ionRangeSlider({
          type: "double",
          min: 1000000,
          max: 2000000,
          grid: true
        });
        $("#range_26").ionRangeSlider({
          type: "double",
          min: 0,
          max: 10000,
          step: 500,
          grid: true,
          grid_snap: true
        });
        $("#range_31").ionRangeSlider({
          type: "double",
          min: 0,
          max: 100,
          from: 30,
          to: 70,
          from_fixed: true
        });
        $(".range_min_max").ionRangeSlider({
          type: "double",
          min: 0,
          max: 100,
          from: 30,
          to: 70,
          max_interval: 50
        });
        $(".range_time24").ionRangeSlider({
          min: +moment().subtract(12, "hours").format("X"),
          max: +moment().format("X"),
          from: +moment().subtract(6, "hours").format("X"),
          grid: true,
          force_edges: true,
          prettify: function(num) {
            var m = moment(num, "X");
            return m.format("Do MMMM, HH:mm");
          }
        });
      });
    </script>

    <!-- /Ion.RangeSlider -->
  
<script type="text/javascript">
function a() {
                                var password = document.getElementById("pass1").value;
                                var confirmPassword = document.getElementById("psw2").value;
                                if (password != confirmPassword) {
                                    document.getElementById("labeltxt").innerHTML="Password does not match";
                                    
                                    return false;
                                }
                                else{
                                  document.getElementById("labeltxt").innerHTML=""; }
                                return true;
                            }
    </script>
  <script type="text/javascript">
function cancel(){
  window.location.assign("http://localhost/vebo/userpanel/production/amenities.php"); 
}
  </script>


  </body>
</html>