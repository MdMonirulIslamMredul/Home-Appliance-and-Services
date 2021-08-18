<?php include 'Head.php'; ?>
<?php  
session_start();
require_once "model/model.php";

$products = showAllProducts();


    // include "nav.php";

?>



<!DOCTYPE html>
<html>
<head>
	<title>DISPLAY</title>
<style>
table {
  width: 100%
}

table, th, td {
	
  border: 1px solid black;
  padding: 5px;
  border-collapse: collapse;
   
}

</style>
</head>
<body>
<p style="text-align: center;"> <span id="demo"></span> </p>
 <?php

  include "nav.php";

if (isset($_SESSION['name'])) {
  echo "<h1> Welcome ".$_SESSION['name']."</h1>";
  // echo "<a href='product.php'>Product</a><br>";
  // echo "<br><a href='logout.php'>Logout</a><br>";

}

?>


<fieldset style="width: ; align-content: center;">
<legend><b>DISPLAY </b></legend> 

<table>
	<thead>
		<tr>
			<th>PID</th>
			<th>Name</th>
			<th>Model</th>
			<th>Category</th>
			<th>Brand</th>
			<th>Color</th>
			<th>BuyingPrice</th>
			<th>SellingPrice</th>
			<th>Quantity</th>
			<th>Displayable</th>
			<th>Description</th>
			
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>

				<td><?php echo $product['PID'] ?></td>

				<td><a href="showProduct.php?id=<?php echo $product['PID'] ?>"><?php echo $product['Name'] ?></a></td>

				<td><?php echo $product['Model'] ?></td>
				<td><?php echo $product['Category'] ?></td>
				<td><?php echo $product['Brand'] ?></td>
				<td><?php echo $product['Color'] ?></td>
				<td><?php echo $product['BuyingPrice'] ?></td>
				<td><?php echo $product['SellingPrice'] ?></td>
				<td><?php echo $product['Quantity'] ?></td>
				<td><?php echo $product['Displayable'] ?></td>
				<td><?php echo $product['Description'] ?></td>

				<td><a href="editProduct.php?id=<?php echo $product['PID'] ?>">Edit</a>&nbsp
					<a href="showDeleteProduct.php?id=<?php echo $product['PID'] ?>">Delete</a></td>
					
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</fieldset>
<?php include 'foter.php'; ?>
</body>
</html>