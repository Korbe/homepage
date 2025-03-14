<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterestContactController;

Route::post('/interest-contact', [InterestContactController::class, 'store'])->name("api.interest_contact");
