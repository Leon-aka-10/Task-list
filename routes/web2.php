<?php

use Illuminate\Support\Facades\Route;

Route::get('/home/landingpage', function(){
    echo "Home page";
})->name('home');

Route::get('/page', function(){
    return redirect()->route('home');
});