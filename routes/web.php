<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Inicios;
use App\Http\Controllers\Registros;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[AuthController::class,'index'])->name('login');
Route::post('/logear',[AuthController::class,'logear'])->name('logear');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/registro',[Registros::class,'index'])->name('registro');
Route::post('/registrar',[Registros::class,'registrar'])->name('registrar');

Route::get('/inicio',[Inicios::class,'index'])->name('inicio');
