<?php
session_start();
include('connection.php');
if(!isset($_SESSION['admin']))
   {
    header("Location:login.php");
}
if(isset($_GET['a']))
{
    $z=$_GET['a'];
 $aq=mysql_query("select * from department where dept_id='$z'");

 $sa=mysql_query("select * from venue where dept_id='$z' and vflag!=0 and v_id!=1");
 $b=mysql_fetch_array($aq);
?>
                   <select class="form-control" required name="avenue">
                   <option value="" required pattern="select"> select </option>
                    <?php 
                    while($sb=mysql_fetch_array($sa))
                    {
                    ?>  
                        <option value="<?php echo $sb['v_id']; ?>"><?php echo $sb['v_name']; ?></option>
                    <?php
                    }
                    ?>
                    </select>
               
               
<?php
}
?>