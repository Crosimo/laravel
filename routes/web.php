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
Route::get('/', function()  {
    return view('template/welcome');
});

Route::get('/home', function () {
    return view('page/home');
});


Route::get('/about', function () {
    return view('page/about');
});

Route::get('/service', function () {
    return view('page/service');
});
