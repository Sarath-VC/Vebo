<?php
      include('connection.php');
      $map=$_GET["mid"];             
                            $sql="update map set mflag=0 where map_id=$map";
                            $result=mysql_query($sql,$con);
                            if(!$result)
                                { 
                                    die('Error'.mysql_error($con)); }
                            else{
                ?>
                                    <script type="text/javascript">alert("Successfully Deleted");</script>
                                    <script>window.location.assign("http://localhost/vebo/mapmanage.php");</script><?php
                                }
                                mysql_close();
         
?>