<?php session_start();?> 
<?php
require_once 'db_connect.php';
if (isset($_SESSION["id"])) 
{
	$id=$_SESSION["id"];
	$sql = "SELECT Name FROM User WHERE U_ID='".$id."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
	    $row = $result->fetch_assoc();
	} 
	else 
	{
	    echo "0 results";
	}

	$conn->close();
}
else
{
	
}
?> 

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="template/csss.css" /></head>
 <title>User Page</title>
   <style>
   		
<body>

<body>


 <?php include 'template/head.php' ?> 
   </style>
</head>
<body>
	
	
				<?php  include 'user_Reference.php';   ?>
				
				<h4><a  href="account.php">Product</a></h4> 
				
					
				<h4><a  href="logout.php">Logout</a></h4> 
				
		<div align="center" >
			
				<p>Welcome <?php echo $row["Name"]; ?> </p>
		</div>

		

 <?php include 'template/foter.php' ?> 




		
</body>
</html>

