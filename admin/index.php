
	<div class="row">
		<div class="col-md-4">
			<h2>Add Item</h2>
			<form action="../connections/add_products.php" method="POST" enctype="form-data">
				<div class="form-group">
					<label>Product Name</label>
					<input type="text" name="prodName" id="prodName">
				</div>

				<div class="form-group">
					<label>Product Price</label>
					<input type="text" name="prodPrice" id="prodPrice">
				</div>

				<div class="form-group">
					<label>Product Description</label>
					<input type="text" name="prodDesc" id="prodDesc">
				</div>

				<div class="form-group">
					<label>Product Category</label>
					<input type="text" name="prodCategory" id="prodCategory">
				</div>

				<div class="form-group">
					<label>Product Image</label>
					<input type="file" name="prodImage" id="prodImage">
				</div>

				<div class="form-group">
					<button type="submit" id="saveButton">Save</button>
				</div>


			</form>
		</div>

		<div class="col-md-8">
			<h2>Product List</h2>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Product Name:</th>
							<th>Price</th>
							<th>Category</th>
							<th>Description</th>
							<th>Image</th>
							<th>Action</th> <!--Edit/delete -->
							
						</tr>
					</thead>
					<tbody>
						<?php
						require '../connections/connect.php';
							$sql = "SELECT * FROM items";
							$items = mysqli_query($conn, $sql);

							foreach ($items as $item) {
								extract($item);
						?>
						<tr>
							<td><?php echo $name ?></td>
							<td><?php echo $price ?></td>
							<td>
								<?php
								$category = "SELECT * FROM categories WHERE id = '$category_id'";
								$categories = mysqli_query($conn, $category);
								foreach($categories as $category){
									extract($category);
									echo $name;
								}
								?>
							</td>
							<td><?php echo $category_id ?></td>
							<td><?php echo $description ?></td>
							<td><?php echo $image ?></td>
							<td>
								<a href="">Edit</a>

							</td>
						</tr>
						<?php	
						} 
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</div>
