<?php  
session_start();
require 'connections/connect.php';

if(isset($_SESSION['user'])) { ?>
	
	<div class="container-fluid px-0 containerHeight">
		<div class="row">
			<div class="col-5 ml-5">
<?php 
	
	$user_id = $_SESSION['user'];
	$total = 0;
	// if(isset($_SESSION['cart'])){
	// print_r($_SESSION['cart']);
	// }
	foreach ($_SESSION['cart'] as $id => $quantity) {
		$sql = "SELECT * from items WHERE id = $id";
		$result = mysqli_fetch_assoc(mysqli_query($conn,$sql));
		
		extract($result);

		$product = $name;
		$subtotal = $price*$quantity;
		$total += $subtotal; ?>

		<div class="card col-5" style="-webkit-box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.50">
		<img src="<?php echo $image;?>" height="150">
		<p>Product Name: <?php echo $product ?></p>
		<p>Quantity: <?php echo $quantity; ?></p>
		<p>Subtotal: P<?php echo $subtotal; ?></p>
		</div>
		<br>


<?php } ?>
		

	</div>
	<?php 
		global $conn;
		if (isset($_SESSION['user'])) {
			$username=$_SESSION['user'];

		$sql2= "SELECT id FROM users WHERE username = '$username'";
		$query= mysqli_fetch_assoc(mysqli_query($conn, $sql2));
		// print_r($query['id']);	
		
		
	?>

			<div class="card col-5" style="-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
				-moz-box-shadow: 5px 10px 5px 0px rgba(0,0,0,0.50);
				box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.50); padding-top:3rem !important; padding-bottom:3rem !important; background: #f9f0cc;">
				<h2 class="mb-5 font-weight-bold" id="dress-shoes"> Checkout
      
     </h2>
				
				<h3><strong>Total Price:</strong> ₱<?php echo $total; ?></p></h3>
				<br>
				<!-- <form> -->
				    <form method="POST" action="connections/checkout_endpoint.php">
					<input type="hidden" name="user_id" data-id="<?php echo $query['id']; ?>" id="user_id">
					Full Name: <input type='text' name='buyerName' class="form-control" data-id="" id="buyerName" required><br>
					Address: <input type='text' name='buyerAddress' class="form-control" id="buyerAddress" required><br>
					Contact Number: <input type='number' name='buyerNumber' class="form-control" id="buyerNumber" minlength="11" required>
					<h2>Payment Method</h2>
					<?php  

						global $conn;
						$sql3="SELECT * FROM payment_methods ";
						$methods= mysqli_query($conn, $sql3);

						// print_r($result);

						foreach ($methods as $method) {
							// echo $method['name'];
							// echo $method['id'];		
					?>


				<?php } ?>
					<select class="paymentmethod" name="paymentmethod" id="paymentmethod">
						<option value="1">Cash On Delivery </option>
						<option value="2">Credit Card</option>
					</select>
					<button type='submit' name='checkout' class="btn  btn-outline-success check-pay" id="checkout">Checkout</button>
					
				<!-- </form>		 -->
			</div>
			</form>
<?php } ?>

	</div> <!-- end of row -->
</div> <!-- end of container -->
<?php } else {
 	echo "error";
} ?>

<?php require 'partials/cart_template.php'; ?>

<script type="text/javascript">
	
// 	 $('#checkout').click ( () => {
// 	 let user = $(#user_id).val();
// 	 let name = $(#name).val();
// 	 let address = $(#address2).val();
// 	 let number = $(#number).val();
// 	 let paymentmethod = $(#paymentmethod).val();
// 	 	$.ajax({
// 	 	    url : "connections/checkout_endpoint.php",
// 	 	    data : {
// 	 	            user : user,
// 	 	            name : name,
// 	 	            address : address,
// 	 	            number : number,
// 	 	            paymentmethod : paymentmethod
// 	 	           }
// 	 	    method : "POST",
// 	 	    succes: function(data){
// 	 	        alert('Payment Received!');
// 	 	    }
// 	 	})
// 	 	window.location.href = "index.php";
// 	 });
	 
        
</script>


