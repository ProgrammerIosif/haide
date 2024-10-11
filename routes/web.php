<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(EventController::class)->group(function() {
    Route::get('/events', 'index');
    Route::get('/events/create', 'create')->middleware('auth');
    Route::get('/events/{event}', 'show');
    Route::post('/events', 'store')->middleware('auth');
    Route::get('/events/{event}/edit', 'edit')->middleware('auth')->can('edit', 'event');
    Route::patch('/events/{event}', 'update')->middleware('auth')->can('edit','event');
    Route::delete('/events/{event}', 'destroy')->middleware('auth')->can('edit', 'event');
});

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);