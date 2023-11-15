<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CounterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', [CounterController::class, 'index'])->name('counter.index');
Route::post('/counter/increment', [CounterController::class, 'increment'])->name('counter.increment');
Route::post('/counter/decrement', [CounterController::class, 'decrement'])->name('counter.decrement');
