<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;


Route::get('/showLogin', 
    [LoginController::class, 'index']);

Route::get('/showRegister',
    [LoginController::class, 'showRegistration']
);


Route::post('/login',
[LoginController::class, 'login']);

Route::get('signout',[LoginController::class, 'signout']);

Route::post('register',[LoginController::class, 'register']);

Route::get('/', [ContactController::class, 'index']);
Route::post('/addcontact', [ContactController::class, 'add']);
Route::get('/delete/{id}', [ContactController::class, 'delete']);
Route::get('/edit/{id}', [ContactController::class, 'edit']);
Route::post('/edit/{id}', [ContactController::class, 'update']);