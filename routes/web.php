<?php


use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;



//Frontend Url
Route::get('/',[FrontendController::class,'index']);

