<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<script type="text/javascript" src="Login.js"></script>
</head>
<body>

	<?php
	include 'Head.php';
	?>

 
<?php
session_start();

// define variables and set to empty values
$nameErr = $passErr = "";
 $name = $password = "";


$data = file_get_contents("data.json");  
$data = json_decode($data, true);  
                


    foreach($data as $row)  
        {  
         
        $username=$row["username"];
        $passwordexit=$row["password"];
                               
    if (isset($_POST['name'])) {


    if ($_POST['name']==$username && $_POST['password']==$passwordexit) {
        $_SESSION['name'] = $username;

        if (isset($_POST['remember'])){
            setcookie ("name",$_POST["name"],time()+ 10);
             setcookie ("password",$_POST["password"],time()+ 10);

               }

        header("location:showAllProducts.php");
    }
    else{
        $nameErr="username or password invalid";
        // echo "<script>alert('uname or pass incorrect!')</script>";
         }

    }
                                 
} 






function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>

<fieldset style="width:60%;">
<legend>LOGIN </legend>   
<form action="adminLogin.php" method="post">
    
        Username: <input name="name" type="text"  value="<?php if(isset($_COOKIE["name"])) { echo $_COOKIE["name"]; } ?>  " >
        
        <span id="nameErr"></span>
        <br><br>
         Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"
         id="myInput">
       
        <input type="checkbox" onclick="myFunction()">Show Password

         <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "cpassword") {
    x.type = "text";
  } else {
    x.type = "cpassword";
  }
}
</script>

        <br><br>


        <input type="checkbox" name="remember" /> Remember me
    <br><br>
    <input type="submit" value="Login">

    <a href="ForgetPassword.php"> Forgot Password ? </a>
    
</form>
</fieldset>



	<?php
	include 'foter.php';
	?>
   

</body>
</html>