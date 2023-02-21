<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ImagesController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SupCategoryController;
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



Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/{id}', [CategoryController::class, 'show']);
    Route::post('/create', [CategoryController::class, 'create']);
    Route::post('/update/{id}', [CategoryController::class, 'update']);
    Route::delete('/delete/{id}', [CategoryController::class, 'destroy']);
});
Route::group(['prefix' => 'SubCategory'], function () {
    Route::get('/', [SupCategoryController::class, 'index']);
    Route::get('/{id}', [SupCategoryController::class, 'show']);
    Route::post('/create', [SupCategoryController::class, 'create']);
    Route::post('/update/{id}', [SupCategoryController::class, 'update']);
    Route::delete('/delete/{id}', [SupCategoryController::class, 'destroy']);
});
Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/{id}', [ProductController::class, 'show']);
    Route::post('/create', [ProductController::class, 'create']);
    Route::post('/update/{id}', [ProductController::class, 'update']);
    Route::delete('/delete/{id}', [ProductController::class, 'destroy']);
});
Route::group(['prefix' => 'images'], function () {
    Route::get('/', [ImagesController::class, 'index']);
    Route::get('/{id}', [ImagesController::class, 'show']);
    Route::post('/create', [ImagesController::class, 'create']);
    Route::post('/update/{id}', [ImagesController::class, 'update']);
    Route::delete('/delete/{id}', [ImagesController::class, 'destroy']);
});