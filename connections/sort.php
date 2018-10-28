<?php
session_start();

if(isset($_GET['p'])) {
	if($_GET['p'] == 'asc'){
		$_SESSION['sort'] = ' ORDER BY price ASC ';
	}
	else {
		$_SESSION['sort'] = ' ORDER BY price DESC ';
	}
}
header('location: ../index2_user.php');
?>