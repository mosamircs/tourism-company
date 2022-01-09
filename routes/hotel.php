<?php

use App\Http\Controllers\HotelControllers\HotelController;
use App\Http\Controllers\HotelControllers\HotelSupplierController;
use Database\Seeders\HotelSeeder;
use Illuminate\Support\Facades\Route;

Route::prefix('hotels')->group(function () {
    
     /**
     * start of hotel service  operations
     */
    Route::get('/',[HotelController::class,"index"])->name('hotels');
    
    Route::post('/store',[HotelController::class,"store"])->name('hotelstore');

    Route::get('/create',[HotelController::class,'create'])->name('hotelcreate');
    //end of flight service operations

    
     /**
     * route group for flight suppliers
     */
    Route::prefix('supplier')->group(function () {
        
        Route::get('/create',[HotelSupplierController::class,'create'])->name('hotelsuppliercreate');

        Route::post('/store',[HotelSupplierController::class,'store'])->name('hotelsupplierstore');
    });
});
