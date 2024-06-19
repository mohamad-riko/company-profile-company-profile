<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CareerController;

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
 return view('homepage');
});
//route untuk home
Route::get('/homepage', [HomepageController::class, 'index'])->name('homopage');

//route unutk about
Route::get('/about', [AboutController::class, 'index'])->name('about');

//route untuk service
Route::get('/services', [ServicesController::class, 'index'])->name('services');

//route untuk contact
Route::get('/contact', [ContactController::class, 'index'])->name('cantact');

//route untuk product 
Route::get('/product', [ProductController::class, 'index'])->name('product');

//route unutk customer and patner
Route::get('customer', [CustomerController::class, 'index'])->name('customer');

//route unutk gallery
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');

//route untuk career
Route::get('career', [CareerController::class, 'index'])->name('career');



