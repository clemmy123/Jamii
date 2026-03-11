<?php
use App\Http\Controllers\ChatController;

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('pages.index2');
// })->name('index2');

Route::get('/', [ChatController::class,'index']);
Route::post('/chat/send', [ChatController::class,'send']);


