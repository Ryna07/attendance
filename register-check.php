<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password']) 
	&& isset($_POST['confPass']) && isset($_POST['nfc'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$phone = validate($_POST['phone']);
	$email = validate($_POST['email']);
	$nfc = validate($_POST['nfc']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['confPass']);
	

	$user_data = 'username='. $uname. '&email='. $email;


	if (empty($uname)) {
		header("Location: register.php?error=User Name is required&$user_data");
	    exit();
	}
	else if(empty($phone)){
        header("Location: register.php?error=Phone Number is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: register.php?error=Email is required&$user_data");
	    exit();
	}
	else if(empty($nfc)){
        header("Location: register.php?error=nfc id is required&$user_data");
	    exit();
	}
	else if(empty($pass)){
        header("Location: register.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: register.php?error=Re Password is required&$user_data");
	    exit();	
	}
	else if($pass !== $re_pass){
        header("Location: register.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM employee WHERE username='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO employee(username, phone, email, password, nfc) VALUES('$uname', '$phone', '$email', '$pass' , '$nfc')";

           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: login.php? success=Your account succesfully registered");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}
