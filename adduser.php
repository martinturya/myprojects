<?php 
$server="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="rental"; // Database name
$tbl_name="users"; // Table name

// Connect to server and select database.
mysql_connect("$server", "$username", "$password")or die("cannot connect to the server");
mysql_select_db("$db_name")or die("cannot select to the database");// Get values from form


$first=$_POST['fn'];
$last=$_POST['ln'];
$use=$_POST['st'];
$username=$_POST['sn'];
$pass=$_POST['pw'];
$sql="INSERT INTO $tbl_name(first_name, lastname,user_type,user_name,password)VALUES('$first', '$last','$use','$username','$pass')";

$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){
header("location: home.html");
}
else {
echo "ERROR" . mysql_error();
}
?>