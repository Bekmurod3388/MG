<?php

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

Route::get('/', [\App\Http\Controllers\SensorController::class,'index'])->name('welcome');
Route::get('/power/', [\App\Http\Controllers\SensorController::class,'power_index'])->name('power_index');
Route::match(['put', 'patch'],'/power/status/{power}',[\App\Http\Controllers\SensorController::class,'power'])->name('power');
Route::resource('/data',\App\Http\Controllers\DataController::class);
