<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- FullCalendar -->
    <link href="vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
  </head>
  <?php
  
  include('connection.php');
  $sql="select * from bookingstatus where bflag=1";
  
  $res=mysql_query($sql,$con);
  while($row=mysql_fetch_assoc($res))
  {   
    }
  ?>
    <!-- page content -->
<div class="x_panel" style="background-color:">
              
    <div class="left_col col" role="main" style="background-color:white">
        <div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#5b5b62;" >
            
                <div class="x_content" style="background-color:white;color:#2e2e33;">
                   <div id='calendar' ></div>
                </div>
            
        </div>
        <div class="bs-example-popovers ">
            <div class="col-md-1">
                <a class="btn btn-dark" href="eventedit.php">
                <i class="fa fa-undo"></i> 
                </a>
                
    </div>
     <form method="post">
    <input type="date" class="form-control" style="display : none" id="xyz" name="descr" value="" onmouseout="eve(this.value);" />
    <div id="txtHint">
    
      <label name="evename" value=""></label>
      <label name="strtime" value=""></label>
      <label name="venu" value=""></label>
    </div>
    </form>
            
      </div>  
      
    </div>
 </div>   
    <!-- /page content -->

  
        <!-- footer content -->
       <!-- <footer style="background-color:#D5D5D7">
          <div class="pull-right" > VEBO USER PANEL BY <a href="https://">MESTOZYME</a>
          </div>
          <div class="clearfix"></div>
        </footer>-->
        <!-- /footer content -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
   <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
   
    <!-- FullCalendar -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/fullcalendar/dist/fullcalendar.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
     <script type="text/javascript">
      
     </script>
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
     $('#mybtn').click(function() {
    var moment = $('#calendar').fullCalendar('getDate');
    alert("The current date of the calendar is " + moment.format());
});
    
    </script>
    <script>

$('#calendar').fullCalendar({
    dayClick: function(date, jsEvent, view) {
      var a=date.format();
 document.getElementById('xyz').value=a;
     
        eve(a);   
       
        // change the day's background color just for fun
       

    }
});


    </script>
    <!-- /FullCalendar -->

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    <script>
function eve(str) {
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
        xmlhttp.open("GET","geteve.php?eve="+str,true);
        xmlhttp.send();
    
}
</script>
  </body>
</html>