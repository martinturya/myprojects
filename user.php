
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
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
	<li><a href="#">Home</a></li>
	
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
  
		  
		  </li>
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

<form id='login' action="addmeter.php" method='post' accept-charset='UTF-8'>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<div class='short_explanation'>
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
    <label for='st' >User Type:</label><br/>
    <input type='text' name='st' id='st' maxlength="50" /><br/>
    <span id='add_account_errorloc' class='error'></span>
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
	<br>
	<style type="text/css">
	#info{
	background-color:yellow;
	color:black;
	
	
	}
	</style>
<div class="alert alert-success" id="info">
<button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
<strong>You Can Register Tenant Information Here!</strong>
</div>


<p>
<a href="#">Rental Management System</a> designed by <a href="http://localhost/wordpress/"> Epou &nbsp; Ivan &nbsp; and&nbsp; Martine</a>
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

<div id="footer">

<div class="copyright">
<span class="footer">

<script language="JavaScript">
var today = new Date()
var year = today.getFullYear();
document.write(year+' Rental management system');
</script>
</span>
</div>
</div>

</div>

</body>
</html>