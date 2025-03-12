<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Public/Home/Home');
})->name("public.home");

Route::get('/about', function () {
    return Inertia::render('Public/About/About');
})->name("public.about");

Route::get('/projects', function () {
    return Inertia::render('Public/Projects/Projects');
})->name("public.projects");


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
