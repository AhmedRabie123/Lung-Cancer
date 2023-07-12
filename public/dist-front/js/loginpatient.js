

function validate_pass(){
    var passIsValid=false;
    var phoneo = document.getElementById("password").value;
    if (phoneo == ''){
        document.getElementsByClassName("passerror")[0].innerHTML = "password must not be empty";
        document.getElementsByClassName("passerror")[0].style.color = 'red';      
    }else if (phoneo.length > 0 && phoneo.length <= 7) {
        document.getElementsByClassName("passerror")[0].innerHTML = "incorrect password";
        document.getElementsByClassName("passerror")[0].style.color = 'red';
    }else{
            document.getElementsByClassName("passerror")[0].innerHTML = "";
            passIsValid=true;
    }
    return passIsValid;
};

function validate_id(){
    var idIsValid = false;
    var userid = document.getElementById("UserID").value;
    if (userid == ''){

        document.getElementsByClassName("iderror")[0].innerHTML="please enter an id"
        document.getElementsByClassName("iderror")[0].style.color = 'red';
    }
    else if(userid >=1 && userid<=1001){
        document.getElementsByClassName("iderror")[0].innerHTML="";
        idIsValid = true;
    }else if(userid <=0){
        document.getElementsByClassName("iderror")[0].innerHTML="please enter an id";
        document.getElementsByClassName("iderror")[0].style.color = 'red';
    }

    return idIsValid;
}

document.getElementById("formtestloginpatient").addEventListener("submit", (event) => {
    event.preventDefault();
    var idIsValid = validate_id();
    var passIsValid = validate_pass();
    // check if valid
    if(idIsValid && passIsValid){
        window.location.href = 'afterlogin-patient.html';
    } 
}); 