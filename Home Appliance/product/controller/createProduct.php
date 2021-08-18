<?php  
require_once '../model/model.php';


if (isset($_POST['createProduct'])) {
	$data['name'] = $_POST['name'];
	
	$data['Model'] = $_POST['Model'];
	$data['Category'] = $_POST['Category'];
	$data['Brand'] = $_POST['Brand'];
	$data['Color'] = $_POST['Color'];

	$data['BuyingPrice'] = $_POST['BuyingPrice'];
	$data['SellingPrice'] = $_POST['SellingPrice'];

	$data['Quantity'] = $_POST['Quantity'];


	if(isset($_POST['Displayable']))
	{
		$data['Displayable'] = $_POST['Displayable'];
	}
	else{
		$data['Displayable'] = "No";
	}


	$data['Description'] = $_POST['Description'];
	


  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
} 
else {
	echo 'You are not allowed to access this page.';
}

?>