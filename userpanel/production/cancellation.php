<!DOCTYPE html>
<html lang="en">
    <?php
	include('userheader.php');
	include('subheader.php');
    include('connection.php');
    $user=$_SESSION['user'];
    $query =mysql_query("select * from login where user_id=$user",$con);
    $rows=mysql_fetch_assoc($query);
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
                    <h2><i class="glyphicon glyphicon-remove"></i> CANCELLATION</h2>
					<ul class="nav navbar-right panel_toolbox">
					<li><a href="bookedevents.php" class="close-link"><i class="glyphicon glyphicon-book"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
			
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ref. ID <span class="required">*</span></label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input id="middle-name" name="refno" class="form-control col-md-7 col-xs-12" type="text" required="required">
                        </div>
                    </div>
                      
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input id="psw" name="psw" class="form-control col-md-7 col-xs-12" required="required" type="password" data-original-title="Please use your secure password" placeholder="*********" onmouseout="a();">
                        </div>
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" id="labeltxt">
                        </label>
                    </div>
                     <div class="form-group" style="display : none;">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input id="psw2" value="<?php echo $rows['password']; ?>">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 pull-right">
                          <button type="submit" class="btn btn-primary" onclick="cncl();">Cancel</button>
						  <div class="col-lg-2">
                          <button type="submit" class="btn btn-success" name="sbtn">Submit</button>
                          </div>						  
                        </div>
                    </div>
            </form>
            <?php



if(isset($_POST['sbtn']))
{
  $sql="select * from login where user_id=$user";
  $res=mysql_query($sql,$con);
  $row=mysql_fetch_assoc($res);
  $up=$_POST['psw'];
  if($up==$row['password'])
  {
    $sql1="select cell_id from bookingstatus where ref_no='$_POST[refno]'";
    $res1=mysql_query($sql1,$con);
    $row1=mysql_fetch_assoc($res1);
    $cll=$row1['cell_id'];
    $sql2="update cell set cell_status='Pending' where cell_id=$cll";
    $res2=mysql_query($sql2,$con);
    if($res2)
    {
        ?>  <script type="text/javascript">alert("Your request has been submitted");
        window.location.assign("http://localhost/vebo/userpanel/production/bookedevents.php");</script>  <?php
    }
    else
    {
        echo mysql_error();
    }
  }
}

            ?><script type="text/javascript">function cncl(){ window.location.assign("http://localhost/vebo/userpanel/production/bookedevents.php"); }</script>
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
    <script type="text/javascript">
function a() {
                                var password = document.getElementById("psw").value;
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
  </body>
</html>