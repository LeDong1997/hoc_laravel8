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

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function (){
    return "Xin chào";
});

// Group routing
Route::prefix('greeting')->group(function (){
    // URL: greeting/vn
    Route::get('vn', function (){
        return "Xin Chao";
    });

    // URL: greeting/en
    Route::get('en', function (){
        return "Hello";
    });
});

// Parameter
Route::get('user/{id?}', function ($id = null){
    if (!$id){
        return "Xin moi nhap id";
    }

    return "User id: $id";
});
