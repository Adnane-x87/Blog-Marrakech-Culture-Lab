<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function(){
    return view('frontend.about');
});

Route::get('/events', function(){
    
    return view('frontend.events');

});

Route::get('/event-details', function(){
    return view('frontend.event-details');
});

Route::get('/category', function(){
    return view('frontend.category');
});

Route::get('/submit-event', function(){
    return view('frontend.submit-event');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function() {
        return view('backend.admin-dashboard');
    });
    
    Route::get('/events', function() {
        return view('backend.admin-events');
    });
    
    Route::get('/approve', function() {
        return view('backend.admin-approve');
    });
    
    Route::get('/delete', function() {
        return view('backend.admin-delete');
    });
});