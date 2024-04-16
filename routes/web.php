<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

// contattaci
Route::get('/contattaci', [PublicController::class, 'contattaci'] )->name('form.contact');

Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');