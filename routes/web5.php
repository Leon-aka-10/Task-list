<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/contact', [HomeController::class,'index']);
 
Route::post('/contact', [HomeController::class,'store'])->name('contact');