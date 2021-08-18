<?php  
$Pass = "";  
$Pass0= $Pass1=$Confirm_Pass="";

require_once 'db_connect.php';     
if (isset($_SESSION["id"])) 
{
  $id=$_SESSION["id"];
  $sql = "SELECT * FROM User WHERE U_ID='".$id."'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) 
  {
    $row = $result->fetch_assoc();
    $stmt = $row['Password'];    
  } 
  else 
  {
      echo "0 results";
  }

  $conn->close();
}
else
{
  //echo 'Password does not match';
}
     
?>

<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>

  <style >
     
  </style>
   
</head>
<body>


  <div align="center">
    <div align="center" class="max_size1">

        <div  class="div1">
          <form  method="post" onsubmit="return form_validation()"  action="Update_Password.php" > 
            
            
            <fieldset   style="width:32%;" >
              
              <legend >Change Password</legend>
               
               
            
                <label >Previous Password</label>
                <input type="Password" name="PPass" id="PPass"  value="" >
                <label class="error"></label>
                <span id="PPass_msg" class="error"></span>
              
          <br><br>

             
                <label >New Password</label><br>
                <input type="Password" name="pass" id="pass" value="" >
                <label class="error"></label>
                <span id="pass_msg" class="error"></span>
             
                <br><br>

            
                <label >New Confirm Password</label>
                <input type="Password" name="c_pass" id="c_pass" value="" >
                <label class="error"></label>
                  <span id="c_pass_msg" class="error"></span>
                  <span id="cc_pass_msg" class="error"></span>
          

             <br><br>

                <button type="submit"  name="Change" >Change</button>
                <input type="reset" value="Reset">
              
             

              </div>
            </fieldset>
          </form>
        </div>  
      
    </div>
  </div>
  
      <script>
        var PPass=document.getElementById('PPass');
        var pass=document.getElementById('pass');
        var c_pass=document.getElementById('c_pass');

        var data = <?php echo json_encode($stmt); ?>; 

       
        function form_validation()
        {
           
            var pc=0;
            
            if(PPass.value=='' )
            {
              PPass.style.borderColor="red";
              document.getElementById('PPass_msg').innerHTML="Previous Password Can not be Empty";

              return false;
         
            } 

            else if (PPass.value != data) 
            {
              PPass.style.borderColor="red";
              document.getElementById('PPass_msg').innerHTML="Entered Wrong Password";

              return false;
          
            }

            else
            {
                PPass.style.borderColor="green";
                document.getElementById('PPass_msg').innerHTML=" ";
               
            }
             
           
            if(pass.value=='')
            {
              pass.style.borderColor="red";
              document.getElementById('pass_msg').innerHTML="New Password Can not be Empty";
              pc=1;

              return false;
           
            } 
            else
            {
              pass.style.borderColor="green";
              document.getElementById('pass_msg').innerHTML=" ";
            }
                 
            
            if(c_pass.value=='')
            {
              c_pass.style.borderColor="red";
              document.getElementById('c_pass_msg').innerHTML="New Confirm Password Can not be Empty";
              pc=1;

              return false;
            } 
            else
            {
              c_pass.style.borderColor="green";
              document.getElementById('c_pass_msg').innerHTML=" ";
            }

            if ((pass.value != c_pass.value)&&(pc!=1))
            {
              c_pass.style.borderColor="red";
              document.getElementById('c_pass_msg').innerHTML= "New Confirm Password does not match";

              return false;
            } 

            return true;
     
        }

      </script>
</body>
</html>

