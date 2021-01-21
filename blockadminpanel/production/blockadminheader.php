<?php session_start(); 
if(!isset($_SESSION['block']))
   {header("Location: http://localhost/vebo/login.php"); } ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>
    <title>BLOCKADMIN PANEL | VEBO </title>

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
	
  </head>
 <?php
     include('connection.php');
     include('updtsts.php');
     $u=$_SESSION['block'];
    $sql="select * from login where user_id = $u and lflag=1";
    
    $res=mysql_query($sql,$con);
    $row=mysql_fetch_assoc($res); 
            $sql1="select * from executive join department on executive.dept_id=department.dept_id and executive.user_id=$u";
    
            $res1=mysql_query($sql1,$con);
            $row1=mysql_fetch_assoc($res1);
            $deps=$row1['dept_id'];
            
    ?>
  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a href="blockadminhome.php" class="site_title"><img src="icons/vebo.png">EBO<span></span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
               <div class="profile_pic">
               <img src="data:image/jpeg; base64,<?php echo base64_encode($row1['exe_image']); ?>" alt="..." class="img-circle profile_img">
               </div>
               <div class="profile_info">
               <span>Welcome,</span>
               <h2><?php echo $row1['exe_fname']; ?></h2>
               </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                    <li><a href="blockadminhome.php"><i class="fa fa-home"></i> HOME <span></span></a> </li>
				    <li><a href="profile.php"><i class="fa fa-user"></i> PROFILE<span></span></a> </li>
                    <li><a href="eventedit.php"><i class="fa fa-calendar"></i>PLANNER <span class=""></span></a></li>
                    <li><a><i class="fa fa-institution"></i> VENUES<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                            <li><a>SEMINAR HALLS<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                            
                            <?php
                                $sqlv="select * from venue where vflag=1 and v_type='Seminar Hall'";
                                $resv=mysql_query($sqlv,$con);
                                while($rowv=mysql_fetch_assoc($resv))
                                {
                            ?>
                            <li class="sub_menu">
                            <a href="generalvenue.php?vid=<?php echo $rowv['v_id']; ?>"><?php echo $rowv['v_name']; ?></a></li>
                            <?php } ?>                         
                            </ul>
                            </li>
                            <li><a>CLASS ROOMS<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                            <?php
                                $sqlv="select * from venue where vflag=1 and v_type='Class Room'";
                                $resv=mysql_query($sqlv,$con);
                                while($rowv=mysql_fetch_assoc($resv))
                                {
                            ?>
                            <li class="sub_menu"> 
                            <a href="generalvenue.php?vid=<?php echo $rowv['v_id']; ?>"><?php echo $rowv['v_name']; ?></a></li>
                            <?php } ?>                            
                            </ul>
                            </li>
                            <li>
                            <a>LABS<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                             <?php
                                $sqlv="select * from venue where vflag=1 and v_type='Lab'";
                                $resv=mysql_query($sqlv,$con);
                                while($rowv=mysql_fetch_assoc($resv))
                                {
                            ?>
                            <li class="sub_menu">
                            <a href="generalvenue.php?vid=<?php echo $rowv['v_id']; ?>"><?php echo $rowv['v_name']; ?></a></li>
                            <?php } ?>
                            </ul>
                            </li>
                            <li>
                            <a> DRAWING HALLS<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                             <?php
                                $sqlv="select * from venue where vflag=1 and v_type='Drawing Hall'";
                                $resv=mysql_query($sqlv,$con);
                                while($rowv=mysql_fetch_assoc($resv))
                                {
                            ?>
                            <li> <a href="generalvenue.php?vid=<?php echo $rowv['v_id']; ?>"><?php echo $rowv['v_name']; ?></a></li>
                            <?php } ?>
                            </ul>
                            </li>
                            <li>
                            <a> CONFERENCE HALL<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                             <?php
                                $sqlv="select * from venue where vflag=1 and v_type='Conference Hall'";
                                $resv=mysql_query($sqlv,$con);
                                while($rowv=mysql_fetch_assoc($resv))
                                {
                            ?>
                            <li> <a href="generalvenue.php?vid=<?php echo $rowv['v_id']; ?>"><?php echo $rowv['v_name']; ?></a></li>
                            <?php } ?>
                            </ul>
