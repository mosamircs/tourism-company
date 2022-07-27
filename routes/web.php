<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('index');})->name('index');

Route::prefix('admin')->group(function () {

    require __DIR__.'/auth.php';
    Route::get('/', function () {return view('index');})->name('index');
    require 'flight.php';
    require "hotel.php";
    require "car.php";
    require 'supplier.php';
    require 'customer.php';
});
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


