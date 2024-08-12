<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\addContenidoController;
use App\Http\Controllers\ImagenController;
use PgSql\Lob;

Route::get('/', function () { return view('inicio');});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/main', [mainController::class, 'index'])->name('main');

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/addContenido', [addContenidoController::class, 'index'])->name('addContenido');

Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagen.store');

