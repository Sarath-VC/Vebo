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
    <title>Notifications|VEBO</title>
    
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
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
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
            NOTIFICATIONS</h3>
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
<form action="">
<div class="row">
<div class="col-lg-12">
    <div class="box dark">
        <header>
            <div class="icons"><i class="glyphicon glyphicon-list-alt"></i></div>
            <h5>Notification Details</h5>
            <!-- .toolbar -->
            <div class="icons pull-right"><a href="adminhome.php"><i class="glyphicon glyphicon-share-alt"> BACK</i></a></div>
                 <!-- /.toolbar -->           <!-- /.toolbar -->
        </header>
        <div id="" class="body">
        
           <form action="">
	    <div class="body">
		<table class="table table-condensed table-hovered sortableTable">
		    <thead>
			<tr>
			    <th>EVENT ID<i class="fa sort"></i></th>
			    <th>REQUESTER<i class="fa sort"></i></th>
			    <th>DEPARTMENT<i class="fa sort"></i></th>
				<th>VENUE NAME<i class="fa sort"></i></th>
				<th>DATE<i class="fa sort"></i></th>
				<th>PURPOSE<i class="fa sort"></i></th>
				<th>STATUS<i class="fa sort"></i></th>
			</tr>
		    </thead>
		    <tbody>
			<?php
            include('connection.php');
            $sql="select * from bookingstatus where bflag=1";
             $res=mysql_query($sql,$con);
             while ($row=mysql_fetch_assoc($res)) 
             {
                     echo "<tr><td>".$row['ref_no']."</td><td>";
                     $u=$row['user_id'];
                     $c=$row['cell_id'];
                     $sqlu="select * from login where user_id=$u and lflag=1";
                     $resu=mysql_query($sqlu,$con);
                     $rowu=mysql_fetch_assoc($resu);
                    if($rowu['user_type']=="BA"||$rowu['user_type']=="FAC"||$rowu['user_type']=="EC")
        {
        
            $sql1="select * from executive join department on executive.dept_id=department.dept_id and executive.user_id=$u";
    
    $res1=mysql_query($sql1,$con);
            $row1=mysql_fetch_assoc($res1);
            echo $row1['exe_fname']."</td><td>".$row1['dept_name']."</td><td>";
        }
        elseif($rowu['user_type']=="CH"||$rowu['user_type']=="CR"||$rowu['user_type']=="AS")
        {
            $sql2="select * from student join department on student.dept_id=department.dept_id and student.user_id=$u";
    
    $res2=mysql_query($sql2,$con);
    $row2=mysql_fetch_assoc($res2);
      echo $row2['stud_fname']."</td><td>".$row2['dept_name']."</td><td>";
    
    }

    $sqlv="select * from cell where cell_id=$c";
    $resv=mysql_query($sqlv,$con);
    $i=1;
    while($rowv=mysql_fetch_assoc($resv))
    {
         $sqlv2="select * from venue join cell where venue.v_id=cell.v_id";
          $resv2=mysql_query($sqlv2,$con);
    $resn=mysql_num_rows($resv);
        $r=$rowv['v_id'];
        $sqlv1="select * from venue where v_id=$r";
    $resv1=mysql_query($sqlv1,$con);
   
    while($rowv1=mysql_fetch_assoc($resv1))
    { 
       echo $rowv1['v_name'];
       if($i<$resn)
        {echo ",&nbsp";}
     }
     
  $i++;
    }


            echo "</td><td>".$row['start_date']." To ".$row['finish_date']."</td><td>".$row['purpose']."</td><td>";
    echo $row['b_status']."</td></tr>";
            
      
             }
                



            ?>
		    </tbody>
		</table>
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
                <p>VEBO ADMIN PANEL &copy; MESTOZYME</p>
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

            <script src="file:///E|/responsive website template/veboBootstrap-Admin-Template-master/public/assets/js/style-switcher.js"></script>
        </body>

</html>
