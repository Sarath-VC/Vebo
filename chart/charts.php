<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>VEBO | ADMIN PANEL</title>

<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  
		  <div class="w3_agileits_top_nav">
		  
			<ul id="gn-menu" class="gn-menu-main" style="background-color:black;">
				 <li>
				 <i class="fa fa-home-lg col-md-12" style="background-color:black;"></i>
                  </li>				 <!-- /nav_agile_w3l -->
				<li><a href="">
				 <h2 class="w3_inner_tittle" style=" color:white; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif"> VEBO</h2></a>
				 </li>
				<li>
					<a href="adminhome.html">
						<button style="background-color:black;"><i class="fa fa-times"></i></button>	
					</a>
				</li>

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

 
					<div class="inner_content_w3_agile_info two_in">
						<!-- /chart_agile1-->
					<div class="chart_agile">
							 
					<div class="col-md-12 button_set_one agile_info_shadow graph-form">
					   <div class="col-md-6 button_set_one agile_info_shadow graph-form">
						<div class="grid-1">
<div class="form-body">
	<form class="form-horizontal">
	<div class="form-group"> 
	<label for="inputlabel" class="col-sm-2 control-label">Last updated </label>
	<label for="inputlabel" class="col-sm-2 control-label"> <?php date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y h:i:s a', time()); echo $date;?></label>
	</div> 
																										
																										
</form> 
</div>

</div>	</div>
																			


<div class="col-md-6 top_chart agile_info_shadow pull-right">
 <h3 class="w3_inner_tittle two">Pie Chart</h3>
			<div id="chartdiv9"></div>
</div>
<div class="col-md-6 button_set_one agile_info_shadow graph-form">
											
<div class="col-md-12 button_set_one two agile_info_shadow graph-form">
												<div class="grid-1">
													<div class="form-body">
														<div data-example-id="simple-form-inline">
														
<div class="form-horizontal">
<div class="form-group"> 
<div class="col-sm-6">
 <?php
                $sql1="select * from bookingstatus where bflag=1";
                $res1=mysql_query($sql1,$con);
                $resn1=mysql_num_rows($res1);

             ?>
<label for="inputlabel" class="col-sm-12 control-label">Total number of Events:<span><?php echo "&nbsp".$resn1; ?></span></label>
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
	<label for="inputlabel" class="col-sm-12 control-label pull-left">Total number of Hours:<span><?php echo "&nbsp".$d1."&nbspHours";  ?></span></label>									
	</div>
	</div>
	</div>
											
				</form>
							</div>
						</div>
						</div>
			</div>
																					
			<div class="clearfix"> </div>
	</div>
		<div class="col-md-6 top_chart agile_info_shadow ">
		<div class="form-horizontal col-md-7 pull-right">
										                    <div class="form-group"> 
		<button type="print" class="fa fa-print" class="btn btn-sucess" > Print</button>
		</div>
																				</div>
																				

																			</div>
											</div>
									 <div class="clearfix"></div>
							</div>
						<!-- //chart_agile1-->
						
                        
							  <div class="clearfix"></div>
													
						</div>
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 MESTOZYME. All Rights Reserved | Design by  <a href="" target="_blank">MESTOZYME</a> </p>
</div>	
<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="chart/js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
           <!-- /amcharts -->
				<script src="js/amcharts.js"></script>
		        <script src="js/serial.js"></script>
                 <script src="js/export.js"></script>	
				<script src="js/light.js"></script>
				 
						 <script src="js/pie.js"></script>
		<script>
// generate data
var chartData = [];

function generateChartData() {
    var firstDate = new Date();
    firstDate.setTime(firstDate.getTime() - 10 * 24 * 60 * 60 * 1000);

    for (var i = firstDate.getTime(); i < (firstDate.getTime() + 10 * 24 * 60 * 60 * 1000); i += 60 * 60 * 1000) {
        var newDate = new Date(i);

        if (i == firstDate.getTime()) {
            var value1 = Math.round(Math.random() * 10) + 1;
        } else {
            var value1 = Math.round(chartData[chartData.length - 1].value1 / 100 * (90 + Math.round(Math.random() * 20)) * 100) / 100;
        }

        if (newDate.getHours() == 12) {
            // we set daily data on 12th hour only
            var value2 = Math.round(Math.random() * 12) + 1;
            chartData.push({
                date: newDate,
                value1: value1,
                value2: value2
            });
        } else {
            chartData.push({
                date: newDate,
                value1: value1
            });
        }
    }
}

generateChartData();

var chart = AmCharts.makeChart("chartdiv3", {
    "type": "serial",
    "theme": "light",
    "marginRight": 80,
    "dataProvider": chartData,
    "valueAxes": [{
        "axisAlpha": 0.1
    }],

    "graphs": [{
        "balloonText": "[[title]]: [[value]]",
        "columnWidth": 20,
        "fillAlphas": 1,
        "title": "daily",
        "type": "column",
        "valueField": "value2"
    }, {
        "balloonText": "[[title]]: [[value]]",
        "lineThickness": 2,
        "title": "intra-day",
        "valueField": "value1"
    }],
    "zoomOutButtonRollOverAlpha": 0.15,
    "chartCursor": {
        "categoryBalloonDateFormat": "MMM DD JJ:NN",
        "cursorPosition": "mouse",
        "showNextAvailable": true
    },
    "autoMarginOffset": 5,
    "columnWidth": 1,
    "categoryField": "date",
    "categoryAxis": {
        "minPeriod": "hh",
        "parseDates": true
    },
    "export": {
        "enabled": true
    }
});
</script>



<script>
var chart = AmCharts.makeChart( "chartdiv9", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "country": "Lithuania",
    "litres": 501.9
  }, {
    "country": "Czech Republic",
    "litres": 301.9
  }, {
    "country": "Ireland",
    "litres": 201.1
  }, {
    "country": "Germany",
    "litres": 165.8
  }, {
    "country": "Australia",
    "litres": 139.9
  }, {
    "country": "Austria",
    "litres": 128.3
  }, {
    "country": "UK",
    "litres": 99
  }, {
    "country": "Belgium",
    "litres": 60
  }, {
    "country": "The Netherlands",
    "litres": 50
  } ],
  "valueField": "litres",
  "titleField": "country",
   "balloon":{
   "fixedPosition":true
  },
  "export": {
    "enabled": true
  }
} );
</script>


		<!-- //amcharts -->
		<script src="js/chart1.js"></script>
				<script src="js/Chart.min.js"></script>
				<script src="js/sales.js"></script>

<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>