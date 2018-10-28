<?php

session_start()

?>




<?php



function get_admin_contents(){  ?>


	<div class="container">
		
					<h1>Product Image and Description</h1>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categories
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="../controllers/sunglasses_endpoint.php">Black Shoes</a>
    <a class="dropdown-item" href="../controllers/eyeglasses_endpoint.php">Casual Shoes</a>
    <a class="dropdown-item" href="../controllers/eyeglasses_endpoint.php">Dress Shoes</a>
    <a class="dropdown-item" href="#">All</a>
  </div>
</div>


					<?php


						require 'connections/connect.php';

						
                    $queryItems = "SELECT * FROM items";
					$items = mysqli_query($conn,$queryItems);



					foreach($items as $item):

						extract($item);

					?>

					<div class="wrap">

					<img src="../<?php echo $image;   ?>"><br>
					<h2><?php echo $name;   ?></h2><br>
					<strong>Php<?php echo $price;   ?></strong>
					<p><?php echo $description;  ?></p>

					<form method="POST" action="index2.php?id=<?php echo $id  ?>">
						<label>Quantity:</label>
						<input type="number" name="quantity">

					<button class="btn btn-warning">Add to Cart</button>
					</form>

					</div>


				<?php    endforeach;    ?>

				
	</div>






<?php

}

?>

<?php 
require 'partials/template_products.php'; ?>