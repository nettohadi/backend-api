<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\TripController;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/autofun/brands', function (Request $request) {
    return Brand::all();
});

Route::get('/autofun/cars/{group?}', [CarController::class, 'index']);
Route::get('/autofun/contents/{type?}', [ContentController::class, 'index']);
Route::get('/trips/newuser',[TripController::class, 'getNewUser']);
Route::get('/trips/{userId?}',[TripController::class, 'index']);
Route::post('/trips',[TripController::class, 'create']);
Route::delete('/trips',[TripController::class, 'remove']);
Route::put('/trips',[TripController::class, 'update']);
