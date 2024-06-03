<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\BookingController;

Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/room-stats', [ReservationController::class, 'roomStats'])->name('reservations.room-stats');
Route::post('/bookings', [BookingController::class, 'store'])->name('form.store');
Route::get('/bookings/{id}', [BookingController::class, 'show'])->name('booking.show');
Route::get('/create', [BookingController::class, 'create'])->name('create');
Route::get('/home', [BookingController::class, 'home'])->name('home');
Route::get('/about', [BookingController::class, 'about'])->name('about');
Route::get('/standart', [BookingController::class, 'standart'])->name('standart');
Route::get('/deluxe', [BookingController::class, 'deluxe'])->name('deluxe');
Route::get('/executive', [BookingController::class, 'executive'])->name('executive');

