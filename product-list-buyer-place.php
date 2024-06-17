<?php
ob_start();
session_start(); 
include('connect.php');
error_reporting(E_ERROR | E_PARSE);
$username=$_SESSION['username'];
$address = $_REQUEST['address'];
$query = "select * from product where address='$address' order by id desc";
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
					<li><a href="buyer-dashboard.php">Home</a></li>
					<li class="active"><a href="product-list-buyer.php">Product List</a></li>
					<li><a href="seller-list.php">Seller List</a></li>
					<li><a href="order-history.php">Order History</a></li>
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
        
        <form method="post" action="product-list-buyer-place.php">
        	<select name="address" required >
                          <option value="" >Select Place</option>         
                            <?php 
                                $sql=mysql_query("SELECT min(id) AS id,address FROM product GROUP BY address"); 
                                while ($row = mysql_fetch_object($sql)) 
								{   
                                echo  "<option value= \"$row->address\">$row->address</option>" ; 
                                } 
                            ?>     
                        </select>
                        
                        <input type="submit" value="Search">
            
        </form>
			
			<div class="blog-posts" >
            <?php while($rec = mysql_fetch_array($data)) { ?>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-post">
						<img src="<?php echo $rec['path'];?>" width="359" height="300">
						<div class="post-date">Rs. <?php echo $rec['rate']; ?> / Piece</div>
						<div class="post-details">
							<p class="title"><b>Product :</b> <?php echo $rec['pname']; ?></p>
							<p class="title"><b>Product Stock :</b> <?php echo $rec['pqw']; ?></p>
                            <p class="title"><b>Company Name :</b> <?php echo $rec['company']; ?></p>
                            <p class="title"><b>Mobile :</b> <?php echo $rec['mobile']; ?></p>
                            <p class="title"><b>Address :</b> <?php echo $rec['address']; ?></p>
                            <form method="post" action="product-book.php">
                                <input type="text" name="pname" value="<?php echo $rec['pname']; ?>" style="display:none">
                                <input type="text" name="pqw" value="<?php echo $rec['pqw']; ?>" style="display:none">
                                <input type="text" name="rate" value="<?php echo $rec['rate']; ?>" style="display:none">
                                <input type="text" name="company" value="<?php echo $rec['company']; ?>" style="display:none">
                                <input type="text" name="mobile" value="<?php echo $rec['mobile']; ?>" style="display:none">
                                <input type="text" name="address" value="<?php echo $rec['address']; ?>" style="display:none">
                                <input type="text" name="path" value="<?php echo $rec['path']; ?>" style="display:none">
                                <input type="text" name="id" value="<?php echo $rec['id']; ?>" style="display:none">
                                <input type="text" name="susername" value="<?php echo $rec['username']; ?>" style="display:none">
                               <p class="title"> Quantity : <input type="text" name="qty" required></p>
                            	<input type="submit" value="Book Now">
                            </form>
						</div>
					</div>
				</div>
                 <?php } ?>
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