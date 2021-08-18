<!DOCTYPE html>
<html>
<head>
  <title>ADD PICTURE</title>
    <link rel="stylesheet" type="text/css" href="css.css" />

<script type="text/javascript" src="AddPicture.js"></script>
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


<?php
error_reporting(0);
$name=$_POST['name'];

$target_dir = "pictures/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["updateProduct"])) {
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
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "pictures/".$name.".png")) {
    echo " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>

<fieldset style="width:50%; align-content: center;">
<legend><b>ADD Picture</b> </legend> 

<!-- enctype="multipart/form-data" -->

<form  method="post" enctype="multipart/form-data" action="" onsubmit="validateform()" > 

<label  for="name"> Product Name:</label>
  <input type="text" id="name" name="name" onkeyup="checkName() ; en()">
  <span id="nameErr"></span>
  <br><br>


  <img src="pictures/pictureupload.png" alt=" Picture" width="150" height="140">

  <br>

  <input type="file" name="fileToUpload" id="fileToUpload">
  <br><br>


  <br><br>
 <input id="submit" type="submit" value="Submit" name="updateProduct" disabled>

</form>
</fieldset>
</div>
</div>
</div>

<?php include 'foter.php' ?>

</body>
</html>


  