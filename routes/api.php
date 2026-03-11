<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Location\CountryController;
use App\Http\Controllers\Location\RegionController;
use App\Http\Controllers\Location\DistrictController;
use App\Http\Controllers\Location\CouncilController;
use App\Http\Controllers\Location\WardController;
use App\Http\Controllers\Location\StreetController;


Route::post('/login',[AuthController::class,'login']);


Route::middleware('auth:sanctum')->group(function(){

Route::post('/logout',[AuthController::class,'logout']);

Route::get('/me',[AuthController::class,'me']);

Route::apiResource('members',MemberController::class);

Route::apiResource('forums',ForumController::class);

Route::apiResource('activities',ActivityController::class);

Route::apiResource('funding',FundingController::class);

Route::apiResource('users',UserController::class);

Route::apiResource('countries',CountryController::class);
Route::apiResource('regions',RegionController::class);
Route::apiResource('districts',DistrictController::class);
Route::apiResource('councils',CouncilController::class);
Route::apiResource('wards',WardController::class);
Route::apiResource('streets',StreetController::class);

});