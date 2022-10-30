<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bikes for Rent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bikes for Rent is a bike rental company in montreal. With us, you can experience the utmost riding adventure.">
    <meta name="author" content="Dawn Mathews">

<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/businessltd/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">

<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="special_offer.php" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>Adventure Bikes </option>
			<option>Choppers </option>
			<option>Cruisers </option>
			<option>Dirt Bikes </option>
			<option>Motocross Bikes </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.php" style="color: black">Specials Offer</a></li>
	 <li class=""><a href="contact.php" style="color: black">Contact</a></li>
	 <li class="">
	 <a href="signin.php" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	</li>
    </ul>
  </div>
</div>
</div>
</div>

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> Medium Range [230]</a>
				<ul style="display:none">
				<li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Adventure Bikes (50) </a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Standard Bikes (30)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Dirt Bikes (80)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Enduro Bikes (15)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> High Range [110] </a>
			<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Choppers (35)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Cruisers (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Power Cruisers (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Motocross Bikes  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Sports Bikes  (7)</a></li>

			</ul>
			</li>
			<li class="subMenu"><a>Popular Bikes [30]</a>
				<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Honda CRF1000L Africa Twin  (3)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>KTM 1290 Super Duke GT (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Honda VFR1200X (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>BMW G 310 R  (4)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Ducati xDiavel (2)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Ducati Scrambler Sixty2 (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Kawasaki Z800 (3)</a></li>				
			</ul>
			</li>
		</ul>
		<br/>
		  <div class="thumbnail">
			<img src="themes/images/products/panasonic.jpg" alt="New Bike to our collection"/>
			<div class="caption">
			  <h5>Ducati xDiavel</h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Rent It<i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$122.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="themes/images/products/kindle.png" title="New Bike to our collection" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>BMW G 310 R</h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Rent It <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$102.00</a></h4>
				</div>
			  </div><br/>
	</div>
<!-- Sidebar end=============================================== -->
		<div class="span9">		

    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
	<form class="form-horizontal" method="post">
		<h4>Your personal information</h4>
		<div class="control-group">
			<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" placeholder="First Name" name="firstname" required>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLnam" placeholder="Last Name" name="lastname" required>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="input_email" placeholder="Email" name="email" required>
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="inputPassword1" placeholder="Password" name="password" required>
		</div>
	  </div>	  

	<!-- <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>	 -->
		
		<div class="control-group">
			<label class="control-label" for="aditionalInfo">Address <sup>*</sup></label>
			<div class="controls">
			  <textarea id="aditionalInfo" cols="26" rows="3" name="address" placeholder="Address" required></textarea>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone <sup>*</sup></label>
			<div class="controls">
			  <input type="text"  name="mobile" id="mobile" placeholder="Mobile Phone" name="mobile" required /> 
			</div>
		</div>
		
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" type="submit" name="save" value="Register" />
			</div>
		</div>		
	</form>
	<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$firstname = $_POST['firstname'];
							$lastname = $_POST['lastname'];
							$email = $_POST['email'];
							$password = $_POST['password'];
							$address = $_POST['address'];
							$mobile = $_POST['mobile'];
							
							$qry = "INSERT INTO users (firstname,lastname,email,password,address,mobile)
							VALUES('$firstname','$lastname','$email','$password','$address','$mobile')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"account.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}
						
					  ?>
</div>
			

		</div>
		</div>

	</div>
</div>
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>Contact Us</h5>
				<a href="contact.php">Office Address :</a>
				<a href="contact.php">723 Rue Papineau Ouest</a> 
				<a href="contact.php">Montreal, Quebec</a> 
				<a href="contact.php">H3P2N7, Canada</a>  
			 </div>
			<div class="span3">
				<h5>Customer Support</h5>
				<a href="contact.php">Email id : info@rentabike.com</a>  
				<a href="contact.php">Tel : +1 803-687-6777</a>  
				<a href="contact.php">Mobile : +1 514-677-8767</a> 
				<a href="contact.php">Fax : +1 766-877-9998</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">New Bikes</a> 
				<a href="#">Popular Bikes</a>  
				<a href="special_offer.php">Secial Offers</a>  
				<a href="#">Brands</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Dawn Mathews 2020</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
</body>
</html>