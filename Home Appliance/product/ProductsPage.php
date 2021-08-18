<?php include 'Head.php'; ?>
<?php  

require_once "model/model.php";

$products = showAllProducts();


?>
<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<link rel="stylesheet" type="text/css" href="css.css" />
</head>
<body>



<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul> 
      <?php include 'categoryNav.php' ?>
    </ul>
</div>
 


<div class="col-9 col-s-12">

<div class="absoluteSe">
 <div id="demo">
</div>
</div>

<div class="small-container">
  <h2 style="text-align: center;">All Products</h2>
  <div class="row">
<?php foreach ($products as $i => $product): ?>

    <div class="col-4">
     

       <p> <?php echo $product['Category'] ?> </p>
       <h4> <a href="ProductSingleView.php?id=<?php echo $product['PID'] ?>"><?php echo $product['Name'] ?></a> </h4>

       <a href="ProductSingleView.php?id=<?php echo $product['PID'] ?>">

<?php 
$name=$product['Name'] ;
$path="pictures/".$name.".png";
// echo $path;
?>
       <img style="height: 300px; width: 325px;" src="<?php echo $path ?>" >

       </a>

       <p> ৳  
        <?php 
        $price= $product['SellingPrice'] ;
        echo number_format("$price")."<br>";
        ?>
        </p>

</div>
<?php endforeach; ?>


   </div>
 </div>
</div>
</div>









<?php
include 'foter.php';
?>




</body>
</html>