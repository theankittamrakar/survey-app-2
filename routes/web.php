<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', [HelloController::class,'about']);

Route::get('/service', [ServiceController::class,'index']);
Route::post('/service', [ServiceController::class,'store']);

Route::get('/customers', [CustomerController::class,'index']);
Route::get('/customers/create', [CustomerController::class,'create']);
Route::post('/customers', [CustomerController::class,'store']);
Route::get('/customers/{customer}', [CustomerController::class,'show']);
Route::get('/customers/{customer}/edit', [CustomerController::class,'edit']);
Route::patch('/customers/{customer}', [CustomerController::class,'update']);
Route::delete('/customers/{customer}', [CustomerController::class,'destroy']);
