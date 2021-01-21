<?php
 include('connection.php');
 include('updcell.php');
 $sql="select * from bookingstatus where bflag=1";
 $res=mysql_query($sql,$con);
 while ($row=mysql_fetch_assoc($res)) {
 	$c=$row['cell_id'];
	$sqlv="select * from cell where cell_id=$c";
	$resv=mysql_query($sqlv,$con);
	   		$book=0;
   		 	$cancel=0;
            $completed=0;
   		 	$process=0;
 	while($rowv=mysql_fetch_assoc($resv)){   
    	$resn=mysql_num_rows($resv);

   		 	if($rowv['cell_status']=='Booked')
   		 		$book++;
   		 	elseif($rowv['cell_status']=='Cancelled')
   		 		$cancel++;
            elseif($rowv['cell_status']=='Completed')
               $completed++;
   		 	else $process++;

   		   		 if($book==$resn)
   		 {
   		 	$sqlu1="update bookingstatus set b_status='Booked' where cell_id=$c";
   		 	mysql_query($sqlu1);
   		 }
   		 elseif($cancel==$resn)
   		 {
   		 	$sqlu1="update bookingstatus set b_status='Cancelled' where cell_id=$c";
   		 	mysql_query($sqlu1);
   		 }
          elseif($completed==$resn)
          {
            $sqlu1="update bookingstatus set b_status='Completed' where cell_id=$c";
            mysql_query($sqlu1);
          }
   		 else
   		 	{
   		 	$sqlu1="update bookingstatus set b_status='Processing' where cell_id=$c";
   		 	mysql_query($sqlu1);
   		 }
   	
	}
 }



?>