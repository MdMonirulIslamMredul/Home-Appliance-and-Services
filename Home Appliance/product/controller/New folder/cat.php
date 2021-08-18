<?php

require_once '../model/model.php';


    	
    	$allSearchedProducts = searchProduct($_POST['category']);
    	require_once '../categoryProducts.php';

   

?>
