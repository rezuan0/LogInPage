<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogInAndRegistrationController;
use App\Http\Controllers\LogInPageController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'goToHomePages']);

Route::get('/logInPage',[LogInAndRegistrationController::class,'goToLogInPage'])
    ->middleware('alreadyLoggedIn');
Route::get('/registration',[LogInAndRegistrationController::class,'goToRegistrationPage']);



Route::post('/userRegi',[LogInAndRegistrationController::class,'userRegistered']);
Route::post('/logInUser',[LogInAndRegistrationController::class,'userLogIn']);
Route::get('/dashboard',[LogInAndRegistrationController::class,'dashboard'])
    ->middleware('isLoggedIn');
Route::get('/userLogOut',[LogInAndRegistrationController::class,'userLogOut']);






