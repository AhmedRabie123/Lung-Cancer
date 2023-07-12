


var username;
function validate_name(){
    var nameIsValid = false;

    var username = document.getElementById("name").value;
    if (username == ''){

        document.getElementsByClassName("nameerror")[0].innerHTML="please enter a name"
        document.getElementsByClassName("nameerror")[0].style.color = 'red';
        
    }else if  (username.length <= 3 && username.length > 0){

        document.getElementsByClassName("nameerror")[0].innerHTML = "name must be more than 3 character"
        document.getElementsByClassName("nameerror")[0].style.color = 'red';

        
    }else{
            nameIsValid = true;
            document.getElementsByClassName("nameerror")[0].innerHTML=""
    }
    return nameIsValid;
};

function validate_pass2(){
    var passIsValid2=false;
    var pass2 = document.getElementById("password").value;
    if (pass2 == ''){
        document.getElementsByClassName("passerror")[0].innerHTML = "password must not be empty";
        document.getElementsByClassName("passerror")[0].style.color = 'red';      
    }else if (pass2.length > 0 && pass2.length <= 7) {
        document.getElementsByClassName("passerror")[0].innerHTML = "incorrect password";
        document.getElementsByClassName("passerror")[0].style.color = 'red';
    }else{
            document.getElementsByClassName("passerror")[0].innerHTML = "";
            passIsValid2=true;
    }
    return passIsValid2;
};

 




document.getElementById("formtestlogindoctor").addEventListener("submit", (event) => {
    event.preventDefault();
        var nameIsValid = validate_name();
        var passIsValid2 = validate_pass2();
        // check if valid
        if(nameIsValid && passIsValid2){
            window.location.href = 'afterlogindoctor.html';
        }
        
});
   

