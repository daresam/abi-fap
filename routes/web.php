<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/bio', 'bio');
Route::view('/scholarship', 'scholarship');
Route::view('/research', 'research');
Route::view('/media', 'media');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
