<?php

require '../partials/template_products.php';


function getContents(){  ?>


	<div class="container">
		
					<h1>Product Image and Description</h1>

					<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categories
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Sunglasses</a>
    <a class="dropdown-item" href="shoes_endpoint.php">Eyeglasses</a>
    <a class="dropdown-item" href="../partials/product_list.php">All</a>
  </div>
</div>


					<?php


						require '../controllers/connect.php';

						
                    $queryItems = "SELECT * FROM items WHERE category_id=1";
					$items = mysqli_query($conn,$queryItems);


					foreach($items as $item):

						extract($item);

					?>

					<div class="wrap">

					<img src="../<?php echo $image;   ?>"><br>
					<h2><?php echo $name;   ?></h2><br>
					<strong>Php<?php echo $price;   ?></strong>
					<p><?php echo $description;  ?></p>
					<form method="POST" action="add_to_cart.php?id=<?php echo $id  ?>">
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