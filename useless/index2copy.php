<?php 
function getTitle(){
  echo 'Footwear';
}
?>


<?php 

function getContent()
{
?>

<?php
function get_content() { 
  global $conn;
  $sql = "SELECT * FROM categories";
  $categories = mysqli_query($conn,$sql);

  $filter = isset($_GET['cat']) ? "WHERE category_id = ".$_GET['cat'] : '' ;
  $filter .= isset($_SESSION['sort']) ? $_SESSION['sort'] : '' ;
  $sql = "SELECT * FROM items $filter";
  $items = mysqli_query($conn, $sql);
?>

<br>
<br>
<br>



    
<!--Main layout-->
<main class="mt-5">
    <div class="container">

        <!--Section: Best Features-->
        <section id="training-programs" class="text-center">

    <!-- Heading -->
    <h2 class="mb-5 font-weight-bold" id="dress-shoes"> Dress Shoes
      
     </h2>

      <div class="row d-flex justify-content-left mb-4"> <!--Grid row-->

          
          <div class="col-md-4">  <!--Grid column end-->

          </div> <!--Grid column end-->
          

      </div> <!--Grid row end-->






      <!--Grid row-->
      <div class="row">
        <?php
          foreach ($items as $item) {
          extract($item); ?>

          
          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/brown7.png" href="#" style="width: 340px; height: 300px;">
              
              <h5 class="headtext">Cabaco</h5>
              <p class="card-text">₱3,550.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/brown9.png" href="#" style="width: 350px; height: 300px;"">
              
              <h5 class="headtext">Castillo ll</h5>
              <p class="card-text">₱5,850.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
          

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/brown8.png" href="#" style="width: 317px; height: 300px;">
              
              <h5 class="headtext">Dela Paz ll</h5>
              <p class="card-text">₱3,920.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
          <?php } ?>
      </div> <!-- row end -->

      <!--Grid row-->
      <div class="row">

          
          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/brown20.png" href="#" style="width: 340px; height: 300px;">
              
              <h5 class="headtext">Belfast</h5>
              <p class="card-text">₱5,450.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/brown21.png" href="#" style="width: 340px; height: 300px;"">
              
              <h5 class="headtext">Dionigo</h5>
              <p class="card-text">₱4,110.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
          

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/brown-23.png" href="#" style="width: 316px; height: 300px;">
              
              <h5 class="headtext">Herlof</h5>
              <p class="card-text">₱3,750.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
      </div> <!-- row end -->



<br>
<br>
<hr>

<!--Main layout-->
<main class="mt-5">
    <div class="container">

        <!--Section: Best Features-->
        <section id="training-programs" class="text-center">

    <!-- Heading -->
    <h2 class="mb-5 font-weight-bold" id="casual-shoes"> Casual Shoes
      
     </h2>

      <div class="row d-flex justify-content-left mb-4"> <!--Grid row-->

          
          <div class="col-md-4">  <!--Grid column end-->

          </div> <!--Grid column end-->
          

      </div> <!--Grid row end-->
      <br>






      <!--Grid row-->
      <div class="row">

          
          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/brown3.png" href="#" style="width: 330px; height: 280px;">
              
              <h5 class="headtext">Apollo-13</h5>
              <p class="card-text">₱3,550.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/brown2.png" href="#" style="width: 316px; height: 280px;"">
              
              <h5 class="headtext">Apollo-12</h5>
              <p class="card-text">₱3,850.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
          

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/brown-boots1.png" href="#" style="width: 317px; height: 280px;">
              
              <h5 class="headtext">Apollo-11</h5>
              <p class="card-text">₱4,220.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
      </div> <!-- row end -->

      <!--Grid row-->
      <div class="row">

          
          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/brown-cas1.png" href="#" style="width: 317px; height: 300px;">
              
              <h5 class="headtext">Pat-dark</h5>
              <p class="card-text">₱3,410.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/brown-cas2.png" href="#" style="width: 317px; height: 300px;"">
              
              <h5 class="headtext">Pat-light</h5>
              <p class="card-text">₱3,410.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
          

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/brown-cas3.png" href="#" style="width: 316px; height: 300px;">
              
              <h5 class="headtext">Benjano</h5>
              <p class="card-text">₱3,750.00</p>
              
            </div> <!-- end card body -->


       
            
          </div> <!-- grid column end -->
      </div> <!-- row end -->
       <hr>
      <br>
       <hr>
      <br>
    


      <!--Main layout-->
<main class="mt-5">
    <div class="container">

        <!--Section: Best Features-->
        <section id="training-programs" class="text-center">

    <!-- Heading -->
    <h2 class="mb-5 font-weight-bold" id="black-shoes"> Black Dress Shoes
      
     </h2>

      <div class="row d-flex justify-content-left mb-4"> <!--Grid row-->

          
          <div class="col-md-4">  <!--Grid column end-->

          </div> <!--Grid column end-->
          

      </div> <!--Grid row end-->
      <br>
     






      <!--Grid row-->
      <div class="row">

          
          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/black11.png" href="#" style="width: 315px; height: 280px;">
              
              <h5 class="headtext">Classico</h5>
              <p class="card-text">₱3,550.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/black13.png" href="#" style="width: 310px; height: 280px;"">
              
              <h5 class="headtext">Lawrence</h5>
              <p class="card-text">₱4,350.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
          

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/black10.png" href="#" style="width: 317px; height: 280px;">
              
              <h5 class="headtext">Belfast</h5>
              <p class="card-text">₱5,220.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
      </div> <!-- row end -->




      <!--Grid row-->
      <div class="row">

          
          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/black12.png" href="#" style="width: 315px; height: 280px;">
              
              <h5 class="headtext">Belfast</h5>
              <p class="card-text">₱3,550.00</p>
              
            </div> <!-- end card body -->



        
            
          </div> <!-- grid column end -->

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/black14.png" href="#" style="width: 310px; height: 280px;"">
              
              <h5 class="headtext">Otavio</h5>
              <p class="card-text">₱4,350.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
          

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/black24.png" href="#" style="width: 317px; height: 280px;">
              
              <h5 class="headtext">Estabrook</h5>
              <p class="card-text">₱5,220.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
      </div> <!-- row end -->
    </section>
  </div>
  <hr>

  <!--Main layout-->
<main class="mt-5">
    <div class="container">

        <!--Section: Best Features-->
        <section id="training-programs" class="text-center">

    <!-- Heading -->
    <h2 class="mb-5 font-weight-bold" id="casual-shoes"> Shoe Essentials
      
     </h2>

      <div class="row d-flex justify-content-left mb-4"> <!--Grid row-->

          
          <div class="col-md-4">  <!--Grid column end-->

          </div> <!--Grid column end-->
          

      </div> <!--Grid row end-->
      <br>



    <!--Grid row-->
      <div class="row">

          
          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/cleaner1.png" href="#" style="width: 330px; height: 280px;">
              
              <h5 class="headtext">Leather Protector</h5>
              <p class="card-text">₱450.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/cleaner2.png" href="#" style="width: 316px; height: 280px;"">
              
              <h5 class="headtext">Shine Sponge</h5>
              <p class="card-text">₱380.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
          

          <div class="col-sm-4 mb-1" id="item1"> <!--Grid column-->

            
            <div class="card-body">
              <img src="assets/images/cleaner3.png" href="#" style="width: 317px; height: 280px;">
              
              <h5 class="headtext">Travel Shine Kit</h5>
              <p class="card-text">₱849.00</p>
              
            </div> <!-- end card body -->


        
            
          </div> <!-- grid column end -->
      </div> <!-- row end -->

     




</div>
</div>
</div>
</div>
</div>
</main>
<!--Main layout-->
<br>
<br>




<?php } ?>

<?php require_once "partials/template.php"; ?>




