<?php 

require_once 'controller/ProductInfo.php';
$product = fetchProduct($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SHOW DELETE PRODUCT</title>
</head>
<body>
<fieldset style="width:20%; align-content: center;">
<legend ><b>DELETE PRODUCT</b></legend> 


 <form action="controller/deleteProduct.php" method="POST" enctype="multipart/form-data">
<br>
  <label for="name">Name:</label> <?php echo $product['Name'] ?>
  <br>
  <label for="surname">Buying Price:</label><?php echo $product['BuyingPrice'] ?>
  <br>
  <label for="SellingPrice">Selling Price:</label><?php echo $product['SellingPrice'] ?>
  <br>
  <label for="Displayable">Displayable:</label><?php echo $product['Displayable'] ?>
  <br>
  
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <br><br>
  <input type="submit" name = "deleteProduct" value="Delete">


 
</form> 
</fieldset>

</body>
</html>

