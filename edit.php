<!doctype html>
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

    <title>Profile Form |VEBO</title>
    
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
        //function a(){
           // document.getElementById('myimg').innerHTML=onclick();
      
       
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
                                <h3>  &nbsp;
             </h3>
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
<form action="" method="POST" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-12">
    <div class="box dark">
        <header>
            <div class="icons"><i class="glyphicon glyphicon-user"></i>PROFILE</div>
            <h5><!-- .toolbar -->            </h5>
                    
            <div class="icons pull-right"><a href="usermanage.php"><i class="glyphicon glyphicon-share-alt"> BACK</i></a></div>
             <!-- /.toolbar -->
            
        </header>
        <?php
		 error_reporting(E_ALL ^ E_DEPRECATED);
		$u=$_GET["uid"];
		include('connection.php');
		$sql="select * from login where user_id=$u";
		$res=mysql_query($sql,$con);
		while($row=mysql_fetch_assoc($res)):
		$ut=$row['user_type'];
		if($row['user_type']=="BA"||$row['user_type']=="FAC"||$row['user_type']=="EC")
		{
		
			$sql1="select * from executive join department on executive.dept_id=department.dept_id and executive.user_id=$u";
	
	$res1=mysql_query($sql1,$con);
			$row1=mysql_fetch_assoc($res1);
		}
		elseif($row['user_type']=="CH"||$row['user_type']=="CR"||$row['user_type']=="AS")
		{
			$sql2="select * from student join department on student.dept_id=department.dept_id and student.user_id=$u";
	
	$res2=mysql_query($sql2,$con);
	$row2=mysql_fetch_assoc($res2);
	
	}
		
		?>
        <div id="" class="body">
            <div class="form-horizontal" >
                <div class="form-group" style="float:right;">
                  <img class="media-object user-img pull-right" alt="User Picture"  id="imgid" src="data:image/jpeg; base64,<?php  if($row['user_type']=="BA"||$row['user_type']=="FAC"||$row['user_type']=="EC")
    echo base64_encode($row1['exe_image']); else echo base64_encode($row2['stud_image']); ?>" width="132" height="170"/>
    
<div class="col-lg-12 "></div></div>

                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4" required>Name</label>

                    <div class="col-lg-2">
                        <input type="text" id="text1" required class="form-control"
                        value="<?php if($row['user_type']=="BA"||$row['user_type']=="FAC"||$row['user_type']=="EC")
	echo $row1['exe_fname']; else echo $row2['stud_fname']; ?>" name="fname">
                    </div>
                    <div class="col-lg-2">
                        <input type="text" id="text2" class="form-control" value="<?php if($row['user_type']=="BA"||$row['user_type']=="FAC"||$row['user_type']=="EC")
	echo $row1['exe_lname']; else echo $row2['stud_lname']; ?>" name="lname" required >
                    </div>
                </div>
                <div class="form-group">
                <div class="col-lg-10" style="float:right;">
                <input type="file" required accept="image/*" class="col-lg-3 pull-right" name="myimg"/></div></div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">UserName</label>
                   <div class="col-lg-4">
                        <input type="text" required id="usename" name="user" placeholder="" required class="form-control" value="<?php echo $row['user_name'];  ?>">
                    </div>
                </div>

                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Dept.</label>

                    <div class="col-lg-4">
                        <select id="dept" required class="form-control" name="dep"><option  value="<?php if($ut=="BA"||$ut=="FAC"||$ut=="EC") echo $row1['dept_id']; else echo $row2['dept_id']; ?>" required><?php  if($ut=="BA"||$ut=="FAC"||$ut=="EC")
	echo $row1['dept_name']; else echo $row2['dept_name']; ?></option>
 
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
                        <label class="control-label col-lg-4" for="reportrange">D.O.B</label>

                        <div class="col-lg-4">
                            <input type="date" id="date2" required class="form-control" value="<?php if($ut=="BA"||$ut=="FAC"||$ut=="EC")
	echo $row1['exe_dob']; else echo $row2['stud_dob']; ?>" name="dob">
                        </div>
                        </div>
          
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-lg-4">Gender</label>
                    <div class="col-lg-8">
                            <div class="checkbox">
                                <label>
                          <?php if($ut=="BA"||$ut=="FAC"||$ut=="EC")
	     $g=$row1['exe_gender']; else $g=$row2['stud_gender'];
                       if($g == "Male"){
                                     ?>     
                                    <input class="uniform" type="radio" name="optionsRadios" value="Male" checked>Male
                                </label> <label>
                                    <input class="uniform" type="radio" name="optionsRadios" value="Female">Female 
                                </label><?php } else {?>
                                  <label>
                                   <input class="uniform" type="radio" name="optionsRadios" value="Male" >Male
                                </label>
                                 <label>
                                    <input class="uniform" type="radio" name="optionsRadios" value="Female" checked>Female <?php  } ?>
                                </label>
                            </div>
                            </div>
                            </div>
                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="autosize" class="control-label col-lg-4">Address</label>

                    <div class="col-lg-4">
                        <textarea id="autosize" required class="form-control" name="add"><?php if($ut=="BA"||$ut=="FAC"||$ut=="EC")
    {echo $row1['exe_address'];} else {echo $row2['stud_address'];} ?></textarea>
                    </div>
                </div>
              
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">E-Mail</label>

                    <div class="col-lg-4">
                        <input type="text" id="email" placeholder="you@example.com" required pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" value="<?php if($ut=="BA"||$ut=="FAC"||$ut=="EC")
	echo $row1['exe_email']; else echo $row2['stud_email']; ?>" name="email">
                    </div>
                </div>
                <!-- /.form-group -->
                
                 <div class="form-group">
                    <label class="control-label col-lg-4">Mob NO.</label>

                    <div class="col-lg-4">
                        <input type="text" required pattern="[0-9]{10}" class="form-control" value="<?php if($ut=="BA"||$ut=="FAC"||$ut=="EC")
	echo $row1['exe_contact']; else echo $row2['stud_contact']; ?>" name="mobno">
                    </div>
                </div>
