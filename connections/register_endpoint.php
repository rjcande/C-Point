<?php 

require "connect.php";

$address = $_POST['address'];
$email = $_POST['email'];
$username = $_POST['regusername'];
$password = $_POST['regpassword'];
$role_id = 2;


$sql_insert = "INSERT INTO users(username, address, email, password) VALUES ('$username','$address','$email','$password')";

$result =  mysqli_query($conn, $sql_insert);

echo "You can now Log in!!";

header('location: ../index.php');
?>

<!--<script>-->
<!--	alert('Registration Successful');-->
<!--</script>-->
