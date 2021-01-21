<!DOCTYPE html>
<?php  include('connection.php');
 ?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>
    <title>Map Management|VEBO</title>

   <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="../vendors/cropper/dist/cropper.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <div class="header" id="home">
			<nav class="navbar navbar-default" Style="background-color:grey;">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                    <div class="navbar-collapse">
                    <!-- /.container-fluid -->
                    <h1><a class="navbar-brand" href="http://localhost/vebo/adminhome.php"><i class="glyphicon glyphicon-home col-lg-5"></i>VEBO<br /><span></span></a></h1>
                    </div>
                    <div class="clearfix"> </div></div>
                    </nav>             
					   </div>
					   <!--department adding session start -->
							
						</nav>	
						
					
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->

					
				<!-- /.container-fluid -->
				  
				<div class="clearfix"> </div>
			
			
<!--/script-->
		   <div class="clearfix"> </div>
</div>
<!-- Top Navigation -->
<div >
  <div class="navbar-collapse" style="background-color:#32302f" >
	<h2></h2>
    <p></p>
	</div>
</div>
<div >
	<div class="container" >
	<h2></h2>
    <p></p>
	</div>
</div>
<div >
	<div class="container" >
	<h2></h2>
    <p></p>
	</div>
</div>


  <body class="nav-md footer_fixed">
   
      
        

       
      

            <div class="row">
              
			  <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#e2e4ec;">
                <div class="x_panel">
                  <div class="x_title" style="background-color:#2e2e33; color:white; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif">
                    <h2><a href="http://localhost/vebo/mapmanage.php"><span class="glyphicon glyphicon-flag"></span> MAP MANAGEMENT </h2><div class="icons pull-right"><h2><a href="http://localhost/vebo/adminhome.php"><i class="glyphicon glyphicon-share-alt"> BACK</h2></i></a></div>
                    <div class="clearfix"></div>
                  </div>
			  <!-- image cropping -->
                <div class="container cropper">

