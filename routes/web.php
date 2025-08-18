<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('pages.index2');
})->name('index2');



