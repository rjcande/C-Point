<?php

//KAPAG NAKAHOST SA INTERNET, ICOMMENT MO YUNG NASA LINE 11 - 14 AT UNCOMMENT ANG LINE 6-9.
// TAPOS KAPAG LOCALHOST(XAMPP), I COMMENT MO YUNG NASA LINE 6-9 AT UNCOMMENT YUNG LINE 11-14  

$host = 'us-cdbr-iron-east-01.cleardb.net';
$username = 'b1ffd6195d976e';
$password = '13065889';
$db = 'heroku_48c865e61f8bda9';

// $host = 'localhost';
// $username = 'root';
// $password = '';
// $db = 'cpoint';

$conn = mysqli_connect($host,$username,$password,$db);
