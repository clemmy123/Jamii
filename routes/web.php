<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('pages.index');
})->name('index');

Route::get('/', function () {
    return view('pages.index2');
})->name('index2');