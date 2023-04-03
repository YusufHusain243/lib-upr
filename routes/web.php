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
    return view('modules/home/home');
});

Route::get('/sejarah', function () {
    return view('modules/sejarah/sejarah');
});

Route::get('/tim-manajemen', function () {
    return view('modules/tim_manajemen/tim_manajemen');
});

Route::get('/staf-perpustakaan', function () {
    return view('modules/staf_perpustakaan/staf_perpustakaan');
});
