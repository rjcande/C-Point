<?php
	session_start();
	$id = $_POST['id'];
	$quantity = $_POST['quantity'];

	if(isset($_SESSION['cart'][$id])) {
		$_SESSION['cart'][$id] += $quantity;
	} else {
		$_SESSION['cart'][$id] = $quantity;
	}
?>
<script>
 	alert('successfully added to your cart!');
</script>



