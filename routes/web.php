<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/',[UserController::class,'index']);
Route::get('/contact',[UserController::class,'contact']);
Route::post('/save',[UserController::class,'save']);
Route::get('/about',[UserController::class,'about']);
Route::get('/products',[UserController::class,'products']);
Route::get('/blog',[UserController::class,'blog']);
Route::get('/faq',[UserController::class,'faq']);
Route::get('/terms-condition',[UserController::class,'terms']);
Route::get('/privacy-policy',[UserController::class,'privacy']);