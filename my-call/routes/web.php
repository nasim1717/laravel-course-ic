<?php

use App\Http\Controllers\WeatherController;
use App\Http\Controllers\SMSSendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/weather', [WeatherController::class, 'WeatherPage']);
Route::get('/SMSSendPage', [SMSSendController::class, 'SMSSendPage'])->name('SMSSendPage');;
Route::post('/SMSSend', [SMSSendController::class, 'SMSSend'])->name('SMSSend');
