<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('home', [HomeController::class, 'home']);
});