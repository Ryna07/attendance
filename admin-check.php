<?php 
session_start(); 
include "db_conn.php"; 

if (isset($_POST['name']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['name']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: admin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: admin.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        //$pass = md5($pass);

		$sql = "SELECT * FROM admin WHERE name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['name'] === $uname && $row['password'] === $pass) {
            	
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['admin_id'] = $row['admin_id'];
            	$_SESSION['password'] = $row['password'];
            	

            	header("Location: dashboard.php");
		        exit();
            }else{
				header("Location: admin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: admin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: admin.php");
	exit();
}