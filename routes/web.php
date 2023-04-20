<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculator\CalculatorController;
use App\Http\Controllers\String\StringController;
use App\Http\Controllers\CodeClear\CodeClearController;
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
Route::get('/string/input', [StringController::class,'index'])->name('form');
Route::get('/string/random', [StringController::class,'result'])->name('result');

// Code Clear Routes
Route::get("/codeclear",[CodeClearController::class,'index'])->name('index');
Route::get("/codeclear/recent",[CodeClearController::class,'recent'])->name('recent');
Route::get("/codeclear/page/{page}",[CodeClearController::class,'page'])->name('page');


require __DIR__ . '/auth.php';










