<?php 
session_start();
session_destroy();

echo "<script>window.open
('index.html','_self',width=300,height=300)</script>";
//header("location: index.html");
?>