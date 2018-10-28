<?php 
require 'connect.php';

session_start();
if(isset($_SESSION['user'])){

	$name = $_POST['buyerName'];
	$address = $_POST['buyerAddress'];
	$number = $_POST['buyerNumber'];
	$transaction_code = uniqid('jacob1');
	$user_id = $_POST['user_id'];
	$payment_id= $_POST['paymentmethod'];
	$item = $_POST['item'];
	$quantity = $_POST['quantity'];
	

	date_default_timezone_set('Asia/Manila');
	$date = date("Y-m-d H:i:sa");

	$sql = "INSERT INTO orders(address,user_id,contact_number,status_id, transaction_code,payment_method_id, buyer_name) VALUES('$address','$user_id','$number','1','$transaction_code','$payment_id','$name')";
	$r=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	$order_id = mysqli_insert_id($conn);
	
	foreach ($_SESSION['cart'] as $id => $quantity) {
	    $sql = "INSERT INTO order_details(item_id,quantity,order_id) VALUES($id,$quantity,$order_id)";
	    mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	

unset($_SESSION['cart']);
header('location: ../index.php');
}
 ?>
