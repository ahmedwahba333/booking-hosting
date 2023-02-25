//                    for sharing page

var popUpSharing = document.getElementById("popUpSharing");

function showPopUpSharing() {
  popUpSharing.classList.replace("hidePopUpSharing", "popUpSharing");
}

function hidePopUpSharing() {
  popUpSharing.classList.replace("popUpSharing", "hidePopUpSharing");
}

// var cabacity = document.getElementById("cabacityNum");


// var availableNum = document.getElementById("availableNum");

//                      capacity number

// var cabacityNum = cabacity.dataset.set;

// cabacity.textContent = cabacityNum;

// availableNum.textContent = cabacityNum;

// function clickBookingSharing() {
//   var newAvailable = eval(cabacityNum - 1);
//   cabacityNum = newAvailable;
//   availableNum.textContent = cabacityNum;
//   document.getElementById("disableSubmitContentPopUp").style.pointerEvents =
//     "none";
//   localStorage.setItem(
//     "mainImg",
//     "https://assets-news.housing.com/news/wp-content/uploads/2022/03/28143140/Difference-between-flat-and-apartment.jpg"
//   );
//   localStorage.setItem("status", "pending");
//   localStorage.setItem("Address", "elsail,aswan");
//   localStorage.setItem("Price", 3000);
// }

