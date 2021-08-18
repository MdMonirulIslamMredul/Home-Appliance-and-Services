 <ul>
        <li><a href="../addProduct.php"> Add Product</a></li>
        <li><a href="../showAllProducts.php"> Show all Products</a></li>
        <li><a href="../searchProduct.php"> Search Products</a></li>
    </ul>



<?php

require_once '../model/model.php';

if (isset($_POST['findProduct'])) {
	
		// echo $_POST['Product_name'];

    try {
    	
    	$allSearchedProducts = searchProduct($_POST['Product_name']);
    	require_once '../showSearchedProduct.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

?>
