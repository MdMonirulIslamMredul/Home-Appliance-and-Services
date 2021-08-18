<?php include 'Head.php'; ?>
<?php 

require_once 'controller/ProductInfo.php';
$product = fetchProduct($_GET['id']);

 include "nav.php";

 ?>



<?php 
$name=$product['Name'] ;
$path="pictures/".$name.".png";

?>


  <?php
error_reporting(0);
$name=$product['Name'] ;
$path="pictures/".$name.".png";

$target_dir = "pictures/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
     echo "File  ";
     //echo "<br>";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    echo "<br>";
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists. ";
  echo "<br>";

  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 9000000) {
  echo "Sorry, your file is too large.";
  echo "<br>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  echo "<br>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  echo "<br>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "path")) {
    echo " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT PRODUCT</title>
</head>
<body>
<fieldset style="width: 100% ; align-content: center;">
<legend><b> EDIT PRODUCT </b></legend> 


 <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">

  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

  <label for="name">Product Name:</label>
  <input value="<?php echo $product['Name'] ?>" type="text" id="name" name="name">
  <br><br>
  <label for="name">Product Model:</label>
  <input value="<?php echo $product['Model'] ?>" type="text" id="Model" name="Model">
  <br><br>

  
  <label for="Category">Product Category:</label>
  <select name="Category" id="Category" >
  <option value="<?php echo $product['Category'] ?>"><?php echo $product['Category'] ?> </option>
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
  <option value="<?php echo $product['Brand'] ?>"><?php echo $product['Brand'] ?></option>
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
  <option value="<?php echo $product['Color'] ?>"><?php echo $product['Color'] ?></option>
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


  <label for="surname">Buying Price:</label>
  <input value="<?php echo $product['BuyingPrice'] ?>" type="text" id="BuyingPrice" name="BuyingPrice"><br><br>

  <label for="SellingPrice">Selling Price:</label>
  <input value="<?php echo $product['SellingPrice'] ?>" type="text" id="SellingPrice" name="SellingPrice"><br><br>

  <label for="Quantity">Product Quantity :</label><br>
  <input value="<?php echo $product['Quantity'] ?>" type="text" id="Quantity" name="Quantity"><br><br>


  <label for="Displayable"> Displayable : </label>
  <input  value="Yes" type="checkbox" id="Displayable" name="Displayable"  checked ><label>Yes</label>
  <br><br>

  <label for="Description">Products Description :</label><br>
  <textarea  type="text" id="Description" name="Description" rows="8" cols="50"><?php echo $product['Description'] ?></textarea>




<p style="margin-top:-0.5px;margin-left:3px;" >

</p>


  <img src="<?php echo $path ?>" alt=" Picture" width="150" height="140">

  <br>

  <input type="file" name="fileToUpload" id="fileToUpload">
  <br><br>




  <br><br>
 <input type="submit" value="submit" name="updateProduct" >






</form> 
</fieldset>
<?php include 'foter.php'; ?>
</body>
</html>

