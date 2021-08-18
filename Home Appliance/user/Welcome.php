<?php 

session_start();

if (isset($_SESSION['name'])) {
	session_destroy();
	header("location:Login_final.php");
	
}

else{
	header("location:Login_final.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	
			
				<?php 
					unset($_SESSION["id"]);
				?>
				<div align="center" >
					<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> 
			            
					</form>

				</div>





		
		
		
</body>
</html>

