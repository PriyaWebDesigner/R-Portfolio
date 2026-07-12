<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\ResumeController;
use App\Http\Controllers\Backend\ServiceController;
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

// Education Routes
Route::get('/admin/create-resume', [ResumeController::class, 'create'])->name('resume.create');
Route::post('/admin/store-resume', [ResumeController::class, 'store'])->name('resume.store');
Route::get('/admin/show-resume', [ResumeController::class, 'show'])->name('resume.show');
Route::get('/admin/delete-resume/{id}', [ResumeController::class, 'delete'])->name('resume.delete');
Route::get('/admin/edit/resume/{id}', [ResumeController::class, 'edit'])->name('resume.edit');
Route::post('/admin/update/resume/{id}', [ResumeController::class, 'update'])->name('resume.update');

//Service Routes...
    Route::get('/admin/create-service',[ServiceController::class, 'serviceCreate']);
    Route::post('/admin/store-service',[ServiceController::class, 'serviceStore']);
    Route::get('/admin/show-service',[ServiceController::class, 'serviceShow']);
    Route::get('/admin/delete-service/{id}',[ServiceController::class, 'serviceDelete']);
    Route::get('admin/edit-service/{id}',[ServiceController::class, 'serviceEdit']);
    Route::post('admin/update-service/{id}',[ServiceController::class, 'serviceUpdate']);

//Contact Routes...
Route::post('/admin/store/contact-message',[MessageController::class, 'contactMessageStore']);
Route::get('/admin/show/contact-message',[MessageController::class, 'contactMessageShow']);
Route::get('/admin/delete/contact-message/{id}',[MessageController::class, 'contactMessageDelete']);
