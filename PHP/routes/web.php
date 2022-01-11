<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\NhacungcapController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', [admin::class, 'index']);
Route::get('/brand', [BrandController::class, "index"]);
Route::get('/nhacungcap', [NhacungcapController::class, "index"]);
Route::get('/product', [ProductController::class, "index"]);