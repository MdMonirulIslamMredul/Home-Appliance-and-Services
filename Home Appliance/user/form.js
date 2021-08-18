       function validateform(){  
            var username=document.myform.username.value;  
            var password=document.myform.password.value;
            var cp=document.myform.cp.value;  
            var name=document.myform.name.value;  
              var u_id=document.myform.u_id.value;
            var email=document.myform.email.value;


            if (name==null || name==""){  
              alert("Name can't be blank");  
               return false;  
            }

  
}



        function checkUsern() {
            if (document.getElementById("username").value == "") {
                document.getElementById("unameErr").innerHTML = "* Username is required";
                document.getElementById("unameErr").style.color = "red";
                document.getElementById("username").style.borderColor = "red";
            }else{
                document.getElementById("unameErr").innerHTML = "";
                document.getElementById("username").style.borderColor = "black";
            }
            
        }



        function checkp(){
            if (document.getElementById("password").value == "") {
                document.getElementById("passErrr").innerHTML = "* Password is required";
                document.getElementById("passErrr").style.color = "red";
                document.getElementById("password").style.borderColor = "red";
            }else if(document.getElementById("password").value.length<6){
                document.getElementById("password").style.borderColor = "red";
                document.getElementById("passErrr").style.color = "red";
                document.getElementById("passErrr").innerHTML = "Password must be at least 6 characters long.";
            }
            else{
                document.getElementById("passErrr").innerHTML = "";
                document.getElementById("passErrr").style.color = "red";
                document.getElementById("password").style.borderColor = "black";
            }
        }
        
  function checkcp(){
    var cp=document.getElementById("cp").value;
    var pass=document.getElementById("password").value;

            if (document.getElementById("cp").value == "") {
                document.getElementById("cpassErr").innerHTML = "* Confirm Password is required";
                document.getElementById("cpassErr").style.color = "red";
                document.getElementById("cp").style.borderColor = "red";
            }else if(document.getElementById("cp").value.length<6){
                document.getElementById("cp").style.borderColor = "red";
                document.getElementById("cpassErr").style.color = "red";
                document.getElementById("cpassErr").innerHTML = "Password must be at least 6 characters long.";
            }
            else if(cp!=pass){
                document.getElementById("cp").style.borderColor = "red";
                document.getElementById("cpassErr").style.color = "red";
                document.getElementById("cpassErr").innerHTML = "Password doesnt matched.";
            }
            else{
                document.getElementById("cpassErr").innerHTML = "";
                document.getElementById("cpassErr").style.color = "red";
                document.getElementById("cp").style.borderColor = "green";
            }
        }
        




       



           function checkname() {
            if (document.getElementById("name").value == "") {
                document.getElementById("nameErr").innerHTML = "* Name is required";
                document.getElementById("nameErr").style.color = "red";
                document.getElementById("sername").style.borderColor = "red";
            }else{
                document.getElementById("nameErr").innerHTML = "";
                document.getElementById("name").style.borderColor = "black";
            }
            
        }




           function checkemail() {

            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if (document.getElementById("email").value == "") {
                document.getElementById("emailErr").innerHTML = "* Email is required";
                document.getElementById("emailErr").style.color = "red";
                document.getElementById("email").style.borderColor = "red";
            }

            else if ( document.getElementById("email").value.match(mailformat) ) {
                document.getElementById("emailErr").innerHTML = "Email format matched";
                document.getElementById("emailErr").style.color = "green";
                document.getElementById("email").style.borderColor = "black";
            }

            else{document.getElementById("emailErr").innerHTML = "Email fromat not matched";
                document.getElementById("emailErr").style.color = "red";
                document.getElementById("email").style.borderColor = "red";
            }
            
        }



       
           function checku_id() {
            if (document.getElementById("u_id").value == "") {
                document.getElementById("u_idErr").innerHTML = "* ID is required";
                document.getElementById("u_idErr").style.color = "red";
                document.getElementById("u_id").style.borderColor = "red";
            }else{
                document.getElementById("u_idErr").innerHTML = "";
                document.getElementById("u_id").style.borderColor = "black";
            }
            
        }



  function checkad() {
            if (document.getElementById("address").value == "") {
                document.getElementById("adErr").innerHTML = "* Address is required";
                document.getElementById("adErr").style.color = "red";
                document.getElementById("address").style.borderColor = "red";
            }else{
                document.getElementById("adErr").innerHTML = "";
                document.getElementById("address").style.borderColor = "black";
            }
            
        }






        function en(){
        document.getElementById("btn").disabled = false;
        if (document.getElementById("username").value == "" || document.getElementById("password").value.length<6 ) {
        document.getElementById("btn").disabled = true;
        }
}
