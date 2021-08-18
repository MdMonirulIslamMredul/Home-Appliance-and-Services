<?php  
require_once '../model/model.php';


if (isset($_POST['Submit'])) {



    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];;
    $data['password'] = $_POST['password'];
    $data['gender'] = $_POST['gender'];
    $data['dob'] = $_POST['dob'];
    
    


  if (addUser($data)) {
  	echo 'Successfully added!!';
  }
}


 else {
	echo 'You are not allowed to access this page.';
}

?>