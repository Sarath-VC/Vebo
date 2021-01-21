<?php
session_start();
include('connection.php');

if(isset($_GET['eve']))
{
    $z=$_GET['eve'];
 $bdate=mysql_query("select * from bookingstatus where '$z'>=start_date and '$z'<=finish_date and b_status!='Cancelled'");

 
 while($rowb=mysql_fetch_array($bdate)){
  $ce=$rowb['cell_id'];
  $cel=mysql_query("select * from cell where cell_id='$ce' and a_id=0");
  $resn=mysql_num_rows(mysql_query("select * from cell where cell_id='$ce' and a_id=0"));

  ?><table><tr><td><B>Event Name:</B></td><td>&nbsp&nbsp</td><td><label name="evename" value=""><b><?php echo $rowb['event_name']; ?></b></label></td></tr>
   <tr><td><B>Time: </B></td><td>&nbsp&nbsp</td><td><label name="strtime" value=""><B><?php echo $rowb['start_time']; ?> TO <?php echo $rowb['finish_time']; ?></B></label></td></tr>
     <tr><td><b>Venue:</b> </td><td>&nbsp&nbsp</td><td><label name="venu" value=""><B>
   <?php    $i=1; 
                    while($rowc=mysql_fetch_array($cel))
                    {
                      $ve=$rowc['v_id'];
                      $venn=mysql_query("select * from venue where v_id=$ve",$con);
                      $vn=mysql_fetch_array($venn);
                    echo $vn['v_name']; 
                     if($i<$resn)
                     {
                      echo ", ";
                     }
                     $i++;
                    }
                    ?></B></label></td></tr></table> <?php
 }                   
                   
}
?>