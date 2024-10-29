<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//http://127.0.0.1:8000/api/user
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
