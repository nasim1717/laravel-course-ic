<?php

use App\Http\Controllers\MailSendingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sendEmail', [MailSendingController::class, 'sendEmail']);
