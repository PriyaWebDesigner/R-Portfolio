<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//Frontend Url
Route::get('/',[FrontendController::class,'index']);
Route::get('/about',[FrontendController::class,'about']);
Route::get('/resume',[FrontendController::class,'resume']);
Route::get('/service',[FrontendController::class,'service']);
Route::get('/service-details',[FrontendController::class,'serviceDetails']);
Route::get('/portfolio',[FrontendController::class,'portfolio']);
Route::get('/portfolio-details',[FrontendController::class,'portfolioDetails']);
Route::get('/contact',[FrontendController::class,'contact']);


Auth::routes();

//Admin Login Url
Route::get('/admin/login', [AuthController::class, 'adminLogin'])->name('adminLogin');
// Route::get('/admin/logout', [AuthController::class, 'adminLogout'])->name('adminLogout');

//Admin Pannel
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('adminDashboard');
