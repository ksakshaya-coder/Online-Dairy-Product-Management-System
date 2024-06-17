<?php
ob_start();
session_start(); 
include('connect.php');
//error_reporting(E_ERROR | E_PARSE);

		
			$pname = $_REQUEST['pname'];
			$pqw = $_REQUEST['pqw'];
			$rate = $_REQUEST['rate'];
			$company = $_REQUEST['company'];
			$mobile = $_REQUEST['mobile'];
			$address = $_REQUEST['address'];
			$path = $_REQUEST['path'];	
			$qty = $_REQUEST['qty'];	
			$total = $_REQUEST['total'];
			$username=$_SESSION['username'];
			$susername = $_REQUEST['susername'];
			
			$query = "insert into orders (pname,pqw,rate,company,mobile,address,path,qty,total,username,susername) values ('$pname','$pqw','$rate','$company','$mobile','$address','$path','$qty','$total','$username','$susername')";
			if(mysql_query($query))
			{
			echo '<script language="javascript">';
			echo 'alert("Order Confirmed Successfully!")';
			echo '</script>';
			header('Refresh: 3; URL = order-history.php');
			} 
			else 
			{
			echo '<script language="javascript">';
			echo 'alert("Unable to Order!")';
			echo '</script>';
			}
		
?>