
//Validators

function validateFirstName(inputID) {
  var firstName = document.getElementById(inputID).value;
  if (firstName === "") {
    return "stava";
  }
  else {
    changeInputStyleToDanger(inputID);
    return "ne stava";
  }
}

function validateMiddleName(inputID) {
  var firstName = document.getElementById(inputID).value;
  if (firstName === "") {
    return "stava";
  }
  else {
    return "ne stava";
  }
}

function validateLastName(inputID) {
  var firstName = document.getElementById(inputID).value;
  if (firstName === "") {
    return "stava";
  }
  else {
    return "ne stava";
  }
}

function validateUsername(inputID) {
  var firstName = document.getElementById(inputID).value;
  if (firstName === "") {
    return "stava";
  }
  else {
    return "ne stava";
  }
}

function validate(inputID) {
  var firstName = document.getElementById(inputID).value;
  if (firstName === "") {
    return "stava";
  }
  else {
    return "ne stava";
  }
}

function validateUsername(inputID) {
  var firstName = document.getElementById(inputID).value;
  if (firstName === "") {
    return "stava";
  }
  else {
    return "ne stava";
  }
}

//Input Style Changers

function changeInputStyleToSuccess(inputID) {

  var element = document.getElementById(inputID);
  element.setAttribute("id", inputID+", inputSuccess");

  inputID = inputID.charAt(0).toUpperCase() + inputID.slice(1);

  var element = document.getElementById("div"+inputID);
  element.setAttribute("class", "form-group has-success");

}

function changeInputStyleToDanger(inputID) {

  var element = document.getElementById(inputID);
  element.setAttribute("id", inputID+", inputSuccess");

  inputID = inputID.charAt(0).toUpperCase() + inputID.slice(1);

  var element = document.getElementById("div"+inputID);
  element.setAttribute("class", "form-group has-success");

}