</li>

                        </ul>
                    </li>
                     <li><a><i class="fa fa-desktop"></i> AMENITIES<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a>PROJECTOR<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                             <?php
                                $sqlv="select * from aminities where aflag=1 and a_type='Projector'";
                                $resv=mysql_query($sqlv,$con);
                                while($rowv=mysql_fetch_assoc($resv))
                                {
                            ?>
                            <li class="sub_menu"> <li> <a href="generalamenity.php?aid=<?php echo $rowv['a_id']; ?>"><?php echo $rowv['a_name']; ?></a></li>
                            <?php } ?>                           
                            </ul>
                            </li>
                            <li><a>SOUND SYSTEM<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                           <?php
                                $sqlv="select * from aminities where aflag=1 and a_type='Sound System'";
                                $resv=mysql_query($sqlv,$con);
                                while($rowv=mysql_fetch_assoc($resv))
                                {
                            ?>
                            <li class="sub_menu"> <li> <a href="generalamenity.php?aid=<?php echo $rowv['a_id']; ?>"><?php echo $rowv['a_name']; ?></a></li>
                            <?php } ?>                        
                            </ul>
                            </li>
                            <li>
                            <a>LAPTOP<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                            <?php
                                $sqlv="select * from aminities where aflag=1 and a_type='Laptop'";
                                $resv=mysql_query($sqlv,$con);
                                while($rowv=mysql_fetch_assoc($resv))
                                {
                            ?>
                            <li class="sub_menu"> <li> <a href="generalamenity.php?aid=<?php echo $rowv['a_id']; ?>"><?php echo $rowv['a_name']; ?></a></li>
                            <?php } ?> 
                            </ul>
                            </li>
                        </ul>
                    </li>
				    <li><a><i class="fa fa-suitcase"></i> REQUESTS<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="bookedevents.php">BOOKINGS</a></li>
				            <li><a href="cancellations.php">CANCELLATION</a></li>
				        </ul>
				    <li><a href="statuseve.php"><i class="fa fa-check"></i> STATUS<span></span></a></li>
				    <li><a href="mapview.php"><i class="fa fa-dot-circle-o"></i> LATTITUDE<span></span></a></li>
					<li><a href="logs.php"><i class="fa fa-share"></i> LOGS<span></span></a></li>
				</ul>
                </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                <a a href="changepassword.php" data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a  href="http://localhost/vebo/signout.php" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
        <div class="nav_menu">
            <nav>
            <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""></a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
					<a href="profile.php">
                    <span class="fa fa-user"></span>					
					<span>Profile</span></a>
					</li>
                    <li>
                    <a href="changepassword.php">
                    <span class="fa fa-lock"></span>
                    <span>Change Password</span> </a>
                    </li>
                    <li>
					<a href="http://localhost/vebo/signout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
					</li>
                    </ul>
                </li>
<?php
                   /* bimail's code */

                   $pdocon=new PDO("mysql:host=localhost;dbname=vebo","root","");
                   $pdocon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                   $sqlg=$pdocon->query("select * from bookingstatus join venue join cell on cell.cell_id=bookingstatus.cell_id and cell.v_id=venue.v_id and b_status='Processing' and venue.dept_id=$deps where cell.cell_id=cell.cell_id");
                     
                    $disp_out=$sqlg->rowCount();

                    /* bimail's code end*/

/*
                     $sqlg="select * from bookingstatus join venue join cell on cell.cell_id=bookingstatus.cell_id and cell.v_id=venue.v_id and b_status='Processing' and venue.dept_id=$deps group by cell.cell_id";
                     $resg=mysql_query($sqlg,$con);
                     $resgn=mysql_num_rows($resg);

                     */
                    ?>
                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"><?php echo $disp_out; ?></span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <?php
                      
  /* bimal code */

      while($res=$sqlg->fetch())
      {



                     // while($rowg=mysql_fetch_assoc($resg))
                     // {
                  ?>
                    <li>
                         <a href="bookedevents.php">
                        <span>
                        <span><?php echo $res['event_name']; ?></span>
                        </span>
                        <span class="message">
                        <?php echo $res['purpose']; ?>
                        </span>
                        </a>
                    </li>
                    <?php }     ?>
                    <li>
                        <div class="text-center">
                        <a href="bookedevents.php">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                        </a>
                        </div>
                    </li>
                    </ul>
                </li>
            </ul>
            </nav>
        </div>
        </div>
        <!-- /top navigation -->

        
      
  </body>
</html>