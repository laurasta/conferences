<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

Route::get('/conferences/{conference}/edit', [App\Http\Controllers\ConferenceController::class, 'edit'])->name('conferences.edit');
Route::put('/conferences/{conference}', [App\Http\Controllers\ConferenceController::class, 'update'])->name('conferences.update');
Route::get('/conferences/{id}', [App\Http\Controllers\ConferenceController::class, 'show'])->name('conferences.show');

Route::delete('/conferences/{id}', [App\Http\Controllers\ConferenceController::class, 'destroy'])->name('conferences.destroy');


Route::middleware('auth')->group(function () {
    // Routes for managing conference records go here
});


