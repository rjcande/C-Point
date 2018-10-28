<?php
require 'connect.php';

$name = $_POST['name'];
$id = $_POST['item-id'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = "assets/images/".$_FILES['image']['name'];
$file = $_FILES['image'];
$category = $_POST['category_id'];

if($file['size'] <= 0) {
    $sql = "UPDATE items SET name = '$name', description = '$description', price = '$price', category_id = '$category' WHERE id = '$id'";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

} else {
    $sql = "UPDATE items SET name = '$name', description = '$description', price = '$price', image = '$image', category_id = '$category' WHERE id = '$id'";

    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    move_uploaded_file($_FILES['image']['tmp_name'],"../".$image);
}


header('location: ../index2.php');
?>
