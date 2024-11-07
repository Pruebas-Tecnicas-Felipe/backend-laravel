<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/posts', [PostController::class, 'create']);
    Route::post('/categories', [CategoryController::class, 'create']);
    Route::get('/allCategories', [CategoryController::class, 'index']);
    Route::get('/posts/{categoryId}', [PostController::class, 'listByCategory']);
    Route::get('/allPosts/', [PostController::class, 'listAllPosts']);
    Route::get('/countPosts/', [PostController::class, 'countPosts']);
});
