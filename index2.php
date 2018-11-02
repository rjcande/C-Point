<?php 
require 'connections/connect.php';
//////////////////////////////////
session_start();

if(!isset($_SESSION['role_id']) || ($_SESSION['role_id'] != 1)){///
  header('location: ../index.php');///
}///
//////////////////////////////////

function getTitle() {
  echo "Menu";
}

function getContent() {

  global $conn;
  $sql = "SELECT * FROM categories";
  $categories = mysqli_query($conn,$sql);

  $filter = isset($_GET['cart']) ? "WHERE category_id = ".$_GET['cart'] : '' ;
  $filter .= isset($_SESSION['sort']) ? $_SESSION['sort'] : '' ;
  $sql = "SELECT * FROM items $filter ORDER BY id ASC";
  $items = mysqli_query($conn, $sql);
?>
  <!--Main layout-->
<main class="mt-5">
    <div class="container">

        <!--Section: Best Features-->
        <section id="training-programs" class="text-center">

    <!-- Heading -->
    <h2 class="mb-5 font-weight-bold" id="dress-shoes"> All
      
     </h2>

      <div class="row d-flex justify-content-left mb-4"> <!--Grid row-->

          <div class="col-md-4">  <!--Grid column end-->

          </div> <!--Grid column end-->
          
      </div> <!--Grid row end-->

  <div class="row">
      
     

  <?php
 

    foreach ($items as $item) {
      extract($item); ?>

      <div class="card-container col-4">
        <div class="item-box">
          <img class="card-img-top" src="<?= $image ?>" alt="Card image">
          <div class="card-body text-center">
            <h4 class="card-title" style="font-size: 18px; color: #474b51;"><?= $name ?></h4>
            <h4 class="card-title" style="font-size: 18px; color: #474b51;">₱ <?= $price ?></h4>
            <p class="card-text"><?= $description ?></p>


            <form method="POST" action="connections/remove_item.php">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
             <button type="button" class="removeBtn btn btn-link" style="width: 40%; color: red;">Remove Item</button>
             </form>

             <script>
                $('.removeBtn').click( function() {
                  $(this).closest('form').submit();
                });
               
             </script>

              <!-- <button type="button" data-id="<?= $id ?>" class="btn btn-link editItemBtn" style="width: 40%; color: green;">Edit Item</button> -->
              <span id="successMsg"></span>
            </form>
          </div>
        </div>
      </div>
      <?php
    
  
}
?>

  </div>

<?php } 


