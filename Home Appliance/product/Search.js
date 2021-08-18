function Search(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("demo").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "modelSearch.php?q="+str, true);
  xhttp.send();
}