<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Public/Home/Home');
})->name("public.home");

Route::get('/homevisits', function () {
    return Inertia::render('Public/HomeVisits/HomeVisits');
})->name("public.homevisits");

Route::get('/webapps', function () {
    return Inertia::render('Public/Webapps/Webapps');
})->name("public.webapps");





Route::get('/about', function () {
    return Inertia::render('Public/About/About');
})->name("public.about");

Route::get('/projects', function () {
    return Inertia::render('Public/Projects/Projects');
})->name("public.projects");

Route::get('/uses', function () {
    return Inertia::render('Public/Uses/Uses');
})->name("public.uses");

Route::get('/impressum', function () {
    return Inertia::render('Public/Legal/Impressum');
})->name("public.imprint");

Route::get('/cookies', function () {
    return Inertia::render('Public/Legal/Cookies');
})->name("public.cookies");

// Route::get('/card', function () {
//     return Inertia::render('Public/Card/Card');
// })->name("public.card");



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::fallback(function () {
    return Inertia::render('PageNotFound');
});
