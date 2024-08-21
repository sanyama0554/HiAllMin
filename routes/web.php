<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/profile', function () {
    return view('profile.index');
})->middleware('auth');

Route::get('/tasks', function () {
    return view('tasks.index');
});

Route::get('/tasks/ai-assessment', function () {
    return view('tasks.ai_assessment');
});

Route::get('/tasks/listening-speaking', function () {
    return view('tasks.listening_speaking');
});

Route::get('/travel', function () {
    return view('travel.index');
});

Route::get('/sns/share', function () {
    return view('sns.share');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');