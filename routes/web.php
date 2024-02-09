<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
//Route::get('/',[PagesController::class,'getIndex']);
//Route::post('/creat_products',[PagesController::class,'store'])->name('product.store');
