<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
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

Route::get('/',[HomeController::class,'home'])->name('home');


Route::get('/category/{slug}', [CategoryController::class, 'showByCategory'])->name('category.show');
Route::get('/brands/{slug}', [CategoryController::class, 'showByBrand'])->name('brand.show');

Route::get('/products/{slug}', [ProductController::class, 'show'])->name('product.show');


Route::post('/submit-form', [ContactController::class, 'submitForm'])->name('submitForm');
Route::get('/contact',[ContactController::class,'index'])->name('contact');

Route::get('/about',[AboutController::class,'index'])->name('about');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
