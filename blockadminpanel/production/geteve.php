<?php
session_start();
include('connection.php');
if(!isset($_SESSION['block']))
   {
    header("Location:login.php");
}
if(isset($_GET['eve']))
{
    $z=$_GET['eve'];
 $bdate=mysql_query("select * from bookingstatus where '$z'>=start_date and '$z'<=finish_date and b_status!='Cancelled'");

 
 while($rowb=mysql_fetch_array($bdate)){
  $ce=$rowb['cell_id'];
  $cel=mysql_query("select * from cell where cell_id='$ce' and a_id=0");
  $resn=mysql_num_rows(mysql_query("select * from cell where cell_id='$ce' and a_id=0"));

  ?><table><tr><td>Event Name:</td><td>&nbsp&nbsp</td><td><label name="evename" value=""><?php echo $rowb['event_name']; ?></label></td></tr>
   <tr><td>Time: </td><td>&nbsp&nbsp</td><td><label name="strtime" value=""><?php echo $rowb['start_time']; ?> TO <?php echo $rowb['finish_time']; ?></label></td></tr>
     <tr><td>Venue: </td><td>&nbsp&nbsp</td><td><label name="venu" value="">
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
                    ?></label></td></tr></table> <?php
 }                   
                   
}
?>