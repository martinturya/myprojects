<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-9">
    <title>Mbarara University Bills management system</title>
    <script src="jquery.min.js"></script>
		  <link rel="STYLESHEET" type="text/css" href="pwdwidget.css" />
    <script src="pwdwidget.js" type="text/javascript"></script>
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
<div id="border-top" class="h_blue">
    <span class="tip"><img class='img' src="flags.gif" width="50px">
	Rental management system
	</span>
</div>

<div id="content-box">    
<ul id="menu">
	<li><a href="home.html">Home</a></li>
	<li>
		<a href="#">Register</a>
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
	    <a href="#">Users</a>	
		<ul>
		  <li>
	        <a href="viewusers.php">View users</a>
		  </li>
		  <li>
		   <a href="regitering.php">Register user</a>
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
<br><br>
<div class="alert alert-success" id="house">

<strong>Hello Administrator, Register The House From here!!</strong>
</div>
<!-- Form Code Start -->
<div id='fg_membersite'>
<br><br><br><br>
<form id='register' action="house.php" method='post' accept-charset='UTF-8'>
<fieldset >
<table>
<legend>Register House</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>
<input type='text'  class='spmhidip' name="" />

<div><span class='error'></span></div>
<div class='container'>
<tr><td>
    <label for='loc' >Location: </label></td><td>
    <select name="loc" id="loc" maxlength="50" >
	<option value="">SELECT HOUSE LOCATION</option>
	<option value="BUWATE">BUWATE</option>
	<option value="KIWATULE">KIWATULE</option>
	<option value="SEGUKU">SEGUKU</option>
	<option value="MBOGO">MBOGO</option>
	<option value="KAKUNGULU">KAKUNGULU</option>
    <span id='register_name_errorloc' class='error'></span>
</td></tr>
<tr><td>
    <label for='street' >Street Name:</label></td><td>
    <input type='text' name='street' id='street' value="" maxlength="50" />
    <span id='register_email_errorloc' class='error'></span>
</td></tr>
<tr><td>
    <label for='plot' >Plot Number:</label></td><td>
	<input type='text' name='plot' id='plot' value="" maxlength="50" />
    <span id='register_email_errorloc' class='error'></span>
	
	</select>
<div id='register_user_title_errorloc' class='error' style='clear:both'></div>
</td><td>

<tr><td>--------</td><td>
    <input type='submit' name='submit' value='register'></td></tr>
</div>
</table>
<?php 
  if(isset($_POST['submit'])){ // you didnt close this if statement
     include('config.php');

//declare address variables
     $loc= mysqli_real_escape_string($connect,$_POST['loc']);
     $street= mysqli_real_escape_string($connect,$_POST['street']);
     $plot= mysqli_real_escape_string($connect,$_POST['plot']);
//insert into users table
$sql="INSERT INTO house(location,street_name,plot_number) VALUES('$loc','$street','$plot')";

if(mysqli_query($connect,$sql)){

 echo"Submitted Successfully";
}

else{
	
	echo"Not Submitted Successfully";
}

  mysqli_close($connect);

  }// it closese from here 
	 ?>
</fieldset>
</form>



<br><br><br><br>
<div class="alert alert-success" id="house">

<strong>After filling all the fields click register to submit!!</strong>
</div>
<br><br><br><br><br><br><br><br>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide a username");
    
    frmvalidator.addValidation("password","req","Please provide a password");
	frmvalidator.addValidation("user_title","req","Please provide a user title");
	frmvalidator.addValidation("Telephone","req","Please provide Telephone number");

// ]]>
</script>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
<p>
<a href="#">Rental Management System</a> designed by <a href="#"> Epou &nbsp; Ivan &nbsp; and&nbsp; Martin Turyarugayo</a>
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
</body>
</html>