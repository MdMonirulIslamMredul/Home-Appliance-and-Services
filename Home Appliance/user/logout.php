<?php 

session_start();

if (isset($_SESSION['name'])) {
	session_destroy();
	header("location:Login_final.php");
	
}

else{
	header("location:Login_final.php");
}

 ?>