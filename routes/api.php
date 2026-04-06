<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public API
Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post}', [PublicController::class, 'post']);
Route::get('/tags', [TagController::class, 'index']);
Route::get('/tags/{tag}', [TagController::class, 'show']);

// Admin API (no auth middleware in this repo yet)
Route::prefix('admin')->group(function () {
    Route::post('/tags', [TagController::class, 'store']);
    Route::patch('/tags/{tag}', [TagController::class, 'update']);
    Route::delete('/tags/{tag}', [TagController::class, 'destroy']);
});