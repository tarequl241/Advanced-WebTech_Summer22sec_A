<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/product/list', [ProductController::class, 'list'])->name('product.list');
Route::get('/product/details/{name}',[ProductController::class,'home'])->name('product.details');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/create',[ProductController::class,'createSubmit'])->name('product.create.submit');
Route::get('/about-us', [HomeController::class, "aboutUs"])->name("aboutus");
Route::get('/contact-us', [HomeController::class, "contactUs"])->name("contactus");
Route::get('/our-team', [TeamController::class, "ourTeam"])->name("ourteam");