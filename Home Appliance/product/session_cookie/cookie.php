<?php 
$time = time();
// echo 'cookie done';
//setcookie(name, value, expire);
setcookie ("name",$_POST["name"],time()+ 10);
    setcookie ("password",$_POST["password"],time()+ 10);

 ?>