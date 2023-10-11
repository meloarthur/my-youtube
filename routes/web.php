<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);

Route::get('/cadastro', [\App\Http\Controllers\HomeController::class,'viewCadastro']);
Route::post('/cadastro', [\App\Http\Controllers\HomeController::class,'cadastro']);