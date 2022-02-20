<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogInAndRegistrationController;
use App\Http\Controllers\LogInPageController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'goToHomePages']);

Route::get('/logInPage',[LogInAndRegistrationController::class,'goToLogInPage']);
Route::get('/registration',[LogInAndRegistrationController::class,'goToRegistrationPage']);



Route::post('/userRegi',[LogInAndRegistrationController::class,'userRegistered']);
Route::post('/logInUser',[LogInAndRegistrationController::class,'userLogIn']);






