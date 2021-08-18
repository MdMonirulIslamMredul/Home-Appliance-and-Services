
<?php  
require_once "model/model.php";

$products = showAllProducts();
    

?>
<!DOCTYPE html>
<html>
<head>
  <title>SEARCH PRODUCT</title>
  
  <script type="text/javascript" src="Search.js"></script>

<style>
table, th, td {
  border: 1px solid black;
  padding: 10px;
  border-collapse: collapse;
}

</style>
</head>
<body>
 
 <?php include 'Head.php'; ?>


      


<?php  include "nav.php";?>


<fieldset style="width:20%; align-content: center;">
<legend><b>SEARCH </b></legend>


    <!-- <form method="post" action="controller/findProduct.php"> -->
      
<!--       <input type="text" name="Product_name" />
      <input type="submit" name="findProduct" value="Search By Name"/> -->

    <input type="text" name="search" placeholder="Search"  onkeyup="Search(this.value)">
  
    <!-- </form>  -->



<div id="demo">
  


<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>BuyingPrice</th>
      <th>SellingPrice</th>
      <th>Profit</th>
      
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $i => $product): ?>
      <tr>
        <td><a href="showProduct.php?id=<?php echo $product['PID'] ?>"><?php echo $product['Name'] ?></a></td>

        <td><?php echo $product['BuyingPrice'] ?></td>
        <td><?php echo $product['SellingPrice'] ?></td>


        <td><?php echo $product['SellingPrice']-$product['BuyingPrice'] ?></td>



        <td><a href="editProduct.php?id=<?php echo $product['PID'] ?>">Edit</a>&nbsp
          <a href="showDeleteProduct.php?id=<?php echo $product['PID'] ?>">Delete</a></td>
      </tr>
    <?php endforeach; ?>
    

  </tbody>
  

</table>
</div>
</fieldset>

<?php include 'foter.php'; ?>

</body>

</html>
