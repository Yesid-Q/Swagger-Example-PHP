<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Router list version 1
 */
Route::prefix('/v1')->group(function (){
    Route::prefix('/example')->group(function (){
        Route::get('',[App\Http\Controllers\Api\V1\ExampleController::class, 'index']);
        Route::post('',[App\Http\Controllers\Api\V1\ExampleController::class, 'store']);
        Route::get('/{id}',[App\Http\Controllers\Api\V1\ExampleController::class, 'show']);
        Route::put('/{id}',[App\Http\Controllers\Api\V1\ExampleController::class, 'update']);
        Route::patch('/{id}',[App\Http\Controllers\Api\V1\ExampleController::class, 'edit']);
        Route::delete('/{id}',[App\Http\Controllers\Api\V1\ExampleController::class, 'destroy']);
    });
});