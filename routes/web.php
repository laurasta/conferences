<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth')->group(function () {
    Route::get('/conferences/{id}/edit', [App\Http\Controllers\ConferenceController::class, 'edit'])->name('conferences.edit');
    Route::put('/conferences/{id}', [App\Http\Controllers\ConferenceController::class, 'update'])->name('conferences.update');
    Route::delete('/conferences/{id}', [App\Http\Controllers\ConferenceController::class, 'destroy'])->name('conferences.destroy');
});

// Routes accessible to everyone
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/conferences', [App\Http\Controllers\ConferenceController::class, 'index'])->name('conferences.index');

//display the form to create a new conference
Route::get('/conferences/create', [App\Http\Controllers\ConferenceController::class, 'create'])->name('conferences.create');
//handle the submission of the form
Route::post('/conferences', [App\Http\Controllers\ConferenceController::class, 'store'])->name('conferences.store');

Route::get('/conferences/{id}', [App\Http\Controllers\ConferenceController::class, 'show'])->name('conferences.show');

