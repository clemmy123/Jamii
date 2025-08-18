<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('pages.index2');
})->name('index2');

// Route::get('/index', function () {
//     return view('pages.index');
// })->name('index');

