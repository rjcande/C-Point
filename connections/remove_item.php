<?php 
session_start();
require 'connect.php';

$id = $_POST['id'];
//echo $id;
$sql = "DELETE FROM items WHERE id = $id";
$result = mysqli_query($conn,$sql);




header('location: ../index2.php');
?>
