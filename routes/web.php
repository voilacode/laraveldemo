<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculator\CalculatorController;
use App\Http\Controllers\String\StringController;
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

// default route
Route::get('/', function () { 
    return view('index'); 
});
// calcualtor routes
Route::get('/calc', [CalculatorController::class, 'index']);
Route::get('/calc/result', [CalculatorController::class, 'result']);

// string process routes
Route::get('/string/form', [StringController::class,'index']);
Route::get('/string/result', [StringController::class,'result']);

require __DIR__ . '/auth.php';










