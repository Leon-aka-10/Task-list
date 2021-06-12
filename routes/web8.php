<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/mail', [MailController::class,'index']);
Route::post('/mail', [MailController::class,'store'])->name('mail.store');
