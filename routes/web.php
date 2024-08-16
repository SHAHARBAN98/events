<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('events', EventController::class);
Route::get('events/{event}/sessions/create', [SessionController::class, 'create'])->name('sessions.create');
Route::post('events/{event}/sessions', [SessionController::class, 'store'])->name('sessions.store');
Route::get('sessions/{session}/edit', [SessionController::class, 'edit'])->name('sessions.edit');
Route::put('sessions/{session}', [SessionController::class, 'update'])->name('sessions.update');
Route::delete('sessions/{session}', [SessionController::class, 'destroy'])->name('sessions.destroy');
