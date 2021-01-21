
<!DOCTYPE html>
<html lang="en">
  <head>
	 <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  </head>
<?php
include('userheader.php');
include('subheader.php');
include('connection.php');
$ve=$_GET["vid"];
$_SESSION['venueid']=$ve;
$sql="select * from venue join department on v_id=$ve and venue.dept_id=department.dept_id";
    $res=mysql_query($sql,$con);
    while($row=mysql_fetch_assoc($res)):
?>


    <div class="row">
	
        <!-- form input mask -->
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="ln_solid"></div>
		<!-- page content -->
               
                   
    <div class="x_content">

                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="product-image col-md-11">
					    <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="data:image/jpeg; base64,<?php echo base64_encode($row['v_image']); ?>" alt="image" />
                        </div>
						</div>
                        <div class="product_gallery">
                        <a>
                        <img src="data:image/jpeg; base64,<?php echo base64_encode($row['v_image']); ?>" alt="..." />
                        </a>
                        <a>
                        <img src="data:image/jpeg; base64,<?php echo base64_encode($row['v_frontimage']); ?>" alt="..." />
                        </a>
                        <a>
                        <img src="data:image/jpeg; base64,<?php echo base64_encode($row['v_audienceimage']); ?>" alt="..." />
                        </a>
                       
                        </div>
                    </div>

 
        <h3 class="prod_title"><?php echo $row['v_name']; ?></h3>     
        <div class="col-md-4 col-sm-6 col-xs-12">
            
            <div class="x_content">
                    <form action="" method="post">
                    <div class="form-horizontal form-label-left input_mask">
					<div class="form-group">
                        <label class="control-label col-md-6 col-sm-12 col-xs-12">DEPARTMENT NAME :</label>
                        <div class="">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row['dept_name']; ?></label>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-6 col-sm-12 col-xs-12">DESCRIPTION :</label>
                        <div class="">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row['v_description']; ?></label>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-6 col-sm-12 col-xs-12">SEATING CAPACITY :</label>
                        <div class="">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row['v_capacity']; ?></label>
                        </div>
                    </div>
					    <div class="form-group">
                        <label class="control-label col-md-6 col-sm-12 col-xs-12">TYPE :</label>
                        <div class="">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12"><?php echo $row['v_type']; ?></label>
                        </div>
                    </div>
                    </form>
					
					<div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="ln_solid"></div>
					</div>  
                      
                <div class="col-md-12 col-sm-6 col-xs-12">
            
                    <div class="x_content">
                    <form action="" method="post">
                    <div class="form-horizontal form-label-left input_mask">
					<div class="form-group">
                        <label class="control-label col-md-6 col-sm-12 col-xs-12">AMENITIES:</label>
                        <div class="">
                        <?php 
                         $sqlv="select * from aminities where aflag=1 and v_id=$ve";
                                $resv=mysql_query($sqlv,$con);
                                while($rowv=mysql_fetch_assoc($resv))
                                {

                         ?>
						<label class="control-label col-md-3 col-sm-4 col-xs-12"><?php echo $rowv['a_type'];  ?>
						</label>

            <?php } ?>
                        </div>
                    </div>
                    </form>
					
					<div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="ln_solid"></div>
					</div>
					<form method="post">
					<div class="col-md-12 col-sm-12 col-xs-12">
					    <label class="control-label col-md-5 col-sm-12 col-xs-12">AVAILABILITY:</label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                        <input id="birthday" name="dateb" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"><button type="submit" class="btn btn-info btn-xs" name="check" id="check">CHECK</button>
                        </div>
                        <label class="control-label col-md-5 col-sm-12 col-xs-12" style="color:green;" id="txt"></label>
                        <label class="control-label col-md-5 col-sm-12 col-xs-12" style="color:blue;" id="txt2"></label>
                        <label class="control-label col-md-5 col-sm-12 col-xs-12" style="color:red;" id="txt3"></label>
                    </div>
                     <?php endwhile; ?>
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
             $sqlb="select * from bookingstatus join cell on '$fr'>=start_date and '$fr'<=finish_date and cell.v_id=$ve ";
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
             <form method="post">
					<div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="ln_solid"></div>
					</div>

                    <div class="clearfix"></div>
                    </div>
                    </div>
                </div>
			
                <div class="form-horizontal pull-right">
                    <a href="booking.php"> <button type="button" class="btn btn-success btn-sm-5">BOOK NOW</button></a>
                    <button type="submit" class="btn btn-default btn-sm-5" id="adcel" name="adcel">ADD TO CELL</button>
                </div>
            </div>
            </div></form>
        </div>
       <?php
        if(isset($_POST['adcel']))
        { 
          $car=$_SESSION['cart'];
          $sqlu="select * from cart where cart_no=$car and v_id=$ve";
          $resu=mysql_query($sqlu,$con);
          $resun=mysql_num_rows($resu);
          if($resun==1)
          {
            ?>
                <script type="text/javascript">
                  alert("This is already in your cart");
                </script>
               <?php
          }
          else
          {
             $sqlt="insert into cart(cart_no,v_id) values('$car',$ve)";
          $rest=mysql_query($sqlt,$con);
          if(!$rest)
           die(mysql_error());
         ?>  <script type="text/javascript">
           window.location.assign("http://localhost/vebo/userpanel/production/generalvenue.php?vid=<?php echo $ve; ?>");
         </script>  <?php
          }
        }
        
       ?>
	    <div class="clearfix"></div>
    </div>
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
	 <!-- bootstrap-wysiwyg --> 
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
	<!-- bootstrap-daterangepicker -->
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
    <!-- /compose -->
  </body>
</html>