<?php  
require_once '../model/model.php';
// session_start();

if (isset($_POST['update'])) {

	$data['password'] = $_POST['rtnewpass'];
	

	$data['username'] = $_SESSION['username'];
	

  if (updatePassword( $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showUser.php');
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>