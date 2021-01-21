<?php 
include('connection.php');
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d h:i:s', time());
$dateval1=explode(' ',$date);
$dated=$dateval1[0];
$timed=$dateval1[1];
$sqlb="select * from bookingstatus where '$dated'>start_date and '$dated'>finish_date";
$resb=mysql_query($sqlb,$con);
$resn=mysql_num_rows($resb);
while($rowb=mysql_fetch_assoc($resb)){
	$ce=$rowb['cell_id'];
	$sqlce="select * from cell where cell_id=$ce";
	$resce=mysql_query($sqlce,$con);
	while($rowce=mysql_fetch_assoc($resce)){
		if($rowce['cell_status']=='Booked')
	    {
	    	$sqlceu="update cell set cell_status='Completed' where cell_id=$ce";
   		 	mysql_query($sqlceu);
	    }
	    elseif(($rowce['cell_status']=='Pending')||($rowce['cell_status']=='Requested'))
	    {
	    	$sqlceu="update cell set cell_status='Cancelled' where cell_id=$ce";
   		 	mysql_query($sqlceu);
	    }
	}
}
?>
