<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\CustomerController;
// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas del CRUD de usuarios
Route::resource('users', UserController::class);
Route::resource("materials", MaterialsController::class);
Route::resource("customers", CustomerController::class);