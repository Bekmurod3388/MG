<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/sensor/store',[\App\Http\Controllers\Api\SensorController::class,'store'])->name('store');
Route::get('/switch',[\App\Http\Controllers\Api\SensorController::class,'switch'])->name('switch');
Route::post('/store',[\App\Http\Controllers\Api\DataController::class,'store'])->name('data.store');
