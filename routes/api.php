<?php

use App\Http\Controllers\Api\SensorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('sensor' ,[SensorController::class, 'index']);
// Route::get('sensor/{id}' ,[SensorController::class, 'show']);
// Route::post('sensor' ,[SensorController::class, 'store']);
// Route::put('sensor/{id}' ,[SensorController::class, 'update']);
// Route::delete('sensor/{id}' ,[SensorController::class, 'destroy']);

Route::apiResource('sensor', SensorController::class);