<form action="" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-9">
                      <div class="img-container">
                        <img id="image" src="images/editmap.jpg" alt="Picture">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="docs-preview clearfix">
                        <div class="img-preview preview-lg"></div>
                        <div class="img-preview preview-md"></div>
                        <div class="img-preview preview-sm"></div>
                        <div class="img-preview preview-xs"></div>
                      </div>

                      <div class="docs-data">
                        <div class="input-group input-group-sm">
                          <label class="input-group-addon" for="dataX">X</label>
                          <input type="text" class="form-control" id="dataX" name="dataX" placeholder="x">
                          <span class="input-group-addon">px</span>
                        </div>
                        <div class="input-group input-group-sm">
                          <label class="input-group-addon" for="dataY">Y</label>
                          <input type="text" class="form-control" id="dataY" name="dataY" placeholder="y">
                          <span class="input-group-addon">px</span>
                        </div>
                        <div class="input-group input-group-sm">
                          <label class="input-group-addon" for="dataWidth">Width</label>
                          <input type="text" class="form-control" id="dataWidth" name="dataWidth" placeholder="width">
                          <span class="input-group-addon">px</span>
                        </div>
                        <div class="input-group input-group-sm">
                          <label class="input-group-addon" for="dataHeight">Height</label>
                          <input type="text" class="form-control" id="dataHeight" name="dataHeight" placeholder="height">
                          <span class="input-group-addon">px</span>
                        </div>
                        <div class="input-group input-group-sm">
                          <label class="input-group-addon" for="dataRotate">Rotate</label>
                          <input type="text" class="form-control" id="dataRotate"  placeholder="rotate">
                          <span class="input-group-addon">deg</span>
                        </div>
                        <div class="input-group input-group-sm">
                          <label class="input-group-addon" for="dataScaleX">ScaleX</label>
                          <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                        </div>
                        <div class="input-group input-group-sm">
                          <label class="input-group-addon" for="dataScaleY">ScaleY</label>
                          <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-9 docs-buttons">
                      <!-- <h3 class="page-header">Toolbar:</h3> -->
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                            <span class="fa fa-arrows"></span>
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                            <span class="fa fa-crop"></span>
                          </span>
                        </button>
                      </div>
                       <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
                            <span class="fa fa-search-plus"></span>
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
                            <span class="fa fa-search-minus"></span>
                          </span>
                        </button>
                      </div>

                      <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)">
                            <span class="fa fa-arrow-left"></span>
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)">
                            <span class="fa fa-arrow-right"></span>
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)">
                            <span class="fa fa-arrow-up"></span>
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)">
                            <span class="fa fa-arrow-down"></span>
                          </span>
                        </button>
                      </div>

                      <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
                            <span class="fa fa-rotate-left"></span>
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
                            <span class="fa fa-rotate-right"></span>
                          </span>
                        </button>
                      </div>

                      <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)">
                            <span class="fa fa-arrows-h"></span>
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleY&quot;, -1)">
                            <span class="fa fa-arrows-v"></span>
                          </span>
                        </button>
                      </div>

                      <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;crop&quot;)">
                            <span class="fa fa-check"></span>
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
                            <span class="fa fa-remove"></span>
                          </span>
                        </button>
                      </div>

                      <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
                            <span class="fa fa-lock"></span>
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
                            <span class="fa fa-unlock"></span>
                          </span>
                        </button>
                      </div>

                      <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
                            <span class="fa fa-refresh"></span>
                          </span>
                        </button>
                        <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                          <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                          <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                            <span class="fa fa-upload"></span>
                          </span>
                        </label>
                        <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
                            <span class="fa fa-power-off"></span>
                          </span>
                        </button>
                      </div>

                      <div class="btn-group btn-group-crop">
                        <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
                            Get Selected Canvas
                          </span>
                        </button>
                      </div>

                      <!-- Show the cropped image in modal -->
                      <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.png">Download</a>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.modal -->

                      <button type="button" class="btn btn-primary" data-method="getData" data-option data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
                          Get Data
                        </span>
                      </button>
                      <button type="button" class="btn btn-primary" data-method="setData" data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setData&quot;, data)">
                          Set Data
                        </span>
                      </button>
					   <input type="text" class="form-control" name="updtxt" id="putData" placeholder="Get data to here or set data with this value for updation">
				 <div class="box"> 
			<div class="form-group">
        <label class="control-label pull-left">Department</label>
          <div class="col-lg-4">
            <select class="form-control" name="adep" id="adep" onchange="showUser(this.value);" required>
              <option value="" label pattern="select"> Select </option>
                <?php 
                    $sqld="select * from department where dflag=1";
                    $resd=mysql_query($sqld,$con);
                    while($rowd=mysql_fetch_assoc($resd)){
                ?>
                      <option value="<?php echo $rowd['dept_id']; ?>"><?php echo $rowd['dept_name']; ?></option>
 
                <?php } ?>
            </select>
          </div>
          
      
          <label class="control-label pull-left">Venue</label>
            <div class="col-lg-4" id="txtHint">
              <select required class="form-control" name="avenue">
                  <option value="" required pattern="select"> select </option>
           
              </select>
            </div>
            <div class="col-lg-4"> </div>
                    <label class="control-label col-lg-1">Description</label>

                    <div class="col-lg-4">
                        <select class="form-control" name="descr" required>
                        <option value="" label pattern="select"> select </option>
                  <option   pattern="select">Basement</option>
                  <option   pattern="select">Ground Floor</option>
                  <option   pattern="select">First Floor</option>
                  <option   pattern="select">Second Floor</option>
                  <option   pattern="select">Third Floor</option>
                        
                  </select>
                    </div>
                    </div>
				</div>
                      
                     

                    </div><!-- /.docs-buttons -->

                    <div class="col-md-3 docs-toggles">
                      <!-- <h3 class="page-header">Toggles:</h3> -->
                      <div class="btn-group btn-group-justified" data-toggle="buttons">
                        <label class="btn btn-primary active">
                          <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
                            16:9
                          </span>
                        </label>
                        <label class="btn btn-primary">
                          <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
                            4:3
                          </span>
                        </label>
                        <label class="btn btn-primary">
                          <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
                            1:1
                          </span>
                        </label>
                        <label class="btn btn-primary">
                          <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
                            2:3
                          </span>
                        </label>
                        <label class="btn btn-primary">
                          <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
                            Free
                          </span>
                        </label>
                      </div>

                      <div class="btn-group btn-group-justified" data-toggle="buttons">
                        <label class="btn btn-primary active">
                          <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                          <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                            VM0
                          </span>
                        </label>
                        <label class="btn btn-primary">
                          <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                          <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                            VM1
                          </span>
                        </label>
                        <label class="btn btn-primary">
                          <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                          <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
                            VM2
                          </span>
                        </label>
                        <label class="btn btn-primary">
                          <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                          <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
                            VM3
                          </span>
                        </label>
                      </div>

                      <div class="dropdown dropup docs-options">
                        <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                          Toggle Options
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="responsive" checked>
                              responsive
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="restore" checked>
                              restore
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="checkCrossOrigin" checked>
                              checkCrossOrigin
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="checkOrientation" checked>
                              checkOrientation
                            </label>
                          </li>

                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="modal" checked>
                              modal
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="guides" checked>
                              guides
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="center" checked>
                              center
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="highlight" checked>
                              highlight
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="background" checked>
                              background
                            </label>
                          </li>

                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="autoCrop" checked>
                              autoCrop
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="movable" checked>
                              movable
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="rotatable" checked>
                              rotatable
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="scalable" checked>
                              scalable
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="zoomable" checked>
                              zoomable
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="zoomOnTouch" checked>
                              zoomOnTouch
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="zoomOnWheel" checked>
                              zoomOnWheel
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="cropBoxMovable" checked>
                              cropBoxMovable
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="cropBoxResizable" checked>
                              cropBoxResizable
                            </label>
                          </li>
                          <li role="presentation">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="toggleDragModeOnDblclick" checked>
                              toggleDragModeOnDblclick
                            </label>
                          </li>
                        </ul>
                      </div><!-- /.dropdown -->

                      <input type="submit" class="btn btn-default btn-block" name="btsav" value="SAVE" />
                      <input type="submit" class="btn btn-default btn-block" name="btcan" onclick="disca();"value="Cancel"/>
                    </div><!-- /.docs-toggles -->
                  </div>

                  </form>

                  <?php
               if(isset($_POST['btsav']))
               {
               $conam=addslashes(file_get_contents($_FILES['aimg']['tmp_name']));
                $sql="insert into map(x,y,width,height,v_id,dept_id,description,mflag)values('$_POST[dataX]','$_POST[dataY]','$_POST[dataWidth]','$_POST[dataHeight]','$_POST[avenue]','$_POST[adep]','$_POST[descr]',1)";
                $result=mysql_query($sql,$con);
                  //while($row=mysql_fetch_assoc($result))
                  if(!$result)
                 { die('Error'.mysql_error($con)); }
            else{
                ?>

<script type="text/javascript">alert("Successfully Inserted");</script>

               ?> <script>window.location.assign("http://localhost/vebo/userpanel/production/map.php");</script>  <?php
            }
         }




          mysql_close($con);     

            ?>  
        <script> function disca(){ window.location.assign("http://localhost/vebo/adminhome.php"); }</script>  
                   
                

                </div>
                <!-- /image cropping -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
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
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
   
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Knob -->
    <script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Cropper -->
    <script src="../vendors/cropper/dist/cropper.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script>
