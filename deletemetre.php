<?php  
/** 
 * Created by bills team. 
 * User: bills admin 
 * Date: 11/06/2015 
 * Time: 11:55 AM 
 */  
$server="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="bills_system"; // Database name
$tbl_name="metre"; // Table name

// Connect to server and select database.
$dbcon=mysql_connect("$server", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB"); 

$delete_No=$_GET['del'];  
$delete_query="delete  from metre WHERE metre_No='$delete_No'";//delete query  
$run=mysql_query($delete_query,$dbcon);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('selectallmetres.php?','_self')</script>"; 
//header("location: selectallmetres.php");	
}
else{
echo 'can not delete'. mysql_error();}   

mysql_close();

?>
