<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php getTitle(); ?></title>
    <meta charset="utf-8">

    <?php require "partials/header.php"; ?>
   

</head>
<body>

     <?php require 'nav.php'; ?>
  

     <?php 
     
     getContent(); 
     
     ?>

     


<script type="text/javascript" src="./script.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>

     <?php require_once 'footer.php'; ?>


</body>
</html>