<?php include 'Head.php'; ?>

<?php  
require_once 'controller/ProductInfo.php';

$product = fetchProduct($_GET['id']);





?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Single View</title>
	<link rel="stylesheet" type="text/css" href="css.css" />
	<style>

 
</style>
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
</div>



<div class="col-6 col-s-6">
	
       <p>
       <a href="ProductsPage.php" style="font-size :20px"> Back to Products page </a>
       </p>

       <h4> <a href="ProductSingleView.php?id=<?php echo $product['PID'] ?>"><?php echo $product['Name'] ?></a> </h4>
<?php 
$name=$product['Name'] ;
$path="pictures/".$name.".png";
// echo $path;
?>

       <a href="ProductSingleView.php?id=<?php echo $product['PID'] ?>">
       <img  src="<?php echo $path ?>" style="width:650px;height:600px;" >
       </a>

       

   <br><br>
   <label for="name" style="font-size:15px ;">  <?php echo $product['Name'] ?></label>
   <br><br>

   <p> ৳  
        <?php 
        $price= $product['SellingPrice'] ;
        echo number_format("$price")."<br>";
        ?>
    </p>

    <br><br>

  <label for="Model">  Model: <?php echo $product['Model'] ?></label>
  <label for="Category">Category: <?php echo $product['Category'] ?></label>
  <br><br>

  <label for="Brand"> Brand: <?php echo $product['Brand'] ?></label>
  <br><br>

  
  <label for="Color"> Color: <?php echo $product['Color'] ?></label>
  <br><br>


  <label for="Description">Products Description : </label><br>
  <p><?php echo $product['Description']; ?></p>

  


      </div>


 
<div class="col-3 col-s-3">
  <div class="absolute">
    

    <form action="cart.php" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['Quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$_GET['id']?>">
            <input type="submit" value="Add To Cart">
    </form>

    <br><br>
    <label for="name" style="font-size:15px ;">  <?php echo $product['Name'] ?></label>
   <br><br>
     <p> ৳  
        <?php 
        $price= $product['SellingPrice'] ;
        echo number_format("$price")."<br>";
        ?>
    </p>

    <br><br>


    <a href="placeorder.php">Buy now</a>
     
</div>
</div>
</div>





<?php include 'foter.php'; ?>
</body>
</html>