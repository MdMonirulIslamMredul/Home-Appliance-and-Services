<?php session_start();?>
<?php
require_once 'db_connect.php';
$id=$_SESSION["id"];
if (isset($_SESSION["id"])) 
{
  $sql = "SELECT * FROM User WHERE U_ID='".$id."'";
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

?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Driver</title>
  
</head>
<body>
<?php

$Up_Error="";



$nameErr   = $genderErr = "";






$Add_Error=$Mail_Error="";
$Name = $row["Name"];
$Add  = $row["Address"];
$Mail = $row["Email"];




$data=" ";




//-------------Name
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $flag_name =0;
  $name1 = test_input($_POST["name1"]);
  if (empty($_POST["name1"])) 
  {
    $nameErr = "";
    $flag_name = 1;
  } 

 else 
  {
    $arr1 = str_split($name1 );
    if($arr1[0] == '.' or $arr1[0] == '-')
    {
      $nameErr= "";
      $flag_name = 1;
    }
    else
    {
      if(strlen($name1) >= 2)
      {
        if (!preg_match("/^[a-zA-Z .]*$/",$name1)) 
        {
          $nameErr = "";
          $flag_name = 1;
        }
      }
      else
      {
        $nameErr= ""; 
        $flag_name = 1;
      }
    }
    if($flag_name != 1)
    {
      $name = test_input($_POST["name1"]);
      //echo $name;
    }
  }

  }
      //-----------Gender----------------
  if(empty($_POST["GENDER_"])) 
  {
    $genderErr = "";
  }
  else
  {
    $GENDER = $_POST["GENDER_"];
    //echo $GENDER;
  }
 
 

  if (empty($_POST["pr_add"])) 
  {
    $Add_Error = "";
  }
  else
  {
    $Add = $_POST["pr_add"];
   // echo $Add;
  }
  
  
  //------------Email
  if (empty($_POST["mail"])) 
  {
    $Mail_Error = "";
  }
  else 
  {
    if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) 
    {
      $Mail_Error = "Invalid email format";
    }
    else//output mail
    {
      $Mail = $_POST["mail"];
    }
  }

  
    
    
  
    

function test_input($fun) 
{
  $fun = trim($fun);
  $fun = stripslashes($fun);
  $fun = htmlspecialchars($fun);
  return $fun;
}
?>

<!-- Regisration.php -->
  <div align="center">
    <div align="center" class="ex1">

          <div  class="pad_All">
          <!--padding: top right bottom left -->
          <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> 
            
            
            <fieldset align="left" class="width750_height780_Dvr_Rep">
              
              <legend align="center" class="color_blue"><b>UPDATE INFORMATION</b></legend>
                <fieldset>
                  <legend>Personal Information</legend>
                

                  
                    <label class="label">Name</label>
                    <input type="text" name="name1" value="<?php echo $Name; ?>" >
                    <label class="error"></label>
                  
               
                    <span class="error"><?php echo $nameErr;?></span>
					
					<br><br>
                 
              

                  
                  <!--Gender-->
                  

                      <label class="label">Gender</label>

                      <input type="radio" name="GENDER_" <?php if($row['Gender']=="Male") {echo "checked";}?> value="Male" ><label>Male </label>

                      <input type="radio" name="GENDER_" <?php if($row['Gender']=="Female") {echo "checked";}?> value="Female" ><label>Female </label>

                      <input type="radio" name="GENDER_" <?php if($row['Gender']=="Other") {echo "checked";}?> value="Other" ><label>Other </label>

                      <label class="error"></label>

                
                 
                    <span class="error"><?php echo $genderErr;?></span>
                   
               
	<br><br>
                
                     
                
                    
                   
                      <label class="label">Address</label>
                      <input type="text" name="pr_add" value="<?php echo $Add; ?>"><label class="error"></label>
                      <span class="error"><?php echo $Add_Error;?></span>
                   
                    
	<br><br>
                   
                  
                      <label class="label">Email</label>
                      <input type="text" name="mail" value="<?php echo $Mail; ?>" ><label class="error"></label>
                      <span class="error"><?php echo $Mail_Error;?></span>
                  
          	<br><br>       

                    

                 
         
          
              <input type="submit" name="Update" value="Update">
              <input type="reset" value="Reset">
          

<!----------update------->
<?php
//require_once 'db_connect.php';


if(isset(($_POST['Update'])))
{
  if(($name != "")and ($nameErr == "") and($genderErr == "")and ($Add_Error == "")and($Mail_Error == ""))
  {
  

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "home_appliance";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE User SET Name='".$name."', Gender='".$GENDER."',  Address='".$Add."', Email='".$Mail."'  WHERE U_ID='".$id."'";

    if ($conn->query($sql) === TRUE) 
    {
      
      $Up_Error = "Record updated successfully";
    } 
    else 
    {
      $Up_Error = "Error updating record: " . $conn->error;
    }

    $conn->close();


  }
  
}
?>
              <?php echo $Up_Error; ?>
            </div>
            </fieldset>
          </form>
        </div>  
    </div>
  </div>
</body>
</html>

