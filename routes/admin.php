<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Livewire\SectorComponent;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('home', [HomeController::class, 'home']);
    Route::get('sectors', SectorComponent::class)->name('sectors.index');
    Route::get('dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});