<?php  
include('config.php'); 

$delete_id=$_GET['del'];  
$delete_query="delete  from users WHERE users_id='$delete_id'";//delete query  
$run=mysql_query($delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('viewusers.php?','_self')</script>";  
}   

mysql_close();

?>
