<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['adminid']) && isset($_POST['password']) && isset($_POST['confPass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['name']);
	$adminid = validate($_POST['adminid']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['confPass']);
	

	$user_data = 'name='. $uname. '&password='. $pass;


	if (empty($uname)) {
		header("Location: admin-register.php?error=User Name is required&$user_data");
	    exit();
	}
	else if(empty($adminid)){
        header("Location: admin-register.php?error=nfc id is required&$user_data");
	    exit();
	}
	else if(empty($pass)){
        header("Location: admin-register.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: admin-register.php?error=Re Password is required&$user_data");
	    exit();	
	}
	else if($pass !== $re_pass){
        header("Location: admin-register.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{


	    $sql = "SELECT * FROM admin WHERE name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: admin-register.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO admin(name, admin_id, password) VALUES('$uname','$adminid', '$pass')";

           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: admin-register.php? success=Your account succesfully registered");
	         exit();
           }else {
	           	header("Location: admin-register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: dashboard.php");
	exit();
}
