<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewController;
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


// Route for  View -------------------->
// Route::get('/',[ViewController::class,'homePage']);



//Route For Backend/API

Route::get('/brands',[BrandController::class,'brandList']);
Route::get('/categories',[CategoryController::class,'categoryList']);
Route::get('/products/category/{category_id}', [ProductController::class, 'productbyCategory']);
Route::get('/products/brand/{brand_id}', [ProductController::class, 'productbyBrand']);
Route::get('/products/remark/{remark}', [ProductController::class, 'productbyRemark']);
Route::get('/products/sliders', [ProductController::class, 'productSlider']);
Route::get('/products/details/{id}', [ProductController::class, 'productDetails']);
Route::get('/products/reviews', [ProductController::class, 'productReview']);
