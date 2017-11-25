
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
  #rec{
  background-color:white;
  font-size:1.3em;
  color:blue;
  text-align:left;
  
  }
  #rec hr{
  background-color:black;
  
  }
  </style>
</head>
<body>

<script>
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
          <li><a href="house.php">HOUSE</a></li>
          <li><a href="tenant.php">TENANT</a></li>
          <li><a href="payment.php">PAYMENT</a></li>
          <li><a href="regitering.php">USERS</a>       
          </li>
          
        </ul> 	
	</li>
	<li>
	    <a href="#">View</a>
       <ul>
          <li><a href="viewhouse.php">HOUSE</a></li>
          <li><a href="viewtenant.php">TENANT</a></li>
          <li><a href="viewpayment.php">PAYMENT</a></li>
          <li><a href="viewusers.php">USERS</a>       
          </li>
          
        </ul>	
			
	</li>
	<li>
    <!-- Trigger the modal with a button -->
  <a href="#" data-toggle="modal" data-target="#myModal"><img src="icon_plus.png" height=10px>add user&plus;</a>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add USER</h4>
        </div>
        <div class="modal-body">
         
			 
		 <div id='fg_membersite'>

<form id='login' action="adduser.php" method='post' accept-charset='UTF-8'>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<div class='short_explanation'>* required fields 
</div>

<div><span class='error'></span></div>
<div class='container'>
    <label for='fn' >First Name</label><br/>
    <input type='text' name='fn' id='fn' "value='' maxlength="50" autofocus /><br/>
    <span id='add_meter_No_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='ln' >Last Name:</label><br/>
    <input type='text' name='ln' id='ln' maxlength="50" /><br/>
    <span id='add_location_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='st' >User Title*:</label></td><td>
	<select value='title' name='st' id="st"><option></option>
	<option name='admin'>administrator</option>
	<option name='member'>member</option>
	<option name='others'>others</option>
	</select>
<div id='register_user_title_errorloc' class='error' style='clear:both'></div>
</div>
<div class='container'>
    <label for='sn' >User Name:</label><br/>
    <input type='text' name='sn' id='sn' maxlength="50" /><br/>
    <span id='add_account_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='pw' >Password:</label><br/>
    <input type='password' name='pw' id='pw' maxlength="50" /><br/>
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
	
	<li>
	     <a href="viewreport.php">Reports</a>	
	</li>
	<li>
	<a href="logout.php">LOG OUT</a> 
	</li>
	</ul>
	
	<div class="container" id="rec">

<div class="alert alert-success" >
<button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
<strong>Tenant's Clearance Receipt!</strong>
</div>

<?php
include("config.php"); 
include 'functions.php';
$hass=$_GET['employee']; 
        $view_users_query="select t.tenant_ID,t.first_name,t.last_name,t.sex,t.phone_no,t.address,h.location,h.street_name,h.plot_number,p.amount,p.date_of_payment,p.due_date from tenant t,house h,payment p WHERE (t.house_id=h.house_id AND t.tenant_ID=p.tenant_ID) AND t.tenant_ID=$hass";//select query for viewing users.  
        $run=mysql_query($view_users_query);//here run the sql query.  
        while($row=mysql_fetch_array($run)){
echo"RENTALS MANANAGEMENT SYSTEM";
echo"<hr>";
echo"<br>";
echo"<br>";
echo"First Name: ".$row['first_name'];
echo"<br>";
echo"Last Name:  ".$row['last_name'];
echo"<br>";
echo"Tenant ID:  ".$row['tenant_ID'];
echo"<br>";
echo"Location:   ".$row['location'];
echo"<br>";
echo"<hr>";
echo"Date of Payment: ".$row['date_of_payment'];
echo"<br>";
echo"Date for next payment:".$row['due_date'];
echo"<br>";
echo"Description: Rent payment";
echo"<br>";
echo"Amount Paid: ".$row['amount'];
echo "<br/>";
echo convert_number_to_words($row['amount']);
echo"<hr>";
echo"<br>";
echo"<br>";
echo"                 "."    Stamp..................................................  Signature.......................................................";
echo"<br>";
echo"<br>";
echo"Printed Date..........".$row['date_of_payment'];
echo"<br>";
echo"Generated by Rentals Management system";
echo"<br>";
echo"<hr>";
echo"<br>";
}
?>
    <input type='button' name='Submit' value='Print' OnClick="window.print()" />
</section>
 </div>
<p>
<a href="#">Rental Management System</a> designed by <a href="#"> Epou &nbsp; Ivan &nbsp; and&nbsp; Martin Turyarugayo</a>
</div>	 	
	
<!-- AdPacks.com Ad Code -->
<script src="jquery-1.8.2.min.js"></script>
<script>
(function(){
var bsa = document.createElement('script');
 bsa.async = true;
 bsa.src = 'http://www.red-team-design.com/js/adpacks-demo.js';
(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>


<script language="JavaScript">

document.write('Last modified '+document.lastModified);

</script>
</div>
<div id="footer">

<div class="copyright">
<span class="footer">

<script language="JavaScript">
var today = new Date()
var year = today.getFullYear();
document.write('©'+year+' Rental management system');
</script>
</span>
</div>
</div>

</div>

</body>
</html>