<?php 

session_start();

// unset($_SESSION['Name']);
session_destroy();//destroy all

header("location: ..\Login.php") ;
 ?>