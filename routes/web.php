<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/bio', 'bio')->name('bio');
Route::view('/scholarship', 'scholarship')->name('scholarship');
Route::view('/research', 'research')->name('research');
Route::view('/media', 'media')->name('media');
Route::view('/consulting', 'consulting')->name('consulting');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
