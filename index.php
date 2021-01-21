<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>
	<title>VEBO</title>

	<!-- Load fonts -->
	<link href="http://fonts.googleapis.com/css?" family="Montserrat" rel="stylesheet" type="text/css"/>
	<link href="http://fonts.googleapis.com/css?"
	family="Lora" rel="stylesheet" type="text/css" />

	<!-- Load css styles -->
	<link rel="stylesheet" type="text/css" href="intro/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="intro/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="intro/css/style.css" />
<!--calendar part-->
    <link href="intro/cam/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="intro/cam/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <!--/calendar part-->
	
	<!--lattitude part-->	
    <link href="intro/cam/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="intro/cam/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="intro/cam/cropper/map/cropper.min.css" rel="stylesheet">
	<!--/lattitude part-->
	
</head>
<body>
	<div class="jumbotron home home-fullscreen" id="home">
		<div class="mask"></div>
		<a href="http://localhost/vebo/" class="logo">
			<img src="icons/logo3.png" alt="logo">
		</a>
		<a href="" class="menu-toggle" id="nav-expander"><i class="fa fa-bars"></i></a>
		<!-- Offsite navigation -->
		<nav class="menu">
			<a href="#" class="close"><i class="fa fa-close"></i></a>
			<h3>Menu</h3>
			<ul class="nav">
				<li><a data-scroll href="#home">HOME</a></li>
                <li><a data-scroll href="#links">LINKS</a></li>
                <li><a data-scroll href="#events">EVENTS</a></li>
                <li><a data-scroll href="#location" >LOCATION</a></li>
                <li><a data-scroll href="#contact">CONTACT</a></li>
			</ul>
		</nav>
		<div class="container">
			<div class="header-info">
				<h1>VEBO</h1>
				<p>Official Venue,Amenity request management website of COLLEGE OF ENGINEERING, VADAKARA .
				</p>
				<a href="login.php" class="btn btn-primary">Get in Touch</a>
			</div>
		</div>
	</div>
	<!--link section start -->
	<section id="links">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="service-item">
						<div class="icon"><a href="http://cev.etlab.in/user/login"><i class="fa fa-diamond"></i></a></div>
						<h3>LOGIN TO et-lab</h3>
						<p>et-lab proveds you the best student management system of COLLEGE OF ENGINEERING, VADAKARA .
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<div class="icon"><a href="http://cev.ac.in/en/"><i class="fa fa-gear"></i></a></div>
						<h3>LOGIN TO CMS</h3>
						<p>Hungry grab your food using our best canteen management system.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<div class="icon"><a href="http://cev.ac.in/en/"><i class="fa fa-life-ring" > </i></a></div>
						<h3>LOGIN TO HMS</h3>
						<p>Pay you mess bills,Renew your hostel rooms @ our Hostel mangement system.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->
	<!-- Portfolio section start -->
	<!--<section id="portfolio" class="white"></section> -->
	<!-- Portfolio section end -->
	


	<!--lattitude section begins -->
	<section id="events">
	    <div class="container">
		<div class="row">
		    <div class="y_panel">
	            <div class="col-md-6 col-sm-6 col-xs-6" style="background-color:#e2e4ec;">
			       
				    <h2 align="center">LATTITUDE</h2>
			        
			       <iframe src="mp.php"  style="width : 100%; height:550px"></iframe>
                </div>
            </div>
		   	<!--calendar section begins -->
		    <div class="col-md-6">
	     	<div class="container">
		    
           
                <div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#e2e4ec;" >
			
				<h2 align="center">CALENDAR EVENTS</h2>
			   
                    <iframe src="eventedit.php" style="width : 100%; height:550px"></iframe>
                </div>
				
              
    
                      <!-- calendar popup the details end here -->
     	</div>
	</div>
	<!--/calendar section end -->
	    </div>
		</div>
	</section>
	<!--lattitude section begins -->

	<section id="location">
		<div class="container">
		<header>
				<h2>WE ARE HERE</h2>
			</header>
			<div class="map-canvas">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.823977262567!2d75.64856970795036!3d11.564473209998027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba6865b9d9a0f0b%3A0x358dba59247ac6b5!2sCollege+of+Engineering%2C+Vadakara!5e0!3m2!1sen!2sin!4v1490521747481" class="map-canvas"   frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
				<!--<section id="portfolio1" class="white"></section> -->
	    </div>
	</section>

	<!-- Contact section start -->
	<section id="contact">
		<div class="container">
		<header>
				<h2>FEEDBACK | CONTACT </h2>
			</header>
			<div class="row">
				<div class="col-md-8">
					<form class="row" action="" method="post">
						
						<div class="form-group col-md-6">
							<input type="email" name="mail" required pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Your Email" class="form-control" />
						</div>
						<div class="form-group col-md-12">
							<input  type="text" name="subject" required placeholder="Subject" class="form-control" />
						</div>
						<div class="form-group col-md-12">
							<textarea required  class="form-control" rows="10" name="message" placeholder="Message"></textarea>
						</div>
						<div class="form-group col-md-12">
							<button class="btn btn-lg btn-primary" type="submit" name="sendbtn">Send</button>
						</div>
					</form>
					<?php
					  if(isset($_POST['sendbtn']))
					  {
                      include('connection.php');
                      $subject = $_POST['subject'];
                        $txt = $_POST['message'];
                         $headers = $_POST['mail'];
                            $sql="insert into feedback(email,subject,content,fflag) values('$headers','$subject','$txt',1)";
                            $res1=mysql_query($sql,$con);
                         if($res1)
                {echo "<script>alert('Thank you for your feedback');</script>";}
                           mysql_close();
                       }
                            ?>
				</div>
				<div class="col-md-3 col-md-offset-1">
					<address>
						<span>Our Address</span>
						<p>
							COLLEGE OF ENGINEERING,VADAKARA <br>
							MANDARATHUR  PO  <br>VADAKARA<br>  KOZHIKODE<br>KERALA­673105<br>
							INDIA
						</p>
					</address>
					<address>
						<span>Email</span>
						<p>cevmca2015@gmail.com</p>
					</address>
					<address>
						<span>Phone</span>
						<p>+91-496-2537225<br>+91-496-2536125<br>+91-496-2537345</p>
					</address>
				</div>
			</div>
		</div>
		
	</section>
	<!-- Contact section end -->
	<!-- Footer start -->
	<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 MESTOZYME. All Rights Reserved | Design by MESTOZYME </p>
