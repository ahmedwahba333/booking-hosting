var fName = document.getElementById("fName");
var fNameLabel = document.getElementById("fNameLabel");

var lName = document.getElementById("lName");
var lNameLabel = document.getElementById("lNameLabel");

var myGender = document.getElementsByClassName("myGender");

var myPhoneNum = document.getElementById("myPhoneNum");
var myPhoneNumLabel = document.getElementById("myPhoneNumLabel");

var birthDate = document.getElementById("birthDate");
var birthDateLabel = document.getElementById("birthDateLabel");

var nid = document.getElementById("nid");
var nidLabel = document.getElementById("nID");

var myEmail = document.getElementById("myEmail");
var myEmailLabel = document.getElementById("myEmailLabel");

var myPassword = document.getElementById("myPassword");
var myPasswordLabel = document.getElementById("myPasswordLabel");

var confirmPassword = document.getElementById("confirmPassword");
var confirmPasswordLabel = document.getElementById("confirmPasswordLabel");

var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var regularPassword = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
var regExpPhone = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;

function signIn() {
  if (
    fName.value == "" ||
    isFinite(fName.value) ||
    fName.value.indexOf(" ") != -1
  ) {
    fNameError = fNameLabel.innerHTML = "enter a valid name";
  } else if (
    lName.value == "" ||
    isFinite(lName.value) ||
    lName.value.indexOf(" ") != -1
  ) {
    lNameLabel.innerHTML = "enter a valid name";
  } else if (
    nid.value.length != 14 ||
    nid.value[0] != 2 ||
    isNaN(nid.value) ||
    nid.value[3] + nid.value[4] > 12 ||
    nid.value[5] + nid.value[6] > 31
  ) {
    nidLabel.innerHTML = "enter a valid national id";
  } else if (!regExpPhone.test(myPhoneNum.value)) {
    myPhoneNumLabel.innerHTML = "enter a valid number";
  } else if (birthDate.value == "") {
    birthDateLabel.innerHTML = "enter your birth date";
  } else if (!regexEmail.test(myEmail.value)) {
    myEmailLabel.innerHTML = "enter a valid email";
  } else if (!regularPassword.test(myPassword.value)) {
    myPasswordLabel.innerHTML = "enter a strong password";
  } else if (confirmPassword.value != myPassword.value) {
    confirmPasswordLabel.innerHTML = "it's not the same Password";
  }
  localStorage.setItem("first name", fName.value);
  localStorage.setItem("last name", lName.value);
  localStorage.setItem("nid", nid.value);

  for (i = 0; i < myGender.length; i++) {
    if (myGender[i].checked == true) {
      localStorage.setItem("gender", myGender[i].value);
    }
  }

  localStorage.setItem("email", myEmail.value);
  localStorage.setItem("password", myPassword.value);
  localStorage.setItem("phoneNumber", myPhoneNum.value);
  localStorage.setItem("birthDate", birthDate.value);
}

//     log in

var userEmail = document.getElementById("userEmail");
var userPassword = document.getElementById("userPassword");
function logInButton() {
  if (
    userEmail.value == localStorage.getItem("email")
    // userPassword.value == localStorage.getItem("password") &&
    // localStorage.getItem("first name") != "" &&
    // localStorage.getItem("last name") != "" &&
    // localStorage.getItem("nid") != "" &&
    // localStorage.getItem("phoneNumber") != "" &&
    // localStorage.getItem("gender") != "" &&
    // localStorage.setItem("birthDate")
  ) {
    window.location.assign("https://www.google.com/?hl=ar");
  } else {
  }
}

/*A@a0100564 */