<!-- /.form-group -->
 
<?php endwhile; ?>

            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
</div>
<div class="row">
    <!-- .col-lg-12 -->
    <div class="col-lg-12">
        <!-- .box -->
        <div class="box">
        </div>
    </div>
</div>
<!-- /.row -->
<!--END DATE RANGE PICKER -->
<div style=" background-color: #1dcadf;color: white;padding: 14px 20px;margin: 8px 0;border: none;  cursor: pointer; width: 100%;">
<button class="btn btn-primary btn-rect "  type="submit" name="upbtn" align="center">UPDATE</button>
<a href="usermanage.php">
<button class="btn btn-primary btn-rect pull-right " type="submit" name="delbtn">ABORT</button></a>

</div>
</form>
<?php
if(isset($_POST["upbtn"]))
{
    $sql="update login set user_name='$_POST[user]' where user_id=$u";
        $res=mysql_query($sql,$con);
       $fn=$_FILES["myimg"]["name"];
       $content=addslashes(file_get_contents($_FILES['myimg']['tmp_name']));
        
        if($ut=="BA"||$ut=="FAC"||$ut=="EC")
        {
        
            $sql1="update executive set exe_fname='$_POST[fname]',exe_lname='$_POST[lname]',dept_id='$_POST[dep]',exe_dob='$_POST[dob]',exe_gender='$_POST[optionsRadios]',exe_address='$_POST[add]',exe_email='$_POST[email]',exe_contact='$_POST[mobno]',exe_image='{$content}' where user_id=$u";
    
    $res1=mysql_query($sql1,$con);
           if($res)
           {
            if($res1)
                {echo "<script>alert('Updated successfully');</script>";
                    ?> <script>window.location.assign("http://localhost/vebo/usermanage.php");</script>  <?php

                }
             else
                echo "<script>alert('Updated Partially');</script>";
           }
           else
               echo "<script>alert('Cannot Update');</script>";
        }
        elseif($ut=="CH"||$ut=="CR"||$ut=="AS")
        {
         $sql1="update student set stud_fname='$_POST[fname]',stud_lname='$_POST[lname]',dept_id='$_POST[dep]',stud_dob='$_POST[dob]',stud_gender='$_POST[optionsRadios]',stud_address='$_POST[add]',stud_email='$_POST[email]',stud_contact='$_POST[mobno]',stud_image='{$content}' where user_id=$u";
    
    $res1=mysql_query($sql1,$con);
           if($res)
           {
            if($res1)
                {echo "<script>alert('Updated successfully');</script>";
                    ?> <script>window.location.assign("http://localhost/vebo/usermanage.php");</script>  <?php
                 }
            else
                echo "<script>alert('Updated Partially');</script>";
           }
           else
               echo "<script>alert('Cannot Update');</script>";
         }

   
}
 if(isset($_POST["delbtn"])){ ?> <script>window.location.assign("http://localhost/vebo/usermanage.php");</script>  <?php }
mysql_close($con);


?>
<div class="row"></div>
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
                <p>VEBO USER PANEL &copy; MESTOZYME</p>
            </footer>
            <!-- /#footer -->
      
            <!--jQuery -->
            
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

            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
