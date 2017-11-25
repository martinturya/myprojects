<?php  
include('config.php'); 

$delete_id= mysqli_real_escape_string($connect,$_GET['del']);  
$delete_query="delete  from tenant WHERE tenant_ID='$delete_id'";//delete query  
$run=$connect->query($delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('viewtenant.php')</script>";  
}   

echo "Not deleted at all";

mysql_close();

?>
