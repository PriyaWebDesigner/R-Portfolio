<?php


use App\Http\Controllers\Frontend\FrontendController;
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

