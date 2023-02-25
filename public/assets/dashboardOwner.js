var myTables = document.querySelectorAll(".hideTable");

/*      btns     */

// var flats = document.getElementById("flats");
// var Requests = document.getElementById("Requests");
// var services = document.getElementById("services0");

// function showServices() {
//     for (i = 0; i < myTables.length; i++) {
//         myTables[i].style.display = "none";
//     }
//     services.style.display = "block";
// }

// function showFlats() {
//     for (i = 0; i < myTables.length; i++) {
//         myTables[i].style.display = "none";
//     }
//     flats.style.display = "block";
// }

// function showRequests() {
//     for (i = 0; i < myTables.length; i++) {
//         myTables[i].style.display = "none";
//     }
//     Requests.style.display = "block";
// }

/*     services     */
var myModalBooking = document.getElementById("myModalBooking");
var myModalHosting = document.getElementById("myModalHosting");
var modelBook = document.getElementsByClassName("modelBook");

function showBooking() {
    for (i = 0; i < modelBook.length; i++) {
        modelBook[i].style.display = "none";
    }
    myModalBooking.style.display = "flex";
    myModalBooking.style.flexDirection = "column";
}

function showHosting() {
    for (i = 0; i < modelBook.length; i++) {
        modelBook[i].style.display = "none";
    }
    myModalHosting.style.display = "flex";
    myModalHosting.style.flexDirection = "column";
}
