<?php
require_once "connect.php";
$msg = "";
if(isset($_REQUEST['btnSubmit'])) 
	{
		$sname = $_REQUEST['sname'];
		$email = $_REQUEST['email'];
		$mobile = $_REQUEST['mobile'];
		$address = $_REQUEST['address'];
		$company = $_REQUEST['company'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		$status = "pending";
		
		$query = "insert into seller (sname,email,mobile,address,company,username,password,status) values ('$sname','$email','$mobile','$address','$company','$username','$password','$status')";
		if(mysql_query($query))
		{
		echo '<script language="javascript">';
		echo 'alert("Registered Successfully!")';
		echo '</script>';
		
		} 
		else 
		{
		echo '<script language="javascript">';
		echo 'alert("Unable to Save!")';
		echo '</script>';
		}
	}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>ONLINE COCONUT STORE AUTOMATION</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="icon" href="favicon.png" type="image/png">
	<!-- Include Bootstrap CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<!-- Include Font Awesome CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Include Font Awesome CSS -->
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!-- Include Medirev CSS -->
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="container-fluid">
				<div class="header-top">
					<div class="col-md-3 col-sm-4 hidden-xs logo">
						<a href=""><img src="img/logo.png" alt="" /></a>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a href="" class="navbar-header"><img src="img/logo.png" alt="" /></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navigation">
				  <ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="seller-registration.php">Seller Registration</a></li>
					<li><a href="seller-login.php">Seller Login</a></li>
					<li><a href="buyer-registration.php">Buyer Registration</a></li>
					<li><a href="buyer-login.php">Buyer Login</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li class="get-a-quote"><a href="admin-login.php">Admin</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	
	<section class="appointment-form">
		<div class="container">
			
			<div class="col-md-5 col-md-offset-1">
				<div class="appointment-form">
					<h3>Seller Registration</h3><br>
					<form method="post">
						<input type="text" class="col-md-12 col-xs-12 appointment-name" name="sname" placeholder="Your Name" required autofocus/>
						<input type="email" class="col-md-12 col-xs-12 appointment-email" name="email" placeholder="Your Email" required/>
                        <input type="text" class="col-md-12 col-xs-12 appointment-name" name="mobile" placeholder="Your Mobile" required maxlength="10" pattern="^[6-9][0-9]{9}$"/>
                        <input type="text" class="col-md-12 col-xs-12 appointment-name" name="address" placeholder="Your Address" required/>
						<input type="text" class="col-md-12 col-xs-12 appointment-name" name="company" placeholder="Your Company Name" required/>
                        <input type="text" class="col-md-12 col-xs-12 appointment-name" name="username" placeholder="Your Username" required/>
                        <input type="password" class="col-md-12 col-xs-12 appointment-name" name="password" placeholder="Your Password" required/>
                        
						<button class="col-md-3 col-xs-4 col-md-offset-9 col-xs-offset-8 appointment-submit" name="btnSubmit" type="submit">Register</button>
					</form>
				</div>
			</div>
		</div>
	</section>



	<section class="footer">
		<div class="copyright text-center">
			<div class="container">
				<div class="row">
					<p class="copyright">&copy; Copyright All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>   
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<!-- Waypoint -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<!-- Include Medirev JavaScript -->
	<script src="js/script.js"></script>
</body>
</html>