<?php  
require_once '../model/model.php';
session_start();

if (isset($_POST['update'])) {

	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];

	$data['username'] = $_SESSION['username'];
	

  if (updateUser( $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showUser.php');
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>