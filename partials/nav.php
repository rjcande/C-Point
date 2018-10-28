<header>
    
<!--Navbar-->
  
    <nav class="navbar navbar-expand-md navbar fixed-top" id="topnav">
        <div class="container">


           

            
            <!-- Collapse button -->
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                  
                
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><strong>Home</strong>
                           
                        </a>

                <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Footwear
            
                    </a>


                    <div class="dropdown-menu" id="black-drop" aria-labelledby="navbarDropdown" >
                        <a class="dropdown-item" id="nav" href="index2_user.php" style="color: white;">All</a>

                    <?php 
                    require 'connections/connect.php'; 

                    $sql = "SELECT * FROM categories ";

                    $categories = mysqli_query($conn,$sql);

                    foreach($categories as $category){  ?>
                    
                     <a class="dropdown-item" id="nav" href="index2_user.php?cat=<?= $category['id']; ?>" style="color: white;"><?php echo $category['name']; ?> </a>
                        
                    <?php }  ?>
                    
                     <a class="dropdown-item" id="nav" href="connections/sort.php?p=asc" style="color: white;">Lowest to Highest Price</a>
                     <a class="dropdown-item" id="nav" href="connections/sort.php?p=desc" style="color: white;">Highest to Lowest Price</a>
                    </div>
                </li>


                     <!-- Navbar brand -->
                    <li class="nav-item">
            <a class="navbar-brand" href="index.php" id="logoname"><h2 id="h2m">C-Point</h2></a>
                    </li>


                    <?php if(isset($_SESSION['admin'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index2.php"><strong>Admin</strong>
                           
                        </a>
                    <?php } ?> 

                    <!-- <?php if(isset($_SESSION['user'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index3.php"><strong>About</strong></a>
                    </li>

                    <?php } ?> -->


                    <!-- <li class="nav-item"> -->
                        <!--<a class="nav-link" href="login.php"><strong>Blog</strong></a>-->
                        <!-- <a class="nav-link" onclick="document.getElementById('id01').style.display='block'"><strong>Blog</strong></a>
                        
                    </li>
 -->
                  



                </ul> 
<script>
// Get the modal
let modal1 = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>





<script>
// Get the modal
let modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>






<style>
body {font-family: Arial, Helvetica, sans-serif;}

.dropdown:hover>.dropdown-menu {
  display: block;
}

#black-drop {
    background: #111c06;
}


/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
#btnname {
    background-color: 
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

#btnname:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;

}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container-bottom {
    padding: 16px;
    margin-top: 200px;
}

.container-user {

    padding: 16px;
  
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/*cart*/
#cart {
    width: 120px;
    height: 80px;
    color: white;
    display: block;
    padding-top:30px;
}

/* Modal Content/Box */
.modal-content-register {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%;
    height: 920px; 
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%;
    height: 400px; 
}


/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 70%;

    }
}


</style>
</head>
<body>

<!-- Button to open the modal login form -->

