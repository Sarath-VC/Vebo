
<!DOCTYPE html>
<html lang="en">
  <head>
	<!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
  </head>
  <?php
	include('blockadminheader.php');
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
					<li><a href="profile.php" class=""><i class="glyphicon glyphicon-menu-left"></i></a></li>
                    </ul>
                   <div class="clearfix"></div>
                   </div>
                                <!--BEGIN INPUT TEXT FIELDS-->
								 <?php

    $u=$_SESSION['block'];
    include('connection.php');
    $sql="select * from login where user_id=$u";
    $res=mysql_query($sql,$con);
    while($row=mysql_fetch_assoc($res)):
      $pass=$row['password'];
      $sql1="select * from executive join department on executive.dept_id=department.dept_id and executive.user_id=$u";
  
  $res1=mysql_query($sql1,$con);
      $row1=mysql_fetch_assoc($res1);
    
    ?>
								
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="col-lg-12">
        <div id="" class="body">
             <div class="form-horizontal">
                <img  class="media-object img-thumbnail user-img pull-right" alt="User Picture" src="data:image/jpeg; base64,<?php  echo base64_encode($row1['exe_image']); ?>" width="132" height="170"/><div class="col-lg-12 ">
      
    </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Name</label>
                    <div class="col-lg-2">
                        <input type="text" required id="text1" placeholder="FIRST" class="form-control"value="<?php echo $row1['exe_fname']; ?>" name="fname">
                    </div>
                    <div class="col-lg-2">
                        <input type="text" required id="text2" placeholder="LAST" class="form-control" value="<?php echo $row1['exe_lname']; ?>" name="lname">
                    </div><input type="file" required accept="image/*" class="col-lg-3 pull-right" name="myimg"/>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">UserName</label>
                    <div class="col-lg-4">
                        <input type="text" required id="usename" placeholder="" class="form-control" value="<?php echo $row['user_name']; ?>">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Dept.</label>
                    <div class="col-lg-4">
                        <select required id="dept" class="form-control" name="dep"><option value="<?php echo $row1['dept_id']; ?>" required><?php echo $row1['dept_name']; ?></option>
 
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
                       <input type="date" required id="date2" name="dob" class="form-control" value="<?php echo $row1['exe_dob']; ?>">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-lg-4">Gender</label>
                    <div class="col-lg-8">
                        <div class="checkbox">
                                <label>
                          <?php
       $g=$row1['exe_gender']; 
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
                        <textarea id="autosize" required class="form-control" name="add"><?php echo $row1['exe_address']; ?></textarea>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                     <label for="text1" class="control-label col-lg-4">E-Mail</label>
                     <div class="col-lg-4">
                         <input  id="email" type="email" required pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" class="form-control" value="<?php echo $row1['exe_email']; ?>" name="email">
                     </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-lg-4">Mob NO.</label>
                    <div class="col-lg-4">
                        <input type="tel" required pattern="[0-9]{10}" class="form-control" value="<?php echo $row1['exe_contact']; ?>" name="mobno">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-lg-4">Password</label>
                    <div class="col-lg-4">
                        <input class="validate[required] form-control" required type="password" placeholder="--PASSWORD--" name="pass1" id="pass1" onmouseout="Validate();"/><label id="labeltxt"></label>
                    </div>
                </div>
                <div class="form-group" style="display:none;">
                    <label class="control-label col-lg-4"></label>
                    <div class="col-lg-4">
                        <input class="validate[required] form-control" type="password" placeholder="--PASSWORD--" name="pass2" id="pass2" value="<?php echo $row['password']; ?>"/>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-8 col-sm-9 col-xs-12 col-md-offset-3 pull-right">
                        <button type="submit" class="btn btn-primary" name="subcbtn" onclick="disca();">Cancel</button>
						<div class="col-lg-4">
                        <button type="submit" class="btn btn-success" name="subbtn">Submit</button>
                        </div>						  
                        </div>
                    </div>
				</div>
			</div>
    </div>
    </div>
	</form>
<?php endwhile; 

if(isset($_POST['subbtn']))
{
      if($_POST['pass1']==$pass)
      {
        
         $fn=$_FILES["myimg"]["name"];
       $content=addslashes(file_get_contents($_FILES['myimg']['tmp_name']));
            $sql1="update executive set exe_fname='$_POST[fname]',exe_lname='$_POST[lname]',dept_id='$_POST[dep]',exe_dob='$_POST[dob]',exe_gender='$_POST[optionsRadios]',exe_address='$_POST[add]',exe_email='$_POST[email]',exe_contact='$_POST[mobno]',exe_image='{$content}' where user_id=$u";
    
    $res1=mysql_query($sql1,$con);
           if($res)
           {
            if($res1)
                {
                	 $txt="Profile Updated";
                	 $date = date('Y-m-d H:i:s');
                     $sqll="insert into log(content,datetime,user_id) values('$txt','$date',$u)";
                     $resl=mysql_query($sqll,$con);
                     if(!$resl)
                     	echo mysql_error();
                    ?> <script>alert("Updated successfully");window.location.assign("http://localhost/vebo/blockadminpanel/production/profile.php");</script>  <?php
                    

                }
             else
                echo "<script>alert('Updated Partially');</script>";
           }
           else
               echo "<script>alert('Cannot Update');</script>";
        }

   
}

   mysql_close($con);




?>
<script>function disca() { window.location.assign("http://localhost/vebo/blockadminpanel/production/profile.php"); } </script>
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
<script type="text/javascript">
                           function Validate() {
                                var password = document.getElementById("pass1").value;
                                var confirmPassword = document.getElementById("pass2").value;
                                if (password != confirmPassword) {
                                    document.getElementById("labeltxt").innerHTML="Password does not match";
                                    
                                    return false;
                                }
                                else{
                                  document.getElementById("labeltxt").innerHTML="";
                                }
                                return true;
                            }
                 </script>
  </body>
</html>