<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'HomePage'])->name('HomePage');
Route::get('/ProfilePage', [SiteController::class, 'ProfilePage'])->name('ProfilePage');
Route::get('/LoginPage', [SiteController::class, 'LoginPage'])->name('LoginPage');
