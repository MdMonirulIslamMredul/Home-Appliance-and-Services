<!DOCTYPE html>
<html>
<head>
	<title>LOGGED IN DASHBOARD</title>
<style>
* {
  box-sizing: border-box;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}



article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}



</style>
</head>
<body>

	<?php
	include 'templates\head2.php';
	?>

	<?php
	include 'templates\account.php';
	?>



<article>
   
   <?php 

// session_start();

if (isset($_SESSION['name'])) {
  echo "<h1> Welcome ".$_SESSION['name']."</h1>";
  // echo "<a href='product.php'>Product</a><br>";
  // echo "<br><a href='logout.php'>Logout</a><br>";

}
else{
    header("location:adminlogin.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>

  </article>






	<?php
	include 'templates\foter.php';
	?>

</body>
</html>