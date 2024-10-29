<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//http://127.0.0.1:8000/
//call-back function
Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home');
Route::view('about', 'about');
Route::view('admin.login', 'admin.login');

//http://127.0.0.1:8000/user-home
Route::get('user-home', [UserController::class, 'userHome']);

//http://127.0.0.1:8000/about
Route::get('user-about/{user}', [UserController::class, 'userAbout']);

//http://127.0.0.1:8000/admin.login
Route::get('admin.login', [UserController::class, 'adminLogin']);

