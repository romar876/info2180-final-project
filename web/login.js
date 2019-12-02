window.onload = function(){

var button = document.getElementById('login');
var msgDiv= document.querySelectorAll('div > messages');
var msgs= msgDiv.children;
var url= "https://info2180-project3-klasikcorp30.c9users.io/cheapo.php";

//________________________________________________________________________________

button.addEventListener('click', function(){
  var pass = document.getElementById("password");
  
  if (pass.value.match(/[A-Z]/g) && pass.value.match(/[0-9]/) && pass.value.length >= 8) {
    //______________________________________________________________________________
    
    var request = new XMLHttpRequest();
    request.open("GET", 'cheapo.php', true);
    
    request.onreadystatechange = handler;
    request.send();
    
    function handler(){
      if(request.readyState == 4 && request.status == 200){
        var response= request.responseText;
        alert(response);
      }else{
        alert("error");
      }
    }
}});

};
