<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/create-user', [UserController::class, 'createUser']);
Route::post('/create-role', [UserController::class, 'createRole']);
Route::post('/create-permission', [UserController::class, 'createPermission']);
Route::post('/assign-permission', [UserController::class, 'assignPermissionToRole']);
Route::post('/assign-role', [UserController::class, 'assignRoleToUser']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/read-blog', [PostController::class, 'readBlog'])->middleware('auth', 'permissions:read-blog');
Route::post('/create-blog', [PostController::class, 'createBlog'])->middleware('auth', 'permissions:create-blog');
Route::post('/update-blog/{id}', [PostController::class, 'updateBlog'])->middleware('auth', 'permissions:update-blog');
Route::post('/delete-blog/{id}', [PostController::class, 'deleteBlog'])->middleware('auth', 'permissions:delete-blog');
