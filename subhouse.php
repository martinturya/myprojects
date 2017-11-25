<?php
include('config.php');
$lock=$_POST['location'];
$street=$_POST['street'];
$plot=$_POST['plot'];
$sql="INSERT INTO house(location,street_name,plot_number)VALUES('$lock', '$street','$plot')";

$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){
header("location:home.html");
}
else {
echo "ERROR" . mysql_error();
}
?>