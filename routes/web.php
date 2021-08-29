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
    return view('test');
});

Route::get('/vue', function () {
    return view('vue');
});

Route::get('/vue1', function () {
    return view('vue1');
});

Route::get('/vue2', function () {
    return view('vue2');
});

Route::get('/vue3', function () {
    return view('vue3');
});

require __DIR__.'/auth.php';
