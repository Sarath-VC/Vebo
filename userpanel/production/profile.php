
<!DOCTYPE html>
<html lang="en">
  <head>
	<!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
  </head>
  <?php
	include('userheader.php');
	include('subheader.php');
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
                   <h2><i class="glyphicon glyphicon-user"></i>PROFILE</h2>
				   <ul class="nav navbar-right panel_toolbox">
					<li><a href="profileedit.php" class=""><i class="glyphicon glyphicon-pencil"></i></a></li>
                    </ul>
                   <div class="clearfix"></div>
                   </div>
                                <!--BEGIN INPUT TEXT FIELDS-->
								 <?php

    $u=$_SESSION['user'];
    include('connection.php');
    $sql="select * from login where user_id=$u";
    $res=mysql_query($sql,$con);
    while($row=mysql_fetch_assoc($res)):
    $ut=$row['user_type'];
    if($row['user_type']=="FAC"||$row['user_type']=="EC")
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
								
    <form action="profile.php">
        <div class="row">
        <div class="col-lg-12">
        <div id="" class="body">
             <div class="form-horizontal">
                <img  class="media-object img-thumbnail user-img pull-right" alt="User Picture" src="data:image/jpeg; base64,<?php  if($row['user_type']=="FAC"||$row['user_type']=="EC")
    echo base64_encode($row1['exe_image']); else echo base64_encode($row1['stud_image']); ?>" width="132" height="170"/><div class="col-lg-12 "></div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Name</label>
                    <div class="col-lg-2">
                        <input type="text" id="text1" disabled placeholder="FIRST" class="form-control"value="<?php if($row['user_type']=="BA"||$row['user_type']=="FAC"||$row['user_type']=="EC")
  echo $row1['exe_fname']; else echo $row2['stud_fname']; ?>" name="fname">
                    </div>
                    <div class="col-lg-2">
                        <input type="text" id="text2"disabled placeholder="LAST" class="form-control" value="<?php if($row['user_type']=="BA"||$row['user_type']=="FAC"||$row['user_type']=="EC")
  echo $row1['exe_lname']; else echo $row2['stud_lname']; ?>">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">UserName</label>
                    <div class="col-lg-4">
                        <input type="text" disabled id="usename" placeholder="" class="form-control" value="<?php echo $row['user_name']; ?>">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Dept.</label>
                    <div class="col-lg-4">
                        <select  disabled id="dept" class="form-control" name="dep"><option  
                        value="<?php if($ut=="FAC"||$ut=="EC") echo $row1['dept_id']; else echo $row2['dept_id']; ?>" required><?php  if($ut=="BA"||$ut=="FAC"||$ut=="EC")
  echo $row1['dept_name']; else echo $row2['dept_name']; ?></option>
 
          <?php
            
            $sqld="select * from department where dflag=1";
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
                       <input type="date" disabled id="date2" name="date2" class="form-control" value="<?php if($ut=="FAC"||$ut=="EC")
  echo $row1['exe_dob']; else echo $row2['stud_dob']; ?>">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-lg-4">Gender</label>
                    <div class="col-lg-8">
                        <div class="checkbox">
                                <label>
                          <?php if($ut=="FAC"||$ut=="EC")
       $g=$row1['exe_gender']; else $g=$row2['stud_gender'];
                       if($g == "Male"){
                                     ?>     
                                    <input disabled class="uniform" type="radio" name="optionsRadios" value="Male" checked>Male
                                </label> <label>
                                    <input  disabled class="uniform" type="radio" name="optionsRadios" value="Female">Female 
                                </label><?php } else {?>
                                  <label>
                                   <input disabled class="uniform" type="radio" name="optionsRadios" value="Male" >Male
                                </label>
                                 <label>
                                    <input class="uniform"disabled type="radio" name="optionsRadios" value="Female" checked>Female <?php  } ?>
                                </label>
                            </div>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="autosize" class="control-label col-lg-4">Address</label>
                    <div class="col-lg-4">
                        <textarea  disabled id="autosize" class="form-control"><?php if($ut=="FAC"||$ut=="EC")
    {echo $row1['exe_address'];} else {echo $row2['stud_address'];} ?></textarea>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                     <label for="text1" class="control-label col-lg-4">E-Mail</label>
                     <div class="col-lg-4">
                         <input disabled type="text" id="email" placeholder="Email" class="form-control" value="<?php if($ut=="FAC"||$ut=="EC")
  echo $row1['exe_email']; else echo $row2['stud_email']; ?>">
                     </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-lg-4">Mob NO.</label>
                    <div class="col-lg-4">
                        <input disabled type="tel" class="form-control" value="<?php if($ut=="FAC"||$ut=="EC")
  echo $row1['exe_contact']; else echo $row2['stud_contact']; ?>">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group" style="display:none;">
                    <label class="control-label col-lg-4">Password</label>
                    <div class="col-lg-4">
                        <input class="validate[required] form-control" type="password" placeholder="********" name="pass1" id="pass1" value="<?php echo $row['password']; ?>"/>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-8 col-sm-9 col-xs-12 col-md-offset-3 pull-right" style="display:none;">
                        <button type="submit" class="btn btn-primary">Cancel</button>
						<div class="col-lg-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                        </div>						  
                        </div>
                    </div>
				</div>
			</div>
    </div>
    </div>
	</form>
<?php endwhile; ?>
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
	  <!-- Dropzone.js -->
    <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>

  </body>
</html>