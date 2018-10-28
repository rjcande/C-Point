<?php
session_start();
require 'connection.php';

$id = $_GET['id'];
$name = mysqli_escape_string($conn, $_POST['name']);
$description = mysqli_escape_string($conn, $_POST['description']);
$price = $_POST['price'];
$category_id = mysqli_escape_string($conn, $_POST['category_id']);

$image_db = '';
if(isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
	$image = "assets/images/".$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'], "../".$image);

	$image_db = "image = '$image',";
}

$sql = "UPDATE items SET name = '$name', description = '$description', price = $price, $image_db category_id = $category_id WHERE id = $id";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

$_SESSION['success_message'] = "$name Updated Successfully";

header('location: ../index.php');

?>
