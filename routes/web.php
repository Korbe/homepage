<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Public/Home/Home');
});

Route::get('/about', function () {
    return Inertia::render('Public/About/About');
});

Route::get('/projects', function () {
    return Inertia::render('Public/Projects/Projects');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
