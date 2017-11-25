<!docttype html>
<html>

<head>
<title></title>

</head>

<body>
<table cellpadding="20px" align="Center">

<thead>

<tr>
<th>Street Name</th>
<th>plot Number</th>
<th>plot Number</th>
<th>plot Number</th>

</tr>

<thead>
<?php
include("config.php");

$view="select * from  house";

$view_user=$connect->query($view);

while($row=$view_user->fetch_assoc()){
	
	$street=$row['street_name'];
	$plot= $row['plot_number'];

?>

 <td><?php echo $street;?></td>
<td><?php echo $plot;?></td>


 <?php } ?>  
</table>

</body>

</html>