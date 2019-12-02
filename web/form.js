'use strict';

window.onload = function(){
    
    var fName = document.getElementById("firstname");
    var lName = document.getElementById("lastname");
    var user = document.getElementById("username");
    var password = document.getElementById("password");
    var button = document.getElementById("submit");
    var help = document.getElementById("help");
    
function substituteSubmit() { if(password.value != ''){
        
        help.innerHTML = "*Ensure that the password is at least 8 charcters long with a number and uppercase character";
    
    };
    
    password.onblur = function(){
       help.innerHTML = ""; 
    };
    
    button.addEventListener('click', function(){
            if(fName.vale == "" || lName.value == "" || user.value == "" || password.value == "" ){
                
                alert('All fields are needed in order to sign up!');
                return false;
            }else{
                return true;
            }
        
        
    });
 }
};