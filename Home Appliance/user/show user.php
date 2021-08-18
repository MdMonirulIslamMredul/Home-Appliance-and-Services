<?php session_start();?> 
<?php
require_once 'db_connect.php';
$id=$_SESSION["id"];
if (isset($_SESSION["id"])) 
{
  $sql = "SELECT * FROM User WHERE U_ID='".$id."'";
  $sql1 = "SELECT * FROM user WHERE U_ID='".$id."'";
  $result = $conn->query($sql);
  $result1 = $conn->query($sql1);

  if ($result->num_rows > 0 or $result1->num_rows > 0 ) 
  {
    $row = $result->fetch_assoc(); 
     
  } 
  else 
  {
      echo "0 results";
  }

  $conn->close();
}



?>

<!DOCTYPE html>
<html>
<head>
  
   
</head>
<body>

 
       
          
          <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> 
            
            
           
              
            
                <fieldset style="width:32%;">
                  <legend>Personal Information</legend>
                 
                  <!-- Name -->
                 
                    <label class="label">Name :</label>
                    <label >
                      <?php 
                        echo $row["Name"];
                      ?>
                    </label>
                 

                  <br><br>

                  
                  
                      <label class="label">Date of Birth :</label> 
                      <label>
                        <?php 
                          echo $row["DOB"];
                        ?>
                      </label>
                     
                  
        
                   <br><br>
                 
                  

                      <label class="label">Gender :</label>
                      <label >
                      <?php 
                        echo $row["Gender"];
                      ?>
                      </label>
      
                   <br><br>
                    
                    
                    
                      <label class="label">Address :</label>
                      <label>
                        <?php 
                          echo $row["Address"];
                        ?>
                      </label>
                      <br><br>
                    
                      <label class="label">Email :</label>
                      <label>
                        <?php 
                          echo $row["Email"];
                        ?>
                      </label>
                   
                    
                </fieldset>
            </fieldset>
          </form>
        
</body>
</html>

