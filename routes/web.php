<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    // return new JobPosted(); // exibe o corpo do email
    Mail::to('romulorj2023@gmail.com')->send(new JobPosted);

    return 'Done';
});

Route::view('/', 'home');

Route::view('contact', 'contact');

// Route::resource('jobs', JobController::class);
/* Route::resource('jobs', JobController::class)->only(['index', 'show', 'create']);
Route::resource('jobs', JobController::class)->except(['index', 'show', 'create'])->middleware('auth'); */
Route::resource('jobs', JobController::class)->middleware('auth');

//Auth
Route::get('register', [RegisteredUserController::class, 'create']);
Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('login', [SessionController::class, 'create'])->name('login');
Route::post('login', [SessionController::class, 'store']);
Route::post('logout', [SessionController::class, 'destroy']);
