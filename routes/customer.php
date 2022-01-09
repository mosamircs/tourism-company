<?php

use App\Http\Controllers\ContactControllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::prefix('customer')->group(function () {
    
    Route::get('/create', [CustomerController::class, 'create'])->name('customerdata');
    
    Route::post('/store', [CustomerController::class, 'store'])->name('customerstore');
    
});
    
