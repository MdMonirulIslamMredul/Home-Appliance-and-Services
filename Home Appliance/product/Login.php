<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css.css" />
    <script type="text/javascript" src="Login.js"></script>
    
</head>
<body>

 <?php include 'head.php' ?>  	

<fieldset style="width:60%;">
<legend>LOGIN </legend>   
<form name="myform" method="post" action="controller/userLogin.php" onsubmit="validateform()" > 

    Name: <input type="text" name="name" id="name" onkeyup="checkName() ; en()">
    <span id="nameErr"></span>
    <br><br>  
    Password: <input type="password" id="password" name="password" onkeyup="checkPass() ; en()">
    <span id="passErr"></span>
    <br><br>

    <input id="btn" type="submit" value="Login" disabled>
    <br><br>

    <a href="ForgetPassword.php"> Forgot Password ? </a>
    <br>
    <a href="adminLogin.php"> Admin Login </a>

</form>
</fieldset>

<?php include 'foter.php' ?>

</body>
</html>