<!--  if(isset($_SESSION['admin'])){ -->
 
<!--  <li class="nav-item">
    <a href="connections/logout_user.php" style="color: white;">Logout</a>
 </li>
 -->


<?php if(isset($_SESSION['user']) || isset($_SESSION['admin']))  {?>
    
 <li class="nav-item">
    <a href="connections/logout_user.php" style="color: white;">Logout</a>
 </li>


 <?php } else { ?>


<li class="nav-item">
    <button onclick="document.getElementById('id01').style.display='block'" id="btnname" class="btn btn-link" type="button" style="color: white; float: left;">Login</button>
</li>


<!-- The Modal login-->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="connections/authenticate.php" method="POST">
    <h2 id="h2m1">C-point</h2>

    <div class="imgcontainer">
      
    </div>

    <div class="container-user">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="loginUsername" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="loginPassword" required>

      <button class="btn btn-primary" type="submit" name="loginBtn" id="loginBtn">Login</button>
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> -->
    </div>

    <!-- <div class="container-bottom" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div> -->
  </form>
</div>





<!-- register -->


<!-- Button to open the modal login form -->
<li class="nav-item">
    <a class="btn btn-link" onclick="document.getElementById('id02').style.display='block'" id="btnname" style="color: white; float: left;">Register</a>
</li>

<?php } ?>    

<!-- cart -->
<li class="nav-item">
    <div class="cart-holder">
    <a href="cart.php"  id="cd-cart-trigger"><i class="fas fa-shopping-cart" id="cart"></i>
    </a>
    </div>
</li>


<script>
function move_navigation($navigation, $MQ) {
   if ( $(window).width() >= $MQ ) {
      $navigation.detach();
      $navigation.appendTo('.cart-holder');
   } else {
      $navigation.detach();
      $navigation.insertAfter('.cart-holder');
   }
}
</script>




<!-- The Modal -->
<div id="id02" class="modal2">
  <span onclick="document.getElementById('id02').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <!-- <form class="modal-content animate" action="./connections/register_endpoint.php" method="POST" id="form1"> -->
  <form class="modal-content-register animate" method="POST" id="form1">
    <h2 id="h2m1">C-point</h2>



    <div class="container-user">

            <div class="form-group">
                <label for="firstName">First Name: </label>
                <input type="text" name="firstName" id="firstName" class="form-control">
                <span></span>
            </div>
            
            <div class="form-group">
                <label for="lastName">Last Name: </label>
                <input type="text" name="lastName" id="lastName" class="form-control">
                <span></span>
            </div>

            <div class="form-group">
                <label for="regusername">Username: </label>
                <input type="text" name="regusername" id="regusername" class="form-control">
                <span></span>
            </div>

            <div class="form-group">
                <label for="contactNum">Contact Number: </label>
                <input type="text" name="contactNum" id="contactNum" class="form-control">
                <span></span>
            </div>
            
            <div class="form-group"">

                <label for="address">Address: </label>
                <input type="text" name="address" id="address" class="form-control">
                <span></span>
            </div>
           
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" class="form-control">
                <span></span>
            </div>

            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" name="regpassword" id="regpassword" class="form-control">
                <span></span>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password: </label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                <span></span>
            </div>
      
      <button type="button" class="btn btn-primary"  onclick="return false;" id="registerBtn">Register</button>

    </div>

   <!--  <div class="container-bottom" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div> -->
  </form>
</div>



<?php
//}
?>

<script type="text/javascript">
       
        $('#registerBtn').click( () => {

            const usernameREG = $('#regusername').val();
            const username = $('#regusername').val();
            const address = $('#address').val();
            const password = $('#regpassword').val();
            const firstName = $('#firstName').val();
            const lastName = $('#lastName').val();
            const contactNum = $('#contactNum').val();
            const confirmPassword = $('#confirm_password').val();
            const email = $('#email').val()
            //let users = JSON.parse('<?php //echo json_encode($users); ?>'); //to read $users into js lang.
            let errorFlag = false; //to define the value of the conditions 
            if(username.length == 0) { //username field is empty
                $('#regusername').next().css('color', 'red');
                $('#regusername').next().html('this field is required');
                errorFlag = true;       
            } else {
                $('#regusername').next().css('color', 'green');
                $('#regusername').next().html(''); 
                $.ajax({
                url : './connections/check_username.php',
                method : 'post',
                data: {'regusername' : usernameREG, 'email': email, 'password': password, 'address':address, 'firstName':firstName, 'lastName':lastName,'contactNum':contactNum},
            }).done( data => {
                alert(data);
            });

            }
            
            if(password.length == 0) {
                $('#regpassword').next().css('color', 'red');
                $('#regpassword').next().html('password is required');
                errorFlag = true;
            } else {
                $('#regpassword').next().html('');
            }
                

            if(password !== confirmPassword) {
                $('#confirm_password').next().css('color', 'red');
                $('#confirm_password').next().html('passwords did not match');
                errorFlag = true;

            // } else if (password.length == 0) {
            //  errorFlag = true;
                
            } else {
                // to (blank) satisfy the password did not match condition
                $('#confirm_password').next().html('');
            }
            
            // if errors in other conditions are true, this line would execute
            if(errorFlag == false){
                $('#form1').submit();
            }
        });

    </script>
    

                   
            
        </div> <!-- Collapsible content closing -->
    </nav> <!-- end nav -->

</header> 
<!--Main Navigation-->
<br>
