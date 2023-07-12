



var form = document.getElementById("signup-form1");
var form2 = document.getElementById("signup-form2");
var username;
function validate_name() {
  var nameIsValid = false;
  var username = form.querySelector("#namesignup").value;
  if (username == '') {
    form.querySelector(".namesignerror").innerHTML = "please enter a name";
    form.querySelector(".namesignerror").style.color = 'red';
  } else if (username.length <= 3 && username.length > 0) {
    form.querySelector(".namesignerror").innerHTML = "name must be more than 3 character";
    form.querySelector(".namesignerror").style.color = 'red';
  } else {
    form.querySelector(".namesignerror").innerHTML = "";
    nameIsValid = true;
  }
  return nameIsValid;
}

function validate_pass() {
  var passIsValid = false;
  var phoneo = form.querySelector("#passsignup").value;
  if (phoneo == '') {
    form.querySelector(".passsignerror").innerHTML = "password must not be empty";
    form.querySelector(".passsignerror").style.color = 'red';
  } else if (phoneo.length > 0 && phoneo.length <= 7) {
    form.querySelector(".passsignerror").innerHTML = "incorrect password";
    form.querySelector(".passsignerror").style.color = 'red';
  } else {
    form.querySelector(".passsignerror").innerHTML = "";
    passIsValid = true;
  }
  return passIsValid;
}

function validate_cpass() {
  var cpassIsValid = false;
  var phoneo = form.querySelector("#passsignup").value;
  var passsign = form.querySelector("#cpasssignup").value;
  if (phoneo !== passsign) {
    form.querySelector(".cpasssignerror").innerHTML = "confirm password please";
    form.querySelector(".cpasssignerror").style.color = 'red';
  } else if (phoneo.length > passsign.length && phoneo.length < passsign.length) {
    form.querySelector(".cpasssignerror").innerHTML = "incorrect confirm password";
    form.querySelector(".cpasssignerror").style.color = 'red';
  } else if (passsign == '') {
    form.querySelector(".cpasssignerror").innerHTML = "confirm password please";
    form.querySelector(".cpasssignerror").style.color = 'red';
  } else {
    form.querySelector(".cpasssignerror").innerHTML = "";
    cpassIsValid = true;
  }
  return cpassIsValid;
}

function validate_email(event) {
  var emailIsValid = false;
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const email = form.querySelector("#emailsignup").value;
  if (regex.test(email)) {
    form.querySelector(".emailsignerror").innerHTML = "";
    emailIsValid = true;
  } else {
    form.querySelector(".emailsignerror").innerHTML = "incorrect email";
    form.querySelector(".emailsignerror").style.color = 'red';
  }
  event.preventDefault();
  return emailIsValid;
}

function validate_name2() {
  var nameIsValid = false;
  var username = form2.querySelector("#namesignup").value;
  if (username == '') {
    form2.querySelector(".namesignerror").innerHTML = "please enter a name";
    form2.querySelector(".namesignerror").style.color = 'red';
  } else if (username.length <= 3 && username.length > 0) {
    form2.querySelector(".namesignerror").innerHTML = "name must be more than 3 character";
    form2.querySelector(".namesignerror").style.color = 'red';
  } else {
    form2.querySelector(".namesignerror").innerHTML = "";
    nameIsValid = true;
  }
  return nameIsValid;
}

function validate_pass2() {
  var passIsValid = false;
  var phoneo = form2.querySelector("#passsignup").value;
  if (phoneo == '') {
    form2.querySelector(".passsignerror").innerHTML = "password must not be empty";
    form2.querySelector(".passsignerror").style.color = 'red';
  } else if (phoneo.length > 0 && phoneo.length <= 7) {
    form2.querySelector(".passsignerror").innerHTML = "incorrect password";
    form2.querySelector(".passsignerror").style.color = 'red';
  } else {
    form2.querySelector(".passsignerror").innerHTML = "";
    passIsValid = true;
  }
  return passIsValid;
}

function validate_cpass2() {
  var cpassIsValid = false;
  var phoneo = form2.querySelector("#passsignup").value;
  var passsign = form2.querySelector("#cpasssignup").value;
  if (phoneo !== passsign) {
    form2.querySelector(".cpasssignerror").innerHTML = "confirm password please";
    form2.querySelector(".cpasssignerror").style.color = 'red';
  } else if (phoneo.length > passsign.length && phoneo.length < passsign.length) {
    form2.querySelector(".cpasssignerror").innerHTML = "incorrect confirm password";
    form2.querySelector(".cpasssignerror").style.color = 'red';
  } else if (passsign == '') {
    form2.querySelector(".cpasssignerror").innerHTML = "confirm password please";
    form2.querySelector(".cpasssignerror").style.color = 'red';
  } else {
    form2.querySelector(".cpasssignerror").innerHTML = "";
    cpassIsValid = true;
  }
  return cpassIsValid;
}

function validate_email2(event) {
  var emailIsValid = false;
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const email2 = form2.querySelector("#emailsignup").value;
  if (regex.test(email2)) {
    form2.querySelector(".emailsignerror").innerHTML = "";
    emailIsValid = true;
  } else {
    form2.querySelector(".emailsignerror").innerHTML = "incorrect email";
    form2.querySelector(".emailsignerror").style.color = 'red';
  }
  event.preventDefault();
  return emailIsValid;
}

document.getElementById("validatesignup1").addEventListener("click", (event) => {
  var nameIsValid = validate_name();
  var passIsValid = validate_pass();
  var cpassIsValid = validate_cpass();
  var emailIsValid = validate_email(event);
  if (nameIsValid && passIsValid && cpassIsValid && emailIsValid) {
    window.location.href = 'afterlogindoctor.html';
  }
});

document.getElementById("validatesignup2").addEventListener("click", (event) => {
  var nameIsValid = validate_name2();
  var passIsValid = validate_pass2();
  var cpassIsValid = validate_cpass2();
  var emailIsValid = validate_email2(event);
  if (nameIsValid && passIsValid && cpassIsValid && emailIsValid) {
    window.location.href = 'profilepatient.html';
  }
});

///const signupdoctor=document.querySelector('#validatesignup1');
//signupdoctor.addEventListener('click', () => {
  // Open the specific page
  //window.location.href = 'profiledoctor.html';
//});

//const signuppatient=document.querySelector('#validatesignup2');
//signuppatient.addEventListener('click', () => {
  // Open the specific page
  //console.log('Button clicked');
  //if (signuppatient.checkValidity()) {
   //window.location.href = 'profilepatient.html';
//}});
//const signupvisitor=document.querySelector('#validatesignup3');
//signupvisitor.addEventListener('click', () => {
  // Open the specific page
  //window.location.href = '#';
//});