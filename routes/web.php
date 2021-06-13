<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', [TaskController::class,'index'])->name('task.index');

Route::get('/task/edit/{task}', [TaskController::class,'edit'])->name('task.edit');

Route::post('/task/create', [TaskController::class,'store'])->name('task.store');

Route::put('/task/{task}', [TaskController::class,'update'])->name('task.update');

Route::delete('/task/delete/{task}', [TaskController::class,'destroy'])->name('task.destroy');
