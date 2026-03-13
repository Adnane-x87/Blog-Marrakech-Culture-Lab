<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/events/{id}', function () {
    return view('event-details');
});

Route::get('/events/submit', function () {
    return view('submit-event');
});

Route::get('/category/{slug}', function () {
    return view('category');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::get('/events', function () {
        return view('admin.events');
    });

    Route::get('/approve', function () {
        return view('admin.approve');
    });

    Route::get('/delete', function () {
        return view('admin.delete');
    });
});
