<?php
session_start();
//$_SESSION['username']="username";
include("config.php");

// username and password sent from form
$username=$_POST['user_name'];
$password=$_POST['password'];


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM users WHERE user_name='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$rows=mysql_fetch_array($result);

// If result matched $username and $password, table row must be 1 row

if($rows['user_type']=='administrator'){
session_register("user_name");
session_register("password");
header("location: home.html");
$_SESSION['user_name']=$username;
}

elseif($rows['user_type']=='member'){
session_register("user_name");
session_register("password");
header("location: home.html");
}

elseif($rows['user_type']=='others'){
session_register("user_name");
session_register("password");
header("location: home.html");
}
else{
/*echo "<script>alert('Wrong Username or Password')</script>";*/
echo "<script>window.open
('index.html','_self',width=300,height=300)</script>";
}

?>