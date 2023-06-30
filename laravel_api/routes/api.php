<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/hello', function (){
    return "hello world";
});

Route::get('/users',  [\App\Http\Controllers\UserController::class, 'all_users']);

Route::get('/users/{id}', [\App\Http\Controllers\UserController::class, 'single_user']);

Route::post('/users', [\App\Http\Controllers\UserController::class, 'create_user']);
