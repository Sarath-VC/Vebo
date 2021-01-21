<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('connection.php'); ?>
   <link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>
    <title>Report monitoring |VEBO</title>
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
  
  <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:black;"> 
					<div style=" color:white; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif">
                    

                    <h2><a class="navbar-brand" href="http://localhost/vebo/adminhome.php"><i class="glyphicon glyphicon-home"> VEBO</i></a></h2>
                    </div>
					</div>
  <div class="row">
              <!-- form input mask -->
			  
              <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#696b6f;"> 
                    <div class="form-horizontal form-label-left">
                      <div class="ln_solid"></div>
                    </div>
                </div>
              <!-- /form input mask -->
        <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#e2e4ec;">
                <div class="x_panel">
                    <div class="x_title" style="background-color:#2e2e33; color:white; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif">
                    <h2><i class="fa fa-file-text">  REPORT MONITORING</i></h2>
					<ul class="nav navbar-right panel_toolbox" > 
                        <li class="dropdown"><input type="submit" name="pbtn" value="Print" onclick="a();"/>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="#"  data-toggle="modal" data-target=".bs-example-modal-sm-2" id="periodic"> PERIODIC</a>
                           </li>
                           <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-4" id="monthly">MONTHLY</a>
                           </li>
						   <li><a href="#"data-toggle="modal" data-target=".bs-example-modal-sm" id="anualy">ANNUALY</a>
                           </li>
                        </ul>
                        </li>  
                    </ul>
                    <div class="clearfix"></div>
                    </div>
					
					<div class="modal fade bs-example-modal-sm-2" tabindex="-1" role="dialog" aria-hidden="true" id="periodic">
                    <div class="modal-dialog modal-sm-2">
                        <div class="modal-content">
                           <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                           </button>
                           <h4 class="modal-title" id="myModalLabel">PERIODIC</h4>
                           </div>
						   <!-- form-content-bigins-here --> 
						    <form action="">
                            <div class="modal-body">
						        <div class="form-horizontal">
                                       <!-- /.form-group -->
			                    <div class="form-group">
                                    <label class="control-label col-lg-3" for="reportrange">Date & Time</label>
                                    <div class="col-lg-8">
                                    <fieldset>
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
				                    <div class="ln_solid"></div>
									
                                    <div class="form-group">
                                    <div class="col-md-9 col-sm-8 col-xs-12 col-md-offset-3 pull-right">
                                    <button type="submit" class="btn btn-primary">Cancel</button>
						            <div class="col-lg-6">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    </div>						  
                                    </div>
                                    </div>
                                </div>     
                            </div>
							</form>
                        </div>                        
                    </div>
                    </div>	

                    <div class="modal fade bs-example-modal-sm-4" tabindex="-1" role="dialog" aria-hidden="true" id="monthly">
                    <div class="modal-dialog modal-sm-4">
                        <div class="modal-content">
                           <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                           </button>
                           <h4 class="modal-title" id="myModalLabel">MONTHLY</h4>
                           </div>
						   <!-- form-content-bigins-here --> 
						    <form action="">
                            <div class="modal-body">
						    <div class="col-md-5 col-sm- col-xs-12">
						        <div class="form-horizontal">
                                    <!-- /.form-group -->
                                <div class="form-group col-lg-12">
                                    <label class="control-label col-lg-4">MONTH</label>
                                    <div class="col-lg-8">
                                    <select class="form-control">
                                    <option>JANUARY</option>
									<option>FEBRUARY</option>
									<option>MARCH</option>
									<option>APRIL</option>
									<option>MAY</option>
									<option>JUNE</option>
									<option>JULY</option>
									<option>AUGUST</option>
									<option>SEPTEMBER</option>
									<option>OCTOBER</option>
									<option>NOVEMBER</option>
									<option>DECEMBER</option>
                                    </select>
                                    </div>
                                </div>
                                </div>
                                </div>								
                                <!-- /.form-group -->
							<div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="form-horizontal">							
								<div class="form-group col-lg-12">
                                    <label class="control-label col-lg-4">YEAR</label>
                                    <div class="col-lg-8">
                                    <select class="form-control">
                                    <option>2015</option>
									<option>2016</option>
									<option>2017</option>
									<option>2018</option>
									<option>2019</option>
									<option>2020</option>
									</select>
                                    </div>
                                </div> 
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 pull-right">
				                    <div class="ln_solid"></div>
									
                                    <div class="form-group">
                                    <div class="col-md-10 col-sm-8 col-xs-12 col-md-offset-3 pull-right">
                                    <button type="submit" class="btn btn-primary">Cancel</button>
						            <div class="col-lg-6">
                                    <button type="submit" class="btn btn-success">Apply</button>
                                    </div>						  
                                    </div>
                                    </div>
							</div>
                            </div>
							</form>
                        </div>								
                    </div>		
                    </div>                        

                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="annualy">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                           <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                           </button>
                           <h4 class="modal-title" id="myModalLabel">ANUALLY</h4>
                           </div>
						   <!-- form-content-bigins-here --> 
						    <form action="">
                            <div class="modal-body">
							    <div class="col-md-12 col-sm-12 col-xs-12">
						        <div class="form-horizontal">
                                       <!-- /.form-group -->							
								    <div class="form-group col-lg-10">
                                    <label class="control-label col-lg-4">YEAR</label>
                                    <div class="col-lg-7">
                                    <select class="form-control">
                                    <option>2015</option>
									<option>2016</option>
									<option>2017</option>
									<option>2018</option>
									<option>2019</option>
									<option>2020</option>
									</select>
                                    </div>
                                    </div> 
								</div>
							    </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                   
				                    <div class="ln_solid"></div>
									
                                    <div class="form-group">
                                    <div class="col-md-11 col-sm-8 col-xs-12 col-md-offset-3 pull-right">
                                    <button type="submit" class="btn btn-primary">Cancel</button>
						            <div class="col-lg-7">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    </div>						  
                                    </div>
                                    </div>
                                </div> 
                            </div>
                            </form>							
                        </div>
                    </div>                        
                    </div>					
                   <!--VENUE GRID VIEW FIELDS-->
		
					    <form action="">
             <?php
                $sql="select * from bookingstatus where bflag=1 and b_status='Booked'";
                $res=mysql_query($sql,$con);
                $resn=mysql_num_rows($res);

             ?>
        <div class="x_content">

            <div class="col-md-5 col-sm- col-xs-12">
                <div class="form-horizontal">
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-6">CURRENT BOOKED EVENTS:</label>
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
                    <label for="text1" class="control-label col-lg-6">TOTAL NO. OF EVENTS:</label>
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
                    <label for="text1" class="control-label col-lg-6">CURRENT FINISHED EVENTS:</label>
                    <div class="col-lg-4">
                        <label for="text1" class="control-label col-lg-4"><?php echo $resn2;  ?></label>
                    </div>
                </div>
                
				<div class="form-group">
                    <label for="text1" class="control-label col-lg-6">TOTAL HOURS:</label>
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
			 <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
			        <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-8 col-sm-9 col-xs-12 col-md-offset-3 pull-right">
                        <a href="http://localhost/vebo/blockadminpanel/production/backup/import.php"><B>RESTORE</B></a>
						<div class="col-lg-4">
                        <a href="http://localhost/vebo/blockadminpanel/production/backup/export.php"><B>BACKUP</B></a>
                        </div>						  
                        </div>
                    </div>	
				</div>
				
                </div>

	</form>
					
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
          format: 'MM/DD/YYYY',
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
          format: 'MM/DD/YYYY',
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
          timePickerIncrement: 30,
          locale: {
            format: 'MM/DD/YYYY h:mm A'
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

	 
   <script type="text/javascript">
        function a()
        {
          window.location.assign('http://localhost/vebo/blockadminpanel/production/print.php');
        }
   </script>
  </body>
</html>