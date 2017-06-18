//Button State Changer DISABLED
/*
function enableButton(buttonID) {
  var element = document.getElementById(buttonID);
  element.disabled = false;
}

function disableButton(buttonID) {
  var element = document.getElementById(buttonID);
  element.disabled = true;
}
*/

//Button Functions

function submitForm (formID) {
  document.getElementById(formID).submit();
}

//Check What The State Of The Button Shoud Be

var numberOfValidInputs = 0;

function checkInputValidation (numberOfInputs, formID) {
  if (numberOfValidInputs === numberOfInputs) {
    submitForm(formID);
  }
}

function addValidInput() {
  return numberOfValidInputs++;
}

function removeValidInput() {
  if (numberOfValidInputs === 0) {
    return numberOfValidInputs;
  }
  else {
    return numberOfValidInputs--;
  }
}

//Input Style Changers

function changeInputStyleToSuccess(inputID) {

  //var element = document.getElementById(inputID);
  //element.setAttribute("id", inputID+", inputSuccess");

  inputID = inputID.charAt(0).toUpperCase() + inputID.slice(1);

  var element = document.getElementById("div"+inputID);

  var a = element.className.indexOf("has-success");

  element.setAttribute("class", "form-group has-success");

  if (a === -1) {
    addValidInput();
  }

}

function changeInputStyleToWarning(inputID) {

  //var element = document.getElementById(inputID);
  //element.setAttribute("id", inputID+", inputSuccess");

  inputID = inputID.charAt(0).toUpperCase() + inputID.slice(1);

  var element = document.getElementById("div"+inputID);
  element.setAttribute("class", "form-group has-warning");
}

function changeInputStyleToDanger(inputID) {

  //var element = document.getElementById(inputID);
  //element.setAttribute("id", inputID+", inputSuccess");

  inputID = inputID.charAt(0).toUpperCase() + inputID.slice(1);

  var element = document.getElementById("div"+inputID);

  var a = element.className.indexOf("has-error");

  element.setAttribute("class", "form-group has-error");

  if (a === -1) {
    removeValidInput();
  }

}

//Validators

function validateFirstName(inputID) {
  var firstName = document.getElementById(inputID).value;
  if (firstName === "") {
    changeInputStyleToDanger(inputID);
    return "First Name Required";
  }
  else {
    if (firstName.length > 30) {
      changeInputStyleToDanger(inputID);
      return "First Name Too Long"
    }
    if (firstName.length < 2) {
      changeInputStyleToDanger(inputID);
      return "First Name Too Short";
    }
    if (!/^[a-zA-Z]+$/.test(firstName)){
      changeInputStyleToDanger(inputID);
      return "First Name Contains Unallowed Symbols";
    }
    changeInputStyleToSuccess(inputID);
    return "First Name Available";
  }
}

function validateMiddleName(inputID) {
  var middleName = document.getElementById(inputID).value;
  if (middleName === "") {
    changeInputStyleToDanger(inputID);
    return "Middle Name Required";
  }
  else {
    if (middleName.length > 30) {
      changeInputStyleToDanger(inputID);
      return "Middle Name Too Long"
    }
    if (middleName.length < 2) {
      changeInputStyleToDanger(inputID);
      return "Middle Name Too Short";
    }
    if (!/^[a-zA-Z]+$/.test(middleName)){
      changeInputStyleToDanger(inputID);
      return "Middle Name Contains Unallowed Symbols";
    }
    changeInputStyleToSuccess(inputID);
    return "Middle Name Available";
  }
}

function validateLastName(inputID) {
  var lastName = document.getElementById(inputID).value;
  if (lastName === "") {
    changeInputStyleToDanger(inputID);
    return "Last Name Required";
  }
  else {
    if (lastName.length > 30) {
      changeInputStyleToDanger(inputID);
      return "Last Name Too Long"
    }
    if (lastName.length < 2) {
      changeInputStyleToDanger(inputID);
      return "Last Name Too Short";
    }
    if (!/^[a-zA-Z]+$/.test(lastName)){
      changeInputStyleToDanger(inputID);
      return "Last Name Contains Unallowed Symbols";
    }
    changeInputStyleToSuccess(inputID);
    return "Last Name Available";
  }
}

function validateUsername(inputID) {
  var username = document.getElementById(inputID).value;
  if (username === "") {
    changeInputStyleToDanger(inputID);
    return "Username Required";
  }
  else {
    if (username.length > 30) {
      changeInputStyleToDanger(inputID);
      return "Username Too Long"
    }
    if (username.length < 2) {
      changeInputStyleToDanger(inputID);
      return "Username Too Short";
    }
    if (!/^[a-zA-Z_0-9]+$/.test(username)){
      changeInputStyleToDanger(inputID);
      return "Username Contains Unallowed Symbols";
    }
    changeInputStyleToSuccess(inputID);
    return "Username Available";
  }
}

function validateEmail(inputID) {
  var email = document.getElementById(inputID).value;
  if (email === "") {
    changeInputStyleToDanger(inputID);
    return "Email Required";
  }
  else {
    if (email.length > 30) {
      changeInputStyleToDanger(inputID);
      return "Email Too Long"
    }
    if (email.length < 2) {
      changeInputStyleToDanger(inputID);
      return "Email Too Short";
    }
    if (!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)){
      changeInputStyleToDanger(inputID);
      return "Email Is Not Valid";
    }
    changeInputStyleToSuccess(inputID);
    return "Email Available";
  }
}

function validatePassword(inputID) {
  var password = document.getElementById(inputID).value;
  if (password === "") {
    changeInputStyleToDanger(inputID);
    return "Password is Required";
  }
  else {
    if (password.length > 30) {
      changeInputStyleToDanger(inputID);
      return "Password Too Long"
    }
    if (password.length < 8) {
      changeInputStyleToDanger(inputID);
      return "Password Too Short";
    }
    else {
      changeInputStyleToSuccess(inputID);
      return "Password Available";
    }
  }
}

function validatePasswordConfirm(inputIDPassword, inputIDPasswordConfirm) {
  var password = document.getElementById(inputIDPassword).value;
  var passwordConfirm = document.getElementById(inputIDPasswordConfirm).value;
  if (passwordConfirm === "") {
    changeInputStyleToDanger(inputIDPasswordConfirm);
    return "Password confirm is Required";
  }
  else {
    if (passwordConfirm.length > 30) {
      changeInputStyleToDanger(inputIDPasswordConfirm);
      return "Password confirm Too Long"
    }
    if (passwordConfirm.length < 2) {
      changeInputStyleToDanger(inputIDPasswordConfirm);
      return "Password confirm Too Short";
    }
    if (password === passwordConfirm) {
      changeInputStyleToSuccess(inputIDPasswordConfirm);
      return "Password confirm Available";
    }
    else {
      changeInputStyleToDanger(inputIDPasswordConfirm);
      return "Password confirm Available";
    }
  }
}
