<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PredstavaController;
use App\Http\Controllers\KartaController;
use App\Http\Controllers\PosetilacController;
use App\Http\Controllers\AuthController;
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

Route::post('register', [AuthController::class, 'register']);

Route::post('login', [AuthController::class, 'login']);


Route::get('predstava', [PredstavaController::class, 'index']);

Route::get('predstava/{predstava}', [PredstavaController::class, 'show']);

Route::get('posetilac', [PosetilacController::class, 'index']);

Route::get('posetilac/{posetilac}', [PosetilacController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::put('predstava/{predstava}', [PredstavaController::class, 'update']);
    Route::delete('predstava/{predstava}', [PredstavaController::class, 'destroy']);
    Route::post('createPosetilac', [PosetilacController::class, 'create']);
    Route::post('logout', [AuthController::class, 'logout']);
});


