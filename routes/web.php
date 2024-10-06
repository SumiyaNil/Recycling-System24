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
use App\Http\Controllers\Backend\WasterCategoryController;
use App\Http\Controllers\UserAuthenticationController;
use Illuminate\Support\Facades\Route;

//Backend Routes Start here

Route::get('/',[HomeController::class,'home'])->name('dashboard.home');


//Admin
Route::get('/admin',[AdminController::class,'admin'])->name('admin.list');

Route::get('/sign-Up',[UserAuthenticationController::class,'signup'])->name('signUp');
Route::get('/do-login',[UserAuthenticationController::class,'login'])->name('logIn');






// Backend Customers
Route::get('/customers',[CustomerController::class,'customer'])->name('customer.list');


//Backend Waste Category
Route::get('/waste-category',[WasterCategoryController::class,'wasteCategory'])->name('waste.category');


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