function showUser(str) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getdata.php?a="+str,true);
        xmlhttp.send();
    
}
</script>




    <script>
      $(document).ready(function() {
        $('#single_cal1').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_1"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_2"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
          singleDatePicker: true,
          singleClasses: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>

    <script>
      $(document).ready(function() {
        $('#reservation').daterangepicker(null, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });

        $('#reservation-time').daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
            format: 'MM/DD/YYYY h:mm A'
          }
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- Ion.RangeSlider -->
    <script>
      $(document).ready(function() {
        $("#range_27").ionRangeSlider({
          type: "double",
          min: 1000000,
          max: 2000000,
          grid: true,
          force_edges: true
        });
        $("#range").ionRangeSlider({
          hide_min_max: true,
          keyboard: true,
          min: 0,
          max: 5000,
          from: 1000,
          to: 4000,
          type: 'double',
          step: 1,
          prefix: "$",
          grid: true
        });
        $("#range_25").ionRangeSlider({
          type: "double",
          min: 1000000,
          max: 2000000,
          grid: true
        });
        $("#range_26").ionRangeSlider({
          type: "double",
          min: 0,
          max: 10000,
          step: 500,
          grid: true,
          grid_snap: true
        });
        $("#range_31").ionRangeSlider({
          type: "double",
          min: 0,
          max: 100,
          from: 30,
          to: 70,
          from_fixed: true
        });
        $(".range_min_max").ionRangeSlider({
          type: "double",
          min: 0,
          max: 100,
          from: 30,
          to: 70,
          max_interval: 50
        });
        $(".range_time24").ionRangeSlider({
          min: +moment().subtract(12, "hours").format("X"),
          max: +moment().format("X"),
          from: +moment().subtract(6, "hours").format("X"),
          grid: true,
          force_edges: true,
          prettify: function(num) {
            var m = moment(num, "X");
            return m.format("Do MMMM, HH:mm");
          }
        });
      });
    </script>
    <!-- /Ion.RangeSlider -->

    <!-- jquery.inputmask -->
    <script>
      $(document).ready(function() {
        $(":input").inputmask();
      });
    </script>
    <!-- /jquery.inputmask -->

    <!-- jQuery Knob -->
    <script>
      $(function($) {

        $(".knob").knob({
          change: function(value) {
            //console.log("change : " + value);
          },
          release: function(value) {
            //console.log(this.$.attr('value'));
            console.log("release : " + value);
          },
          cancel: function() {
            console.log("cancel : ", this);
          },
          /*format : function (value) {
           return value + '%';
           },*/
          draw: function() {

            // "tron" case
            if (this.$.data('skin') == 'tron') {

              this.cursorExt = 0.3;

              var a = this.arc(this.cv) // Arc
                ,
                pa // Previous arc
                , r = 1;

              this.g.lineWidth = this.lineWidth;

              if (this.o.displayPrevious) {
                pa = this.arc(this.v);
                this.g.beginPath();
                this.g.strokeStyle = this.pColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                this.g.stroke();
              }

              this.g.beginPath();
              this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
              this.g.stroke();

              this.g.lineWidth = 2;
              this.g.beginPath();
              this.g.strokeStyle = this.o.fgColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
              this.g.stroke();

              return false;
            }
          }
        });

        // Example of infinite knob, iPod click wheel
        var v, up = 0,
          down = 0,
          i = 0,
          $idir = $("div.idir"),
          $ival = $("div.ival"),
          incr = function() {
            i++;
            $idir.show().html("+").fadeOut();
            $ival.html(i);
          },
          decr = function() {
            i--;
            $idir.show().html("-").fadeOut();
            $ival.html(i);
          };
        $("input.infinite").knob({
          min: 0,
          max: 20,
          stopper: false,
          change: function() {
            if (v > this.cv) {
              if (up) {
                decr();
                up = 0;
              } else {
                up = 1;
                down = 0;
              }
            } else {
              if (v < this.cv) {
                if (down) {
                  incr();
                  down = 0;
                } else {
                  down = 1;
                  up = 0;
                }
              }
            }
            v = this.cv;
          }
        });
      });
    </script>
    <!-- /jQuery Knob -->

    <!-- Cropper -->
    <script>
      $(document).ready(function() {
        var $image = $('#image');
        var $download = $('#download');
        var $dataX = $('#dataX');
        var $dataY = $('#dataY');
        var $dataHeight = $('#dataHeight');
        var $dataWidth = $('#dataWidth');
        var $dataRotate = $('#dataRotate');
        var $dataScaleX = $('#dataScaleX');
        var $dataScaleY = $('#dataScaleY');
        var options = {
              aspectRatio: 16 / 9,
              preview: '.img-preview',
              crop: function (e) {
                $dataX.val(Math.round(e.x));
                $dataY.val(Math.round(e.y));
                $dataHeight.val(Math.round(e.height));
                $dataWidth.val(Math.round(e.width));
                $dataRotate.val(e.rotate);
                $dataScaleX.val(e.scaleX);
                $dataScaleY.val(e.scaleY);
              }
            };


        // Tooltip
        $('[data-toggle="tooltip"]').tooltip();


        // Cropper
        $image.on({
          'build.cropper': function (e) {
            console.log(e.type);
          },
          'built.cropper': function (e) {
            console.log(e.type);
          },
          'cropstart.cropper': function (e) {
            console.log(e.type, e.action);
          },
          'cropmove.cropper': function (e) {
            console.log(e.type, e.action);
          },
          'cropend.cropper': function (e) {
            console.log(e.type, e.action);
          },
          'crop.cropper': function (e) {
            console.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);
          },
          'zoom.cropper': function (e) {
            console.log(e.type, e.ratio);
          }
        }).cropper(options);


        // Buttons
        if (!$.isFunction(document.createElement('canvas').getContext)) {
          $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
        }

        if (typeof document.createElement('cropper').style.transition === 'undefined') {
          $('button[data-method="rotate"]').prop('disabled', true);
          $('button[data-method="scale"]').prop('disabled', true);
        }


        // Download
        if (typeof $download[0].download === 'undefined') {
          $download.addClass('disabled');
        }


        // Options
        $('.docs-toggles').on('change', 'input', function () {
          var $this = $(this);
          var name = $this.attr('name');
          var type = $this.prop('type');
          var cropBoxData;
          var canvasData;

          if (!$image.data('cropper')) {
            return;
          }

          if (type === 'checkbox') {
            options[name] = $this.prop('checked');
            cropBoxData = $image.cropper('getCropBoxData');
            canvasData = $image.cropper('getCanvasData');

            options.built = function () {
              $image.cropper('setCropBoxData', cropBoxData);
              $image.cropper('setCanvasData', canvasData);
            };
          } else if (type === 'radio') {
            options[name] = $this.val();
          }

          $image.cropper('destroy').cropper(options);
        });


        // Methods
        $('.docs-buttons').on('click', '[data-method]', function () {
          var $this = $(this);
          var data = $this.data();
          var $target;
          var result;

          if ($this.prop('disabled') || $this.hasClass('disabled')) {
            return;
          }

          if ($image.data('cropper') && data.method) {
            data = $.extend({}, data); // Clone a new one

            if (typeof data.target !== 'undefined') {
              $target = $(data.target);

              if (typeof data.option === 'undefined') {
                try {
                  data.option = JSON.parse($target.val());
                } catch (e) {
                  console.log(e.message);
                }
              }
            }

            result = $image.cropper(data.method, data.option, data.secondOption);

            switch (data.method) {
              case 'scaleX':
              case 'scaleY':
                $(this).data('option', -data.option);
                break;

              case 'getCroppedCanvas':
                if (result) {

                  // Bootstrap's Modal
                  $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

                  if (!$download.hasClass('disabled')) {
                    $download.attr('href', result.toDataURL());
                  }
                }

                break;
            }

            if ($.isPlainObject(result) && $target) {
              try {
                $target.val(JSON.stringify(result));
              } catch (e) {
                console.log(e.message);
              }
            }

          }
        });

        // Keyboard
        $(document.body).on('keydown', function (e) {
          if (!$image.data('cropper') || this.scrollTop > 300) {
            return;
          }

          switch (e.which) {
            case 37:
              e.preventDefault();
              $image.cropper('move', -1, 0);
              break;

            case 38:
              e.preventDefault();
              $image.cropper('move', 0, -1);
              break;

            case 39:
              e.preventDefault();
              $image.cropper('move', 1, 0);
              break;

            case 40:
              e.preventDefault();
              $image.cropper('move', 0, 1);
              break;
          }
        });

        // Import image
        var $inputImage = $('#inputImage');
        var URL = window.URL || window.webkitURL;
        var blobURL;

        if (URL) {
          $inputImage.change(function () {
            var files = this.files;
            var file;

            if (!$image.data('cropper')) {
              return;
            }

            if (files && files.length) {
              file = files[0];

              if (/^image\/\w+$/.test(file.type)) {
                blobURL = URL.createObjectURL(file);
                $image.one('built.cropper', function () {

                  // Revoke when load complete
                  URL.revokeObjectURL(blobURL);
                }).cropper('reset').cropper('replace', blobURL);
                $inputImage.val('');
              } else {
                window.alert('Please choose an image file.');
              }
            }
          });
        } else {
          $inputImage.prop('disabled', true).parent().addClass('disabled');
        }
      });
    </script>
    <!-- /Cropper -->
  </body>
</html>

              