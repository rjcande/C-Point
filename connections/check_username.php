<?php 

require "connect.php";

$username = $_POST['regusername'];
$email = $_POST['email'];

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

$sqlEmail = "SELECT * FROM users WHERE email = '$email'";
$searchResult = mysqli_query($conn,$sqlEmail);

if(mysqli_num_rows($result) > 0) {
	echo "Username already exists";
}

if(mysqli_num_rows($searchResult) > 0) {
	echo "Email already exists";
}
 ?>