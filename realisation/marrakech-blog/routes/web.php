<?php

use Illuminate\Support\Facades\Route;

// 🌍 Public Routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
