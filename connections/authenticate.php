<?php 

	session_start();

require 'connect.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	// $_SESSION['logged_in_user'] = $username;

	// echo 'username: $username, password: $password';

	$sql="SELECT * FROM users where username='$username' AND password='$password'";

	$result = mysqli_query($conn,$sql);

	while($resultuser = mysqli_fetch_assoc($result)){
		$useradmin = $resultuser['role_id'];
	}

	if(mysqli_num_rows($result)==1){
		if($useradmin == 1){
			$_SESSION['admin'] = 'admin';
			header('location: ../index2.php');
		} else {
		// $login = mysqli_fetch_assoc($result);
		$_SESSION['user'] = $username;
            header('location: ../index.php');
    	}

	} else {
      echo " You Have Entered Incorrect Password";
    }  
?>







