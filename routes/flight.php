<?php

use App\Http\Controllers\FlightControllers\FlightController;
use App\Http\Controllers\FlightControllers\FlightReserveController;
use App\Http\Controllers\FlightControllers\FlightSupplierController;
use Illuminate\Support\Facades\Route;


Route::prefix('flights')->group(function () {
    /**
     * start of flight service  operations
     */
    Route::get('/',[FlightController::class,'index'])->name('flights');

    Route::get('/create',[FlightController::class,'create'])->name('flightcreate');

    Route::post('/store',[FlightController::class,'store'])->name('flightstore');
    //end of flight service operations

Route::prefix('reservation')->group(function () {
    
    /**
     * start of flight reservation operations
     */
    Route::get('/',[FlightReserveController::class,'index'])->name('flightreserveindex');
    
    Route::get('/create',[FlightReserveController::class,'create'])->name('flightreservecreate');
    
    Route::post('/store',[FlightReserveController::class,'store'])->name('flightreservestore');
    //end of flight reservation 
    
});

    /**
     * route group for flight suppliers
     */
    Route::prefix('supplier')->group(function () {
        
        Route::get('/create',[FlightSupplierController::class,'create'])->name('flightsuppliercreate');

        Route::post('/store',[FlightSupplierController::class,'store'])->name('flightsupplierstore');
    });

});

