<style type="text/css">

/*img {
	width: 200px;
	height: 200px;
}

#cd-cart {
  position: fixed;
  top: 0;
  right: -100%;
  height: 100%;*/

  /* header height */
 /* padding-top: 50px;

  overflow-y: auto;
  -webkit-overflow-scrolling: touch;

  transition: right 0.3s;
}

#cd-cart.speed-in {
  right: 0;
}*/

</style>

<?php
error_reporting(0);
session_start();


if(!isset($_SESSION['cart'])) {
	echo 'NO ITEMS IN CART'; ?>

<?php } else { ?>
		
		<div class="container-fluid containerHeight">
			<button type='button' class="btn  btn-outline-success" id="proceedPay">Proceed Payment</button>
			<div class="row">
<?php 
	$total_price = 0;
	foreach ($_SESSION['cart'] as $key => $quantity) {
		require 'connections/connect.php';
		$sql = "SELECT * FROM items WHERE id = $key";
			$cart_items = mysqli_query($conn, $sql);

			foreach($cart_items as $cart_item) {
				extract($cart_item); ?>
			<div class="card col-3" style="padding-top:1rem !important; padding-bottom:2rem !important;">	
				<div class='cart-item'><img src='<?php echo $image; ?>' height="150"><br>
				<p><strong>Name:</strong></p> <?php echo $name ?> <br>
				<p><strong>Price:</strong></p> Php <?php echo number_format($price,2); ?>
				<p><strong>Quantity:</strong></p> <?php echo $quantity; ?>
				<p><strong>Total: </strong></p>Php <?php echo number_format($price*$quantity,2)?></div>
				
				<?php $total_price += $price*$quantity; ?>

   						<div id='display_item'>


  						</div>
					  	
					  	<form method='POST' action='connections/empty_cart.php'>
					  		<input type="number" name="id" value="<?php echo $id; ?>" hidden>
					  		<button type='submit' class="btn  btn-outline-danger" name='remove'>
    						 Remove Item</button>
    					</form>
		<?php } ?>
		</div>	
	<?php } ?>
<?php } ?>
	</div> <!-- end of row -->
</div> <!-- end of container -->

<?php require 'partials/cart_template.php'; ?>

<script type="text/javascript">
	
	$('#proceedPay').click( () => {	
		window.location.href = "checkout.php";
	});

</script>