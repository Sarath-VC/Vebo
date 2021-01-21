<html class="">
<head><script src="//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js"></script><script src="//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js"></script><script src="//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js"></script><meta charset="UTF-8"><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"><link rel="canonical" href="https://codepen.io/tylerberry/pen/bNxwJJ">
<link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
   
   include('connection.php');
   
  ?>

<style type="text/css" class="cp-pen-styles">/* Web Font */
* {
    font-family: 'Titillium Web', sans-serif; 
}
html {
    display: block;
}

/* Relative positioning*/
#image-map {
    position: relative;
    margin: 150px auto 20px auto;
}

/* Hide the original tooltips contents */
.pin {
    display: none;
}

/* Begin styling the tooltips and pins */
.tooltip-up, .tooltip-down {
    position: absolute;
    background: url(http://i.imgur.com/13rZbuk.png);
    width: 25px;
    height: 37px;
}

.tooltip-down {
    background-position: 0 -37px;
}

.tooltip {
    display: none;
    width: 200px;
    cursor: help;
    text-shadow: 0 1px 0 #fff;
    position: absolute;
    top: 10px;
    left: 50%;
    z-index: 999;
    margin-left: -115px;
    padding:15px;
    color: #222;
    border-radius: 5px;
    box-shadow: 0 3px 0 rgba(0,0,0,.7);
    background: #fff1d3;
    background: linear-gradient(top, #fff1d3, #ffdb90);         
}

.tooltip::after {
    content: '';
    position: absolute;
    top: -10px;
    left: 50%;
    margin-left: -10px;
    border-bottom: 10px solid #fff1d3;
    border-left: 10px solid transparent;
    border-right : 10px solid transparent;
}

.tooltip-down .tooltip {
    bottom: 12px;
    top: auto;
}

.tooltip-down .tooltip::after {
    bottom: -10px;
    top: auto;
    border-bottom: 0;
    border-top: 10px solid #ffdb90;
}

.tooltip h2 {
    font: bold 1.3em 'Trebuchet MS', Tahoma, Arial;
    margin: 0 0 10px;
}

.tooltip ul {
    margin: 0;
    padding: 0;
    list-style: none;
}</style></head><body>
<div id="image-map" style="width: 500px; height: 300px;">
   <img src="images/editmap.jpg" alt="Our Locations">  
    <?php 
                       $sql="select * from map where mflag=1";
                       $res=mysql_query($sql,$con);
                       while($row=mysql_fetch_assoc($res))
                       {
                        $v=$row['v_id'];
                        $sql2="select * from venue where v_id=$v";
                        $res2=mysql_query($sql2,$con);
                        $row2=mysql_fetch_assoc($res2);
                        $d=$row2['dept_id'];
                        $sql3="select dept_name from department where dept_id=$d";
                        $res3=mysql_query($sql3,$con);
                        $row3=mysql_fetch_assoc($res3);
                    ?>
  <div class="pin pin-up" data-xpos="<?php echo $row['x']; ?>" data-ypos="<?php echo $row['y']; ?>">  
    <h2><?php echo $row2['v_name']; ?></h2>     
    <ul>
      <li><strong><?php echo $row2['v_type']; ?>-<?php echo $row3['dept_name']; ?></strong></li>
      <li><img  src="data:image/jpeg; base64,<?php echo base64_encode($row2['v_image']); ?>"  alt="..." width="100" height="100"></li>
    </ul>
  </div>
  
  
  </div>


  <?php
                      }
                     ?> 
<script src="//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>$(document).ready(function(){

    // set the image-map width and height to match the img size
    $('#image-map').css({'width':$('#image-map img').width(),
                      'height':$('#image-map img').height()
    })
    
    //tooltip direction
    var tooltipDirection;
                 
    for (i=0; i<$(".pin").length; i++)
    {if (window.CP.shouldStopExecution(1)){break;}               
        // set tooltip direction type - up or down             
        if ($(".pin").eq(i).hasClass('pin-down')) {
            tooltipDirection = 'tooltip-down';
        } else {
            tooltipDirection = 'tooltip-up';
            }
    
        // append the tooltip
        $("#image-map").append("<div style='left:"+$(".pin").eq(i).data('xpos')+"px;top:"+$(".pin").eq(i).data('ypos')+"px' class='" + tooltipDirection +"'>\
                                            <div class='tooltip'>" + $(".pin").eq(i).html() + "</div>\
                                    </div>");
    }
window.CP.exitedLoop(1);
    
    
    // show/hide the tooltip
    $('.tooltip-up, .tooltip-down').mouseenter(function(){
                $(this).children('.tooltip').fadeIn(100);
            }).mouseleave(function(){
                $(this).children('.tooltip').fadeOut(100);
            })
});
//# sourceURL=pen.js
</script>
</body></html>