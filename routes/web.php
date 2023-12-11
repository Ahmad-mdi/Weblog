<?php

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

Route::get('/posts/{slug}', function () {
    $posts = [
        'first-post' => [
            'title' => 'helo evry one',
        ],
        'second-post' => [
            'title' => 'hello',
        ]
    ];
   return view('welcome',compact($posts));
});

Route::get('/welcome',function (){
   return view('welcome',compact('name'));
});
