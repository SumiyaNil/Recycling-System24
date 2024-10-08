<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BusinessController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\RecyclingCenterController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\RewardsPointController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserAuthenticationController as BackendUserAuthenticationController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\WasterCategoryController;

use Illuminate\Support\Facades\Route;

//Backend Routes Start here

Route::get('/',[HomeController::class,'home'])->name('dashboard.home');





Route::get('/do-login',[BackendUserAuthenticationController::class,'login'])->name('logIn');




//Route::get('/sign-Up',[UserAuthenticationController::class,'signup'])->name('signUp');
//Route::get('/do-login',[UserAuthenticationController::class,'login'])->name('logIn');






// Backend Customers
Route::get('/customers',[CustomerController::class,'customer'])->name('customer.list');


//Backend Waste Category
Route::get('/waste-category',[WasterCategoryController::class,'wasteCategory'])->name('waste.category');
Route::get('/waste-category-form',[WasterCategoryController::class,'wasteCategoryForm'])->name('waste.category.form');
Route::post('/waste-category-store',[WasterCategoryController::class,'wasteCategoryStore'])->name('waste.category.store');


//Backend Reports
Route::get('/reports',[ReportController::class,'report'])->name('report.list');


//Backend Payment
Route::get('/payment',[PaymentController::class,'payment'])->name('payment.list');


//Backend Business Settings
Route::get('/business-settings',[BusinessController::class,'business'])->name('business.setting');


//Backend Locations
Route::get('/location',[LocationController::class,'location'])->name('location.list');
Route::get('/location-form',[LocationController::class,'locationForm'])->name('location.form');


//Backend Recycling Centers
Route::get('/recycling',[RecyclingCenterController::class,'recyclingCenter'])->name('recyclingCenter.list');



//Backend Reward Points
Route::get('/rewards',[RewardsPointController::class,'rewardPoint'])->name('rewardPoint.list');


//Backend Role
Route::get('/role-list',[RoleController::class,'roleList'])->name('role.list');
Route::get('/role-form',[RoleController::class,'roleForm'])->name('role.form');
Route::post('/role-store',[RoleController::class,'roleStore'])->name('role.store');
Route::get('/role-assign-permission/{role_id}',[RoleController::class,'assignPermission'])->name('role.assign.permission');
Route::get('/role-delete/{role_id}',[RoleController::class,'roleDelete'])->name('role.delete');
//Backend Role
Route::get('/user-list',[UserController::class,'userList'])->name('user.list');
Route::get('/user-form',[UserController::class,'userForm'])->name('user.form');
Route::post('/user-store',[UserController::class,'userStore'])->name('user.store');



