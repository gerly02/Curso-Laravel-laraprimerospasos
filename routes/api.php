<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\PostController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

// Clase 140
Route::get('category/{category}/posts', [CategoryController::class, 'posts']);


Route::get('category/all/', [CategoryController::class, 'all']);

Route::resource('category', CategoryController::class) ->except(["create", "edit"]);

// Clase 139
Route::get('post/all/', [PostController::class, 'all']);

Route::resource('post', PostController::class);


