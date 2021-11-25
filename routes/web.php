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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/struktural', function () {
    return view('struktural', [
        "title" => "Struktural"
    ]);
});

Route::get('/acara', function () {
    return view('proker', [
        "title" => "Acara HMIF"
    ]);
});

Route::get('/proker', function () {
    return view('proker_HMIF',
    ["title" => "Proker HMIF"]);
});

Route::get('/alamat', function () {
    return view('alamat',
    ["title" => "Alamat"]);

});
