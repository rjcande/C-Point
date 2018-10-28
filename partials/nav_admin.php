<?php
    require("connections/connect.php");
    session_start();
?>
<header>
    
<!--Navbar-->
  
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="topnav">
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
                  

                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><strong>Home</strong>
                           
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong>Categories</strong>

                        </a>
                    </li>

                     <!-- Navbar brand -->
                    <li class="nav-item">
            <a class="navbar-brand" href="index.php" id="logoname"><h2 id="h2m">C-Point</h2></a>
                    </li>

<!--                     <li class="nav-item">
                        <a class="nav-link" href="index3.php"><strong>About</strong></a>
                    </li>
 -->

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><strong>Profile</strong></a>
                    </li>

                  



                </ul> 
<script>
// Get the modal
let modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
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
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 2000px; /* Full height */
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
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%;
    height: 600px; 
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

#id02 {
    height: 1000px;
}
</style>
</head>
<body>


<li class="nav-item">
    <a style="color: #edae50;">Welcome, admin</a>
</li>
<span class="none">"        "</span>
<span class="none"> </span>
<li class="nov">
    <a class="logout" id="logout" name="logout" href="index.php" style="color: white;">Logout</a>
</li>

<?php 
   
    if(isset($_SESSION['admin'])) {
      echo "<h1>Hello</h1> ". $_SESSION['admin']."<br>";
     ?>


<!-- Button to open the modal login form -->
<li class="nav-item">
    <button onclick="document.getElementById('id01').style.display='block'" id="btnname" class="btn btn-link" type="button" style="color: white; float: left;">Profile</button>
</li>


<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="connections/authenticate.php" method="POST">
    <h2 id="h2m1">C-Point</h2>

    <div class="imgcontainer">
      
    </div>

    <div class="container-user">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button class="btn btn-primary" type="submit" name="loginBtn">Hello</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <!-- <div class="container-bottom" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div> -->
  </form>
</div>

<?php
}
?>





<script type="text/javascript">

        
        $('#registerBtn').click( () => {

            const usernameREG = $('#regusername').val();

            $.ajax({
                url : '../connections/check_username.php',
                method : 'post',
                data: {'regusername' : usernameREG},
            }).done( data => {
                alert(data);
            });


            const username = $('#regusername').val();
            const password = $('#regpassword').val();
            const confirmPassword = $('#confirm_password').val();
            //let users = JSON.parse('<?php //echo json_encode($users); ?>'); //to read $users into js lang.
            let errorFlag = false; //to define the value of the conditions 
            if(username.length == 0) { //username field is empty
                $('#regusername').next().css('color', 'red');
                $('#regusername').next().html('this field is required');
                errorFlag = true;       
            } else {
                $('#regusername').next().css('color', 'green');
                $('#regusername').next().html(''); 
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




