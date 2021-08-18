<?php  
require_once '../model/model.php';


if (isset($_POST['Submit'])) {


    $data['u_id'] = $_POST['u_id'];
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];
    $data['password'] = $_POST['password'];
    $data['gender'] = $_POST['gender'];
    $data['dob'] = $_POST['dob'];
     $data['Address'] = $_POST['Address'];
    


  if (add($data)) {
  	echo 'Successfully added!!';
  }
}


 else {
	echo 'You are not allowed to access this page.';
}

?>