<?php
error_reporting(0);
require 'connections/connect.php';

function getTitle() {
  echo "Menu";
}

function getContent() { 
  global $conn;
  $sql = "SELECT * FROM categories";
  $categories = mysqli_query($conn,$sql);

  $filter = isset($_GET['cat']) ? "WHERE category_id = ".$_GET['cat'] : '' ;
  print_r($filter);
  $filter .= isset($_SESSION['sort']) ? $_SESSION['sort'] : '' ;
  $sql = "SELECT * FROM items $filter";


  $items = mysqli_query($conn, $sql);
  print_r($items);
?>
<br>
<br>
  <!--Main layout-->
<main class="mt-5">
    <div class="container">

        <!--Section: Best Features-->
        <section id="training-programs" class="text-center">

    <!-- Heading -->
    <?php
    if($_GET['cat'] == 1){
      echo "<h2 class='mb-5 font-weight-bold' id='dress-shoes'> Original Dress Shoes</h2>";
    }
    else if($_GET['cat'] == 2){
      echo "<h2 class='mb-5 font-weight-bold' id='dress-shoes'> Original Casual Shoes</h2>";
    }
    else if($_GET['cat'] == 3){
      echo "<h2 class='mb-5 font-weight-bold' id='dress-shoes'> Original Black Shoes</h2>";
    }
    else{
      echo "<h2 class='mb-5 font-weight-bold' id='dress-shoes'> Originals</h2>";
    }
    ?>
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


            
            <input type="number" min="1" id="ItemQuantity<?= $id ?>" name="quantity" placeholder="Choose Quantity">
              <button onclick="addToCart(<?php echo $id; ?>)" type="button" class="btn btn-link" style="width: 40%; color: #606266;">Add To Cart</button>


              
              <span id="successMsg"></span>
            </form>
          </div>
        </div>
      </div>
  <?php } ?>
  </div>

<?php } 


function get_admin_contents() { ?>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal-2" data-target="#addItemForm" id="buttonmodal">
    Add New Item
  </button>
  
  

 
<?php }


require 'partials/template.php';

?>
