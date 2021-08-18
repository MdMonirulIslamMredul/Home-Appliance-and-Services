<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
    <link rel="stylesheet" type="text/css" href="css.css" />
</head>
<body>
     <?php include 'Head.php'; ?>



<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul> 
      <?php include "nav.php"; ?>
    </ul>
  </div>




<div class="row">
<div class="col-9 col-s-12"> 


<fieldset style="width:50%; align-content: center;">
<legend><b>ADD PRODUCT</b> </legend> 

<form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">

  <label for="name"> Product Name:</label>
  <input type="text" id="name" name="name">
  <br><br>

  <label for="Model"> Product Model:</label>
  <input type="text" id="Model" name="Model">
  <br><br>


  <label for="Category">Product Category:</label>
  <select name="Category" id="Category" >
  <option value="">--Please choose Category--</option>  
  <option value="Refrigerator">Refrigerator</option>
  <option value="AC">Air Condition</option>
  <option value="WashingMachine">Washing Machine</option>
  <option value="TV">Television</option>
  <option value="handheld">Handheld Devices</option>
  <option value="Kitchen">Kitchen Applience </option>
  <option value="others">Others  </option>
  </select>
  <br><br>


  <label for="Brand">Product Brand:</label>
  <select name="Brand" id="Brand">
  <option value="">--Please choose Brand--</option>
  <option value="Samsung">Samsung</option>
  <option value="LG">LG</option>
  <option value="Hitachi">Hitachi</option>
  <option value="Whirlpool">Whirlpool</option>
  <option value="Panasonic ">Panasonic</option>
  <option value="Walton">Walton</option>
  <option value="Vision">Vision</option>
  <option value="others">Others  </option>
  </select>
  <br><br>


  
  <label for="Color">Product Color Family:</label>
  <select name="Color" id="Color">
  <option value="">--Please choose Color--</option>
  <option value="Black">Black</option>
  <option value="Black">White</option>
  <option value="Silver">Silver</option>
  <option value="Blue">Blue</option>
  <option value="Red">Red</option>
  <option value="Green">Green</option>
  <option value="Purple">Purple</option>
  <option value="Orange">Orange</option>
  <option value="Yellow">Yellow</option>
  <option value="Gold">Gold</option>
  <option value="others">Others  </option>
  </select>
  <br><br>

  <label for="BuyingPrice">Buying Price:</label>
  <input type="text" id="BuyingPrice" name="BuyingPrice">
  <br><br>

  <label for="SellingPrice">Selling Price:</label>
  <input type="text" id="SellingPrice" name="SellingPrice">
  <br><br>

  <label for="Quantity">Product Quantity:</label>
  <input type="text" id="Quantity" name="Quantity">
  <br><br>

  <label for="Displayable">Displayable :</label>
  <input type="checkbox" name="Displayable" id="Displayable" value="Yes"><label>Yes</label>
  <br><br>

  <label for="Description">Products Description :</label><br>
  <textarea type="text" id="Description" name="Description" rows="8" cols="50"></textarea>




  <br><br>
  <input type="submit" name = "createProduct" value="Save">

  
  

  <!-- <input type="reset"> --> 
</form> 
</fieldset>
</div>
</div>


  <?php include 'foter.php' ?>


</body>
</html>

