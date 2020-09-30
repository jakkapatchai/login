<?php 
require('db.php'); 
$q = "delete from login where username='".$_GET['username']."'";
$result = $con->query($q);
header("location: admin.php"); 
?>