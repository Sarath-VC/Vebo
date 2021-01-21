<!DOCTYPE html>
<html lang="en">
  <head>
	<!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
     <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">	
  </head>
  <?php
	include('userheader.php');
	include('subheader.php');
    include('connection.php');
    $am=$_GET['aid'];
    $_SESSION['aid']=$am;
$sql="select * from aminities join department on a_id=$am and aminities.dept_id=department.dept_id";
    $res=mysql_query($sql,$con);
    while($row=mysql_fetch_assoc($res)):
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
                <h2><i class="fa fa-laptop"></i>  AMENITY</h2>
                <div class="clearfix"></div>
                </div>
				
    <!--BEGIN OF AMENITY FIELDS-->
                   
			<div class="form-horizontal col-md-12">
				<div class="col-md-55">
                    <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="data:image/jpeg; base64,<?php echo base64_encode($row['a_image']); ?>" alt="image" />
                    </div>
                </div>
			    <div class="col-lg-5">
             
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-5">NAME:</label>   
					<label for="text1" class="control-label col-lg-6"><?php echo $row['a_name']; ?></label>  
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-5">TYPE:</label>
					<label for="text1" class="control-label col-lg-6"><?php echo $row['a_type']; ?></label>    
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-5">DEPARTMENT:</label>
                     <label for="text1" class="control-label col-lg-6"><?php echo $row['dept_name']; ?></label>
                </div>
                <!-- /.form-group -->
				</div>
                <form method="post">
                    <div class="form-group">
                        <label class="control-label pull-left">AVAILABILITY:</label>
                        <div class="col-md-2">
                        <input id="birthday" name="dateb" class="date-picker form-control " required="required" type="text"><button type="submit" class="btn btn-info btn-xs" name="check" id="check">CHECK</button>
                        </div>
                        <label class="control-label col-md-5 col-sm-12 col-xs-12" style="color:green;" id="txt"></label>
                        <label class="control-label col-md-5 col-sm-12 col-xs-12" style="color:blue;" id="txt2"></label>
                        <label class="control-label col-md-5 col-sm-12 col-xs-12" style="color:red;" id="txt3"></label>
                    </div>
                       </form>
            <?php
                if(isset($_POST['check']))
                {
                  $vardate=$_POST['dateb'];
                  $vars=explode('/', $vardate);
                  $m=$vars[0];
                   $d=$vars[1];
                    $y=$vars[2];
                  $dat = $y."-".$m."-".$d;
                  $fs= strtotime($dat);
                  $fr = date("Y-m-d",$fs);
             $sqlb="select * from bookingstatus join cell on '$fr'>=start_date and '$fr'<=finish_date and cell.a_id=$am ";
             $resb=mysql_query($sqlb,$con);
              $resn=mysql_num_rows($resb);
              if(!$resb)
                echo mysql_error();
              if($resn==0)
                 {

                  ?>
                     <script type="text/javascript">
                        document.getElementById('txt').innerHTML="AVAILABLE";
                     </script>
                  <?php
                 }
                 else
                 {
            while($rowb=mysql_fetch_assoc($resb))
            { 
                   switch($rowb['cell_status'])
                   {
                      case "Cancelled": ?>
                     <script type="text/javascript">
                        document.getElementById('txt').innerHTML="AVAILABLE";
                     </script>
                  <?php break;
                      case "Requested":
                      case  "Pending" :?>
                     <script type="text/javascript">
                        document.getElementById('txt2').innerHTML="PENDING";
                     </script>
                  <?php break;
                  case "Booked":?>
                     <script type="text/javascript">
                        document.getElementById('txt3').innerHTML="NOT AVAILABLE";
                     </script>
                  <?php break;
                  default : ?>
                     <script type="text/javascript">
                        document.getElementById('txt2').innerHTML="";
                     </script>
                  <?php 



                   }
                             }
          }


                   }  
             ?>
                <!-- /.form-group -->
				<div class="form-group pull-right">
				<a href="bookingami.php"> <button type="button" class="btn btn-success" name="bknw">BOOK NOW</button></a>
                </div>
                  <?php endwhile;?>

            </div>			
	    </div>
			
    <!--/END OF CELL FIELDS-->
	
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
 <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

       
 <script>
      $(document).ready(function() {
        $('#birthday').daterangepicker({
          singleDatePicker: true,
         
          calender_style: "picker_4",
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });

      
    </script>
  
     <script>
      $(document).ready(function() {
        function initToolbarBootstrapBindings() {
          var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
              'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
              'Times New Roman', 'Verdana'
            ],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
          $.each(fonts, function(idx, fontName) {
            fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
          });
          $('a[title]').tooltip({
            container: 'body'
          });
          $('.dropdown-menu input').click(function() {
              return false;
            })
            .change(function() {
              $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', function() {
              this.value = '';
              $(this).change();
            });

          $('[data-role=magic-overlay]').each(function() {
            var overlay = $(this),
              target = $(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
          });

          if ("onwebkitspeechchange" in document.createElement("input")) {
            var editorOffset = $('#editor').offset();

            $('.voiceBtn').css('position', 'absolute').offset({
              top: editorOffset.top,
              left: editorOffset.left + $('#editor').innerWidth() - 35
            });
          } else {
            $('.voiceBtn').hide();
          }
        }

        function showErrorAlert(reason, detail) {
          var msg = '';
          if (reason === 'unsupported-file-type') {
            msg = "Unsupported format " + detail;
          } else {
            console.log("error uploading file", reason, detail);
          }
          $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        $('#editor').wysiwyg({
          fileUploadError: showErrorAlert
        });

        prettyPrint();
      });
    </script>
    <!-- /bootstrap-wysiwyg -->

     <!-- compose -->
    <script>
      $('#compose, .compose-close').click(function(){
        $('.compose').slideToggle();
      });
    </script>

  </body>
</html>