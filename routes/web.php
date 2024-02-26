<?php

use App\Http\Controllers\BrandController;
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