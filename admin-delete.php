<?php

require('db_conn.php');

	$id=$_REQUEST['admin_id'];
	$query = "DELETE FROM admin WHERE admin_id=$id"; 
	
	$result = mysqli_query($conn,$query) or die ( mysqli_error());
	header("Location: admin-data.php"); 

	
?>