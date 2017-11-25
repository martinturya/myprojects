
<?php

$DBhost = "localhost";
$DBuser = "root";
$DBpass = "";
$DBname = "rental";

$connect = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

if ($connect->connect_errno) {
die("ERROR : -> ".$connect->connect_error);
}
?>