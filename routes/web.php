<?php
namespace App\Http\Controllers;

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

Route::get('/', [ MainController::class, 'index' ])->name("home");
Route::get('/philosophy', [ MainController::class, 'philosophy' ])->name("philosophy");
Route::get('/product', [ MainController::class, 'product' ])->name("product");
Route::get('/products', [ MainController::class, 'products' ])->name("products");
Route::get('/service/{slug}', [ MainController::class, 'service' ])->name("service");
Route::get('/services', [ MainController::class, 'services' ])->name("services");
