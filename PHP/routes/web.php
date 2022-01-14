<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\ProducerController;
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
Route::get('/product', [ProductController::class, "index"]);
Route::get('/producer', [ProducerController::class, "index"])->name('producer.index');
Route::get('/producer-create',[ProducerController::class, "create"]);
Route::post('/producer-create', [ProducerController::class, "store"]);
Route::post('/producer-delete/{producer_id}', [ProductController::class],"destroy");
Route::get('/producer-edit/edit/{producer_id}',  [ProductController::class],"edit")->name('edit');

//Route::post('/producer-delete',[ProducerController::class,"store"]);
// Route::name('admin.')->prefix('xyz')->group(function() {

//     Route::get('path', 'SomeController@method')->name('bar');

// });