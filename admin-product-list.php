<?php
ob_start();
session_start(); 
include('connect.php');
error_reporting(E_ERROR | E_PARSE);
$username=$_SESSION['username'];
$query = "select * from product";
$data = mysql_query($query);
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
					<li><a href="admin-dashboard.php">Home </a></li>
					<li><a href="admin-seller-list.php">Seller List</a></li>
					<li><a href="admin-buyer-list.php">Buyer List</a></li>
                    <li class="active"><a href="admin-product-list.php">Product List</a></li>
					<li><a href="admin-order-list.php">Order List</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li class="get-a-quote"><a href="logout.php">Logout</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	
	<section class="blog">
		<div class="container">
			<h2>Product list</h2>
			<div class="blog-posts">
            <table border="1" width="1000" cellpadding="10" cellspacing="10">
<tr align="center">
<th align="center">Product Image</th><th align="center">Product Name</th> <th align="center">Stock</th> <th align="center">Rate</th><th align="center">Company Name</th><th align="center">Mobile</th><th align="center">E-mail</th><th align="center">Address</th> <th colspan="2" align="center">Action</th>
</tr>
<?php while($rec = mysql_fetch_array($data)) { ?>
<tr align="center">
<td> <img src="<?php echo $rec['path'];?>" width="75" height="60"></td>
<td> <?php echo $rec['pname']; ?> </td>
<td> <?php echo $rec['pqw']; ?> </td>
<td> <?php echo $rec['rate']; ?> </td>
<td> <?php echo $rec['company']; ?> </td>
<td> <?php echo $rec['mobile']; ?> </td>
<td> <?php echo $rec['email']; ?> </td>
<td> <?php echo $rec['address']; ?> </td>
<td> <a onClick="return confirm('Sure to delete!')" href="product-delete.php?id=<?php echo $rec['id']; ?>">Delete</a> </td>
</tr>
<?php } ?>
</table>
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