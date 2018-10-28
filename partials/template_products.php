<!DOCTYPE html>
<html>
<head>
	<title>Products</title>

  <link rel="stylesheet" type="text/css" href="../assets/style.css">
  <?php require "partials/header.php"; ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>


<?php require 'nav_new.php'; ?>

<div class="container">

<?php
    get_admin_contents();
	getContent();
?>



</div>
</div>







<script type="text/javascript" src="./script.js"></script>

<?php require_once 'footer.php'; ?>

</body>
</html>