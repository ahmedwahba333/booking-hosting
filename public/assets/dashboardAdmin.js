var users = document.getElementById("users");
var UsersBtn = document.getElementById("UsersBtn");

var owners = document.getElementById("owners");
var OwnersBtn = document.getElementById("OwnersBtn");

var flats = document.getElementById("flats");
var FlatsBtn = document.getElementById("FlatsBtn");

var Requests = document.getElementById("Requests");
var RequestsBtn = document.getElementById("RequestsBtn");

// var myBtns = document.querySelectorAll(".listSideBar");
var myTables = document.querySelectorAll(".hideTable");
function showUsers() {
    for (i = 0; i < myTables.length; i++) {
        myTables[i].style.display = "none";
    }
    users.style.display = "block";
}

function showOwners() {
    for (i = 0; i < myTables.length; i++) {
        myTables[i].style.display = "none";
    }
    owners.style.display = "block";
}

function showFlats() {
    for (i = 0; i < myTables.length; i++) {
        myTables[i].style.display = "none";
    }
    flats.style.display = "block";
}

function showRequests() {
    for (i = 0; i < myTables.length; i++) {
        myTables[i].style.display = "none";
    }
    Requests.style.display = "block";
}





// UsersBtn.addEventListener("click",()=>{
//     users.classList.toggle("showTable");
// })
// OwnersBtn.addEventListener("click",()=>{
//     owners.classList.toggle("showTable")
// })
// FlatsBtn.addEventListener("click",()=>{
//     flats.classList.toggle("showTable")
// })
// RequestsBtn.addEventListener("click",()=>{
//     Requests.classList.toggle("showTable")
// })


// function showUsers(){
//     users.setAttribute("class","showTable")
// }
// function showOwners(){
//     owners.setAttribute("class","showTable")
// }
// function showFlats(){
//     flats.setAttribute("class","showTable")
// }
// function showRequests(){
//     Requests.setAttribute("class","showTable")
// }

