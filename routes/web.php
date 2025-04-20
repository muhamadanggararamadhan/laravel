<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('rooms', RoomController::class);
Route::resource('users', UserController::class);
Route::resource('bookings', BookingController::class);
Route::get('reports', [ReportController::class, 'index'])->name('reports.index');
