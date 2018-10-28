<?php


require 'connect.php';



$productname =$_POST['name'];
$productprice =$_POST['price'];
$productdescription =$_POST['description'];
$productimage ="assets/images/".$_FILES['image']['name'];
$category_id= $_POST['category'];


move_uploaded_file($_FILES['image']['tmp_name'],"../".$productimage);


$addProduct = "INSERT INTO items(name,description,price,image, category_id) VALUES('$productname','$productdescription','$productprice','$productimage', '$category_id')";


$result = mysqli_query($conn,$addProduct) or die(mysqli_error($conn));



header('location: ../index2.php');



?>

