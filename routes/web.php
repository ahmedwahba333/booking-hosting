<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyserviceController;
use App\Http\Controllers\UserpropertyController;
use App\Http\Controllers\UserController;
// use


/////////////////////////////////////////////////////
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

use App\Http\Controllers\RateController;
use App\Http\Controllers\CartController;


use App\Http\Controllers\WebController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('ui.home');
});
// Route::get('/aboutUs', function () {
//     return view('ui.aboutUs');
// });


Route::view("aboutUs", "ui.aboutUs");
Route::view("home", "ui.home")->name("home");
Route::view("bookingForSharing", "ui.bookingForSharing");
Route::view("bookingForOne", "ui.bookingForOne");
Route::view("hosting", "ui.hosting");
Route::view("BookingGallery", "ui.BookingGallery");
Route::view("BookingGalleryforone", "ui.BookingGalleryforone");
// Route::view("dashboardAdmin", "ui.dashboardAdmin");
// Route::view("dashboardOwner", "ui.dashboardOwner");
Route::view("HostingGallary", "ui.HostingGallary");
Route::view("reg", "ui.reg");
Route::view("pay", "ui.pay");
Route::view("profile", "ui.profile");

Route::view("propertydashedit", "dashboardOA.propertydashedit");
Route::view("propertiesowner", "dashboardOA.propertiesowner");
Route::view("requestowner", "dashboardOA.requestowner");
Route::view("requestadmin", "dashboardOA.requestadmin");

Route::view("adduser", "dashboardOA.adduser");

Route::view("flatadmin", "dashboardOA.flatadmin");

Route::get("logout", "UserController@logout")->name("mylogout");


Route::get("addform", [ServiceController::class, "create"]);
Route::post("storeService", [ServiceController::class, "store"])->name("store.service");
Route::get("allservice", [ServiceController::class, "index"]);
Route::get("deleteservice/{id}", [ServiceController::class, "delete"])->name("delete.service");


// Route ::get("view",[ServiceController ::class,"hhiden"]);
Route::get("propertydashadd",[propertyController::class, 'index4'])->name("addprop");
Route::get('getproperty/{id}', [propertyserviceController::class, 'getproperties']);
Route::get('getproperty', [propertyserviceController::class, 'index']);



Route::get("createUserProperty", [UserpropertyController::class, "create"]);
Route::post("addUserProperty", [UserpropertyController::class, "store"])->name("storeUser");
Route::get("UserProperties", [UserpropertyController::class, "userProperty"]);

Route::get("profile", [UserpropertyController::class, "profile"]);
Route::post("profile/{items}", [UserpropertyController::class, "updateReject"])->name("updateReject");
Route::post("profilee/{items}", [UserpropertyController::class, "updateAccept"])->name("updateAccept");





Route::get("requestadmin", [PropertyController::class, "requestadmin"]);
Route::post("requestadminReject/{items}", [PropertyController::class, "updateReject"])->name("updateRejectadmin");
Route::post("requestadminAccept/{items}", [PropertyController::class, "updateAccept"])->name("updateAcceptadmin");
Route::post("requestadminDelete/{items}", [PropertyController::class, "updateDelete"])->name("updateDeleteadmin");





Route::get("flatadmin",[PropertyController::class, 'creatett'])->name("flat");
Route::get("addproperty", [PropertyController::class, 'create'])->name("addproperty");
Route::post("storeproperty", [PropertyController::class, "storeproperty"])->name("storeproperty");
Route::get("owneradmin", [PropertyController::class, "index"]);
//Route::get("dashboardOwner", [PropertyController::class, "index"]);
Route::get("deletproperty/{id}", [PropertyController::class, "delete"])->name("delete");
Route::get("editproperty/{id}", [PropertyController::class, "edit"])->name("edit");
Route::post("update/{id}", [PropertyController::class, "update"])->name("update");

Route::get("logIn", [UserController::class, "create"]);
Route::post("addUsers", [UserController::class, "storeUser"])->name("storeUserr");
//Route::get("dashboardAdmin", [UserController::class, "index"]);
Route::get("useradmin", [UserController::class, "index"]);
Route::get("owneradmin", [UserController::class, "index2"]);
Route::get("deleteUser/{id}", [UserController::class, "delete"])->name("ddelete");


//Route::get("BookingGallery", [PropertyController::class, "createB"]);
Route::get("BookingGallery", [PropertyController::class, "indexB"]);
Route::get("property/{id}", [PropertyController::class, "addpropertyhost"])->name("property.host");
Route::get("groupproperty/{id}", [PropertyController::class, "addpropertygroup"])->name("property.book");
Route::get("HostingGallary", [PropertyController::class, "indexH"]);
Route::get("BookingGalleryforone", [PropertyController::class, "indexO"]);



Auth::routes();

