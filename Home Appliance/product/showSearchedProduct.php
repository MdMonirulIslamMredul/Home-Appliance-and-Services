
<!DOCTYPE html>
<html>
<head>
	<title>Show Searched Product</title>
	<style>
  
		table,td,th{
			border:1px solid black;
			padding: 10px;
  			border-collapse: collapse;
		}
	</style>
</head>
<body>

Show Searched Result by : <?php echo $_POST['Product_name']; ?>

<table>
	<thead>
		<tr>
			<th>Product_id</th>
			<th>Product_name</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($allSearchedProducts as $i => $product): ?>
			<tr>
				<td><a href="../showProduct.php?id=<?php echo $product['PID'] ?>"><?php echo $product['PID'] ?></a></td>
				<td><?php echo $product['Name'] ?></td>
				<td><a href="../editProduct.php?id=<?php echo $product['PID'] ?>">Edit</a>&nbsp
					<a href="../showDeleteProduct.php?id=<?php echo $product['PID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>


