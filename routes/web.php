<?php

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

Route::get('/', [App\Http\Controllers\LandingController::class,'welcome']);
Route::post('/store', [App\Http\Controllers\LandingController::class,'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::resource('products', App\Http\Controllers\ProductController::class);

Route::resource('information', App\Http\Controllers\InformationController::class);

Route::resource('hows', App\Http\Controllers\HowController::class);
Route::resource('contacts', App\Http\Controllers\ContactController::class);
Route::resource('abouts', App\Http\Controllers\AboutController::class);