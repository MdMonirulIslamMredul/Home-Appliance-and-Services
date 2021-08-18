<?php session_start();?>
<?php    
	$Login_Error = " ";
  $U_id=$User_name = $Pass = "";

	if (isset($_POST['login'])) 
	{
      require_once 'db_connect.php';


      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {
        $U_id = $_POST["uid"];
        $User_name = $_POST["u_nam"];
        $Pass = $_POST["pass"];
           
      }

		$sql = "SELECT * FROM User WHERE U_ID='".$U_id."' AND Password='".$Pass."' AND User_Name='".$User_name."' ";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
		  $row = $result->fetch_assoc();
      
           
          	
			    if (isset($_POST['checkbox'])) 
				  {
  					//setcookie("ID[$U_id]", $U_id, time()+(10));
  					setcookie('ID', $U_id, time()+(10));
  					setcookie('Pass', $Pass, time()+(10));
  					setcookie('U_Name', $User_name, time()+(10));
				  }
			 
            $_SESSION["id"] = $U_id;
            header("Location: user page.php");
          
		 }
		else 
		{
      $Login_Error = "Wrong input"; 
	  echo " Wrong input";
		}
		$conn->close();	
	}


		if (isset($_COOKIE['ID']) AND isset($_COOKIE['Pass']) AND isset($_COOKIE['U_Name']) ) 
        {
        	if (empty($_POST["uid"])) 
        	{
	        	$U_id=$_COOKIE['ID'];
	        	$Pass=$_COOKIE['Pass'];
	        	$User_name=$_COOKIE['U_Name'];
        	}
        	
        } 
       
   ?>

<!DOCTYPE html>
<html>

<head>
  <script type="text/javascript" src="Loginf.js"></script>
  <title>Login page</title>
</head>

<body>

         <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" name="myForm"  onsubmit="return validateForm()"> 
            
            
            <fieldset align="left"  style="width:32%;">
              
              <legend>LOGIN</legend>
               
             
                <label class="label" >ID :</label>
                <input type="text" name="uid"  value="<?php echo $U_id;?>" ><label class="error"></label>
                
           
			          <br><br>
              
                <label class="label">User Name :</label>
                <input type="text" name="u_nam" id="u_nam" value="<?php echo $User_name?>"  onkeyup="checkUsername()" ><label class="error"></label>
              <span id="nameErr"></span>
               
              
			         <br><br>
         

             
                <label class="label">Password :</label>
                <input type="Password" name="pass" id="pass" value="<?php echo $Pass; ?>" onkeyup="checkPass() " ><label class="error"></label>
                <span id="passErr"></span>
                
             
               <br><br>
             
                <input type="checkbox" name="checkbox"  value="" >
                Remember Me
              
               <br><br>
              
                <input type="submit" name = "login" value="Login">
 
            </fieldset>
</form>
</body>
</html>

