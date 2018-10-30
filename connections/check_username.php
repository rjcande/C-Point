<?php 

require "connect.php";

$username = $_POST['regusername'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$contactNum = $_POST['contactNum'];
$role_id = 2;
// $username = mysqli_real_escape_string($conn,$_POST['regusername']);
// $email = mysqli_real_escape_string($conn,$_POST['email']);

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

$emailSql = "SELECT * FROM users WHERE email = '$email'";
$emailResult = mysqli_query($conn, $emailSql);

if(mysqli_num_rows($result) > 0) {
	echo "Username already exists\n";
}
else if(mysqli_num_rows($emailResult) > 0) {
	echo "email already exists\n";
}
else{
	$address = $_POST['address'];
	$email = $_POST['email'];
	$username = $_POST['regusername'];
	$password = $_POST['password'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$contactNum = $_POST['contactNum'];
	$role_id = 2;


	$sql_insert = "INSERT INTO users(firstname, lastname, username, address, email, password, contact_number, role_id) VALUES ('$firstName', '$lastName', '$username','$address','$email','$password', '$contactNum', '$role_id')";

	$registration_result =  mysqli_query($conn, $sql_insert);

	// echo "<script> 
	// 		alert(You can now Log in!!);
	// 	  </script>
	// ";

	header('location: ../index.php');
}



?>