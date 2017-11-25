<?php  
include('config.php'); 
$delete_id =mysqli_real_escape_string($connect,$_GET['del']);  
$delete_query="delete  from house WHERE house_id='$delete_id'";//delete query  
$run=$connect->query($delete_query);

if($run){
	
echo "<script>window.open('viewhouse.php?','_self')</script>"; 
}



?>

