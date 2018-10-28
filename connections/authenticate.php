<?php 

	session_start();

require 'connect.php';

	error_reporting(0);
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']); 

	// $_SESSION['logged_in_user'] = $username;

	// echo 'username: $username, password: $password';

	$sql="SELECT * FROM users where username='$username' AND password='$password'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)> 0){

		while($resultuser = mysqli_fetch_assoc($result)){
			$_SESSION['role_id'] = $resultuser['role_id'];
			$_SESSION['username'] = $resultuser['username'];
			$_SESSION['password'] = $resultuser['password'];
			$_SESSION['email'] = $resultuser['email'];
	
			if($_SESSION['role_id'] == 1){
				$_SESSION['admin'] = 'admin';
				header('location: ../index2.php');
			} 
			if($_SESSION['role_id'] == 2){
			// $login = mysqli_fetch_assoc($result);
			$_SESSION['user'] = $username;
				header('location: ../index.php');
			}
		}
	} 
	else {
		// $message = "Username and/or Password incorrect.\\nTry again.";
		//   echo '<script type=text/javascript>
		//   		alert(Username and/or Password incorrect.\\nTry again.);
		// 		</script>';
		echo "Username and/or Password incorrect. <a href=../index.php> Click here to Try again. </a>";
	}
	// header('location: ../index.php');
	
?>