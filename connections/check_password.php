<?php
    require('connections/connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn) <= 0){
        header('Content-type: application/json');
        echo json_encode($result);
    }
?>