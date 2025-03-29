<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MaterialsController;
// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas del CRUD de usuarios
Route::resource('users', UserController::class);
Route::resource("materials", MaterialsController::class);