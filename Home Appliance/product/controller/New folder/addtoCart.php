<?php  
require_once '../model/model.php';


if (isset($_POST['addtoCart'])) {

 $data['PID'] ='12' ;
$data['ID'] = '10' ;
  


  if (addtoCart($data)) {
  	echo 'Successfully added!!';
  }
} 
else {
	echo 'You are not allowed to access this page.';
}

?>