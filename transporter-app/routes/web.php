<?php

use App\Http\Controllers\QrCodeGeneratorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/qr-codes', [QrCodeGeneratorController::class, 'generate']);
