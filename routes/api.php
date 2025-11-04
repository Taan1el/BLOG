<?php  

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::get('/user', function() {
    return $request->user();
})->middle;

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/posts/{post}', [App\Http\Controllers\PublicController::class, 'post']);