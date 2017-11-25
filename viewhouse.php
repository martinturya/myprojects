<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-9">
    <title>Rental management system</title>
	<link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-theme.min.css">
    <script src="jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
          if ($.browser.msie && $.browser.version.substr(0,1)<7)
          {
			$('li').has('ul').mouseover(function(){
				$(this).children('ul').show();
				}).mouseout(function(){
				$(this).children('ul').hide();
				})
          }
        });        
    </script>

	<link rel="stylesheet" type="text/css"  href="bill1.css" media="screen">
                  <link rel="STYLESHEET" type="text/css" href="fg_membersite.css" />

<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
  }
  .tip{
  	float: left;
  	color: white;
  	font-size: 1em;
  	font-weight: bold;
  	margin:px;
  }
  #tabhead{
  background-color:blue;
  color:black;
  
  }
 
  #rad{
  background-color:yellow;
  color:black;
  }
  </style>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
  }
  .tip{
  	float: left;
  	color: white;
  	font-size: 1em;
  	font-weight: bold;
  	margin:px;
  }
  #house{
  background-color:white;
  color:green;
  font-size:1.1em;
  text-align:center;
  
  }
  </style>
</head>
<body>

<script type="text/javascript">

function confirmDelete(){
var agree = confirm("Are you sure you want to delete this Record??");
  if(agree == true){
    return true
}
else{
return false;
}
}


function comfirmEdit(){
var agree=confirm("Are you sure you want edit this record");
    if(agree==true){
    return true;
    }
    else{
    return false;
    }
}


(function(){
var bsa = document.createElement('script');
 bsa.async = true;
 bsa.src = 'http://www.red-team-design.com/js/adpacks-demo.js';
(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>


<div id="border-top" class="h_blue">
    <span class="tip"><img class='img' src="flags.gif" width="50px">
	Rental management system
	</span>
</div>

<div id="content-box">    
<ul id="menu">
	<li><a href="home.html">Home</a></li>
	
	<li>
		<a href="#"> Register</a>	
    <ul>  
	      <li><a href="#">Regiter all</a></li>
          <li>
    <!-- Trigger the modal with a button -->
  <a href="#" data-toggle="modal" data-target="#myModal"><img src="icon_plus.png" height=10px>ADD HOUSE&plus;</a>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Add HOUSE</h3>
        </div>
        <div class="modal-body">
         
			 
		 <div id='fg_membersite'>

<form id='login' action="subhouse.php" method='post' accept-charset='UTF-8'>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<div class='short_explanation'>
</div>

<div><span class='error'></span></div>
<div class='container'>
    <label for='location' >LOCATION</label><br/>
    <select name="location" id="location" maxlength="50" >
	<option value="">SELECT LOCATION</option>
	<option value="BUWATE">BUWATE</option>
	<option value="KIWATULE">KIWATULE</option>
	<option value="SEGUKU">SEGUKU</option>
	<option value="MBOGO">MBOGO</option>
	<option value="KAKUNGULU">KAKUNGULU</option>
	</SELECT>
	<br/>
    <span id='add_meter_No_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='street' >STREET NAME</label><br/>
    <input type='text' name='street' id='street' maxlength="50" /><br/>
    <span id='add_location_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='plot' >PLOT NUMBER:</label><br/>
    <input type='text' name='plot' id='plot' maxlength="50" /><br/>
    <span id='add_account_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Add' />
</div>
<div class='short_explanation'><a href='#'>Edit user?</a>
</div>

	</form>       
		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  </li>
  
  
  
        
          <li><a href="tenant.php">TENANT</a></li>
          <li><a href="payment.php">PAYMENT</a></li>
          <li><a href="regitering.php">USERS</a>       
          </li>
          
        </ul> 	
	</li>
	<li>
	    <a href="previousRec.php">View</a>
       <ul>
                    <li><a href="viewhouse.php">HOUSE</a></li>
          <li><a href="viewtenant.php">TENANT</a></li>
          <li><a href="viewpayment.php">PAYMENT</a></li>
          <li><a href="viewusers.php">USERS</a>       
          </li>
          
        </ul>	
			
	</li>
	
	<li>
	    <a href="viewreport.php">Reports</a>	
	</li>
	<li>
	<a href="logout.php">LOG OUT</a>  
	</li>
	</ul>
 
 <div class="container">
<div class="table-scrol"> 
<br> 
    <div class="alert alert-success" id="house">

<strong>View The Registered Houses!!</strong>
</div> 
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
    <table class="table table-bordered table-hover table-striped">  
        <thead>  
  
        <tr class="info">  
  
            <th id="tabhead">Id</th>  
            <th id="tabhead">Location</th>  
            <th id="tabhead">Street Number</th>  
            <th id="tabhead">plot Number</th>  
            <th id="tabhead">Edit</th>			
			<th id="tabhead">Delete</th> 
        </tr>  
        </thead>  
  
        <?php  
        include("config.php");  
        $view_users_query="select * from house";//select query for viewing users.  
        $run=$connect->query($view_users_query);//here run the sql query.  
  	
        while($row= $run->fetch_assoc())//while look to fetch the result and store in a array $row.  
        {  

            $idhouse=$row['house_id'];  
            $lock=$row['location'];  
            $street=$row['street_name'];  
            $plot=$row['plot_number'];  
			
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
           
            <td><?php echo $idhouse ; ?></td>  
            <td><?php echo $lock;  ?></td>  
            <td><?php echo $street;  ?></td>  
            <td><?php echo $plot;  ?></td>  
			<td><a href="edithouse.php?edit=<?php echo $row['house_id'] ?>"><button class="btn btn-info" onClick = 'return comfirmEdit();'>Edit</button></a></td>	
            <td><a href="deletehouse.php?del=<?php echo $idhouse ?>"><button class="btn btn-danger" onClick = 'return confirmDelete();'>Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div> 

	</div> 
	</div>
	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
	
	<a href="#">Rental Management System</a> designed by <a href="#"> Epou &nbsp; Ivan &nbsp; and&nbsp; Martin Turyarugayo</a>
	<br> 
	<script language="JavaScript">

document.write('Last modified '+document.lastModified);

</script>
  <div id="footer">

<div class="copyright">
<span class="footer">

<script language="JavaScript">
var today = new Date()
var year = today.getFullYear();
document.write(year+ ' '+' Rental management system');
</script>
</span>
</div>
</div>


</body>  
  
</html> 