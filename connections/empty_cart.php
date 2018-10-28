<?php

session_start();

// $id = $_POST['id'];
// print_r($id);
// die();

if(isset($_POST['id'])) {
	unset($_SESSION['cart'][$_POST['id']]);
} else {
	unset($_SESSION['cart']);
}

header('location: ../cart.php');

?>