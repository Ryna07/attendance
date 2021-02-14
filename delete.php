<?php

require('db_conn.php');

	$id=$_REQUEST['ID'];
	$query = "DELETE FROM employee WHERE ID=$id"; 
	
	$result = mysqli_query($conn,$query) or die ( mysqli_error());
	header("Location: dashboard.php"); 

	
?>