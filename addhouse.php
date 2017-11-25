<?php 
                       
     include('config.php');

//declare address variables
     $loc=$_POST['loc'];
     $street=$_POST['street'];
     $plot=$_POST['plot'];
//insert into users table
$sql=mysql_query("INSERT into house(location,street_name,plot_number) VALUES('$loc','$street','$plot')");
if($sql){
header("location:viewusers.php");
}
                           else {
echo "ERROR" . mysql_error();
}
                        ?>