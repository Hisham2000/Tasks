<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InvoiceController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('category/search', [CategoryController::class,'searching'])->name('search');
Route::resource('category',CategoryController::class,['only'=>['index']]);
Route::resource('client',ClientController::class,['only'=>['index']]);
Route::resource('invoice',InvoiceController::class,['only'=>['show']]);

// Route::get('category',[CategoryController::class,'index']);
// Route::get('client',[ClientController::class,'index']);
// Route::get('invoice/{id}',[InvoiceController::class,'show']);

