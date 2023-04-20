<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculator\CalculatorController;
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
Route::get('/calc', [CalculatorController::class, 'index']);
Route::get('/calc/result', [CalculatorController::class, 'result']);


require __DIR__ . '/auth.php';










