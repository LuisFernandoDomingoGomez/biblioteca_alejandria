<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('books', App\Http\Controllers\Api\ApibooksController::class);
Route::resource('categories', App\Http\Controllers\Api\ApicategoriesController::class);
Route::resource('editorials', App\Http\Controllers\Api\ApieditorialsController::class);
Route::resource('authors', App\Http\Controllers\Api\ApiauthorsController::class);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);
Route::get('/users', [AuthController::class, 'showAll']);
Route::get('/users/{id}', [AuthController::class, 'showOne']);
Route::put('/users/update/{id}', [AuthController::class, 'update']);