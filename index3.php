<?php 
require "partials/template.php";

function getTitle(){
  echo 'C-point';
}
?>


<?php 

function getContent()
{
?>

    <!--Mask-->
      
    <div id="intro" class="view col-md-12">

          <div class="container-fluid d-flex align-items-center justify-content-center">

                <div class="row d-flex justify-content-center text-center">                   

                <!-- Heading -->
              <h2 class="display-4 font-weight-bold white-text pt-5 mb-2" id="header2"></h2>

               <!-- Divider -->
              <!--  <hr class="hr-light"> -->

               <!-- Description -->
                <div class="moving-letters">
                <h1 class="ml5">
                  <span class="text-wrapper">
                    <span class="line line1"></span>
                    <span class="letters letters-left">C-Point</span>
                    
                   
                    <span class="line line2"></span>
                  </span>
                  <br>

                  <div>
                    <p class="letters1 letters-right" id="below">MARIKINA</p>
                  </div>            
                </h1>
                </div> <!-- col md closing   -->    

          </div> <!-- row dflex closing -->

        </div> <!-- container-fluid closing -->

    </div> <!-- intro and view closing -->
    <!-- Mask -->
<br>
<br>

<hr>


<!--Main layout-->
<main>


   <main class="mt-5">
    <div class="container">

      <!--Section: Best Features-->
        <section id="training-programs">  

    <!-- Heading -->
    <div class="col-12">

<div class="row">
  <div class="col-6">
    <div class="hovereffect">
      <img class="img-responsive" src="assets/images/shoe6.jpg" alt="" style=" width: 565px; height: 350px;">
        <div class="overlay">
            
          <p>
            COLLECTION
          </p>
        </div>
    </div>
  </div>
  <div class="col-6">
    <div class="hovereffect">
       <img class="img-responsive" src="assets/images/shoe10.jpg" alt="" style=" width: 565px; height: 350px;">
        <div class="overlay">
            
          <p>
            FORMAL
          </p>
        </div>
    </div>
  </div>
</div>  <!-- end row -->

     
   <main class="mt-5">
 
<div class="row">
  <div class="col-12" id="black">
    <div class="hovereffect">
      <img class="img-responsive" src="assets/images/collection-main.jpg" alt="" style=" width: 1200px; height: 300px;">
      <div class="overlay">
          
        <p>
           BESPOKE
        </p>
      </div>
    </div>
  </div>
</div>  
     </div>
  </div> <!-- container end -->
  </div>


</div><!-- end main pic -->
</div>
</div>





<div class="row">
<div class="col-12" id="main-pic-2">
  <h2 id="main-pic-text">ABOUT OUR STORE</h2>
  <!-- <img class="anatomy" src="assets/images/shoe-blueprint.png"> -->
</div>
</div>




</main>
<!--Main layout-->


<script>
ml.timelines["ml5"] = anime.timeline({loop: true})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 700
  }).add({
    targets: '.ml5 .line',
    duration: 600,
    easing: "easeOutExpo",
    translateY: function(e, i, l) {
      var offset = -0.625 + 0.625*2*i;
      return offset + "em";
    }
  }).add({
    targets: '.ml5 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 3000
  });
</script>



<script>
// Wrap every letter in a span
$('.ml12').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});
ml.timelines["ml12"] = anime.timeline({loop: true})
  .add({
    targets: '.ml12 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: function(el, i) {
      return 500 + 30 * i;
    }
  }).add({
    targets: '.ml12 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: function(el, i) {
      return 100 + 30 * i;
    }
  });
</script>

<?php } ?>




  