</div>	
<!--copy rights end here-->
     <!-- Footer end  -->
      <!-- smooth scrolling -->
<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
										
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	
	</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span><img src="../vebo/intro/img/scroll.png" width="32" height="32" alt=""/></a>
<!-- //smooth scrolling -->


	<!-- Load jQuery -->
	<script type="text/javascript" src="intro/js/jquery-1.11.2.min.js"></script>

	<!-- Load Booststrap -->
	<script type="text/javascript" src="intro/js/bootstrap.js"></script>

	<script type="text/javascript" src="intro/js/smooth-scroll.js"></script>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- Load custom js for theme -->
	<script type="text/javascript" src="intro/js/app.js"></script>
	<!--lattitude part-->
       <script src="intro/cam/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
       <script src="intro/cam/cropper/map/cropper.min.js"></script>
	<!--/lattitude part-->
	
    <!-- FullCalendar -->
    <script src="intro/cam/moment/min/moment.min.js"></script>
    <script src="intro/cam/fullcalendar/dist/fullcalendar.min.js"></script>

    <!-- FullCalendar -->
    <script>
      $(window).load(function() {
        var date = new Date(),
            d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear(),
            started,
            categoryClass;

        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            $('#fc_create').click();

            started = start;
            ended = end;

            $(".antosubmit").on("click", function() {
              var title = $("#title").val();
              if (end) {
                ended = end;
              }

              categoryClass = $("#event_type").val();

              if (title) {
                calendar.fullCalendar('renderEvent', {
                    title: title,
                    start: started,
                    end: end,
                    allDay: allDay
                  },
                  true // make the event "stick"
                );
              }

              $('#title').val('');

              calendar.fullCalendar('unselect');

              $('.antoclose').click();

              return false;
            });
          },
          eventClick: function(calEvent, jsEvent, view) {
            $('#fc_edit').click();
            $('#title2').val(calEvent.title);

            categoryClass = $("#event_type").val();

            $(".antosubmit2").on("click", function() {
              calEvent.title = $("#title2").val();

              calendar.fullCalendar('updateEvent', calEvent);
              $('.antoclose2').click();
            });

            calendar.fullCalendar('unselect');
          },
          editable: true,
          
        });
      });
    </script>
    <!-- /FullCalendar -->
   
	<!-- Cropper -->
    <script>
      $(document).ready(function() {
        var $image = $('#image');
        
        
       
        var options = {
              aspectRatio: 16 / 9,
              preview: '.img-preview',
              
            };


        // Tooltip
        $('[data-toggle="tooltip"]').tooltip();


        // Cropper
        $image.on({
          
          
          
          'zoom.cropper': function (e) {
            console.log(e.ratio);
          }
        }).cropper(options);
		


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

