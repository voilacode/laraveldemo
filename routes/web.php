<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculator\CalculatorController;
use App\Http\Controllers\Calculator\OperationController;
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

// operation controller routes
// index - to list all the data from database
Route::get('/operation', [OperationController::class, 'index'])->name('operation.index');
// its a form the collect the data
Route::get('/operation/create', [OperationController::class, 'create'])->name('operation.create');
// save the data from the form to database
Route::get('/operation/store', [OperationController::class, 'store'])->name('operation.store');
// show one item from database
Route::get('/operation/show/{id}', [OperationController::class, 'show'])->name('operation.show');
// edit one item from database
Route::get('/operation/edit/{id}', [OperationController::class, 'edit'])->name('operation.edit');
// update one item from database
Route::get('/operation/update/{id}', [OperationController::class, 'update'])->name('operation.update');
// delete the item from database
Route::get('/operation/destroy/{id}', [OperationController::class, 'destroy'])->name('operation.destroy');


// string process routes
Route::get('/string/input', [StringController::class, 'index'])->name('form');
Route::get('/string/random', [StringController::class, 'result'])->name('result');

// Code Clear Routes
Route::get("/codeclear", [CodeClearController::class, 'index'])->name('index');
Route::get("/codeclear/recent", [CodeClearController::class, 'recent'])->name('recent');
Route::get("/codeclear/page/{page}", [CodeClearController::class, 'page'])->name('page');


require __DIR__ . '/auth.php';
