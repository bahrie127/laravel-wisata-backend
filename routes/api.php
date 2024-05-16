<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//login
Route::post('/login', [AuthController::class, 'login']);
//logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

//products
Route::apiResource('/api-products', ProductController::class)->middleware('auth:sanctum');
//categories
Route::apiResource('/api-categories', CategoryController::class)->middleware('auth:sanctum');
