<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/index2', function () {
    return view('pages.index2');
})->name('index2');