function get_admin_contents() { ?>
  <!-- Button to Open the Modal -->
  <!--<button type="button" class="btn btn-primary" data-toggle="modal-2" data-target="#addItemForm" id="buttonmodal">-->
  <!--  Add New Item-->
  <!--</button>-->
  
  

  <!-- The Modal -->
  <div class="modal-2" id="addItemForm">
    <div class="modal-2 dialog modal-dialog-centered">
      <div class="modal-2-content">
      
        
        <br>
        <br>
        <br>

        <div class="card" style="-webkit-box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.50">
         <h2 class="mb-5 font-weight-bold" id="dress-shoes"> Admin
      
     </h2>

        <!-- Modal Header -->

        <div class="modal-2-header">
          <h5 class="modal-2-title" style="text-align: center;">Add New Item</h5>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="connections/add_products.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
              <label for="name" class="col-3">Name:</label>
              <input type="text" class="form-control col-8" id="name" name="name">
            </div>
            <div class="form-group row">
              <label for="description" class="col-4">Description:</label>
              <textarea class="form-control col-7" rows="5" id="description" name="description"></textarea>
            </div>
            <div class="form-group row">
              <label for="price" class="col-3">Price:</label>
              <input type="number" step="0.50" min="0" class="form-control col-8" id="price" name="price">
            </div>
            <div class="form-group row">
              <label for="image" class="col-3">Image:</label>
              <input type="file" class="form-control col-8" id="image" name="image">
            </div>
            <div class="form-group row">
              <label for="categories" class="col-4">Category:</label>
              <select class="form-control col-7" style="height:30px" id="category" name="category">
                
                <?php 
                  global $conn;
                  $sql = "SELECT * from categories";
                  $categories = mysqli_query($conn,$sql);
                  

                  foreach($categories as $category) {
                    extract($category); ?>

                  <option value="<?= $id ?>"><?= $name ?></option>
                  <?php
                  }
                  ?>
            
              </select>
                
            </div>

            <button type="submit" class="btn btn-warning"><strong>Add Item</strong></button>
          </form>
        </div>

       

      </div>
    </div>
  </div>
  <h2 class="mb-5 font-weight-bold" id="dress-shoes"> Edit Items
      
     </h2>
  
  <table>
      <tr>
          <th>Name:</th>
          <th></th>
          <th>Description</th>
          <th>Price:</th>
          <th>Image:</th>
          <th>Category:</th>
      </tr>
      <?php
      global $conn;
      $sql = "SELECT * FROM items";
      $items = mysqli_query($conn,$sql); 
      
      foreach($items as $item){ 
          extract($item); ?>
          <form action="connections/admin_update.php" method="POST" enctype="multipart/form-data">
          <tr>
              <td><input type="text" value="<?php echo $item['id']; ?>" name="item-id"></td>
              <td><input type="text" value="<?php echo $name;?>" name="name"></td>
              <td><input type="text" value="<?php echo $description;?>" name="description"></td>
              <td><input type="text" value="<?php echo $price;?>" name="price"></td>
              <td><input type="file" value="<?php echo $image;?>" name="image"></td>
              <td>
                  <?php 
                    global $conn;
                    $sql = "SELECT * FROM categories";
                    $categories = mysqli_query($conn,$sql);
                    ?>
                    <td>
                        <select name="category_id">
                    <?php
                    foreach($categories as $category) {
                        extract($category);?>
                        <option value="<?php echo $id?>"><?php echo $name ?></option>        
                    <?php } ?>
                    </select>
                    </td>
                 
              </td>
              <td>
                  <button type="submit" class="btn btn-success">Edit</button>
              </td>
          </tr>
        </form> 
      <?php } ?>
  </table>

<br>
<br>
<br>
<h2 class="mb-5 font-weight-bold" id="dress-shoes"> Transactions</h2>
<?php

  // $sql = "SELECT * FROM orders";
  $sqlOne ="SELECT * FROM order_details AS od 
            JOIN items i ON od.item_id = i.id 
            JOIN orders o ON od.order_id = o.id";
  $results = mysqli_query($conn,$sqlOne);
  
  // $sql = "SELECT * FROM order_details AS od 
  //         JOIN items i ON od.item_id = i.id 
  //         JOIN orders o ON od.order_id = o.id";
  // $resultstwos = mysqli_query($conn,$sql);
  
echo'<table class="table">';
echo'<th>';
 echo '<thead>';
    echo'<tr>';
      echo'<th scope="col">Name</th>';
      echo'<th scope="col">Address</th>';
      echo'<th scope="col">Contact Number</th>';
      echo'<th scope="col">Item Name</th>';
      echo'<th scope="col">Quantity</th>';
      echo'<th scope="col">Transaction Code</th>';
    echo'</tr>';
  echo'</thead>';
  foreach($results as $result) {
    extract($result);
    echo"<tbody>";
    echo"<tr>";
    echo "<td>$buyer_name</td>";
    echo "<td>$address</td>";
    echo "<td>$contact_number</td>";
    echo "<td>$name</td>";
    echo "<td>$quantity</td>";
    echo "<td>$transaction_code</td>";
    echo "</tr>";
    echo"</tbody>";
  }
echo "</table>";

?>
  
<?php }


require 'partials/template_products.php';

?>

<script>

// $('.editItemBtn').click(function(){
//     let id = $(this).data('id');
    
//     $.ajax ({
//         url : 'connections/admin_edit.php',
//         method : 'POST',
//         data : {id : id},
        
//     }).done(data=>{
//         $('#modal-body').html(data);
//         $('#adminEdit').modal('show');
//     })
    
    
// })
    
// </script>
