<!DOCTYPE html>
<html lang="en">
    <?php
	include('blockadminheader.php');
	include('subheader.php');
    $u=$_SESSION['block'];
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
                    <h2><i class="glyphicon glyphicon-lock"></i> CHANGE PASSWORD</h2>
                    <div class="clearfix"></div>
                  </div>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
			
                    <div class="form-horizontal">

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Old Password</label>

                    <div class="col-lg-3">
                        <input type="password" required pattern="[a-z0-9A-Z]{8,16}" id="text1" placeholder="********" class="form-control" name="oldpass" />
                    </div>
                </div>
               
                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">New Password</label>

                    <div class="col-lg-3">
                        <input type="password" id="newpass" required pattern="[a-z0-9A-Z]{8,16}" placeholder="********" class="form-control" name="newpass" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Confirm New Password</label>

                    <div class="col-lg-3">
                        <input type="password" required pattern="[a-z0-9A-Z]{8,16}" id="newcpass" placeholder="********" class="form-control" name="newcpass" onmouseout="Validate();" />
                                            </div><label id="labeltxt"></label>

                </div>
                <!-- /.form-group -->
				<div class="ln_solid"></div>
				 
				
				<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3 pull-right">
                <button class="btn btn-danger "  type="submit" onclick="disca();">CANCEL</button>
				<div class="col-lg-3">
                <button class="btn btn-primary" type="submit" name="btn">SUBMIT</button>
				</div>
                
            </form>
            <?php
if(isset($_POST['btn']))
{
  include('connection.php');
  $sql="select * from login where user_id=$u";
  $res=mysql_query($sql,$con);
  $row=mysql_fetch_assoc($res);
  $p=$_POST['newcpass'];
  $up=$_POST['oldpass'];
  if($up==$row['password'])
  {
    $sql1="update login set password='$p' where user_id=$u";
    $res1=mysql_query($sql1,$con);
    if($res1)
    {
        ?>  <script type="text/javascript">alert("Password has been changed");
        window.location.assign("http://localhost/vebo/blockadminpanel/production/blockadminhome.php");</script>  <?php
    }
    else
    {
        echo mysql_error();
    }
  }
  else
  {
    ?>  <script type="text/javascript">alert("You were entered a wrong password !!! Please enter your correct password.");
        window.location.assign("http://localhost/vebo/blockadminpanel/production/changepassword.php");</script>  <?php
  }
}

?>
<script> function disca(){ window.location.assign("http://localhost/vebo/blockadminpanel/production/blockadminhome.php"); }</script>
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
		<script type="text/javascript">
                           function Validate() {
                                var password = document.getElementById("newpass").value;
                                var confirmPassword = document.getElementById("newcpass").value;
                                if (password != confirmPassword) {
                                    document.getElementById("labeltxt").innerHTML="Password does not match";
                                    
                                    return false;
                                }
                                else{
                                  document.getElementById("labeltxt").innerHTML=""; }
                                return true;
                            }
                 </script>
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