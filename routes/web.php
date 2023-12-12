<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignupController;
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
//home:
Route::get('/',[HomeController::class,'index']);
//posts:
Route::get('/post/create',[PostController::class,'create']);
Route::post('/post/store',[PostController::class,'store']);
Route::get('/post/{post}/edit',[PostController::class,'edit']); //route model binding
Route::put('/post/{post}',[PostController::class,'update']); //route model binding
Route::get('/post/{post}',[PostController::class,'show']); //route model binding
Route::delete('/post/{post}/delete',[PostController::class,'destroy']); //route model binding
//category:
Route::get('/category',[CategoryController::class,'index']);
Route::get('/category/create',[CategoryController::class,'create']);
Route::post('/category/store',[CategoryController::class,'store']);
Route::get('/category/{category}/edit',[CategoryController::class,'edit']);
Route::put('/category/{category}',[CategoryController::class,'update']);
Route::get('/category/{category}',[CategoryController::class,'show']);

//authentication:
Route::get('/login/create',[LoginController::class,'create']);
Route::post('/login/store',[LoginController::class,'store']);
Route::delete('/logout',[LoginController::class,'destroy']);
Route::get('/signup/create',[SignupController::class,'create']);
Route::post('/signup/store',[SignupController::class,'store']);
