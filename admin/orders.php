<?php

session_start();
if(isset($_SESSION['role']) && $_SESSION['role'] != 'admin') {
	header('location: ../index.php');
}

function getTitle() {
	echo "Orders";
}

function get_admin_contents() {};
function getContent() {
	require '../connections/connect.php';
	$sql = "SELECT * FROM orders";
	$orders = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	echo '<div id="accordion">';
	foreach ($orders as $order) {
		extract($order);
		echo "<div class='card'>
			    <div class='card-header'>
			      <a class='card-link' data-toggle='collapse' href='#collapseOne$id'>
			        $transaction_code $date_created  
			      </a>
			    </div>
			    <div id='collapseOne$id' class='collapse' data-parent='#accordion'>
	      			<div class='card-body'>";
		$sql = "SELECT * FROM order_details od, items i 
			WHERE od.item_id = i.id AND od.order_id = $id";
		$order_details = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		foreach ($order_details as $order_detail) {
			extract($order_detail);
			echo "<img src='$image' width='150'>";
			echo "$name $quantity<br>";
		}
		echo '</div></div></div>';

	}
	echo '</div>'; //accordion
}

require '../partials/template_products.php';
?>
