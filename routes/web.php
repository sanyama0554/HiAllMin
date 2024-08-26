<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/mypage');
    }
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

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

Route::get('/mypage', [App\Http\Controllers\HomeController::class, 'index'])->name('mypage');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');