<?php 
require_once "connect.php";
$msg = "";
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";
$query = "delete from product where id=".$id;
if(mysql_query($query)) {
header("location:product-list.php");
} else {
echo "unable to delete!";
}
?>