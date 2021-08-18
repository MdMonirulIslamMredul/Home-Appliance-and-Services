<?php
    
    session_start();
    $id=$_SESSION["id"];
    require_once 'db_connect.php';  
    $Pass=$_POST["pass"];
   

    $sql = "UPDATE User SET Password='".$Pass."' WHERE U_ID='".$id."'";

    if ($conn->query($sql) === TRUE) 
     {
      echo "Password  updated successfully";
    } 
    

    $conn->close();

?>
<br>
<a href="user page.php">Back to home page </a>