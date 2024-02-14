<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;  // Use correct namespace

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/qr-code', [QrCodeController::class, 'generate']);  // Use fully qualified class name for Laravel 8+
