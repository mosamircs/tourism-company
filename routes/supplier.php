<?php

use App\Http\Controllers\ContactControllers\SupplierController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;


// Route::get('/addsupplier',[SupplierController::class,'create'])->name('addsupplier');

Route::post('/storesupplier',[HotelController::class,'storeHotelSupplier'])->name('storesupplier');

Route::get('/supplier',[SupplierController::class,'store'])->name('supplier');

