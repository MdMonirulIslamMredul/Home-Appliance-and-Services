<?php 

require_once '../model/model.php';

if (isset($_POST['deleteProduct'])) {


  if (deleteProduct($_POST['id'])) {
    
    echo 'Successfully deleted!!';
    
    header('Location: ../showAllProducts.php');
  }
} else {
    echo 'You are not allowed to access this page.';
}



 ?>