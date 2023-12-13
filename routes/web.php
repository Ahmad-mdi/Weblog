<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
//authentication:
Route::middleware('guest')->group(function () {
    Route::get('/login/create', [LoginController::class, 'create'])->name('login');
    Route::post('/login/store', [LoginController::class, 'store']);
    Route::get('/signup/create', [SignupController::class, 'create']);
    Route::post('/signup/store', [SignupController::class, 'store']);

});
Route::delete('/logout', [LoginController::class, 'destroy']);
//*****************************************************************************************************************************
Route::middleware('auth')->group(function () {
    Route::get('/post/create', [PostController::class, 'create']);
    Route::post('/post/store', [PostController::class, 'store']);
    Route::get('/post/{post}/edit', [PostController::class, 'edit']);
    Route::put('/post/{post}', [PostController::class, 'update']);
    Route::delete('/post/{post}/delete', [PostController::class, 'destroy']);

    Route::get('/roles', [RoleController::class, 'index']);
    Route::get('/roles/create', [RoleController::class, 'create']);
    Route::post('/roles/store', [RoleController::class, 'store']);
    Route::get('/roles/{role}/edit', [RoleController::class, 'edit']);
    Route::put('/roles/{role}', [RoleController::class, 'update']);
    Route::delete('/roles/{role}', [RoleController::class, 'destroy']);

    Route::get('/profile', [ProfileController::class, 'show']);
    Route::get('/profile/edit', [ProfileController::class, 'edit']);
    Route::put('/profile/update', [ProfileController::class, 'update']);
    Route::get('/changePass', [ChangePasswordController::class, 'edit']);
    Route::put('/changePass', [ChangePasswordController::class, 'update']);

    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/category/create', [CategoryController::class, 'create']);
    Route::post('/category/store', [CategoryController::class, 'store']);
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit']);
    Route::put('/category/{category}', [CategoryController::class, 'update']);
    Route::get('/category/{category}', [CategoryController::class, 'show']);

    Route::resource('users',UserController::class);
});

Route::get('/post/{post}', [PostController::class, 'show']);


