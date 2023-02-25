//                    for sharing page

var pioProfile0 = document.getElementById("pioProfile0");
var hoppiesProfile0 = document.getElementById("hoppiesProfile0");
var popUpSharing = document.getElementById("popUpSharing");
var bioTextID = document.getElementById("bioTextID");
var checkProfile = document.getElementsByClassName("checkProfile");
var arrCheckBox = [];
function showPopUpSharing() {
  popUpSharing.classList.replace("hidePopUpSharing", "popUpSharing");
}

function hidePopUpSharing() {
  popUpSharing.classList.replace("popUpSharing", "hidePopUpSharing");
  localStorage.setItem("bio", bioTextID.value);

  for (i = 0; i < checkProfile.length; i++) {
    if (checkProfile[i].checked == true) {
      arrCheckBox.push(checkProfile[i].value);
      localStorage.setItem("hoppies", arrCheckBox);
    }
  }

  alert("bio & hoppies updated..refresh your page");
}
pioProfile0.textContent = localStorage.getItem("bio");
hoppiesProfile0.textContent = localStorage.getItem("hoppies");

//                      capacity number

var cabacityNum = 5;

function clickBookingSharing() {
  var newAvailable = eval(cabacityNum - 1);
  cabacityNum = newAvailable;
  availableNum.textContent = cabacityNum;
  document.getElementById("disableSubmitContentPopUp").style.pointerEvents =
    "none";
}

//                         profile page

var flatsInProfile = document.getElementById("flatsInProfile");
var imgFlats = document.createElement("img");
flatsInProfile.appendChild(imgFlats);
imgFlats.style.width = "30%";
imgFlats.textContent = imgFlats.setAttribute(
  "src",
  localStorage.getItem("mainImg")
);

var statusFlats = document.createElement("p");
flatsInProfile.appendChild(statusFlats);
statusFlats.textContent = localStorage.getItem("status");

var addressFlats = document.createElement("p");
flatsInProfile.appendChild(addressFlats);
addressFlats.textContent = localStorage.getItem("Address");

var priceFlats = document.createElement("p");
flatsInProfile.appendChild(priceFlats);
priceFlats.textContent = localStorage.getItem("Price");

var cancelFlats = document.createElement("button");
flatsInProfile.appendChild(cancelFlats);
cancelFlats.textContent = "x";
cancelFlats.setAttribute("onclick", "cancel()");

function cancel() {
  flatsInProfile.remove();
  localStorage.removeItem("mainImg");
  localStorage.removeItem("status");
  localStorage.removeItem("Address");
  localStorage.removeItem("Price");
}

/*     user data     */

var FNameGet = localStorage.getItem("first name");
var fullNameProfile = document.getElementById("fNameProfile");
var LNameGet = localStorage.getItem("last name");
fullNameProfile.innerHTML = FNameGet + " " + LNameGet;

var birthDateProfile = document.getElementById("birthDateProfile");
var birthDateProfileGet = localStorage.getItem("birthDate");
birthDateProfile.innerHTML = "birth date: " + birthDateProfileGet;

var nID = document.getElementById("nID");
var nIdGet = localStorage.getItem("nid");
nID.innerHTML = "national ID: " + nIdGet;

var phoneNumberProfile = document.getElementById("phoneNumberProfile");
var phoneNumberProfileGet = localStorage.getItem("phoneNumber");
phoneNumberProfile.innerHTML = "phone number: " + phoneNumberProfileGet;

var genderProfile = document.getElementById("genderProfile");
var genderProfileGet = localStorage.getItem("gender");
genderProfile.innerHTML = "Gender: " + genderProfileGet;

var myEmail0 = document.getElementById("myEmail0");
var emailGet = localStorage.getItem("email");
myEmail0.innerHTML = "email: " + emailGet;

/*         bio       */

// var myArr = {
//   id: 1,
//   mainImg: "./imgs/f1.jpg",
//   imgs: ["./imgs/f2.jpg", "./imgs/f3.jpg", "./imgs/f4.jpg"],
//   status: "pending",
//   IsAvailable: "yes",
//   Address: "elsail,aswan",
//   Capacity: 5,
//   Price: 3000,
//   wifi: "yes",
//   Rooms: 4,
//   elevator: "no",
//   AirCondition: "yes",
// };

// var flatsInProfile = document.getElementById("flatsInProfile");
// var imgFlats = document.createElement("img");
// flatsInProfile.appendChild(imgFlats);
// imgFlats.style.width = "30%";
// imgFlats.textContent = imgFlats.setAttribute("src", myArr.mainImg);

// var statusFlats = document.createElement("p");
// flatsInProfile.appendChild(statusFlats);
// statusFlats.textContent = myArr.status;

// var addressFlats = document.createElement("p");
// flatsInProfile.appendChild(addressFlats);
// addressFlats.textContent = myArr.Address;

// var priceFlats = document.createElement("p");
// flatsInProfile.appendChild(priceFlats);
// priceFlats.textContent = myArr.Price;
