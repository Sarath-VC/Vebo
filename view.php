<html>
 <link rel="shortcut icon" href="icons/iconv.png"/>
  
  <link rel="bookmark" href="icons/vebo.png"/>
<title>User Mangement Form|VEBO</title>
	<body>


	 </tbody>
		</table>
	-->
	<?php
	
	$con=mysql_connect("localhost","root","");
	if (!$con)
  {
  die('Could not connect: '.mysql_error());
  }
 
mysql_select_db('vebo',$con);
	$sql="SELECT * FROM login WHERE user_id !=1";
	
	$res=mysql_query($sql,$con);
	while($row=mysql_fetch_assoc($res))
	{
		echo "<tr><td>".$row['user_id']."</td><td>".$row['user_name']."</td><td>".$row['password']."</td><td>";
		switch($row['user_type'])
		{
			case "BA" :echo "BLOCK ADMIN</td><td>"; break;
			case "FAC" :echo "FACULTY</td><td>"; break;
			case "EC" :echo "EXAM CONTROLLER</td><td>"; break;
			case "CH" :echo "CHAIRMAN</td><td>"; break;
			case "AS" :echo "ASSOCIATION SECRETARY</td><td>"; break;
			case "CR" :echo "CLASS REPRESENTIVE</td><td>"; break;
		}
		if($row['user_type']=="BA"||$row['user_type']=="FAC"||$row['user_type']=="EC")
		{
		   $u=$row['user_id'];
			$sql1="SELECT * FROM executive where user_id=$u";
			$res1=mysql_query($sql1,$con);
			$row1=mysql_fetch_assoc($res1);
			do{
					$s=$row1['dept_id'];
					$sql2="SELECT dept_name FROM department WHERE dept_id=$s";
					$res2=mysql_query($sql2,$con);
				    $row2=mysql_fetch_assoc($res2);
	      			do
		  				{
							echo $row2['dept_name'];
							
		  				}while($row2=mysql_fetch_assoc($res2)&&mysql_num_rows($res2)==1);
					echo "</td><td>".$row1['exe_email']."</td><td>".$row1['exe_contact']."</td><td>edit</td></tr>";
				}while($row1=mysql_fetch_assoc($res1)&&mysql_num_rows($res1)==1);		
		}
		elseif($row['user_type']=="CH"||$row['user_type']=="CR"||$row['user_type']=="AS")
		{    
			$u=$row['user_id'];
			$sql1="SELECT * FROM student where user_id=$u";
	  		$res1=mysql_query($sql1,$con);
			$row1=mysql_fetch_assoc($res1);
			
			do
				{
					$s=$row1['dept_id'];
					$sql2="SELECT dept_name FROM department WHERE dept_id=$s";
			
			$res2=mysql_query($sql2,$con);
					$row2=mysql_fetch_assoc($res2);
					do{
							echo $row2['dept_name'];
		  				}while($row2=mysql_fetch_assoc($res2)&&mysql_num_rows($res2)==1);
					echo "</td><td>".$row1['stud_email']."</td><td>".$row1['stud_contact']."</td><td>edit</td></tr>";
				}while($row1=mysql_fetch_assoc($res1)&&mysql_num_rows($res1)==1);
		}
	
		
		
	}
	?>