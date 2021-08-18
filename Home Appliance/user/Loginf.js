function validateForm() 
  {
    var ID = document.forms["myForm"]["uid"].value;
    if (ID==null || ID=="") 
    {
      alert("ID must be filled out");
      return false;
    }

    var u_nam = document.forms["myForm"]["u_nam"].value;
    if (u_nam==null || u_nam=="") 
    {
      alert("User Name must be filled out");
      return false;
    }

    var pass = document.forms["myForm"]["pass"].value;
    if (pass==null || pass=="") 
    {
      alert("Password must be filled out");
      return false;
    }
  } 