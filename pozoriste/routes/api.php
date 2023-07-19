<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PredstavaController;
use App\Http\Controllers\KartaController;
use App\Http\Controllers\PosetilacController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('predstava', [PredstavaController::class, 'index']);

Route::get('predstava/{predstava}', [PredstavaController::class, 'show']);

Route::get('karta', [KartaController::class, 'index']);

Route::get('karta/{karta}', [KartaController::class, 'index']);

Route::get('posetilac', [PosetilacController::class, 'index']);

Route::get('posetilac/{posetilac}', [PosetilacController::class, 'show']);


