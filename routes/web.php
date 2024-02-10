<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;


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
Route::resource('productss', ProductController::class);
Route::post('productss/create',[ ProductController::class,'create'])->name('productss.create');
Route::post('productss/destory',[ ProductController::class,'create'])->name('products.destroy');
Route::post('productss/show',[ ProductController::class,'create'])->name('products.show');
Route::post('productss/edit',[ ProductController::class,'create'])->name('products.edit');
Route::post('productss/indexs',[ ProductController::class,'create'])->name('products.indexs');
Route::post('productss/store',[ ProductController::class,'create'])->name('products.store');
//Route::get('/',[PagesController::class,'getIndex']);
//Route::post('/creat_products',[PagesController::class,'store'])->name('product.store');
