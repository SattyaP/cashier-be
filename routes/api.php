<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;
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

Route::controller(RegisterController::class)->group(function () {
    Route::get('users', 'index');
    Route::post('register', 'register');
});

Route::post('login', [RegisterController::class, 'login'])->name('login');


Route::middleware(['auth:sanctum', 'api'])->group(function () {
    Route::get('products', [ProductController::class, 'index']);
    Route::post('products', [ProductController::class, 'store']);
    Route::get('products/{product}', [ProductController::class, 'show']);
    Route::patch('products/{product}', [ProductController::class, 'update']);
    Route::delete('products/{product}', [ProductController::class, 'destroy']);
    Route::get('products/{product}', [ProductController::class, 'show']);
    Route::apiResource('categories', CategoryController::class);
});

