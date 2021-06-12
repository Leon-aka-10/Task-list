<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {
   
    Route::get('/', function() {
        echo "Admin panel";
    });
    
    Route::get('/user', function() {
        echo "Admin user";
    });
    
    Route::get('/profile', function() {
        echo "Admin profile";
    });
    
    Route::get('/settings', function() {
        echo "Admin settings";
    });
    
});