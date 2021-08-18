        function validateform(){  
            var name=document.myform.name.value;  
             
            
              
            if (name==null || name==""){  
              alert("Name can't be blank");  
              return false;  
            }
        }
        function checkEmpty() {
            if (document.myform.name.value = "") {
                alert("Name can't be blank");
                return false;  
            }
          }  
        function checkName() {
            if (document.getElementById("name").value == "") {
                document.getElementById("nameErr").innerHTML = "Name can't be blank";
                document.getElementById("nameErr").style.color = "red";
                document.getElementById("name").style.borderColor = "red";
            }else{
                document.getElementById("nameErr").innerHTML = "";
                document.getElementById("name").style.borderColor = "black";
            }
            
        }
        
        function en(){
        document.getElementById("submit").disabled = false;
        if (document.getElementById("name").value == ""  ) {
        document.getElementById("submit").disabled = true;
        }
}
